<?php
/**
 * @file
 * gavias_educar_portfolio_features.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function gavias_educar_portfolio_features_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'portfolio';
  $view->description = 'Block, Page  (Content type Porfolio)';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'portfolio';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Portfolio 3 columns';
  $handler->display->display_options['use_more_always'] = TRUE;
  $handler->display->display_options['use_more_text'] = '';
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '6';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['pager']['options']['id'] = '0';
  $handler->display->display_options['pager']['options']['quantity'] = '9';
  $handler->display->display_options['pager']['options']['tags']['previous'] = 'previous';
  $handler->display->display_options['pager']['options']['tags']['next'] = 'next';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = '<div class="block-description">Morbi accumsan ipsum velit  Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra</div>';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  /* Header: Global: View area */
  $handler->display->display_options['header']['view']['id'] = 'view';
  $handler->display->display_options['header']['view']['table'] = 'views';
  $handler->display->display_options['header']['view']['field'] = 'view';
  $handler->display->display_options['header']['view']['view_to_insert'] = 'portfolio_filter:block';
  /* Field: Content: Portfolio image */
  $handler->display->display_options['fields']['field_portfolio_image']['id'] = 'field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['table'] = 'field_data_field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['field'] = 'field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['label'] = '';
  $handler->display->display_options['fields']['field_portfolio_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_portfolio_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_portfolio_image']['settings'] = array(
    'image_style' => 'medium',
    'image_link' => '',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
  $handler->display->display_options['fields']['body']['settings'] = array(
    'trim_length' => '200',
  );
  /* Field: Content: Portfolio Tags */
  $handler->display->display_options['fields']['field_portfolio_tags']['id'] = 'field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['table'] = 'field_data_field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['field'] = 'field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['label'] = '';
  $handler->display->display_options['fields']['field_portfolio_tags']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_portfolio_tags']['delta_offset'] = '0';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'portfolio' => 'portfolio',
  );

  /* Display: Page Portfolio 2 columns  */
  $handler = $view->new_display('page', 'Page Portfolio 2 columns ', 'page_portfolio_2column');
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Header: Global: View area */
  $handler->display->display_options['header']['view']['id'] = 'view';
  $handler->display->display_options['header']['view']['table'] = 'views';
  $handler->display->display_options['header']['view']['field'] = 'view';
  $handler->display->display_options['header']['view']['view_to_insert'] = 'portfolio_filter:block';
  $handler->display->display_options['path'] = 'portfolio-2columns';
  $handler->display->display_options['menu']['title'] = 'Our Project';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'main-menu';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;

  /* Display: Portfolio Block Version 1 */
  $handler = $view->new_display('block', 'Portfolio Block Version 1', 'portfolio_v1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Portfolio 4 columns';
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '8';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Portfolio image */
  $handler->display->display_options['fields']['field_portfolio_image']['id'] = 'field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['table'] = 'field_data_field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['field'] = 'field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['label'] = '';
  $handler->display->display_options['fields']['field_portfolio_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_portfolio_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_portfolio_image']['settings'] = array(
    'image_style' => 'medium',
    'image_link' => '',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
  $handler->display->display_options['fields']['body']['settings'] = array(
    'trim_length' => '200',
  );
  /* Field: Content: Portfolio Tags */
  $handler->display->display_options['fields']['field_portfolio_tags']['id'] = 'field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['table'] = 'field_data_field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['field'] = 'field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['label'] = '';
  $handler->display->display_options['fields']['field_portfolio_tags']['element_label_colon'] = FALSE;

  /* Display: Page Portfolio 3 columns  */
  $handler = $view->new_display('page', 'Page Portfolio 3 columns ', 'page_portfolio_3column');
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Header: Global: View area */
  $handler->display->display_options['header']['view']['id'] = 'view';
  $handler->display->display_options['header']['view']['table'] = 'views';
  $handler->display->display_options['header']['view']['field'] = 'view';
  $handler->display->display_options['header']['view']['view_to_insert'] = 'portfolio_filter:block';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Portfolio image */
  $handler->display->display_options['fields']['field_portfolio_image']['id'] = 'field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['table'] = 'field_data_field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['field'] = 'field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['label'] = '';
  $handler->display->display_options['fields']['field_portfolio_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_portfolio_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_portfolio_image']['settings'] = array(
    'image_style' => 'medium',
    'image_link' => '',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
  $handler->display->display_options['fields']['body']['settings'] = array(
    'trim_length' => '200',
  );
  /* Field: Content: Portfolio Tags */
  $handler->display->display_options['fields']['field_portfolio_tags']['id'] = 'field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['table'] = 'field_data_field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['field'] = 'field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['label'] = '';
  $handler->display->display_options['fields']['field_portfolio_tags']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_portfolio_tags']['delta_offset'] = '0';
  $handler->display->display_options['path'] = 'portfolio';
  $handler->display->display_options['menu']['title'] = 'Our Courses';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'main-menu';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;

  /* Display: Portfolio Block Version 2 */
  $handler = $view->new_display('block', 'Portfolio Block Version 2', 'portfolio_v2');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Our Project';
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '6';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Portfolio image */
  $handler->display->display_options['fields']['field_portfolio_image']['id'] = 'field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['table'] = 'field_data_field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['field'] = 'field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['label'] = '';
  $handler->display->display_options['fields']['field_portfolio_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_portfolio_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_portfolio_image']['settings'] = array(
    'image_style' => 'medium',
    'image_link' => '',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
  $handler->display->display_options['fields']['body']['settings'] = array(
    'trim_length' => '200',
  );
  /* Field: Content: Portfolio Tags */
  $handler->display->display_options['fields']['field_portfolio_tags']['id'] = 'field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['table'] = 'field_data_field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['field'] = 'field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['label'] = '';
  $handler->display->display_options['fields']['field_portfolio_tags']['element_label_colon'] = FALSE;

  /* Display: Portfolio Block Version 3 */
  $handler = $view->new_display('block', 'Portfolio Block Version 3', 'portfolio_v3');
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['defaults']['use_more'] = FALSE;
  $handler->display->display_options['defaults']['use_more_always'] = FALSE;
  $handler->display->display_options['defaults']['use_more_always'] = FALSE;
  $handler->display->display_options['use_more_always'] = TRUE;
  $handler->display->display_options['defaults']['use_more_text'] = FALSE;
  $handler->display->display_options['use_more_text'] = '';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '6';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = '<div class="block-description">Morbi accumsan ipsum velit  Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra</div>';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Portfolio image */
  $handler->display->display_options['fields']['field_portfolio_image']['id'] = 'field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['table'] = 'field_data_field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['field'] = 'field_portfolio_image';
  $handler->display->display_options['fields']['field_portfolio_image']['label'] = '';
  $handler->display->display_options['fields']['field_portfolio_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_portfolio_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_portfolio_image']['settings'] = array(
    'image_style' => 'medium',
    'image_link' => '',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
  $handler->display->display_options['fields']['body']['settings'] = array(
    'trim_length' => '200',
  );
  /* Field: Content: Portfolio Tags */
  $handler->display->display_options['fields']['field_portfolio_tags']['id'] = 'field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['table'] = 'field_data_field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['field'] = 'field_portfolio_tags';
  $handler->display->display_options['fields']['field_portfolio_tags']['label'] = '';
  $handler->display->display_options['fields']['field_portfolio_tags']['element_label_colon'] = FALSE;
  $export['portfolio'] = $view;

  return $export;
}
