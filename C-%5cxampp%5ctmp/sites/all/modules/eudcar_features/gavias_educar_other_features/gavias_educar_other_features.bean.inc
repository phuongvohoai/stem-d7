<?php
/**
 * @file
 * gavias_educar_other_features.bean.inc
 */

/**
 * Implements hook_bean_admin_ui_types().
 */
function gavias_educar_other_features_bean_admin_ui_types() {
  $export = array();

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'tabs';
  $bean_type->label = 'Tabs';
  $bean_type->options = '';
  $bean_type->description = 'Display content columns of rows, vertical tabs, horizontal tabs content.';
  $export['tabs'] = $bean_type;

  return $export;
}
