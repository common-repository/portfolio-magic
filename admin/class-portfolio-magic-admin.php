<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://takirathemes.com
 * @since      1.0.0
 *
 * @package    Portfolio_Magic
 * @subpackage Portfolio_Magic/admin
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version
 *
 * @package    Portfolio_Magic
 * @subpackage Portfolio_Magic/admin
 * @author     Your Name <info@takirathemes.com>
 */
class Portfolio_Magic_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @var      string    $plugin_name       The name of this plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	public function add_cpt(){
		$labels = array(
			'name'                => _x( 'portfolios', 'Post Type General Name', 'portfolio-magic' ),
			'singular_name'       => _x( 'portfolio', 'Post Type Singular Name', 'portfolio-magic' ),
			'menu_name'           => __( 'Portfolio', 'portfolio-magic' ),
			'parent_item_colon'   => __( 'Parent Item:', 'portfolio-magic' ),
			'all_items'           => __( 'All Items', 'portfolio-magic' ),
			'view_item'           => __( 'View Item', 'portfolio-magic' ),
			'add_new_item'        => __( 'Add New Item', 'portfolio-magic' ),
			'add_new'             => __( 'Add New', 'portfolio-magic' ),
			'edit_item'           => __( 'Edit Item', 'portfolio-magic' ),
			'update_item'         => __( 'Update Item', 'portfolio-magic' ),
			'search_items'        => __( 'Search Item', 'portfolio-magic' ),
			'not_found'           => __( 'Not found', 'portfolio-magic' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'portfolio-magic' ),
			);
		$args = array(
			'label'               => __( 'portfolio', 'portfolio-magic' ),
			'description'         => __( 'portfolio post type', 'portfolio-magic' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', ),
			'taxonomies'          => array( 'post_tag' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			);
		register_post_type( 'portfolio', $args );

		$labels = array(
			'name' => __('portfolio Categories', 'portfolio-magic'),
			'singular_name' => __('portfolio Category', 'portfolio-magic'),
			'menu_name' => __('Portfolio Categories', 'portfolio-magic'),
			'all_items' => __('All Categories', 'portfolio-magic'),
			'edit_item' => __('Edit Category', 'portfolio-magic'),
			'view_item' => __('View Category', 'portfolio-magic'),
			'update_item' => __('Update Category', 'portfolio-magic'),
			'add_new_item' => __('Add New Category', 'portfolio-magic'),
			'new_item_name' => __('New Category Name', 'portfolio-magic'),
			'parent_item' => __('Parent Category', 'portfolio-magic'),
			'parent_item_colon' => __('Parent Category:', 'portfolio-magic'),
			'search_items' => __('Search Categories', 'portfolio-magic'),
			'popular_items' => __('Popular Categories', 'portfolio-magic'),
			'separate_items_with_commas' => __('Separate Categories with commas', 'portfolio-magic'),
			'add_or_remove_items' => __('Add or remove Categories', 'portfolio-magic'),
			'choose_from_most_used' => __('Choose from the most used Categories', 'portfolio-magic'),
			'not_found' => __('No Categories found', 'portfolio-magic')
			);

$args = array(
	'labels' => $labels,
	'public' => true,
	'show_ui' => true,
	'show_in_nav_menus' => true,
	'show_tagcloud' => true,
	'show_admin_column' => true,
	'hierarchical' => true,
	'query_var' => true,
	'rewrite' => array(
		'slug' => __( 'portfolio_category', 'URL slug', 'portfolio-magic' ),
		'with_front' => false,
		'hierarchical' => false
		)
	);
register_taxonomy('portfolio_category', 'portfolio', $args);


    register_taxonomy_for_object_type( 'post_tag', 'attachment' );



}

public function add_carousel_short_code( $atts ){
	$att = shortcode_atts( array(
		'title' => '',
		'subtitle' => '',
		'height' => '200',
		), $atts );
	$image_height = intval($att['height']);
	$image_width = $image_height * 1.77;
	$count = 4;
	$result_string = '<div class="portfolio-magic">';

	$result_string .= '<div class="title"><h1>'. $att['title'] .'</h1></div>';
	$result_string .= '<div class="sub_title"><h1>'. $att['subtitle'] .'</h1></div>';
	$result_string .= '<div id="owl" class="owl-carousel">';
	$args=array(
		'post_type' => 'portfolio',
		'posts_per_page'=> -1,
		);
	$portfolio_items = new WP_Query($args);
	
	while ($portfolio_items->have_posts()) : $portfolio_items->the_post();
	$thumb = get_post_thumbnail_id();
	$img_url = wp_get_attachment_url( $thumb,'full');
	$image = aq_resize( $img_url, $image_width , $image_height, true ); 
	if ($image == false) {
		$result_string .= '<div class="takira_portfolio_item"><a href="'.get_the_permalink() .'">Please use an image at least 200x354</a></div>';
	}
	else{
		$result_string .= '<div class="takira_portfolio_item"><a href="'.get_the_permalink() .'"><img src="'.$image.'"><div class="takira_portfolio_title">'. get_the_title() .'</div></a></div>';
	}
	
	endwhile;
	$result_string .= '</div></div>';
	if ($portfolio_items->found_posts < 4) {
		$count = $portfolio_items->found_posts;
	}
	$result_string .= '<script type="text/javascript">jQuery(function() {jQuery("#owl").owlCarousel({items : '. $count .',itemsDesktop : [1000,'. $count .'],itemsDesktopSmall : [900,'. $count .'],itemsTablet: [600,'. $count .']});});</script>';
	return $result_string;
}

public function add_bricks_short_code($atts){
	$att = shortcode_atts( array(
		'title' => 'portfolio',
		'subtitle' => 'some subtitle',
		'height' => '200',
		'all' => 'Show All'
		), $atts );
	$image_height = intval($att['height']);
	$image_width = $image_height * 1.77;
	$result_string = '<div class="main_bricks"><div class="filter_container">';
	$result_string .= '<div class="filter" data-filter="all">' . $att['all'] . '</div>';
	$categories = get_terms( 'portfolio_category', 'orderby=count' );
	foreach ($categories as $value) {
		$result_string .= '<div class="filter" data-filter=".' . $value->slug . '">'. $value->name .'</div>';
	}
	$result_string .= '</div>';
	$result_string .= '<div id="takira_mix_it_up">';
	$args=array(
		'post_type' => 'portfolio',
		'posts_per_page'=> -1
		);
	$portfolio_items = new WP_Query($args);
	while ($portfolio_items->have_posts()) : $portfolio_items->the_post();
	$term_list = get_the_terms($portfolio_items->post->ID, 'portfolio_category');
	$term_classes="";
	if ($term_list) {
		foreach ($term_list as $value) {
			$term_classes .= $value->slug . ' ';
		}
	}
	$thumb = get_post_thumbnail_id();

		$img_url = wp_get_attachment_url( $thumb,'full'); //get img URL

		$image = aq_resize( $img_url, $image_width , $image_height, true ); 
		if ($image == false) {
			$result_string .= '<a href="'. get_the_permalink(). '"><div class="mix ' . $term_classes .'">Please use an image at least 200x354</div></a>';
		}
		else{
			$result_string .= '<a href="'. get_the_permalink(). '"><div class="mix ' . $term_classes .'"><img src="' . $image . '"><div class="takira_portfolio_title">'. get_the_title() .'</div></div></a>';
		}
		endwhile;
		$result_string .=  '</div></div>';
		return $result_string;
	}

	public function use_portfolio_template($single_template){
		$templates = new PM_Template_Loader;
		global $post;
		if ($post->post_type == 'portfolio') {
			$single_template = $templates->locate_template( 'single-portfolio.php' );
		}
		return $single_template;
	}
}
