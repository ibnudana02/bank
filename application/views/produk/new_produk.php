<link rel="stylesheet" href="<?= base_url('assets/new/css') ?>/owl.carousel.min.css">
<link rel="stylesheet" href="<?= base_url('assets/new/css') ?>/owl.theme.default.css">
<section id="page-content" class="m-t-30">
    <div class="container">
        <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="0">
            <?php foreach ($data as $row) : ?>
                <div class="portfolio-item img-zoom ">
                    <div class="portfolio-item-wrap owl">
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

<script src="<?= base_url('assets/new/js/') ?>jquery.js"></script>
<script src="<?= base_url('assets/new/js/') ?>owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".owl").owlCarousel();
    });
</script>