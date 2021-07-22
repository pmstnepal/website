<?php
/**
 * PMST Nepal functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since PMST Nepal Flims 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since PMST Nepal Flims 1.0
 */
 /**
* Image Resize
*/

if(!is_admin()){ 
	require_once(get_template_directory().'/front/resource_loader.php');
	require_once(get_template_directory() . '/inc/BFI_Thumb.php');
}
add_action("admin_init", "admin_init");
function admin_init(){
add_meta_box("slider_info", "Image", "build_slider_info", "slider", "advanced", "default");
add_meta_box("txt_country_meta", "Country", "build_txt_country_meta", "1st_chance", "side", "low");
add_meta_box("txt_sub_meta", "Sub title", "build_txt_sub_text", "team", "advanced", "default");
add_meta_box("txt_featured_meta", "Featured", "build_gallery_featured", "gallery", "side", "low");
}

//gallery//
//----------register and label gallery post type
$gallery_labels = array(
	'name' => _x('Gallery', 'post type general name'),
	'singular_name' => _x('Gallery', 'post type singular name'),
	'add_new' => _x('Add New', 'gallery'),
	'add_new_item' => __("Add New Gallery"),
	'edit_item' => __("Edit Gallery"),
	'new_item' => __("New Gallery"),
	'view_item' => __("View Gallery"),
	'search_items' => __("Search Gallery"),
	'not_found' =>  __('No galleries found'),
	'not_found_in_trash' => __('No galleries found in Trash'), 
	'parent_item_colon' => ''
);

$gallery_args = array(
	'labels' => $gallery_labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true, 
	'query_var' => true,
	'rewrite' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'capability_type' => 'post',
	'supports' => array('title','editor','excerpt', 'thumbnail', 'tags'),
	'menu_icon' => get_bloginfo('template_directory') . '/assets/images/icons/media-button.png' //16x16 png if you want an icon
); 
register_post_type('gallery', $gallery_args);
//----------------------------------------------
/***************Start Custom taxonomy - Type *********************/
	$labels = array(
		'name' => _x( 'Types', 'taxonomy general name' ),
		'singular_name' => _x( 'Types', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Types' ),
		'all_items' => __( 'All Types' ),
		'parent_item' => __( 'Parent Types' ),
		'parent_item_colon' => __( 'Parent Types:' ),
		'edit_item' => __( 'Edit Types' ), 
		'update_item' => __( 'Update Types' ),
		'add_new_item' => __( 'Add New Types' ),
		'new_item_name' => __( 'New Types Name' ),
		'menu_name' => __( 'Types' ),
	);
	$args=array(
		"hierarchical" => true,
		"labels" => $labels,
		"show_ui" => true,
		"query_var" => true,
		'rewrite' => array(
			'slug' => 'type', // This controls the base slug that will display before each term
			'with_front' => false, // Don't display the category base before "/locations/"
			'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
		)
	);
	register_taxonomy('type', array('gallery','video'), $args);


add_action("manage_posts_custom_column",  "gallery_columns");
add_filter("manage_edit-gallery_columns", "gallery_edit_columns");
function gallery_edit_columns($columns){
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "title" => "Gallery Title",
	"gallerycat"=>"Type",
	"featured"=>"Featured",
	"gallerythumbnail"=>"Featured Image"
	 );
  return $columns;
}

function gallery_columns($column){
	global $post;
	$custom = get_post_custom($post->ID);
	switch ($column) {
		case "gallerycat":
			echo get_the_term_list($post->ID, 'type', '', ', ','');
			break;
		case "featured":
			echo $custom["txt_featured"][0];
			break;
		case "gallerythumbnail":
		echo the_post_thumbnail('thumbnail'); 
		break;
	}
}

function build_gallery_featured(){
  global $post;
  $featured=array('NO','YES');

    $custom = get_post_custom($post->ID);
	$txt_featured=$custom["txt_featured"][0];
  ?>
  <label>Display Feature:</label>
  <select name="txt_featured">
             <?php for($i=0; $i<count($featured); $i++){
    
                 if($txt_featured==$featured[$i]){
    
                 echo '<option value="'.$featured[$i].'" selected="selected">'.$featured[$i].'</option>';
    
            }else{
    
            echo '<option value="'.$featured[$i].'">'.$featured[$i].'</option>';
    
                 }
    
             }
   
  ?>
  </select><br />
  <?php
}
add_action('save_post', 'save_featured');
function save_featured() {
	global $post;
		update_post_meta($post->ID, "txt_featured", $_POST["txt_featured"]);
}

//end// 

/************* Start Custom Post Type - Our Team ********************/
add_action('init', 'our_team_register');
function our_team_register() {
	$labels = array(
		'name' => _x('Our Team', 'post type general name'),
		'singular_name' => _x('Our Team', 'post type singular name'),
		'add_new' => _x('Add New', 'our guide friend item'),
		'add_new_item' => __('Name'),
		'edit_item' => __('Edit Our Team'),
		'new_item' => __('New Our Team'),
		'view_item' => __('View Our Team'),
		'search_items' => __('Search Our Team'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/assets/images/icons/team.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 
	register_post_type( 'team' , $args );
}

add_action("manage_posts_custom_column",  "team_columns");
add_filter("manage_edit-team_columns", "team_edit_columns");
function team_edit_columns($columns){
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "title" => "Our Teams",
	"teamthumbnail"=> "Featured Image:(width:800px height:350px)"
  );
  return $columns;
}

function team_columns($column){
	global $post;
	switch ($column) {
		case "teamthumbnail":
		echo the_post_thumbnail('thumbnail'); 
		break;
	}
}

/* custom sub title */
function build_txt_sub_text(){
  global $post;
  $custom = get_post_custom($post->ID);
  $txt_sub_title = $custom["txt_sub_title"][0];
  ?>
  <label>Sub title:</label>
  <input name="txt_sub_title" value="<?php echo $txt_sub_title; ?>" size="90" /><br />
  <?php
}
add_action('save_post', 'save_sub_title');
function save_sub_title() {
	global $post;
	update_post_meta($post->ID, "txt_sub_title", $_POST["txt_sub_title"]);
}
/* end custom sub title */

/************** End Custom Post Type - Our Team *********************/


 
//custom menu function //
function wp_nav_menu_top( $args = array() ) {
	static $menu_id_slugs = array();

	$defaults = array( 
		'echo' => true, 
		'fallback_cb' => 'wp_page_menu', 
		'before' => '', 'after' => '', 
		'link_before' => '', 
		'link_after' => '', 
		'items_wrap' => '',
		'depth' => 0, 
		'walker' => new Walker_Nav(),
		'theme_location' => ''
	);

	$args = wp_parse_args( $args, $defaults );
	/**
	 * Filter the arguments used to display a navigation menu.
	 *
	 * @since 3.0.0
	 *
	 * @param array $args Arguments from {@see wp_nav_menu()}.
	 */
	$args = apply_filters( 'wp_nav_menu_args', $args );
	$args = (object) $args;

	// Get the nav menu based on the requested menu
    $args->menu = '';
    $args->menu_class = '';
	$menu = wp_get_nav_menu_object( $args->menu );

	// Get the nav menu based on the theme_location
	if ( ! $menu && $args->theme_location && ( $locations = get_nav_menu_locations() ) && isset( $locations[ $args->theme_location ] ) )
		$menu = wp_get_nav_menu_object( $locations[ $args->theme_location ] );

	// get the first menu that has items if we still can't find a menu
	if ( ! $menu && !$args->theme_location ) {
		$menus = wp_get_nav_menus();
		foreach ( $menus as $menu_maybe ) {
			if ( $menu_items = wp_get_nav_menu_items( $menu_maybe->term_id, array( 'update_post_term_cache' => false ) ) ) {
				$menu = $menu_maybe;
				break;
			}
		}
	}

	// If the menu exists, get its items.
	if ( $menu && ! is_wp_error($menu) && !isset($menu_items) )
		$menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'update_post_term_cache' => false ) );

	/*
	 * If no menu was found:
	 *  - Fall back (if one was specified), or bail.
	 *
	 * If no menu items were found:
	 *  - Fall back, but only if no theme location was specified.
	 *  - Otherwise, bail.
	 */
	if ( ( !$menu || is_wp_error($menu) || ( isset($menu_items) && empty($menu_items) && !$args->theme_location ) )
		&& $args->fallback_cb && is_callable( $args->fallback_cb ) )
			return call_user_func( $args->fallback_cb, (array) $args );

	if ( ! $menu || is_wp_error( $menu ) )
		return false;

	$nav_menu = $items = '';

	$show_container = false;
	if ( $args->container ) {
		/**
		 * Filter the list of HTML tags that are valid for use as menu containers.
		 *
		 * @since 3.0.0
		 *
		 * @param array The acceptable HTML tags for use as menu containers, defaults as 'div' and 'nav'.
		 */
		$allowed_tags = apply_filters( 'wp_nav_menu_container_allowedtags', array( 'div', 'nav' ) );
		if ( in_array( $args->container, $allowed_tags ) ) {
			$show_container = true;
			$class = $args->container_class ? ' class="' . esc_attr( $args->container_class ) . '"' : ' class="menu-'. $menu->slug .'-container"';
			$id = $args->container_id ? ' id="' . esc_attr( $args->container_id ) . '"' : '';
			$nav_menu .= '<'. $args->container . $id . $class . '>';
		}
	}

	// Set up the $menu_item variables
	_wp_menu_item_classes_by_context( $menu_items );

	$sorted_menu_items = $menu_items_with_children = array();
	foreach ( (array) $menu_items as $menu_item ) {
		$sorted_menu_items[ $menu_item->menu_order ] = $menu_item;
		if ( $menu_item->menu_item_parent )
			$menu_items_with_children[ $menu_item->menu_item_parent ] = true;
	}

	// Add the menu-item-has-children class where applicable
	if ( $menu_items_with_children ) {
		foreach ( $sorted_menu_items as &$menu_item ) {
			if ( isset( $menu_items_with_children[ $menu_item->ID ] ) )
				$menu_item->classes[] = 'menu-item-has-children';
		}
	}

	unset( $menu_items, $menu_item );

	/**
	 * Filter the sorted list of menu item objects before generating the menu's HTML.
	 *
	 * @since 3.1.0
	 *
	 * @param array $sorted_menu_items The menu items, sorted by each menu item's menu order.
	 */
	$sorted_menu_items = apply_filters( 'wp_nav_menu_objects', $sorted_menu_items, $args );

	$items .= walk_nav_menu_tree( $sorted_menu_items, $args->depth, $args );
	unset($sorted_menu_items);

	// Attributes
	if ( ! empty( $args->menu_id ) ) {
		$wrap_id = $args->menu_id;
	} else {
		$wrap_id = 'menu-' . $menu->slug;
		while ( in_array( $wrap_id, $menu_id_slugs ) ) {
			if ( preg_match( '#-(\d+)$#', $wrap_id, $matches ) )
				$wrap_id = preg_replace('#-(\d+)$#', '-' . ++$matches[1], $wrap_id );
			else
				$wrap_id = $wrap_id . '-1';
		}
	}
	$menu_id_slugs[] = $wrap_id;

	$wrap_class = $args->menu_class ? $args->menu_class : '';

	/**
	 * Filter the HTML list content for navigation menus.
	 *
	 * @since 3.0.0
	 *
	 * @param string $items The HTML list content for the menu items.
	 * @param array $args Arguments from {@see wp_nav_menu()}.
	 */
	$items = apply_filters( 'wp_nav_menu_items', $items, $args );
	/**
	 * Filter the HTML list content for a specific navigation menu.
	 *
	 * @since 3.0.0
	 *
	 * @param string $items The HTML list content for the menu items.
	 * @param array $args Arguments from {@see wp_nav_menu()}.
	 */
	$items = apply_filters( "wp_nav_menu_{$menu->slug}_items", $items, $args );

	// Don't print any markup if there are no items at this point.
	if ( empty( $items ) )
		return false;

	$nav_menu .= sprintf( $args->items_wrap, esc_attr( $wrap_id ), esc_attr( $wrap_class ), $items );
	unset( $items );

	if ( $show_container )
		$nav_menu .= '</' . $args->container . '>';

	/**
	 * Filter the HTML content for navigation menus.
	 *
	 * @since 3.0.0
	 *
	 * @param string $nav_menu The HTML content for the navigation menu.
	 * @param array $args Arguments from {@see wp_nav_menu()}.
	 */
	$nav_menu = apply_filters( 'wp_nav_menu', $nav_menu, $args );

	if ( $args->echo )
		echo $nav_menu;
	else
		return $nav_menu;
}


add_filter('nav_menu_css_class', 'add_active_class', 10, 2 );
function add_active_class($classes, $item) {

  if( in_array( 'current-menu-item', $classes ) ||
    in_array( 'current-menu-ancestor', $classes ) ||
    in_array( 'current-menu-parent', $classes ) ||
    in_array( 'current_page_parent', $classes ) ||
    in_array( 'current_page_ancestor', $classes )
    ) {

    $classes[] = "active";
}

  return $classes;
}

class Walker_Nav extends Walker_Nav_Menu {
	
	function start_lvl(&$output, $depth = 0, $args = array()) {
		//In a child UL, add the 'dropdown-menu' class
		$indent = str_repeat( "\t", $depth );
		$output	.= "\n$indent<ul class=\"drawer-submenu dropdown-menu\" role=\"menu\">\n";
	}
	
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$li_attributes = '';
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		//Add class and attribute to LI element that contains a submenu UL.
		if ($args->has_children){

			$classes[] = 'drawer-menu-item dropdown drawer-dropdown';
			// $li_attributes .= 'data-dropdown="dropdown"';
		}
		$classes[] = 'menu-item-' . $item->ID;
		//If we are on the current page, add the active class to that menu item.
		//Make sure you still add all of the WordPress classes.
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="drawer-menu-item dropdown drawer-dropdown ' . esc_attr( $class_names ) . '"';
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
		$output .= $indent . '<li ' . $id . $value . $class_names . '>';
		//Add attributes to link element.
		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
		$attributes .= ($args->has_children) ? ' data-toggle="dropdown" role="button" aria-expanded="false" ' : '';
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ($args->has_children) ? '<span class="caret"> </span>' : '';
		$item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	//Overwrite display_element function to add has_children attribute. Not needed in >= Wordpress 3.4
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
	if ( !$element )
		return;
		$id_field = $this->db_fields['id'];
	//display this element
	if ( is_array( $args[0] ) )
		$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
	else if ( is_object( $args[0] ) )
		$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'start_el'), $cb_args);
		$id = $element->$id_field;
		// descend only when the depth is right and there are childrens for this element
		if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
			foreach( $children_elements[ $id ] as $child ){
				if ( !isset($newlevel) ) {
				$newlevel = true;
				//start the child delimiter
				$cb_args = array_merge( array(&$output, $depth), $args);
				call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
			}
			$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
		}
	unset( $children_elements[ $id ] );
	}
	if ( isset($newlevel) && $newlevel ){
		//end the child delimiter
		$cb_args = array_merge( array(&$output, $depth), $args);
		call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
	}
	//end this element
	$cb_args = array_merge( array(&$output, $element, $depth), $args);
	call_user_func_array(array(&$this, 'end_el'), $cb_args);
	}
} 

//end//

 
add_action( 'admin_init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
/************* Start Custom Post Type - Slider ********************/
add_action('init', 'banner_slider_register');
function banner_slider_register() {
	$labels = array(
		'name' => _x('Slider', 'post type general name'),
		'singular_name' => _x('Slider', 'post type singular name'),
		'add_new' => _x('Add New', 'slider item'),
		'add_new_item' => __('Slider'),
		'edit_item' => __('Edit Slider'),
		'new_item' => __('New Slider'),
		'view_item' => __('View Slider'),
		'search_items' => __('Search Slider'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/assets/images/icons/footlist.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'thumbnail')
	  ); 

	register_post_type( 'slider' , $args );
}

add_action("manage_posts_custom_column",  "slider_columns");
add_filter("manage_edit-slider_columns", "slider_edit_columns");
function slider_edit_columns($columns){
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "title" => "Title",
    "imagetitle" => "Description",
	"sliderthumbnail" => "Feature Image: (width:1170px height:500px"
  );
	return $columns;
}

function slider_columns($column){
	global $post;
	$custom = get_post_custom($post->ID);
	switch ($column) {
		case "imagetitle":
			echo $custom["txt_image_title"][0];
			break;

	case "sliderthumbnail":
			echo the_post_thumbnail('thumbnail'); 
			break;
	}
}


function build_slider_info() {
  global $post;
  $custom = get_post_custom($post->ID);
  ?>
  <label style="width:150px; display:inline-block;">Image Description:</label>
  <textarea class="large-text metadesc" rows="2" id="txt_image_title" name="txt_image_title"><?php echo $custom["txt_image_title"][0]; ?></textarea><br />
  <p>
  <label style="width:150px; display:inline-block;">Example - Page URL:</label>
  <input name="txt_page_url" value="<?php echo $custom["txt_page_url"][0]; ?>" size="50" /><br />
  about-us/,contact-us/
  </p>
  <?php
}
add_action('save_post', 'save_slider_details');
function save_slider_details() {
	global $post;
		update_post_meta($post->ID, "txt_image_title", $_POST["txt_image_title"]);
		update_post_meta($post->ID, "txt_page_url", $_POST["txt_page_url"]);
}

/************** End Custom Post Type - Slider *********************/


/************* Start Custom Post Type - 1st Chances ********************/
add_action('init', 'co_1st_chance_register');
function co_1st_chance_register() {
	$labels = array(
		'name' => _x('1st Chance', 'post type general name'),
		'singular_name' => _x('1st Chance', 'post type singular name'),
		'add_new' => _x('Add New', '1st Chance item'),
		'add_new_item' => __('Name'),
		'edit_item' => __('Edit 1st Chance'),
		'new_item' => __('New 1st Chance'),
		'view_item' => __('View 1st Chance'),
		'search_items' => __('Search 1st Chance'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/assets/images/icons/default.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 
	register_post_type( '1st_chance' , $args );
}

function build_txt_country_meta(){
  global $post;
  $custom = get_post_custom($post->ID);
  $txt_country = $custom["txt_country"][0];
  ?>
  <label>Country:</label>
  <input name="txt_country" value="<?php echo $txt_country; ?>" /><br />
  <?php
}
add_action('save_post', 'save_country_details');
function save_country_details() {
	global $post;
	update_post_meta($post->ID, "txt_country", $_POST["txt_country"]);
}

add_action("manage_posts_custom_column",  "firstst_chance_columns");
add_filter("manage_edit-1st_chance_columns", "firstst_chance_edit_columns");
function firstst_chance_edit_columns($columns){
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "title" => "Name",
    "testdescription" => "Description",
	"status" => "Post Status",
	"1stchancethumbnail"=> "Featured Image (width:375px height:325px)"
  );

  return $columns;
}

function firstst_chance_columns($column){
	global $post;
	switch ($column) {
		case "testdescription":
			echo wp_trim_words(get_the_content(), 60);
			break;
		case "status":
		    echo get_post_status();
			break;
		case "1stchancethumbnail":
		echo the_post_thumbnail('thumbnail'); 
		break;
	}
}

/************** End Custom Post Type - 1st Chances *********************/

/* post type video */

add_action('init', 'video_register');
function video_register() {
	$labels = array(
		'name' => _x('video', 'post type general name'),
		'singular_name' => _x('video', 'post type singular name'),
		'add_new' => _x('Add New', 'video'),
		'add_new_item' => __('Name'),
		'edit_item' => __('Edit video'),
		'new_item' => __('New video'),
		'view_item' => __('View video'),
		'search_items' => __('Search video'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/assets/images/icons/media-button.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','excerpt','thumbnail')
	  ); 
	register_post_type( 'video' , $args );
}

add_action("manage_posts_custom_column",  "video_columns");
add_filter("manage_edit-video_columns", "video_edit_columns");
function video_edit_columns($columns){
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "title" => "Video",
	"Videocat" => "Type",
	"Videoimage" => "Video Image",
  );
  return $columns;
}

function video_columns($column){
	global $post;
	$custom = get_post_custom($post->ID);
	switch ($column) {
		case "Videocat":
			echo get_the_term_list($post->ID, 'type', '', ', ','');
			break;
		case "Videoimage":
		echo the_post_thumbnail('thumbnail'); 
		break;
	}
}
/************** End Custom Post Type - video *********************/



function character_limiter($str, $n = 500, $end_char = '&#8230;')
{
    if (strlen($str) < $n)
    {
        return $str;
    }
    $str = preg_replace("/\s+/", ' ', preg_replace("/(\r\n|\r|\n)/", " ", $str));
    if (strlen($str) <= $n)
    {
        return $str;
    }
    $out = "";
    $n--; //for end_char
    foreach (explode(' ', trim($str)) as $val)
    {
        if (strlen($out.$val.' ') >= $n)
        {
            return trim($out).$end_char;
        }        
        $out .= $val.' ';            
    }
} 


//************* custom content details *****************************/
if ( ! class_exists( 'ContentDetails' ) )
{
	class ContentDetails
	{
		var $name = 'Content Details';
		var $tag = 'content';
		var $options = array();
		var $messages = array();
		var $details = array();
		//function ContentDetails()
		//{
		function __construct()
		{
			add_action('init', array(&$this, 'init'));
			if ( is_admin() ) {
				register_activation_hook( __FILE__, array( &$this, 'activate' ) );
				add_action( 'admin_menu', array( &$this, 'admin_menu' ) );
				add_action( 'admin_init', array( &$this, 'admin_init' ) );
				add_filter( 'plugin_row_meta', array( &$this, 'plugin_row_meta' ), 10, 2 );
			} else {
				add_shortcode( 'content', array( &$this, 'shortcode' ) );
				add_filter( 'content_detail', array( &$this, 'build'), 1 );
			}
		}

		function init() {
			$this->details = array(
			'logo' => array(
						   'label'=>__('Logo', 'content'),
						   'input' => 'text'
			   ),
			   'favicon' => array(
						   'label'=>__('Favicon', 'content'),
						   'input' => 'text'
			   ),
			   
			 'regdno' => array(
						   'label'=>__('Company Regd no.', 'content'),
						   'input' => 'text'
			   ),
			   'phoneno' => array(
						   'label'=>__('Talk to Specialist', 'content'),
						   'input' => 'text'
			   ),
				'contactdetail' => array(
					'label' => __('Contact Details', 'content'),
					'input' => 'textarea'
				),
				'welcome' => array(
					'label' => __('Welcome to PMST Nepal', 'content'),
					'input' => 'textarea'
				),
				
				'featuredvideo' => array(
					'label' => __('Featured Video', 'content'),
					'input' => 'textarea'
				),
				'finduson' => array(
					'label' => __('Find us on', 'content'),
					'input' => 'textarea'
				),
				'footerdetail' => array(
					'label' => __('Footer detail', 'content'),
					'input' => 'textarea'
				),
			);
			$this->details = (array) apply_filters( $this->tag.'_details', $this->details, 1 );
			if ( $options = get_option( $this->tag ) ) {
				$this->options = $options;
			}
			load_plugin_textdomain( $this->tag, false, basename( dirname(__FILE__) ).'/languages/' );
		}
		function activate()
		{
			if ( ! $this->options ) {
				update_option( $this->tag, array(
					'email' => get_option( 'admin_email' )
				) );
			}
		}

		function admin_menu()
		{
			add_options_page(
				$this->name,
				$this->name,
				'manage_options',
				$this->tag,
				array( &$this, 'settings' )
			);
		}
		function admin_init()
		{
			register_setting( $this->tag.'_options', $this->tag );
		}

		function settings()
		{
			include_once( 'settings.php' );
		}
		function plugin_row_meta( $links, $file )
		{
			$plugin = plugin_basename( __FILE__ );
			if ( $file == $plugin ) {
				return array_merge(
					$links,
					array( sprintf(
						'<a href="options-general.php?page=%s">%s</a>',
						$this->tag, __( 'Edit Details' )
					) )
				);
			}
			return $links;
		}
		function build( $args )
		{
			extract( shortcode_atts( array(
				'type' => false,
				'before' => '',
				'after' => '',
				'echo' => true
			), $args ) );
			$value = $this->value( $type );
			if ( strlen( $value ) == 0 ) {
				return;
			}
			$detail = $before.$value.$after;
			if ( $echo ) {
				echo $detail;
			} else {
				return $detail;
			}
		}
		function value( $type = false )
		{
			if ( ( false != $type )  && array_key_exists( $type, $this->options ) ) {
				return ( 'address' == $type ? nl2br( $this->options[$type] ) : $this->options[$type] );
			}
			return null;
		}
		function shortcode( $atts )
		{
			extract( shortcode_atts( array(
				'type' => false,
				'include' => false
			), $atts ) );
			if ( 'form' == $type ) {
				return $this->form( $include );
			}
			return content_detail( $type, false, false, false );
		}
	}
	$contentDetails = new ContentDetails();
	if ( isset( $contentDetails ) ) {
		function content_detail( $t = false, $b = '', $a = '', $e = true ){
			return apply_filters( 'content_detail', array(
				'type' => $t,
				'before' => $b,
				'after' => $a,
				'echo' => $e
			) );
		}
	}
}


function pagination($pages = '', $range = 4)
{  
     global $paged;
	 $currentpage=get_query_var('paged');
     if(empty($paged)) $paged = 1;
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
     if(1 != $pages)
     {
				if($paged = 1) echo "<li><a href='".get_pagenum_link($paged - 1)."'>«</a></li>";
				for ($i=1; $i <= $pages; $i++)
				{
					if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
					{
					if($currentpage==$i)
						$active="class='active'";
						else
						$active="";
					if($currentpage=="" || $currentpage==1)
					   $activefirst="class='active'";
					   else
					   $activefirst="";	
						echo ($paged == $i)? "<li $activefirst><a href='".get_pagenum_link()."'>".$i."</a></li>":"<li $active><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
					}
				}
				if ($paged < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>»</a></li>";
     }
}
/********end*******************/
 
 
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Liberty Flims only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfifteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Liberty Flims 1.0
 */
function twentyfifteen_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentyfifteen', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	require get_template_directory() . '/admin/admin-init.php';
require get_template_directory() . '/inc/pmstnepal_advertisement.php';


	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
		'mainmenu' => __( 'Main Menu',      'twentyfifteen' ),
		'mainnav'  => __( 'Other Navigation', 'twentyfifteen' ),
		'footer' => __( 'Footer Menu',      'twentyfifteen' ),

	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	$color_scheme  = twentyfifteen_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );
}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'twentyfifteen_setup' );

/**
 * Register widget area.
 *
 * @since Liberty Flims 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );

if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
/**
 * Register Google fonts for Liberty Flims.
 *
 * @since Liberty Flims 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentyfifteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Liberty Flims 1.1
 */
function twentyfifteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Liberty Flims 1.0
 */
function twentyfifteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

		

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	
	wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_scripts' );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Liberty Flims 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'twentyfifteen-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Liberty Flims 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function twentyfifteen_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'twentyfifteen_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Liberty Flims 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function twentyfifteen_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'twentyfifteen_search_form_modify' );

/**
 * Implement the Custom Header feature.
 *
 * @since Liberty Flims 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Liberty Flims 1.0
 */
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/EngToNep.php';

/**
 * Customizer additions.
 *
 * @since Liberty Flims 1.0
 */
require get_template_directory() . '/inc/customizer.php';
function filter_cars_by_taxonomies( $post_type, $which ) {

	// A list of taxonomy slugs to filter by
	$taxonomies = array( 'type' );

	foreach ( $taxonomies as $taxonomy_slug ) {

		// Retrieve taxonomy data
		$taxonomy_obj = get_taxonomy( $taxonomy_slug );
		$taxonomy_name = $taxonomy_obj->labels->name;

		// Retrieve taxonomy terms
		$terms = get_terms( $taxonomy_slug );

		// Display filter HTML
		echo "<select name='{$taxonomy_slug}' id='{$taxonomy_slug}' class='postform'>";
		echo '<option value="">' . sprintf( esc_html__( 'Show All %s', 'text_domain' ), $taxonomy_name ) . '</option>';
		foreach ( $terms as $term ) {
			printf(
				'<option value="%1$s" %2$s>%3$s (%4$s)</option>',
				$term->slug,
				( ( isset( $_GET[$taxonomy_slug] ) && ( $_GET[$taxonomy_slug] == $term->slug ) ) ? ' selected="selected"' : '' ),
				$term->name,
				$term->count
			);
		}
		echo '</select>';
	}

}
add_action( 'restrict_manage_posts', 'filter_cars_by_taxonomies' , 10, 2);
/* Display image title, caption, alt, description */

function gia( $attachment_id ) {



 $attachment = get_post( $attachment_id );

 $data =  array(

   'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),

   'caption' => $attachment->post_excerpt,

   'description' => $attachment->post_content,

   'title' => $attachment->post_title

 );



 if ($data['alt']):

  

  $alt = $data['alt'];

 elseif($data['caption']):

  $alt = $data['caption'];

 elseif($data['description']):

  $alt = $data['description'];

 elseif($data['title']):

  $alt = $data['title'];

 else:

  $alt = '';

 endif;



 return $data;



}

//get the post image thumb
function dt_has_thumb($args = '')
{

    global $post;

    // extract args
    $defaults = array(
        'ID' => $post->ID,
        'width' => 150,
        'height' => 150,
        'crop' => 1,
        'direction' => 't',
        'quality' => 100,
        'link' => '',
        'default' => ''
    );

    $r = wp_parse_args($args, $defaults);
    $postid = $r['ID'];
    $w = $r['width'];
    $h = $r['height'];
    $zc = $r['crop'];
    $cropfrom = $r['direction'];
    $q = $r['quality'];
    $link = $r['link'];
    $default = $r['default'];

    // which image
    $img_customfield = get_post_meta($postid, 'thumb', true);
    $img_uploads = get_children(array('post_parent' => $postid, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID', 'numberposts' => 1));
    $img_post = preg_match_all('/\< *[img][^\>]*src *= *[\"\']{0,1}([^\"\'\ >]*)/', dt_content($postid), $matches);
  
    // get thumbnail type
    if ($img_customfield) {
        $source = urlencode($img_customfield);
    } elseif ($img_uploads == true) {
        foreach ($img_uploads as $id => $attachment) {
            $img = wp_get_attachment_image_src($id, 'full');
            $source = urlencode($img[0]);
        }
    } elseif (count($matches[1]) > 0) {
        $source = urlencode($matches[1][0]);
    } elseif (!empty($default)) {
        $source = urlencode($default);
    } else {
        $source = '';
    }

    $hasThumb = true;
   
    if (IsNullOrEmptyString($source)) {
        $hasThumb = false;
    }
    return $hasThumb;

}
function dt_thumb($args = '')
{
    global $post;
    // extract args
    $defaults = array(
        'ID' => $post->ID,
        'width' => '150',
        'height' => '150',
        'crop' => '1',
        'direction' => 't',
        'quality' => 100,
        'link' => '',
        'default' => ''
    );

    $r = wp_parse_args($args, $defaults);
    $postid = $r['ID'];
    $w = $r['width'];
    $h = $r['height'];
    $zc = $r['crop'];
    $cropfrom = $r['direction'];
    $q = $r['quality'];
    $link = $r['link'];
    $default = $r['default'];
    // which image

    $img_customfield = get_post_meta($postid, 'thumb', true);
    $img_uploads = get_children(array('post_parent' => $postid, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID', 'numberposts' => 1));
    $img_post = preg_match_all('/\< *[img][^\>]*src *= *[\"\']{0,1}([^\"\'\ >]*)/', get_the_content($postid), $matches);
    // which thumbnail script
    $thumbnail = 'inc/timthumb.php';
    // get thumbnail type
    if ($img_customfield) {
        $source = urlencode($img_customfield);
    } elseif ($img_uploads == true) {
        foreach ($img_uploads as $id => $attachment) {
            $img = wp_get_attachment_image_src($id, 'full');
            $source = urlencode($img[0]);
        }
    } elseif (count($matches[1]) > 0) {
        $source = urlencode($matches[1][0]);
    } elseif (!empty($default)) {
        $source = urlencode($default);
    } else {
        $source = '';
    }

    // show it now
    if ($source) {
        if (empty($link)) {
            $link = get_permalink($postid);
                if($w=='' || $h=='') {
                $image = '<a href="' . $link . '"><img src="' . urldecode($source) . '" alt="' . get_the_title($postid) . '" title="' . get_the_title($postid) . '" width="100%" height="' . $h . '" class="img-responsive"/></a>';

                } else {
                $image = '<a href="' . $link . '"><img src="' . get_bloginfo('template_directory') . '/' . $thumbnail . '?src=' . $source . '&amp;w=' . $w . '&amp;h=' . $h . '&amp;zc=' . $zc . '&amp;a=' . $cropfrom . '&amp;q=' . $q . '" alt="' . get_the_title($postid) . '" title="' . get_the_title($postid) . '" width="' . $w . '" height="' . $h . '" class="img-responsive"/></a>';
                }

        } elseif ($link == 'false') {
            if($w=='' || $h=='') {
            $image = '<img src="'  . urldecode($source) . '" alt="' . get_the_title($postid) . '" title="' . get_the_title($postid) . '" width="100%" height="' . $h . '" class="img-responsive"/>';
            } else {
                $image = '<img src="' . get_bloginfo('template_directory') . '/' . $thumbnail . '?src=' . $source . '&amp;w=' . $w . '&amp;h=' . $h . '&amp;zc=' . $zc . '&amp;a=' . $cropfrom . '&amp;q=' . $q . '" alt="' . get_the_title($postid) . '" title="' . get_the_title($postid) . '" width="' . $w . '" height="' . $h . '" class="img-responsive"/>';
            }

        } elseif ($link == 'image') {
            $image = '<div class="fancybox-zoom"><a href="' . urldecode($source) . '" class="zoom"><img src="' . get_bloginfo('template_directory') . '/' . $thumbnail . '?src=' . $source . '&amp;w=' . $w . '&amp;h=' . $h . '&amp;zc=' . $zc . '&amp;a=' . $cropfrom . '&amp;q=' . $q . '" alt="' . get_the_title($postid) . '" title="' . get_the_title($postid) . '" width="' . $w . '" height="' . $h . '" class="img-responsive"/><div class="zoom-black"></div><div class="zoom-overlay"></div></a></div>';
        } elseif ($link == 'overlay') {
            $image = '<div class="divoverlay"><a href="' . get_permalink($postid) . '"><img src="' . get_bloginfo('template_directory') . '/' . $thumbnail . '?src=' . $source . '&amp;w=' . $w . '&amp;h=' . $h . '&amp;zc=' . $zc . '&amp;a=' . $cropfrom . '&amp;q=' . $q . '" alt="' . get_the_title($postid) . '" title="' . get_the_title($postid) . '" width="' . $w . '" height="' . $h . '" class="img-responsive"/><div class="layeroverlay"></div><div class="titleoverlay">' . dt_get_title('limit=35&after=') . '</div></a></div>';
        } else {
            if($w=='' || $h=='') {
            $image = '<a href="' . $link . '"><img src="' . urldecode($source) . '" alt="' . get_the_title($postid) . '" title="' . get_the_title($postid) . '" width="100%" height="' . $h . '" class="img-responsive"/></a>';
            } else {
             $image = '<a href="' . $link . '"><img src="' . get_bloginfo('template_directory') . '/' . $thumbnail . '?src=' . $source . '&amp;w=' . $w . '&amp;h=' . $h . '&amp;zc=' . $zc . '&amp;a=' . $cropfrom . '&amp;q=' . $q . '" alt="' . get_the_title($postid) . '" title="' . get_the_title($postid) . '" width="' . $w . '" height="' . $h . '" class="img-responsive"/></a>';
            }
        }
        echo $image;
    }
}

//end for getting post image
function the_content_limit($max_char, $more_link_text = ' ', $stripteaser = 0, $more_file = '')
{

    $content = get_the_content($more_link_text, $stripteaser, $more_file);

    $content = apply_filters('the_content', $content);

    $content = str_replace(']]>', ']]&gt;', $content);

    $content = strip_tags($content);

    if (strlen($_GET['p']) > 0) {

        //echo "<p>";

        echo $content;

        echo "&nbsp;<a href='";

        the_permalink();

        echo "'>" . "..</a>";

        //echo "</p>";

    } else if ((strlen($content) > $max_char) && ($espacio = strpos($content, " ", $max_char))) {

        $content = substr($content, 0, $espacio);

        $content = $content;

        //echo "<p>";

        echo $content;

        echo "...";

        echo "&nbsp;<a href='";

        the_permalink();

        echo "'>" . $more_link_text . "</a>";

        //echo "</p>";

    } else {

        //echo "<p>";

        echo $content;

        echo "&nbsp;<a href='";

        the_permalink();

        echo "'>" . "</a>";

        //echo "</p>";

    }

}

function pmstnepal_get_cat_slug($cat_id)
{
	$cat_id = (int)$cat_id;
	$category = &get_category($cat_id);
	return 'category/'.$category->slug;
}


function my_mime_types($mime_types){
    $mime_types['mp3']='audio/mp3';
    $mime_types['m4a']='audio/m4a';
    $mime_types['ogg']='audio/ogg';
    $mime_types['wav']='audio/wav';
    return $mime_types;
}
add_filter('upload_mimes', 'my_mime_types', 1, 1);