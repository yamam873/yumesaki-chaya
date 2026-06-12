<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="c-header js-header">
  <div class="l-container c-header__inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-header__brand">
      <img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="<?php bloginfo('name'); ?>" class="c-header__logo">
      <span class="c-header__title"><?php bloginfo('name'); ?></span>
    </a>
    
    <button class="c-hamburger js-hamburger" aria-label="メニュー" aria-expanded="false" aria-controls="header-drawer">
      <span class="c-hamburger__line"></span>
      <span class="c-hamburger__line"></span>
      <span class="c-hamburger__line"></span>
    </button>
    
    <div class="c-header__drawer js-drawer" id="header-drawer">
      <nav class="c-header__nav">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-header__nav-link <?php if(is_front_page()) echo 'is-active'; ?>">ホーム</a>
        <a href="<?php echo esc_url( get_post_type_archive_link( 'menu_item' ) ); ?>" class="c-header__nav-link <?php if(is_post_type_archive('menu_item')) echo 'is-active'; ?>">おしながき</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>#concept" class="c-header__nav-link">コンセプト</a>
        <a href="<?php echo esc_url( home_url( '/access-contact' ) ); ?>" class="c-header__nav-link <?php if(is_page('access-contact')) echo 'is-active'; ?>">お問い合わせ・アクセス</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>#news" class="c-header__nav-link">お知らせ</a>
      </nav>
      
      <a href="<?php echo esc_url( home_url( '/access-contact' ) ); ?>" class="c-button c-button--primary c-header__reserve-btn">
        予約する
      </a>
    </div>
  </div>
</header>
