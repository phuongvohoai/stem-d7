
<div class="isotope-item <?php print strip_tags($fields['field_portfolio_tags']->content); ?> grid ">		
	<div class="grid-inner col-inner clearfix">
		
		<div class="views-field views-field-field-portfolio-image image">  
			<div class="field-content">

				<?php print $fields['field_portfolio_image']->content; ?>
			</div> 
		</div>  
		<div class="view-item-body">
			<div class="views-field views-field-title"> 
				<?php print $fields['title']->content; ?>
			</div>  
			<div class="views-field views-field-body">        
				<?php print $fields['body']->content; ?>
			</div>
		</div>
		
	</div>
</div>