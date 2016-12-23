<?php
function gavias_layerslider_load($sid) {
  $result = db_select('{gavias_sliderlayers}', 'd')
          ->fields('d')
          ->condition('id', $sid, '=')
          ->orderBy('sort_index', 'DESC')
          ->execute()
          ->fetchObject();
  $sliderlayers = new stdClass();
  if($result){
    $sliderlayers->title =  $result->title;
    $sliderlayers->status =  $result->status;
    $sliderlayers->sort_index =  $result->sort_index;
    $json = base64_decode($result->layersparams);
    $sliderlayers->layers = json_decode($json);  
    $json = base64_decode($result->params);
    $sliderlayers->settings = json_decode($json);   
  }
  return $sliderlayers;
}

function gavias_sliders_by_group($gid) {
  $result = db_select('{gavias_sliderlayers}', 'd')
          ->fields('d')
          ->condition('group_id', $gid, '=')
          ->orderBy('sort_index', 'DESC')
          ->execute();
  return $result;
}

function gavias_slider_load_frontend($sid) {
  $group = db_select('{gavias_slidergroups}', 'd')
          ->fields('d')
          ->condition('id', $sid, '=')
          ->execute()
          ->fetchObject();

  $slides = db_select('{gavias_sliderlayers}', 'd')
            ->fields('d')
            ->condition('group_id', $sid, '=')
            ->orderBy('sort_index', 'DESC')
            ->execute();     
           //print "<pre>"; print_r($slides);die();
  $slideshow = new stdClass();
  //Setting group
  $json = base64_decode($group->params);
  //print_r($json);die();
  $slideshow->settings = json_decode($json);

  //Setting layers
  $i=0;
  foreach ($slides as $slide) {
    $json_slide = base64_decode($slide->params);
    $slideparams = json_decode($json_slide);
    $slideshow->slides[$i] = $slideparams;
    if (!empty($slideshow->slides[$i]->background_image_uri)) {
      $slideshow->slides[$i]->background_image = file_create_url($slideshow->slides[$i]->background_image_uri);
    }

    $json_layers = base64_decode($slide->layersparams);
    $slidelayers = json_decode($json_layers);
    $slideshow->slides[$i]->layers = $slidelayers;
    if (!empty($slideshow->slides[$i]->background_image_uri)) {
      $slideshow->slides[$i]->background_image = file_create_url($slideshow->slides[$i]->background_image_uri);
    }

    for ($j = 0; $j < count($slideshow->slides[$i]->layers); $j++) {
      if ($slideshow->slides[$i]->layers[$j]->type == 'image' && !empty($slideshow->slides[$i]->layers[$j]->image_uri)) {
        $slideshow->slides[$i]->layers[$j]->image = file_create_url($slideshow->slides[$i]->layers[$j]->image_uri);
      }
    }
    $i++;
  }
  return $slideshow;
}

function getListSliderGroups(){
    $result = db_select('{gavias_slidergroups}', 'd')
          ->fields('d')
          ->execute()
          ->fetchObject();
    return $result;
}

function getSliderGroup($gid){
    $result = db_select('{gavias_slidergroups}', 'd')
          ->fields('d')
          ->condition('id', $gid, '=')
          ->execute()
          ->fetchObject();
    return $result;
}