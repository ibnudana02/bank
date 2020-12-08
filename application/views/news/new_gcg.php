<section>
    <div class="container">
        <div class="heading-text heading-line text-center" data-animate="rubberBand">
            <?php $title = explode('|', $judul) ?>
            <h4><?= $title[0] ?></h4>
            <!-- <h4>Hover Links & Desc</h4> -->
        </div>
        <hr class="space">
        <div class="portfolio-3-columns">
            <?php foreach ($data as $key => $value) : ?>
                <div class="portfolio-item overlay-links" data-animate="zoomIn">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <img src="<?= base_url('assets/new/images/about/kantor.jpg') ?>" alt="">
                            <div class="portfolio-links">
                                <a href="<?= base_url('unduh-gcg/' . $value->id_laporan) ?>"><i class="icon-link"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h5><?= ucwords($value->laporan) ?></h5>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>