<?php defined("ABSPATH") or die;

add_action('wp_default_scripts', function($scripts) {
  if (!is_admin() && !empty($scripts->registered['jquery'])) {
    $scripts->registered['jquery']->deps = array_diff(
      $scripts->registered['jquery']->deps, ['jquery-migrate']
    );
  }
});

add_action('wp_enqueue_scripts', function(){
  wp_scripts()->add_data('jquery', 'group', 1);
  wp_scripts()->add_data('jquery-core', 'group', 1);
  wp_scripts()->add_data('jquery-migrate', 'group', 1);
});
