<?php

function shortcode_basic_tags_shortcode_accordions($attrs, $text){
	return '
      <div id="gavias-accordions" class="panel-group">'.$text.'</div>
    ';
}

//accordion item
function shortcode_basic_tags_shortcode_accordion($attrs, $text){
    $attrs = shortcode_attrs(array(
      'title' => ' default',
      'icon' => '',
      'class' => '',
      'expand' => false,
      'type' => 'accordions'
    ),
    $attrs
  );
    $expand = '';
    if($attrs['expand']) $expand = 'in';
    $class = shortcode_add_class($attrs['class'], 'item');
    $id=rand(1, getrandmax());
    return '
      <div class="'.$class.' panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
              <a href="#'.$id.'" class="collapsed" data-toggle="collapse" data-parent="#gavias-'.$attrs['type'].'"><span><i class="fa '.$attrs['icon'].'"></i>'.$attrs['title'].'</span></a>
            </h4>
        </div>
        <div class="panel-collapse '.$expand.'" id="'.$id.'" '.($attrs['expand']?'':'style="height: 0px;"'). '>
            <div class="panel-body">'.$text.'</div>
        </div>
    </div>
    ';
}
