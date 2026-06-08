<?php get_header(); ?>
<main class="l-main">
  <div class="l-container p-page-container">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        the_title('<h1 class="u-font-headline u-text-primary p-page-title">', '</h1>');
        the_content();
      endwhile;
    else :
      echo '<p>記事が見つかりません。</p>';
    endif;
    ?>
  </div>
</main>
<?php get_footer(); ?>
