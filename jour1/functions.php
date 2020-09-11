<?php

    //widget
    register_sidebar();

    //RSS
    add_theme_support('automtic-feed-links');

    //custom menue
    register_nav_menu('navigation','ナビゲーション');

    function my_length($length){
        return 70;
    }
    add_filter('excerpt_mlength','my_lenght');

    function my_more($more){
        return '…';
    }
    add_filter('excerpt_more','my_more');