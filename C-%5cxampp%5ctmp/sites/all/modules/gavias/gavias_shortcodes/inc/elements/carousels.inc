<?php 
//carousels
function shortcode_basic_tags_shortcode_carousels($attrs, $text){
  $r_id = rand();
    return '
     <div data-ride="carousel" class="carousel slide carousel-shortcode" id="carousel-'.$r_id.'">
        <div class="carousel-inner">
          '.$text.'
        </div>
        <a data-slide="prev" href="#carousel-'.$r_id.'" class="left carousel-control"></a>
        <a data-slide="next" href="#carousel-'.$r_id.'" class="right carousel-control"></a>
      </div>  
    ';
}

//carousels item
function shortcode_basic_tags_shortcode_carousel_item($attrs, $text){
  $attrs = shortcode_attrs(array(
      'img' => '',
      'active'=>'0'
    ),
    $attrs
  );
  $active='';
  if($attrs['active']) $active = 'active'; 
  return '
    <div class="item '.$active .'">
      <img src="'.base_path().$attrs['img'].'" alt="" />
      <div class="carousel-caption">'.$text.'</div>
    </div>
  ';
}
