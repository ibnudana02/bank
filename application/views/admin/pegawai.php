<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-primary">List Data Pegawai</h4>
                        </div>
                        <div class="col-4"><a href="<?= base_url('admin/add_pegawai'); ?>" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus-square"></i></a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pegawai</th>
                                    <th>Jabatan</th>
                                    <th>Foto</th>
                                    <th>Social Media</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <th><?= $no++; ?>
                                        <th><?= html_entity_decode($row->nama); ?></th>
                                        <th><?= htmlspecialchars($row->jabatan); ?></th>
                                        <th><img src="<?= base_url('upload/pegawai/' . $row->foto); ?>" width="70" height="70"></th>
                                        <th>
                                            <div class="btn-group" role="group">
                                                <a href="" class="btn btn-sm btn-facebook float-center"><i class="fa fa-facebook"></i></a>
                                                <a href="" class="btn btn-sm btn-info float-center"><i class="fas fa-instagram"></i></a>
                                            </div>
                                        </th>
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