<?php
    // Template Name: Portfolio

    get_header();
    
    $gallery = get_field("galeria");   
?>    
    <!-- Galeria -->
    <section class="gallery-section">
        <div class="container py-4">
            <div class="row"> 
                <?php $photoIterator = 1; ?>
                <?php foreach($gallery as $photoArray): ?>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            <img src="<?= $photoArray["url"];  ?>" alt="Zdjęcie <?= $photoIterator; ?>" class="card-img-top" data-toggle="modal" data-target="#modal<?= $photoIterator; ?>">
                        </div>
                    </div>
                    <?php $photoIterator++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Modale -->
    <?php $modalIterator = 1; ?>
    <?php foreach($gallery as $photoArray): ?>
        <div class="modal fade" id="modal<?= $modalIterator; ?>" tabindex="-1" role="dialog" aria-labelledby="modal<?= $modalIterator; ?>Label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="<?= $photoArray["url"]; ?>" alt="Zdjęcie <?= $modalIterator; ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <?php $modalIterator++; ?>
    <?php endforeach; ?>
<?php
    get_footer();
?>