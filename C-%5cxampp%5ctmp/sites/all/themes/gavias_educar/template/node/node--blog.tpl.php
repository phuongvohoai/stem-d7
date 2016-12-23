<?php 
$uid = user_load($node->uid);
global $parent_root;
?>

<?php if($teaser): 
	$post_format = "none";
	$field_post_format = field_get_items('node', $node, 'field_post_format');
  if(isset($field_post_format [0]['value']) && $field_post_format [0]['value'] ){
     $post_format = $field_post_format[0]['value']; 
  }
?>

<article id="node-<?php print $node->nid; ?>" class="node-teaser-display post-format-<?php echo $post_format ?> <?php print $classes; ?> post post-medium-image"<?php print $attributes; ?>>
   <div class="post-block">
		<div class="row row-post-single">
         <div class="col-xs-6">
            <?php if($post_format == 'gallery'){ ?>
               <?php if(render($content['field_post_gallery'])){ ?>
                  <div class="post-image post-gallery">
                    <div class="carousel-gallery">
                        <?php if (render($content['field_post_gallery'])) : ?>
                           <?php print render($content['field_post_gallery']); ?>
                        <?php endif; ?>
                      </div>    
                  </div>
               <?php }else{ print render($content['field_post_image']); } ?>  
            <?php } 
               elseif($post_format == 'video' || $post_format == 'audio'){ ?>
                  <?php if(render($content['field_post_embed'])){ ?>
                     <div class="video-media video-responsive">
                       <?php
                        gavias_educar_include('gavias_educar', 'includes/oembed.php');
                        $autoembed = new AutoEmbed();
                        if($embed = field_get_items('node', $node, 'field_post_embed')[0]['value']){
                           print ($autoembed->parse($embed));
                        }
                       ?>
                     </div>
                  <?php }else{ print render($content['field_post_image']); } ?>  
            <?php }else{
               print render($content['field_post_image']);
            }
            ?>
         </div>   
         <div class="col-xs-6">
   			<div class="post-content">
   				<div class="post-meta-wrap">
   				   <div class="post-title">
   					   <?php print render($title_prefix); ?>
   					    	<h3 <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
   					   <?php print render($title_suffix); ?>
   				   </div>
   				   <?php if (!$page && $teaser): ?>
   				     <div class="post-meta">
   							<span class="post-date-blog"><?php print format_date($node->created, 'custom', 'M d, Y'); ?></span>
   							<span> / </span>
   							<?php if (module_exists('comment')):?>
   							<span class="post-meta-comments"> <a href="<?php print $node_url;?>/#comments"><?php print $comment_count; ?> <?php print t('Comment'); ?><?php if ($comment_count != "1" ) { echo "s"; } ?></a></span>
   							<?php endif; ?>
   						</div>
   				  <?php endif; ?>
   				</div>  
   			  	<div class="post-content-inner"<?php print $content_attributes; ?>>
   				    <?php
   				      // Hide comments, tags, and links now so that we can render them later.
   				      hide($content['taxonomy_forums']);
   				      hide($content['comments']);
   				      hide($content['links']);
   				      hide($content['field_tags']);
   				      hide($content['field_post_image']);
   				      hide($content['field_post_gallery']);
                hide($content['field_post_embed']);
                hide($content['field_post_format']);
   				      print render($content);
   				    ?>
   			  	</div>
   	   	</div>	
         </div> 
      </div>     	
  </div>
  <div class="clearfix"></div>
</article>

<?php endif; ?>

<?php if(!$teaser): //Display node blog single 
	$post_format = "none";
	$field_post_format = field_get_items('node', $node, 'field_post_format');
  if(isset($field_post_format [0]['value']) && $field_post_format [0]['value'] ){
     $post_format = $field_post_format[0]['value']; 
  }
?>

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> post post-large blog-single-post"<?php print $attributes; ?>>
      <?php if($post_format == 'gallery'){ ?>
      		<?php if(render($content['field_post_gallery'])){ ?>
      			<div class="post-image post-gallery">
      			  <div>
      				   <?php if (render($content['field_post_gallery'])) : ?>
      				    	<?php print render($content['field_post_gallery']); ?>
      				   <?php endif; ?>
      			    </div>    
      			</div>
      		<?php }else{ print render($content['field_post_image']); } ?>	
      <?php } 
      	elseif($post_format == 'video' || $post_format == 'audio'){ ?>
      		<?php if(render($content['field_post_embed'])){ ?>
      			<div class="video-media video-responsive">
      			  <?php
      			  	gavias_educar_include('gavias_educar', 'includes/oembed.php');
                  $autoembed = new AutoEmbed();
                  $field_post_embed =  field_get_items('node', $node, 'field_post_embed');
                  if($embed = $field_post_embed[0]['value']){
                     print ($autoembed->parse($embed));
                  }
      			  ?>
      			</div>
      		<?php }else{ print render($content['field_post_image']); } ?>	
      <?php }else{
      	print render($content['field_post_image']);
      }
      ?>
	 
		<div class="post-title">
			<?php print render($title_prefix); ?>
		    	<h1 <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
		   <?php print render($title_suffix); ?>
		</div> 	

		<div class="content-first">

			<?php if ($display_submitted): ?>
		  
				<div class="post-meta clearfix">
					<span class="post-created"><i class="fa fa-clock-o"></i><?php print format_date($node->created, 'custom', 'd M, Y'); ?></span>
					<span class="post-meta-user"><i class="fa fa-user"></i> <?php print t('By'); ?> <?php print $name; ?> </span>
					<?php if (render($content['field_tags'])): ?> 
					  <span class="post-meta-tag"><i class="fa fa-tag"></i> <?php print render($content['field_tags']); ?> </span>
					<?php endif; ?> 
					<?php if (render($content['field_term'])): ?> 
					  <span class="post-meta-tag"><i class="fa fa-tag"></i> <?php print render($content['field_term']); ?> </span>
					<?php endif; ?> 
					
					<?php if (module_exists('comment')):?>
					<span class="post-meta-comments"><i class="fa fa-comments"></i> <a href="<?php print $node_url;?>/#comments"><?php print $comment_count; ?> <?php print t('Comment'); ?><?php if ($comment_count != "1" ) { echo "s"; } ?></a></span>
					<?php endif; ?>
				</div>
				<div class="clearfix"></div>
		  <?php endif; ?>
		</div>
	 
	<div class="clearfix"></div>
	<div class="post-content">
	  <div class="article_content"<?php print $content_attributes; ?>>
	    <?php
	      // Hide comments, tags, and links now so that we can render them later.
	      hide($content['taxonomy_forums']);
	      hide($content['comments']);
	      hide($content['links']);
	      hide($content['field_tags']);
        hide($content['field_post_image']);
        hide($content['field_post_gallery']);
        hide($content['field_post_embed']);
        hide($content['field_post_format']);
	      print render($content);
	    ?>
	  </div>
	</div>  
	  

<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<?php $js_url= '//s7.addthis.com/js/300/addthis_widget.js';
        if(!empty($idAddthis)){
            $js_url.='#pubid='. $idAddthis;
        }
?>
    <script type="text/javascript" src="<?php echo $js_url; ?>"></script>
    <script type="text/javascript">
        addthis.layers({
            'theme' : 'Transparent',
            'share' : {
                'position' : 'left',
                'services' : 'facebook, twitter, gmail, google_plusone_share, email, pinterest, linkedin',
                'desktop' : true,
                'mobile' : true,
                'theme' : 'Transparent'
            }
        });
    </script>
<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->

	<?php
	 	// Only display the wrapper div if there are links.
    	$links = render($content['links']);
    	if ($links):
  	?>
    <?php if (!$teaser): ?>
	    <div class="link-wrapper">
	      <?php print $links; ?>
	    </div>
	  <?php endif; ?>  
  <?php endif; ?>

	<?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
   	 print render($content['comments']); ?>

</article>
<!-- /node -->
<?php endif; ?>