<?php
/**
 * @file
 * gavias_educar_post_features.features.inc
 */

/**
 * Implements hook_views_api().
 */
function gavias_educar_post_features_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function gavias_educar_post_features_image_default_styles() {
  $styles = array();

  // Exported image style: small.
  $styles['small'] = array(
    'label' => 'Small (70x70)',
    'effects' => array(
      7 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 70,
          'height' => 70,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}
