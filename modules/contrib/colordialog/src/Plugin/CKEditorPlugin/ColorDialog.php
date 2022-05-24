<?php

namespace Drupal\colordialog\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;
use Drupal\ckeditor\CKEditorPluginContextualInterface;

/**
 * Defines the "colordialog" plugin.
 *
 * @CKEditorPlugin(
 *   id = "colordialog",
 *   label = @Translation("CKEditor Color Dialog"),
 * )
 */
class ColorDialog extends CKEditorPluginBase implements CKEditorPluginContextualInterface {

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    if (\Drupal::hasService('library.libraries_directory_file_finder')) {
      $path = \Drupal::service('library.libraries_directory_file_finder')->find('colordialog/plugin.js');
    }
    else {
      $path = DRUPAL_ROOT . '/libraries/colordialog/plugin.js';
    }
    return $path;
  }

  /**
   * {@inheritdoc}
   */
  public function isEnabled(Editor $editor) {
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [];
  }

}
