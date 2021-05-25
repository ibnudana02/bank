<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion-toggled" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard'); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Bank Unisritama</div>
    </a>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Admin
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>" target="_blank">
            <i class="fas fa-fw fa-external-link-alt"></i>
            <span>Kunjungi Website</span></a>
    </li>
    <?php if ($user['role_id'] == 1) : ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#masterData" aria-expanded="true" aria-controls="masterData">
                <i class="fas fa-fw fa-newspaper"></i>
                <span>Berita</span>
            </a>
            <div id="masterData" class="collapse" aria-labelledby="masterData" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Components</h6>
                    <a class="collapse-item" href="<?= base_url('admin/kategori') ?>">Kategori Berita</a>
                    <a class="collapse-item" href="<?= base_url('admin/berita') ?>">Berita Terbaru</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#masterPegawai" aria-expanded="true" aria-controls="masterData">
                <i class="fas fa-fw fa-users"></i>
                <span>Pegawai</span>
            </a>
            <div id="masterPegawai" class="collapse" aria-labelledby="masterPegawai" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Components</h6>
                    <a class="collapse-item" href="<?= base_url('admin/jabatan') ?>">Jabatan</a>
                    <a class="collapse-item" href="<?= base_url('admin/pegawai') ?>">Pegawai</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#masterInput" aria-expanded="true" aria-controls="masterData">
                <i class="fas fa-fw fa-shopping-bag"></i>
                <span>Produk</span>
            </a>
            <div id="masterInput" class="collapse" aria-labelledby="masterData" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Components</h6>
                    <a class="collapse-item" href="<?= base_url('admin/jenis') ?>">Jenis Produk</a>
                    <a class="collapse-item" href="<?= base_url('admin/produk') ?>">Produk</a>
                    <a class="collapse-item" href="<?= base_url('admin/layanan') ?>">Layanan</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#masterUser" aria-expanded="true" aria-controls="masterData">
                <i class="fas fa-fw fa-user"></i>
                <span>User</span>
            </a>
            <div id="masterUser" class="collapse" aria-labelledby="masterData" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Components</h6>
                    <a class="collapse-item" href="<?= base_url('admin/jenis') ?>">Managemen User</a>
                    <a class="collapse-item" href="<?= base_url('admin/jenis') ?>">Registrasi User</a>
                    <a class="collapse-item" href="<?= base_url('admin/produk') ?>">Profil</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/laporan'); ?>">
                <i class="fas fa-fw fa-file-invoice"></i>
                <span>Laporan Keuangan</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#masterSet" aria-expanded="true" aria-controls="masterData">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Pengaturan Web</span>
            </a>
            <div id="masterSet" class="collapse" aria-labelledby="masterData" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Components</h6>
                    <a class="collapse-item" href="<?= base_url('admin/awards') ?>">Penghargaan</a>
                    <a class="collapse-item" href="<?= base_url('admin/slider') ?>">Slider</a>
                    <a class="collapse-item" href="<?= base_url('admin/sb') ?>">Suku Bunga</a>
                    <a class="collapse-item" href="<?= base_url('admin/corporate') ?>">Tentang Perusahaan</a>
                </div>
            </div>
        </li>
    <?php endif; ?>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('nasabah-tab'); ?>">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>Pendaftaran Nasabah</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>