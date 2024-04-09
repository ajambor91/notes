<?php
function define_consts()
{
    define('PLUGIN_PATH', ABSPATH . 'wp-content/plugins/notes/');
}
define_consts();



require_once PLUGIN_PATH.'class.notes.php';

function add_style($handle, $uri,  $version)
{

        wp_register_style( $handle, $uri, array(), $version, 'all');
        wp_enqueue_style($handle);

}

function get_external_style()
{

    $version = wp_get_theme()->get( 'Version' );
    $styles = [
        'bootstrap' => 'http://notes.local/static/styles/bootstrap/bootstrap.css',
        'bootstrap-grid' => 'http://notes.local/static/styles/bootstrap/bootstrap-grid.css',
        'bootstrap-reboot' => 'http://notes.local/static/styles/bootstrap/bootstrap-reboot.css',
        'main' =>'http://notes.local/static/styles/main.css'
    ];

    if ($styles && !empty($styles)) {
        foreach ($styles as $name => $style ) {
            add_style($name, $style, $version);
        }
    }
}

function get_land_page()
{
    $homepage = new NotesPlugin();
    $homepage->get_land_page();
}
