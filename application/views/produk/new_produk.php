<link rel="stylesheet" href="<?= base_url('assets/new/css') ?>/owl.carousel.min.css">
<link rel="stylesheet" href="<?= base_url('assets/new/css') ?>/owl.theme.default.css">
<section id="page-content" class="m-t-20">
    <div class="container">
        <div class="heading-text heading-line text-center">
            <h4><?= $crumb ?></h4>
        </div>
        <div class="carousel dots-inside dots-dark arrows-visible arrows-dark" data-items="2" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="500">
            <?php foreach ($data as $row) : ?>
                <div class="portfolio-item text-bottom img-zoom-out">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="<?= base_url('produk/' . $row->slug) ?>"><img src="<?= base_url('upload/produk/' . $row->image) ?>" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a href="<?= base_url('produk/' . $row->slug) ?>">
                                <h3><?= $row->produk ?></h3>
                                <span><?= $row->jenis ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="seperator"><i class="fa fa-chevron-down"></i></div>
    </div>
</section>