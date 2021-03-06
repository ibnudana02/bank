<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php if ($this->session->flashdata('message')) : ?>
        <div class="alert alert-primary alert-dismissible text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?= $this->session->flashdata('message'); ?>
        </div>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="font-weight-bold text-primary">Daftar Nasabah eForm</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Referensi</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tujuan Pembukaan</th>
                                    <th>Jenis Tabungan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <th><?= $no++; ?></th>
                                        <th><?= htmlspecialchars($row->kd_ref); ?></th>
                                        <th><?= htmlspecialchars($row->nsb_nama); ?></th>
                                        <th><?= htmlspecialchars($row->tujuan); ?></th>
                                        <th><?= htmlspecialchars(strtoupper($row->produk)); ?></th>
                                        <th><?= htmlspecialchars($row->nsb_status); ?></th>
                                        <th>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <?php if ($row->nsb_status == 'APPROVED') {
                                                    echo '<a href="' . $row->nsb_id . '" class="btn btn-sm btn-info disabled float-center" data-target="#acc' . $row->nsb_id . '" data-toggle="modal"><i class="fas fa-check"></i></a>';
                                                } else {
                                                    echo '<a href="' . $row->nsb_id . '" class="btn btn-sm btn-info float-center" data-target="#acc' . $row->nsb_id . '" data-toggle="modal"><i class="fas fa-check"></i></a>';
                                                } ?>
                                                <a href="<?= base_url('cetak-nasabah-tab/' . $row->nsb_id) ?>" target="_blank" class="btn btn-sm btn-success float-center"><i class="fas fa-print"></i></a>
                                                <a href="<?php echo $row->nsb_id; ?>" class="btn btn-sm btn-danger float-center" data-target="#hapus<?php echo $row->nsb_id; ?>" data-toggle="modal"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </th>
                                    </tr>
                                    <div id="hapus<?= $row->nsb_id; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                                                    <a href="<?= base_url('del-nsb/' . $row->nsb_id) ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete User">Hapus</a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="acc<?= $row->nsb_id; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0">Peringatan!</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 class="modal-body mt-0">Apakah yakin Approve data ini?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?= base_url('acc/' . $row->nsb_id . '/0') ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Approve">Approve</a>
                                                    <a href="<?= base_url('acc/' . $row->nsb_id . '/1') ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Approve & Cetak">Approve & Cetak</a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali">Batal</button>
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
    var table = $('#dataTable').DataTable({});
</script>