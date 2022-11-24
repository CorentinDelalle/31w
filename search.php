<?php 
get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					echo 'Résultats de la recherche';
					?>
				</h1>
        <p><?php printf( esc_html__( 'Éléments de recherche: %s', 'undercores' ), '<span>' . get_search_query() . '</span>' );?></p>
			</header><!-- .page-header -->

      <?php
		if ( have_posts() ) :
            while ( have_posts() ) :
				the_post();
                the_title('<h2>','</h2>');
                $content = get_the_content(); echo wp_trim_words( get_the_content(), 20, '...' ); ?>

                 <?php 
            endwhile;
        endif;        
        

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
