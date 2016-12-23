<?php
/**
 * @file panels-pane.tpl.php
 * Main panel pane template
 *
 * Variables available:
 * - $pane->type: the content type inside this pane
 * - $pane->subtype: The subtype, if applicable. If a view it will be the
 *   view name; if a node it will be the nid, etc.
 * - $title: The title of the content
 * - $content: The actual content
 * - $links: Any links associated with the content
 * - $more: An optional 'more' link (destination only)
 * - $admin_links: Administrative links associated with the content
 * - $feeds: Any feed icons or associated with the content
 * - $display: The complete panels display object containing all kinds of
 *   data including the contexts and all of the other panes being displayed.
 */
?>
<?php if ($pane_prefix): ?>
    <?php print $pane_prefix; ?>
<?php endif; ?>
<?php if(!empty($wrapper_id) || !empty($wrapper_classes)):?>
    <div <?php if(!empty($wrapper_id)) : ?> id="<?php print $wrapper_id;?>"  <?php endif;?> <?php if(!empty($wrapper_classes)): ?> class="<?php print $wrapper_classes;?>" <?php endif;?> <?php if(!empty($css_bg)):?>style="<?php print $css_bg;?>" <?php endif;?>>
<?php endif;?>
   <div class="block <?php print $classes; ?>" <?php print $id; ?> <?php print $attributes; ?>>
        <?php if ($admin_links): ?>
            <?php print $admin_links; ?>
        <?php endif; ?>

        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
           <div class="block-title">
                <<?php print $title_heading; ?><?php print $title_attributes; ?>>
                    <span><?php print $title; ?></span>
                </<?php print $title_heading; ?>>
            </div>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

        <?php if ($feeds): ?>
            <div class="feed">
                <?php print $feeds; ?>
            </div>
        <?php endif; ?>

        <div class="pane-content">
            <?php print render($content); ?>
        </div>

        <?php if ($links): ?>
            <div class="links">
                <?php print $links; ?>
            </div>
        <?php endif; ?>

        <?php if ($more): ?>
            <div class="more-link">
                <?php print $more; ?>
            </div>
        <?php endif; ?>
    </div>
    <?php if ($pane_suffix): ?>
        <?php print $pane_suffix; ?>
    <?php endif; ?>
<?php if(!empty($wrapper_id) || !empty($wrapper_classes)):?>
    </div>
<?php endif;?>