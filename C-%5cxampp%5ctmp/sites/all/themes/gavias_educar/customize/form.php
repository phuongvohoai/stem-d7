<?php 
   if(function_exists('gavias_customize_list_profile')){ 
      $profiles = gavias_customize_list_profile();
   }
   $profile_current = variable_get('gavias_profile', '');
   global $theme;
?>

 <div id="globalsettings" class="gavias_customize_form">
   <div class="form-group">
      <select name="gavias_profile_customize_name" id="gavias_profile_customize_name" data-url="<?php echo (drupal_get_path('theme', $theme) . '/customize/save/') ?>">
         <option value="">Create New Profile</option>
         <?php
            if(isset($profiles) && $profiles){
               foreach ($profiles as $key => $profile) {
         ?>     
            <option value="<?php print $profile['skin']; ?>" <?php if($profile_current == $profile['skin']) echo 'selected' ?>><?php print $profile['name']; ?></option>
         <?php
               }
            }
         ?>
      </select>
      <input type="text" value="" name="gavias_profile_customize_new" id="gavias_profile_customize_new" class="form-control"/>
   </div>

   <div class="form-group action">
      <?php if(user_access('admin_gavias_customize')) { ?>
         <input type="button" id="gavias_customize_save" class="btn form-submit" value="Save & Active" />
         <input type="button" id="gavias_customize_active" class="btn form-submit" value="Active" />
         <input type="button" id="gavias_customize_delete" class="btn form-submit" value="Delete" />
      <?php } ?> 
      <input type="button" id="gavias_customize_preview" class="btn form-submit" value="Preview" />
   </div>   

  
   <div class="clearfix"></div>
   <div id="customize-gavias-preivew">
      <div class="panel-group" id="customize-accordion" role="tablist" aria-multiselectable="true">   
         
         <!-- General -->
         <div class="panel panel-default">
            <div class="panel-heading" role="tab">
               <h4 class="panel-title">
                 <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-general" aria-expanded="true">
                   General
                 </a>
               </h4>
            </div>
            <div id="customize-general" class="panel-collapse collapse in" role="tabpanel" >
               <div class="panel-body">
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Theme Color</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="theme_color" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Text color</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="text_color" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Link color</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="link_color" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Link hover color</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="link_hover_color" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div> 

         <!-- Header -->
         <div class="panel panel-default">
            <div class="panel-heading" role="tab">
               <h4 class="panel-title">
                 <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-header" aria-expanded="true">
                   Header - Menu
                 </a>
               </h4>
            </div>
            <div id="customize-header" class="panel-collapse collapse" role="tabpanel" >
               <div class="panel-body">
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Background</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="header_bg" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Menu | Color Link</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="menu_color_link" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Menu | Color Hover</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="menu_color_link_hover" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Sub Menu | Background</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="submenu_background" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Sub Menu | Color</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="submenu_color" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Sub Menu | Color Link</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="submenu_color_link" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Sub Menu | Color Hover</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="submenu_color_link_hover" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div>

         <!-- Footer -->
         <div class="panel panel-default">
            <div class="panel-heading" role="tab">
               <h4 class="panel-title">
                 <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-footer" aria-expanded="true">
                   Footer
                 </a>
               </h4>
            </div>
            <div id="customize-footer" class="panel-collapse collapse" role="tabpanel" >
               <div class="panel-body">
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Background</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="footer_bg" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Text color</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="footer_color" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Color Link</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="footer_color_link" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Color Hover</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="footer_color_link_hover" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>

               </div>
            </div> 
         </div>

         <!-- Copyright -->
         <div class="panel panel-default">
            <div class="panel-heading" role="tab">
               <h4 class="panel-title">
                 <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-copyright" aria-expanded="true">
                   Copyright
                 </a>
               </h4>
            </div>
            <div id="customize-copyright" class="panel-collapse collapse" role="tabpanel" >
               <div class="panel-body">
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Background</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="copyright_bg" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Text color</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="copyright_color" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Color Link</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="copyright_color_link" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-wrapper">
                     <div class="form-group">
                        <label>Color Hover</label>
                        <div class="input-group colorselector">
                            <input type="text" value="" name="copyright_color_link_hover" class="form-control customize-option" />
                            <span class="input-group-addon"><i></i></span>
                            <span class="remove">x</span>
                        </div>
                     </div>
                  </div>

               </div>
            </div> 
         </div>

      </div>    
   </div>   
</div>
