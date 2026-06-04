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
        <p style="font-size: 18px; color: var(--color-on-surface-variant);">
          夢前の豊かな自然に囲まれた静かな古民家で、皆様のお越しを心よりお待ちしております。お問い合わせや道順の確認はこちらから。
        </p>
      </div>
    </div>
    <div class="p-contact-hero__img-col">
      <img src="<?php echo get_template_directory_uri(); ?>/toppage.png" alt="Cafe interior" class="p-contact-hero__img">
      <div class="p-contact-hero__overlay"></div>
    </div>
  </section>

  <!-- Deep Scrolling Credits Section -->
  <section class="p-contact-info js-reveal">
    <div class="l-container p-contact-info__inner">
      <div class="p-contact-info__row">
        <div class="p-contact-info__label">Location</div>
        <div class="p-contact-info__value" style="font-family: var(--font-headline); font-size: 20px; line-height: 1.5;">
          <?php echo nl2br( esc_html( get_theme_mod( 'yumesaki_address', "〒671-0000\n兵庫県姫路市夢前町○○ 123-4" ) ) ); ?>
        </div>
      </div>
      
      <div class="p-contact-info__row js-reveal">
        <div class="p-contact-info__label">Opening Hours</div>
        <div class="p-contact-info__value" style="font-family: var(--font-headline); font-size: 20px; line-height: 1.5;">
          <div style="display: flex; justify-content: space-between; max-width: 200px;">
            <span>平日</span> 
            <span><?php echo esc_html( get_theme_mod( 'yumesaki_hours_weekday', '11:00 - 17:00' ) ); ?></span>
          </div>
          <div style="display: flex; justify-content: space-between; max-width: 200px; font-weight: bold;">
            <span>土日祝</span> 
            <span><?php echo esc_html( get_theme_mod( 'yumesaki_hours_weekend', '10:00 - 18:00' ) ); ?></span>
          </div>
          <div style="display: flex; justify-content: space-between; max-width: 200px; color: var(--color-error);">
            <span>定休日</span> 
            <span><?php echo esc_html( get_theme_mod( 'yumesaki_holidays', '火曜日' ) ); ?></span>
          </div>
        </div>
      </div>
      
      <div class="p-contact-info__row js-reveal">
        <div class="p-contact-info__label">Access</div>
        <div class="p-contact-info__value" style="display: flex; flex-direction: column; gap: 24px; font-size: 16px; line-height: 1.7;">
          <div style="display: flex; gap: 8px;">
            <span class="material-symbols-outlined u-text-secondary">directions_railway</span>
            <p style="margin: 0;">JR姫路駅 北口バスターミナル 4番乗り場より「夢前方面」行きバスで約30分。「○○前」バス停下車、徒歩5分。</p>
          </div>
          <div style="display: flex; gap: 8px;">
            <span class="material-symbols-outlined u-text-secondary">directions_car</span>
            <p style="margin: 0;">中国自動車道「福崎IC」より車で約15分。駐車場（10台）完備。</p>
          </div>
        </div>
      </div>
      
      <div class="p-contact-info__row js-reveal">
        <div class="p-contact-info__label">Contact</div>
        <div class="p-contact-info__value">
          <a href="tel:<?php echo esc_attr( get_theme_mod( 'yumesaki_phone', '079-000-0000' ) ); ?>" class="p-contact-info__tel" style="font-size: 20px; letter-spacing: 0.05em; line-height: 1.4;">
            <?php echo esc_html( get_theme_mod( 'yumesaki_phone', '079-000-0000' ) ); ?>
          </a>
          <p style="font-size: 14px; color: var(--color-on-surface-variant); margin-top: 4px;">（受付時間：営業時間内）</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Large Overlapping Form Section -->
  <section class="p-contact-form">
    <div class="l-container">
      <div class="p-contact-form__header js-reveal">
        <h2 class="p-contact-form__title">
          <span class="material-symbols-outlined u-text-secondary" style="font-size: 40px;">mail</span>
          お問い合わせ
        </h2>
        <p style="color: var(--color-on-surface-variant); opacity: 0.7;">ご不明な点やご予約に関するご相談など、お気軽にお尋ねください。</p>
      </div>
      
      <div class="p-contact-form__box js-reveal">
        <?php
        // WordPressの固定ページを使わないため、ここに直接フォームを記述します。
        // Contact Form 7 を使う場合は以下のコメントアウトを外してIDを指定してください。
        // echo do_shortcode('[contact-form-7 id="〇〇" title="お問い合わせ"]');
        ?>
        <div style="text-align: center; padding: 40px; background: var(--color-surface-container); border-radius: 8px;">
          <p>※現在、固定ページを使わずにこのテンプレート（<code>page-contact.php</code>）を直接表示しています。<br>実際のお問い合わせフォームを設置する場合は、このファイル（93行目付近）にHTMLを直接書くか、Contact Form 7等のショートコードをPHPで呼び出してください。</p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
