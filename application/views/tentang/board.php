<!-- Team area start -->
<div class="about-area struktur">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Board Manajemen</h2>
        </div>
        <hr>
        <div class="row">
            <?php foreach ($pegawai as $key => $value) : ?>
                <div class="team-member">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="<?= base_url('upload/pegawai/' . $value->foto) ?>" alt="">
                                </a>
                            </div>
                            <div class="team-content">
                                <h4><a href="#"><?= $value->nama ?></a></h4>
                                <p><?= $value->jabatan ?></p>
                                <ul class="team-hover">
                                    <li><a href="https://www.facebook.com/<?= $value->fb ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/<?= $value->ig ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- team area end -->