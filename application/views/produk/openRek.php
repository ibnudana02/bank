<section id="page-content" class="background-grey p-t-30">
    <div class="container">
        <div class="row ">
            <div class="content col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="wizard7" class="wizard needs-validation" data-style="1" novalidate>
                            <h3>Data Diri</h3>
                            <div class="wizard-content">
                                <div class="h3 mb-3">Informasi Data Diri</div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" value="<?php echo set_value('nik'); ?>" name="nik" maxlength="16" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" style="text-transform: uppercase" value="<?php echo set_value('nama'); ?>" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="nama">Email</label>
                                        <input type="email" class="form-control" style="text-transform: uppercase" value="<?php echo set_value('email'); ?>" name="email" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="nama">No. Handphone</label>
                                        <input type="number" class="form-control" value="<?php echo set_value('hp'); ?>" name="hp" maxlength="13" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="nama">Pendidikan Terakhir</label>
                                        <select class="form-control" name="pendidikan" required>
                                            <option value="" selected="true"> </option>
                                            <?php foreach ($pendidikan as $key => $row) : ?>
                                                <option value="<?= $row; ?>" <?= set_select('pendidikan', $row) ?>><?= $row; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="nama">Tujuan Pembukaan Rekening</label>
                                        <select class="form-control" style="text-transform: uppercase" name="tujuan_buka" id="" required>
                                            <option value="" selected="true" disabled="disabled"> </option>
                                            <?php foreach ($tujuan_buka as $key => $row) : ?>
                                                <option value="<?= $row ?>" <?= set_select('tujuan_buka', $row) ?>><?= $row ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="nama">Sumber Dana</label>
                                        <select class="form-control" style="text-transform: uppercase" name="sumber_dana" required>
                                            <option value="" selected="true" disabled="disabled"> </option>
                                            <?php foreach ($sumber_dana as $key => $value) : ?>
                                                <option value="<?= $value ?>" <?= set_select('sumber_dana', $value) ?>><?= $value ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="nama">Perkiraan Nilai Transaksi Dalam 1 Tahun</label>
                                        <select class="form-control" style="text-transform: uppercase" name="transaksi" id="" required>
                                            <option value="" selected="true" disabled="disabled"></option>
                                            <option value="4000000">Kurang dari 5 Juta</option>
                                            <option value="22000000">Rp 5 Juta sd 25 Juta</option>
                                            <option value="88000000">Rp 26 Juta sd 100 Juta</option>
                                            <option value="220000000">Rp 101 Juta sd 250 Juta</option>
                                            <option value="4250000000">Rp 251 Juta sd 500 Juta</option>
                                            <option value="500000000">Besar dari 500 Juta</option>
                                        </select> </div>
                                    <div class="form-group col-md-12">
                                        <label for="nama">NPWP <small>Optional, Jika tidak ada kosongkan</small></label>
                                        <input type="text" class="form-control" value="<?php echo set_value('npwp'); ?>" name="npwp" id="npwp">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama">Alamat Saat Ini</label>
                                        <input type="text" class="form-control" style="text-transform: uppercase" value="<?php echo set_value('alamat_domisili'); ?>" name="alamat_domisili" id="alamat_domisili" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="nama">RT</label>
                                        <input type="number" class="form-control" value="<?php echo set_value('rt'); ?>" name="rt" id="rt" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="nama">RW</label>
                                        <input type="number" class="form-control" value="<?php echo set_value('rw'); ?>" name="rw" id="rw" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="desa">Desa/Kelurahan</label>
                                        <input type="text" class="form-control" style="text-transform: uppercase" value="<?php echo set_value('kel_domisili'); ?>" name="kel_domisili" required>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="desa">Kecamatan</label>
                                        <input type="text" class="form-control" style="text-transform: uppercase" value="<?php echo set_value('kec_domisili'); ?>" name="kec_domisili" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="desa">Kode Pos</label>
                                        <input type="number" class="form-control" value="<?php echo set_value('pos_domisili'); ?>" name="pos_domisili" required>
                                    </div>
                                </div>
                            </div>
                            <h3>Personal Information</h3>
                            <div class="wizard-content">
                                <div class="h5 mb-4">Data Pekerjaan</div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="nama">Jenis Pekerjaan</label>
                                        <select class="form-control" style="text-transform: uppercase" name="profesi" required>
                                            <option value="" selected="true" disabled="disabled"> </option>
                                            <?php foreach ($profesi as $key => $value) : ?>
                                                <option value="<?= $value ?>" <?= set_select('profesi', $value) ?>><?= $value ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="surname">Surname</label>
                                        <input type="text" class="form-control" name="surname" placeholder="Enter your Surname">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" name="gender">
                                            <option>Select your gender</option>
                                            <option>Female</option>
                                            <option>Male</option>
                                            <option>Rather not say</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="gender">Date of Birth</label>
                                        <input class="form-control" type="date" name="dateofbirth">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="telephone">Telephone</label>
                                        <input class="form-control" type="tel" name="telephone" placeholder="Enter your Telephone number">
                                    </div>
                                </div>
                            </div>

                            <h3>Confirmation</h3>
                            <div class="wizard-content">
                                <div class="h5 mb-4">Confimration</div>
                                <p>Customize your experience by confirming your personalization settings and the
                                    data
                                    stored with your account. You can always learn more about these options,
                                    adjust
                                    them, and review your activity in your Account</p>
                                <p>These settings apply wherever you are signed in to your new Account.</p>
                                <div class="form-group mb-1 mt-5">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="reminders" id="reminders" class="custom-control-input">
                                        <label class="custom-control-label" for="reminders">Send me occasional
                                            reminders
                                            about these settings</a></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="terms_conditions" id="terms_conditions" class="custom-control-input">
                                        <label class="custom-control-label" for="terms_conditions">By checking
                                            this
                                            option, you agree to acceot with the <a href="#">Terms and
                                                Conditions</a>.</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?= base_url('assets/new/') ?>js/jquery.js"></script>
<script src="<?= base_url('assets/new/') ?>plugins/validate/validate.min.js"></script>
<link href="<?= base_url('assets/new/') ?>plugins/jquery-steps/jquery.steps.css" rel="stylesheet">
<script src="<?= base_url('assets/new/') ?>plugins/jquery-steps/jquery.steps.min.js"></script>

<script>
    //Advanced - with validation
    var wizard7 = $('#wizard7');
    // var wizard7 = $('#wizard1');
    wizard7.steps({
        headerTag: "h3",
        bodyTag: '.wizard-content',
        autoFocus: true,
        enableAllSteps: true,
        titleTemplate: '<span class="number">#index#</span><span class="title">#title#</span>',
        onStepChanging: function(event, currentIndex, newIndex) {
            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex) {
                return true;
            }
            return wizard7.valid();
        },
        onStepChanged: function(event, currentIndex, priorIndex) {},
        onFinishing: function(event, currentIndex) {
            return wizard7.valid();
        },
        onFinished: function(event, currentIndex) {
            INSPIRO.elements.notification("Submited",
                "Thank you, your account has been registed successfully", "success");
        }
    });
    wizard7.validate({
        errorClass: 'is-invalid',
        validClass: 'is-valid',
        errorElement: "div",
        rules: {
            // Step 1 - Account information
            nik: {
                required: true,
                digits: true,
                minlength: 16,
                maxlength: 16
            },
            nama: {
                required: true
            },
            email: {
                required: true,
                email: true,
                minlength: 8
            },
            hp: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 13
            },
            alamat_domisili: {
                required: true,
            },
            rt: {
                required: true,
                digits: true,
                maxlength: 3
            },
            rw: {
                required: true,
                digits: true,
                maxlength: 3
            },
            pendidikan: {
                required: true,
            },
            password: {
                required: true,
                minlength: 5,
                maxlength: 12
            },
            password2: {
                required: true,
                minlength: 5,
                maxlength: 12
            },
            // Step 4 - Confirmation
            reminders: {
                required: true
            },
            terms_conditions: {
                required: true
            },
        },
        errorPlacement: function(error, element) {
            $(element).parents(".form-group").append(error);
        }
    });
    $('.wizard').find(".actions ul > li > a").addClass("btn");
</script>