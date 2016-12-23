<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Two Sidebar Left'),
  'category' => t('Gavias Layout'),
  'icon' => 'two_sidebar_left.png',
  'theme' => 'two_sidebar_left',
  'regions' => array(
      'sidebar_1' => 'Sidebar 1',
      'sidebar_2' => 'Sidebar 2',
      'content' => 'Content',
  )
);
