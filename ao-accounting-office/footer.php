<footer id="main-footer" class="main-footer">
    <div class="footer-container">
        
        <div class="footer-item footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images-ao/aologo_tate.png" alt="あお会計事務所ロゴ" class="footer-logo-img">
        </div>
        
        <div class="footer-item footer-contact">
            <a href="<?php echo home_url(); ?>/contact-line" class="contact-button-mini line-mini">
                <img src="<?php echo get_template_directory_uri(); ?>/images-ao/LINE_Brand_icon 2.png" alt="LINE" class="button-icon-mini">
                <span class="contact-button-mini-text">LINEで連絡</span>
            </a>
            <a href="<?php echo home_url(); ?>/contact-page" class="contact-button-mini mail-mini">
                <img src="<?php echo get_template_directory_uri(); ?>/images-ao/mail-tab.svg" alt="Email" class="button-icon-mini">
                <span class="contact-button-mini-text">メールフォーム</span>
            </a>
            <a href="tel:0678785348" class="contact-button-mini phone-mini">
                <img src="<?php echo get_template_directory_uri(); ?>/images-ao/phone.svg" alt="Phone" class="button-icon-mini">
                <span class="contact-button-mini-text"><span class="phone-number-mask-mini"></span></span>
            </a>
        </div>
        
        <div class="footer-item footer-info">
            <div class="footer-address">
                <p><strong>あお会計事務所</strong></p>
                <p>〒564-0052</p>
                <p>大阪府吹田市広芝町10−８</p>
                <p>江坂董友ビル3F</p>
            </div>
            
            <nav class="footer-nav">
                <ul>
                    <li><a href="<?php echo home_url(); ?>/services">ー 業務内容</a></li>
                    <li><a href="<?php echo home_url(); ?>/about">ー 事務所紹介</a></li>
                    <li><a href="<?php echo home_url(); ?>/privacy">ー プライバシーポリシー</a></li>
                </ul>
            </nav>
        </div>
        
    </div>
    
    <div class="footer-copyright">
        <p>&copy; 2024 AO ACCOUNTING OFFICE. All rights reserved.</p>
    </div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
 <?php wp_footer(); ?>
</body>
</html>