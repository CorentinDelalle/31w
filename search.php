<?php 
get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'undercores' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

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
        

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
