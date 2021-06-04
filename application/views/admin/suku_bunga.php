<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow mb-2">
                <div class="card-header py-3">
                    <div class="row">
                        <h4 class="font-weight-bold text-primary">Tambah Suku Bunga</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col-xs-12 col-lg-12 mx-auto">
                            <form class="user" method="post" action="<?= base_url('admin/add_bunga'); ?>">
                                <div class="form-group">
                                    <label>Produk</label>
                                    <input type="text" class="form-control " name="produk" id="produk" placeholder="Enter Produk" value="<?= set_value('produk'); ?>">
                                    <?php echo form_error('produk', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Suku Bunga</label>
                                    <select name="jenis" id="jenis" class="form-control">
                                        <option value="">Pilih Jenis</option>
                                        <?php foreach ($jenis as $row => $value) : ?>
                                            <option value="<?= $value ?>" <?= set_select('jenis', $value) ?>><?= $value ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Persentase Suku Bunga</label>
                                    <input type="number" class="form-control " name="persen" id="persen" placeholder="Enter Persentase Suku Bunga" value="<?= set_value('persen'); ?>">
                                    <?php echo form_error('persen', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <a href="<?= base_url('admin/bunga'); ?>" class="btn btn-google btn-block">
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
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <h4 class="font-weight-bold text-primary">Daftar Suku Bunga</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Produk</th>
                                    <th>Persentase Suku Bunga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <th><?= $no++ ?></th>
                                        <th><?= html_entity_decode($row->suku_bunga); ?></th>
                                        <th><?= htmlspecialchars($row->rate); ?></th>
                                        <th>
                                            <div class="btn-group">
                                                <a href="<?= base_url('edit_jab/' . $row->id_bunga) ?>" class="btn btn-sm btn-info float-center"><i class="fas fa-edit"></i></a>
                                                <a href="<?php echo $row->id_bunga; ?>" class="btn btn-sm btn-danger float-center" data-target="#hapus<?php echo $row->id_bunga; ?>" data-toggle="modal"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </th>
                                    </tr>
                                    <div id="hapus<?= $row->id_bunga; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                                                    <a href="<?= base_url('admin/delete_jab/' . $row->id_bunga) ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete Jabatan">Hapus</a>
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
<script src="<?= base_url('assets/admin/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script>
    var table = $('#dataTable').DataTable({
        "lengthChange": false,
        "searching": false,
        pageLength: 5,
        // lengthMenu: [
        //     [5, 10, 15, 20],
        //     [5, 10, 15, 20]
        // ]
    });
</script>