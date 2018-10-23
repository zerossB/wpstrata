<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_url')?>/img/favicon.ico" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Header -->
	<header id="header">
		<div class="inner">
            <?php if (has_custom_logo()):
                the_custom_logo();
            endif ?>
            <!-- <a href="#" class="image avatar"><img src="images/avatar.jpg" alt="" /></a> -->
            <a href="<?php bloginfo('url') ?>">
                <h1><strong><?php bloginfo('title') ?></strong> <br> <?php bloginfo('description') ?></h1>
            </a>

            <nav class="collapse navbar-collapse bs-navbar-collapse">
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'       => 'primary-menu',
                    'menu_class'    => 'nav navbar-nav',//or fluid: .nav-justified
                    'container'     => false,
                    'items_wrap'    => '<ul id="%1$s" class="%2$s nav">%3$s</ul>'
                ));
                ?>
            </nav>
		</div>
	</header>

    <main id="main">