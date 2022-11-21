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
        wp_nav_menu(array(
            "menu" => "evenement",
            "container" => "nav",
            "container_class" => "menu__evenement"
        ));


		/*if ( have_posts() ) :
            while ( have_posts() ) :
				the_post(); ?>
                <div class="articleBlog">
                <h1><a href=" <?php the_permalink()?> ">
                <?php the_title() ?></a></h1>
                <?php the_content(null,true) ?>

                <?php if (has_post_thumbnail()){
                    the_post_thumbnail('thumbnail');}?>
                <?php wp_trim_words(get_the_excerpt(),10,"...");?></div>
               
           <?php endwhile;
        endif;        
    ?>            
    </main> */

    if ( have_posts() ) :
            while ( have_posts() ) :
				the_post(); ?>

                <div class="articleBlog">
                    <h1><a href=" <?php the_permalink()?> "><?php the_title() ?></a></h1>
                       
                    <?php 
                    $myArray = get_the_category();
                    $boolGalerie = false;
                    foreach($myArray as $key){
                        if($key->slug =="galerie"){
                            $boolGalerie = true;
                        }
                    };
                    if ($boolGalerie == true) {
                        the_content(null,true);
                    } else {
                        
                        echo wp_trim_words(get_the_excerpt(),35,"...");
                    }
                    ?>
                    <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail('thumbnail');
                        }
                        ?>
                </div>
               <?php
                ; 
            endwhile;
        endif;        
    ?>            
    </main>
    
    
<?php get_footer(); ?>
</html> 
