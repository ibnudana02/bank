<section id="page-content" class="p-b-0 p-t-60">
    <div class="container">
        <div class="heading-text heading-section text-center wow animate__fadeInDown" data-wow-duration="2s">
            <h4>Produk & Layanan</h4>
        </div>
        <div class="row">
            <div class="col-lg p-b-20 wow fadeInLeft">
                <div class="text-box text-box-light">
                    <a href="<?= base_url('kredit') ?>">
                        <i class="far fa-paper-plane"></i>
                        <h3>Kredit </h3>
                        <p>Solusi kebutuhan modal usaha Anda, kredit kendaraan bermotor, biaya pendidikan dan keperluan mendesak lainnya.</p>
                    </a>
                </div>
                <div class="shape-divider" data-style="4" data-height="220"></div>
            </div>
            <div class="col-lg p-b-20 wow fadeInLeft" data-wow-delay="0.3s">
                <div class="text-box text-box-light">
                    <a href="<?= base_url('tabungan') ?>">
                        <i class="fas fa-chart-pie"></i>
                        <h3>Tabungan </h3>
                        <p>Saving Dana anda dengan Aman sekaligus bisa berinvestasi dengan Suku Bunga bersaing dan Pastinya dijamin LPS.</p>
                    </a>
                </div>
                <div class="shape-divider" data-style="4" data-height="220"></div>
            </div>
            <div class="col-lg p-b-20 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="text-box text-box-light">
                    <a href="<?= base_url('eform') ?>">
                        <i class="fa fa-mobile-alt"></i>
                        <h3>Layanan Digital</h3>
                        <p>Buka rekening tabungan kini bisa melalui aplikasi. Praktis, cepat dan mudah. Jadilah bagian dari transformasi Bank Unisritama.</p>
                    </a>

                </div>
                <div class="shape-divider" data-style="4" data-height="220"></div>
            </div>
        </div>
    </div>
</section>
<section class="p-t-60 background-grey">
    <div class="container-fluid">
        <div class="heading-text heading-section text-center wow animate__fadeInDown" data-wow-duration="2s">
            <h4>Berita Terkini</h4>
        </div>
        <div class="row">
            <div class="content col">
                <div class="carousel wow animate__bounceInUp" data-wow-duration="1s" data-wow-delay="1s" data-items="4">
                    <?php foreach ($berita as $row) : ?>
                        <div class="post-item border ">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="<?= 'berita/' . $row->slug ?>">
                                        <img alt="" src="<?= base_url('upload/berita/' . $row->thumb) ?>"></a>
                                    <span class="post-meta-category"><a href="#"><?= $row->kategori ?></a></span>
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo date('d F Y', strtotime($row->publis)) ?></span>
                                    <h2 style="height: 80px;"><a href="<?= 'berita/' . $row->slug ?>"><?= ucwords($row->judul) ?></a></h2>
                                    <a href="<?= 'berita/' . $row->slug ?>" class="btn">Read More <i class="icon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-t-15 p-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg col-xs">
                <div class="carousel client-logos wow animate__fadeInLeft" data-items="5">
                    <div>
                        <a href="#" target="_blank"><img alt="" src="<?= base_url('assets/') ?>img/client/ayokebank.jpg">
                        </a>
                    </div>
                    <div>
                        <a href="https://uir.ac.id/yayasan" target="_blank"><img alt="" src="<?= base_url('assets/') ?>img/client/YLPI.jpg">
                        </a>
                    </div>
                    <div>
                        <a href="https://perbarindo.org" target="_blank"><img alt="" src="<?= base_url('assets/') ?>img/client/perbarindo.jpg">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.ojk.go.id" target="_blank"><img alt="" src="<?= base_url('assets/') ?>img/client/ojk.jpg">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.lps.go.id" target="_blank"><img alt="" src="<?= base_url('assets/') ?>img/client/lps.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>