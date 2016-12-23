
<?php
function shortcodes_basic_tags_shortcode_tabs($attrs, $text){
  global $gavias_tabs_divs;
    extract($attrs = shortcode_attrs(array(
      'id' => '',
        'class' => ''
    ),
    $attrs
  ));
  $output = '<div class="'.$class.' tabs-section">';
  $output .= '<ul class="nav nav-tabs "  ';
  if(!empty($id)) $output .= 'id="'.$id.'"';
    $output.='>'.$text.'</ul>';
    $output.= '<div class="tab-content">'.$gavias_tabs_divs.'</div>';
    $output.='</div>';
    $gavias_tabs_divs = '';
    return $output; 
}

function shortcodes_basic_tags_shortcode_tab($attrs, $text){
    global $gavias_tabs_divs;
    extract(shortcode_attrs(array(  
        'id' => '',
        'title' => '',
        'active' => false,
        'icon' => ''
    ), $attrs));  
  if(empty($id)) $id = 'tab_item_'.rand(100,999);
   $activeClass = $active ? 'active' :'';
   $iconClass = $icon ? '<i class="fa '.$icon.'"></i>':'';  
  $output = '
        <li class="'.$activeClass.'">
            <a data-toggle="tab" href="#'.$id.'">'.$iconClass.$title.'</a>
        </li>
    ';
    $gavias_tabs_divs.= '<div class="tab-pane '.$activeClass.'" id="'.$id.'">'.$text.'</div>';
    return $output;
}

