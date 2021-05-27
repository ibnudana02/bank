<section id="page-content">
    <?php
    $judul1 = explode('|', $judul);
    $crumb = $judul1[0];
    ?>
    <div class="container">
        <div class="heading-text heading-line text-center">
            <h4><?= $crumb ?></h4>
        </div>
        <div class="carousel dots-inside dots-dark arrows-visible arrows-dark" data-items="3" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="500">
            <?php foreach ($berita as $key => $value) : ?>
                <div class="col-md post-item border ">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="<?= base_url('berita/' . $value->slug) ?>">
                                <img alt="" src="<?= base_url('upload/berita/' . $value->gambar) ?>">
                            </a>
                            <span class="post-meta-category"><a href="#"><?= $value->kategori ?></a></span>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo date('d F Y', strtotime($value->publis)) ?></span>
                            <h2 style="height: 80px;"><a href="<?= base_url('berita/' . $value->slug) ?>"><?= ucwords($value->judul) ?>
                                </a></h2>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="seperator"><i class="fa fa-chevron-down"></i></div>
    </div>
</section>