<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <p class="mb-4">Fitur ini digunakan untuk Menambah dan menghapus Kategori. Hanya dapat diakses oleh Administrator.</p> -->
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-5">
            <div class="card shadow mb-2">
                <div class="card-header py-3">
                    <div class="row">
                        <h4 class="font-weight-bold text-primary">Tambah Jabatan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col-xs-12 col-lg-12 mx-auto">
                            <form class="user" method="post" action="<?= current_url(); ?>">
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control " name="jabatan" id="jabatan" placeholder="Enter Jabatan" value="<?= $d->jabatan ?>">
                                    <?php echo form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Alias</label>
                                    <input type="text" class="form-control " name="alias" id="alias" placeholder="Enter Alias" value="<?= $d->alias ?>">
                                    <?php echo form_error('alias', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <a href="<?= base_url('admin/jabatan'); ?>" class="btn btn-google btn-block">
                                            Cancel
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-facebook  btn-block">
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
        <div class="col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <h4 class="font-weight-bold text-primary">Daftar Jabatan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Jabatan</th>
                                    <th>Alias</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <th><?= html_entity_decode($row->jabatan); ?></th>
                                        <th><?= htmlspecialchars($row->alias); ?></th>
                                        <th>
                                            <div class="btn-group">
                                                <a href="<?= base_url('edit_jab/' . $row->id_jabatan) ?>" class="btn btn-sm btn-info float-center"><i class="fas fa-edit"></i></a>
                                                <a href="<?php echo $row->id_jabatan; ?>" class="btn btn-sm btn-danger float-center" data-target="#hapus<?php echo $row->id_jabatan; ?>" data-toggle="modal"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </th>
                                    </tr>
                                    <div id="hapus<?= $row->id_jabatan; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0">Peringatan!</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 class="modal-body mt-0">Yakin menghapus data ini?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?= base_url('admin/delete_kategori/' . $row->id_jabatan) ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete User">Hapus</a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script>
    $(document).ready(function() {

    });
</script>