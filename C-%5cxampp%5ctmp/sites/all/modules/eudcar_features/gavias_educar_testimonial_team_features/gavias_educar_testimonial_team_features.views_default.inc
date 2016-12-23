<?php
/**
 * @file
 * gavias_educar_testimonial_team_features.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function gavias_educar_testimonial_team_features_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'team';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Team';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Team';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '8';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = '<div class="block-description">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus mauris</div>';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  /* Field: Content: Team Avata */
  $handler->display->display_options['fields']['field_team_avata']['id'] = 'field_team_avata';
  $handler->display->display_options['fields']['field_team_avata']['table'] = 'field_data_field_team_avata';
  $handler->display->display_options['fields']['field_team_avata']['field'] = 'field_team_avata';
  $handler->display->display_options['fields']['field_team_avata']['label'] = '';
  $handler->display->display_options['fields']['field_team_avata']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_team_avata']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_team_avata']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_team_avata']['settings'] = array(
    'image_style' => 'team_avata_style',
    'image_link' => '',
  );
  /* Field: Content: Team facebook */
  $handler->display->display_options['fields']['field_team_facebook']['id'] = 'field_team_facebook';
  $handler->display->display_options['fields']['field_team_facebook']['table'] = 'field_data_field_team_facebook';
  $handler->display->display_options['fields']['field_team_facebook']['field'] = 'field_team_facebook';
  $handler->display->display_options['fields']['field_team_facebook']['label'] = '';
  $handler->display->display_options['fields']['field_team_facebook']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_team_facebook']['element_label_colon'] = FALSE;
  /* Field: Content: Team twitter */
  $handler->display->display_options['fields']['field_team_twitter']['id'] = 'field_team_twitter';
  $handler->display->display_options['fields']['field_team_twitter']['table'] = 'field_data_field_team_twitter';
  $handler->display->display_options['fields']['field_team_twitter']['field'] = 'field_team_twitter';
  $handler->display->display_options['fields']['field_team_twitter']['label'] = '';
  $handler->display->display_options['fields']['field_team_twitter']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_team_twitter']['element_label_colon'] = FALSE;
  /* Field: Content: Team youtube */
  $handler->display->display_options['fields']['field_team_youtube']['id'] = 'field_team_youtube';
  $handler->display->display_options['fields']['field_team_youtube']['table'] = 'field_data_field_team_youtube';
  $handler->display->display_options['fields']['field_team_youtube']['field'] = 'field_team_youtube';
  $handler->display->display_options['fields']['field_team_youtube']['label'] = '';
  $handler->display->display_options['fields']['field_team_youtube']['element_label_colon'] = FALSE;
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = '';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="image">
    <div class="avata">
            [field_team_avata]
     </div>
     <div class="team-social">
         <div class="content">
               <a class="facebook" href="[field_team_facebook]"><i class="fa fa-facebook"></i></a>
               <a class="twitter" href="[field_team_twitter]"><i class="fa fa-twitter"></i></a>
              <a class="youtube" href="[field_team_youtube]"><i class="fa fa-youtube-square"></i></a>
          </div> 
      </div>
</div>';
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
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
    'team' => 'team',
  );

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Meet the team';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Team Avata */
  $handler->display->display_options['fields']['field_team_avata']['id'] = 'field_team_avata';
  $handler->display->display_options['fields']['field_team_avata']['table'] = 'field_data_field_team_avata';
  $handler->display->display_options['fields']['field_team_avata']['field'] = 'field_team_avata';
  $handler->display->display_options['fields']['field_team_avata']['label'] = '';
  $handler->display->display_options['fields']['field_team_avata']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_team_avata']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_team_avata']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_team_avata']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Team facebook */
  $handler->display->display_options['fields']['field_team_facebook']['id'] = 'field_team_facebook';
  $handler->display->display_options['fields']['field_team_facebook']['table'] = 'field_data_field_team_facebook';
  $handler->display->display_options['fields']['field_team_facebook']['field'] = 'field_team_facebook';
  $handler->display->display_options['fields']['field_team_facebook']['label'] = '';
  $handler->display->display_options['fields']['field_team_facebook']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_team_facebook']['element_label_colon'] = FALSE;
  /* Field: Content: Team twitter */
  $handler->display->display_options['fields']['field_team_twitter']['id'] = 'field_team_twitter';
  $handler->display->display_options['fields']['field_team_twitter']['table'] = 'field_data_field_team_twitter';
  $handler->display->display_options['fields']['field_team_twitter']['field'] = 'field_team_twitter';
  $handler->display->display_options['fields']['field_team_twitter']['label'] = '';
  $handler->display->display_options['fields']['field_team_twitter']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_team_twitter']['element_label_colon'] = FALSE;
  /* Field: Content: Team youtube */
  $handler->display->display_options['fields']['field_team_youtube']['id'] = 'field_team_youtube';
  $handler->display->display_options['fields']['field_team_youtube']['table'] = 'field_data_field_team_youtube';
  $handler->display->display_options['fields']['field_team_youtube']['field'] = 'field_team_youtube';
  $handler->display->display_options['fields']['field_team_youtube']['label'] = '';
  $handler->display->display_options['fields']['field_team_youtube']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_team_youtube']['element_label_colon'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Team Job */
  $handler->display->display_options['fields']['field_team_job']['id'] = 'field_team_job';
  $handler->display->display_options['fields']['field_team_job']['table'] = 'field_data_field_team_job';
  $handler->display->display_options['fields']['field_team_job']['field'] = 'field_team_job';
  $handler->display->display_options['fields']['field_team_job']['label'] = '';
  $handler->display->display_options['fields']['field_team_job']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_team_job']['element_label_colon'] = FALSE;
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = '';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="image">
    <div class="avata">
            [field_team_avata]
     </div>
</div>
<div class="team-content">
      <div class="name">[title]</div>
      <div class="job">[field_team_job]</div>
     <div class="team-social">
             <a class="facebook" href="[field_team_facebook]"><i class="fa fa-facebook"></i></a>
             <a class="twitter" href="[field_team_twitter]"><i class="fa fa-twitter"></i></a>
             <a class="youtube" href="[field_team_youtube]"><i class="fa fa-youtube-square"></i></a> 
      </div>
</div>

';
  $handler->display->display_options['fields']['nothing']['element_type'] = 'div';
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block_1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Team - 2';
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['css_class'] = 'team-view-2';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
  $handler->display->display_options['fields']['body']['settings'] = array(
    'trim_length' => '100',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Team Job */
  $handler->display->display_options['fields']['field_team_job']['id'] = 'field_team_job';
  $handler->display->display_options['fields']['field_team_job']['table'] = 'field_data_field_team_job';
  $handler->display->display_options['fields']['field_team_job']['field'] = 'field_team_job';
  $handler->display->display_options['fields']['field_team_job']['label'] = '';
  $handler->display->display_options['fields']['field_team_job']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_team_job']['element_label_colon'] = FALSE;
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = '';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="team-job">
    <span class="title"> [title]</span> / <span class="job">[field_team_job]</span>
</div>';
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
  /* Field: Content: Team Avata */
  $handler->display->display_options['fields']['field_team_avata']['id'] = 'field_team_avata';
  $handler->display->display_options['fields']['field_team_avata']['table'] = 'field_data_field_team_avata';
  $handler->display->display_options['fields']['field_team_avata']['field'] = 'field_team_avata';
  $handler->display->display_options['fields']['field_team_avata']['label'] = '';
  $handler->display->display_options['fields']['field_team_avata']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_team_avata']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_team_avata']['settings'] = array(
    'image_style' => 'employee_avata',
    'image_link' => '',
  );
  /* Field: Global: View result counter */
  $handler->display->display_options['fields']['counter']['id'] = 'counter';
  $handler->display->display_options['fields']['counter']['table'] = 'views';
  $handler->display->display_options['fields']['counter']['field'] = 'counter';
  $handler->display->display_options['fields']['counter']['label'] = '';
  $handler->display->display_options['fields']['counter']['exclude'] = TRUE;
  $handler->display->display_options['fields']['counter']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['counter']['counter_start'] = '1';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
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
    'team' => 'team',
  );
  /* Filter criterion: Broken/missing handler */
  $handler->display->display_options['filters']['field_team_tags_tid']['id'] = 'field_team_tags_tid';
  $handler->display->display_options['filters']['field_team_tags_tid']['table'] = 'field_data_field_team_tags';
  $handler->display->display_options['filters']['field_team_tags_tid']['field'] = 'field_team_tags_tid';
  $handler->display->display_options['filters']['field_team_tags_tid']['value'] = array(
    7 => '7',
  );
  $handler->display->display_options['block_description'] = 'Team - 2';
  $export['team'] = $view;

  $view = new view();
  $view->name = 'testimonials';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Testimonials';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Testimonials';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '5';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Content: Image */
  $handler->display->display_options['fields']['field_testimonial_image']['id'] = 'field_testimonial_image';
  $handler->display->display_options['fields']['field_testimonial_image']['table'] = 'field_data_field_testimonial_image';
  $handler->display->display_options['fields']['field_testimonial_image']['field'] = 'field_testimonial_image';
  $handler->display->display_options['fields']['field_testimonial_image']['label'] = '';
  $handler->display->display_options['fields']['field_testimonial_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_testimonial_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_testimonial_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Name */
  $handler->display->display_options['fields']['field_testimonial_name']['id'] = 'field_testimonial_name';
  $handler->display->display_options['fields']['field_testimonial_name']['table'] = 'field_data_field_testimonial_name';
  $handler->display->display_options['fields']['field_testimonial_name']['field'] = 'field_testimonial_name';
  $handler->display->display_options['fields']['field_testimonial_name']['label'] = '';
  $handler->display->display_options['fields']['field_testimonial_name']['element_label_colon'] = FALSE;
  /* Field: Content: Job */
  $handler->display->display_options['fields']['field_testimonial_job']['id'] = 'field_testimonial_job';
  $handler->display->display_options['fields']['field_testimonial_job']['table'] = 'field_data_field_testimonial_job';
  $handler->display->display_options['fields']['field_testimonial_job']['field'] = 'field_testimonial_job';
  $handler->display->display_options['fields']['field_testimonial_job']['label'] = '';
  $handler->display->display_options['fields']['field_testimonial_job']['element_label_colon'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
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
    'testimonial' => 'testimonial',
  );

  /* Display: Testimonials v1 */
  $handler = $view->new_display('block', 'Testimonials v1', 'testimonials_v1');

  /* Display: Testimonials v2 */
  $handler = $view->new_display('block', 'Testimonials v2', 'testimonials_v2');
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Image */
  $handler->display->display_options['fields']['field_testimonial_image']['id'] = 'field_testimonial_image';
  $handler->display->display_options['fields']['field_testimonial_image']['table'] = 'field_data_field_testimonial_image';
  $handler->display->display_options['fields']['field_testimonial_image']['field'] = 'field_testimonial_image';
  $handler->display->display_options['fields']['field_testimonial_image']['label'] = '';
  $handler->display->display_options['fields']['field_testimonial_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_testimonial_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_testimonial_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Name */
  $handler->display->display_options['fields']['field_testimonial_name']['id'] = 'field_testimonial_name';
  $handler->display->display_options['fields']['field_testimonial_name']['table'] = 'field_data_field_testimonial_name';
  $handler->display->display_options['fields']['field_testimonial_name']['field'] = 'field_testimonial_name';
  $handler->display->display_options['fields']['field_testimonial_name']['label'] = '';
  $handler->display->display_options['fields']['field_testimonial_name']['element_label_colon'] = FALSE;
  /* Field: Content: Job */
  $handler->display->display_options['fields']['field_testimonial_job']['id'] = 'field_testimonial_job';
  $handler->display->display_options['fields']['field_testimonial_job']['table'] = 'field_data_field_testimonial_job';
  $handler->display->display_options['fields']['field_testimonial_job']['field'] = 'field_testimonial_job';
  $handler->display->display_options['fields']['field_testimonial_job']['label'] = '';
  $handler->display->display_options['fields']['field_testimonial_job']['element_label_colon'] = FALSE;
  $export['testimonials'] = $view;

  return $export;
}
