<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="HandheldFriendly" content="true"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/images/ic_joyjet_icon.png" type="image/x-icon">
        
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/bootstrap/dist/css/bootstrap.css">

    <!-- custom fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/scssfile.css">

    <!-- aos css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- magnific popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  
    <title>
        <?php if(is_front_page() || is_home()){
            echo get_bloginfo('name');
        } else {
            echo get_the_title();
        }?>
    </title>

    <?php wp_head(); ?>

</head>

<body>

<!-- header -->
<header>
    <div class="container">
        <a class="logo" href="<?php bloginfo('url'); ?>" >
            <img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" />
        </a>

        <nav class="nav">
            <ul>
                <li><a href="#blog">blog</a></li>
                <li><a href="#popular">popular</a></li>
                <li><a href="#archive">archive</a></li>
                <li><a href="#about">about</a></li>
            </ul>
        </nav>

        <div class="fas fa-bars"></div>
    </div>
</header>

<!-- header ends -->