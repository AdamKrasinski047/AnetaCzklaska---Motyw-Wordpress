<?php
    // Template Name: Oferta
    get_header();
?>    

 <!-- Sekcja Oferty -->
<section class="oferta">
    <div class="container">
        <h1 class="text-center">Oferta</h1>
        <p class="lead text-center">Zapraszam do zapoznania się z moją ofertą usług fotograficznych.</p>

        <div class="articles">
            <!-- Ślub -->
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="<?= get_stylesheet_directory_uri() ?>/images/slub.jpg" alt="Zdjęcie ślubu">
                    </figure>
                    <div class="article-body">
                        <h2>📌 Ślub</h2>
                        <ul>
                            <li>Kościelny</li>
                            <li>Cywilny</li>
                            <li>Plenerowy</li>
                        </ul>
                    </div>
                </div>
            </article>

            <!-- Wesele -->
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="<?= get_stylesheet_directory_uri() ?>/images/wesele.jpg" alt="Zdjęcie wesela">
                    </figure>
                    <div class="article-body">
                        <h2>📌 Wesele</h2>
                        <p>Utrwalam najpiękniejsze chwile podczas Waszego wesela.</p>
                    </div>
                </div>
            </article>

            <!-- Urodziny -->
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="<?= get_stylesheet_directory_uri() ?>/images/urodziny.jpg" alt="Zdjęcie urodzin">
                    </figure>
                    <div class="article-body">
                        <h2>📌 Urodziny</h2>
                        <p>Sesje urodzinowe pełne uśmiechu i radości.</p>
                    </div>
                </div>
            </article>

            <!-- Lifestyle -->
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="<?= get_stylesheet_directory_uri() ?>/images/lifestyle.jpg" alt="Zdjęcie lifestyle">
                    </figure>
                    <div class="article-body">
                        <h2>📌 Sesje lifestyle</h2>
                        <p>Naturalne sesje w Twoim domu, oddające codzienny klimat.</p>
                    </div>
                </div>
            </article>
            
            <!-- Sesje zdjęciowe -->
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="<?= get_stylesheet_directory_uri() ?>/images/plener.jpg" alt="Zdjęcie sesji plenerowej">
                    </figure>
                    <div class="article-body">
                        <h2>📌 Sesje zdjęciowe w plenerze</h2>
                        <ul>
                            <li>Osobiste</li>
                            <li>Rodzinne</li>
                            <li>Ciążowe</li>
                            <li>Par</li>
                            <li>Dzieci</li>
                            <li>Kobiece</li>
                            <li>Miejskie</li>
                            <li>Ślubne</li>
                            <li>Wizerunkowe</li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<?php
    get_footer();
?>