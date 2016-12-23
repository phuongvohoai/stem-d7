<input type="hidden" name="sid" value="<?php print arg(2); ?>"/>
<div id="art_revolution">
    <div id="globalsettings">
        <fieldset id="global-settings" class="form-wrapper">
			<legend><span class="fieldset-legend"><div class="minus"></div><h3 class="options_heading">Global Settings</h3></span></legend>
            <div class="fieldset-wrapper">

					<div class="form-global-setting-item">
						<label>Height</label>
						<input name="startheight" class="form-text global-settings"/>
						<div class="description">This Height of the Grid where the Captions are displayed in Pixel. This Height is the Max height of Slider in Fullwidth Layout and in Responsive Layout.  In Fullscreen Layout the Gird will be centered Vertically in case the Slider is higher then this value.</div>
					</div>

					<div class="form-global-setting-item">
						<label>Full Height</label>
						<select name="fullheight" class="form-select global-settings">
							<option value="true">Yes</option>
							<option value="false">No</option>
						</select>
						<div class="description">Display full height screen of window.</div>
					</div>

					<div class="form-global-setting-item">
						<label>Automatic Slide</label>
						<input name="autoslide" class="form-text global-settings"/>
						<div class="description">The slides loop is automatic. </div>
					</div>

            </div>
        </fieldset>
    </div>
</div>
<div>
    <input type="button" id="save" class="form-submit" value="Save"/>
</div>

