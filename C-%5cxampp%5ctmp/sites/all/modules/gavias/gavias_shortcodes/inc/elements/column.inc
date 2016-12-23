<?php 
//column bootstrap
function shortcodes_basic_tags_shortcode_column($attrs, $text){
   $attrs = shortcode_attrs(array(
      'lg' => '12',
      'md' => '12',
      'sm' => '12'
    ),
    $attrs
  );
   return '
      <div class="col-lg-'.$attrs['lg'].' col-md-'.$attrs['md'].' col-sm-'.$attrs['sm'].'">'.$text.'</div>
   ';
}