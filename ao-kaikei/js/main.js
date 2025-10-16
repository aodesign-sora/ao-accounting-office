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








// 1. 要素を取得
    const backToTopButton = document.querySelector('.back-to-top');

    // 2. スクロールイベントのリスナーを設定
    window.addEventListener('scroll', () => {
        // 現在のスクロール位置 (縦方向) を取得
        const scrollPosition = window.scrollY;
        
        // ボタンを表示させる閾値 (例: 500ピクセル)
        const displayThreshold = 1000; 

        if (scrollPosition > displayThreshold) {
            // 閾値を超えたら、表示用クラスを追加
            backToTopButton.classList.add('is-visible');
        } else {
            // 閾値以下の場合は、表示用クラスを削除（非表示に戻す）
            backToTopButton.classList.remove('is-visible');
        }
    });

    // 3. クリック時のスムーズスクロール処理（おまけ）
    backToTopButton.addEventListener('click', (e) => {
        e.preventDefault(); // リンクのデフォルト動作（急なジャンプ）をキャンセル
        window.scrollTo({
            top: 0, 
            behavior: 'smooth' // スムーズにスクロール
        });
    });











    // ハンバーガーメニューのアニメーション
const menuButton = document.querySelector('.hamburger-menu');
const mobileNav = document.querySelector('.mobile-nav');

if (menuButton && mobileNav) {
    menuButton.addEventListener('click', () => {
        // is-open と is-active クラスを同時に切り替える
        mobileNav.classList.toggle('is-open');
        menuButton.classList.toggle('is-active'); 
        
        // メニューが開いたときに body のスクロールを停止
        document.body.classList.toggle('no-scroll');
    });
}

