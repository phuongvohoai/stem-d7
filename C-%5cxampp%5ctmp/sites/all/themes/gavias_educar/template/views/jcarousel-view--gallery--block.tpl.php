  <?php $i=0; ?>
<ul class="<?php print $jcarousel_classes; ?>">
    <?php foreach ($rows as $id => $row): ?>
        <?php if($id % 5 == 0){ $i=0;  ?>
            <li class="gallery-large <?php print $row_classes[$id]; ?>">
                <div class="item content"><?php print $row; ?></div>
            </li>
        <?php }else{ ?>
            <?php if($i % 2 == 0){ ?>
                <li class="gallery-small <?php print $row_classes[$id]; ?>">
            <?php } ?>
                <div class="item content gallery-small-item"><?php print $row ?></div>
            <?php if($i % 2 == 1){ ?>
                </li>
            <?php } $i++;?>
        <?php } ?>
    <?php endforeach; ?>
</ul>




