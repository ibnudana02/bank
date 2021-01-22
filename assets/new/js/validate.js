$(document).ready(function() {
	$('#formPinPrakerja').bootstrapValidator({
		fields: {
            pin: {
                validators: {
                    notEmpty: {
                        message: "Tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        min: 6,
                        max: 6,
                        message: "Harus 6 karakter"
                    }
                }
            },
            confirmPin: {
                validators: {
                	notEmpty: {
                        message: "Tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        min: 6,
                        max: 6,
                        message: "Harus 6 karakter"
                    },
                    identical: {
                        field: "pin",
                        message: 'Pin tidak sama'
                    }
                }
            }
		}
	});
	
	$('#formOtpPrakerja').bootstrapValidator({
		fields: {
            kodeOtp: {
                validators: {
                    notEmpty: {
                        message: "Tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        min: 6,
                        max: 6,
                        message: "Harus 6 karakter"
                    }
                }
            }
		}
	});
	
	$('#formNasabah').bootstrapValidator({
		fields: {
            nomorRekening: {
                validators: {
                    notEmpty: {
                        message: "Nomor Rekening tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Nomor Rekening hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        min: 10,
                        max: 10,
                        message: "Nomor Rekening harus 10 karakter"
                    }
                }
            },
            nomorKartuDebit: {
                validators: {
                    notEmpty: {
                        message: "Nomor Kartu Debit tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Nomor Kartu Debit hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        min: 16,
                        max: 16,
                        message: "Nomor Kartu Debit harus 16 karakter"
                    }
                }
            },
            captcha: {
            	validators: {
            		notEmpty: {
            			message: "Captcha tidak boleh kosong"
            		}
            	}
            }
		}
	});
	
    $('#formDataDiri').bootstrapValidator({
        fields: {
            nik: {
                validators: {
                    notEmpty: {
                        message: "Nik tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Nik hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        min: 16,
                        max: 16,
                        message: "Nik harus 16 karakter"
                    }
                }
            },
            nama: {
                validators: {
                    notEmpty: {
                        message: "Nama tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z ]+$/,
                        message: "Nama hanya boleh menggunakan huruf dan spasi"
                    },
                    stringLength: {
                        max: 40,
                        message: "Nama maksimal 40 karakter"
                    }
                }
            },
            alamatEmail: {
                validators: {
                    notEmpty: {
                        message: "Alamat Email tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[^0-9][_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})*$/,
                        message: "Alamat Email tidak sesuai format"
                    },
                    stringLength: {
                        max: 50,
                        message: "Alamat Email maksimal 50 karakter"
                    }
                }
            },
            noTelpon: {
                validators: {
                    notEmpty: {
                        message: "No Telpon tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "No Telpon hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        max: 12,
                        message: "No Telpon maksimal 12 karakter"
                    }
                }
            },
            noHandphone: {
                validators: {
                    notEmpty: {
                        message: "No Handphone tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "No Handphone hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        max: 12,
                        message: "No Handphone maksimal 12 karakter"
                    }
                }
            },
            pendidikanTerakhir: {
                validators: {
                    notEmpty: {
                        message: "Pendidikan Terakhir tidak boleh kosong"
                    }
                }
            },
            hobby: {
                validators: {
                    notEmpty: {
                        message: "Hobby tidak boleh kosong"
                    }
                }
            },
            tujuanPembukaan: {
                validators: {
                    notEmpty: {
                        message: "Tujuan Pembukaan Rekening tidak boleh kosong"
                    }
                }
            },
            sumberDana: {
                validators: {
                    notEmpty: {
                        message: "Sumber Dana tidak boleh kosong"
                    }
                }
            },
            nilaiTransaksiPth: {
                validators: {
                    notEmpty: {
                        message: "Nilai Transaksi Dalam Satu Tahun tidak boleh kosong"
                    }
                }
            },
            npwp: {
                validators: {
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Npwp hanya boleh menggunakan angka"
                    },
                    stringLength: {
                    	min: 15,
                        max: 15,
                        message: "Npwp harus 15 karakter"
                    }
                }
            },
            alamatTerkini: {
                validators: {
                    notEmpty: {
                        message: "Alamat Terkini tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9-,./ ]+$/,
                        message: "Alamat Terkini hanya boleh menggunakan huruf, angka, spasi dan - , . /"
                    },
                    stringLength: {
                        max: 100,
                        message: "Alamat Terkini maksimal 100 karakter"
                    }
                }
            },
            rtTerkini: {
                validators: {
                    notEmpty: {
                        message: "Rt Terkini tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Rt Terkini hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        max: 3,
                        message: "Rt Terkini maksimal 3 karakter"
                    }
                }
            },
            rwTerkini: {
                validators: {
                    notEmpty: {
                        message: "Rw Terkini tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Rw Terkini hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        max: 3,
                        message: "Rw Terkini maksimal 3 karakter"
                    }
                }
            },
            kelurahan: {
                validators: {
                    notEmpty: {
                        message: "kelurahan tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9 ]+$/,
                        message: "kelurahan hanya boleh menggunakan angka, huruf dan symbol"
                    },
                    stringLength: {
                        max: 30,
                        message: "kelurahan maksimal 30 karakter"
                    }
                }
            },
            kecamatan: {
                validators: {
                    notEmpty: {
                        message: "kecamatan tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9 ]+$/,
                        message: "kecamatan hanya boleh menggunakan angka, huruf dan symbol"
                    },
                    stringLength: {
                        max: 30,
                        message: "kecamatan maksimal 30 karakter"
                    }
                }
            },
            kodePos: {
                validators: {
                    notEmpty: {
                        message: "Kode Pos tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Kode Pos hanya boleh menggunakan angka"
                    },
                    stringLength: {
                    	min: 5,
                        max: 5,
                        message: "Kode Pos harus 5 karakter"
                    }
                }
            }
        }
    });
    
    $('#formDataDiriPrakerja').bootstrapValidator({
    	excluded: [],
    	fields: {
        	nama: {
                validators: {
                    notEmpty: {
                        message: "Nama tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z].*[a-zA-Z].*[a-zA-Z]+$/,
                        message: "Nama hanya boleh menggunakan huruf dan spasi, minimal 3 huruf"
                    },
                    stringLength: {
                        max: 40,
                        message: "Nama maksimal 40 karakter"
                    }
                }
            },
            nik: {
                validators: {
                    notEmpty: {
                        message: "Nik tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Nik hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        min: 16,
                        max: 16,
                        message: "Nik harus 16 karakter"
                    }
                }
            },
            tempatLahir: {
                validators: {
                	notEmpty: {
                        message: "Tempat Lahir tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z].*[a-zA-Z].*[a-zA-Z]+$/,
                        message: "Tempat Lahir hanya boleh menggunakan huruf dan spasi, minimal 3 huruf"
                    },
                    stringLength: {
                        max: 40,
                        message: "Tempat Lahir maksimal 40 karakter"
                    }
                }
            },
            tanggalLahir: {
                validators: {
                    notEmpty: {
                        message: "Tanggal Lahir tidak boleh kosong"
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: "Alamat Email tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[^0-9][_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})*$/,
                        message: "Alamat Email tidak sesuai format"
                    },
                    stringLength: {
                        max: 50,
                        message: "Alamat Email maksimal 50 karakter"
                    }
                }
            },
            noHandphone: {
                validators: {
                    notEmpty: {
                        message: "No Handphone tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0][0-9]+$/,
                        message: "No Handphone hanya boleh menggunakan angka, diawali 0"
                    },
                    stringLength: {
                    	min: 8,
                        max: 13,
                        message: "No Handphone minimal 8 maksimal 13 karakter"
                    }
                }
            },
            namaIbuKandung: {
                validators: {
                    notEmpty: {
                        message: "Nama Ibu Kandung tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z].*[a-zA-Z].*[a-zA-Z]+$/,
                        message: "Nama Ibu Kandung hanya boleh menggunakan huruf dan spasi, minimal 3 huruf"
                    },
                    stringLength: {
                        max: 25,
                        message: "Nama Ibu Kandung maksimal 25 karakter"
                    }
                }
            },
            alamat: {
                validators: {
                    notEmpty: {
                        message: "Alamat tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9-,./ ]+$/,
                        message: "Alamat hanya boleh menggunakan huruf, angka, spasi dan - , . /"
                    },
                    stringLength: {
                    	min: 5,
                        max: 100,
                        message: "Alamat minimal 5 maksimal 100 karakter"
                    }
                }
            },
            rt: {
                validators: {
                    notEmpty: {
                        message: "Rt tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Rt hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        max: 3,
                        message: "Rt maksimal 3 karakter"
                    }
                }
            },
            rw: {
                validators: {
                    notEmpty: {
                        message: "Rw tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Rw hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        max: 3,
                        message: "Rw maksimal 3 karakter"
                    }
                }
            },
            provinsi: {
                validators: {
                    notEmpty: {
                        message: "Provinsi tidak boleh kosong"
                    }
                }
            },
            kota: {
                validators: {
                    notEmpty: {
                        message: "Kota tidak boleh kosong"
                    }
                }
            },
            kelurahan: {
                validators: {
                    notEmpty: {
                        message: "Kelurahan tidak boleh kosong"
                    }
                }
            },
            kecamatan: {
                validators: {
                    notEmpty: {
                        message: "Kecamatan tidak boleh kosong"
                    }
                }
            },
            kodePos: {
                validators: {
                    notEmpty: {
                        message: "Kode Pos tidak boleh kosong"
                    }
                }
            },
            kantorCabang: {
                validators: {
                    notEmpty: {
                        message: "Cabang tidak boleh kosong"
                    }
                }
            },
            fotoSelfie: {
                validators: {
                	notEmpty: {
                        message: "Foto Selfie tidak boleh kosong"
                    }
                }
            },
            fotoSelfieKtp: {
                validators: {
                    notEmpty: {
                        message: "Foto Selfie KTP tidak boleh kosong"
                    }
                }
            },
            fotoKtp: {
                validators: {
                    notEmpty: {
                        message: "Foto KTP tidak boleh kosong"
                    }
                }
            },
            captcha: {
            	validators: {
            		notEmpty: {
            			message: "Captcha tidak boleh kosong"
            		}
            	}
            },
            checkSyarat: {
            	validators: {
            		notEmpty: {
            			message: "Anda harus setuju dengan Syarat Ketentuan"
            		}
            	}
            }
        }
    });
    
    $('#formPekerjaan').bootstrapValidator({
    	fields: {
    		jenisPekerjaan: {
                validators: {
                	notEmpty: {
                        message: "Jenis Pekerjaan tidak boleh kosong"
                    }
                }
            },
            
            penghasilanPth: {
                validators: {
                    notEmpty: {
                        message: "Penghasilan Per Tahun tidak boleh kosong"
                    }
                }
            },
            namaKantor: {
                validators: {
                    notEmpty: {
                        message: "Nama Kantor tidak boleh kosong"
                    },
                    regexp: {
                    	regexp: /^[a-zA-Z0-9 ]+$/,
                        message: "Nama Kantor hanya boleh menggunakan huruf, angka dan spasi"
                    },
                    stringLength: {
                        max: 40,
                        message: "Nama Kantor maksimal 40 karakter"
                    }
                }
            },
            alamatKantor1: {
                validators: {
                    notEmpty: {
                        message: "Alamat Kantor tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9-,./ ]+$/,
                        message: "Alamat Kantor hanya boleh menggunakan huruf, angka, spasi dan - , . /"
                    },
                    stringLength: {
                        max: 40,
                        message: "Alamat Kantor maksimal 40 karakter"
                    }
                }
            },
            alamatKantor2: {
                validators: {
                    notEmpty: {
                        message: "Alamat Kantor 2 tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9-,./ ]+$/,
                        message: "Alamat Kantor 2 hanya boleh menggunakan huruf, angka, spasi dan - , . /"
                    },
                    stringLength: {
                        max: 40,
                        message: "Alamat Kantor 2 maksimal 40 karakter"
                    }
                }
            },
            kodePosKantor: {
                validators: {
                    notEmpty: {
                        message: "Kode Pos tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Kode Pos hanya boleh menggunakan angka"
                    },
                    stringLength: {
                    	min: 5,
                        max: 5,
                        message: "Kode Pos harus 5 karakter"
                    }
                }
            },
            jabatan: {
                validators: {
                    notEmpty: {
                        message: "Jabatan tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9 ]+$/,
                        message: "Jabatan hanya boleh menggunakan huruf, angka dan spasi"
                    },
                    stringLength: {
                        max: 15,
                        message: "Jabatan maksimal 15 karakter"
                    }
                }
            },
            mulaiBekerja: {
                validators: {
                    notEmpty: {
                        message: "Mulai Bekerja tidak boleh kosong"
                    }
                }
            },
            noTelponKantor: {
                validators: {
                    notEmpty: {
                        message: "Nomor Telpon Kantor tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Nomor Telpon Kantor hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        max: 12,
                        message: "Nomor Telpon Kantor maksimal 12 karakter"
                    }
                }
            },
            
            // Pemberi Dana
            namaPemberiDana: {
                validators: {
                	notEmpty: {
                        message: "Nama Pemberi Dana tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z ]+$/,
                        message: "Nama Pemberi Dana hanya boleh menggunakan huruf dan spasi"
                    },
                    stringLength: {
                        max: 40,
                        message: "Nama Pemberi Dana maksimal 40 karakter"
                    }
                }
            },
            jenisIdentitas: {
                validators: {
                    notEmpty: {
                        message: "Jenis Identitas tidak boleh kosong"
                    }
                }
            },
            noIdentitas: {
                validators: {
                	notEmpty: {
                        message: "Nomor Identitas tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Nomor Identitas hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        min: 16,
                        max: 16,
                        message: "Nomor Identitas harus 16 karakter"
                    }
                }
            },
            npwpPemberi: {
                validators: {
                	regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Npwp hanya boleh menggunakan angka"
                    },
                    stringLength: {
                    	min: 15,
                        max: 15,
                        message: "Npwp harus 15 karakter"
                    }
                }
            },
            alamatPemberi1: {
                validators: {
                	notEmpty: {
                        message: "Alamat Tempat Tinggal tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9-,./ ]+$/,
                        message: "Alamat Tempat Tinggal hanya boleh menggunakan huruf, angka, spasi dan - , . /"
                    },
                    stringLength: {
                        max: 40,
                        message: "Alamat Tempat Tinggal maksimal 40 karakter"
                    }
                }
            },
            alamatPemberi2: {
                validators: {
                	notEmpty: {
                        message: "Perumahan/Apartemen/Komplek tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9-,./ ]+$/,
                        message: "Perumahan/Apartemen/Komplek hanya boleh menggunakan huruf, angka, spasi dan - , . /"
                    },
                    stringLength: {
                        max: 100,
                        message: "Perumahan/Apartemen/Komplek maksimal 100 karakter"
                    }
                }
            },
            rtPemberi: {
                validators: {
                	notEmpty: {
                        message: "Rt tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Rt hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        max: 3,
                        message: "Rt maksimal 3 karakter"
                    }
                }
            },
            rwPemberi: {
                validators: {
                	notEmpty: {
                        message: "Rw tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Rw hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        max: 3,
                        message: "Rw maksimal 3 karakter"
                    }
                }
            },
            provinsiPemberi: {
                validators: {
                    notEmpty: {
                        message: "Provinsi tidak boleh kosong"
                    }
                }
            },
            kotaPemberi: {
                validators: {
                    notEmpty: {
                        message: "Kota/kab tidak boleh kosong"
                    }
                }
            },
            kecamatanPemberi: {
                validators: {
                    notEmpty: {
                        message: "Kecamatan tidak boleh kosong"
                    }
                }
            },
            kelurahanPemberi: {
                validators: {
                    notEmpty: {
                        message: "Desa/kel tidak boleh kosong"
                    }
                }
            },
            kodePosPemberi: {
                validators: {
                    notEmpty: {
                        message: "Kode Pos tidak boleh kosong"
                    }
                }
            },
            sumberDanaPemberi: {
                validators: {
                    notEmpty: {
                        message: "Sumber Dana tidak boleh kosong"
                    }
                }
            },
            penghasilanPemberiPth: {
                validators: {
                    notEmpty: {
                        message: "Penghasilan Per Tahun tidak boleh kosong"
                    }
                }
            },
            tujuanHubunganUsaha: {
                validators: {
                    notEmpty: {
                        message: "Tujuan Hubungan Usaha/Transaksi tidak boleh kosong"
                    }
                }
            },
            pekerjaanPemberi: {
                validators: {
                    notEmpty: {
                        message: "Pekerjaan tidak boleh kosong"
                    }
                }
            },
            jabatanPemberi: {
                validators: {
                    notEmpty: {
                        message: "Jabatan tidak boleh kosong"
                    }
                }
            },
            hubunganPemberi: {
                validators: {
                    notEmpty: {
                        message: "Hubungan tidak boleh kosong"
                    }
                }
            },
            tempatLahirPemberi: {
                validators: {
                	notEmpty: {
                        message: "Tempat Lahir tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9 ]+$/,
                        message: "Tempat Lahir hanya boleh menggunakan huruf, angka dan spasi"
                    },
                    stringLength: {
                        max: 40,
                        message: "Tempat Lahir maksimal 40 karakter"
                    }
                }
            },
            tanggalLahirPemberi: {
                validators: {
                    notEmpty: {
                        message: "Tanggal Lahir tidak boleh kosong"
                    }
                }
            },
            kewarganegaraanPemberi: {
                validators: {
                    notEmpty: {
                        message: "Kewarganegaraan tidak boleh kosong"
                    }
                }
            },
            jenisKelaminPemberi: {
                validators: {
                    notEmpty: {
                        message: "Jenis Kelamin tidak boleh kosong"
                    }
                }
            },
            statusPemberi: {
                validators: {
                    notEmpty: {
                        message: "Status Pernikahan tidak boleh kosong"
                    }
                }
            },
            noTelponKantorPemberi: {
                validators: {
                	notEmpty: {
                        message: "Nomor Telpon Kantor tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Nomor Telpon Kantor hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        max: 12,
                        message: "Nomor Telpon Kantor maksimal 12 karakter"
                    }
                }
            },
            noHandphonePemberi: {
                validators: {
                	notEmpty: {
                        message: "Nomor Handphone Kantor tidak boleh kosong"
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: "Nomor Handphone Kantor hanya boleh menggunakan angka"
                    },
                    stringLength: {
                        max: 12,
                        message: "Nomor Handphone Kantor maksimal 12 karakter"
                    }
                }
            },
            captcha: {
            	validators: {
            		notEmpty: {
            			message: "Captcha tidak boleh kosong"
            		}
            	}
            }
    	}
    });
});