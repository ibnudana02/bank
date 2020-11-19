<div id="sticker" class="header-area hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="logo">
                    <a class="navbar-brand page-scroll sticky-logo" href="<?= base_url() ?>">
                        <img src="<?php echo base_url('assets/'); ?>img/logo/unisri-logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-sm-9">
                <nav class="navbar navbar-default">
                    <div class="collapse navbar-collapse" id="navbar-example">
                        <div class="main-menu">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="pagess" href="<?= base_url() ?>">Home</a></li>
                                <li><a class="pagess">Tentang Kami</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= base_url('profil') ?>">Profil Perusahaan</a></li>
                                        <li><a href="<?= base_url('visi_misi') ?>">Visi dan Misi</a></li>
                                        <li><a href="<?= base_url('manajemen') ?>">Board Manajemen</a></li>
                                        <li><a href="<?= base_url('struktur') ?>">Struktur Organisasi</a></li>
                                        <li><a href="<?= base_url('awards') ?>">Penghargaan</a></li>
                                        <li><a href="<?= base_url('location') ?>">Lokasi Kantor</a></li>
                                    </ul>
                                </li>
                                <li><a class="pagess">Produk dan Layanan</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= base_url('pembayaran_mahasiswa_uir') ?>">Pembayaran Mahasiswa</a></li>
                                        <li><a href="<?= base_url('payment-point') ?>">Payment Point Online Bank</a></li>
                                        <li class="dropdown"><a class="dropbtn" href="<?= base_url('deposito') ?>">Deposito</a>
                                            <div class="dropdown-content">
                                                <?php foreach ($deposito as $key => $value) : ?>
                                                    <a href="<?= base_url('produk/' . $value->slug) ?>"><?= $value->produk ?></a>
                                                <?php endforeach; ?>
                                            </div>
                                        </li>
                                        <li class="dropdown"><a class="dropbtn" href="<?= base_url('tabungan') ?>">Tabungan</a>
                                            <div class="dropdown-content">
                                                <?php foreach ($tabungan as $key => $value) : ?>
                                                    <a href="<?= base_url('produk/' . $value->slug) ?>"><?= $value->produk ?></a>
                                                <?php endforeach; ?>
                                            </div>
                                        </li>
                                        <li class="dropdown"><a class="dropbtn" href="<?= base_url('kredit') ?>">Kredit</a>
                                            <div class="dropdown-content">
                                                <?php foreach ($kredit as $key => $value) : ?>
                                                    <a href="<?= base_url('produk/' . $value->slug) ?>"><?= $value->produk ?></a>
                                                <?php endforeach; ?>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="pagess">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= base_url('berita') ?>">Berita</a></li>
                                        <li><a href="<?= base_url('publikasi') ?>">Laporan Keuangan</a></li>
                                        <li><a href="<?= base_url('gcg') ?>">GCG Report</a></li>
                                        <li><a href="<?= base_url('pengkinian_nasabah') ?>">Pengkinian Data Nasabah</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('contact') ?>">Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <div class="logo">
                        <a href=""><img src="<?php echo base_url('assets/'); ?>img/logo/unisri-logo.png" alt="" /></a>
                    </div>
                    <nav id="dropdown">
                        <ul>
                            <li><a class="pagess" href="<?= base_url() ?>">Home</a></li>
                            <li><a class="pagess">Tentang Kami</a>
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url('profil') ?>">Profil Perusahaan</a></li>
                                    <li><a href="<?= base_url('visi_misi') ?>">Visi dan Misi</a></li>
                                    <li><a href="<?= base_url('manajemen') ?>">Board Manajemen</a></li>
                                    <li><a href="<?= base_url('struktur') ?>">Struktur Organisasi</a></li>
                                    <li><a href="<?= base_url('awards') ?>">Penghargaan</a></li>
                                    <li><a href="<?= base_url('location') ?>">Lokasi Kantor</a></li>
                                </ul>
                            </li>
                            <li><a class="pagess">Produk dan Layanan</a>
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url('pembayaran_mahasiswa_uir') ?>">Pembayaran Mahasiswa</a></li>
                                    <li><a href="<?= base_url('payment-point') ?>">Payment Point Online Bank</a></li>
                                    <li class="dropdown"><a class="dropbtn" href="<?= base_url('deposito') ?>">Deposito</a>
                                        <div class="dropdown-content">
                                            <?php foreach ($deposito as $key => $value) : ?>
                                                <a href="<?= base_url('produk/' . $value->slug) ?>"><?= $value->produk ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </li>
                                    <li class="dropdown"><a class="dropbtn" href="<?= base_url('tabungan') ?>">Tabungan</a>
                                        <div class="dropdown-content">
                                            <?php foreach ($tabungan as $key => $value) : ?>
                                                <a href="<?= base_url('produk/' . $value->slug) ?>"><?= $value->produk ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </li>
                                    <li class="dropdown"><a class="dropbtn" href="<?= base_url('kredit') ?>">Kredit</a>
                                        <div class="dropdown-content">
                                            <?php foreach ($kredit as $key => $value) : ?>
                                                <a href="<?= base_url('produk/' . $value->slug) ?>"><?= $value->produk ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="pagess">News</a>
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url('berita') ?>">Berita</a></li>
                                    <li><a href="<?= base_url('publikasi') ?>">Laporan Keuangan</a></li>
                                    <li><a href="<?= base_url('gcg') ?>">GCG Report</a></li>
                                    <li><a href="<?= base_url('pengkinian_nasabah') ?>">Pengkinian Data Nasabah</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('contact') ?>">Hubungi Kami</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>