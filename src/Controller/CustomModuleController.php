<?php
namespace Drupal\custom_module\Controller;
use Drupal\Core\Controller\ControllerBase;

class CustomModuleController extends ControllerBase {
    public function homePage() {
        return [
            '#markup' => 'Welcome to Drupal 9',
        ];

    }

}


