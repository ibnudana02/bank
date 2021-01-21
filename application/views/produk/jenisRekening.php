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
                            <h4>Ketentuan Pembukaan Rekening</h4>
                        </div>
                        <div class="card-body">
                            <?php foreach ($jenis as $data) :
                                $no = 1;
                            ?>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="jenis" id="<?= $data->id_produk ?>" value="<?= $data->id_produk ?>" type="radio">&nbsp;&nbsp;<?= ucwords($data->produk); ?>
                                    </label>
                                    <button id="<?= $data->slug ?>" class="btn btn-sm btn-info float-right" type="button">INFO</button>
                                </div>
                                <br>
                            <?php endforeach; ?>
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-center">
                                <div class="btnKembali">
                                    <button id="btnKembali" class="btn btn-danger" type="button" name="input" value="input"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                </div>&nbsp;&nbsp;
                                <div class="btnLanjut">
                                    <button id="btnLanjut" class="btn btn-google" type="submit" name="input" value="input" disabled>Selanjutnya <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
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
            if (jenis === "2000-0001") {
                $("#rd01").prop('checked', true);
            }
            if (jenis === "2300-0001") {
                $("#rd02").prop('checked', true);
            }
            if (jenis === "2003-1001") {
                $("#rd03").prop('checked', true);
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