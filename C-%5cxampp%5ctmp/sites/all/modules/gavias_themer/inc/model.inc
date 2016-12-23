<?php

function gavias_customize_writecache( $folder, $file, $value, $e='css' ){
  $file   = $folder  . preg_replace('/[^A-Z0-9\._-]/i', '', $file).'.'.$e ;
  $handle = fopen($file, 'w+');
    fwrite($handle, ($value));
    fclose($handle);
}


function gavias_customize_list_file( $path , $e=null, $nameOnly=false ) {
   $output = array(); 
   $directories = (array) glob( $path.'*'.$e );
   foreach( $directories as $dir ){
      $dir = basename( $dir );
      if( $nameOnly ){
         $dir = str_replace( $e,'', $dir );
      }

      $output[$dir] = $dir;
   }        
    
   return $output;
}

function gavias_customize_list_profile( ){

   $theme_name = variable_get('theme_default', NULL);

   $folder =   drupal_get_path('theme', $theme_name).'/customize/save/*.css';

   $dirs = (array)glob(  $folder );
   $output = array();
   foreach( $dirs as $dir ){
      $file = str_replace( ".css", "", basename($dir) );
      $output[]=array( "skin" => $file , "name"=> (ucfirst($file)) );
   }
   return $output;   
}