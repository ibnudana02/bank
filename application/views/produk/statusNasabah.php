<section id="page-content" class="background-grey p-b-50 p-t-50">
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
                            <h4>Pembukaan Rekening</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center">Apakah anda nasabah Bank Unisritama atau telah memiliki rekening di Bank Unisritama?</h4>
                            <br>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <div class="btnYa btn-sNasabah">
                                        <form action="#" method="post">
                                            <button id="btnYa" class="btn btn-success btn-block" type="submit"> Ya</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="btnTidak btn-sNasabah">
                                        <form action="<?= base_url('dataDiri') ?>" method="post">
                                            <button id="btnTidak" class="btn btn-primary btn-block" type="submit">Tidak</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 btnKembali">
                            <button id="btnKembali" class="btn btn-danger float-left" type="button"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                        </div>&nbsp;&nbsp;
                    </div>
                    <div class="row p-b-130"></div>
                </div>
            </div>
        </form>
    </div>
</section>
<script src="<?= base_url('assets/new/') ?>js/jquery.js"></script>
<script>
    $(document).ready(function() {
        $('#btnKembali').click(function() {
            $(location).attr("href", "jenisRekening");
        });

    });
</script>