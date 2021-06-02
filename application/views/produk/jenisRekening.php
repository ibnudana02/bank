<section id="page-content" class="background-grey p-b-0">
    <div class="container-fluid ">
        <form action="<?= current_url(); ?>" method="post">
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
                                                <input type="radio" class="custom-control-input" name="jenis" id="<?= $data->id_produk ?>" value="<?= $data->id_produk ?>">
                                                <span class="custom-control-label"><?= strtoupper($data->produk); ?></span>
                                                <button id="<?= $data->slug ?>" class="btn btn-sm btn-light float-right" type="button">INFO</button>
                                            </label>
                                        </div>
                                    </div>
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
                    <p id="demo"></p>
                </div>
            </div>
        </form>
    </div>
</section>
<script src="<?= base_url('assets/new/') ?>js/jquery.js"></script>
<script>
    $(document).ready(function() {
        var data = '<?php echo json_encode($slug) ?>';
        var arr = JSON.parse(data);
        $.each(arr, function(i, item) {
            var slug = arr[i].slug;
            $('#' + slug + '').click(function() {
                window.open('<?= base_url('produk/') ?>' + slug + '', '_blank');
            });
        });

        var jenis = '';

        function checkRadio(jenis) {
            $.each(arr, function(i, item) {
                var slug = arr[i].slug;
                var id = arr[i].id_produk;
                if (jenis === slug) {
                    $("#" + id_produk).prop('checked', true);
                }
            });
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

        $('#btnKembali').click(function() {
            $(location).attr("href", "syaratKetentuan");
        });

    });
</script>