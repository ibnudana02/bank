<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-primary">Profil User</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body col-12 mx-auto">
                    <div class="table-responsive">
                        <div class="col-lg-12 col-xs-12 mx-auto">
                            <div class="form-group user">
                                <label>Nama</label>
                                <input type="text" class="form-control form-control-user" value="<?= $data['name']; ?>" disabled>
                            </div>
                            <div class="form-group user">
                                <div class="row">
                                    <div class="col">
                                        <label>Username</label>
                                        <input type="text" class="form-control form-control-user" value="<?= $data['username']; ?>" disabled>
                                    </div>
                                    <div class="col">
                                        <label>Role</label>
                                        <input type="text" class="form-control form-control-user" value="<?= $data['role']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control form-control-user" value="<?= $data['email']; ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-primary">Photo User</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body col-xs-12 mx-auto">
                    <div class="table-responsive">
                        <div class="col-lg-12 col-xs-12 mx-auto">
                            <div class="form-group user text-center">
                                <img src="<?= base_url('upload/user/' . $data['image']); ?>" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->