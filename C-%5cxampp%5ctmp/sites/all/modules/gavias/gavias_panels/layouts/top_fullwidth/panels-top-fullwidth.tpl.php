<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>
<div class="panel-display panel-topfull clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="row">
    <div class="col-xs-12 panel-panel panel-top">
      <div class="inside"><?php print $content['top']; ?></div>
    </div>
  </div>
  <div class="row">  
    <div class="col-sm-3 panel-panel panel-bottom">
        <div class="panel-panel panel-sidebar">
            <div class="inside"><?php print $content['sidebar']; ?></div>
        </div>
        <div class="col-sm-9 panel-panel panel-content">
            <div class="inside"><?php print $content['content']; ?></div>
        </div>
    </div>
  </div>  
</div>
