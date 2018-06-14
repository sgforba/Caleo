<?php get_header(); ?>
<div class="homepage-mobile-header">
    <a href="" class="logo">
        CALEO
    </a>
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>                     
</div>  

<div class="homepage clear">
    <div class="homepage-sidebar scrolled">
        <a href="" class="logo">
            CALEO
        </a>
        <ul class="navigation">
            <li><a href="">Home</a></li>
            <li><a href="">Travels</a></li>
            <li><a href="">Lifestyle</a></li>
            <li><a href="">Features</a></li>
            <li><a href="">About</a></li>
        </ul>
        <nav class="social">
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-pinterest"></i></a>
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
            <a href=""><i class="fas fa-rss"></i></a>
        </nav>
    </div>
    <div class="homepage-posts">
        <?php
            while(have_posts()) {
                the_post(); 
        ?>
            <div class="homepage-post small small-type-1">
                <div class="post-image">
                    <img src="./images/2.jpg">
                    <span class="tag"><?php get_the_category(); ?></span>
                </div>
                <div class="post-content">
                    <h1><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h1>
                    <p>   
                    <?php the_content(); ?>  
                    </p>
                    <span class="comments">2 Comments</span>
                </div>
            </div>
        <?php } ?>

    </div>    
<?php get_footer(); ?>