<?php
//alert
function shortcodes_basic_tags_shortcode_img($attrs, $text){
    $attrs = shortcode_attrs(array(
      'path' => '',
    ),
    $attrs
  );
    return '
   		<img src="'.base_path().$attrs['path'].'" title="'.$text.'" />
    ';
}