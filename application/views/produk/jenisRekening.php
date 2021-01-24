<section id="page-content" class="background-grey p-b-0">
    <div class="container-fluid ">
        <?php if ($this->session->flashdata('message')) : ?>
            <div class="row justify-content-center">
                <div class="col-md-10 ">
                    <div role="alert" class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                        <strong><i class="fa fa-check-circle"></i> <?= $this->session->flashdata('message'); ?> </div>
                </div>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('jenisRekening') ?>" method="post">
            <div class="row justify-content-center">
                <div class="content col-md-10">
                    <div class="card">
                        <div class="card-header eform-header">
                            <h4>Jenis Rekening Tabungan</h4>
                        </div>
                        <div class="card-body">
                            <div class="syarat">
                                <?php foreach ($jenis as $data) : ?>
                                    <div class="col-sm pb-3">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="jenis" id="<?= $data->id_produk ?>" value="<?= $data->slug ?>">
                                                <span class="custom-control-label"><?= strtoupper($data->produk); ?></span>
                                                <button id="<?= $data->slug ?>" class="btn btn-sm btn-light float-right" type="button">INFO</button>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <br> -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button id="btnKembali" class="btn btn-danger btnMobile" type="button"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                        </div>
                        <div class="col-md-6">
                            <button id="btnLanjut" class="btn btn-google btnMobile float-right" type="submit" name="input" value="input" disabled>Selanjutnya <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</section>
<script src="<?= base_url('assets/new/') ?>js/jquery.js"></script>
<script>
    $(document).ready(function() {
        var jenis = '';

        function checkRadio(jenis) {
            if (jenis === "tabungan-qurban-warga") {
                $("#5eaa93647a4cb").prop('checked', true);
            }
            if (jenis === "tabungan-sejahtera") {
                $("#5eaa92ba0efa1").prop('checked', true);
            }
            if (jenis === "tabungan-sejahtera-kas") {
                $("#5ee0aba96f640").prop('checked', true);
            }
            if (jenis === "tabungan-simpel") {
                $("#5fb5ff891c02c").prop('checked', true);
            }
            if (jenis === "tabungan-umroh") {
                $("#5eaa93a989a72").prop('checked', true);
            }
            if (jenis === "tabunganku") {
                $("#5e96bb4b21ce7").prop('checked', true);
            }
        }

        if (jenis !== null || jenis !== "") {
            checkRadio(jenis);
        }

        if ($("input[type='radio']").is(':checked')) {
            $('#btnLanjut').prop('disabled', false);
        } else {
            $('#btnLanjut').prop('disabled', true);
        }

        $("input[type='radio']").click(function() {
            if ($(this).is(':checked')) {
                $('#btnLanjut').prop('disabled', false);
            } else {
                $('#btnLanjut').prop('disabled', true);
            }
        });

        $('#tabungan-qurban-warga').click(function() {
            window.open('<?= base_url('produk/tabungan-qurban-warga') ?>', '_blank');
        });
        $('#tabungan-sejahtera').click(function() {
            window.open('<?= base_url('produk/tabungan-sejahtera') ?>', '_blank');
        });
        $('#tabungan-sejahtera-kas').click(function() {
            window.open('<?= base_url('produk/tabungan-sejahtera-kas') ?>', '_blank');
        });
        $('#tabungan-simpel').click(function() {
            window.open('<?= base_url('produk/tabungan-simpel') ?>', '_blank');
        });
        $('#tabungan-umroh').click(function() {
            window.open('<?= base_url('produk/tabungan-umroh') ?>', '_blank');
        });
        $('#tabunganku').click(function() {
            window.open('<?= base_url('produk/tabunganku') ?>', '_blank');
        });

        $('#btnKembali').click(function() {
            $(location).attr("href", "syaratKetentuan");
        });

    });
</script>