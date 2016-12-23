<?php global $theme_root; ?>
<input type="hidden" name="sid" value="<?php print arg(2); ?>"/>
<div id="gavias_slider_setting">
    <div id="review-content">
        <div class="main-list-silde space-20">
            <ul id="gavias_list_slide" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix "></ul>
            <a href="#" id="addslide">Add Slide</a>
        </div>

        <div class="clearfix"></div>

        <div id="slide-reviews" class="space-20" style="margin:0 auto; width:1170px; height: 400px; border: 1px solid #ccc; list-style: none; position: relative;">
        
        </div>

        <div class="clearfix "></div>

        <div id="gavias_slide_main">
            <fieldset class="form-wrapper no-border">
                <legend class="gavias_heading"><span class="fieldset-legend"><h3 class="options_heading">Slide options</h3></span></legend>
                <div class="fieldset-wrapper">
                    <table>
                        <tbody>
                            <tr>
                                <td width="33.3%">
                                    <label>Slide title</label> 
                                    <input name="title" class="slide-option form-text"/>
                                </td>
                                <td width="33.3%">
                                    <label>Background image</label> 
                                    <input name="background_image" id="background-image" data-uri="[name=background_image_uri]" class="file-imce form-text slide-option" onchange="setSlideSackground(this.value)"/>
                                    <input type="hidden" name="background_image_uri" class="slide-option"/>
                                </td>
                                <td width="33.3%">
                                    <label>Background color</label> 
                                    <input type="text" name="background_color" class="slide-option form-text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Enables Opacity from scroll</label> 
                                    <select name="opacity_enable" class="slide-option form-select">
                                        <option value="1">Enable</option>
                                        <option value="0">Disable</option>
                                    </select>
                                </td>
                                <td>
                                    <label>Show Overlay</label> 
                                    <select name="overlay_enable" class="slide-option form-select">
                                        <option value="1">Enable</option>
                                        <option value="0">Disable</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </fieldset>

             <fieldset class="form-wrapper no-border">
                <legend class="gavias_heading"><span class="fieldset-legend"><h3 class="options_heading">Slide data options</h3></span></legend>
                 <div class="fieldset-wrapper">
                    <table>
                     <tbody>
                        <tr>
                            <td colspan="2">
                                <label>Caption Title</label> 
                                 <textarea cols="70" rows="5" class="slide-option form-text" name="caption_title"></textarea>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label>Caption Description</label> 
                                <textarea cols="70" rows="5" class="slide-option form-text" name="caption_description"></textarea>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td width="33.3%">
                                <label>Caption Title Font Size</label> 
                                <select name="caption_title_fs" class="slide-option form-select">
                                    <?php for($i=15; $i< 100; $i++){ ?>
                                        <option value="<?php print $i; ?>"> <?php print $i; ?> </option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td width="33.3%">
                                 <label>Caption Title Letter Spacing(px)</label> 
                                 <select name="caption_title_ls" class="slide-option form-select">
                                    <?php for($i=0; $i< 36; $i++){ ?>
                                        <option value="<?php print $i; ?>"> <?php print $i; ?> </option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td width="33.3%">
                                <label>Caption Title Font Weight</label>
                                <select name="caption_title_fw" class="slide-option form-select">
                                    <option value="100">100</option>
                                    <option value="300">300</option>
                                    <option value="400">400</option>
                                    <option value="500">500</option>
                                    <option value="600">600</option>
                                    <option value="700">700</option>
                                    <option value="800">800</option>
                                    <option value="900">900</option>
                                </select>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                 <label>Caption Skin</label> 
                                <select name="caption_skin" class="slide-option form-select">
                                    <option value="">Select Option</option>
                                    <option value="light">Light</option>
                                    <option value="dark">Dark</option>
                                    <option value="custom">Custom Color (Change from below option)</option>
                                </select>
                            </td>
                            <td>
                                 <label>Custom Caption Text Color(ex: #F5f5f5)</label> 
                                 <input type="text" name="caption_skin_custom" class="slide-option form-text"/>
                            </td>
                            <td>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                 <label>Text button 1</label> 
                                 <input type="text" name="caption_text_btn_1" class="slide-option form-text"/>
                            </td>
                            <td>
                                 <label>Link button 1</label> 
                                 <input type="text" name="caption_link_btn_1" class="slide-option form-text"/>
                            </td>
                            <td>
                                <label>Skin button 1</label> 
                                 <select name="btn_skin_1" class="slide-option form-select">
                                    <option value="">Select Option</option>
                                    <option value="outline">Outline</option>
                                    <option value="flat">Flat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                 <label>Text button 2</label> 
                                 <input type="text" name="caption_text_btn_2" class="slide-option form-text"/>
                            </td>
                            <td>
                                 <label>Link button 2</label> 
                                 <input type="text" name="caption_link_btn_2" class="slide-option form-text"/>
                            </td>
                            <td>
                                <label>Skin button 2</label> 
                                 <select name="btn_skin_2" class="slide-option form-select">
                                    <option value="">Select Option</option>
                                    <option value="outline">Outline</option>
                                    <option value="flat">Flat</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Content Animation</label> 
                                <select name="caption_animation" class="slide-option form-select">
                                    <option value="">Select Option</option>
                                    <option value="fade-in">Fade in</option>
                                    <option value="slide-top">Slide from Top</option>
                                    <option value="slide-left">Slide from Left</option>
                                    <option value="slide-bottom">Slide from Bottom</option>
                                    <option value="slide-right">Slide from Right</option>
                                    <option value="scale-down">Scale Down</option>
                                    <option value="flip-x">Horizontally Flip</option>
                                    <option value="flip-y">Vertically Flip</option>
                                </select>
                            </td>

                             <td>
                                <label>Content Align</label>
                                <select name="caption_align" class="slide-option form-select">
                                    <option value="">Select Option</option>
                                    <option value="left_top">Left Top</option>
                                    <option value="center_top">Center Top</option>
                                    <option value="right_top">Right Top</option>
                                    <option value="left_center">Left Center</option>
                                    <option value="center_center">Center Center</option>
                                    <option value="right_center">Right Center</option>
                                    <option value="left_bottom">Left Bottom</option>
                                    <option value="center_bottom">Center Bottom</option>
                                    <option value="right_bottom">Right Bottom</option>
                                </select>
                            </td>
                             <td>
                            </td>
                        </tr>
                        </tbody> 
                    </table>
                </div>    
            </fieldset>
        </div>
    </div>
</div>
<div>
<input type="button" id="save" class="form-submit" value="Save"/>

</div>
<?php global $base_url; ?>
<script type="text/javascript">
    var filehandle = null;
    jQuery(document).ready(function($) {
        $('.file-imce').click(function() {
            filehandle = $(this);
            Drupal.media.popups.mediaBrowser(function(files) {
                file_directory = 'abc';
                var image = files[0];
                console.log(image);
                filehandle.val(image.url).trigger('onchange');
                $(filehandle.data('uri')).val(image.uri);
                
            });
        })
    });

    function send(fid) {
        alert(fid);
    }

    function gavias_revolution_fileselect(file, win) {
        filehandle.val(file.url);
        filehandle.trigger('onchange');
        win.close();
    }

    function insertImageToLayer(url) {
        var layerid = $currentSlide + '-' + $currentLayer;
        var img = jQuery('<img>').attr('src', url);
        jQuery('#' + layerid).find('.inner').html(img);
        var image = new Image();
        image.onload = function() {
            jQuery('#' + layerid).width(this.width);
            jQuery('#' + layerid).height(this.height);
            jQuery('input[name=width]').val(this.width);
            jQuery('input[name=height]').val(this.height);
        }
        image.src = url;
    }

    function setSlideSackground(url) {
        jQuery('#slide-reviews').css({
            backgroundImage: 'url(' + url + ')'
        });
    }
</script>