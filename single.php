<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

 ?>


<?php get_header(); ?>
    <main class="site_main">
    <?php
		if ( have_posts() ) :
            while ( have_posts() ) :
				the_post();
                the_title('<h2>','</h2>');
                the_content(null,true); ?>

                <section>
                    <small>
                    <span> <?php the_weekday();?></span>
                    <span> <?php the_date();?></span>
                    <span> <?php the_time();?></span>
                    </small>
                    <code>
                       <?php the_author();?>  </code>
                    <pre>
                        <?php the_category(); ?> 
                    </pre>
                </section>
                 <?php 
            endwhile;
        endif;        
    ?>            
    </main>
    
<?php get_footer(); ?>
</html> 
