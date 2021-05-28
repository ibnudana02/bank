<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">
    <div class="slide kenburns" style="background-image:url('<?= base_url('assets/new/images/about/kantor.jpg') ?>');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">
                <span class="strong">Bank Unisritama</span>
                <h1>About our company</h1>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="heading-text heading-section wow animate__fadeInLeft">
                    <h2>PT. BPR Unisritama</h2>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6 text-justify wow animate__fadeInLeft" data-wow-delay="0.3s">Dibentuk pada tanggal 6 Februari 1991 dengan memakai nama PT. Bank Perkreditan Rakyat Unisri. Tak lama setelah terbentuk PT. BPR Unisri kembali merubah nama perseroan menjadi PT. Bank Perkreditan Rakyat Unisritama pada tanggal 1 April 1991 yang kemudian dipakai hingga saat ini. Bank Unisritama memiliki makna yang berarti "Bank Universitas Islam Riau Pertama" berdasarkan waktu pendiriannya. </div>
                    <div class="col-lg-6 text-justify wow animate__fadeInLeft" data-wow-delay="0.6s">Pemegang saham Perseroan adalah Yayasan Lembaga Pendidikan Islam Riau (YLPI Riau) dengan jumlah saham 85,62%, bersama dengan Bapak H. Imam Ghazali, SH, MH dengan jumlah saham 14,38% yang juga merupakan salah satu putra dari pendiri PT. BPR Unisritama. </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-3">
    <div class="container">
        <div class="heading-text heading-section text-center wow animate__fadeInDown">
            <h2>PEMEGANG SAHAM</h2>
        </div>
        <div class="row team-members team-members-shadow">
            <div class="col-lg-3"></div>
            <?php foreach ($psp as $key => $value) : ?>
                <div class="col-lg-3">
                    <div class="team-member wow animate__fadeInLeft" data-wow-delay="0.5s">
                        <div class="team-image">
                            <img src="<?= base_url('assets/') ?>img/client/YLPI.jpg">
                        </div>
                        <div class="team-desc">
                            <h3><?= $value->shm_nama ?></h3>
                            <span><?= $value->shm_ket ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- <div class="col-lg-3">
                <div class="team-member wow animate__fadeInLeft" data-wow-delay="1s">
                    <div class="team-image">
                        <img src="<?= base_url('assets/new/images/team/9.jpg') ?>">
                    </div>
                    <div class="team-desc">
                        <h3>H. IMAM GHAZALI, SH, MH</h3>
                        <span>DOSEN</span>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>