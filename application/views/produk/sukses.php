<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>Bank Unisritama</h1>
            <span>Terimakasih atas pengajuan Anda. Kami terus berkomitmen untuk meningkatkan pelayanan kepada Nasabah.</span>
        </div>
    </div>
</section>
<div class="container">
    <?php if ($this->session->flashdata('message')) { ?>
        <div class="col-lg-12">
            <div role="alert" class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                <strong><i class="fa fa-check-circle"></i> </strong>Sukses! <?php echo $this->session->flashdata('message'); ?>
            </div>
        </div>
    <?php } ?>
</div>
<section class="text-light" data-bg-video="<?= base_url('assets/new/') ?>video/pexels-waves.mp4">
    <div class="bg-overlay" data-style="5"></div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-4">

                <div class="text-center">
                    <div class="counter display-4 d-block text-dark mb-2">
                        <span data-suffix="+" data-to="1717" data-from="100"></span></div>
                    <p class="lead">Trusted by 1.7k customers</p>
                </div>

            </div>
            <div class="col-md-4">

                <div class="text-center">
                    <div class="counter display-4 d-block text-dark mb-2">
                        <span data-suffix="m" data-to="1000" data-from="0"></span>
                    </div>
                    <p class="lead">Reusable elements</p>
                </div>

            </div>
            <div class="col-md-4">

                <div class="text-center">
                    <div class="counter display-4 d-block text-dark mb-2">
                        <span data-suffix="+" data-to="700" data-from="0"></span>
                    </div>
                    <p class="lead">Templates</p>
                </div>

            </div>
        </div>
    </div>
</section>