<?php 
  $_id=gavias_layerslider_makeid();
?>
<div<?php print $attributes;?>>
   <div id="<?php print $_id; ?>" class="rev_slider">
      <ul>
         <?php print $content;?>
      </ul>
      <div class="tp-bannertimer tp-top"></div>
   </div>
</div>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
  jQuery(document).ready(function($){
    $('#<?php print $_id ?>').show().revolution(<?php print $ss ?>);
  });
//--><!]]>
</script>