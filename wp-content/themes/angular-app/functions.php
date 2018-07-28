<?php

// hide acf in admin when true
define('ACF_LITE', false);

function app_includes() {
  $theme = wp_get_theme();

  wp_enqueue_script('main', get_template_directory_uri() . '/dist/main.js', array(), false, true);
  wp_enqueue_script('polyfills', get_template_directory_uri() . '/dist/polyfills.js', array(), false, true);
  wp_enqueue_script('runtime', get_template_directory_uri() . '/dist/runtime.js', array(), false, true);
  wp_enqueue_script('styles', get_template_directory_uri() . '/dist/styles.js', array(), false, true);
  wp_enqueue_script('vendor', get_template_directory_uri() . '/dist/vendor.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'app_includes');