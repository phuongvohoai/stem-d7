<?php if (!empty($title)) : ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>
<div <?php print $attributes; ?>>
  <?php $i=0; foreach ($rows as $row_number => $row): $i++;?>
      <?php if($i%3==1) print '<div class="row margin-bottom-30">' ?>
         <div class="col-md-4 col-xs-12">
           <div class="gallery-large">
                 <div class="item content"><?php print $row; ?></div>
           </div>
         </div>
      <?php if($i%3==0 || $i==count($rows)) print '</div>'; ?>   
  <?php endforeach; ?>
</div> 



