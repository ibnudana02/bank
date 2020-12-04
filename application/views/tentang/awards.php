<!-- <div class="about-area struktur">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Penghargaan</h2>
        </div>
        <hr>
        <div class="row">
            <div class="project-content">
                <?php foreach ($data as $row) : ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#">
                                    <img src="<?= base_url('upload/awards/' . $row->gambar) ?>" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <a class="venobox" data-gall="myGallery" href="<?= base_url('upload/awards/' . $row->gambar) ?>">
                                        <i class="port-icon icon icon-picture"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-dec">
                                <h4><?= $row->nama; ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div> -->

<section id="page-content">
    <div class="container">
        <div class="heading-text heading-section text-center">
            <?php $title = explode('|', $judul) ?>
            <h2><?= $title[0] ?></h2>
        </div>
        <hr>
        <div class="grid-layout grid-3-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
            <?php foreach ($data as $row) : ?>
                <div class="grid-item">
                    <a class="image-hover-zoom" href="<?= base_url('upload/awards/' . $row->gambar) ?>" data-lightbox="gallery-image"><img src="<?= base_url('upload/awards/' . $row->gambar) ?>"></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>