<?php 
   $price = strip_tags($fields['field_course_price']->content);
   if($price == '0' || $price =='') $price = 'Free';
?>
<div class="course-item grid clearfix">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <?php print $fields['field_course_image']->content; ?>
            <div class="price"><?php print $price; ?></div>
      </div>  
      <div class="item-body">
         <div class="title"> 
            <?php print $fields['title']->content; ?>
         </div>  
         <div class="teacher"> 
            <?php print $fields['field_course_teacher']->content; ?>
         </div>
         <div class="body" style="display: none;">        
            <?php print $fields['body']->content; ?>
         </div>
         <div class="readmore">        
            <a href="<?php print strip_tags($fields['path']->content) ?>"><?php print t('Xem thêm') ?></a>
         </div>
      </div>
   </div>
</div>