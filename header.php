<!-- Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags. -->

    <!--  no parameter no return values -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
        <!-- <p>This is from header.php</p> -->
        <div class="container">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'container_class' => 'my added class'
                ));
            ?>
