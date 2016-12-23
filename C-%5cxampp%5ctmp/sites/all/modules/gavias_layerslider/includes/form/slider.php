<?php

function gavias_layerslider_form($gid = 0, $sid = 0) {
  $module_path = drupal_get_path('module', 'gavias_layerslider');
  $theme_name = variable_get('theme_default', NULL);
  $theme_path =  $theme_name = drupal_get_path('theme',$theme_name);
  require_once $module_path . '/includes/utilities.php';
   include_once drupal_get_path('module', 'media') . '/wysiwyg_plugins/media.inc';
  media_include_browser_js();
  
  $capltionclasses_str = implode(' ', $captionclasses);
  drupal_add_js('var $captionclasses = \''.$capltionclasses_str.'\';','inline');
  drupal_add_library('system', 'ui.draggable');
  drupal_add_library('system', 'ui.dropable');
  drupal_add_library('system', 'ui.sortable');
  drupal_add_library('system', 'ui.dialog');
  drupal_add_library('system', 'ui.tabs');
  drupal_add_css($module_path.'/vendor/font-awesome/css/font-awesome.min.css');
  drupal_add_css($module_path.'/vendor/notify/styles/metro/notify-metro.css');
  drupal_add_js($module_path . '/vendor/notify/notify.min.js');
  drupal_add_js($module_path . '/vendor/notify/styles/metro/notify-metro.js');

  drupal_add_css($module_path.'/assets/css/admin.min.css');
  drupal_add_css($theme_path.'/css/sliderlayer.css');
  drupal_add_css($module_path.'/vendor/revolution/css/layers.css');
  drupal_add_css($module_path.'/vendor/revolution/css/settings.css');
  
  drupal_add_css($module_path.'/vendor/jrange/nouislider.min.css');
  drupal_add_js($module_path . '/vendor/jrange/nouislider.min.js');
  $group = getSliderGroup($gid);
  $group_settings = ((isset($group->params) && $group->params) ? json_decode(base64_decode($group->params)):'{}');
 
  $sliderlayers = gavias_layerslider_load($sid);
  $layers = (isset($sliderlayers->layers) && $sliderlayers->layers) ? json_encode($sliderlayers->layers) : 'new Array()';

  $js = 'var $group_settings = '. json_encode($group_settings) .';var $layers = ' . $layers . '; var $settings = '.((isset($sliderlayers->settings) && $sliderlayers->settings) ? json_encode($sliderlayers->settings):'new Array()').'; var $c_layer=0;';
  drupal_add_js($js, 'inline');
  drupal_add_js($module_path . '/assets/js/slider.min.js');
  ob_start();
  include $module_path . '/templates/backend/slider.php';
  $content = ob_get_clean();
  return $content;
}

function gavias_layerslider_save() {
  header('Content-type: application/json');
  $gid = $_REQUEST['gid'];
  $sid = $_REQUEST['sid'];
  $title = $_REQUEST['title'];
  $sort_index = $_REQUEST['sort_index'];
  $status = $_REQUEST['status'];
  $settings = $_REQUEST['settings'];
  $datalayers = $_REQUEST['datalayers'];
  $background_image_uri = $_REQUEST['background_image_uri'];
  if($sid > 0){
    db_update("gavias_sliderlayers")
        ->fields(array(
          ' sort_index' => $sort_index,
          'status' => $status,
          'title' => $title,
          'params'  => $settings,
          'layersparams' => $datalayers,
          'background_image_uri' => $background_image_uri
        ))
        ->condition('id', $sid, '=')
        ->execute();
    $result = array(
      'data' => 'insert saved',
      'action' => 'edit'
    );
  }else{
    $sid = db_insert("gavias_sliderlayers")
            ->fields(array(
                'sort_index' => $sort_index,
                'status' => $status,
                'title' => $title,
                'group_id' => $gid,
                'params'  => $settings,
                'layersparams' => $datalayers,
                'background_image_uri' => $background_image_uri
            ))
            ->execute();
     $result = array(
        'data' => 'insert saved',
        'sid'  => $sid,
        'gid'  => $gid,
        'action' => 'add'
    );
    drupal_set_message("SliderLayers has been created");
  }
  print json_encode($result);
  exit(0);
}


function gavias_sliderlayers_delete($gid, $sid) {
  return drupal_get_form('gavias_sliderlayers_delete_confirm_form');
}

function gavias_sliderlayers_delete_confirm_form($form_state) {
  $form = array();
  $form['gid'] = array(
    '#type'=>'hidden',
    '#default_value' => arg(3)
  );
  $form['sid'] = array(
    '#type'=>'hidden',
    '#default_value' => arg(5)
  );
  return confirm_form($form, 'Do you really want to detele this slider?', 'admin/gavias_layerslider/sliders/' . arg(3), NULL, 'Delete', 'Cancel');
}

function gavias_sliderlayers_delete_confirm_form_submit($form, &$form_state){

  $gid = $form['gid']['#value'];
  $sid = $form['sid']['#value'];
  db_delete('gavias_sliderlayers')
          ->condition('group_id', $gid)
          ->condition('id', $sid)
          ->execute(); 
  drupal_set_message('The slider has been deleted');
  drupal_goto('admin/gavias_layerslider/sliders/'.$gid);
}