<head>
    <meta property="og:url" content="<?= current_url() ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Pengkinian Data" />
    <meta property="og:description" content="Pengkinian Data Nasabah Bank Unisritama" />
    <meta property="og:image" content="<?= base_url('upload/b6.jpg'); ?>" />
</head>
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <div class="content col-lg-9">
                <div id="blog" class="single-post">
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image" data-animate="zoomIn">
                                <a href="#">
                                    <img alt="" src="<?= base_url('upload/b6.jpg'); ?>">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2>Pengkinian Data</h2>
                                <div class="post-meta">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jul 12, 2020</span>
                                    <span class="post-meta-category"><a href="#"><i class="fa fa-tag"></i>Informasi</a></span>
                                    <div class="post-meta-share">
                                        <a class="btn btn-xs btn-slide btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url(); ?>" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-twitter" href="https://twitter.com/intent/tweet?url=<?= urlencode(current_url()) ?>" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-whatsapp" href="whatsapp://send?text=<?= current_url() ?>" target="_blank">
                                            <i class="fab fa-whatsapp"></i>
                                            <span>Whatsapp</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-category">
                                        <span>INFORMASI LAYANAN NASABAH</span>
                                    </div>
                                    <h3>PENGKINIAN DATA</h3>
                                    <p class="text-justify visi">
                                        Nasabah Bank Unisritama yang terhormat, Perkenankan kami untuk menyampaikan terima kasih atas kepercayaan dan kerjasama Anda selama ini. Terkait dengan Peraturan Otoritas Jasa Keuangan mengenai Penerapan Program Anti Pencucian Uang dan Pencegahan Pendanaan Terorisme di Sektor Jasa Keuangan, dengan ini kami harapkan kerjasamanya untuk menyampaikan setiap perubahan data/informasi yang pernah disampaikan kepada kami disertai dengan dokumen pendukung.
                                    </p>
                                    <p class="text-justify visi">
                                        Perlu kami informasikan bahwa sesuai dengan peraturan dimaksud, bank wajib menolak transaksi, membatalkan transaksi dan/atau menutup hubungan usaha, apabila :
                                        <ul class="marker-list">
                                            <li>Nasabah tidak memenuhi permintaan informasi dan dokumen pendukung;</li>
                                            <li>Diketahui dan/atau patut diduga menggunakan dokumen palsu;</li>
                                            <li>Menyampaikan informasi yang diragukan kebenarannya;</li>
                                            <li>Berbentuk shell bank atau bank yang mengizinkan rekeningnya digunakan oleh shell bank; </li>
                                            <li>Memiliki aktivitas transaksi yang berkaitan dengan tindak pidana pencucian uang dan pendanaan terorisme; dan </li>
                                            <li>Memiliki sumber dana transaksi yang diketahui dan/atau patut diduga berasal dari tindak pidana. </li>
                                        </ul>
                                    </p>
                                    <p class="text-justify visi">
                                        Formulir pengkinian data dapat Anda peroleh di kantor Bank Unisritama terdekat atau dengan mengunduh formulir dibawah ini: <br>

                                        <ul class="marker-list">
                                            <li><a href="#">Formulir Perubahan Data Nasabah Perorangan</a></li>
                                            <li><a href="#">Formulir Perubahan Data Nasabah Non-Perorangan</a></li>
                                        </ul>
                                    </p>
                                    <p class="text-justify visi">
                                        Formulir yang sudah dilengkapi mohon diserahkan ke kantor Bank Unisritama terdekat atau dikirim melalui email unisritamabpr@yahoo.co.id <br>
                                        Untuk informasi lebih lanjut, dapat menghubungi Customer Service kami di Telepon: 0761-63381
                                    </p>
                                    <p class="text-justify visi">
                                        Demikian yang dapat kami sampaikan. Atas perhatian dan kerjasamanya, kami ucapkan terima kasih. <br>
                                        Hormat kami,<br>
                                        <br><strong>PT. BPR Unisritama</strong>
                                    </p>
                                    <hr>
                                </div>
                            </div>
                            <div class="seperator"><i class="fa fa-chevron-down"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar sticky-sidebar col-lg-3">
                <div class="widget widget-newsletter">
                    <form id="widget-search-form-sidebar" action="#" method="get">
                        <div class="input-group">
                            <input type="text" aria-required="true" name="q" class="form-control widget-search-form" placeholder="Search for pages...">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="widget">
                    <div class="tabs">
                        <ul class="nav nav-tabs nav-justified" id="tabs-posts" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent Berita</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tabs-posts-content">
                            <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                                <div class="post-thumbnail-list">
                                    <?php foreach ($berita as $value) : ?>
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="<?= base_url('upload/berita/' . $value->image) ?>">
                                            <div class="post-thumbnail-content">
                                                <a href="<?= base_url('berita/' . $value->slug)  ?>"><?= ucwords($value->judul) ?></a>
                                                <span class="post-date"><i class="icon-calendar"></i> <?php echo date('D, d M Y', strtotime($value->created_on)) ?></span>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>