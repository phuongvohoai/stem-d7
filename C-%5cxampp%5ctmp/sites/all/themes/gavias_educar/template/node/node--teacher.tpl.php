<?php 
$uid = user_load($node->uid);
global $parent_root;
?>

<?php if($page): //Display node blog single ?>

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> post single-teacher"<?php print $attributes; ?>>

<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="teacher-information">   
       <?php print render($content['field_teacher_image']);?>
       <div class="information-inner">
         <div class="post-title">
            <h1 <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
         </div> 
         <ul class="list-info">
            <li class="clearfix">
              <div class="lab"><?php print t('Job') ?></div>
              <div class="val"><?php print render($content['field_teacher_job']) ?></div>
            </li>
            <li class="clearfix">
              <div class="lab"><?php print t('Specialized') ?></div>
              <div class="val"><?php print render($content['field_teacher_specialized']) ?></div>
            </li>
            <li class="clearfix">
              <div class="lab"><?php print t('Experience') ?></div>
              <div class="val"><?php print render($content['field_teacher_experience']) ?></div>
            </li>
            <li class="clearfix">
              <div class="lab"><?php print t('Email') ?></div>
              <div class="val"><?php print render($content['field_teacher_email']) ?></div>
            </li>
         </ul>
         
          <?php if(isset($content['field_teacher_social']) && $content['field_teacher_social']){ ?>
            <ul class="teacher-social clearfix">
                <?php 
                foreach($content['field_teacher_social'] as $key=>$field_collection) {
                  if(is_numeric($key) && !empty($field_collection['entity']['field_collection_item'])) {
                    $field_social = current($field_collection['entity']['field_collection_item']);
                    $social_icon = strip_tags(render($field_social['field_teacher_social_icon']));
                    $social_link = strip_tags(render($field_social['field_teacher_social_link']));
                ?> 
                  <?php if($social_icon && $social_link){ ?>
                    <li><a href="<?php print $social_link ?>"><i class="<?php print $social_icon; ?>"></i></a></li>
                  <?php } ?>  
                <?php
                  }
                }
                ?>
            </ul>
          <?php } ?>
        </div>
    </div>  
  </div>

  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
      <?php if(isset($content['field_teacher_skills']) && $content['field_teacher_skills']){ ?>
        <div class="teacher-skills">
            <?php 
            foreach($content['field_teacher_skills'] as $key=>$field_collection) {
              if(is_numeric($key) && !empty($field_collection['entity']['field_collection_item'])) {
                $field_skills = current($field_collection['entity']['field_collection_item']);
                $label = strip_tags(render($field_skills['field_teacher_skills_label']));
                $volume = 0;
                if(strip_tags(render($field_skills['field_teacher_skills_volume'])))
                  $volume = strip_tags(render($field_skills['field_teacher_skills_volume'])); 
            ?> 
              <?php if($label){ ?>
                <div class="progress-label"><?php print $label ?></div>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" data-progress-animation="<?php print $volume; ?>%">
                        <span class="percentage"><?php print $volume ?>%</span>
                    </div>
                </div>
              <?php } ?>  
            <?php
              }
            }
            ?>
        </div>
      <?php } ?>

       <div class="teacher-bio">
        <?php
          hide($content['taxonomy_forums']);
          hide($content['comments']);
          hide($content['links']);
          hide($content['field_tags']);
          hide($content['field_teacher_image']);
          hide($content['field_teacher_job']);
          hide($content['field_teacher_experience']);
          hide($content['field_teacher_skills']);
          hide($content['field_teacher_specialized']);
          hide($content[' field_teacher_email']);
          hide($content['field_teacher_social']);
          print render($content);
        ?>
      </div>

      <?php 
        //Course for teacher
          // $query = db_select('node', 'n');
          // $query->leftJoin('field_data_field_lesson_course', 'd', '(d.entity_id = n.nid AND d.entity_type = :node)', array(':node' => 'node'));
          // $query
          //   ->fields('n', array('nid','title'))
          //   ->condition('type', 'lesson')
          //   ->condition('status', 1)
          //   ->condition('d.field_lesson_course_nid', $node->vid);
          // $result = $query->execute();
          // foreach ($result as $node) {
          //     $title = $node->title;
          //     print"<pre>";print($id);
          // }
      ?>

      <div class="comment">
        <?php
          if ($teaser || !empty($content['comments']['comment_form'])) {
            unset($content['links']['comment']['#links']['comment-add']);
          }
           print render($content['comments']);
        ?>
      </div>
  </div>

</div>

<?php endif ?>