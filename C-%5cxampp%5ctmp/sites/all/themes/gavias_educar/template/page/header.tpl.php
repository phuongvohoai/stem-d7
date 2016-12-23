<?php if(theme_get_setting('preloader') == '1'): ?>
  <div id="jpreContent" >
      <div id="jprecontent-inner">
          <div class="preloader-wrapper active">
            <div class="spinner-layer spinner-blue-only">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>  
      </div>
    </div>
<?php endif; ?> 

   <header id="header" <?php if(theme_get_setting('sticky_menu') == 1){echo 'class="gv-fixonscroll"';} ?>>
      <div class="topbar">
        <div class="container">
          <?php if (isset($page['topbar'])) : ?>
             <?php print render($page['topbar']); ?>
          <?php endif; ?>
        </div>
      </div>    
      <div class="header-main">
         <div class="container">
            <div class="header-main-inner">
               <div class="row">
                  <div class="col-md-3 col-xs-5 pull-left">
                     <?php if ($logo): ?>
                           <h1 class="logo">
                                 <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                       <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                                 </a>
                           </h1>
                     <?php endif; ?>

                     <?php if ($site_name || $site_slogan): ?>
                           <div id="name-and-slogan"<?php if ($disable_site_name && $disable_site_slogan) {
                                 print ' class="hidden"';
                           } ?>>

                                 <?php if ($site_name): ?>
                                    <?php if ($title): ?>
                                          <div id="site-name"<?php if ($disable_site_name) {
                                                print ' class="hidden"';
                                          } ?>>
                                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"
                                                    rel="home"><span><?php print $site_name; ?></span></a>
                                          </div>
                                    <?php else: /* Use h1 when the content title is empty */ ?>
                                          <h1 id="site-name"<?php if ($disable_site_name) {
                                                print ' class="hidden"';
                                          } ?>>
                                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"
                                                    rel="home"><span><?php print $site_name; ?></span></a>
                                          </h1>
                                    <?php endif; ?>
                                 <?php endif; ?>

                                 <?php if ($site_slogan): ?>
                                    <div id="site-slogan"<?php if (($disable_site_slogan)) { print ' class="hidden"'; }
                                       if ((!$disable_site_slogan) AND ($disable_site_name)) { } ?>> <?php print $site_slogan; ?>
                                    </div>
                                 <?php endif; ?>

                           </div> 
                     <?php endif; ?>
                  </div>
                  
                <!-- /# LANGUAGE-->
                 <div class="col-md-9 col-xs-7 area-main-menu pull-right" style="padding-top: 25px;">   
                  <a target="_blank" href="https://vi-vn.facebook.com/stemhouse.edu.vn/">
                    <span class="pull-right"  style="width: 25px; height: 25px; background-size: contain; background-repeat: no-repeat; background-position: center; margin-right: -12px;    margin-left: 15px;  background-image: url('/sites/all/themes/gavias_educar/images/fb-logo.png');"> </span>
                  </a>
                 
                  <a target="_blank" href="https://www.youtube.com/channel/UCcVm9wwSYyFdsdHjId13rog"><span class="pull-right"  style="margin-left: 10px; width: 25px; height: 25px; background-size: contain; background-repeat: no-repeat; background-position: center; background-image: url('/sites/all/themes/gavias_educar/images/youtube-logo.png');">
                   
                  </span>
                  </a>
                   <div class="pull-right">
                   <?php $block = module_invoke('locale', 'block_view', 'language');
                    print render($block['content']); ?>
                   </div>               
                  <a href="#" style="float: right; width: 100%; padding-top: 3px;"><span class="btnflat pull-right"><?php print t("ONLINE TESTS"); ?></span></a>
                  </ul>                 
                 </div>   
                 
               </div> 

              
            </div>     
         </div>
      </div>   
  <!-- /#MENU -->
              <div class="row">
                  <div class="pull-left" style="width: 100%; float: left; background-color: #e1e2e1">
<div class="container">
                  <?php if ($menu_bar = render($page['main_menu'])): print $menu_bar; endif; ?>
                  <?php if($page['search']){ ?>
                     <div class="search-region">
                        <?php print render($page['search']); ?>
                     </div>
                  <?php } ?>   
               </div>  
               </div>   
 
            </div>
   </header>
