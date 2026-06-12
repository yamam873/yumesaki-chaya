<footer class="c-footer">
  <div class="l-container">
    <div class="c-footer__grid">
      <!-- ブランド情報 -->
      <div class="c-footer__section">
        <div class="c-footer__brand">
          <img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="<?php bloginfo('name'); ?>" class="c-footer__logo">
          <span class="c-footer__title"><?php bloginfo('name'); ?></span>
        </div>
        <address class="c-footer__text">
          <?php echo nl2br( esc_html( get_theme_mod( 'yumesaki_address', '〒671-0000 兵庫県姫路市夢前町○○ 123-4' ) ) ); ?><br>
          TEL: <?php echo esc_html( get_theme_mod( 'yumesaki_phone', '079-000-0000' ) ); ?>
        </address>
      </div>
      
      <!-- 営業時間 -->
      <div class="c-footer__section">
        <h4 class="c-footer__heading">OPENING HOURS</h4>
        <dl class="c-footer__hours">
          <div class="c-footer__hour-row">
            <dt>平日</dt>
            <dd><?php echo esc_html( get_theme_mod( 'yumesaki_hours_weekday', '11:00 - 17:00' ) ); ?></dd>
          </div>
          <div class="c-footer__hour-row c-footer__hour-row--weekend">
            <dt>土日祝</dt>
            <dd><?php echo esc_html( get_theme_mod( 'yumesaki_hours_weekend', '10:00 - 18:00' ) ); ?></dd>
          </div>
          <div class="c-footer__hour-row c-footer__hour-row--holiday">
            <dt>定休日</dt>
            <dd><?php echo esc_html( get_theme_mod( 'yumesaki_holidays', '火曜日' ) ); ?></dd>
          </div>
        </dl>
      </div>
      
      <!-- フッターリンク -->
      <div class="c-footer__section">
        <h4 class="c-footer__heading">LINKS</h4>
        <ul class="c-footer__links">
          <li><a href="#" class="c-footer__link">プライバシーポリシー</a></li>
          <li><a href="#" class="c-footer__link">特定商取引法に基づく表記</a></li>
          <li><a href="#" class="c-footer__link">採用情報</a></li>
        </ul>
      </div>
    </div>
    
    <div class="c-footer__bottom">
      <div class="c-footer__social">
        <a href="#" class="c-footer__social-link" aria-label="Instagram">
          <svg class="c-footer__social-icon" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
        </a>
        <a href="#" class="c-footer__social-link" aria-label="Facebook">
          <svg class="c-footer__social-icon" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"></path></svg>
        </a>
      </div>
      <p class="c-footer__copyright">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
    </div>
  </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-active');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.js-reveal').forEach(el => observer.observe(el));

    // ハンバーガーメニュー切り替え
    const hamburgerBtn = document.querySelector('.js-hamburger');
    const headerDrawer = document.querySelector('.js-drawer');
    const navLinks = document.querySelectorAll('.c-header__nav-link');

    if (hamburgerBtn && headerDrawer) {
        const toggleMenu = () => {
            const isOpen = hamburgerBtn.classList.contains('is-open');
            if (isOpen) {
                hamburgerBtn.classList.remove('is-open');
                hamburgerBtn.setAttribute('aria-expanded', 'false');
                headerDrawer.classList.remove('is-open');
                document.body.style.overflow = ''; // スクロール再開
            } else {
                hamburgerBtn.classList.add('is-open');
                hamburgerBtn.setAttribute('aria-expanded', 'true');
                headerDrawer.classList.add('is-open');
                document.body.style.overflow = 'hidden'; // 背面のスクロール防止
            }
        };

        hamburgerBtn.addEventListener('click', toggleMenu);

        // リンククリック時にメニューを閉じる
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (hamburgerBtn.classList.contains('is-open')) {
                    toggleMenu();
                }
            });
        });
    }

    // お知らせ折りたたみ切り替え
    const toggleNewsBtn = document.getElementById('toggle-news-btn');
    const pastNewsContainer = document.getElementById('past-news-container');
    const toggleNewsText = document.getElementById('toggle-news-text');
    const toggleNewsIcon = document.getElementById('toggle-news-icon');

    if (toggleNewsBtn && pastNewsContainer) {
        toggleNewsBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const isOpen = pastNewsContainer.classList.contains('is-open');
            if (isOpen) {
                // 閉じる
                pastNewsContainer.style.maxHeight = pastNewsContainer.scrollHeight + 'px';
                pastNewsContainer.offsetHeight; // reflowを強制して即座に適用させる
                pastNewsContainer.style.maxHeight = '0px';
                pastNewsContainer.style.opacity = '0';
                pastNewsContainer.classList.remove('is-open');
                
                toggleNewsBtn.classList.remove('is-open');
                toggleNewsText.textContent = '過去のお知らせを見る';
                toggleNewsIcon.textContent = 'expand_more';
            } else {
                // 開く
                pastNewsContainer.classList.add('is-open');
                pastNewsContainer.style.maxHeight = pastNewsContainer.scrollHeight + 'px';
                pastNewsContainer.style.opacity = '1';
                
                toggleNewsBtn.classList.add('is-open');
                toggleNewsText.textContent = '閉じる';
                toggleNewsIcon.textContent = 'expand_less';
                
                // トランジション終了時に none にしてリサイズ対応
                const transitionHandler = () => {
                    if (pastNewsContainer.classList.contains('is-open')) {
                        pastNewsContainer.style.maxHeight = 'none';
                    }
                    pastNewsContainer.removeEventListener('transitionend', transitionHandler);
                };
                pastNewsContainer.addEventListener('transitionend', transitionHandler);
            }
        });
    }
});
</script>
<?php wp_footer(); ?>
</body>
</html>
