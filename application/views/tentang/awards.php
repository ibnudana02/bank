<section id="page-content">
    <div class="container">
        <div class="heading-text heading-section text-center" data-animate="zoomIn">
            <?php $title = explode('|', $judul) ?>
            <h2><?= $title[0] ?></h2>
        </div>
        <hr>
        <div class="grid-layout grid-3-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
            <?php foreach ($data as $row) : ?>
                <div class="grid-item" data-animate="swing">
                    <a class="image-hover-zoom" href="<?= base_url('upload/awards/' . $row->gambar) ?>" data-lightbox="gallery-image"><img src="<?= base_url('upload/awards/' . $row->gambar) ?>"></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>