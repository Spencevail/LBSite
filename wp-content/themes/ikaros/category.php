<?php
/*---------------------------------
	Tags Page Template
------------------------------------*/
get_header(); 
?>

	<h1 class="center"><?php _e('Categories Archives', 'ikaros'); ?></h1>
	<div class="intro center"><?php _e( 'You are currently viewing all posts published under <strong>' . get_category(get_query_var('cat'))->name . '</strong>.', 'ikaros' ); ?></div>

	<div class="post-container">
	
		<?php get_template_part( 'loop', 'category' ); ?>
				
		<div id="navigation">
			<?php rb_pagination('', 3) ?>
		</div>

	 </div>

	<div class="sidebar">
		<?php if(is_active_sidebar('rb_blog_widget'))
				dynamic_sidebar('rb_blog_widget'); ?>
	</div>
	
	<?php get_footer(); ?>