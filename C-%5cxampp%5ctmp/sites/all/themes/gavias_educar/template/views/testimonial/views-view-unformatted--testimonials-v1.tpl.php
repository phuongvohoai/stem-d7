<div class="view-testimonial-block row">
   <div class="owl-carousel push-bottom view-testimonial control-top" data-plugin-options='{"items": 3, "autoHeight": true, "singleItem": false}'>
      <?php foreach ($rows as $id => $row): ?>
         <div class="testimonial-item">
            <?php print $row; ?>
         </div>   
      <?php endforeach; ?>
   </div>
</div>   
