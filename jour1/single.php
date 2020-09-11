<?php get_header();?>
    <div class="container">
        <div class="two-line">
            <div class="b_contents">
                <?php if(have_posts()):while(have_posts()):the_post();?>
                <article <?php post_class();?>>
                    <h1><?php the_title();?></h1>
                        <?php the_content();?>
                </article>
                <?php endwhile;endif;?>

                <!--page navigation-->
                <div class="pagenav">
                    <span class="old">
                        <?php previous_post_link();?>
                    </span>
                    <span class="new">
                        <?php next_post_link();?>
                    </span>
                </div>
            </div>
            
            <!--blogmenu-->
            <div class="blogmenu">
            <ul><?php dynamic_sidebar();?>
       
            <li class="widget">
                <ul>
                    <li>
                        <a href="<?php bloginfo('rss2_url');?>"><i class="fas fa-rss-square"></i>RSS</a>
                    </li>
                </ul>
            </li>
            </ul>
            </div>
        <!--contents-->
    </div><!--container-->
<?php get_footer();?>