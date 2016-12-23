<div class="view-team-block row">
   <div class="owl-carousel push-bottom view-team control-top" data-plugin-options='{"items": 3, "autoHeight": false, "singleItem": false}'>
      <?php foreach ($rows as $id => $row): ?>
         <div class="team-item text-center">
            <?php print $row; ?>
         </div>   
      <?php endforeach; ?>
   </div>
</div>   
