<?php
/*
 * Template Name: Evenement
 * <?php get_header() ?>
<main>
  <h1>---- Template Evenement ----</h1>
  <?php if (have_posts()): the_post(); ?>
  <?php the_title() ?>
  <?php the_content() ?>
  <?php endif ?>

</main>
<?php get_footer()?>
 */
?>



<?php get_header() ?>
<main>
 <article class="menu__evenement">

    <!-- <h1>---- Template Evenement ------</h1> -->
    <?php if (have_posts()): the_post(); ?>
    <h2>
       <?php the_title() ?>
    </h2>
    <?php the_content() ?>        
    <p>  Venez nous joindre au <?php the_field('adresse') ?>   </p>
    <p class="evenement__text__paragraph"> à <?php the_field('date-heure') ?>  </p>  
    <?php endif ?>
   </article>
</main>
<?php get_footer() ?>