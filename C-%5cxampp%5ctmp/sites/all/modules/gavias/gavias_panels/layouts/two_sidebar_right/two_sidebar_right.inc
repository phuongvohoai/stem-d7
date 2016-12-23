<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Two Sidebar Right'),
  'category' => t('Gavias Layout'),
  'icon' => 'two_sidebar_right.png',
  'theme' => 'two_sidebar_right',
  'regions' => array(
      'content' => 'Content',
      'sidebar_1' => 'Sidebar 1',
      'sidebar_2' => 'Sidebar 2',
  )
);


