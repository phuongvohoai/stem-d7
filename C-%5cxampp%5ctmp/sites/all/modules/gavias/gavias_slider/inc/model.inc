<?php
function gavias_slider_load($sid) {
  $result = db_select('{gavias_slider}', 'd')
          ->fields('d')
          ->condition('id', $sid, '=')
          ->execute()
          ->fetchObject();
  $slideshow = new stdClass();
  if($result){
      $json = base64_decode($result->settings);
      $slideshow->settings = json_decode($json);
      $json = base64_decode($result->data);
      $slideshow->slides = json_decode($json);
      for ($i = 0; $i < count($slideshow->slides); $i++) {
        if (!empty($slideshow->slides[$i]->background_image_uri)) {
          $slideshow->slides[$i]->background_image = file_create_url($slideshow->slides[$i]->background_image_uri);
        }
      }
      if(!empty($slideshow->settings)) {
          if (!isset($slideshow->settings->hideThumbs)) {
                $slideshow->settings->hideThumbs = 0;
            }
            if (!isset($slideshow->settings->thumbWidth)) {
                $slideshow->settings->thumbWidth = 150;
            }
            if (!isset($slideshow->settings->thumbHeight)) {
                $slideshow->settings->thumbHeight = 100;
            }
            if (!isset($slideshow->settings->thumbAmount)) {
                $slideshow->settings->thumbAmount = 3;
            }
            if (!isset($slideshow->settings->dottedOverlay)) {
                $slideshow->settings->dottedOverlay = 'none';
            }
      }
    }else{
      return false;
    }
  return $slideshow;
}