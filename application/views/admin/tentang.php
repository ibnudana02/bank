<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-primary">Corporate</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Corporate</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <th><?= $no++; ?>
                                        <th><?= htmlspecialchars($row->company); ?></th>
                                        <th><?= htmlspecialchars($row->alamat); ?></th>
                                        <th><?= htmlspecialchars($row->email); ?></th>
                                        <!-- <th width><a href="<?php echo $row->id_kategori; ?>" class="btn btn-sm btn-info float-center" data-target="#edit<?php echo $row->id_kategori; ?>" data-toggle="modal">Edit</a>
                                            <a href="<?php echo $row->id_kategori; ?>" class="btn btn-sm btn-danger float-center" data-target="#hapus<?php echo $row->id_kategori; ?>" data-toggle="modal">Hapus</a></th> -->
                                    </tr>

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