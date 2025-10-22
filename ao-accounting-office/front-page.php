<?php get_header();?>


<section id="hero-section">
  <img src="<?php echo get_template_directory_uri(); ?>/images-ao/home.svg" alt="あお会計事務所の背景" class="hero-image">
</section>



<section id="tsuyomi-section">
  <img src="<?php echo get_template_directory_uri(); ?>/images-ao/tsuyomi-2.svg" alt="あお会計事務所の４つの強み" class="tsuyomi-image">
</section>



<section id="service-section">
    <div class="service-container">
        <h2 class="service-title">業務内容</h2>
        <p class="service-subtitle">services</p>

        <div class="service-cards-grid fade-in">

            <div class="service-card">

               <div class="card-top-content">
                 <h3 class="card-title">会計支援</h3>
                 <img src="<?php echo get_template_directory_uri(); ?>/images-ao/service-1.svg" alt="会計支援" class="card-image">
               </div>
                
                <p class="card-text">- 財務アドバイザリー<br>- 中小企業サポート<br>専門的な業務は弊事務所にお任せください。皆さまが安心してコア業務に集中できる時間を生み出します。</p>
                <div class="read-more-container">
                  <a href="<?php echo home_url(); ?>/services/#kaikeisien" class="read-more-button">read more&nbsp;</a>
                </div>
            </div>

            <div class="service-card">

              <div class="card-top-content">
                 <h3 class="card-title">社外顧問</h3>
                 <img src="<?php echo get_template_directory_uri(); ?>/images-ao/service-2.svg" alt="社外顧問" class="card-image">
              </div>

                 <p class="card-text">IPO準備会社、Tokyo Pro Marketを中心に非常勤役員のお声がけをいただいています。<br>雑談レベルでも大丈夫なのでぜひお気軽にご連絡ください。</p>
                <div class="read-more-container">
                  <a href="<?php echo home_url(); ?>/services/#shagaiyakuin" class="read-more-button">read more&nbsp;</a>
                </div>
            </div>

            <div class="service-card">

              <div class="card-top-content">
                 <h3 class="card-title">会計監査</h3>
                 <img src="<?php echo get_template_directory_uri(); ?>/images-ao/service-3.svg" alt="会計監査" class="card-image">
              </div>
                
                <p class="card-text">大手監査法人にて上場・非上場・学校法人など様々な監査を経験した代表会計士が対応いたします。個人事務所ならではのご納得いただける価格で、高品質で柔軟な会計監査をご提供します。</p>
                <div class="read-more-container">
                  <a href="<?php echo home_url(); ?>/services/#kaikeikansa" class="read-more-button">read more&nbsp;</a>
                </div>
            </div>

            <div class="service-card">

              <div class="card-top-content">
                 <h3 class="card-title">税務顧問</h3>
                 <img src="<?php echo get_template_directory_uri(); ?>/images-ao/service-4.svg" alt="税務顧問" class="card-image">
              </div>

                <p class="card-text">弊事務所ではすべて税理士資格を持つプロが丁寧に対応いたします。人当たりの良さに定評がありますので、お気軽にご連絡ください。</p>
                <div class="read-more-container">
                  <a href="<?php echo home_url(); ?>/services/#zeimukomon" class="read-more-button">read more&nbsp;</a>
                </div>
            </div>

        </div>
    </div>
</section>



<section id="about-section">
    <img src="<?php echo get_template_directory_uri(); ?>/images-ao/about.svg" alt="事務所紹介" class="about-bg-image">

    <div class="about-container">
        <h2 class="about-title">あお会計事務所について</h2>
        <p class="about-subtitle">about</p>

        <div class="about-content-wrap fade-in">
            <div class="about-text-content">
                <h3 class="about-main-title">
                    公認会計士の経験をいかした<br>
                    <span class="shifted-line">『支える』監査役として貴社に貢献します</span>
                </h3>
                <p class="about-text">
                    当事務所は、公認会計士としての豊富な監査経験と専門知識を活かし、単なる税務処理に留まらない経営サポートを提供しています。複雑化する現代のビジネスにおいて、お客様の内部統制の強化、経営の透明性向上を「支える監査役」のような視点で行い、持続的な成長に貢献することをお約束します。お客様の最も信頼できるパートナーを目指します。
                </p>
            </div>

            <div class="about-image-content">
                <img src="<?php echo get_template_directory_uri(); ?>/images-ao/about-image.jpeg" alt="あお会計事務所代表の写真" class="about-image">
            </div>
        </div>
       



        <div class="read-more-container">
          <a href="<?php echo home_url(); ?>/about" class="read-more-button">read more&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </div>






    </div>
</section>





<section id="contact-section" class="contact-section">
    <div class="contact-background"></div>

    <div class="contact-title-container">
        <h2 class="contact-title">お問い合わせ</h2>
        <p class="contact-subtitle">contact</p>
    </div>

    <div class="contact-content">
        <div class="button-group fade-in">
            <a href="<?php echo home_url(); ?>/contact-line" class="contact-button line">
                <img src="<?php echo get_template_directory_uri(); ?>/images-ao/LINE_Brand_icon 2.png" alt="LINE" class="button-icon">
                <span class="button-text">LINEで相談</span>
            </a>
            <a href="<?php echo home_url(); ?>/contact-page" class="contact-button mail">
                <img src="<?php echo get_template_directory_uri(); ?>/images-ao/mail-tab.svg" alt="Email" class="button-icon">
                <span class="button-text">メールフォーム<br>はこちら</span>
            </a>
            <a href="tel:0678785348" class="contact-button phone">
                <img src="<?php echo get_template_directory_uri(); ?>/images-ao/phone.svg" alt="Phone" class="button-icon">
                <span class="button-text phone-text"><span class="phone-number-mask">0123456789</span> 
                    <p>平日10:00~18:00</p>
                </span>
            </a>
        </div>

        <p class="contact-message">会計・税務のことならお気軽にご相談ください。</p>
        
    </div>
</section>






 <a href="/home" class="back-to-top">
        <div class="back-to-top__icon-wrapper">
            <div class="back-to-top__arrow"></div>
        </div>
        <div class="back-to-top__text">T o p</div>
        <div class="back-to-top__line"></div>
    </a>


<?php get_footer(); ?>






