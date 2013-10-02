<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo( 'name' ); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/icons/css/icon.css">
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
        <!--<script src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/modernizr-2.6.2.min.js"></script>-->
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <div class="container">
                <h1><img src="<?php bloginfo( 'template_directory' ); ?>/img/title-header.png" atl="Giovanni logo fantaisie"></h1>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                <div id="infosContainer">
                    <div id="headerImg">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/flatMac-header.png" alt="Trois device, un iMac, un Macbook, Un iPad">
                    </div>
                    <div id="headerDesc">
                        <p>Je suis un web designer liègeois qui conçois et développe des sites web et mobile aussi <strong>simples</strong> d’utilisation que <strong>beaux</strong>.</p>
                        <a href="#contact">Engagez-moi</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </header>
        
