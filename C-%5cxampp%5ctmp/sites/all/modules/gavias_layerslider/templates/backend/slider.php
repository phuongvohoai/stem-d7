<input type="hidden" name="gid" value="<?php print arg(3);?>"/>
<input type="hidden" name="sid" value="<?php print arg(5);?>"/>
<div id="gavias_layerslider">
  <div class="back-list-sliders"><a href="?q=admin/gavias_layerslider/sliders/<?php print arg(3) ?>">Back list slider</a></div>
  <div>
    <ul id="slideslist" class="ui-tabs-nav ui-helper-reset hidden ui-helper-clearfix ">
    </ul>
    <div class="clearfix"></div>
    <div id="gavias_layerslider_main">
    <div class="g-wrapper">
     <div class="gavias-heading">Slide options</div>
      <table>
        <tr>
          <td width="33%">
            <label>Slider title</label>
            <input name="title" class="slide-option form-text" type="text" style="width: 100%;"/>
          </td>
          <td width="33%">
            <label>Status</label>
            <select name="status" class="slide-option form-select">
                <option value="1">Enable</option>
                <option value="0">Disable</option>
            </select>
          </td>
          <td width="33%">
            <label>Sort index</label>
            <input name="sort_index" type="number" class="slide-option form-text"/>
          </td>
        </tr>

        <tr>
          <td>
            <label>Background image</label>
            <input type="text" name="background_image" id="background-image" data-uri="[name=background_image_uri]" class="file-imce form-text slide-option"/>
  					<input type="hidden" name="background_image_uri" class="slide-option"/>
          </td>
          <td>
           <label>Background color(example: #f5f5f5;)</label>
            <input type="text" name="background_color" class="slide-option"/>
          </td>
          <td width="33%">
            <label>Background Position </label>
            <select name="background_position" class="slide-option form-select">
                <option value="center top">center top</option>
                <option value="center right">center right</option>
                <option value="center bottom">center bottom</option>
                <option value="center center">center center</option>
                <option value="left top">left top</option>
                <option value="left center">left center</option>
                <option value="left bottom">left bottom</option>
                <option value="right top">right top</option>
                <option value="right center">right center</option>
                <option value="right bottom">right bottom</option>
            </select>
          </td>
        </tr>
        <tr>
          <td width="33%">
            <label>Background Repeat</label>
            <select name="background_repeat" class="slide-option form-select">
              <option value="no-repeat">no-repeat</option>
              <option value="repeat">repeat</option>
              <option value="repeat-x">repeat-x</option>
              <option value="repeat-y">repeat-y</option>
            </select>
          </td>
          <td>
            <label>Background Fit</label>
            <select name="background_fit" class="slide-option form-select">
              <option value="cover">cover</option>
              <option value="contain">contain</option>
              <option value="normal">normal</option>
            </select>
          </td>
          <td>
            <label>Show Overlay</label>
            <select name="overlay_enable" class="slide-option form-select">
              <option value="on">on</option>
              <option value="off">off</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label>Slide transition</label>
            <?php print gavias_defined_select('data_transition', $datatransition,'slide-option'); ?>
          </td>
          <td>
            <label>Slide Easing In</label>
            <?php print gavias_defined_select('slide_easing_in', $dataeasing_slide,'slide-option'); ?>
          </td>
          <td>
            <label>Slide Easing Out</label>
            <?php print gavias_defined_select('slide_easing_out', $dataeasing_slide,'slide-option'); ?>
          </td>
        </tr>
        <tr>
          <td>
            <label>Slide Delay</label>
            <input type="text" name="data_masterspeed" class="form-text slide-option">
          </td>
          <td></td>
          <td></td>
        </tr>
      </table>
    </div>
      
     <div class="clearfix">
      <?php include drupal_get_path('module', 'gavias_layerslider') . '/templates/backend/layers.php'; ?>
    </div>
    </div>
  </div>
</div>
<div>
  <input type="button" id="save" class="form-submit" value="Save"/>
</div>
<?php global $base_url; ?>
<script type="text/javascript">
  (function ($) {
  var filehandle = null;
  jQuery(document).ready(function(){
    $('.file-imce').click(function(){
			filehandle = $(this);

			Drupal.media.popups.mediaBrowser(function(files) {
					var image = files[0];
          
          if(Drupal.settings.basePath!='/' && Drupal.settings.basePath!=''){
            var tmp = (image.url).split(Drupal.settings.basePath);
            if(tmp[1]){
              filehandle.val(tmp[1]);
            }
          }else{
            var matches = url.match(/^https?\:\/\/([^\/?#]+)(?:[\/?#]|$)/i);
            var domain = matches && matches[1];
            var tmp = (image.url).split(domain);
            if(tmp[1]){
              tmp[1] = tmp[1].substring(1);
              filehandle.val(tmp[1].trim('/'));
            }
          }

					$(filehandle.data('uri')).val(image.uri);
          filehandle.trigger('onchange');
			});
    })

  function gavias_layerslider_fileselect(file, win){
		filehandle.val(file.url);
    filehandle.trigger('onchange');
    win.close();
  }

});
})(jQuery);

</script>
