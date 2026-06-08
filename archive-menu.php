<?php get_header(); ?>
<main class="l-main">
  <div class="p-menu">
    
    <!-- Left: Fixed Image (Desktop only) -->
    <div class="p-menu__visual">
      <div class="p-menu__visual-img-container">
        <img src="<?php echo get_template_directory_uri(); ?>/img/menu1.avif" alt="おしながき" class="p-menu__visual-img js-menu-featured-img">
        <div class="p-menu__visual-overlay"></div>
      </div>
    </div>
    
    <!-- Right: Scrolling Content -->
    <div class="p-menu__content">
      <div class="p-menu__header">
        <div class="p-menu__divider"></div>
        <h1 class="p-menu__title">おしながき</h1>
        <p class="p-menu__desc">
          厳選された素材と、手間ひまかけた職人の技。<br>
          四季折々の移ろいを感じる、至福の甘味をご用意いたしました。
        </p>
      </div>
      
      <div class="p-menu__list">
        <?php
        $menu_query = new WP_Query( array(
            'post_type'      => 'menu_item',
            'posts_per_page' => -1,
        ) );
        
        if ( $menu_query->have_posts() ) :
            $menu_count = 1;
            while ( $menu_query->have_posts() ) : $menu_query->the_post();
                
                // Get ACF fields
                $price = get_field('menu_price');
                $is_takeout = get_field('menu_is_takeout');
                
                // Use sequentially numbered AVIF images
                $thumbnail_url = get_template_directory_uri() . '/img/menu' . $menu_count . '.avif';
        ?>
        <div class="p-menu-item js-menu-item" data-image="<?php echo esc_url($thumbnail_url); ?>">
          
          <!-- Mobile Image -->
          <div class="p-menu-item__mobile-img">
            <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>">
            <?php if ( $is_takeout ) : ?>
            <div class="p-menu-item__badge">
              <span class="material-symbols-outlined">takeout_dining</span>
              <span>テイクアウトOK</span>
            </div>
            <?php endif; ?>
          </div>
          
          <div class="p-menu-item__header">
            <h2 class="p-menu-item__name"><?php the_title(); ?></h2>
            <?php if ( $price ) : ?>
            <span class="p-menu-item__price">¥<?php echo esc_html( number_format( (float) $price ) ); ?></span>
            <?php endif; ?>
          </div>
          
          <?php if ( $is_takeout ) : ?>
          <!-- Desktop Badge -->
          <div class="p-menu-item__badge-desktop">
            <span class="material-symbols-outlined">takeout_dining</span>
            <span>テイクアウトOK</span>
          </div>
          <?php endif; ?>
          
          <div class="p-menu-item__text">
            <?php the_content(); ?>
          </div>
          
          <div class="p-menu-item__sep"></div>
        </div>
        <?php
                $menu_count++;
            endwhile;
            wp_reset_postdata();
        else :
        ?>
        <p>現在おしながきは準備中です。</p>
        <?php endif; ?>
      </div>
      
      <div class="p-menu__footer-msg">
        <span class="material-symbols-outlined u-text-secondary p-menu__footer-icon" aria-hidden="true">local_cafe</span>
        <p class="u-font-headline u-text-primary p-menu__footer-catchphrase">「日々の喧騒を忘れ、一杯の茶に心を寄せる。」</p>
        <p class="p-menu__footer-note">※表示価格はすべて税込です。</p>
      </div>
      
    </div>
  </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const featuredImage = document.querySelector('.js-menu-featured-img');
    const menuItems = document.querySelectorAll('.js-menu-item');
    
    if(!featuredImage || menuItems.length === 0) return;

    const observerOptions = {
        root: null,
        rootMargin: '-20% 0px -40% 0px',
        threshold: 0.5
    };

    let currentImageSrc = featuredImage.src;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const newImageSrc = entry.target.getAttribute('data-image');
                if (newImageSrc && newImageSrc !== currentImageSrc) {
                    featuredImage.style.opacity = 0;
                    setTimeout(() => {
                        featuredImage.src = newImageSrc;
                        featuredImage.style.opacity = 1;
                        currentImageSrc = newImageSrc;
                    }, 250);
                }
            }
        });
    }, observerOptions);

    menuItems.forEach(item => {
        observer.observe(item);
    });
});
</script>

<?php get_footer(); ?>
