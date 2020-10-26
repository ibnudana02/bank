<!--Blog Area Start-->
<div class="blog-page-area struktur">
    <div class="container">
        <div class="row">
            <div class="blog-details">
                <!-- Start single blog -->
                <div class="col-md col-sm col-xs-12">
                    <!-- single-blog start -->
                    <article class="blog-post-wrapper" style="margin-top: 35px;">
                        <h3 class="text-center"><?= ucwords($row->produk); ?></h3>
                        <div class="blog-banner">
                            <a class="blog-images">
                                <img src="<?= base_url('upload/produk/' . $row->image); ?>" width="1100" height="450">
                            </a>
                            <div class="blog-content bor text-justify">
                                <div class="blog-category" style="padding-top: 20px;">
                                </div>
                                <?php echo $row->deskripsi; ?>
                                <?php if ($row->jenis == 'Tabungan') {
                                    $buka = 'Buka Tabungan';
                                } elseif ($row->jenis == 'Kredit') {
                                    $buka = 'Ajukan Kredit';
                                } elseif ($row->jenis == 'Deposito') {
                                    $buka = 'Buka Deposito';
                                } else {
                                    $buka = '';
                                }
                                ?>
                                <a href="<?= base_url($row->link) ?>" class="btn btn-info btn btn-outline-success"><?= $buka; ?></a>
                            </div>
                        </div>
                    </article>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- <?//php $this->load->view('template/sidebar_produk'); ?> -->
        </div>
    </div>
</div>
<!--End of Blog Area-->