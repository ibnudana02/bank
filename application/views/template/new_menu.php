<div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
<div id="mainMenu">
    <div class="container">
        <nav>
            <ul>
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li class="dropdown"><a href="#">Tentang Kami</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url('profil') ?>">PROFIL PERUSAHAAN</a></li>
                        <li><a href="<?= base_url('visi_misi') ?>">VISI & MISI</a></li>
                        <li><a href="<?= base_url('manajemen') ?>">BOARD MANAJEMEN</a></li>
                        <li><a href="<?= base_url('struktur') ?>">STRUKTUR ORGANISASI</a></li>
                        <li><a href="<?= base_url('awards') ?>">PENGHARGAAN</a></li>
                        <li><a href="<?= base_url('location') ?>">LOKASI KANTOR</a></li>
                    </ul>
                </li>
                <li class="dropdown mega-menu-item"><a href="#">Produk dan Layanan</a>
                    <ul class="dropdown-menu">
                        <li class="mega-menu-content">
                            <div class="row">
                                <div class="col-lg-3">
                                    <ul>
                                        <li><a href="<?= base_url('layanan') ?>" class="mega-menu-title">Layanan</a></li>
                                        <?php foreach ($layanan as $value) : ?>
                                            <li><a href="<?= base_url('produk/' . strtolower($value->slug)) ?>"><?= strtoupper(strtolower($value->produk)) ?><span class="badge badge-danger">HOT</span></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul>
                                        <li><a href="<?= base_url('tabungan') ?>" class="mega-menu-title">Tabungan</a></li>
                                        <?php foreach ($tabungan as $key => $value) : ?>
                                            <li><a href="<?= base_url('produk/' . $value->slug) ?>"><?= strtoupper($value->produk) ?><span class="badge badge-info">INFO</span></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul>
                                        <li class="mega-menu-title">Deposito</li>
                                        <?php foreach ($deposito as $value) : ?>
                                            <li><a href="<?= base_url('produk/' . $value->slug) ?>"><?= strtoupper($value->produk) ?><span class="badge badge-info">INFO</span></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul>
                                        <li class="mega-menu-title">Kredit</li>
                                        <?php foreach ($kredit as $value) : ?>
                                            <li><a href="<?= base_url('produk/' . $value->slug)  ?>"><?= strtoupper($value->produk) ?><span class="badge badge-info">INFO</span></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">News</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url('berita') ?>">BERITA</a></li>
                        <li><a href="<?= base_url('publikasi') ?>">LAPORAN PUBLIKASI</a></li>
                        <li><a href="<?= base_url('gcg') ?>">GCG REPORT</a></li>
                        <li><a href="<?= base_url('pengkinian-data') ?>">Pengkinian Data</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url('contact') ?>">Hubungi Kami</a></li>
            </ul>
        </nav>
    </div>
</div>