<?php
	$tab_class = $el_class = $tab_style = "";
    if(isset($content['field_tabs_display']['#items'][0]['value'])){
        $tab_style = $content['field_tabs_display']['#items'][0]['value'];
    	if($content['field_tabs_display']['#items'][0]['value'] == "columns") :
    		$tab_class = "columns";
    	elseif($content['field_tabs_display']['#items'][0]['value'] == "tabs-") :
    		$tab_class = "tabs-vertical";
    	elseif($content['field_tabs_display']['#items'][0]['value'] == "tabs-3") :
    		$tab_class = "tabs-horizonal";
    	endif;
    }
?>

<?php //Tab horizonal ?>
<?php if($tab_style == "tabs-horizonal") : ?>
    <div class="bean-tab tabs-horizonal <?php print $tab_class; ?>">
        <ul class="nav nav-tabs" role="tablist">
            <?php for($i=0; $i < count($content['field_tabs_item']['#items']); $i++) : ?>
                <li class="<?php if($i==0) echo 'active' ?>"><a href="#tab-<?php print strtolower(str_replace(" ","-",$content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value'])); ?>" data-toggle="tab" aria-expanded="true" role="tab"><?php print $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value']; ?></a></li>
            <?php endfor; ?>
        </ul>
        <div class="clearfix"></div>
        <div class="tab-content">
            <?php for($i=0; $i < count($content['field_tabs_item']['#items']); $i++) :
                if(isset($content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_class']['#items'][0]['value'])){
                    $el_class = $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_class']['#items'][0]['value'];
                }
            ?>
                <div class="<?php print $el_class ?> tab-pane fade <?php if($i==0) print "in active"; ?>" id="tab-<?php print strtolower(str_replace(" ","-",$content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value'])); ?>">
                    <?php print $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_content']['#markup']; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
<?php //Tab vertical ?>
<?php elseif($tab_style == "tabs-vertical") : ?>
	<div class="bean-tab tabs-vertical <?php print $tab_class; ?>">
    <div class="heading-tabs col-md-2 col-sm-12">
        <ul>
            <?php for($i=0; $i < count($content['field_tabs_item']['#items']); $i++) : ?>
                <?php if($i==0) : ?>
                    <li class="active"><a href="#<?php print strtolower(str_replace(" ","-",$content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value'])); ?>" data-toggle="tab"><?php print $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value']; ?></a></li>
                <?php else : ?>
                    <li><a href="#<?php print strtolower(str_replace(" ","-",$content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value'])); ?>" data-toggle="tab"><?php print $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value']; ?></a></li>
                <?php endif; ?>
            <?php endfor; ?>
        </ul>
    </div>

    <div class="tab-content col-md-10 col-sm-12">
        <?php for($i=0; $i < count($content['field_tabs_item']['#items']); $i++) :
            if(isset($content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_class']['#items'][0]['value'])){
                $el_class = $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_class']['#items'][0]['value'];
            }
        ?>
            <div class="<?php print $el_class ?> tab-pane fade <?php if($i==0) print "active"; ?> in hot-deals" id="<?php print strtolower(str_replace(" ","-",$content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value'])); ?>">
                <?php print $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_content']['#markup']; ?>
            </div>
        <?php endfor; ?>
    </div>
	</div>

<?php // Auto columns ?>
<?php elseif($tab_style == "columns") : ?>
    <?php
        $columns = count($content['field_tabs_item']['#items']);

        switch ($columns) {
            case '6':
                $class_column = 'col-lg-2 col-md-4 col-sm-4 col-xs-12';
                break;
            case '4':
                $class_column='col-md-3 col-sm-6 col-xs-12';
                break;
            case '3':
                $class_column='col-md-4 col-sm-4 col-xs-12';
                break;
            case '2':
                $class_column='col-md-6 col-sm-6';
                break;
            default:
                $class_column='col-md-12 col-sm-12';
                break;
        }
    ?>
    <div class="row gavias-bean">
        <?php for($i=0; $i < count($content['field_tabs_item']['#items']); $i++) :

            if(isset($content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_class']['#items'][0]['value'])){
                 $el_class = $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_class']['#items'][0]['value'];
            }
        ?>
    		<div class="block margin-top-0 <?php print $class_column ?> <?php print $el_class ?>">
    			<?php if(isset($content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value'])
                        && $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value']
                    ){ ?>
                    <div class="block-title">
                        <h2><span><?php print $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value']; ?></span></h2>
                    </div>
                <?php } ?>
                <div class="block-content">
                    <?php print $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_content']['#markup']; ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>

<?php else: ?>
    <?php // Default ?>
    <div class="row gavias-bean">
        <?php for($i=0; $i < count($content['field_tabs_item']['#items']); $i++) :
            if(isset($content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_class']['#items'][0]['value'])){
                 $el_class = $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_class']['#items'][0]['value'];
            }
        ?>
            <div class="block <?php print $el_class ?>">
                <?php if(isset($content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value'])
                        && $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value']
                    ){ ?>
                    <div class="block-title">
                        <h2><span><?php print $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_title']['#items'][0]['value']; ?></span></h2>
                    </div>
                <?php } ?>
                <div class="block-content">
                    <?php print $content['field_tabs_item'][$i]['entity']['field_collection_item'][$content['field_tabs_item']['#items'][$i]['value']]['field_tabs_content']['#markup']; ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>
<?php endif ?>
