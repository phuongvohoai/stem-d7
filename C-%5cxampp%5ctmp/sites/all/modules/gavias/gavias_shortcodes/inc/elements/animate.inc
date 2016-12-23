<?php
//alert
function shortcode_basic_tags_shortcode_animals($attrs, $text){
    $attrs = shortcode_attrs(array(
      'animation' => ''
    ),
    $attrs
  );
    return '
      <div class="animate-area animated" data_animation="'.$attrs['animation'].'">
          '.$text.'
      </div>
    ';
}