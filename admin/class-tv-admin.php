<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    TV
 * @subpackage TV/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    TV
 * @subpackage TV/admin
 * @author     Your Name <email@example.com>
 */
class TV_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $TV    The ID of this plugin.
	 */
	private $TV;

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
	 * @param      string    $TV       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $TV, $version ) {

		$this->TV = $TV;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in TV_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The TV_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( $this->TV . '-reset', plugin_dir_url( __FILE__ ) . 'css/reset.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->TV . '-font', 'https://fonts.googleapis.com/css?family=Roboto', array(), $this->version, 'all' );
		wp_enqueue_style( $this->TV, plugin_dir_url( __FILE__ ) . 'css/tv-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in TV_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The TV_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->TV . '-jquery-form', plugin_dir_url( __FILE__ ) . 'js/jquery.form.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->TV, plugin_dir_url( __FILE__ ) . 'js/tv-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Create our custom widget
	 *
	 * @since 1.0.0
	 */
	public function register_widgets() {
		register_widget( 'TV_Widget' );
	}

	/**
	 * Create setting page
	 *
	 * @since 1.0.0
	 */
	public function admin_menu() {
		add_menu_page( __( 'WebTV', 'tv' ), __( 'WebTV', 'tv' ), 'manage_options', 'tv', array( $this, 'render' ) );
	}

	public function render() {
		$tv_options = get_option( 'tv_options', array(
			'channel_id'   => '',
			'facebook'     => '',
			'twitter'      => '',
			'youtube'      => '',
			'twitch'       => '',
			'informations' => '',
		) );

		require_once TV_PLUGIN_PATH . 'admin/partials/tv-admin-display.php';
	}

	public function save_tv_options() {
		$tv_options = ! empty( $_POST['tv_options'] ) ? (array) $_POST['tv_options'] : array();


		$tv_options_database = get_option( 'tv_options', array(
			'channel_id'   => '',
			'facebook'     => '',
			'twitter'      => '',
			'youtube'      => '',
			'twitch'       => '',
			'informations' => '',
		) );

		$tv_options_database = array_merge( $tv_options_database, $tv_options );

		update_option( 'tv_options', $tv_options_database );

		wp_send_json_success();
	}
}
