<?php 
$page_featured_image = get_post_meta($post->ID,'page_featured_image',true);

if ($page_featured_image != "") {

// check for non full-width template
if (is_page_template('page-template-contact.php') || is_page_template('page-template-left-nav.php') || is_page_template('page-template-left-sidebar.php') || is_page_template('page-template-right-sidebar.php')) {
	
// echo small banner shortcode - image size is: 650px x 169px
echo do_shortcode('[image_frame size="small-banner" image_path="'.$page_featured_image.'" description="'.get_the_title().'" link_to_page="" target=""]');
	
} else {

// otherwise echo full banner shortcode - image size is: 940px x 161px	
echo do_shortcode('[image_frame size="full-banner" image_path="'.$page_featured_image.'" description="'.get_the_title().'" link_to_page="" target=""]');

	}
}
?>