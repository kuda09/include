<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package include
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        window.onload = function () {
            var myOptions = {
                center: new google.maps.LatLng(4.661256, 7.939005),
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                navigationControl: false,
                mapTypeControl: false,
                scaleControl: false,
                draggable: false
            };

            var map = new google.maps.Map(document.getElementById("map"), myOptions);

            var marker = new google.maps.Marker({
                position: myOptions.center,
                map: map,
                title: 'Include'
            });

            //google.maps.event.trigger(map,'resize');
        }
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <header id="header" class="siteHeader">
        <div class="headerRow2">
            <div class="container">
                <div class="col">
                    <div id="logo">
                        <div class="logoWrapper">
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php bloginfo('template_directory'); ?>/resources/images/logoNow.png" alt="Include"/>
                            </a>
                        </div>
                        <div class="menuIcon">
                            <svg version="1.1" id="menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 283.426 283.426" style="enable-background:new 0 0 283.426 283.426;" xml:space="preserve" width="36" height="36">
                                <g>
                                    <rect x="0" y="40.84" style="fill:#007100;" width="283.426" height="47.735" class="strips"/>
                                    <rect x="0" y="117.282" style="fill:#007100;" width="283.426" height="47.735" class="strips"/>
                                    <rect x="0" y="194.851" style="fill:#007100;" width="283.426" height="47.735" class="strips"/>
                                </g>
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <nav class="navigation" role="navigation">
                        <div>
                            <?php
                                wp_nav_menu( array(
                                        "theme_location"  => '',
                                        'menu'            => '',
                                        'container'       => 'ul',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'menu_class'      => 'navMenu',
                                        'menu_id'         => '',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'depth'           => 0,
                                        'walker'          => '')
                                );
                            ?>
                            <div>
                                <div class="searchFormPop" id="searchFormPop">
                                    <?php get_search_form( true ); ?>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--end of header-->
    <article id="content">