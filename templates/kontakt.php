<?php
    // Template Name: Kontakt

    get_header();
?>    
<!-- Tło zdjęcia -->
<img src="<?= get_stylesheet_directory_uri() ?>/images/kontaktowe.jpg" alt="Kontaktowe Tło" class="background-image">

<!-- Sekcja Kontakt -->
<section class="contact-section">
    <div class="contact-container">
        <h1 class="section-title">Skontaktuj się ze mną</h1>
        <p class="lead">Czekam na Twoją wiadomość!</p>

        <!-- Telefon -->
        <div class="contact-item">
            <i class="fas fa-phone-alt contact-icon"></i>
            <p class="contact-text">Zadzwoń do mnie:</p>
            <p class="contact-detail"><a href="tel:+48721246658" class="contact-link">+48 721 246 658</a></p>
        </div>

        <!-- Social Media -->
        <div class="contact-social">
            <p class="social-text">Skontaktuj się ze mną na:</p>
            <div class="social-icons">
                <a href="https://www.instagram.com/anetafotografiaczkalska?igsh=N3FpeWxjcnZrb2Uw" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100063469453036" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</section>
<?php
    get_footer();
?>