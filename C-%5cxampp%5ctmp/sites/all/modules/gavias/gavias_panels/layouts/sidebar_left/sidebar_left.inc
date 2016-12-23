<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Sidebar Left'),
  'category' => t('Gavias Layout'),
  'icon' => 'sidebar_left.png',
  'theme' => 'sidebar_left',
  'regions' => array(
      'content' => 'Content',
      'sidebar' => 'Sidebar'
  )
);
