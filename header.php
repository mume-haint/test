<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="logo">
        <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'nav-menu'
    )); ?>

</header>