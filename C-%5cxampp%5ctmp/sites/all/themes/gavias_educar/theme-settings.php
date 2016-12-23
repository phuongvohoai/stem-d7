<?php
/**
 * @file
 * Theme setting callbacks for the gavias_educar theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter()
 */
function gavias_educar_form_system_theme_settings_alter(&$form, &$form_state) {
  
  // Main settings wrapper
  $form['options'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'defaults',
    '#weight' => '-10',
    '#attached' => array(
      'css' => array(drupal_get_path('theme', 'gavias_educar') . '/css/theme-settings.css'),
    ),
  );
  
  // Default Drupal Settings    
  $form['options']['drupal_default_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Drupal Core Settings'),
  );
  
    // "Toggle Display" 
    $form['options']['drupal_default_settings']['theme_settings'] = $form['theme_settings'];
    
    // "Unset default Toggle Display settings" 
    unset($form['theme_settings']);
    
    // "Logo Image Settings" 
    $form['options']['drupal_default_settings']['logo'] = $form['logo'];
    
    // "Unset default Logo Image Settings" 
    unset($form['logo']);
    
    // "Shortcut Icon Settings" 
    $form['options']['drupal_default_settings']['favicon'] = $form['favicon'];   
    
    // "Unset default Shortcut Icon Settings" 
    unset($form['favicon']);
  
  // General
  $form['options']['general'] = array(
    '#type' => 'fieldset',
    '#title' => t('General'),
  );
   
  $form['options']['general']['sticky_menu'] =array(
    '#type' => 'select',
    '#title' => t('Enable Sticky Menu'),
    '#default_value' => theme_get_setting('sticky_menu'),
    '#options' => array(
      '0'        => t('Disable'),
      '1'        => t('Enable')
     ) 
  ); 

  // Breadcrumbs
  $form['options']['general']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Breadcrumbs'),
    '#default_value' => theme_get_setting('breadcrumbs'),
  );

   // Preloader
  $form['options']['general']['preloader'] = array(
    '#type' => 'select',
    '#title' => t('Enable Preloader'),
    '#default_value' => theme_get_setting('preloader'),
    '#options' => array(
      '0' => t('Disable'),
      '1' => t('Enable'),
    ),
  );

  // Site Layout
  $form['options']['general']['site_layout'] = array(
    '#type' => 'select',
    '#title' => t('Body Layout'),
    '#default_value' => theme_get_setting('site_layout'),
    '#options' => array(
      'wide' => t('Wide (default)'),
      'boxed' => t('Boxed'),
    ),
  );
      
   // Layout
  $form['options']['customize'] = array(
    '#type' => 'fieldset',
    '#title' => t('Customize'),
  );
     
  // Skin
  $form['options']['customize']['theme_skin'] = array(
    '#type' => 'select',
    '#title' => t('Theme Skin'),
    '#default_value' => theme_get_setting('theme_skin'),
    '#options' => array(
      ''        => t('Default'),
      'blue'   => t('Blue'),
      'dark-blue'   => t('Dark Blue'),
      'green'  => t('Green'),
      'red'     => t('Red'),
      'yellow'  => t('Yellow'),
    ),
  );
     
  $form['options']['customize']['frontend_panel'] = array(
    '#type' => 'select',
    '#title' => t('Enable FrontEnd Panel'),
    '#default_value' => theme_get_setting('frontend_panel'),
    '#options' => array(
      '0' => t('Disable'),
      '1' => t('Enable'),
    ),
  );

   $form['options']['customize']['enable_custom_style'] = array(
    '#type' => 'select',
    '#title' => t('Enable Use Customize Style'),
    '#default_value' => theme_get_setting('enable_custom_style'),
    '#options' => array(
      '0' => t('Disable'),
      '1' => t('Enable'),
    ),
  );
 
  // CSS
  $form['options']['css'] = array(
    '#type' => 'fieldset',
    '#title' => t('CSS'),
  );
  
  // User CSS
  $form['options']['css']['user_css'] = array(
    '#type' => 'textarea',
    '#title' => t('Add your own CSS'),
    '#default_value' => theme_get_setting('user_css'),
  ); 
            
}
