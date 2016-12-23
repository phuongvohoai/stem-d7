<div class="view-testimonial-block row">
   <div class="owl-carousel push-bottom view-testimonial control-top" data-plugin-options='{"items": 1, "autoHeight": true, "singleItem": true}'>
      <?php foreach ($rows as $id => $row): ?>
         <div class="testimonial-item testimonial-v2">
            <div class="content-inner">
               <?php print $row; ?>
            </div>
         </div>   
      <?php endforeach; ?>
   </div>
</div>   
