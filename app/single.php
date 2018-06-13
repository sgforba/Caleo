<?php
  
  get_header();

  while(have_posts()) {
    the_post(); ?>
    <div class="content-wrapper clear">   
        <main>
            <h3>
                <?php the_title(); ?>
            </h3>
            <h1>
                <?php the_title(); ?>
            </h1>
            <div class="hero-wrapper">
                <img src="./images/1.jpg">
            </div>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </main>  
    </div>    
    

    
  <?php }

  get_footer();

?>