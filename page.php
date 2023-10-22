<?php get_header(); ?>
<main>
  <p><?php the_time( get_option( 'date_format' ) ); ?></p>
  <article>
    <h1><?php the_title(); ?></h1>
    <?php
      $category = the_category();
      echo $category;
    ?>
    <section class="note-line">
      <?php the_content(); ?>
    </section>
  </article>
</main>

<div class="nav-links">
    <div class="nav-links_prev"><?php previous_post_link('%link'); ?></div>
    <div class="nav-links_next"><?php next_post_link('%link'); ?></div>
</div>

<?php get_footer(); ?>