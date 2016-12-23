<?php
function gavias_slidergroups_form($slideid = 0) {
  $slideid = arg(2);
  if (is_numeric($slideid)) {
    $slide = db_select('{gavias_slidergroups}', 'd')
       ->fields('d')
       ->condition('id', $slideid, '=')
       ->execute()
       ->fetchAssoc();
  } else {
    $slide = array('id' => 0, 'title' => '');
  }
  $form = array();
  $form['id'] = array(
      '#type' => 'hidden',
      '#default_value' => $slide['id']
  );
  $form['title'] = array(
      '#type' => 'textfield',
      '#title' => 'Title',
      '#default_value' => $slide['title']
  );
  $form['submit'] = array(
      '#type' => 'submit',
      '#value' => 'Save'
  );
  return $form;
}

function gavias_slidergroups_form_submit($form, $form_state) {
  if ($form['id']['#value']) {
    $sid = db_update("gavias_slidergroups")
            ->fields(array(
                'title' => $form['title']['#value'],
            ))
            ->condition('id', $form['id']['#value'])
            ->execute();
    drupal_set_message("Slider Group '{$form['title']['#value']}' has been updated");
  } else {
    $sid = db_insert("gavias_slidergroups")
            ->fields(array(
                'title' => $form['title']['#value'],
                'params' => '',
            ))
            ->execute();
    drupal_set_message("Slider Group '{$form['title']['#value']}' has been created");
  }
  drupal_goto('admin/gavias_slidergroups');
}

function gavias_slidergroups_config($gid){
  $module_path = drupal_get_path('module', 'gavias_layerslider');
  require_once $module_path . '/includes/utilities.php';
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
  
  $settings = getSliderGroup($gid);
  //print_r($settings);die();
  $js = 'var $settings = '.((isset($settings->params) && $settings->params) ? base64_decode(json_encode($settings->params)):'null').';';
  drupal_add_js($js, 'inline');
  drupal_add_js($module_path . '/assets/js/group.min.js');
  ob_start();
  include drupal_get_path('module', 'gavias_layerslider') . '/templates/backend/group.php';
  $content = ob_get_clean();
  return $content;
}

function gavias_slidergroups_config_save($gid){
  header('Content-type: application/json');
  $gid = $_REQUEST['gid'];
  $settings = $_REQUEST['settings'];
 
  db_update("gavias_slidergroups")->fields(array(
      'params'  => $settings,
  ))->condition('id', $gid, '=')->execute();
  $result = array(
    'data' => 'update saved'
  );
  
  drupal_set_message("Group Slider has been updated");
  print json_encode($result);
  exit(0);
}

function gavias_slidergroups_delete($gid) {
  return drupal_get_form('gavias_slidergroups_delete_confirm_form');
}

function gavias_slidergroups_delete_confirm_form($form_state) {
  $form = array();
  $form['id'] = array(
    '#type'=>'hidden',
    '#default_value' => arg(2)
  );
  return confirm_form($form, 'Do you really want to detele this group slider and sliders for group ?', 'admin/gavias_slidergroups', NULL, 'Delete', 'Cancel');
}

function gavias_slidergroups_delete_confirm_form_submit($form, &$form_state){
  $gid = $form['id']['#value'];
  db_delete('gavias_slidergroups')
          ->condition('id', $gid)
          ->execute();
  db_delete('gavias_sliderlayers')
          ->condition('group_id', $gid)
          ->execute(); 
  drupal_set_message('The group slider has been deleted');
  drupal_goto('admin/gavias_slidergroups');
}