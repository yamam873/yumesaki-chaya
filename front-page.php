<?php get_header(); ?>

<main class="l-main">
  <!-- ヒーローエリア -->
  <section class="p-hero js-reveal">
    <div class="p-hero__bg-slider">
      <?php for ( $i = 1; $i <= 4; $i++ ) : ?>
        <?php 
          $hero_img = get_theme_mod( "yumesaki_hero_image_{$i}", get_template_directory_uri() . "/img/hero{$i}.avif" );
          if ( $hero_img ) :
        ?>
          <div class="p-hero__bg-slide p-hero__bg-slide--<?php echo $i; ?>" style="background-image: url('<?php echo esc_url( $hero_img ); ?>');"></div>
        <?php endif; ?>
      <?php endfor; ?>
    </div>
    <div class="p-hero__overlay"></div>
    <div class="p-hero__content l-container">
      <h1 class="p-hero__title">古民家で過ごす、<br>ゆっくりとした時間。</h1>
    </div>
    <div class="p-hero__scroll-icon">
      <span class="material-symbols-outlined p-hero__scroll-icon-svg" aria-hidden="true">keyboard_double_arrow_down</span>
    </div>
  </section>

  <!-- コンセプトエリア -->
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
          <span class="p-concept__divider-line"></span>
          <span aria-hidden="true">✦</span>
          <span class="p-concept__divider-line"></span>
        </div>
      </div>
    </div>
  </section>

  <!-- 看板メニューエリア -->
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

  <!-- お知らせエリア -->
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
            'posts_per_page' => 6,
        ) );
        
        $post_count = 0;
        if ( $news_query->have_posts() ) :
            while ( $news_query->have_posts() ) : $news_query->the_post();
                $post_count++;
                if ( $post_count == 4 ) {
                    echo '</div>';
                    echo '<div id="past-news-container" class="p-news__grid p-news__past-container">';
                }
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
      
      <?php if ( $post_count > 3 ) : ?>
      <div class="p-news__toggle-wrapper">
        <button type="button" id="toggle-news-btn" class="p-news__toggle-btn">
          <span id="toggle-news-text">過去のお知らせを見る</span>
          <span class="material-symbols-outlined p-news__toggle-icon" id="toggle-news-icon">expand_more</span>
        </button>
      </div>
      <?php endif; ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
