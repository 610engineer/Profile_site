<!DOCTPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name');?><?php wp_title();?></title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet" media="screen">
    <link rel="shortcut icon" href="https://jour-1.com/wp-content/uploads/2020/09/favicon.ico">
    <link rel="stylesheet"
     href="<?php echo get_stylesheet_uri();?>">
     <script src="https://kit.fontawesome.com/ac61a06d80.js" crossorigin="anonymous"></script>
     <?php wp_head();?>
     
</head>
<body <?php body_class();?>>
<header>
    <div class="siteinfo">
        <div class="container">
            <h1><a href="<?php echo home_url(); ?>"><img src="https://jour-1.com/wp-content/uploads/2020/09/image1.jpeg" alt="" ></a></h1>
        </div>
    </div>
        <img src="<?php echo get_template_directory_uri(); ?>/header_jour1.jpg" alt="" class="sp">
        <img src="<?php echo get_template_directory_uri(); ?>/header_jour1_pc.jpg" alt="" class="pc">
    <nav>
        <div class="container">
            <?php wp_nav_menu('theme_location=navigation');?>
        </div>
    </nav>
    
</header>