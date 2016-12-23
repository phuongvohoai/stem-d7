<?php
global $parent_root;
?>

<?php if($page): //Display node blog single ?>

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> post single-course"<?php print $attributes; ?>>

  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="course-image">
           <?php print render($content['field_course_image']);?>
        </div>

        <div class="post-title">
          <?php print render($title_prefix); ?>
              <h1 <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
           <?php print render($title_suffix); ?>
        </div>

        <div class="course-meta clearfix">

          <?php /* if($content['field_course_teacher']){ ?>
            <div class="meta-item">
              <div class="icon icon-teacher"></div>
              <div class="content">
                <span class="lab"><?php print t('Teacher'); ?></span>
                <span class="val"><?php print render($content['field_course_teacher']) ?></span>
              </div>
            </div>
          <?php } */ ?>
          <?php if($content['field_course_category']){ ?>
            <div class="meta-item">
              <div class="icon icon-category"></div>
              <div class="content">
                <span class="lab"><?php print t('Category'); ?></span>
                <span class="val"><?php print render($content['field_course_category']) ?></span>
              </div>
            </div>
          <?php } ?>

          <?php if(isset($content['field_course_duration_time']) && $content['field_course_duration_time']){ ?>
            <div class="meta-item">
              <div class="icon icon-duration"></div>
              <div class="content">
                <span class="lab"><?php print t('Duration Time'); ?></span>
                <span class="val"><?php print render($content['field_course_duration_time']) ?></span>
              </div>
            </div>
          <?php } ?>
        </div>

        <div class="clearfix"></div>

        <div class="course-content">
          <?php
            hide($content['taxonomy_forums']);
            hide($content['comments']);
            hide($content['links']);
            hide($content['field_tags']);
            hide($content['field_course_image']);
            hide($content['field_course_price']);
            hide($content['field_course_feature']);
            hide($content['field_course_teacher']);
            hide($content['field_course_lessons']);
            hide($content['field_course_category']);
            print render($content);
          ?>
        </div>

        <?php
        $course_features = field_get_items('node', $node, 'field_course_feature');
        if(isset($course_features) && $course_features){ ?>
          <div class="course-features margin-top-45">
            <div class="course-subtitle"><?php print t('Key Features') ?></div>
            <div class="row">
                <?php
                $i = 0;
                foreach($course_features as $key => $course_feature) {
                  $i++;
                  if($course_feature['value']){ ?>
                      <div class="clearfix col-md-6 col-sm-12 col-xs-12 feature-item <?php if($i%2==0) print 'clearfix last'?>"><i class="fa fa-check"></i><span><?php print $course_feature['value'] ?></span></div>
                  <?php
                    }
                  }
                ?>
            </div>
          </div>
        <?php } ?>

        <div class="clearfix"></div>
         <?php if(isset($content['field_course_lessons']) && $content['field_course_lessons']){ ?>
          <div class="course-lessons margin-top-45">
             <div class="course-subtitle margin-0"><?php print t('Lessons'); ?></div>
              <?php
              foreach($content['field_course_lessons'] as $key=>$field_collection) {
                if(is_numeric($key) && !empty($field_collection['entity']['field_collection_item'])) {
                  $field_lessons = current($field_collection['entity']['field_collection_item']);
                  $lesson_title = strip_tags(render($field_lessons['field_lesson_title']));
                  $lesson_duration = strip_tags(render($field_lessons['field_lesson_duration']));
                ?>
                <?php if(trim($lesson_title)){ ?>
                  <div class="lesson-item">
                      <i class="icon fa fa-check-square-o"></i>
                      <span class="lesson-content">
                        <span class="lesson-title"><?php print $lesson_title ?></span>
                        <span class="lesson-duration"><?php print $lesson_duration ?></span>
                      </span>
                  </div>
                <?php } ?>
              <?php
                }
              }
              ?>
          </div>
        <?php } ?>
      <div class="clearfix"></div>
        <?php
        // Only display the wrapper div if there are links.
          $links = render($content['links']);
          if ($links):
        ?>
        <?php if (!$teaser): ?>
          <div class="link-wrapper">
            <?php print $links; ?>
          </div>
        <?php endif; ?>
      <?php endif; ?>

        <div class="comment margin-top-10">
          <?php
            if ($teaser || !empty($content['comments']['comment_form'])) {
              unset($content['links']['comment']['#links']['comment-add']);
            }
            print render($content['comments']);
          ?>
        </div>

    </div>
  </div>
</article>
<?php endif ?>
