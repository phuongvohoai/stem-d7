
<?php if (!empty($title)) : ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>
<?php
	$cw = isset($rows[0])?floor( 12/count($rows[0]) ):4; 
?>	
<div class="row">
<div class=" isotope-items view-portfolio <?php print $class; ?>" col="<?php echo $cw; ?>" <?php print $attributes; ?>>
  <?php foreach ($rows as $row_number => $columns): ?>
      <?php foreach ($columns as $column_number => $item): ?>
        <?php if (!empty($item)):?>	
            <?php print $item; ?>  
        <?php endif; ?>
      <?php endforeach; ?>
  <?php endforeach; ?>
</div>
</div>