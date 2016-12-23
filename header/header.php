<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php $yourstore_option = yourstore_get_options(); ?>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
        <?php
        if(function_exists( 'has_site_icon' ) && has_site_icon()){ // since 4.3.0
            wp_site_icon();
        }elseif(isset($yourstore_option['yourstore-site-favicon']['url']) && !empty($yourstore_option['yourstore-site-favicon']['url'])){?>
            <link rel="icon" href="<?php echo esc_url($yourstore_option['yourstore-site-favicon']['url']) ?>" type="image/x-icon"/>
            <link rel="shortcut icon" href="<?php echo esc_url($yourstore_option['yourstore-site-favicon']['url']) ?>" type="image/x-icon"/>
        <?php
        }
        ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('index'); ?>>
        <?php do_action('yourstore_after_body_open') ?>
        <!-- Back to top -->
        <div class="back-to-top"><span class="icon-keyboard_arrow_up"></span></div>
        <!-- /Back to top -->
        <?php
        $header_type = $yourstore_option['yourstore_header_type'];
        get_template_part( 'template-parts/header',$header_type);
