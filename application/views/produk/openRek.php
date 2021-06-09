<?= $this->session->flashdata('message'); ?>
<section id="page-content" class="background-grey p-t-30">
    <div class="container-fluid">
        <!-- <div class="row content"> -->
        <!-- <div class="content "> -->
        <div class="card">
            <div class="card-body">
                <form id="wizard7" class="wizard needs-validation" action="<?= current_url(); ?>" enctype="multipart/form-data" method="POST" data-style="1">
                    <h3>Data Diri</h3>
                    <div class="wizard-content">
                        <div class="h3 mb-3">Informasi Data Diri</div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nik">NIK</label>
                                <input type="number" class="form-control" value="<?php echo set_value('nsb_nik'); ?>" name="nsb_nik" minlength="16" maxlength="16" required>
                                <?php echo form_error('nsb_nik', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" style="text-transform: uppercase" value="<?php echo set_value('nsb_nama'); ?>" name="nsb_nama" required>
                                <?php echo form_error('identitas_pasangan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nama">Email</label>
                                <input type="email" class="form-control" style="text-transform: uppercase" value="<?php echo set_value('nsb_email'); ?>" name="nsb_email" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="nama">No. Handphone</label>
                                <input type="number" class="form-control" value="<?php echo set_value('nsb_hp'); ?>" name="nsb_hp" minlength="10" maxlength="13" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nama">Pendidikan Terakhir</label>
                                <select class="form-control" name="nsb_pendidikan" required>
                                    <option value="" selected="true"> </option>
                                    <?php foreach ($pendidikan as $key => $row) : ?>
                                        <option value="<?= $row->id_pd; ?>" <?= set_select('nsb_pendidikan', $row->id_pd) ?>><?= $row->tingkat; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="nama">Tujuan Pembukaan Rekening</label>
                                <select class="form-control" style="text-transform: uppercase" name="nsb_tujuan_buka" required>
                                    <option value="" selected="true" disabled="disabled"> </option>
                                    <?php foreach ($tujuan_buka as $key => $row) : ?>
                                        <option value="<?= $row->id_tujuan ?>" <?= set_select('nsb_tujuan_buka', $row->id_tujuan) ?>><?= $row->tujuan ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nama">Sumber Dana</label>
                                <select class="form-control" style="text-transform: uppercase" name="nsb_sumber" required>
                                    <option value="" selected="true" disabled="disabled"> </option>
                                    <?php foreach ($sumber_dana as $value) : ?>
                                        <option value="<?= $value->id_sumber ?>" <?= set_select('nsb_sumber', $value->id_sumber) ?>><?= $value->sumber ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="nama">Perkiraan Nilai Transaksi Dalam 1 Tahun</label>
                                <select class="form-control" style="text-transform: uppercase" name="nsb_transaksi" required>
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
                                <input type="number" class="form-control" value="<?php echo set_value('nsb_rt'); ?>" name="nsb_rt" id="rt" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nama">RW</label>
                                <input type="number" class="form-control" value="<?php echo set_value('nsb_rw'); ?>" name="nsb_rw" id="rw" required>
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
                                <input type="number" class="form-control" value="<?php echo set_value('pos_domisili'); ?>" name="pos_domisili" minlength="5" required>
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
                                <input type="number" class="form-control" name="nsb_gaji_th" id="nsb_gaji_th" value="<?= set_value('nsb_gaji_th') ?>">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="surname">Nama Kantor</label>
                                <input type="text" class="form-control" style="text-transform: uppercase" value="<?= set_value('nsb_kantor') ?>" id="nsb_kantor" name="nsb_kantor">
                            </div>
                            <div class="form-row m-r-10 m-l-10">
                                <div class="form-group col-md-10">
                                    <label for="surname">Alamat Kantor</label>
                                    <input type="text" class="form-control" style="text-transform: uppercase" value="<?= set_value('alamat_kantor') ?>" id="alamat_kantor" name="alamat_kantor">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="surname">Kode Pos</label>
                                    <input type="number" class="form-control" value="<?= set_value('pos_kantor') ?>" minlength="5" id="pos_kantor" name="pos_kantor">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="surname">Jabatan</label>
                                <input type="text" class="form-control" style="text-transform: uppercase" value="<?= set_value('nsb_jabatan') ?>" id="nsb_jabatan" name="nsb_jabatan">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="surname">Mulai Bekerja</label>
                                <input type="text" class="form-control tanggal" id="mulai_bekerja" name="mulai_bekerja" value="<?= set_value('mulai_bekerja') ?>">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="surname">Telpon Kantor</label>
                                <input type="number" class="form-control" id="telp_kantor" name="telp_kantor" minlength="9" value="<?= set_value('telp_kantor') ?>">
                            </div>
                        </div>
                        <div id="pemberiDana">
                            <div class="form-group col-md-12">
                                <label for="surname">Nama Pemberi Dana</label>
                                <input type="text" class="form-control" style="text-transform: uppercase" id="dana_nama" name="dana_nama">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="surname">Jenis Identitas</label>
                                <select name="dana_id" id="dana_id" class="form-control">
                                    <option value="" selected="true">Pilih</option>
                                    <?php foreach ($identitas as $key => $value) : ?>
                                        <option value="<?= $value->id_identitas ?>" <?= set_select('dana_id', $value->id_identitas) ?>><?= $value->jenis_identitas ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="surname">Nomor Identitas</label>
                                <input type="number" class="form-control" id="dana_noid" name="dana_noid">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="surname">NPWP <small>(Optional, jika tidak ada kosongkan</small></label>
                                <input type="text" class="form-control" id="dana_npwp" name="dana_npwp">
                            </div>
                            <div class="form-row m-r-10 m-l-10">
                                <div class="form-group col-md-8">
                                    <label for="surname">Alamat Tempat Tinggal Pemberi Dana</small></label>
                                    <input type="text" class="form-control" style="text-transform: uppercase" id="dana_alamat" name="dana_alamat">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="surname">RT</small></label>
                                    <input type="number" class="form-control" name="dana_rt" id="dana_rt">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="surname">RW</small></label>
                                    <input type="number" class="form-control" name="dana_rw" id="dana_rw">
                                </div>
                            </div>
                            <div class="form-row m-r-10 m-l-10">
                                <div class="form-group col-md-3">
                                    <label for="surname">Provinsi</small></label>
                                    <select name="dana_prov" id="dana_prov" class="form-control">
                                        <option value="" selected="true">Pilih</option>
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
                                        <option value="<?= $value->id_sumber ?>"><?= $value->sumber ?></option>
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
                            <label for="surname">Upload KTP <small>Ukuran file max. 2 MB</small> </label>
                            <input type="file" class="form-control" id="ktp" style="text-transform: uppercase" name="nsb_ktp" required>
                            <label for="sizektp" id="sizeKtp"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="surname">Upload Swafoto <small>Ukuran file max. 2 MB</small> </label>
                            <input type="file" class="form-control" id="swafoto" style="text-transform: uppercase" name="nsb_swafoto" required>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms_conditions" id="terms_conditions" class="custom-control-input">
                                <label class="custom-control-label" for="terms_conditions">Dengan menyetujui form ini, nasabah telah menerima <a href="#">Syarat & Ketentuan</a> yang berlaku pada Bank Unisritama.</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
        <!-- </div> -->
    </div>
</section>
<script src="<?= base_url('assets/new/') ?>js/jquery.js"></script>
<script src="<?= base_url('assets/new/') ?>plugins/validate/validate.min.js"></script>
<link href="<?= base_url('assets/new/') ?>plugins/jquery-steps/jquery.steps.css" rel="stylesheet">
<script src="<?= base_url('assets/new/') ?>plugins/jquery-steps/jquery.steps.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<link href="<?= base_url('assets/admin/') ?>bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<script src="<?= base_url('assets/admin/') ?>bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script>
    var wizard7 = $('#wizard7');

    wizard7.steps({
        headerTag: "h3",
        bodyTag: '.wizard-content',
        autoFocus: true,
        enableAllSteps: false,
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

    var profesi = $('#profesi').val();
    // alert(profesi);
    if (profesi === "3" || profesi === "4" || profesi === "5") {
        wizard7.validate({
            errorClass: 'is-invalid',
            validClass: 'is-valid',
            errorElement: "div",
            rules: {
                // 1. Informasi data diri
                nsb_nik: {
                    required: true,
                    digits: true,
                    minlength: 16,
                    maxlength: 17
                },
                nsb_nama: {
                    required: true,
                    minlength: 4,
                },
                nsb_email: {
                    required: true,
                    email: true,
                    minlength: 8
                },
                nsb_hp: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 13
                },
                nsb_pendidikan: {
                    required: true,
                },
                nsb_tujuan_buka: {
                    required: true,
                },
                nsb_sumber: {
                    required: true,
                },
                nsb_transaksi: {
                    required: true,
                },
                // nsb_npwp: {
                //     required: true,
                // },
                alamat_domisili: {
                    required: true,
                },
                nsb_rt: {
                    required: true,
                    digits: true,
                    minlength: 2,
                    maxlength: 3
                },
                nsb_rw: {
                    required: true,
                    digits: true,
                    minlength: 2,
                    maxlength: 3
                },
                kel_domisili: {
                    required: true,
                },
                kec_domisili: {
                    required: true,
                },
                pos_domisili: {
                    required: true,
                    minlength: 5,
                    maxlength: 5
                },
                nsb_profesi: {
                    required: true,
                },
                ktp: {
                    required: true,
                },
                swafoto: {
                    required: true,
                },
                // Step 4 - Confirmation            
                terms_conditions: {
                    required: true
                },
                // Tidak bekerja
                dana_nama: {
                    required: true,
                },
                dana_id: {
                    required: true,
                },
                dana_noid: {
                    required: true,
                    digits: true
                },
                // dana_npwp: {
                //     required: true,
                // },
                dana_alamat: {
                    required: true,
                },
                dana_rt: {
                    required: true,
                    minlength: 2,
                    maxlength: 3
                },
                dana_rw: {
                    required: true,
                    minlength: 2,
                    maxlength: 3
                },
                dana_prov: {
                    required: true,
                },
                dana_kota: {
                    required: true,
                },
                dana_kec: {
                    required: true,
                },
                dana_kel: {
                    required: true,
                },
                dana_sumber_dana: {
                    required: true,
                    digits: true
                }
            },
            errorPlacement: function(error, element) {
                $(element).parents(".form-group").append(error);
            }
        });
    } else {
        wizard7.validate({
            errorClass: 'is-invalid',
            validClass: 'is-valid',
            errorElement: "div",
            rules: {
                // 1. Informasi data diri
                nsb_nik: {
                    required: true,
                    digits: true,
                    minlength: 16,
                    maxlength: 17
                },
                nsb_nama: {
                    required: true,
                    minlength: 4,
                },
                nsb_email: {
                    required: true,
                    email: true,
                    minlength: 8
                },
                nsb_hp: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 13
                },
                nsb_pendidikan: {
                    required: true,
                },
                nsb_tujuan_buka: {
                    required: true,
                },
                nsb_sumber: {
                    required: true,
                },
                nsb_transaksi: {
                    required: true,
                },
                // nsb_npwp: {
                //     required: true,
                // },
                alamat_domisili: {
                    required: true,
                },
                nsb_rt: {
                    required: true,
                    digits: true,
                    minlength: 2,
                    maxlength: 3
                },
                nsb_rw: {
                    required: true,
                    digits: true,
                    minlength: 2,
                    maxlength: 3
                },
                kel_domisili: {
                    required: true,
                },
                kec_domisili: {
                    required: true,
                },
                pos_domisili: {
                    required: true,
                    minlength: 5,
                    maxlength: 5
                },
                nsb_profesi: {
                    required: true,
                },
                ktp: {
                    required: true,
                },
                swafoto: {
                    required: true,
                },
                // Step 4 - Confirmation            
                terms_conditions: {
                    required: true
                },
                // Bekerja
                nsb_gaji_th: {
                    required: true,
                    digits: true
                },
                nsb_kantor: {
                    required: true,
                },
                alamat_kantor: {
                    required: true,
                },
                pos_kantor: {
                    required: true,
                    minlength: 5,
                    maxlength: 5
                },
                nsb_jabatan: {
                    required: true,
                },
                mulai_bekerja: {
                    required: true,
                },
                telp_kantor: {
                    required: true,
                    digits: true
                }
            },
            errorPlacement: function(error, element) {
                $(element).parents(".form-group").append(error);
            }
        });
    }
    $('.wizard').find(".actions ul > li > a").addClass("btn");
</script>
<script type="text/javascript">
    var profesi = $('#profesi').val();
    var pemberiKerja = $('#bekerja');
    var pemberiDana = document.getElementById("pemberiDana");

    $('#profesi').change(function() {
        var value = $(this).val();
        if (value === "") {
            $('#bekerja').hide();
            $('#pemberiDana').hide();
        } else if (value === "3" || value === "4" || value === "5") {
            $('#bekerja').hide();
            $('#nsb_gaji_th').val('');
            $('#nsb_kantor').val('');
            $('#alamat_kantor').val('');
            $('#pos_kantor').val('');
            $('#nsb_jabatan').val('');
            $('#mulai_bekerja').val('');
            $('#telp_kantor').val('');
            $('#pemberiDana').show();
        } else {
            $('#bekerja').show();
            $('#pemberiDana').hide();
            $('#dana_nama').val('');
            $('#dana_id').val('');
            $('#dana_noid').val('');
            $('#dana_npwp').val('');
            $('#dana_alamat').val('');
            $('#dana_rt').val('');
            $('#dana_rw').val('');
            $('#dana_prov').val('');
            $('#dana_kota').val('');
            $('#dana_kec').val('');
            $('#dana_kel').val('');
            $('#dana_sumber_dana').val('');
            $('#dana_hasil_thn').val('');

        }
    });

    var MAX_SIZE = 1024 * 1024;

    $(document).ready(function() {
        $('#ktp').change(function() {
            filesize = this.files[0].size;
            if (filesize > MAX_SIZE) {
                this.setCustomValidity("File must not exceed 1 MB!");
                this.reportValidity();
                $('#ktp').val('');
            } else {
                this.setCustomValidity("");
            }
        });
        $('#swafoto').change(function() {
            filesize = this.files[0].size;
            if (filesize > MAX_SIZE) {
                this.setCustomValidity("File must not exceed 1 MB!");
                this.reportValidity();
                $('#swafoto').val('');
            } else {
                this.setCustomValidity("");
            }
        });

        $(".tanggal").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            showWeekDays: false
        });
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