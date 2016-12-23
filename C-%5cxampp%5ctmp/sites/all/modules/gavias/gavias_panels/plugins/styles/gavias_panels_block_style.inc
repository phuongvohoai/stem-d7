<?php
/**
 * @file
 * Panel style for the Gavias theme.
 */

/**
 * Implementation of hook_panels_style_info().
 */
function gavias_panels_gavias_panels_block_style_panels_styles() {
    return array(
        'title' => t('Gavias Panel Block style'),
        'description' => t('Panel Block style for the Gavias theme.'),
        'render pane' => 'gavias_panels_block_style_render_pane',
        'render region' => 'gavias_panels_block_style_render_region',
        'pane settings form' => 'gavias_panels_block_style_settings_form',
        'hook theme' => array(
            'gavias_panels_block' => array(
              'variables' => array('content' => NULL),
              'path' => drupal_get_path('module', 'gavias_panels') . '/templates',
              'template' => 'gavias-panels-block',
            ),
          ),
    );
}

/**
 * Render callback.
 *
 * @ingroup themeable
 */
function theme_gavias_panels_block_style_render_region($vars) {
    return implode($vars['panes']);
}

/**
 * Form callback.
 */
function gavias_panels_block_style_settings_form($settings) {
    /* Wrapper ID*/
    $form['wrapper_id'] = array(
        '#type' => 'textfield',
        '#title' => t('Wrapper ID'),
        '#description' => t('The class to provide on the wrapper, outside the pane.'),
        '#default_value' => (isset($settings['wrapper_id'])) ? $settings['wrapper_id'] : ''
    );
    /* Wrapper Classes*/
    $form['wrapper_classes'] = array(
        '#type' => 'textfield',
        '#title' => t('Wrapper Classes'),
        '#description' => t('The class to provide on the wrapper, outside the pane.'),
        '#default_value' => (isset($settings['wrapper_classes'])) ? $settings['wrapper_classes'] : ''
    );

    // background position
    $form['row_style']= array(
        '#type' => 'select',
        '#title' => t('Layout Style'),
        '#options' => array(
            'container'      => 'Boxed',
            'fullwidth' => 'Fullwidth',
        ),
        '#default_value' => (isset($settings['row_style'])) ? $settings['row_style'] : 'container',
    );

    // background position
    $form['animation']= array(
        '#type' => 'select',
        '#title' => t('Animation'),
        '#options' => array(
            ''      => '-- None --',
            'bounce' => 'bounce',
            'flash' => 'flash',
            'pulse' => 'pulse',
            'rubberBand' => 'rubberBand',
            'shake' => 'shake',
            'swing' => 'swing',
            'tada' => 'tada',
            'wobble' => 'wobble',
            'jello' => 'jello',
            'bounceIn' => 'bounceIn',
            'bounceInDown' => 'bounceInDown',
            'bounceInLeft' => 'bounceInLeft',
            'bounceInRight' => 'bounceInRight',
            'bounceInUp' => 'bounceInUp',
            'fadeIn' => 'fadeIn',
            'fadeInDown' => 'fadeInDown',
            'fadeInDownBig' => 'fadeInDownBig',
            'fadeInLeft' => 'fadeInLeft',
            'fadeInLeftBig' => 'fadeInLeftBig',
            'fadeInRight' => 'fadeInRight',
            'fadeInRightBig' => 'fadeInRightBig',
            'fadeInUp' => 'fadeInUp',
            'fadeInUpBig' => 'fadeInUpBig',
            'flip' => 'flip',
            'flipInX' => 'flipInX',
            'flipInY' => 'flipInY',
            'flipOutX' => 'flipOutX',
            'flipOutY' => 'flipOutY',
            'lightSpeedIn' => 'lightSpeedIn',
            'rotateIn' => 'rotateIn',
            'rotateInDownLeft' => 'rotateInDownLeft',
            'rotateInDownRight' => 'rotateInDownRight',
            'rotateInUpLeft' => 'rotateInUpLeft',
            'rotateInUpRight' => 'rotateInUpRight',
            'slideInUp' => 'slideInUp',
            'slideInDown' => 'slideInDown',
            'slideInLeft' => 'slideInLeft',
            'slideInRight' => 'slideInRight',
            'zoomIn' => 'zoomIn',
            'zoomInDown' => 'zoomInDown',
            'zoomInLeft' => 'zoomInLeft',
            'zoomInRight' => 'zoomInRight',
            'zoomInUp' => 'zoomInUp',
            'rollIn' => 'rollIn',
        ),
        '#default_value' => (isset($settings['animation'])) ? $settings['animation'] : '',
    );

    /* Wrapper Classes*/
    $form['background_color'] = array(
        '#type' => 'textfield',
        '#title' => t('Background color (example: #f5f5f5)'),
        '#description' => t(''),
        '#default_value' => (isset($settings['background_color'])) ? $settings['background_color'] : ''
    );

    $preview_image = '';
    if (!empty($settings['background_image']['fid']) && $settings['background_image']['fid'] != 0) {
        $file = file_load($settings['background_image']['fid']);
        $path_url = file_create_url($file->uri);
       $preview_image = '<div>Background current: </div><div class="gavias-pane-inline"><img style="width:200px;height:auto;" src="'.$path_url.'"/></div>';   
    }  

    /* background image */
    $form['background_image'] = array(
        '#type' => 'media',
        '#tree' => TRUE,
        '#title' => t('Background image'),
        '#input' => TRUE,
        '#description' => $preview_image,
        '#media_options' => array(
            'global' => array(
                'types' => array(
                    'image' => 'image',
                ),
                'schemes' => array(
                    'public' => 'public',
                )
            ),
        ),
        '#default_value' => array('fid' => (isset($settings['background_image'])) ? $settings['background_image'] : ''), // Change to your default value
    );

      

    // background repeat
    $form['background_effects']['background_repeat'] = array(
        '#type' => 'select',
        '#title' => t('Repeat'),
        '#options' => array(
            'no-repeat' => t('No repeat'),
            'repeat' => t('Repeat'),
            'repeat-x' => t('Repeat X'),
            'repeat-y' => t('Repeat Y'),
        ),
        '#default_value' => (isset($settings['background_effects']['background_repeat'])) ? $settings['background_effects']['background_repeat'] : 'inherit',
    );

    // background position
    $form['background_effects']['background_position'] = array(
        '#type' => 'select',
        '#title' => t('Position'),
        '#options' => array(
            'left top' => t('Left Top'),
            'left center' => t('Left Center'),
            'left bottom' => t('Left Bottom'),
            'center center' => t('Center Center'),
            'center top' => t('Center Top'),
            'center bottom' => t('Center Bottom'),
            'right top' => t('Right Top'),
            'right center' => t('Right Center'),
            'right bottom' => t('Right Bottom'),
        ),
        '#default_value' => (isset($settings['background_effects']['background_position'])) ? $settings['background_effects']['background_position'] : 'left top',
    );

    // background attachment
    $form['background_effects']['background_attachment'] = array(
        '#type' => 'select',
        '#title' => t('Attachment'),
        '#options' => array(
            'scroll' => t('Scroll'),
            'fixed' => t('Fixed'),
        ),
        '#default_value' => (isset($settings['background_effects']['background_attachment'])) ? $settings['background_effects']['background_attachment'] : 'scroll',
    );

    return $form;
}

/**
 * Render callback.
 *
 * @ingroup themeable
 */
function theme_gavias_panels_block_style_render_pane(&$vars) {
    $content = $vars['content'];
    $pane = $vars['pane'];
    $settings = $vars['settings'];
    $display = $vars['display'];
    $render = '';
    $wrap_open = '';
    $wrap_close = '';
    $css_bg = '';
    if (empty($content->content)) {
        return;
    }

    if (isset($pane->style['style']) && $pane->style['style'] == 'gavias_panels_block_style') {

        $vars['classes_array'][] = 'gavias-pane';

        // background
        $bg_attributes = array();
        if (!empty($settings['background_color']) || !empty($settings['background_image']['fid'])) {

            // background image
            if (!empty($settings['background_image']['fid']) && $settings['background_image']['fid'] != 0) {
                $file = file_load($settings['background_image']['fid']);
                $path_url = file_create_url($file->uri);
                $bg_attributes[] = 'url(\'' . $path_url . '\')';
                $bg_attributes[] = $settings['background_effects']['background_repeat'];
                $bg_attributes[] = $settings['background_effects']['background_position'];
                $bg_attributes[] = $settings['background_effects']['background_attachment'];

            }

            // background color
            if (!empty($settings['background_color'])) {
                $bg_attributes[] = $settings['background_color'];
            }

            $css_bg = 'background: ' . implode(" ", $bg_attributes) . '; ';
        }
    }

    $wrapper_id = '';
    if(!empty($settings['wrapper_id'])) {
        $wrapper_id = $settings['wrapper_id'];
    }
    $wrapper_classes = '';
    if(!empty($settings['wrapper_classes'])) {
        $wrapper_classes .= $settings['wrapper_classes'];
    }
    
    $animation_class = '';
    if(isset($settings['animation']) && !empty($settings['animation'])){
        $animation_class .= ' wow ' . $settings['animation'];
    }

    $output = '<div ' . ($wrapper_id ? $wrapper_id : '') . ' class="panels-container ' . $wrapper_classes . '" ' . (!empty($css_bg) ? 'style="' . $css_bg . '"' : '') . '><div class="panels-inner">';

    if(isset($settings['row_style']) && $settings['row_style']){
        $output .= '<div class="' . $settings['row_style'] . '">';
    }else{
       $output .= '<div class="container">';
    }
        
    $output .= theme('panels_pane', array('content' => $content, 'pane' => $pane, 'display' => $display, 'gavias_panel'=>true, 'animation_class' => $animation_class));

    $output .= '</div>';

    $output .= '</div></div>';
    return $output;
}

