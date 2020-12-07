<div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
<div id="mainMenu">
    <div class="container">
        <nav>
            <ul>
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li class="dropdown"><a href="#">Tentang Kami</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url('profil') ?>">Profil Perusahaan</a></li>
                        <li><a href="<?= base_url('visi_misi') ?>">Visi dan Misi</a></li>
                        <li><a href="<?= base_url('manajemen') ?>">Board Manajemen</a></li>
                        <li><a href="<?= base_url('struktur') ?>">Struktur Organisasi</a></li>
                        <li><a href="<?= base_url('awards') ?>">Penghargaan</a></li>
                        <li><a href="<?= base_url('location') ?>">Lokasi Kantor</a></li>
                    </ul>
                </li>
                <li class="dropdown mega-menu-item"><a href="#">Produk dan Layanan</a>
                    <ul class="dropdown-menu">
                        <li class="mega-menu-content">
                            <div class="row">
                                <div class="col-lg-3">
                                    <ul>
                                        <li class="mega-menu-title">Layanan</li>
                                        <?php foreach ($layanan as $value) : ?>
                                            <li><a href="<?= base_url('produk/' . strtolower($value->slug)) ?>"><?= ucwords(strtolower($value->produk)) ?><span class="badge badge-danger">HOT</span></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul>
                                        <li class="mega-menu-title">Tabungan</li>
                                        <?php foreach ($tabungan as $key => $value) : ?>
                                            <li><a href="<?= base_url('produk/' . $value->slug) ?>"><?= ucwords($value->produk) ?><span class="badge badge-info">INFO</span></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul>
                                        <li class="mega-menu-title">Deposito</li>
                                        <?php foreach ($deposito as $value) : ?>
                                            <li><a href="<?= base_url('produk/' . $value->slug) ?>"><?= ucwords($value->produk) ?><span class="badge badge-info">INFO</span></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul>
                                        <li class="mega-menu-title">Kredit</li>
                                        <?php foreach ($kredit as $value) : ?>
                                            <li><a href="<?= base_url('produk/' . $value->slug)  ?>"><?= ucwords($value->produk) ?><span class="badge badge-info">INFO</span></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">News</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Berita</a></li>
                        <li><a href="#">Laporan Keuangan</a></li>
                        <li><a href="#">GCG Report</a></li>
                        <li><a href="#">Pengkinian Data</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url('contact') ?>">Hubungi Kami</a></li>
            </ul>
        </nav>
    </div>
</div>