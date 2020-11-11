<div class="project-area-2">
    <div class="container">
        <div class="row">
            <h3 class="text-center" style="margin-top: 5px;">Produk <?= $crumb ?></h3>
        </div>
        <div class="row">
            <div class="project-content">
                <?php foreach ($data as $row) : ?>
                    <div class="col-md-6 col-sm-6 col-xs-12 produk">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a>
                                    <img src="<?= base_url('upload/produk/' . $row->image); ?>" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <a href="<?= base_url('produk/' . $row->slug); ?>">
                                        <i class="port-icon icon icon-picture"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-dec">
                                <h4><?= $row->produk; ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>