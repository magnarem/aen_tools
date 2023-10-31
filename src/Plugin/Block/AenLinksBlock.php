<?php

namespace Drupal\aen_tools\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;

/**
 * Provides AeN Tools Links  Block.
 *
 * @Block(
 *   id = "aen_tools_block",
 *   admin_label = @Translation("Aen Tools Links Block"),
 *   category = @Translation("AeN"),
 * )
 */
class AenLinksBlock extends BlockBase implements BlockPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function build() {

    return [
      '#markup' => '<ul><li><a href="/aen/tools">Nansen Legacy Tools</a></li><li><a href="/aen/search">Sample search</a></li><li><a href="/aen/stations">Stations search</a></li></ul>',
    ];
  }

}
