<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-lg-10">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mx-auto font-weight-bold text-primary">Tambah Produk</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body col-lg mx-auto">
                    <div class="table-responsive">
                        <div class="col-12 col-xs-12 mx-auto mobil">
                            <form name="produk" class="user" method="post" action="<?= base_url('admin/add_produk'); ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Produk</label>
                                    <input type="text" class="form-control" name="produk" id="produk" placeholder="Enter produk" value="<?= set_value('produk'); ?>">
                                    <?php echo form_error('produk', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Produk</label>
                                    <select class="form-control custom-select custom-select-md" id="jenis" name="jenis">
                                        <option value="" selected="true" disabled="disabled">--Pilih Jenis Produk--</option>
                                        <?php foreach ($data as $row) : ?>
                                            <option value="<?= $row->id_jenis; ?>" <?= set_select('jenis', $row->id_jenis) ?>><?= $row->jenis; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('jenis', '<small class="text-danger pl-5">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="Link">Link - Pembukaan Produk</label>
                                    <input type="text" class="form-control" readonly id="link" name="link" placeholder="Link" value="<?= set_value('link'); ?>">
                                    <?php echo form_error('link', '<small class="text-danger pl-5">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="Link">Suku Bunga Produk</label>
                                    <input type="text" class="form-control" id="suku_bunga" name="suku_bunga" placeholder="ex: 5.5" value="<?= set_value('suku_bunga'); ?>">
                                    <?php echo form_error('suku_bunga', '<small class="text-danger pl-5">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" id="editor" rows="3" class="form-control" required data-error="Write your deskripsi" value="<?php echo set_value('deskripsi') ?>"></textarea>
                                </div>
                                <?php echo form_error('image', '<small class="text-danger pl-5">', '</small>'); ?>
                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <a href="<?= base_url('admin/produk'); ?>" class="btn btn-google btn-block">
                                            Cancel
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-facebook btn-block">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script src="<?= base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
<script>
    $(document).ready(function() {

        $("#jenis").change(function() {
            // $(this).hide();
            var link;
            var d = document.forms["produk"]["jenis"].value;
            if (d == "5e9545a2ecf3e") {
                link = "pembukaan-rekening-tabungan";
            } else if (d == "5e95459d30794") {
                link = "pembukaan-rekening-kredit";
            } else if (d == "5e954595bcb46") {
                link = "pembukaan-rekening-deposito";
            } else {
                link = "";
            }
            $("#link").val(link);
            // console.log(link);
        });
    });
</script>