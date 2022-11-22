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
        <section class="liste">
        <?php
		if ( have_posts() ) :
            while ( have_posts() ) :
				the_post();?>
                <article class="liste__cours">
                <!--<div class="article__wordpress">-->
                    <h1><a href=" <?php the_permalink()?> ">
                    <?php the_title() ?></a></h1>
                    <h4>Durée du cours: <?php the_field('duree')?> heures  </h4>
                    <?php the_content(null,true); ?>
                </article>

                        
                        <?php the_field('editeur'); ?>
                        <p><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
                        <?php
                            if( get_field('artTrue') ) {
                             echo "<h5> &#128153;</h5>";
                            } 
                            ?>
                </div>
               <?php
                ; 
            endwhile;
        endif;        
    ?> 
    </section>           
    </main>
    
<?php get_footer(); ?>
</html> 
