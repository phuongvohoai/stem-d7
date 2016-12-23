<?php if (!empty($title)) : ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>
<div class="row">
   <div class="owl-carousel main-slideshow control-top" data-plugin-options='{"items": 1, "autoHeight": false, "singleItem":true}'>
      <?php $i=0; foreach ($rows as $row_number => $row): $i++;?>
         <?php print $row; ?>  
      <?php endforeach; ?>
   </div>
</div>
