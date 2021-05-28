<section id="page-content" class="background-grey p-t-30">
    <div class="container">
        <div class="row ">
            <div class="content col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="wizard7" class="wizard needs-validation" action="<?= current_url(); ?>" method="POST" data-style="1" novalidate>
                            <h3>Data Diri</h3>
                            <div class="wizard-content">
                                <div class="h3 mb-3">Informasi Data Diri</div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="nik">NIK</label>
                                        <input type="number" class="form-control" value="<?php echo set_value('nik'); ?>" name="nsb_nik" maxlength="16" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" style="text-transform: uppercase" value="<?php echo set_value('nm_lengkap'); ?>" name="nsb_nama" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="nama">Email</label>
                                        <input type="email" class="form-control" style="text-transform: uppercase" value="<?php echo set_value('email'); ?>" name="nsb_email" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="nama">No. Handphone</label>
                                        <input type="number" class="form-control" value="<?php echo set_value('hp'); ?>" name="nsb_hp" maxlength="13" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="nama">Pendidikan Terakhir</label>
                                        <select class="form-control" name="nsb_pendidikan" required>
                                            <option value="" selected="true"> </option>
                                            <?php foreach ($pendidikan as $key => $row) : ?>
                                                <option value="<?= $row; ?>" <?= set_select('nsb_pendidikan', $row) ?>><?= $row; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="nama">Tujuan Pembukaan Rekening</label>
                                        <select class="form-control" style="text-transform: uppercase" name="nsb_tujuan_buka" id="" required>
                                            <option value="" selected="true" disabled="disabled"> </option>
                                            <?php foreach ($tujuan_buka as $key => $row) : ?>
                                                <option value="<?= $row ?>" <?= set_select('nsb_tujuan_buka', $row) ?>><?= $row ?></option>
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
                                        <select class="form-control" style="text-transform: uppercase" name="nsb_transaksi" id="" required>
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
                                        <input type="text" class="form-control" value="<?php echo set_value('nsb_npwp'); ?>" name="nsb_npwp" id="npwp">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama">Alamat Saat Ini</label>
                                        <input type="text" class="form-control" style="text-transform: uppercase" value="<?php echo set_value('alamat_domisili'); ?>" name="alamat_domisili" id="alamat_domisili" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="nama">RT</label>
                                        <input type="number" class="form-control" value="<?php echo set_value('rt'); ?>" name="nsb_rt" id="rt" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="nama">RW</label>
                                        <input type="number" class="form-control" value="<?php echo set_value('rw'); ?>" name="nsb_rw" id="rw" required>
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
                                <div class="form-group col-md-12">
                                    <label for="nama">Jenis Pekerjaan</label>
                                    <select class="form-control" style="text-transform: uppercase" name="nsb_profesi" id="profesi" required>
                                        <option value="" selected="true" disabled="disabled"> </option>
                                        <?php foreach ($profesi as $value) : ?>
                                            <option value="<?= $value->id ?>" <?= set_select('profesi', $value->id) ?>><?= $value->nm_pekerjaan ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div id="bekerja">
                                    <div class="form-group col-md-12">
                                        <label for="surname">Penghasilan per Tahun</label>
                                        <input type="number" class="form-control" name="nsb_gaji_th">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="surname">Nama Kantor</label>
                                        <input type="text" class="form-control" style="text-transform: uppercase" name="nsb_kantor">
                                    </div>
                                    <div class="form-row m-r-10 m-l-10">
                                        <div class="form-group col-md-10">
                                            <label for="surname">Alamat Kantor</label>
                                            <input type="text" class="form-control" style="text-transform: uppercase" name="alamat_kantor">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="surname">Kode Pos</label>
                                            <input type="text" class="form-control" name="pos_kantor">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="surname">Jabatan</label>
                                        <input type="text" class="form-control" style="text-transform: uppercase" name="jabatan">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="surname">Mulai Bekerja</label>
                                        <input type="date" class="form-control" name="mulai_bekerja">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="surname">Telpon Kantor</label>
                                        <input type="number" class="form-control" name="telp_kantor">
                                    </div>
                                </div>
                                <div id="pemberiDana">
                                    <div class="form-group col-md-12">
                                        <label for="surname">Nama Pemberi Dana</label>
                                        <input type="text" class="form-control" style="text-transform: uppercase" name="dana_nama">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="surname">Jenis Identitas</label>
                                        <input type="text" class="form-control" name="dana_id">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="surname">Nomor Identitas</label>
                                        <input type="text" class="form-control" name="dana_noid">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="surname">NPWP <small>(Optional, jika tidak ada kosongkan</small></label>
                                        <input type="text" class="form-control" name="dana_npwp">
                                    </div>
                                    <div class="form-row m-r-10 m-l-10">
                                        <div class="form-group col-md-8">
                                            <label for="surname">Alamat Tempat Tinggal Pemberi Dana</small></label>
                                            <input type="text" class="form-control" style="text-transform: uppercase" name="dana_alamat">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="surname">RT</small></label>
                                            <input type="text" class="form-control" name="dana_rt">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="surname">RW</small></label>
                                            <input type="text" class="form-control" name="dana_rw">
                                        </div>
                                    </div>
                                    <div class="form-row m-r-10 m-l-10">
                                        <div class="form-group col-md-3">
                                            <label for="surname">Provinsi</small></label>
                                            <select name="dana_prov" id="dana_prov" class="form-control">
                                                <option value="" selected="true" disabled="disabled">Pilih</option>
                                                <?php foreach ($prop as $row) : ?>
                                                    <option value="<?= $row->id_prov; ?>" <?= set_select('dana_prov', $row->id_prov) ?>><?= ucwords($row->nama); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Kabupaten/Kota">Kabupaten/Kota</label>
                                            <select name="dana_kota" id="dana_kota" class="form-control">
                                                <option value="">Pilih</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Kabupaten/Kota">Kecamatan</label>
                                            <select name="dana_kec" id="dana_kec" class="form-control">
                                                <option value="">Pilih</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="Kabupaten/Kota">Desa/Kelurahan</label>
                                            <select name="dana_kel" id="dana_kel" class="form-control">
                                                <option value="">Pilih</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="sumber dana">Sumber Dana</label>
                                        <select name="dana_sumber_dana" id="dana_sumber_dana" class="form-control">
                                            <option value="" selected="true" disabled="disabled">Pilih</option>
                                            <?php foreach ($sumber_dana as $value) : ?>
                                                <option value="<?= $value ?>"><?= $value ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="surname">Penghasilan per Tahun</label>
                                        <select name="dana_hasil_thn" id="dana_hasil_thn" class="form-control">
                                            <option value="" selected="true" disabled="disabled">Pilih</option>
                                            <option value="Kurang dari Rp 36 Juta"> Kurang dari Rp 36 Juta</option>
                                            <option value="Rp 36 Juta sd < Rp 60 Juta"> Rp 36 Juta sd < Rp 60 Juta</option> <option value="Rp 60 Juta sd Rp 150 Juta"> Rp 60 Juta sd Rp 150 Juta</option>
                                            <option value="Lebih dari Rp 150 Juta"> Lebih dari Rp 150 Juta</option>
                                        </select> </div>
                                </div>
                            </div>
                            <h3>Upload Documents & Agreements</h3>
                            <div class="wizard-content">
                                <div class="h5 mb-4">Upload dokumen dan Syarat & Persetujuan.</div>
                                <div class="form-group col-md-12">
                                    <label for="surname">Upload KTP</label>
                                    <input type="file" class="form-control" style="text-transform: uppercase" name="nsb_ktp" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="surname">Upload Swafoto</label>
                                    <input type="file" class="form-control" style="text-transform: uppercase" name="nsb_swafoto" required>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="terms_conditions" id="terms_conditions" class="custom-control-input">
                                        <label class="custom-control-label" for="terms_conditions">Dengan memberi centang pada form ini, nasabah telah setuju dengan <a href="#">Syarat & Ketentuan</a> yang berlaku pada Bank Unisritama.</label>
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
    var wizard7 = $('#wizard7');
    wizard7.steps({
        headerTag: "h3",
        bodyTag: '.wizard-content',
        autoFocus: true,
        enableAllSteps: true,
        titleTemplate: '<span class="number">#index#</span><span class="title">#title#</span>',
        onStepChanging: function(event, currentIndex, newIndex) {
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
            $("#wizard7").submit();
            //     INSPIRO.elements.notification("Submited",
            //         "Thank you, your account has been registed successfully", "success");
        }
    });
    wizard7.validate({
        errorClass: 'is-invalid',
        validClass: 'is-valid',
        errorElement: "div",
        rules: {
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
            // Step 4 - Confirmation            
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
<script type="text/javascript">
    var profesi = $('#profesi').val();
    var pemberiKerja = $('#bekerja');
    var pemberiDana = document.getElementById("pemberiDana");

    if (profesi === null) {
        $('#bekerja').hide();
        $('#pemberiDana').hide();
    } else if (profesi === "3" || profesi === "4" || profesi === "5") {
        $('#bekerja').hide();
        $('#pemberiDana').show();
    } else {
        $('#bekerja').show();
        $('#pemberiDana').hide();
    }

    $('#profesi').change(function() {
        var value = $(this).val();
        if (value === "") {
            $('#bekerja').hide();
            $('#pemberiDana').hide();
        } else if (value === "3" || value === "4" || value === "5") {
            $('#bekerja').hide();
            $('#pemberiDana').show();
        } else {
            $('#bekerja').show();
            $('#pemberiDana').hide();
        }
    });
    $(document).ready(function() {
        $("#dana_prov").change(function() {
            var id = $(this).val();
            var data = "kabupaten";
            $.ajax({
                url: "<?php echo base_url('getDati'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id,
                    data: data,
                },
                success: function(response) {
                    $("#dana_kota").html(response.list_kota).show();
                }
            });
        });

        $("#dana_kota").change(function() {
            var id = $(this).val();
            var data = "kecamatan";
            $.ajax({
                url: "<?= base_url('getDati'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id,
                    data: data,
                },
                success: function(response) {
                    $("#dana_kec").html(response.list_kota).show();
                }
            });
        });
        $("#dana_kec").change(function() {
            var id = $(this).val();
            var data = "desa";
            $.ajax({
                url: "<?= base_url('getDati'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id,
                    data: data,
                },
                success: function(response) {
                    $("#dana_kel").html(response.list_kota).show();
                }
            });
        });
    });
</script>