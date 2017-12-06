<?php
/**
 * Plugin Name: WP Basic Rest Contact Form
 * Plugin URI: https://github.com/KevinDahlberg/wp-basic-rest-contact-form
 * Description: Adds routes for a contact form and sends out an email.
 * 
 * Version: 1.0
 * Author: Kevin Dahlberg
 * Author URI: https://github.com/KevinDahlberg
 * 
 * Text Domain: wp-basic-contact-form
 * 
 * @package WP_BASIC_REST_CONTACT_FORM
 * 
 * License: MIT
 * 
 */

 if ( ! defined( 'ABSPATH' ) ) {
     exit;
 }

 if ( ! function_exists ( 'wp_contact_form_routes_init' ) ) :
    /**
     * Init WP Basic Contact Form Rest Routes
     * 
     * @since 1.0
     */
    function wp_contact_form_routes_init() {
        $contact_class = new Contact_Routes();

        add_filter( 'rest_api_init', array( $contact_class, 'register_routes' ) );
    }

    add_action( 'init', 'wp_menu_rest_routes_init' );

endif;