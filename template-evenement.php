<?php
/*
 * Template Name: Evenement
 */
?>

<?php get_header() ?>
<main>
  <h1>---- Template Evenement ----</h1>
  <?php if (have_posts()): the_post(); ?>
  <?php the_title() ?>
  <?php the_content() ?>
  <?php endif ?>

</main>
<?php get_footer()?>