<div class="teacher-item grid col-xs-12">      
   <div class="grid-inner col-inner">
      <div class="field-items">  
            <?php print $fields['field_student_image']->content; ?>
      </div>  
      <div class="item-body" style="padding-bottom: 20px;">
         <div class="post-title">
            <h1><?php print $fields['title']->raw; ?></h1>
         </div>
         <div class="job"> 
            <?php print $fields['field_student_class']->content; ?>
         </div>
       </div>
   </div>
</div>