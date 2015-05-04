<?php

namespace Admin;

class KBWeatherAdminInit {

    private $kb_metabox;

    public function __construct() {

        $this->kb_admin_action_hooks();

    }

    public function kb_admin_action_hooks() {
        add_action( 'init', array( $this, 'kb_register_post_types' ) );
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
            'menu_position'      => null,
            'supports'           => array( 'title' )
        );

        register_post_type( 'kb-weather-reporter', $args );
    }

}

?>