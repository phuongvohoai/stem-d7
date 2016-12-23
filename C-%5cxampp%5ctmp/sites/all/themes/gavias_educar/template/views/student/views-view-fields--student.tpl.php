<div class="teacher-item grid single-teacher">
   <div class="grid-inner col-inner">
   <div class="teacher-information">
       <div class="field field-name-field-teacher-image field-type-image field-label-hidden">
            <div class="field-items">
                       <?php print $fields['field_student_image']->content; ?>
            </div>
       </div>
       <div class="information-inner">
         <div class="post-title">
            <h1><?php print $fields['title']->raw; ?></h1>
         </div>
         <ul class="list-info">
            <li class="clearfix">
              <div class="lab" style="display: block; width: 100%; font-weight: 700; color: #111; text-align: left;"><?php print t("Học lớp:"); ?></div>
              <div class="val" style="display: block; font-size: 13px; width: 100%; text-transform: none; text-align: left;"><?php print $fields['field_student_class']->content; ?></div>
            </li>
            <li class="clearfix">
              <div class="lab" style="display: block; width: 100%; font-weight: 700; color: #111; text-align: left;"><?php print t("Thành tích nổi bật:"); ?></div>
              <div class="val" style="display: block; font-size: 13px; width: 100%; text-transform: none; text-align: left;"><?php print $fields['body']->content; ?></div>
            </li>                 
         </ul>

       </div>
    </div>

   </div>
</div>