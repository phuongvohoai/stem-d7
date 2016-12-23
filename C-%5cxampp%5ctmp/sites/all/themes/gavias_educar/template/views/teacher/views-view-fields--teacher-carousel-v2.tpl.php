<div class="teacher-item grid col-xs-12">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <?php print $fields['field_teacher_image']->content; ?>
      </div>  
      <div class="item-body">
         <div class="title"> 
            <?php print $fields['title']->content; ?>
         </div>  
         <div class="job"> 
            <?php print $fields['field_teacher_job']->content; ?>
         </div>
         <div class="body">        
            <?php print $fields['body']->content; ?>
         </div>
         <div class="readmore clearfix">        
            <?php print $fields['view_node']->content; ?>
         </div>
      </div>
   </div>
</div>