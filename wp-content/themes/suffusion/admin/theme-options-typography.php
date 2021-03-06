<?php
/**
 * Lists out all the options from the Typography Section of the theme options
 * This file is included in functions.php
 *
 * @package Suffusion
 * @subpackage Admin
 */

global $suffusion_theme_name, $suffusion_safe_font_faces;

$suffusion_typography_options = array(
	array("name" => "Typography",
		"type" => "sub-section-2",
		"category" => "typography",
		"parent" => "root"
	),

	array("name" => "Body Fonts",
		"category" => "typo-body",
		"parent" => "typography",
		"type" => "sub-section-3",),

	array("name" => "General settings",
		"category" => "typo-general",
		"parent" => "typo-body",
		"type" => "sub-section-4",),

	array("name" => "Default or custom font styles?",
		"desc" => "You can decide to go with the colors / text styles of the theme you are using, or choose your own. " .
				"If you choose default colors / text styles here then the rest of your settings in this section will be ignored. " .
				"If you choose custom styles then the settings you make here will override the theme's settings.",
		"id" => "suf_body_font_style_setting",
		"parent" => "typo-body",
		"grouping" => "typo-general",
		"note" => "Please set this option to \"Custom styles\" if you want to override the theme's settings for the fonts.",
		"type" => "radio",
		"options" => array("theme" => "Theme styles",
			"custom" => "Custom styles"),
		"std" => "theme"),

	array("name" => "Font Face",
		"desc" => "Pick a browser-safe font or a font from Google web-fonts",
		"id" => "suf_body_font_family",
		"parent" => "typo-body",
		"grouping" => "typo-general",
		"note" => "Note that the fonts may not render correctly here, depending on your OS / browser.",
		"type" => "select",
		"options" => $suffusion_safe_font_faces,
		"std" => "Arial, Helvetica, sans-serif"),

	array("name" => "Font Color",
		"desc" => "Set the color of the fonts being used. " .
				"Make sure that your font color goes well enough with the theme. " .
				"If you have chosen default styles above then this setting will be ignored.",
		"id" => "suf_font_color",
		"parent" => "typo-body",
		"grouping" => "typo-general",
		"type" => "color-picker",
		"std" => suffusion_evaluate_style("suf_font_color", $suffusion_theme_name)),

	array("name" => "Link Color",
		"desc" => "Set the color of the links in the main content. Font colors in the sidebar are unaffected. " .
				"If you have chosen default styles above then this setting will be ignored.",
		"id" => "suf_link_color",
		"parent" => "typo-body",
		"grouping" => "typo-general",
		"type" => "color-picker",
		"std" => suffusion_evaluate_style("suf_link_color", $suffusion_theme_name)),

	array("name" => "Link Decoration",
		"desc" => "Set the effects for the link text. If you have chosen default styles above then this setting will be ignored.",
		"id" => "suf_link_style",
		"parent" => "typo-body",
		"grouping" => "typo-general",
		"type" => "radio",
		"options" => array("underline" => "Underlined", "none" => "None"),
		"std" => "none"),

	array("name" => "Visited Link Color",
		"id" => "suf_visited_link_color",
		"parent" => "typo-body",
		"grouping" => "typo-general",
		"type" => "color-picker",
		"std" => suffusion_evaluate_style("suf_visited_link_color", $suffusion_theme_name)),

	array("name" => "Visited Link Decoration",
		"id" => "suf_visited_link_style",
		"parent" => "typo-body",
		"grouping" => "typo-general",
		"type" => "radio",
		"options" => array("underline" => "Underlined", "none" => "None"),
		"std" => "none"),

	array("name" => "Link Hover Color",
		"id" => "suf_link_hover_color",
		"parent" => "typo-body",
		"grouping" => "typo-general",
		"type" => "color-picker",
		"std" => suffusion_evaluate_style("suf_link_hover_color", $suffusion_theme_name)),

	array("name" => "Link Hover Decoration",
		"desc" => "Set the effects for the link text on which you are hovering. " .
				"If you have chosen default styles above then this setting will be ignored.",
		"id" => "suf_link_hover_style",
		"parent" => "typo-body",
		"grouping" => "typo-general",
		"type" => "radio",
		"options" => array("underline" => "Underlined", "none" => "None"),
		"std" => "underline"),

	array("name" => "Main Content",
		"desc" => "Change settings for the main content",
		"category" => "typo-main",
		"parent" => "typo-body",
		"type" => "sub-section-4",),

	array("name" => "Default or custom font styles?",
		"desc" => "Override skin defaults",
		"id" => "suf_main_font_style_setting",
		"parent" => "typo-body",
		"grouping" => "typo-main",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Font Settings",
		"id" => "suf_main_font_size",
		"parent" => "typo-body",
		"grouping" => "typo-main",
		"type" => "font",
		"options" => array(),
		"exclude" => array('font-weight', 'font-variant', 'font-style', 'font-face', 'font-color'),
		"std" => array("font-size" => "14", "font-size-type" => "px")),

	array("name" => "Post and Page Titles",
		"desc" => "Change settings for the main content",
		"category" => "typo-titles",
		"parent" => "typography",
		"type" => "sub-section-3",),

	array("name" => "Default or custom font styles?",
		"desc" => "Override skin defaults",
		"id" => "suf_title_font_style_setting",
		"parent" => "typo-titles",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Unlinked post titles",
		"id" => "suf_post_title_font",
		"parent" => "typo-titles",
		"type" => "font",
		"options" => array(),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal", "font-size" => "28", "font-size-type" => "px")),

	array("name" => "Linked post titles",
		"id" => "suf_post_title_link_font",
		"parent" => "typo-titles",
		"type" => "font",
		"options" => array(),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal", "font-size" => "28", "font-size-type" => "px")),

	array("name" => "Link Hover Settings",
		"id" => "suf_post_title_link_hover_font",
		"parent" => "typo-titles",
		"type" => "font",
		"options" => array(),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal", "font-size" => "28", "font-size-type" => "px")),

	array("name" => "Content headers",
		"desc" => "Change settings for the content headers, h1, h2, ... h6",
		"category" => "typo-headers",
		"parent" => "typography",
		"type" => "sub-section-3",),

	array("name" => "Default or custom font styles?",
		"desc" => "Override skin defaults",
		"id" => "suf_header_font_setting",
		"parent" => "typo-headers",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "H1 Font Settings",
		"id" => "suf_post_h1_font",
		"parent" => "typo-headers",
		"type" => "font",
		"options" => array(),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal", "font-size" => "28", "font-size-type" => "px")),

	array("name" => "H2 Font Settings",
		"id" => "suf_post_h2_font",
		"parent" => "typo-headers",
		"type" => "font",
		"options" => array(),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal", "font-size" => "26", "font-size-type" => "px")),

	array("name" => "H3 Font Settings",
		"id" => "suf_post_h3_font",
		"parent" => "typo-headers",
		"type" => "font",
		"options" => array(),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal", "font-size" => "23", "font-size-type" => "px")),

	array("name" => "H4 Font Settings",
		"id" => "suf_post_h4_font",
		"parent" => "typo-headers",
		"type" => "font",
		"options" => array(),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal", "font-size" => "21", "font-size-type" => "px")),

	array("name" => "H5 Font Settings",
		"id" => "suf_post_h5_font",
		"parent" => "typo-headers",
		"type" => "font",
		"options" => array(),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal", "font-size" => "19", "font-size-type" => "px")),

	array("name" => "H6 Font Settings",
		"id" => "suf_post_h6_font",
		"parent" => "typo-headers",
		"type" => "font",
		"options" => array(),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal", "font-size" => "16", "font-size-type" => "px")),

	array("name" => "Custom Layout",
		"desc" => "Change settings for custom layouts",
		"category" => "typo-clt",
		"parent" => "typography",
		"type" => "sub-section-3",),

	array("name" => "Page Title",
		"category" => "typo-clt-title",
		"parent" => "typo-clt",
		"type" => "sub-section-4",),

	array("name" => "Default or custom font styles?",
		"desc" => "Override skin defaults",
		"id" => "suf_clt_title_font_setting",
		"parent" => "typo-clt",
		"grouping" => "typo-clt-title",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Title Font",
		"desc" => "Setup the font for page title for the custom layout",
		"id" => "suf_clt_title_font",
		"parent" => "typo-clt",
		"grouping" => "typo-clt-title",
		"type" => "font",
		"options" => array(),
		"std" => array("color" => "#444444", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal", "font-size" => "24", "font-size-type" => "px")),

	array("name" => "Comments",
		"desc" => "Change settings for comments",
		"category" => "typo-comments",
		"parent" => "typography",
		"type" => "sub-section-3",),

	array("name" => "Default or custom font styles?",
		"desc" => "Override skin defaults",
		"id" => "suf_comment_font_setting",
		"parent" => "typo-comments",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Comment form title",
		"id" => "suf_comment_header_font",
		"parent" => "typo-comments",
		"type" => "font",
		"options" => array(),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal", "font-size" => "16", "font-size-type" => "px")),

	array("name" => "Comment Body",
		"id" => "suf_comment_body_font",
		"parent" => "typo-comments",
		"type" => "font",
		"options" => array(),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal", "font-size" => "14", "font-size-type" => "px")),

	array("name" => "Footer",
		"desc" => "Change settings for the footer",
		"category" => "typo-footer",
		"parent" => "typography",
		"type" => "sub-section-3",),

	array("name" => "Default or custom font styles?",
		"desc" => "Override skin defaults",
		"id" => "suf_footer_font_setting",
		"parent" => "typo-footer",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Text",
		"id" => "suf_footer_text_font",
		"parent" => "typo-footer",
		"type" => "font",
		"options" => array(),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal", "font-size" => "28", "font-size-type" => "px")),

	array("name" => "Links",
		"id" => "suf_footer_link_font",
		"parent" => "typo-footer",
		"type" => "font",
		"options" => array(),
		"exclude" => array('font-size', 'font-size-type'),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal")),

	array("name" => "Link Hovering",
		"id" => "suf_footer_link_hover_font",
		"parent" => "typo-footer",
		"type" => "font",
		"options" => array(),
		"exclude" => array('font-size', 'font-size-type'),
		"std" => array("color" => "#FFFFFF", "font-face" => "Arial, Helvetica, sans-serif", "font-weight" => "normal",
			"font-style" => "normal", "font-variant" => "normal",)),

	array("name" => "Drop Caps",
		"category" => "typo-drop",
		"parent" => "typography",
		"type" => "sub-section-3",),

	array("name" => "Applicable post views",
		"desc" => "Set a \"Drop caps\" effect for the first letter in your content.",
		"id" => "suf_drop_cap_post_views",
		"parent" => "typo-drop",
		"type" => "multi-select",
		"options" => suffusion_get_formatted_options_array(
			array(
				'full-content' => 'Full content',
				'excerpt' => 'Excerpts',
				'suf-tile-text' => 'Tile layout',
				'suf-mag-excerpt-text' => 'Magazine tiles',
				'page' => 'Static pages',
			)),
		"std" => ""),

	array("name" => "Applicable post formats",
		"id" => "suf_drop_cap_post_formats",
		"parent" => "typo-drop",
		"type" => "multi-select",
		"options" => suffusion_get_formatted_options_array(
			array(
				'standard' => 'Standard',
				'aside' => 'Aside',
				'status' => 'Status',
				'chat' => 'Chat',
				'link' => 'Link',
				'image' => 'Image',
				'gallery' => 'Gallery',
				'quote' => 'Quote',
				'audio' => 'Audio',
				'video' => 'Video',
			)),
		"std" => ""),
);
