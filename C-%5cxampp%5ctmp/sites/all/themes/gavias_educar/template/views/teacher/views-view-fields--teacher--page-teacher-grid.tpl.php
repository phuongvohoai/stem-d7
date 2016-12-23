<div class="teacher-item grid single-teacher">
   <div class="grid-inner col-inner">
   <div class="teacher-information">
       <div class="field field-name-field-teacher-image field-type-image field-label-hidden">
            <div class="field-items">
                       <?php print $fields['field_teacher_image']->content; ?>
            </div>
       </div>
       <div class="information-inner">
         <div class="post-title">
            <h1><?php print $fields['title']->raw; ?></h1>
         </div>
         <ul class="list-info">
            <li class="clearfix" style="display: none; font-size: 13px;">
              <div class="lab" style="display: block; width: 100%; text-align: left;"><?php print t("Work Place"); ?></div>
              <div class="val" style="display: block; width: 100%; text-align: left;"><?php print $fields['field_teacher_job']->content; ?></div>
            </li>
            <li class="clearfix">
              <div class="lab" style="display: block; width: 100%; color: #111; text-align: left; font-weight: 700;"><?php print t("Specialized"); ?></div>
              <div class="val" style="display: block; width: 100%; font-size: 13px; text-align: justify; text-transform: none; text-align: left;"><?php print $fields['field_teacher_specialized']->content; ?></div>
            </li>
            <li class="clearfix">
              <div class="lab" style="display: block; width: 100%; color: #111; text-align: left; font-weight: 700;"><?php print t("Experience"); ?></div>
              <div class="val" style="display: block; width: 100%;font-size: 13px; text-align: justify; text-transform: none; text-align: left;"><?php print $fields['field_teacher_experience']->content; ?></div>
            </li>           
         </ul>

        <?php
            $teacher = node_load($fields['nid']->raw);
            $content = node_view($teacher, 'full');
            if(isset($content['field_teacher_social']) && $content['field_teacher_social']):
            ?>
            <ul class="teacher-social clearfix">
                <?php
                foreach($content['field_teacher_social'] as $key=>$field_collection) {
                  if(is_numeric($key) && !empty($field_collection['entity']['field_collection_item'])) {
                    $field_social = current($field_collection['entity']['field_collection_item']);
                    $social_icon = strip_tags(render($field_social['field_teacher_social_icon']));
                    $social_link = strip_tags(render($field_social['field_teacher_social_link']));

                    if($social_icon && $social_link): ?>
                    <li><a href="<?php print $social_link ?>"><i class="<?php print $social_icon; ?>"></i></a></li>
                    <?php endif;
                  }
                }
                ?>
            </ul>
          <?php endif;
         ?>
        </div>
    </div>

   </div>
</div>
