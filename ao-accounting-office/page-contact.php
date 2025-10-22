<?php
/*
Template Name: お問い合わせフォーム
Template Post Type: page
*/
?>
<?php get_header();?>




<section class="contact-page">
    <div class="contact-container">
        <h2 class="contact-title">お問い合わせフォーム</h2>
        <?php 
        // ここにショートコードを記述
        echo do_shortcode('[wpforms id="23" title="false" description="false"]'); 
        ?>
    </div>
</section>







<?php get_footer(); ?>