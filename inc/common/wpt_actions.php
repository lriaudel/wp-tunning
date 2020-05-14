<?php
global $wpt_actions;

/**
 * All actions list
 * @var array
 */
$wpt_actions = array(
	'rest-api' =>  array(
		'label'			=> __( 'Deactivate REST-API', WPT_LG ),
		'description'	=> __( 'This link become not accessible: ', WPT_LG ).'<code><a href="'.home_url('wp-json').'">'.home_url('wp-json').'</a></code>',
		'section'		=> 'security',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_deactivate_rest_api',
		'default'		=> 'false',
		'args'			=> '',
	),
	'rest-api-users' =>  array(
		'label'			=> __( 'Disable REST API user endpoints ', WPT_LG ),
		'description'	=> __( 'Disable the user endpoint for non connected user (not display the list of wordpress users)', WPT_LG ).' <code><a href="'.home_url('/wp/v2/users').'">'.home_url('/wp/v2/users').'</a></code>',
		'section'		=> 'security',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_disable_rest_api_user',
		'default'		=> 'true',
		'args'			=> '',
	),
	'connection_error' => array(
		'label'			=> __( 'Hide connection error', WPT_LG ),
		'description'	=> __( 'Hide connection error information in <code>wp-login.php</code>', WPT_LG ),
		'section'		=> 'security',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_deactivate_connection_error_wplogin',
		'default'		=> 'true',
		'args'			=> '',
	),
	'deactivate_author' => array(
		'label'			=> __( 'Deactivate author page and author link', WPT_LG ),
		'description'	=> __( 'This links and pages list the login of differents authors', WPT_LG ),
		'section'		=> 'security',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_deactivate_author_page_and_link',
		'default'		=> 'true',
		'args'			=> '',
	),
	'protect_media_filename' => array(
		'label'			=> __( 'No punctuation and accents for uploaded file', WPT_LG ),
		'description'	=> '',
		'section'		=> 'media',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_protect_media_filename',
		'default'		=> 'true',
		'args'			=> ''/*array( 'class' => 'meme' )*/
	),
	'add_medium_large' => array(
		'label'			=> __( 'Add format <em>Medium Large</em>', WPT_LG ),
		'description'	=> __( 'Display the existent default format <em>Medium Large</em> (768px) when you choose a media in a post', WPT_LG ),
		'section'		=> 'media',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_add_medium_large',
		'default'		=> 'true',
		'args'			=> '',
	),
	'add_svg_mime_types' => array(
		'label'			=> __( 'Allow SVG files', WPT_LG ),
		'description'	=> '',
		'section'		=> 'media',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_add_svg_mime_types',
		'default'		=> 'true',
		'args'			=> '',
	),
	'remove_default_dashboard_widgets' => array(
		'label'			=> __( 'Clean dashboard', WPT_LG ),
		'description'	=> __( 'Deactivate the default widget (<em>welcome panel</em>, <em>Activity</em>, <em>Quick Draft</em>, <em>WordPress Events and News</em>)  in admin dashboard', WPT_LG ),
		'section'		=> 'misc',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_remove_default_dashboard_widgets',
		'default'		=> 'true',
		'args'			=> '',
	),
	'disallow_file_edit' => array(
		'label'			=> __( 'Disallow file editor', WPT_LG ),
		'description'	=> __( 'Disallow file editor for plugins and themes in wp-admin.', WPT_LG ),
		'section'		=> 'misc',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_disallow_file_edit',
		'default'		=> 'true',
		'args'			=> '',
	),
	'disable_emojis' => array(
		'label'			=> __( 'Disabled emoji', WPT_LG ),
		'description'	=> __( 'Reduces resources number loaded on front page', WPT_LG ),
		'section'		=> 'misc',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_disable_emojis',
		'default'		=> 'true',
		'args'			=> '',
	),
	'deactivate_H1' => array(
		'label'			=> __( 'Remove H1 in Tiny MCE', WPT_LG ),
		'description'	=> __( '<em>H1</em> should never be used in the editor', WPT_LG ),
		'section'		=> 'misc',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_deactivate_H1',
		'default'		=> 'true',
		'args'			=> '',
	),

	'disable_editor_fullscreen' => array(
		'label'			=> __( 'Disable Block Editor default FullScreen mode', WPT_LG ),
		'description'	=> '',
		'section'		=> 'gutenberg',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_disable_editor_fullscreen',
		'default'		=> 'false',
		'args'			=> '',
	),
	
	/*'deactive_post_type_gutenberg' => array(
		'label'			=> __( 'Deactive Gutenberg by post type', WPT_LG ),
		'description'	=> __( '', WPT_LG ),
		'section'		=> 'gutenberg',
		'type'			=> 'custom',
		'custom'		=> 'wptuning_deactive_post_type_gutenberg_options',
		'cb'			=> 'wptuning_deactive_post_type_gutenberg',
		'default'		=> 'false',
		'args'			=> wptuning_deactive_post_type_gutenberg_get_class(),
	),*/
	'define_post_revision' => array(
		'label'			=> __( 'Number max of revisions', WPT_LG ),
		'description'	=> __( 'Define the number of revisions you want that WordPress saved. (Leave blank for unlimited)', WPT_LG ),
		'section'		=> 'misc',
		'type'			=> 'text',
		'cb'			=> 'wptuning_define_post_revision',
		'default'		=> '5',
		'args'			=> '',
	),
	'wp_generator' => array(
		'label'			=> __( 'Remove WordPress version', WPT_LG ),
		'description'	=> __( 'Remove the generator tag that is generated', WPT_LG ),
		'section'		=> 'head',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_wp_generator',
		'default'		=> 'true',
		'args'			=> '',
	),
	'wlwmanifest_link' => array(
		'label'			=> __( 'Remove Windows Live Writer Manifest', WPT_LG ),
		'description'	=> __( 'Remove Windows Live Writer Manifest Link.', WPT_LG ),
		'section'		=> 'head',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_wlwmanifest_link',
		'default'		=> 'true',
		'args'			=> '',
	),
	/*'rsd_link' => array(
		'label'			=> 'Deactivate RSD',
		'description'	=> 'Deactivate Display the link to the Really Simple Discovery service endpoint',
		'section'		=> 'head',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_rsd_link',
		'args'			=> '',
	),
	'xmlrpc_enabled' => array(
		'label'			=> 'Deactivate XML-RPC',
		'description'	=> 'Deactivate XML-RPC methods requiring authentication are enabled.',
		'section'		=> 'head',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_xmlrpc_enabled',
		'args'			=> '',
	),*/
	'xmlrpc_enabled_rsd' => array(
		'label'			=> __( 'Deactivate XML-RPC', WPT_LG ),
		'description'	=> __( 'Deactivate XML-RPC methods requiring authentication are enabled.', WPT_LG ),
		'section'		=> 'head',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_xmlrpc_enabled_rsd',
		'default'		=> 'true',
		'args'			=> '',
	),
	'feed_links' => array(
		'label'			=> __( 'Remove RSS feed', WPT_LG ),
		'description'	=> '',
		'section'		=> 'head',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_feed_link',
		'default'		=> 'false',
		'args'			=> '',
	),
	'feed_links_extra' => array(
		'label'			=> __( 'Remove Comment RSS feed', WPT_LG ),
		'description'	=> '',
		'section'		=> 'head',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_comments_feed',
		'default'		=> 'true',
		'args'			=> '',
	),
	/***
	'start_post_rel_link' => array(
		'label'			=> '',
		'description'	=> '',
		'section'		=> 'head',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_start_post_rel_link',
		'args'			=>'',
	),
	'wp_shortlink_wp_head' => array(
		'label'			=> '',
		'description'	=> '',
		'section'		=> 'head',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_wp_shortlink_wp_head',
		'args'			=>'',
	),
	'index_rel_link' => array(
		'label'			=> '',
		'description'	=> '',
		'section'		=> 'head',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_index_rel_link',
		'args'			=>'',
	),
	'parent_post_rel_link' => array(
		'label'			=> '',
		'description'	=> '',
		'section'		=> 'head',
		'type'			=> 'checkbox',
		'cb'			=> 'wptuning_parent_post_rel_link',
		'args'			=>'',
	),
	*/
); // end $wpt_actions
