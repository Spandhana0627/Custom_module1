<?php

/**
 * Implements hook_theme().
 */
function custom_module_theme($existing, $type, $theme, $path) {
  return [
    'my_template' => [
      'variables' => ['data' => NULL],
    ],
  ];
}
?>