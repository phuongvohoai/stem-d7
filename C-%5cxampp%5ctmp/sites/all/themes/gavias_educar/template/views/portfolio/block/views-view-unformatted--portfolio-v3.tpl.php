<?php if (!empty($title)) : ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>
<div class="row">
   <div class="owl-carousel main-slideshow control-top view-gallery" data-plugin-options='{"items": 4, "autoHeight": true, "singleItem":false}'>
     <?php  foreach ($rows as $row_number => $row): ?>
        <?php print $row; ?>  
     <?php endforeach; ?>
   </div>
</div>