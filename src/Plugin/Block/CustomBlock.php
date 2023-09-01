<?php


namespace Drupal\custom_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * provides a 'Custom' block.
 * @Block(
 * id = "custom_block",
 * admin_label = @Translation("Services and dependency injection"),
 * category = @Translation("custom custom block example")
 * )
 */
 

class CustomBlock extends BlockBase {

 
  public function build() {
    $data = \Drupal::service('custom_module.dbinsert')->getData();
    return [
      '#theme' => 'my_template',
      '#data' => $data,
    ];
   }
}
?>