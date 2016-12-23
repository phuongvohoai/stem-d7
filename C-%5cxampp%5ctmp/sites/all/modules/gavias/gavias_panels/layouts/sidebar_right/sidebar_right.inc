<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Sidebar Right'),
  'category' => t('Gavias Layout'),
  'icon' => 'sidebar_right.png',
  'theme' => 'sidebar_right',
  'regions' => array(
      'content' => 'Content',
      'sidebar' => 'Sidebar'
  )
);
