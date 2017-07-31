<?php
/**
 * Register menu elements and do other global tasks.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Admin_Menu {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		// Let's make some menus
		add_action( 'admin_menu',            array( $this, 'register_menus' ), 9    );
		add_action( 'admin_enqueue_scripts', array( $this, 'menu_icon'      )       );
	}

	/**
	 * Register our menus.
	 *
	 * @since 1.0.0
	 */
	function register_menus() {

		$menu_cap = apply_filters( 'wpforms_manage_cap', 'manage_options' );

		// Default Forms top level menu item
		add_menu_page(
			__( 'WPForms', 'wpforms' ),
			__( 'WPForms', 'wpforms' ),
			$menu_cap,
			'wpforms-overview',
			array( $this, 'admin_page' ),
			'dashicons-feedback',
			apply_filters( 'wpforms_menu_position', '57.7' )
		);

		// All Forms sub menu item
		add_submenu_page(
			'wpforms-overview',
			__( 'WPForms', 'wpforms' ),
			__( 'All Forms', 'wpforms' ),
			$menu_cap,
			'wpforms-overview',
			array( $this, 'admin_page' )
		);

		// Add New sub menu item
		add_submenu_page(
			'wpforms-overview',
			__( 'WPForms Builder', 'wpforms' ),
			__( 'Add New', 'wpforms' ),
			$menu_cap,
			'wpforms-builder',
			array( $this, 'admin_page' )
		);

		// Entries sub menu item
		add_submenu_page(
			'wpforms-overview',
			__( 'Form Entries', 'wpforms' ),
			__( 'Entries', 'wpforms' ),
			$menu_cap,
			'wpforms-entries',
			array( $this, 'admin_page' )
		);

		do_action( 'wpform_admin_menu', $this );

		// Settings sub menu item
		add_submenu_page(
			'wpforms-overview',
			__( 'WPForms Settings', 'wpforms' ),
			__( 'Settings', 'wpforms' ),
			$menu_cap,
			'wpforms-settings',
			array( $this, 'admin_page' )
		);

		// Hidden placeholder paged used for misc content.
		add_submenu_page(
			'wpforms-settings',
			__( 'WPForms', 'wpforms' ),
			__( 'Info', 'wpforms' ),
			$menu_cap,
			'wpforms-page',
			array( $this, 'admin_page' )
		);

		// Addons submenu page
		add_submenu_page(
			'wpforms-overview',
			__( 'WPForms Addons', 'wpforms' ),
			'<span style="color:#f18500">' . __( 'Addons', 'wpforms' ) . '<span>',
			$menu_cap,
			'wpforms-addons',
			array( $this, 'admin_page' )
		);
	}

	public function admin_page() {

		do_action( 'wpforms_admin_page' );
	}

	/**
	 * Load CSS for custom menu icon.
	 *
	 * @since 1.0.0
	 */
	public function menu_icon() {

		wp_enqueue_style(
			'wpforms-menu',
			WPFORMS_PLUGIN_URL . 'assets/css/admin-menu.css',
			null,
			WPFORMS_VERSION
		);
	}
}
$wpforms_admin_menu = new WPForms_Admin_Menu;