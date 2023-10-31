<?php

namespace Drupal\aen_tools\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Render leaflet map.
 */
class AenToolsController extends ControllerBase {

  /**
   * Return render array.
   */
  public function render() {
    return [
      '#type' => 'container',
      '#theme' => 'aen_tools-template',
      '#attached' => [
        'library' => [
          'aen_tools/aen',
          'leaflet/leaflet',
          'leaflet/leaflet-drupal',
        ],
      ],
    ];
  }

}
