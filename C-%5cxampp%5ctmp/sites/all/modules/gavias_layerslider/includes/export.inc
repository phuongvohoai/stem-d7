<?php
function gavias_layerslider_export($gid) {
  $result = new stdClass();
  $result->group = getSliderGroup($gid);
  $result->sliders = array();
  $sliders = gavias_sliders_by_group($gid);

  $i = 0;
  foreach ($sliders as $key => $slider) {
    $result->sliders[$i] = new stdClass();
    $result->sliders[$i]->title = $slider->title;
    $result->sliders[$i]->sort_index = $slider->sort_index;
    $result->sliders[$i]->group_id = $slider->group_id;
    $result->sliders[$i]->params = $slider->params;
    $result->sliders[$i]->layersparams =$slider->layersparams ;
    $result->sliders[$i]->status = $slider->status;
    $result->sliders[$i]->background_image_uri = $slider->background_image_uri;
    $result->sliders[$i]->image_content = '';
    $i++;
  }

  for ($i = 0; $i < count($result->sliders); $i++) {
    if (!empty($result->sliders[$i]->background_image_uri)) {
      $wrapper = file_stream_wrapper_get_instance_by_uri($result->sliders[$i]->background_image_uri);
      if($wrapper){
        $path = $wrapper->realpath();
        $imagebase64 = gavias_layerslider_imagetobase64($result->sliders[$i]->background_image_uri);
        $result->sliders[$i]->image_content = $imagebase64;
      }

      $layers = json_decode(base64_decode($result->sliders[$i]->layersparams));
 
      for ($j = 0; $j < count($layers); $j++) {
        if ($layers[$j]->select_content_type == 'image' && !empty($layers[$j]->image_uri)) {
          $layers[$j]->image_content = gavias_layerslider_imagetobase64($layers[$j]->image_uri);
        }
      }
    }
    
    $layers = json_encode($layers);
    $layers = base64_encode($layers);
    $result->sliders[$i]->layersparams = $layers;
  }

  $data = json_encode($result);
  $data = base64_encode($data);
//print"<pre>";
//print_r(json_decode(base64_decode($data)));die();
  header("Content-Type: text/txt");
  header("Content-Disposition: attachment; filename=gavias_layerslider_export.txt");
  //header("Content-Length: " . strlen($data));
  print $data;
  exit;
}

/**
 * Helper: convert image to string as base64 encode
 * @param type $fid
 * @return string
 */
function gavias_layerslider_imagetobase64($uri) {
  if (!$data = file_get_contents($uri)) {
    $path = file_create_url($uri);
    $data = file_get_contents($path);
  }
  return base64_encode($data);
}