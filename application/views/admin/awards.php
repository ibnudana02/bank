<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-2">
                    <div class="col-xs-12">
                        <h4 class="font-weight-bold text-primary">Tambah Penghargaan</h4>
                    </div>
                </div>
                <div class="card-body col-xs-12">
                    <div class="table-responsive">
                        <div class="col-12 col-xs-12 mx-auto">
                            <form class="user" method="post" action="<?= base_url('admin/add_awards'); ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama Penghargaan</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter nama" value="<?= set_value('nama'); ?>">
                                    <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <?php echo form_error('gambar', '<small class="text-danger pl-5">', '</small>'); ?>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <input type="file" class="form-control-file" name="gambar" value="<?= set_value('gambar'); ?>">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <a href="<?= base_url('admin/awards'); ?>" class="btn btn-google btn-block">
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
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-2">
                    <div class="col-xs-12">
                        <h4 class="font-weight-bold text-primary">List Penghargaan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <th><?= $no++; ?>
                                        <th><img src="<?= base_url('upload/awards/' . $row->gambar); ?>" width="70" height="70"></th>
                                        <th><?= htmlspecialchars($row->nama); ?></th>
                                        <th>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="<?php echo $row->id_penghargaan; ?>" class="btn btn-sm btn-info float-center" data-target="#edit<?php echo $row->id_penghargaan; ?>" data-toggle="modal"><i class="fas fa-edit"></i></a>
                                                <a href="<?php echo $row->id_penghargaan; ?>" class="btn btn-sm btn-danger float-center" data-target="#hapus<?php echo $row->id_penghargaan; ?>" data-toggle="modal"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </th>
                                    </tr>
                                    <div id="hapus<?= $row->id_penghargaan; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                                                    <a href="<?= base_url('admin/delete_awards/' . $row->id_penghargaan) ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete User">Hapus</a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="edit<?= $row->id_penghargaan; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                                                    <a href="<?= base_url('admin/delete_kategori/' . $row->id_penghargaan) ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete User">Hapus</a>
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