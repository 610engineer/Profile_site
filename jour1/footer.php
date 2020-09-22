<footer>
    <nav>
        <div class="container">
                <?php wp_nav_menu('theme_location=navigation');?>
                <h3>Copyright &copy;<?php bloginfo('name');?></h3>
        </div>
        </nav>
       
</footer>



<?php wp_footer();?>

    
<?php if(is_front_page()): ?>
    <div class = "start">
        <p><img src="https://jour-1.com/wp-content/uploads/2020/09/image1.jpeg" alt=""></p>
    </div>
    <script>
    jQuery(function($) {
        setTimeout(function(){
        //fadein Logo in 0.1sec
            $('.start p').fadeIn();
        },100); 
        setTimeout(function(){
        //feeOut white screen in 1sec
            $('.start').fadeOut();
        },1000); 
    });
    </script>
<?php endif; ?>
    

</body>
</html> 