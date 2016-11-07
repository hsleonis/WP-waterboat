<?php
/**
 * ThemeAxe Theme Enqueue Style & Scripts
 *
 * @package     TMXFilmMaker
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxEnqueue{
    /**
     * TmxEnqueue constructor.
     *
     * @since 1.0.1
     */
    public function __construct(){
        $this->hooks();
    }

    /**
     * Enqueues style & scripts
     *
     * @since 1.0.1
     */
    public function tmx_enqueue_scripts() {
        // style
        wp_enqueue_style('fonts-63-css', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900', array(), false, 'all');
        wp_enqueue_style('bootstrap-75-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('style-88-css', get_template_directory_uri() . '/assets/css/style.css', array(), false, 'all');
        wp_enqueue_style('responsive-87-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), false, 'all');
        // script
        wp_enqueue_script('tmx-94-js', get_template_directory_uri() . '/assets/js/jquery-2.2.2.min.js', array(), false, true);
        wp_enqueue_script('bootstrap-39-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, true);
    }

    /**
     * Enqueues style & scripts on admin
     *
     * @since 1.0.1
     */
    public function tmx_admin_scripts(){
    }

    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks(){
        add_action( 'wp_enqueue_scripts', array($this, 'tmx_enqueue_scripts') );
        add_action( 'admin_enqueue_scripts', array($this, 'tmx_admin_scripts') );
    }
}