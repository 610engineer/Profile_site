<?php get_header();?>
    <div class="container">
        <div class="two-line">
            <div class="b_contents_list">
                <div class="contents">
                    <?php if(have_posts()):while(have_posts()):the_post();?>
                    <article <?php post_class();?>>
                        <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                        <div class="postinfo">
                                <time datetime="<?php echo get_the_date('d-m-Y')?>">
                                    <i class="fas fa-clock"></i>
                                    <?php echo get_the_date('d-m-Y');?>
                                </time>
                                    <div class="postcast">
                                        <i class="fas fa-folder-open"></i>
                                        <?php the_category(',');?>
                                    </div>
                            <?php if(is_single()):?>
                                <?php the_content();?>
                            <?php else: ?>
                                <div class ="excerpt">
                                <?php the_excerpt(); ?>
                                <p class ="more"><a href="<?php the_permalink(); ?>">...more>></a></p>
                                </div>
                            <?php endif; ?>
                            <?php if(is_single()):?>
                                <div class="pagenav">
                                    <span class="old">
                                        <?php previous_post_link();?>
                                    </span>
                                    <span class="new">
                                        <?php next_post_link();?>
                                    </span>
                                    </div>
                            <?php endif;?>
                    </article>
                    <?php endwhile;endif;?>
                </div>
                <!--page navigation-->
                    <div class="pagenav">
                        <span class="old">
                            <?php previous_posts_link('<< 次のページ');?>
                        </span>
                        <span class="new">
                            <?php next_posts_link('前のページ >>');?>
                        </span>
                    </div>

            </div>
            <!--b_contents-->

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
        </div>
    </div><!--container-->
<?php get_footer();?>