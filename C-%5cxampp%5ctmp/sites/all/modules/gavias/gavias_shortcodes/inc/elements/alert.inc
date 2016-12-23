<?php
//alert
function shortcode_basic_tags_shortcode_alert($attrs, $text){
    $attrs = shortcode_attrs(array(
      'type' => 'success',
      'title' => 'Success'
    ),
    $attrs
  );
    return '
      <div class="alert alert-'.$attrs['type'].'"><a data-dismiss="alert" class="close" type="button">×</a>
          <h4>'.$attrs['title'].'</h4>
          '.$text.'
      </div>
    ';
}