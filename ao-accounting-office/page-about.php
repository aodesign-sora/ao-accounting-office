<?php
/*
Template Name: あお会計事務所について
Template Post Type: page
*/
?>

<?php get_header();?>





    <section id="profile" class="about-page-section profile-section">
        <div class="about-page-container">
            <h2 class="about-page-title">Profile</h2>
            
            <div class="profile-content">
                <img src="<?php echo get_template_directory_uri(); ?>/images-ao/profile-1.svg" alt="青木傑の画像" class="profile-image">
                
                <h3 class="profile-name">青木  傑<br>Suguru Aoki</h3>
                
                <img src="<?php echo get_template_directory_uri(); ?>/images-ao/profile-2.svg" alt="略歴図" class="career-timeline">
            </div>
        </div>
    </section>

    <section id="message" class="about-page-section message-section">
        <div class="about-page-container">
            <h2 class="about-page-title">Message</h2>
            
            <div class="message-box">
                <p class="message-text">
                    この度は当事務所のページをご覧いただき、誠にありがとうございます。私たちは、お客様一人ひとりの課題に真摯に向き合い、最適なソリューションを提供することを使命としております。専門的な知識と迅速な対応で、お客様の未来を力強くサポートいたします。どんな些細なことでも、お気軽にご相談ください。
                </p>
                <div class="sign-area">
                    <img src="<?php echo get_template_directory_uri(); ?>/images-ao/sign.svg" alt="サイン画像" class="signature-image">
                </div>
            </div>
        </div>
    </section>

    <section id="office" class="about-page-section office-section">
        <div class="about-page-container">
            <h2 class="about-page-title">事務所概要</h2>
            
            <table class="office-table">
                <tr>
                    <th>事務所名</th>
                    <td>あお会計事務所</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td>〒564-0052 大阪府吹田市広芝町10-8 江坂董友ビル3階</td>
                </tr>
                <tr>
                    <th>連絡先</th>
                    <td>
                        <p>
                            <span class="office-tel-label">TEL:</span>
                            <a href="tel:0678785348" class="office-phone-link">
                                <span class="phone-number-mask">0123456789</span> 
                            </a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th>代表</th>
                    <td>公認会計士 / 税理士<br>青木 傑（あおき すぐる）</td>
                </tr>
                <tr>
                    <th>サービス内容</th>
                    <td>会計支援、社外役員、会計監査、税務顧問</td>
                </tr>
            </table>
        </div>
    </section>

    <section id="map" class="about-page-section map-section">
        <div class="about-page-container">
            <h2 class="about-page-title">Access Map</h2>
            
            <div class="google-map-embed">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3277.9534039633577!2d135.49515381130746!3d34.756766580089526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e5a7eddbb6d3%3A0x525a37b4678536cb!2z44GC44GK5Lya6KiI5LqL5YuZ5omA!5e0!3m2!1sja!2sjp!4v1760408395737!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

 <a href="/about" class="back-to-top">
        <div class="back-to-top__icon-wrapper">
            <div class="back-to-top__arrow"></div>
        </div>
        <div class="back-to-top__text">T o p</div>
        <div class="back-to-top__line"></div>
    </a>




<?php get_footer(); ?>