<div class="view-team-block row">
   <div class="owl-carousel push-bottom view-partner control-top" data-plugin-options='{"items": 5, "autoHeight": false, "singleItem": false}'>
      <?php foreach ($rows as $id => $row): ?>
         <div class="partner-item text-center">
            <?php print $row; ?>
         </div>   
      <?php endforeach; ?>
   </div>
</div>   
