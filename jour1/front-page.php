<?php get_header();?>

<div class="topmenu">
    <div class="container">
    <div class="contents">
            <?php if(have_posts()):while(have_posts()):the_post();?>
            <article <?php post_class();?>>
                   
                    <?php the_content();?>
            </article>
            <?php endwhile;endif;?>

            <div class="about">
                <h1>About</h1>
            </div>
            <div class=profile>
           
                <img src="https://jour-1.com/wp-content/uploads/2019/11/profile.image_.jpg" alt="face" width="160" height="160">
                <ul>
                    <h2>Name</h2>
                    <li>Masato Muto</li>
                    <h2>SNS</h2>
                    <li><a href="https://twitter.com/610_engineer"><i class="3x fab fa-twitter-square"></i></a>Twitter</li>
                    <h2>e-mail</h2>
                    <li>m_muto@jour-1.com</li>
                    <h2>Residence</h2>
                    <li>Nagoya Japan</li>
                </ul>
            </div>
            <div class=history>
                <h2>History</h2>
                <h3>2013-2018</h3>
                <p>Was sales in trading company for aerospace.</p>
                <h3>2018-2019</h3>
                <p>Was sales in manufacturer for atuomotive conmponent.</p>
                <h3>2019 ~ </h3>
                <p>Is embedded engineer for Air conditioner.</p>
                <p>Learnning how to use Wordpress to expand knowledge.</p>
            </div>

        </div>
        
        
        <div class="front">
            <h2>SKILL</h2>
        </div>
        <div class="skills">
            
            <div class="skill">
                <p><i class="fas fa-robot fa-5x"></i>EMBEDED</p>
            </div>
            <div class="skill">
                <p><i class="fas fa-keyboard fa-5x"></i>HTML & CSS</p>
            </div>
            <div class="skill">
                <p><i class="fab fa-wordpress-simple fa-5x"></i>WORDPRESS</p>
            </div>
            <div class="skill">
                <p><i class="fab fa-android fa-5x"></i>Android</p>
            </div>
            <div class="skill">
                <p><i class="fab fa-java fa-5x"></i>Java</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>