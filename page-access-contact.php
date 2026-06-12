<?php
/*
Template Name: お問い合わせ・アクセス
*/
get_header(); ?>

<main class="l-main">
  <!-- Cinematic Hero Section -->
  <section class="p-contact-hero">
    <div class="p-contact-hero__text-col">
      <div class="js-reveal">
        <h1 class="p-contact-hero__title">Contact &amp;<br>Access</h1>
        <div class="p-contact-hero__divider"></div>
        <p class="p-contact-hero__desc">
          夢前の豊かな自然に囲まれた静かな古民家で、皆様のお越しを心よりお待ちしております。お問い合わせや道順の確認はこちらから。
        </p>
      </div>
    </div>
    <div class="p-contact-hero__img-col">
      <img src="<?php echo get_template_directory_uri(); ?>/img/contact.avif" alt="Cafe interior" class="p-contact-hero__img">
      <div class="p-contact-hero__overlay"></div>
    </div>
  </section>

  <!-- Deep Scrolling Credits Section -->
  <section class="p-contact-info js-reveal">
    <dl class="l-container p-contact-info__inner">
      <div class="p-contact-info__row">
        <dt class="p-contact-info__label">Location</dt>
        <dd class="p-contact-info__value">
          <address class="p-contact-info__address">
            <?php echo nl2br( esc_html( get_theme_mod( 'yumesaki_address', "〒671-0000\n兵庫県姫路市夢前町○○ 123-4" ) ) ); ?>
          </address>
        </dd>
      </div>
      
      <div class="p-contact-info__row js-reveal">
        <dt class="p-contact-info__label">Opening Hours</dt>
        <dd class="p-contact-info__value">
          <dl class="p-contact-info__hours-list">
            <div class="p-contact-info__hours-row">
              <dt>平日</dt> 
              <dd><?php echo esc_html( get_theme_mod( 'yumesaki_hours_weekday', '11:00 - 17:00' ) ); ?></dd>
            </div>
            <div class="p-contact-info__hours-row p-contact-info__hours-row--weekend">
              <dt>土日祝</dt> 
              <dd><?php echo esc_html( get_theme_mod( 'yumesaki_hours_weekend', '10:00 - 18:00' ) ); ?></dd>
            </div>
            <div class="p-contact-info__hours-row p-contact-info__hours-row--holiday">
              <dt>定休日</dt> 
              <dd><?php echo esc_html( get_theme_mod( 'yumesaki_holidays', '火曜日' ) ); ?></dd>
            </div>
          </dl>
        </dd>
      </div>
      
      <div class="p-contact-info__row js-reveal">
        <dt class="p-contact-info__label">Access</dt>
        <dd class="p-contact-info__value">
          <ul class="p-contact-info__access-list">
            <li class="p-contact-info__access-item">
              <span class="material-symbols-outlined u-text-secondary" aria-hidden="true">directions_railway</span>
              <p class="p-contact-info__access-text">JR姫路駅 北口バスターミナル 4番乗り場より「夢前方面」行きバスで約30分。「○○前」バス停下車、徒歩5分。</p>
            </li>
            <li class="p-contact-info__access-item">
              <span class="material-symbols-outlined u-text-secondary" aria-hidden="true">directions_car</span>
              <p class="p-contact-info__access-text">中国自動車道「福崎IC」より車で約15分。駐車場（10台）完備。</p>
            </li>
          </ul>
        </dd>
      </div>
      
      <div class="p-contact-info__row js-reveal">
        <dt class="p-contact-info__label">Contact</dt>
        <dd class="p-contact-info__value">
          <a href="tel:<?php echo esc_attr( get_theme_mod( 'yumesaki_phone', '079-000-0000' ) ); ?>" class="p-contact-info__tel">
            <?php echo esc_html( get_theme_mod( 'yumesaki_phone', '079-000-0000' ) ); ?>
          </a>
          <p class="p-contact-info__note">（受付時間：営業時間内）</p>
        </dd>
      </div>
    </dl>
  </section>

  <!-- Large Overlapping Form Section -->
  <section class="p-contact-form">
    <div class="l-container">
      <div class="p-contact-form__header js-reveal">
        <h2 class="p-contact-form__title">
          <span class="material-symbols-outlined u-text-secondary p-contact-form__icon" aria-hidden="true">mail</span>
          お問い合わせ
        </h2>
        <p class="p-contact-form__desc">ご不明な点やご予約に関するご相談など、お気軽にお尋ねください。</p>
      </div>
      
      <div class="p-contact-form__box js-reveal">
        <?php
        // WordPressの固定ページを使わないため、ここに直接フォームを記述します。
        // Contact Form 7 を使う場合は以下のコメントアウトを外してIDを指定してください。
        // echo do_shortcode('[contact-form-7 id="〇〇" title="お問い合わせ"]');
        ?>
        <div class="p-contact-form__placeholder">
          <p>※現在、固定ページを使わずにこのテンプレート（<code>page-contact.php</code>）を直接表示しています。<br>実際のお問い合わせフォームを設置する場合は、このファイル（93行目付近）にHTMLを直接書くか、Contact Form 7等のショートコードをPHPで呼び出してください。</p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
