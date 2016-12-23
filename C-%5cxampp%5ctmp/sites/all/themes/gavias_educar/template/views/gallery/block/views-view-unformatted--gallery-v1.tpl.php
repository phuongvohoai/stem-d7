<div class="owl-carousel main-slideshow control-top view-gallery" data-plugin-options='{"items": 2, "autoHeight": true, "singleItem":false}'>
    <?php $pages = array_chunk($rows, 5);   ?>
    <?php foreach ($pages as $id => $orow): ?>
            <?php $k=0; foreach ($orow as $id => $row): $k++;?>
                <?php if($k == 1){  ?>
                    <div class="gallery-large carousel-item">
                        <div class="item content"><?php print $row; ?></div>
                    </div>
                <?php }else{ ?>
                    <?php if($k == 2) print '<div>'; ?>
                    <?php if($k % 2 == 0){ ?>
                       <div class="gallery-small carousel-item">
                    <?php } ?>
                        <div class="item content gallery-small-item"><?php print $row ?></div>
                    <?php if($k % 2 == 1){ ?>
                        </div>
                    <?php }?>
                    <?php if($k==5 || $k==count($orow)) print '</div>'; ?>
                <?php } ?>
            <?php endforeach; ?>   
        
    <?php endforeach; ?>
</div>


