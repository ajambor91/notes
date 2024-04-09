<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head() ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

</head>
<body <?php body_class(); ?>>
