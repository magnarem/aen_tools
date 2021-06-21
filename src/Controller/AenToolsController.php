<?php
namespace Drupal\aen_tools\Controller;

use Drupal\Core\Controller\ControllerBase;

class AenToolsController extends ControllerBase {

	public function render() {
		  return [
            '#type' => 'container',
	    '#theme' => 'aen_tools-template',
	    '#attached' => [
              'library' => [
                'aen_tools/aen',
              ],
	    ],
    	];
	
	
	}
}
