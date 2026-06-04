<?php get_header(); ?>

<main class="l-main">
  <!-- Hero Section -->
  <section class="p-hero js-reveal">
    <div class="p-hero__bg-slider">
      <div class="p-hero__bg-slide p-hero__bg-slide--1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/hero1.avif');"></div>
      <div class="p-hero__bg-slide p-hero__bg-slide--2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/hero2.avif');"></div>
      <div class="p-hero__bg-slide p-hero__bg-slide--3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/hero3.avif');"></div>
    </div>
    <div class="p-hero__overlay"></div>
    <div class="p-hero__content l-container">
      <h1 class="p-hero__title">古民家で過ごす、<br>ゆっくりとした時間。</h1>
    </div>
    <div class="p-hero__scroll-icon">
      <span class="material-symbols-outlined" style="font-size: 32px;">keyboard_double_arrow_down</span>
    </div>
  </section>

  <!-- Concept Section -->
  <section class="p-concept js-reveal" id="concept">
    <div class="l-container">
      <div class="p-concept__inner">
        <span class="p-concept__label">CONCEPT</span>
        <h2 class="p-concept__title">日常を忘れ、心ほどけるひとときを</h2>
        
        <p class="p-concept__text">
          築八十年の古民家を改装した「夢前茶屋」では、<br>
          時を刻む柱の傷や、畳の香り、窓から差し込む柔らかな光が皆様をお迎えします。
        </p>
        <p class="p-concept__text">
          厳選した豆を丁寧にハンドドリップした珈琲と、<br>
          どこか懐かしい味わいの自家製プリン。<br>
          せわしない毎日から少しだけ離れて、自分を整える時間をお過ごしください。
        </p>
        
        <div class="p-concept__divider">
          <span style="width: 48px; height: 1px; background-color: var(--color-outline); margin: 0 16px;"></span>
          <span>✦</span>
          <span style="width: 48px; height: 1px; background-color: var(--color-outline); margin: 0 16px;"></span>
        </div>
      </div>
    </div>
  </section>

  <!-- Signature Section -->
  <section class="p-signature js-reveal">
    <div class="l-container">
      <div class="p-signature__grid">
        <div class="p-signature__image-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/signature.avif" alt="看板メニュー" class="p-signature__image">
        </div>
        <div class="p-signature__content">
          <span class="p-signature__label">SIGNATURE</span>
          <h2 class="p-signature__title">自家製カスタードプリンと<br>深煎り珈琲</h2>
          <p class="p-signature__text">
            卵のコクを活かした固めのプリンに、ほろ苦いカラメルをたっぷり。香ばしく深みのある珈琲との相性は、至福のひとときを約束します。
          </p>
          <a href="<?php echo esc_url( get_post_type_archive_link( 'menu_item' ) ); ?>" class="p-signature__link">
            おしながきを見る
            <span class="material-symbols-outlined">arrow_forward</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- News Section -->
  <section class="p-news js-reveal" id="news">
    <div class="l-container">
      <div class="p-news__header">
        <span class="p-news__label">NEWS</span>
        <h2 class="p-news__title">お知らせ</h2>
      </div>
      
      <div class="p-news__grid">
        <?php
        $news_query = new WP_Query( array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
        ) );
        
        if ( $news_query->have_posts() ) :
            while ( $news_query->have_posts() ) : $news_query->the_post();
        ?>
        <!-- お知らせアイテム（リンクなし） -->
        <div class="p-news__item">
          <div class="p-news__date"><?php echo get_the_date('Y.m.d'); ?></div>
          <h3 class="p-news__item-title"><?php the_title(); ?></h3>
          <div class="p-news__item-text">
            <?php echo wp_trim_words( get_the_content(), 40, '...' ); ?>
          </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
        <p>現在お知らせはありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
