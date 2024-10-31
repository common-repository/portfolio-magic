<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://takirathemes.com
 * @since      1.0.0
 *
 * @package    Portfolio_Magic
 * @subpackage Portfolio_Magic/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    Portfolio_Magic
 * @subpackage Portfolio_Magic/public
 * @author     Takira Themes <info@takirathemes.com>
 */
class Portfolio_Magic_Public {

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
	 * @var      string    $plugin_name       The name of the plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Public_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Public_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/portfolio-magic-public.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'owl-css', plugin_dir_url( __FILE__ ) . 'css/owl.carousel.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'owl-theme', plugin_dir_url( __FILE__ ) . 'css/owl.theme.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Public_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Public_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'owl-js', plugin_dir_url( __FILE__ ) . 'js/owl.carousel.js', array('jquery'), $this->version, false  );
		wp_enqueue_script( 'bricks-js', plugin_dir_url( __FILE__ ) . 'js/jquery.mixitup.min.js', array('jquery'), $this->version, false  );
		wp_enqueue_script( 'test-js', plugin_dir_url( __FILE__ ) . 'js/portfolio-magic-public.js', array( 'owl-js' ), $this->version, false );


	}

}
