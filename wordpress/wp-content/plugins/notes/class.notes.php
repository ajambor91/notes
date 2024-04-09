<?php

require_once 'functions.php';
/*
Plugin Name: Moje Super Plugin
Description: To jest mój pierwszy plugin do WordPressa.
Version: 1.0
Author: Twój Nick
*/


class NotesPlugin
{
    public function __construct__()
    {
//        get_external_style();

    }

    public function get_land_page()
    {
        add_action('wp_enqueue_scripts', 'get_external_style');

        echo is_home() && include_once (ABSPATH. 'wp-content/plugins/notes/pages/landing_page/landing_page.php');

    }

}

