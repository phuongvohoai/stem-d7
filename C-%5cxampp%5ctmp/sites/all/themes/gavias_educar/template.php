<?php
/**
 * @file
 * controls load theme.
 */
// Split funtions and stuff into seperate files for eaiser house keeping.
$theme_path = drupal_get_path('theme', 'gavias_educar');
global $theme_root, $parent_root;
$theme_root = base_path() . path_to_theme();
$parent_root = base_path() . drupal_get_path('theme', 'gavias_educar');
include_once $theme_path . '/includes/template.functions.php';
include_once $theme_path . '/includes/functions.php';
include_once $theme_path . '/includes/dynamic_style.php';

/**
 * Assign theme hook suggestions for custom templates and pass color theme setting
 */  
function gavias_educar_preprocess_page(&$vars, $hook) {
  if (isset($vars['node'])) {
    $suggest = "page__node__{$vars['node']->type}";
    $vars['theme_hook_suggestions'][] = $suggest;
  }
  
  if (arg(0) == 'taxonomy' && arg(1) == 'term' ){
    $term = taxonomy_term_load(arg(2));
    $vars['theme_hook_suggestions'][] = 'page--taxonomy--vocabulary--' . $term->vid;
  }

  if(function_exists('page_manager_get_current_page')){
    if($panel_page = page_manager_get_current_page()) {
      // Add a generic suggestion for all panel pages.
      $vars['theme_hook_suggestions'][] = 'page__panel';
      // Add the panel page machine name to the template suggestions.
      $vars['theme_hook_suggestions'][] = 'page__' . $panel_page['name'];
      // Add a body class for good measure.
      $body_classes[] = 'page-panel';
    }
  }else{
    drupal_set_message(t('Gavias: Please install <a href="https://www.drupal.org/project/ctools"><b>ctools modules</b></a> and enable Page manager module of ctools modules'), 'error');
   
  }

  $alias = drupal_get_path_alias($_GET['q']);
  if ($alias != $_GET['q']) {
    $vars['theme_hook_suggestions'][] = 'page__'. str_replace('-', '_', $alias);     
  }
}

/**
 * Override or insert variables into the html template.
 * @param $vars
 *   An array of variables to pass to the theme template.
 */
function gavias_educar_preprocess_html(&$vars) {
  global $theme, $base_url;
  global $parent_root, $language;
  $skin = theme_get_setting('theme_skin');
  if(isset($_GET['is_rtl']) && $_GET['is_rtl']){
    $language->dir = 'rtl';
  }
  drupal_add_css(drupal_get_path('theme', 'gavias_educar') . '/css/' . ($skin ? ('skins/' . $skin . '/') : '' ) . 'template.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
  if($language->dir == 'rtl'){
    drupal_add_css(drupal_get_path('theme', 'gavias_educar') . '/css/' . ($skin ? ('skins/' . $skin . '/') : '' ) . 'bootstrap-rtl.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
  }else{
    drupal_add_css(drupal_get_path('theme', 'gavias_educar') . '/css/' . ($skin ? ('skins/' . $skin . '/') : '' ) . 'bootstrap.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
  }
  if(module_exists('gavias_themer') && theme_get_setting('frontend_panel') == '1' && user_access('gavias_customize_preview')){
    gavias_load_fontend();
  }

  if(theme_get_setting('enable_custom_style') == 1 && trim(variable_get('gavias_profile'))){
       drupal_add_css(drupal_get_path('theme', 'gavias_educar') . '/customize/save/' . variable_get('gavias_profile') . '.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
  }
  $viewport = array(
     '#type' => 'html_tag',
     '#tag' => 'meta',
     '#attributes' => array(
       'name' => 'viewport',
       'content' =>  'width=device-width, initial-scale=1, maximum-scale=1.2',
     ),
     '#weight' => 1,
   );
   
   drupal_add_html_head( $viewport, 'viewport');

   // Add boxed class if layout is set that way.
   if (theme_get_setting('site_layout') == 'boxed'){
     $vars['classes_array'][] = 'boxed';
   }

   if(theme_get_setting('preloader') == '1'){
      $vars['classes_array'][] = 'js-preloader';
   }else{
      $vars['classes_array'][] = 'not-preloader';
   }
}

function gavias_educar_process_html(&$vars) {
  $vars['head_scripts'] = drupal_get_js('head_scripts');
}

/**
 * Implements hook_preprocess_region().
 */ 
function gavias_educar_preprocess_region(&$variables) {
  global $theme;
  static $wells;
  if (!isset($wells)) {
    foreach (system_region_list($theme) as $name => $title) {
      $wells[$name] = theme_get_setting('gavias_educar_region_well-' . $name);
    }
  }
  switch ($variables['region']) {
    case 'content':
      $variables['theme_hook_suggestions'][] = 'region__no_wrapper';
      break;
    case 'help':
      $variables['content'] = _gavias_educar_icon('question-sign') . $variables['content'];
      $variables['classes_array'][] = 'alert';
      $variables['classes_array'][] = 'alert-info';
      break;
  }
  if (!empty($wells[$variables['region']])) {
    $variables['classes_array'][] = $wells[$variables['region']];
  }
}

/**
*  Implements theme_css_alter().
*/
function gavias_educar_css_alter(&$css) {
  if (theme_get_setting('rtl') == 1) {
    unset($css[drupal_get_path('theme', 'gavias_educar') . '/css/bootstrap.css']);
  }
  // Remove defaults.css file.
    unset($css[drupal_get_path('module', 'system') . '/defaults.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
    unset($css[drupal_get_path('module', 'user') . '/user.css']);
    // .. etc..
}
