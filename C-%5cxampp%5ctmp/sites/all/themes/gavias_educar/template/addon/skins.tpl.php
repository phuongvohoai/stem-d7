<?php $skins = gavias_educar_get_predefined_param('skins'); ?>

<div class="gavias-skins-panel hidden-xs hidden-sm">
	<div class="control-panel"><i class="fa fa-eyedropper"></i></div>
	<div class="gavias-skins-panel-inner">
	   <?php 
		   if(module_exists('gavias_themer') && theme_get_setting('frontend_panel') == '1' && user_access('gavias_customize_preview')){
		   	include path_to_theme() . '/customize/form.php'; 
		   }
	   ?>
	</div>   
</div>

<div class="gavias-skins-panel gavias-skin-demo hidden-xs hidden-sm">
	<div class="control-panel"><i class="fa fa-cogs"></i></div>
	<div class="panel-skins-content">
		<div class="title">Color skins</div>
		<div class="text-center">
		<a class="item-color default" data-skin="default"></a>
			<?php foreach ($skins as $key => $skin) { ?>
				<a class="item-color <?php echo $key; ?>" data-skin="<?php echo $key; ?>"></a>
			<?php } ?>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="panel-skins-content">
		<div class="title">Body layout</div>
		<div class="text-center">
			<a class="layout" data-layout="boxed">Boxed</a>
			<a class="layout" data-layout="wide">Wide</a>
		</div>
	</div>
</div>

<script>
	 var gavias_dir_theme = "<?php echo (base_path() . drupal_get_path('theme', 'gavias_educar')) ?>" ;
</script>

