<?php

namespace Admin;

class KBWeatherLoader {
    /**
     * Custom post type slug
     * @var string
     */
    private $kbw_cpt_name = 'kb-weather-reporter';

    public function __construct() {
        
        $this->kbw_admin_action_hooks();

    }

    public function kbw_admin_action_hooks() {
        add_action( 'init', array( &$this, 'kbw_register_post_types' ) );
        add_action( 'admin_init', array( &$this, 'kbw_add_meta_box' ) );
    }

    public function kbw_register_post_types() {
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
            'rewrite'            => array( 'slug' => 'weather' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title' )
        );

        register_post_type( $this->kbw_cpt_name, $args );
    }

    public function kbw_add_meta_box() {

        add_meta_box( 'kbw_cpt_meta_box', __( esc_attr( 'KB Weather Info' ), KBWEATHER_TEXTDOMAIN ), array( &$this, 'kbw_meta_box_content' ), $this->kbw_cpt_name, 'normal', 'high' );

    }

    public function kbw_meta_box_content() {
        echo "This is successful test!";
    }

}

?>