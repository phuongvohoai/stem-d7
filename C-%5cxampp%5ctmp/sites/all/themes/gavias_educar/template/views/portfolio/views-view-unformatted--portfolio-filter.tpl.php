<div class="text-center clearfix">
     <nav class="portfolio-filter">
      <ul class="nav nav-tabs">
         <li><a class="active btn btn-ouline" href="#" data-filter="*"><span></span><?php print t('All'); ?></a></li>
         <?php $i=1; foreach ($rows as $id => $row): ?>
            <?php print $row; ?>
         <?php $i++; endforeach; ?>
      </ul>                    
   </nav> 
</div> 
