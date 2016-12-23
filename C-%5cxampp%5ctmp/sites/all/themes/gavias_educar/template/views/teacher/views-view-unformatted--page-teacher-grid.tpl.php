<?php if (!empty($title)) : ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>
<div <?php print $attributes; ?>>
  <?php $i=0; foreach ($rows as $row_number => $row): $i++;?>
      <?php if($i%3==1) print '<div class="row margin-bottom-30">' ?>
         <div class="col-md-4 col-xs-12">
               <?php print $row; ?>  
         </div>
      <?php if($i%3==0 || $i==count($rows)) print '</div>'; ?>   
  <?php endforeach; ?>
</div> 
