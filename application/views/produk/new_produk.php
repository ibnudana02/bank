<section id="page-content">
    <div class="container">
        <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="0">
            <?php foreach ($data as $row) : ?>
                <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="<?= base_url('upload/produk/' . $row->image); ?>" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a href="<?= base_url('produk/' . $row->slug); ?>">
                                <h3><?= $row->produk; ?></h3>
                                <span><?= $row->jenis ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="seperator"><i class="fa fa-chevron-down"></i></div>
</section>