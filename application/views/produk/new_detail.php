<section id="page-content" class="sidebar-right m-t-30">
    <div class="container-fluid">
        <div class="row">
            <?php $this->load->view('produk/accordion') ?>
            <div class="content col-lg-9">
                <div id="blog" class="single-post">
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image" data-animate="bounce">
                                <a href="#">
                                    <img alt="" src="<?= base_url('upload/produk/' . $row->image); ?>">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2><?= ucwords($row->produk); ?></h2>
                                <div class="post-meta">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo date('M d, Y', strtotime($row->publis)) ?></span>
                                    <span class="post-meta-category"><a href="#"><i class="fa fa-tag"></i><?= $row->jenis ?></a></span>
                                    <div class="post-meta-share">
                                        <a class="btn btn-xs btn-slide btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url(); ?>" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-twitter" href="https://twitter.com/intent/tweet?url=<?= urlencode(current_url()) ?>" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-whatsapp" href="whatsapp://send?text=<?= current_url() ?>" target="_blank">
                                            <i class="fab fa-whatsapp"></i>
                                            <span>Whatsapp</span>
                                        </a>
                                    </div>
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
                                <a href="<?= base_url($row->link . '/' . $row->id_produk) ?>" id="btn-open" class="btn"><i class="icon-send"></i> &nbsp; <?= $buka ?> </a>
                                <!-- <a href="</?= base_url($row->link) ?>" id="btn-open" class="btn"><i class="icon-send"></i> &nbsp; <?= $buka ?> </a> -->
                            </div>
                            <div class="seperator"><i class="fa fa-chevron-down"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?= base_url('assets/new/') ?>js/jquery.js"></script>
<script>
    $(document).ready(function() {
        var buka = "<?php echo $row->jenis; ?>";
        console.log(buka);
        if (buka != 'Layanan') {
            $("#btn-open").show();
        } else {
            $("#btn-open").hide();
        }

    });
</script>