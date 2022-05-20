<?php

namespace Drupal\blockgroup\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Blockgroup block.
 *
 * @Block(
 *   id = "blockgroup",
 *   admin_label = @Translation("Block Group"),
 *   category = @Translation("Block Group"),
 * )
 */
class BlockgroupBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Only supply a placeholder block. Use a pre_render callback which will
    // populate the block with the content of the proper block-group region.
    $build = [
      '#type' => 'blockgroup_pullup',
      '#key' => 'blockgroup-' . $this->getDerivativeId(),
      '#cache' => ['max-age' => 0],
    ];
    return $build;
  }

}
