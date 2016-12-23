<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('One Column'),
  'category' => t('Gavias Layout'),
  'icon' => 'one_column.png',
  'theme' => 'one_column',
  'regions' => array(
      'content'    => 'Content',
  )
);
