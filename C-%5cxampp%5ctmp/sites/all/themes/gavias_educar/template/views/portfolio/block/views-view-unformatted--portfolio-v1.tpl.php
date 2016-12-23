<?php if (!empty($title)) : ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>
<div class="row">
   <div class="isotope-items view-portfolio" <?php print $attributes; ?>>
     <?php foreach ($rows as $row_number => $row): ?>
        <?php print $row; ?>  
     <?php endforeach; ?>
   </div>
</div>