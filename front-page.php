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
				the_post(); // puede ser un post o un articulo 
                // the_title('<h2> ','</h2>');?>
                <div class="articleBlog">
                <h1><a href=" <?php the_permalink()?> "><?php the_title() ?></a></h1>
                <?php the_content(null,true);
                ?></div>
               
           <?php endwhile;
        endif;        
    ?>            
    </main>
    
<?php get_footer(); ?>
</html> 
