<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <h4 class="font-weight-bold text-primary">Edit Pegawai</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col-12 col-xs-12 mx-auto">
                            <form class="user" method="post" enctype="multipart/form-data" action="<?= current_url() ?>">
                                <div class="form-group">
                                    <label>Nama Pegawai</label>
                                    <input type="hidden" class="form-control" name="id_pegawai" value="<?= $pegawai->id_pegawai ?>">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Nama Pegawai" value="<?= $pegawai->nama ?>">
                                    <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <select class="form-control custom-select custom-select-md" id="jabatan" name="jabatan">
                                        <option value="" disabled diselected>--Pilih Jabatan--</option>
                                        <?php foreach ($jabatan as $row) : ?>
                                            <option <?php if ($row->id_jabatan == $pegawai->id_jabatan) {
                                                        echo 'selected="selected"';
                                                    } ?> value="<?= $row->id_jabatan; ?>"><?= $row->jabatan; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tag Jabatan</label>
                                    <select class="form-control custom-select custom-select-md" name="tag" id="tag">
                                        <option value="" disabled diselected>--Pilih--</option>
                                        <option value="Dewan Komisaris">Dewan Komisaris</option>
                                        <option value="Direksi">Direksi</option>
                                        <option value="assistant">Audit</option>
                                        <option value="Department">Department</option>
                                        <option value="Staff">Staff</option>
                                    </select>
                                    <?php echo form_error('tag', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Atasan</label>
                                    <select class="form-control custom-select custom-select-md" id="atasan" name="atasan">
                                        <option value="" disabled diselected>--Pilih Atasan--</option>
                                        <?php foreach ($atasan as $row) : ?>
                                            <option <?php if ($row->id_pegawai == $pegawai->parent_job) {
                                                        echo 'selected="selected"';
                                                    } ?> value="<?= $row->id_pegawai; ?>"><?= $row->jabatan; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <input type="file" class="form-control-file" name="gambar" value="<?= set_value('gambar'); ?>">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <a href="<?= base_url('admin/pegawai'); ?>" class="btn btn-google btn-user btn-block">
                                            Cancel
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-facebook btn-user btn-block">
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
                        <div class="col-8">
                            <h4 class="font-weight-bold text-primary">List Data Pegawai</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pegawai</th>
                                    <th>Jabatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <th><?= $no++ ?></th>
                                        <th><?= html_entity_decode($row->nama); ?></th>
                                        <th><?= html_entity_decode($row->alias); ?></th>
                                        <th>
                                            <div class="btn-group" role="group">
                                                <a href="<?php echo $row->id_pegawai; ?>" class="btn btn-sm btn-info float-center" data-target="#edit<?php echo $row->id_pegawai; ?>" data-toggle="modal"><i class="fas fa-edit"></i></a>
                                                <a href="<?php echo $row->id_pegawai; ?>" class="btn btn-sm btn-danger float-center" data-target="#hapus<?php echo $row->id_pegawai; ?>" data-toggle="modal"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </th>
                                    </tr>
                                    <div id="hapus<?= $row->id_pegawai; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                                                    <a href="<?= base_url('admin/delPeg/' . $row->id_pegawai) ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete User">Hapus</a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="edit<?= $row->id_pegawai; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0">Peringatan!</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 class="modal-body mt-0">Yakin ubah data ini?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?= base_url('admin/editPeg/' . $row->id_pegawai) ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Delete User">Ubah</a>
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