<section id="page-content">
    <div class="container">
        <div class="heading-text heading-section text-center" data-animate="rubberBand">
            <?php $title = explode('|', $judul) ?>
            <h2><?= $title[0] ?></h2>
        </div>
        <br>
        <div class="row team-members m-b-40">
            <?php foreach ($pegawai as $key => $value) : ?>
                <div class="col-lg-3">
                    <div class="team-member" data-animate="fadeInLeft">
                        <div class="team-image">
                            <img src="<?= base_url('upload/pegawai/' . $value->foto) ?>">
                        </div>
                        <div class="team-desc">
                            <h3><?= $value->nama ?></h3>
                            <span><?= $value->jabatan ?></span>
                            <br>
                            <div class="align-center">
                                <a class="btn btn-sm btn-slide btn-light" href="https://www.facebook.com/<?= $value->fb ?>">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a class="btn btn-sm btn-slide btn-light" href="https://www.instagram.com/<?= $value->ig ?>" data-width="118">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="seperator"><i class="fa fa-chevron-down"></i></div>
</section>