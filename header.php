<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 */
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotograf Ślubny - Aneta Czkalska</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Pasek nawigacyjny -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white navbar-sticky">
        <div class="container">
            <a class="navbar-brand" href="<?= get_permalink(36); ?>">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= home_url(); ?>">Strona Główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= get_permalink(94); ?>">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= get_permalink(59); ?>">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= get_permalink(49); ?>">Oferta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>