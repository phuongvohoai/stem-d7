<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Three Columns'),
  'category' => t('Gavias Layout'),
  'icon' => 'three_columns.png',
  'theme' => 'official_three_columns',
  'css' => 'three_columns.css',
  'regions' => array(
      'column_1'    => 'Column 1',
      'column_2'    => 'Column 2',
      'column_3'    => 'Column 3',
  )
);
