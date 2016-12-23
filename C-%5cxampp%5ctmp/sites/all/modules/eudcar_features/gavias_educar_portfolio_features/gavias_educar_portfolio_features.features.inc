<?php
/**
 * @file
 * gavias_educar_portfolio_features.features.inc
 */

/**
 * Implements hook_views_api().
 */
function gavias_educar_portfolio_features_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function gavias_educar_portfolio_features_node_info() {
  $items = array(
    'portfolio' => array(
      'name' => t('Portfolio'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
