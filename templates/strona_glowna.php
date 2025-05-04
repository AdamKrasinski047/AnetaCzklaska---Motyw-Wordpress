<?php
    // Template Name: Strona główna

    get_header();
    $gallery = get_field("sekcja_1_galeria");   
?>    

<section class="hero">
 <div class="slideshow-container">
 <?php $photoIterator = 1; ?>
    <?php foreach($gallery as $photoArray): ?> 
        <div class="slide fade" style="background-image: url('<?= esc_url($photoArray['url']); ?>');"></div>     
        <?php $photoIterator++; ?>
    <?php endforeach; ?>
</div>
        <div class="container text-center text-white hero-content">
            <div class="hero-text-container">
                <h2>Witaj, z tej strony Aneta Czkalska</h2>
                <h1>Fotografka, dla której każda chwila ma znaczenie</h1>
                <p class="lead">Tworzę niezapomniane wspomnienia poprzez obiektyw mojego aparatu.</p>
                <div class="hero-buttons">
                    <a href="<?= get_permalink(94); ?>" class="btn btn-light mr-3">Moja Praca</a>
                    <a href="<?= get_permalink(59); ?>" class="btn btn-outline-light">Kontakt</a>
                </div>
            </div>
        </div>
</section>

<!-- Sekcja O Fotografce -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="<?= get_stylesheet_directory_uri() ?>/images/photo1.jpg" alt="Aneta Czkalska" class="about-photo">
            </div>
            <div class="col-md-6 about-text">
                <h2>O Mnie</h2>
                <p>Cześć! Mam na imię Aneta, jestem pasjonatką fotografii z wieloletnim doświadczeniem w uwiecznianiu chwil, które mają znaczenie.<br><br>
                Specjalizuję się w fotografii ślubnej, portretowej oraz okolicznościowej. Praca to nie tylko robienie zdjęć, ale przede wszystkim uchwycenie emocji i opowiadanie historii.</p>
                <strong>Fotograf Aneta Czkalska</strong>
                <div class="social-icons mt-4">
                    <a href="https://www.instagram.com/anetafotografiaczkalska?igsh=N3FpeWxjcnZrb2Uw" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100063469453036" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sekcja Opinie -->
<section class="opinie-section">
    <div class="container text-center">
        <h2>Opinie naszych klientów</h2>
        <p class="subtitle">Zobacz, co nasi klienci mówią o naszej pracy</p>
        <div class="opinie-grid">
            <div class="opinia-card">
                <div class="opinia-header">
                    <div class="facebook-icon facebook-icon-round">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <strong>Edyta Loritz</strong>
                </div>
                <p class="opinia-text">"Polecamy super zdjęcia 😁 wesoło z humorem, na pewno jeszcze wrócimy do Anety."</p>
            </div>
            <div class="opinia-card">
                <div class="opinia-header">
                    <div class="facebook-icon facebook-icon-round">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <strong>Izabela Ofmańska</strong>
                </div>
                <p class="opinia-text">"Jak zawsze super atmosfera i przede wszystkim cudowne zdjęcia 🥰."</p>
            </div>
            <div class="opinia-card">
                <div class="opinia-header">
                    <div class="facebook-icon facebook-icon-round">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <strong>Klaudia Skalska</strong>
                </div>
                <p class="opinia-text">"Polecam z całego serca ❤️❤️."</p>
            </div>
            <div class="opinia-card">
                <div class="opinia-header">
                    <div class="facebook-icon facebook-icon-round">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <strong>Marta Kaszczyńska</strong>
                </div>
                <p class="opinia-text">"Polecam z całego serca: zdjęcia śliczne, prawdziwe i pełne emocji! Atmosfera na sesji jest nad wyraz ciepła i luźna."</p>
            </div>
            <div class="opinia-card">
                <div class="opinia-header">
                    <div class="facebook-icon facebook-icon-round">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <strong>Justyna Sobczak</strong>
                </div>
                <p class="opinia-text">"Super atmosfera, piękne zdjęcia! Polecam 😍."</p>
            </div>
            <div class="opinia-card">
                <div class="opinia-header">
                    <div class="facebook-icon facebook-icon-round">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <strong>Natalia Woźniak</strong>
                </div>
                <p class="opinia-text">"Z czystym sumieniem polecam, fajna atmosfera, profesjonalne zdjęcia! Jestem bardzo zadowolona 👍😄."</p>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>