<?php

function gavias_layerslider_import_form() {
  $form['title'] = array(
      '#type' => 'textfield',
      '#title' => t('Title')
  );
  $form['data'] = array(
      '#name' => 'data',
      '#type' => 'textarea',
      '#title' => t('Import code'),
      '#description' => t('Paste the export code here'),
  );
  $form['submit'] = array(
      '#type' => 'submit',
      '#value' => 'Import'
  );
  return $form;
}

function gavias_layerslider_import_form_submit(&$form, $form_state) {
  $title = $form['title']['#value'];
  $data = $form['data']['#value'];
  $json = base64_decode($data);
  $slideshow = json_decode($json);
  //print '<pre>';print_r($slideshow);die();
  $gid = db_insert("gavias_slidergroups")
      ->fields(array(
          'title' => $title ? $title : 'Slideshow title',
          'params' => (isset($slideshow->group->params) && $slideshow->group->params) ? $slideshow->group->params : ''
      ))
      ->execute();
    
    $i = 0; 
    foreach ($slideshow->sliders as $key => $slider) {
      if(isset($slideshow->sliders[$i]) && $slideshow->sliders[$i]){
        if (isset($slideshow->sliders[$i]->background_image_uri) && $slideshow->sliders[$i]->background_image_uri) {
          if (isset($slideshow->sliders[$i]->image_content)) {
            gavias_layerslider_base64toimage($slideshow->sliders[$i]->image_content, $slideshow->sliders[$i]->background_image_uri);
            unset($slideshow->sliders[$i]->image_content);
          }
        }

        if(isset($slideshow->sliders[$i]) && isset($slideshow->sliders[$i]->background_image_uri) && $slideshow->sliders[$i]->background_image_uri){
          $slideshow->sliders[$i]->background_image = file_create_url($slideshow->sliders[$i]->background_image_uri);
        }

        $layers = '';
        if(isset($slider->layersparams) && $slider->layersparams){
          $layers = json_decode(base64_decode($slider->layersparams));

          for ($j = 0; $j < count($layers); $j++) {
            if(isset($layers[$j]) && $layers[$j]){
              if (isset($layers[$j]->select_content_type) && $layers[$j]->select_content_type == 'image' && !empty($layers[$j]->image_uri)) {
                if(isset($layers[$j]->image_content) && $layers[$j]->image_content)
                  gavias_layerslider_base64toimage($layers[$j]->image_content, $layers[$j]->image_uri);
                  $layers[$j]->image = file_create_url($layers[$j]->image_uri);
                  unset($layers[$j]->image_content);
              }
            }  
          }
        }
        $slider->layersparams = base64_encode(json_encode($layers));
      }  
      $i++;
      //print $slider->layersparams;die();
      db_insert("gavias_sliderlayers")
        ->fields(array(
          'sort_index' => (isset($slider->sort_index) && $slider->sort_index) ? $slider->sort_index : $i,
          'status' => (isset($slider->status) && $slider->status) ? $slider->status : 1,
          'title' => (isset($slider->title) && $slider->title) ? $slider->title : 'Title',
          'group_id' => $gid,
          'params'  => (isset($slider->params) && $slider->params) ? $slider->params : '', 
          'layersparams' => (isset($slider->layersparams) && $slider->layersparams) ? $slider->layersparams : '',
          'background_image_uri' => (isset($slider->background_image_uri) && $slider->background_image_uri) ? $slider->background_image_uri : '',
      ))
      ->execute();
    }
	
  drupal_set_message('Import was successful');
  drupal_goto('admin/gavias_slidergroups');
}

function gavias_layerslider_base64toimage($str, $file) {
	$str = base64_decode($str);
  file_unmanaged_save_data($str, $file, FILE_EXISTS_REPLACE);
	return $file;
}