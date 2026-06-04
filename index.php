<?php get_header(); ?>
<main class="l-main">
  <div class="l-container" style="padding-top: var(--spacing-xl); padding-bottom: var(--spacing-xl); min-height: 50vh;">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        the_title('<h1 class="u-font-headline u-text-primary" style="margin-bottom: var(--spacing-md); font-size: 32px;">', '</h1>');
        the_content();
      endwhile;
    else :
      echo '<p>記事が見つかりません。</p>';
    endif;
    ?>
  </div>
</main>
<?php get_footer(); ?>
