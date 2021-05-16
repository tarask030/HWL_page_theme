<?php get_header();?>
<div class="introduce_image">
      <picture>
        <source media="(min-width: 500px) and (max-width: 710px)"
                srcset="<?php echo get_stylesheet_directory_uri();?>/images/05_blog/blog.jpg">  
        <source media="(min-width: 710px)"
                srcset="<?php echo get_stylesheet_directory_uri();?>/images/05_blog/blog.jpg">  
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/05_blog/blog_small.jpg" 
             alt="Unicorn Pool Float">
    </picture>     
      <div class="text_on_image_main">
        <div class="blog_name">
          <strong>Blog</strong>
        </div>
        <p class="p_text_on_image_main_services">
          Poczytaj najciekawsze artykuły z zakresu spedycji, logistyki oraz transportu.
        </p>
        <div class="btn_header_image_blog">
          <a href = "#posts_blog">CO NOWEGO?</a>
        </div>
      </div>
    </div>
    
 
<p><a name="posts_blog"></a></p>
  
    <div class="posts">

      <?php 
          if ( have_posts() ) {
          while ( have_posts() ) {
        the_post(); 
        ?>
        <article>
          <h1>
            <a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h1>
          <h4>Opublikowano: <?php echo get_the_date(); ?></h4>
          <p class ="tags"><?php the_tags( null, '#')?></p>
          <p><?php the_content('<span>WIĘCEJ</span>'); ?></p>
        </article>
      <?php
        } // end while
      } // end if
      ?>
    </div>
  



    <?php get_footer();?>
