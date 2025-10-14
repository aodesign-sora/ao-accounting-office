document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('main-header');
    const hamburger = document.querySelector('.hamburger-menu');
    const mobileNav = document.querySelector('.mobile-nav');

    // --- スマホでのスクロール表示・非表示制御 ---
    let lastScrollTop = 0;
    const scrollThreshold = 50; // スクロール量の閾値

    function handleScroll() {
        // スマホ画面幅のみで実行
        if (window.innerWidth <= 768) {
            let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (currentScroll > lastScrollTop && currentScroll > scrollThreshold) {
                // 下にスクロール: ヘッダーを隠す
                header.classList.add('header-hidden');
            } else if (currentScroll < lastScrollTop) {
                // 上にスクロール: ヘッダーを表示
                header.classList.remove('header-hidden');
            }
            
            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // スクロール位置を更新
        } else {
            // デスクトップでは常に表示
            header.classList.remove('header-hidden');
        }
    }

    window.addEventListener('scroll', handleScroll);
    window.addEventListener('resize', handleScroll); // リサイズ時にもチェック

    // 初期ロード時の状態をチェック
    handleScroll();

    // --- ハンバーガーメニューのトグル機能 ---
    hamburger.addEventListener('click', function() {
        const isOpen = mobileNav.classList.toggle('is-open');
        hamburger.setAttribute('aria-expanded', isOpen); // アクセシビリティ対応
        
        // 必要に応じてハンバーガーアイコン自体も変化させる
        // 例: hamburger.classList.toggle('is-active');
    });

    // モバイルナビゲーションのリンクがクリックされたらメニューを閉じる
    mobileNav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function () {
            mobileNav.classList.remove('is-open');
            hamburger.setAttribute('aria-expanded', 'false');
          });
    });
});