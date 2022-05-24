<?php

namespace Drupal\Tests\tmgmt_mygengo\FunctionalJavascript;

use Drupal;
use Drupal\Component\Serialization\Json;
use Drupal\Tests\tmgmt\Functional\TMGMTTestBase;
use Drupal\tmgmt\Entity\Translator;
use Drupal\Core\Url;
use Drupal\tmgmt\Entity\RemoteMapping;
use Drupal\tmgmt\Entity\JobItem;
use Drupal\tmgmt\Entity\Job;

/**
 * Tests the Gengo translator plugin integration.
 *
 * @group tmgmt_mygengo
 */
class MyGengoTest extends TMGMTTestBase {

  /**
   * @var \Drupal\tmgmt\Entity\Translator $translator
   */
  protected $translator;

  public static $modules = array(
    'tmgmt_mygengo',
    'tmgmt_mygengo_test',
  );

  public function setUp(): void {
    parent::setUp();
    $this->addLanguage('de');
    $this->translator = Translator::load('mygengo');
    \Drupal::configFactory()->getEditable('tmgmt_mygengo.settings')->set('use_mock_service', TRUE)->save();
  }

  /**
   * Tests basic API methods of the plugin.
   */
  public function testAPI() {

    $job = $this->createJob();
    $standard = array(
      'quality' => 'standard',
    );
    $job->settings = $standard;
    $job->translator = $this->translator->id();
    \Drupal::state()->set('tmgmt.test_source_data',  array(
      'wrapper' => array(
        '#text' => 'Hello world',
        '#label' => 'Wrapper label',
      ),
    ));
    $item = $job->addItem('test_source', 'test', '1');
    $item->save();

    // The translator should not be available at this point because we didn't
    // define an API key yet.
    $this->assertFalse($job->canRequestTranslation()->getSuccess());

    $this->translator = $job->getTranslator();

    // The gengo API does not require a valid private key to request languages.
    // We explicitly test this behavior here as the mock is implemented in the
    // same way.
    $this->translator->setSetting('api_public_key', 'correct key');
    $this->translator->setSetting('api_private_key', 'wrong key');
    $this->translator->save();

    $this->translator->clearLanguageCache();

    $this->assertTrue($job->canRequestTranslation()->getSuccess());
    $job->requestTranslation();

    // Should have been rejected due to the wrong api key.
    $this->assertTrue($job->isRejected());
    $messages = $job->getMessages();
    $message = end($messages);
    $this->assertEquals('error', $message->getType());
    $this->assertStringContainsString('Job has been rejected', $message->getMessage(),
      t('Job should be rejected as we provided wrong api key.'));

    // Save a correct api key.
    $this->translator->setSetting('api_public_key', 'correct key');
    $this->translator->setSetting('api_private_key', 'correct key');
    $this->translator->save();
    $this->assertTrue($job->canRequestTranslation()->getSuccess());

    $this->translator->clearLanguageCache();

    // Create a new job. Workaround for https://www.drupal.org/node/2695217.
    $job = $this->createJob();
    $standard = array(
      'quality' => 'standard',
    );
    $job->settings = $standard;
    $job->translator = $this->translator->id();
    $item = $job->addItem('test_source', 'test', '1');

    // Make sure the translator returns the correct supported target languages.
    $languages = $job->getTranslator()->getSupportedTargetLanguages('en');
    $this->assertTrue(isset($languages['de']));
    $this->assertTrue(isset($languages['es']));
    $this->assertFalse(isset($languages['it']));
    $this->assertFalse(isset($languages['en']));

    // Note that requesting translation goes with default
    // gengo_auto_approve = 1
    $job->requestTranslation();
    // And therefore the job should be active.
    $this->assertTrue($job->isActive());
    foreach ($job->getItems() as $item) {
      $this->assertTrue($item->isActive());
    }

    // Create a gengo response of translated and approved job.
    $post['job'] = Json::encode(tmgmt_mygengo_test_build_response_job(
      'Hello world',
      'Hallo Welt',
      'approved',
      'standard',
      implode('][', array($job->id(), $item->id(), 'wrapper')),
      $item->getData()['wrapper']['#label']
    ));

    $action = Url::fromRoute('tmgmt_mygengo.callback')->setOptions(array('absolute' => TRUE))->toString();
    $out = \Drupal::httpClient()->request('POST', $action, array('form_params' => $post));

    // Response should be empty if everything went ok.
    $this->assertSession()->statusCodeEquals(200);
    $this->assertTrue(empty($out->getBody()->getContents()));

    // Clear job item caches.
    \Drupal::entityTypeManager()->getStorage('tmgmt_job_item')->resetCache();

    // Verify the label/slug.
    $this->refreshVariables();
    $data = Drupal::state()->get('tmgmt_mygengo_test_last_gengo_response', FALSE);
    // Find the key under which we can access the job received:
    $jobs = $data->jobs;
    $job_keys = array_keys($jobs);
    $key = array_shift($job_keys);
    $this->assertEquals($data->jobs[$key]['slug'], $item->getSourceLabel() . ' > ' . $item->getData(['wrapper'],'#label'));

    // Now it should be needs review.
    foreach ($job->getItems() as $item) {
      $this->assertTrue($item->isNeedsReview());
    }
    $items = $job->getItems();
    $item = end($items);
    $data = $item->getData();
    $this->assertEquals('Hallo Welt', $data['wrapper']['#translation']['#text']);

    // Test machine translation.
    $job = $this->createJob();
    $machine = array(
      'quality' => 'machine',
    );
    $job->settings = $machine;
    $job->translator = $this->translator->id();
    $job->save();
    \Drupal::state()->set('tmgmt.test_source_data', array(
      'wrapper' => array(
        '#label' => 'Parent label',
        'subwrapper1' => array(
          '#text' => 'Hello world',
          '#label' => 'Sub label 1',
        ),
        'subwrapper2' => array(
          '#text' => 'Hello world again',
          '#label' => 'Sub label 2',
        ),
      ),
      'no_label' => array(
        '#text' => 'No label',
      ),
      'escaping' => array(
        '#text' => 'A text with a @placeholder',
        '#escape' => array(
          14 => array('string' => '@placeholder'),
        )
      ),
    ));
    $item = $job->addItem('test_source', 'test', '1');
    $item->save();

    // Machine translation should immediately go to needs review.
    $job->requestTranslation();
    foreach ($job->getItems() as $item) {
      $this->assertTrue($item->isNeedsReview());
    }
    $items = $job->getItems();
    $item = end($items);
    $data = $item->getData();
    // If received a job item with tier machine the mock service will prepend
    // mt_de_ to the source text.
    $this->assertEquals('mt_de_Hello world', $data['wrapper']['subwrapper1']['#translation']['#text']);
    $this->assertEquals('mt_de_Hello world again', $data['wrapper']['subwrapper2']['#translation']['#text']);
    $this->assertEquals('mt_de_A text with a @placeholder', $data['escaping']['#translation']['#text']);

    // Verify generated labels/slugs.
    $this->refreshVariables();
    $data = \Drupal::state()->get('tmgmt_mygengo_test_last_gengo_response', FALSE);
    $jobs = $data->jobs;

    $subwrapper1_key = $job->id() . '][' . $item->id() . '][wrapper][subwrapper1';
    $no_label_key = $job->id() . '][' . $item->id() . '][no_label';
    $escaping_key = $job->id() . '][' . $item->id() . '][escaping';
    $this->assertEquals($item->getSourceLabel() . ' > Parent label > Sub label 1', $jobs[$subwrapper1_key]['slug']);
    $this->assertEquals($item->getSourceLabel(), $jobs[$no_label_key]['slug']);
    $this->assertEquals('A text with a @placeholder', $jobs[$escaping_key]['body_src']);

    // Test positions.
    $position = 0;
    foreach ($jobs as $response_job) {
      $this->assertEquals($position++, $response_job['position']);
    }
  }

  public function testOrderModeCallback() {
    \Drupal::state()->set('tmgmt_mygengo_test_order_mode', 1);

    $this->translator->setSetting('api_public_key', 'correct key');
    $this->translator->setSetting('api_private_key', 'correct key');
    $this->translator->save();

    // Test machine translation.
    $job = $this->createJob();
    $standard = array(
      'quality' => 'standard',
    );
    $job->settings = $standard;
    $job->translator = $this->translator->id();
    $job->save();
    \Drupal::state()->set('tmgmt.test_source_data', array(
      'wrapper' => array(
        '#label' => 'Parent label',
        'subwrapper1' => array(
          '#text' => 'Hello world',
          '#label' => 'Sub label 1',
        ),
        'subwrapper2' => array(
          '#text' => 'Hello world again',
          '#label' => 'Sub label 2',
        ),
      ),
      'no_label' => array(
        '#text' => 'No label',
      ),
    ));
    $item = $job->addItem('test_source', 'test', '1');
    $item->save();

    $job->requestTranslation();
    $this->assertTrue($job->isActive());
    $this->refreshVariables();
    $orders = \Drupal::state()->get('tmgmt_mygengo_test_orders', array());
    $order_id = key($orders);
    $remotes = RemoteMapping::loadByLocalData($job->id());
    // Remotes should have been created with the order id and without job id.
    $this->assertEquals(3, count($remotes), '3 remote mappings created.');

    $remotes = RemoteMapping::loadByLocalData($job->id(), $item->id(), 'wrapper][subwrapper1');
    $remote = reset($remotes);
    $this->assertEquals($remote->getRemoteIdentifier1(), $order_id);
    $this->assertEquals('', $remote->getRemoteIdentifier2());
    $this->assertEquals($item->id(), $remote->getJobItem()->id());

    $remotes = RemoteMapping::loadByLocalData($job->id(), $item->id(), 'no_label');
    $remote = reset($remotes);
    $this->assertEquals( $order_id, $remote->getRemoteIdentifier1());
    $this->assertEquals('', $remote->getRemoteIdentifier2(), '');
    $this->assertEquals($item->id(), $remote->getJobItem()->id());

    // Create a gengo response of the job.
    // Create a gengo response of translated and approved job.
    /* $post['job'] = Json::encode(tmgmt_mygengo_test_build_response_job(
      'Hello world',
      'Hallo Welt',
      'approved',
      'standard',
      implode('][', array($job->id(), $item->id(), 'wrapper')),
      $item->getData()['wrapper']['#label']
    ));
    */

    $gengo_job = $orders[$order_id][$job->id() . '][' . $item->id() . '][wrapper][subwrapper1'];
    $post['job'] = Json::encode($gengo_job);

    $action = Url::fromRoute('tmgmt_mygengo.callback')->setOptions(array('absolute' => TRUE))->toString();
    $out = \Drupal::httpClient()->request('POST', $action, array('form_params' => $post));

    // Response should be empty if everything went ok.
    $this->assertSession()->statusCodeEquals(200);
    $this->assertTrue(empty($out->getBody()->getContents()));

    \Drupal::service('entity_type.manager')->getStorage('tmgmt_remote')->resetCache();
    $remotes = RemoteMapping::loadByLocalData($job->id(), $item->id(), 'wrapper][subwrapper1');
    $remote = reset($remotes);
    $this->assertEquals($order_id, $remote->getRemoteIdentifier1());
    $this->assertEquals($gengo_job['job_id'], $remote->getRemoteIdentifier2());
    $this->assertEquals($gengo_job['unit_count'], $remote->word_count->value);
    $this->assertEquals($gengo_job['credits'], $remote->getRemoteData('credits'));
    $this->assertEquals($gengo_job['tier'], $remote->getRemoteData('tier'));
  }

  public function testOrderModePullJob() {
    \Drupal::state()->set('tmgmt_mygengo_test_order_mode', 1);
    $this->loginAsAdmin();
    $this->translator->setSetting('api_public_key', 'correct key');
    $this->translator->setSetting('api_private_key', 'correct key');
    $this->translator->save();
    $job = $this->createJob();
    $standard = array(
      'quality' => 'standard',
    );
    $job->settings = $standard;
    $job->translator = $this->translator->id();
    $job->save();
    \Drupal::state()->set('tmgmt.test_source_data', array(
      'title' => array(
        '#text' => 'Hello world',
        '#label' => 'Title',
      ),
      'body' => array(
        '#text' => 'This is some testing content',
        '#label' => 'Body',
      ),
    ));
    $item = $job->addItem('test_source', 'test', '1');
    $item->save();
    \Drupal::state()->set('tmgmt.test_source_data', array(
      'title' => array(
        '#text' => 'Hello world 2',
        '#label' => 'Title',
      ),
      'body' => array(
        '#text' => 'This is some testing content 2',
        '#label' => 'Body',
      ),
      'another_field' => array(
        '#text' => 'More testing',
        '#label' => 'Another',
      ),
    ));
    $item2 = $job->addItem('test_source', 'test', '2');
    $item2->save();

    $job->requestTranslation();

    // Add the jobs as a response.
    $this->refreshVariables();
    $orders = \Drupal::state()->get('tmgmt_mygengo_test_orders', array());
    $order_id = key($orders);
    \Drupal::state()->set('tmgmt_mygengo_test_last_gengo_response', (object) array('jobs' => $orders[$order_id]));

    // Pull jobs from gengo.
    $this->drupalPostForm('admin/tmgmt/jobs/' . $job->id(), array(), t('Pull translations'));
    $this->assertSession()->pageTextContains(t('All available translations from Gengo have been pulled.'));

    // Check the updated mappings of item 1.
    $remotes = RemoteMapping::loadByLocalData($job->id(), $item->id());
    $this->assertEquals(2, count($remotes), '2 remotes for item 1');

    $gengo_job = $orders[$order_id][$job->id() . '][' . $item->id() . '][body'];

    \Drupal::service('entity_type.manager')->getStorage('tmgmt_remote')->resetCache();
    $remotes = RemoteMapping::loadByLocalData($job->id(), $item->id(), 'body');
    $remote = reset($remotes);
    $this->assertEquals($order_id, $remote->getRemoteIdentifier1());
    $this->assertEquals($gengo_job['job_id'], $remote->getRemoteIdentifier2());
    $this->assertEquals($gengo_job['unit_count'], $remote->word_count->value);
    $this->assertEquals($gengo_job['credits'], $remote->getRemoteData('credits'));
    $this->assertEquals($gengo_job['tier'], $remote->getRemoteData('tier'));

    // And item 2.
    $remotes = RemoteMapping::loadByLocalData($job->id(), $item2->id());
    $this->assertEquals(3, count($remotes), '3 remotes for item 2');
    $gengo_job = $orders[$order_id][$job->id() . '][' . $item2->id() . '][body'];

    \Drupal::service('entity_type.manager')->getStorage('tmgmt_remote')->resetCache();
    $remotes = RemoteMapping::loadByLocalData($job->id(), $item2->id(), 'body');
    $remote = reset($remotes);
    $this->assertEquals($order_id, $remote->getRemoteIdentifier1());
    $this->assertEquals($gengo_job['job_id'], $remote->getRemoteIdentifier2());
    $this->assertEquals($gengo_job['unit_count'], $remote->word_count->value);
    $this->assertEquals($gengo_job['credits'], $remote->getRemoteData('credits'));
    $this->assertEquals($gengo_job['tier'], $remote->getRemoteData('tier'));
  }

  public function testAvailableStatus() {
    $this->loginAsAdmin();

    // Make sure we have correct keys.
    $this->translator->setSetting('api_public_key', 'correct key');
    $this->translator->setSetting('api_private_key', 'correct key');

    $this->translator->save();

    $job = $this->createJob();
    // Set quality to machine so it gets translated right away.
    $machine = array(
      'quality' => 'machine',
    );
    $job->settings = $machine;
    $job->translator = $this->translator->id();
    $job->save();
    \Drupal::state()->set('tmgmt.test_source_data', array(
      'wrapper' => array(
        '#label' => 'Parent label',
        'subwrapper' => array(
          '#text' => 'Hello world',
          '#label' => 'Sub label 1',
        ),
      ),
    ));
    $item = $job->addItem('test_source', 'test', '1');
    $item->save();

    $job->requestTranslation();

    // Make sure machine translation was received.
    \Drupal::service('entity_type.manager')->getStorage('tmgmt_job_item')->resetCache();
    $items = $job->getItems();
    $item = end($items);
    $data = $item->getData();
    $this->assertEquals('mt_de_Hello world', $data['wrapper']['subwrapper']['#translation']['#text']);

    // Create another job with "same source" text. The translator service will
    // return an existing translation with status available.
    $job = $this->createJob();
    // Tell the mock service to return available translation.
    $availablestandard = array(
      'quality' => 'availablestandard',
    );
    $job->settings = $availablestandard;
    $job->translator = $this->translator->id();
    $job->save();
    \Drupal::state()->set('tmgmt.test_source_data', array(
      'wrapper' => array(
        '#label' => 'Text label',
        '#text' => 'Lazy-Loading Some text that has been submitted and translated.',
      ),
    ));
    $item = $job->addItem('test_source', 'test', '1');
    $item->save();

    $job->requestTranslation();

    // See if available translation from gengo has updated our translation.
    \Drupal::service('entity_type.manager')->getStorage('tmgmt_job_item')->resetCache();
    $items = $job->getItems();
    $item = end($items);
    $data = $item->getData();
    $this->assertEquals('Translated Some text that has been submitted and translated.', $data['wrapper']['#translation']['#text']);
  }

  /**
   * Tests that duplicated strings can be translated correctly.
   */
  public function testDuplicateStrings() {
    $this->loginAsAdmin();

    // Make sure we have correct keys.
    $this->translator->setSetting('api_public_key', 'correct key');
    $this->translator->setSetting('api_private_key', 'correct key');

    $this->translator->save();

    $job = $this->createJob();
    // Set quality to machine so it gets translated right away.
    // @todo Add tests for standard.
    $machine = array(
      'quality' => 'machine',
    );
    $job->settings = $machine;
    $job->translator = $this->translator->id();
    $job->save();
    \Drupal::state()->set('tmgmt.test_source_data', array(
      'wrapper' => array(
        '#label' => 'Parent label',
        'duplicate1' => array(
          '#text' => 'This text is a duplicate',
          '#label' => 'Duplicate label 1',
        ),
        'duplicate2' => array(
          '#text' => 'This text is a duplicate',
          '#label' => 'Duplicate label 2',
        ),
      ),
    ));
    $item1 = $job->addItem('test_source', 'test', '1');
    $item1->save();
    \Drupal::state()->set('tmgmt.test_source_data', array(
      'wrapper' => array(
        '#label' => 'Parent label',
        'duplicate1' => array(
          '#text' => 'Not duplicate but same key',
          '#label' => 'Not duplicate',
        ),
        'real_duplicate' => array(
          '#text' => 'This text is a duplicate',
          '#label' => 'Duplicate label 3',
        ),
      ),
    ));
    $item2 = $job->addItem('test_source', 'test', '2');
    $item2->save();

    $job->requestTranslation();

    // Make sure the duplicated and not duplicated texts are translated.
    \Drupal::service('entity_type.manager')->getStorage('tmgmt_job_item')->resetCache();
    [$item1, $item2] = array_values($job->getItems());

    // Item 1.
    $this->assertTrue($item1->isNeedsReview());
    $data = $item1->getData();
    $this->assertEquals('mt_de_This text is a duplicate', $data['wrapper']['duplicate1']['#translation']['#text']);
    $this->assertEquals('mt_de_This text is a duplicate', $data['wrapper']['duplicate2']['#translation']['#text']);

    // Item 2.
    $data = $item2->getData();
    $this->assertTrue($item2->isNeedsReview());
    $this->assertEquals('mt_de_This text is a duplicate', $data['wrapper']['real_duplicate']['#translation']['#text']);
    $this->assertEquals('mt_de_Not duplicate but same key', $data['wrapper']['duplicate1']['#translation']['#text']);
  }

  public function testComments() {
    $this->loginAsAdmin();

    // Create job with two job items.
    $this->translator->setSetting('api_public_key', 'correct key');
    $this->translator->setSetting('api_private_key', 'correct key');
    $this->translator->save();
    $job = $this->createJob();
    $standard = array(
      'quality' => 'standard',
    );
    $job->settings = $standard;
    $job->translator = $this->translator->id();
    $job->save();
    \Drupal::state()->set('tmgmt.test_source_data', array(
      'title' => array(
        '#text' => 'Hello world',
        '#label' => 'Title',
      ),
      'body' => array(
        '#text' => 'This is some testing content',
        '#label' => 'Body',
      ),
    ));
    $item = $job->addItem('test_source', 'test', '1');
    $item->save();
    \Drupal::state()->set('tmgmt.test_source_data', array(
      'title' => array(
        '#text' => 'Nice day',
        '#label' => 'Title',
      ),
      'body' => array(
        '#text' => 'It is nice day out there',
        '#label' => 'Body',
      ),
    ));
    $item = $job->addItem('test_source', 'test', '2');
    $item->save();

    // Request translation which also must create remote job mappings.
    $job->requestTranslation();

    // Get mapping for first data item of second job item -> Title "Nice day".
    $remotes = RemoteMapping::loadByLocalData($job->id(), $item->id(), 'title');
    $remote = reset($remotes);
    $this->drupalPostForm('admin/tmgmt/items/' . $item->id(), array(), '✉');
    $this->assertSession()->pageTextContains(t('New comment'));
    $comment = $this->randomMachineName();
    $edit = array(
      $remote->getRemoteIdentifier2() . '_comment' => $comment,
    );
    $this->drupalPostForm(NULL, $edit, t('Submit comment'));

    // Reload the review form again and check if comment text is present.
    $this->drupalGet('admin/tmgmt/items/' . $item->id());
    $this->assertSession()->pageTextContains($comment);

    // Put first data item (Title "Nice day") into translated status so we can
    // request a revision.
    /* @var \Drupal\tmgmt_mygengo\Plugin\tmgmt\Translator\MyGengoTranslator $plugin */
    $plugin = $job->getTranslator()->getPlugin();
    $data = array(
      'status' => 'reviewable',
      'body_tgt' => 'Nice day translated',
    );
    $key = $item->id() . '][' . $remote->data_item_key->value;
    $plugin->saveTranslation($job, $key, $data);

    // Request a review.
    $comment = $this->randomMachineName();
    $this->drupalPostForm('admin/tmgmt/items/' . $item->id(), array(), '✍');
    $edit = array(
      $remote->getRemoteIdentifier2() . '_comment' => $comment,
    );
    $this->drupalPostForm(NULL, $edit, t('Request revision'));

    $job = Job::load(($job->id()));
    $data = $job->getData(\Drupal::service('tmgmt.data')->ensureArrayKey($key));
    // Test the data item status - should be back to pending.
    $this->assertEquals(TMGMT_DATA_ITEM_STATE_PENDING, $data[$item->id()]['#status']);
    // Reload the review form again and check if comment text is present.
    $this->drupalGet('admin/tmgmt/items/' . $item->id());
    $this->assertSession()->pageTextContains($comment);
  }

  public function testPullJob() {
    $this->loginAsAdmin();
    $this->translator->setSetting('api_public_key', 'correct key');
    $this->translator->setSetting('api_private_key', 'correct key');
    $this->translator->save();
    $job = $this->createJob();
    $standard = array(
      'quality' => 'standard',
    );
    $job->settings = $standard;
    $job->translator = $this->translator->id();
    $job->save();
    \Drupal::state()->set('tmgmt.test_source_data', array(
      'title' => array(
        '#text' => 'Hello world',
        '#label' => 'Title',
      ),
      'body' => array(
        '#text' => 'This is some testing content',
        '#label' => 'Body',
      ),
    ));
    $item = $job->addItem('test_source', 'test', '1');
    $item->save();

    $job->requestTranslation();
    $this->refreshVariables();

    // Load fake gengo response and simulate the that the title job
    // gets translated.
    $data = \Drupal::state()->get('tmgmt_mygengo_test_last_gengo_response');
    $key = $job->id() . '][' . $item->id() . '][title';
    $data->jobs[$key]['status'] = 'approved';
    $data->jobs[$key]['body_tgt'] = 'Title translated';
    \Drupal::state()->set('tmgmt_mygengo_test_last_gengo_response', $data);

    // Pull jobs from gengo.
    $this->drupalPostForm('admin/tmgmt/jobs/' . $job->id(), array(), t('Pull translations'));
    $this->assertSession()->pageTextContains(t('All available translations from Gengo have been pulled.'));

    // Reload item data.
    \Drupal::service('entity_type.manager')->getStorage('tmgmt_job_item')->resetCache();
    $item = JobItem::load($item->id());
    $item_data = $item->getData();

    // Title should be translated by now.
    $this->assertEquals('Title translated', $item_data['title']['#translation']['#text']);
    $this->assertEquals(TMGMT_DATA_ITEM_STATE_TRANSLATED, $item_data['title']['#status']);
    // Body should be untouched.
    $this->assertTrue(empty($item_data['body']['#translation']));
    $this->assertEquals(TMGMT_DATA_ITEM_STATE_PENDING, $item_data['body']['#status']);
  }

  public function testGengoCheckoutForm() {
    $this->loginAsAdmin();
    $this->translator->setSetting('api_public_key', 'correct key');
    $this->translator->setSetting('api_private_key', 'correct key');
    $this->translator->save();
    $job = $this->createJob();
    $standard = array(
      'quality' => 'standard',
    );
    $job->settings = $standard;
    $job->translator = $this->translator->id();
    $job->save();
    \Drupal::state()->set('tmgmt.test_source_data', array(
      'title' => array(
        '#text' => 'Hello world',
        '#label' => 'Title',
      ),
      'body' => array(
        '#text' => 'This is some testing content',
        '#label' => 'Body',
      ),
    ));
    $item = $job->addItem('test_source', 'test', '1');
    $item->save();

    $this->drupalGet('admin/tmgmt/jobs/' . $job->id());
    // The quote service returns two jobs each worth 2.
    $this->assertSession()->elementContains('css', 'div#edit-settings-price-quote', '4');

    // The quote service returns two jobs each having 2 words.
    $this->assertSession()->elementContains('css', 'div#edit-settings-price-quote', '4');

    // The account balance service returns static value of 25.32 USD.
    $this->assertSession()->elementContains('css', 'div#edit-settings-remaining-credits', '25.32 USD');

    $eta = $this->xpath('//div[@id=:id]', array(':id' => 'edit-settings-eta'));
    // The quote service returns ETA of now + one day.
    $out = $eta[0]->getOuterHtml();
    // Check both cases to prevent case when we are here at the minute border
    // and one second ahead of the page render.
    $check_1 = strpos($out, \Drupal::service('date.formatter')->format(time() + 60 * 60 * 24, "long")) !== FALSE;
    $check_2 = strpos($out, \Drupal::service('date.formatter')->format((time() + 60 * 60 * 24) - 1, "long")) !== FALSE;
    $this->assertTrue($check_1 || $check_2);
  }

  /**
   * Tests the UI of the plugin.
   */
  public function testGengoUi() {
    $this->loginAsAdmin();
    $this->drupalGet('admin/tmgmt/translators/manage/mygengo');

    // Try to connect with invalid credentials.
    $edit = [
      'settings[api_public_key]' => 'wrong key',
      'settings[api_private_key]' => 'wrong key',
    ];
    $this->drupalPostForm(NULL, $edit, t('Connect'));
    $this->assertSession()->pageTextContains(t('The "Gengo API Public key" is not correct.'));

    // Test connection with valid credentials.
    $edit = [
      'settings[api_public_key]' => 'correct key',
      'settings[api_private_key]' => 'correct key',
    ];
    $this->drupalPostForm(NULL, $edit, t('Connect'));
    $this->assertSession()->pageTextContains('Successfully connected!');

    // Assert that default remote languages mappings were updated.
    $this->assertSession()->optionExists('edit-remote-languages-mappings-en', 'en');
    $this->assertSession()->optionExists('edit-remote-languages-mappings-de', 'de');

    $this->drupalPostForm(NULL, [], t('Save'));
    $this->assertSession()->pageTextContainsOnce(t('@label configuration has been updated.', ['@label' => $this->translator->label()]));
  }

}
