<?php
/**
 * @file
 * gavias_educar_teacher_features.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function gavias_educar_teacher_features_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'teacher';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Teacher';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Teacher';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '5';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = '<div class="block-description">Morbi accumsan ipsum velit Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit aptent taciti sociosqu ad litora</div>';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  /* Field: Content: Teacher image */
  $handler->display->display_options['fields']['field_teacher_image']['id'] = 'field_teacher_image';
  $handler->display->display_options['fields']['field_teacher_image']['table'] = 'field_data_field_teacher_image';
  $handler->display->display_options['fields']['field_teacher_image']['field'] = 'field_teacher_image';
  $handler->display->display_options['fields']['field_teacher_image']['label'] = '';
  $handler->display->display_options['fields']['field_teacher_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_teacher_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_teacher_image']['settings'] = array(
    'image_style' => 'thumbnail',
    'image_link' => '',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Teacher Job */
  $handler->display->display_options['fields']['field_teacher_job']['id'] = 'field_teacher_job';
  $handler->display->display_options['fields']['field_teacher_job']['table'] = 'field_data_field_teacher_job';
  $handler->display->display_options['fields']['field_teacher_job']['field'] = 'field_teacher_job';
  $handler->display->display_options['fields']['field_teacher_job']['label'] = '';
  $handler->display->display_options['fields']['field_teacher_job']['element_label_colon'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
  $handler->display->display_options['fields']['body']['settings'] = array(
    'trim_length' => '120',
  );
  /* Field: Content: Link */
  $handler->display->display_options['fields']['view_node']['id'] = 'view_node';
  $handler->display->display_options['fields']['view_node']['table'] = 'views_entity_node';
  $handler->display->display_options['fields']['view_node']['field'] = 'view_node';
  $handler->display->display_options['fields']['view_node']['label'] = '';
  $handler->display->display_options['fields']['view_node']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['view_node']['text'] = 'View profile';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'teacher' => 'teacher',
  );

  /* Display: Teacher Grid Block */
  $handler = $view->new_display('block', 'Teacher Grid Block', 'teacher_grid');

  /* Display: Teacher Carousel Block */
  $handler = $view->new_display('block', 'Teacher Carousel Block', 'teacher_carousel');

  /* Display: Teacher Carousel Block v2 */
  $handler = $view->new_display('block', 'Teacher Carousel Block v2', 'teacher_carousel_v2');
  $handler->display->display_options['defaults']['header'] = FALSE;

  /* Display: Page Teacher Grid */
  $handler = $view->new_display('page', 'Page Teacher Grid', 'page_teacher_grid');
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '6';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['pager']['options']['id'] = '0';
  $handler->display->display_options['pager']['options']['quantity'] = '9';
  $handler->display->display_options['defaults']['header'] = FALSE;
  $handler->display->display_options['path'] = 'teachers';
  $export['teacher'] = $view;

  return $export;
}
