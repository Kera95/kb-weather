<?php

namespace Admin;

class KBW_Admin_Init {

    private $kbw_router;

    public function __construct() {

        $this->kbw_router = new KBW_Router();

        $this->kb_admin_action_hooks();

    }

    public function kb_admin_action_hooks() {

        add_action( 'init', array( $this, 'kb_register_post_types' ) );
        add_action( 'admin_menu', array( $this, 'kb_init_submenu_pages' ) );

    }

    public function kb_register_post_types() {

        $args = array(
            'labels'             => $labels = array(
                'name'               => __( 'Weather',                      KBWEATHER_TEXTDOMAIN ),
                'singular_name'      => __( 'Weather',                      KBWEATHER_TEXTDOMAIN ),
                'menu_name'          => __( 'KB Weather',                   KBWEATHER_TEXTDOMAIN ),
                'name_admin_bar'     => __( 'Weather',                      KBWEATHER_TEXTDOMAIN ),
                'add_new'            => __( 'Add New',                      KBWEATHER_TEXTDOMAIN ),
                'add_new_item'       => __( 'Add New Weather',              KBWEATHER_TEXTDOMAIN ),
                'new_item'           => __( 'New Weather',                  KBWEATHER_TEXTDOMAIN ),
                'edit_item'          => __( 'Edit Weather',                 KBWEATHER_TEXTDOMAIN ),
                'view_item'          => __( 'View Weather',                 KBWEATHER_TEXTDOMAIN ),
                'all_items'          => __( 'All Weathers',                 KBWEATHER_TEXTDOMAIN ),
                'search_items'       => __( 'Search Weathers',              KBWEATHER_TEXTDOMAIN ),
                'parent_item_colon'  => __( 'Parent Weathers:',             KBWEATHER_TEXTDOMAIN ),
                'not_found'          => __( 'No Weathers found.',           KBWEATHER_TEXTDOMAIN ),
                'not_found_in_trash' => __( 'No Weathers found in Trash.',  KBWEATHER_TEXTDOMAIN )
            ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'kb-weather-reporter' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 85,
            'supports'           => array( 'title' )
        );

        register_post_type( 'kb-weather-reporter', $args );

    }

    public function kb_init_submenu_pages() {

        add_submenu_page( 'edit.php?post_type=kb-weather-reporter', 'KB Weather Settings', 'Weather Settings', 'manage_options', 'kb-weather-report', array( $this, 'kb_init_pages_templates' ) );

    }

    public function kb_init_pages_templates() {

        require_once( 'templates/kbw-settings-page.php' );

    }

}

?>