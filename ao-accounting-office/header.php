<!DOCTYPE html>
<html lang="ja">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>あお会計事務所</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <meta name="description" content="会計支援・社外役員・会計監査・税理顧問">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
   
    <?php wp_head(); ?>
    
</head>
<body>
  <header id="main-header">
    <div class="header-content">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/images-ao/aologo_yoko.png" alt="あお会計事務所">
            </a>
        </div>



        
        <div class="right-section">
           <nav class="desktop-nav">
             <ul>
                <li class="has-submenu">
                    <a href="<?php echo home_url(); ?>/services">業務内容</a>
                    <div class="submenu-container">
                        <div class="submenu-content">
                           <a href="<?php echo home_url(); ?>/services/#kaikeisien" class="submenu-item">会計支援</a>
                           <a href="<?php echo home_url(); ?>/services/#shagaiyakuin" class="submenu-item">社外役員</a>
                           <a href="<?php echo home_url(); ?>/services/#kaikeikansa" class="submenu-item">会計監査</a>
                           <a href="<?php echo home_url(); ?>/services/#zeimukomon" class="submenu-item">税務顧問</a>
                         </div>
                    </div>
                 </li>
                 <li><a href="<?php echo home_url(); ?>/about">事務所紹介</a></li>
              </ul>
           </nav>
         






            <div class="social-tabs">
                <a href="<?php echo home_url(); ?>/contact-page" class="social-tab mail-tab" aria-label="メールで問い合わせ">
                  <svg class="icon-svg" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 14C6 12.9391 6.42143 11.9217 7.17157 11.1716C7.92172 10.4214 8.93913 10 10 10H38C39.0609 10 40.0783 10.4214 40.8284 11.1716C41.5786 11.9217 42 12.9391 42 14V34C42 35.0609 41.5786 36.0783 40.8284 36.8284C40.0783 37.5786 39.0609 38 38 38H10C8.93913 38 7.92172 37.5786 7.17157 36.8284C6.42143 36.0783 6 35.0609 6 34V14Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6 14L24 26L42 14" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="tab-label">メールで問い合わせ</span>
                </a>


                <a href="<?php echo home_url(); ?>/contact-line" class="social-tab line-tab" aria-label="LINEで問い合わせ">
                  <img src="<?php echo get_template_directory_uri(); ?>/images-ao/LINE_Brand_icon 2.png" alt="LINEアイコン" class="icon-img">
                  <span class="tab-label">LINEで問い合わせ</span>
                </a>
            </div>

            <button class="hamburger-menu" aria-label="メニューを開く">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </div>
    
    <nav class="mobile-nav">
        <ul>
            <li><a href="<?php echo home_url(); ?>/services">業務内容</a></li>
            <li><a href="<?php echo home_url(); ?>/about">事務所紹介</a></li>
            <li><a href="<?php echo home_url(); ?>/contact-line">LINEで相談</a></li>
            <li><a href="<?php echo home_url(); ?>/contact-page">メールでお問い合わせ</a></li>
            </ul>
    </nav>
</header>