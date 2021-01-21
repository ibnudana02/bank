<section id="page-content" class="background-grey p-b-0">
    <div class="container-fluid ">
        <?php if ($this->session->flashdata('message')) : ?>
            <div class="row justify-content-center">
                <div class="col-md-10 ">
                    <div role="alert" class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                        <strong><i class="fa fa-check-circle"></i> <?= $this->session->flashdata('message'); ?> </div>
                </div>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('syaratKetentuan') ?>" method="post">
            <div class="row justify-content-center">
                <div class="content col-md-10">
                    <div class="card">
                        <div class="card-header eform-header">
                            <h4>Ketentuan Pembukaan Rekening</h4>
                        </div>
                        <div class="card-body">
                            <p>Dengan ini, saya/kami sebagai pemohon, selanjutnya disebut &quot;Nasabah&quot;, menyatakan setuju atas semua Ketentuan Umum dan Persyaratan Pembukaan Rekening yang berlaku di PT. Bank Negara Indonesia (Persero) Tbk, yang selanjutnya disebut &quot;Bank&quot;, sebagai berikut :</p>

                            <h4>I. Rekening</h4>

                            <ol>
                                <li>Rekening adalah catatan pembukuan Bank atas produk simpanan yang dibuka oleh Nasabah perorangan pada Bank baik dalam Rupiah maupun mata uang asing atas dasar permohonan tertulis dari Nasabah atau melalui permohonan nasabah melalui sistem e-Banking milik Bank menurut tata cara dan persyaratan yang tercantum baik dalam Ketentuan Umum dan Persyaratan Pembukaan Rekening ini maupun dalam Ketentuan Umum dan Persyaratan Pembukaan Rekening melalui Elektronik Banking (e-Banking).</li>
                                <li>Dalam hal Rekening dibuka dengan mata uang asing maka Bank tidak bertanggung jawab atas perubahan nilai mata uang asing terhadap Rupiah.</li>
                                <li>Jenis-jenis Rekening adalah: Tabungan, Giro, Deposito. Pembukaan rekening melalui e-Form hanya untuk rekening Tabungan.</li>
                                <li>Pengertian Rekening sebagaimana dimaksud pada butir I.1 mencakup Rekening Gabungan yaitu Rekening yang dimiliki oleh lebih dari satu Nasabah yang dapat terdiri dari gabungan orang pribadi. Perjanjian pembukaan Rekening Gabungan dituangkan dalam Perjanjian tersendiri dan wajib pula ditandatangani oleh seluruh Nasabah anggota Rekening Gabungan.</li>
                                <li>Bilamana Nasabah membuka lebih dari satu Rekening pada Bank, baik pada satu Kantor Cabang Bank maupun lebih, maka seluruh Rekening tersebut disetujui oleh Nasabah sebagai satu kesatuan.</li>
                                <li>Bank atas pertimbangannya sendiri berhak menolak permohonan pembukaan Rekening oleh Nasabah dan memberitahukan kepada calon nasabah.</li>
                            </ol>

                            <h4>II. Data Nasabah/Customer Information File(CIF)</h4>

                            <ol>
                                <li>Dalam rangka penggunaan produk/fasilitas/jasa Bank, Nasabah wajib menunjukkan dan menyampaikan informasi, data dan dokumen pendukung yang dipersyaratkan Bank sebagaimana yang disampaikan oleh Petugas Bank dan dimuat dalam media resmi Bank.</li>
                                <li>Bank berhak meminta informasi, data dan dokumen pendukung serta menatakerjakan data profil Nasabah sesuai dengan kebutuhan dan peraturan perundang-undangan yang berlaku.</li>
                                <li>Nasabah dengan ini menjamin bahwa semua data, informasi dan dokumen pendukung yang ditunjukkan dan diserahkan kepada Bank adalah benar, lengkap, asli, sah dan terbaru sesuai dengan peraturan perundang-undangan yang berlaku.</li>
                                <li>Nasabah wajib segera memberitahukan dan menyampaikan kepada Bank setiap perubahan data, informasi dan dokumen pendukung yang dipersyaratkan Bank. Perubahan tersebut efektif berlaku setelah diterima dan/atau disetujui Bank.</li>
                                <li>Nasabah dengan ini menyatakan bertanggung jawab sepenuhnya atas segala kerugian dan risiko yang dialami sebagai akibat dari kelalaian/ keterlambatan/tidak diberitahukannya perubahan sebagaimana diatur dalam butir II.4 tersebut kepada Bank.</li>
                            </ol>

                            <h4>III. Transaksi</h4>

                            <ol>
                                <li>Transaksi adalah kegiatan pembukuan pada suatu Rekening termasuk penambahan saldo dan pengurangan saldo pada Rekening yang pengaturannya mengacu pada media resmi Bank.</li>
                                <li>Dana yang disetorkan/dipergunakan/ditransaksikan pada Bank tidak berasal dari/untuk tujuan tindak pidana pencucian uang (moneylaundering).</li>
                                <li>Setiap Transaksi yang menggunakan suratberharga/ warkat kliring dan sarana perbankan lainnya berlaku pula ketentuan perundangundangan yang mengatur tentang hal tersebut.</li>
                                <li>Nasabah bertanggung jawab sepenuhnya atas keamanan perintah Transaksi/surat berharga yang diberikan kepada Bank, termasuk penyalahgunaan dalam bentuk apapun, pemalsuan, dan penggandaan yang menyebabkan tindak kejahatan.</li>
                                <li>Apabila Rekening dibuka dalam mata uang asing maka penarikan dana dalam mata uang asing yang sama tergantung pada ketersediaan mata uang asing tersebut pada Bank dan tunduk pada ketentuan Bank mengenai komisi sebagaimana yang tertuang dalam media resmiBank.</li>
                                <li>Penarikan dana di rekening dalam mata uang yang berbeda tergantung pada ketersediaan mata uang asing tersebut pada Bank dan tunduk pada ketentuan Bank mengenai komisi dan nilai tukar mata uang tersebut sebagaimana yang tertuang dalam media resmi Bank.</li>
                                <li>Setoran dalam mata uang kertas atau mata uang asing yang sama akan diberlakukan dengan cara sesuai dengan peraturan dan ketentuan yang tertuang dalam media resmi Bank.Berdasarkan itikad baik, Bank berhak melakukan koreksi terhadap pembukuan Rekening Nasabah.</li>
                                <li>Dalam rangka memenuhi peraturan perundang-undangan yang berlaku maupun atas pertimbangan Bank sendiri, Bank berhak menunda, menolak dan/atau membatalkan Transaksi dan memberitahukan kepada Nasabah/Calon Nasabah.</li>
                                <li>Pelaksanaan transaksi valuta asing terhadap Rupiah yang dilakukan oleh Nasabah wajib mengikuti ketentuan dan peraturan perundangundangan yang berlaku, termasuk kewajiban untuk menyerahkan dokumen-dokumen yang dipersyaratkan oleh kebijakan Bank dan/atau peraturan Bank Indonesia dan/atau Peraturan pemerintah yang berlaku dan dipedomani oleh Bank.</li>
                                <li>Apabila terdapat perbedaan antara catatan pembukuan Bank dengan catatan yang ada pada Nasabah, maka yang berlaku adalah catatan pembukuan Bank, dan dengan ini nasabah menyatakan, mengetahui, memahami, mengakui dan menerima bahwa catatan pembukuan Bank merupakan alat bukti yang sah dan mengikat Nasabah.</li>
                            </ol>

                            <h4>IV. Bunga, Pajak, dan Biaya</h4>

                            <ol>
                                <li>Pendapatan bunga yang diterima oleh Nasabah akan dikenakan pajak yang besarnya sesuai dengan ketentuan perpajakan yang berlaku.</li>
                                <li>Ketentuan mengenai bunga yang diterima dan pajak atas bunga yang diterima serta biaya yang harus ditanggung oleh Nasabah terkait dengan produk/fasilitas/jasa Bank ditentukan oleh Bank, dan dapat berubah sewaktu-waktu, dengan pemberitahuan terlebih dahulu dari Bank kepada Nasabah melalui media resmi Bank. Dengan ini, Nasabah memberikan kuasa kepada Bank untuk sewaktu-waktu mendebetRekening Nasabah untuk keperluan pembayaran pajak dan biayadimaksud.</li>
                            </ol>

                            <h4>V. Nasabah Meninggal Dunia/Pailit/Dibubarkan</h4>

                            <ol>
                                <li>Dalam hal Nasabah meninggal dunia atau dinyatakan pailit atau diletakkan dibawah pengawasan pihak yang ditunjuk untuk itu, Bank sewaktu-waktu berhak untuk menonaktifkan rekening Nasabah dan hanya akan mengalihkan/menyerahkan hak Nasabah kepada ahli waris atau pihak yang sah yang ditunjuk sesuai ketentuan Bank sebagaimana yang tertuang dalam media resmi Bank maupun peraturan perundang undangan yang berlaku.</li>
                                <li>Bank berhak meminta dokumen yang dapat diterima sebagai bukti yang sah bagi Bank terkait kedudukan ahli waris atau pihak yang ditunjuk sebagaimana dimaksud.</li>
                            </ol>

                            <h4>VI. Kehilangan dan Penyalahgunaan Rekening/Fasilitas Lainnya</h4>

                            <ol>
                                <li>Dalam hal bukti kepemilikan Rekening hilang, maka Nasabah wajib memberitahukan kepada Bank, melalui Kantor Cabang terdekat selama jam kerja dengan disertai dokumen pendukung sebagaimana yang tertuang dalam media resmi Bank.</li>
                                <li>Dalam hal kartu ATM atau perangkat fasilitas Transaksi Bank melalui sarana elektronik/e-Banking (telepon seluler, BNI e-Secure/m Secure,dsb) hilang atau terjadi permasalahan atas penggunaan fasilitas e-Banking, maka Nasabah wajib memberitahukan kepada Bank, melaluiKantor Cabang BNI terdekat atau BNI Call di 1500046 atau melalui ponsel di (021)1500046/68888.</li>
                                <li>Bank akan segera melakukan pemblokiran atas Rekening dan/atau kartu ATM dan/atau penggunaan fasilitas e-Banking berdasarkan laporan Nasabah apabila terindikasi terjadi penyalahgunaan rekening yang dilengkapi dengan dokumen pendukung sebagaimana yang tertuang dalam media resmi Bank.</li>
                                <li>Nasabah bertanggung jawab terhadap setiap transaksi yang terjadi sebelum diterimanya laporan kehilangan bukti kepemilikan Rekening dan/atau fasilitas lainnya dari Nasabah.</li>
                                <li>Bank berhak sesuai dengan pertimbangannya sendiri untuk tidak menerbitkan penggantian bukti kepemilikan Rekening yang dilaporkan hilang apabila Bank mencurigai adanya suatu keganjilan atau itikad tidak baik dari hilangnya bukti kepemilikan Rekening tersebut.</li>
                                <li>Setiap penggantian bukti kepemilikan Rekening dan/atau fasilitas lainnya yang dilaporkan hilang, Nasabah akan dikenakan biaya administrasi yang besarnya ditentukan oleh Bank yang tertuang pada media resmi Bank.</li>
                                <li>Nasabah bertanggung jawab sepenuhnya atas segala tuntutan dan kerugian yang timbul karena kehilangan/pemalsuan dan/atau penyalahgunaan bukti kepemilikan Rekening dan/atau tanda pengguna dan nomor identifikasi pribadi/perangkat fasilitas lainnya, yang dilakukan oleh Nasabah atau pihak lainnya.</li>
                            </ol>

                            <h4>VII. Ketentuan Umum Produk dan Fasilitas</h4>

                            <h5>A. Tabungan</h5>

                            <ol>
                                <li>Sebagai bukti kepemilikan Rekening Tabungan, Bank menerbitkan Buku Tabungan, Kartu Debit BNI , rekening koran atau estatementyang ditetapkan oleh Bank dan bukti tersebut harus dipegang/disimpan Nasabah.</li>
                                <li>Nasabah wajib menunjukkan bukti kepemilikan Rekening setiap kali melakukan penarikan dana melalui teller Bank ataupun untuk memberikan instruksi Transaksi lainnya kepada Bank.</li>
                                <li>Untuk pembukaan Tabungan, Nasabah harus melakukan setoran sebesar minimum nominal yang dipersyaratkan Bank sesuai jenis tabungannya yang tertuang pada media resmi Bank.</li>
                                <li>Batas minimum dan tata cara setoran berikutnya ke Rekening Tabungan ditetapkan sesuai jenis tabungannya sebagaimana tertuang dalam media resmi Bank. Dalam hal penyetoran ditetapkan dengan cara pemindahbukuan secara otomatis setiap bulan dari Rekening Nasabah lainnya (rekening afiliasi) maka Nasabah dengan ini memberi kuasa kepada Bank untuk melakukan pendebetan secara langsung Rekening Nasabah setiap bulan pada tanggal dan jumlah berdasarkan permintaan Nasabah. Bank tidak berkewajiban melaksanakan pendebetan jika saldo di rekening afiliasi tidak mencukupi.</li>
                                <li>Nasabah wajib memelihara saldo minimum yang dipersyaratkan oleh Bank sesuai jenis tabungannya. Nasabah akan dikenakan denda yang besarnya ditentukan Bank apabila saldo Tabungan dibawah saldo minimum yang saat ini berlaku maupun apabila terdapat perubahan. Ketentuan mengenai saldo minimum dan pengenaan denda yang dikenakan tertuang dalam media resmiBank. Perubahan nominal saldo minimum atau denda ditetapkan oleh Bank dan akan diberitahukan kepada nasabah melalui media resmi Bank.</li>
                                <li>Catatan mutasi Transaksi Rekening Tabungan menggunakan Buku Tabungan, Rekening Koran atau Rekening Koran elektronik (e-Statement) yang ditentukan oleh Bank. Dalam hal dipergunakan Buku Tabungan maka mutasi Transaksi Rekening Tabungan agar selalu di update (dicetak). Dalam hal laporan mutasi Transaksi Rekening dilakukan melalui pengiriman e-mail oleh Bank(e- Statement), maka Nasabah wajib segera memberitahukan kepada Bank jika terdapat perubahan alamat e-mail, dan perubahan tersebut efektif berlaku setelah diterima dan/atau disetujui Bank.</li>
                                <li>Terhadap jenis Tabungan yang memiliki ketentuan batasan usia maksimum yang dibuka oleh Nasabah, maka dalam hal Nasabah telah melewati batasan usia dimaksud, Bank berhak dengan ini melakukan konversi ke jenis Tabungan lainnya yang ditentukan oleh Bank dengan syarat dan ketentuan (antara lain fitur, bunga, biaya, dsb) mengikuti syarat dan ketentuan pada jenis Tabungan setelah konversi. Jenis tabungan yang memiliki batasan usia maksimum serta jenis tabungan setelah konversi adalah sebagaimana tertuang dalam media resmi Bank.</li>
                            </ol>

                            <h4>&nbsp;</h4>

                            <h5>B. Fasilitas Transaksi Perbankan Melalui Sarana Elektronik (e-Banking)</h5>

                            <ol>
                                <li>Bank menyediakan fasilitas bagi Nasabah untuk dapat melakukan Transaksi perbankan melalui sarana elektronik (e-Banking), yaitu:
                                    <ol style="list-style-type:lower-alpha">
                                        <li>BNI ATM dan derivatifnya (ATM Non Tunai, ATM Setoran Tunai) adalah fasilitas Transaksi perbankan 24 (dua puluh empat) jam melalui mesin ATM (Anjungan Tunai Mandiri).</li>
                                        <li>BNI Phone Banking adalah fasilitas Transaksi perbankan 24(dua puluh empat) jam dengan memberikan perintah Transaksikepada Bank melalui telepon.</li>
                                        <li>BNI SMS Banking adalah salah satu fasilitas transaksi perbankan24 (dua puluh empat) jam melalui fasilitas e-Banking dari BNIuntuk mengakses rekening Nasabah melalui Telepon Selularyang dimilikinya (provider jaringan GSM dan CDMA) dengancara mengirimkan SMS (Short Message Service) perintahdalam format tertentu ke nomor 3346. BNI SMS Banking jugadapat diakses melalui telpon seluler oleh Nasabah denganmendownload aplikasinya terlebih dahulu.</li>
                                        <li>BNI Internet Banking adalah salah satu fasilitas transaksiperbankan 24 (dua puluh empat) jam melalui fasilitas e-Bankingdari BNI untuk mengakses rekening yang dimiliki Nasabahmelalui jaringan internet dengan menggunakan perangkatlunak browser pada komputer dan telpon seluler.</li>
                                        <li>BNI Mobile Banking adalah layanan e-Banking dari Bank yangdapat diakses melalui telpon seluler oleh Nasabah denganmendownload aplikasinya terlebih dahulu.</li>
                                    </ol>
                                </li>
                                <li>Jenis Rekening simpanan perorangan yang dapat diberikan fasilitas e-Banking ditetapkan oleh Bank.</li>
                                <li>Untuk dapat menggunakan fasilitas e-Banking, Nasabah harus memiliki tanda pengguna dan nomor identifikasi pribadi fasilitas e- Banking, yaitu:
                                    <ol style="list-style-type:lower-alpha">
                                        <li>BNI ATM berupa Kartu Debit BNI dan PIN (Personal Identification Number) dari Kartu Debit BNI yang digunakan untuk melakukanTransaksi perbankan melalui mesin ATM, baik melalui jaringanBNI ATM, jaringan ATM Link, jaringan ATM Bersama, jaringanATM Cirrus dan jaringan ATM lainnya yang ditentukan olehBank. Kartu Debit BNI juga dapat digunakan untuk pembayaranTransaksi belanja pada merchant yang memasang logoMasterCard atau merchant lainnya yang ditentukan oleh Bank.</li>
                                        <li>BNI Phone Banking berupa user id (berupa nomor BNI Debet Card) dan PIN BNI Phone Banking.</li>
                                        <li>BNI SMS Banking berupa user id (berupa nomor telepon seluler) dan PIN BNI SMS Banking.</li>
                                        <li>BNI Internet Banking berupa user id dan password BNI Internet Banking serta perangkat alat pengaman tambahan yaitu BNI e- Secure/m-Secure.</li>
                                        <li>BNI Mobile Banking berupa user id, nomor telepon seluler, PIN BNI Mobile Banking dan password transaksi.</li>
                                    </ol>
                                </li>
                                <li>Persyaratan dan tata cara pendaftaran serta pengaktifan fasilitas e-Banking ditetapkan oleh Bank mengacu pada dokumen persyaratan dan ketentuan registrasi masing-masing fasilitas e-Banking sebagaimana tertuang dalam Syarat dan Ketentuan Produk Elektronik Banking dan media resmi Bank.</li>
                                <li>Tanda pengguna dan nomor identifikasi pribadi fasilitas e-Banking merupakan alat otorisasi dan verifikasi bagi Bank untuk melaksanakan Transaksi yang diinstruksikan oleh Nasabah melalui fasilitas e-Banking.</li>
                                <li>Instruksi yang disampaikan oleh Nasabah menggunakan tanda pengguna dan nomor identifikasi pribadi fasilitas e-Bankingmempunyai kekuatan hukum yang sama dengan perintah tertulis yang ditandatangani oleh Nasabah.</li>
                                <li>Tanda pengguna dan nomor identifikasi pribadi fasilitas e-Banking hanya diketahui dan menjadi rahasia pribadi Nasabah. Setiappenyalahgunaan tanda pengenal nomor identifikasi pribadifasilitas e-Banking menjadi tanggung jawab dan resiko Nasabahsepenuhnya.</li>
                                <li>Untuk Transaksi yang diinstruksikan melalui BNI Phone Banking, Bank berhak melakukan verifikasi dan identifikasi Nasabah sebelum dan menggunakan fasilitas tersebut berdasarkan tata carayang ditentukan dari waktu ke waktu oleh Bank.</li>
                                <li>Semua Transaksi yang dilakukan melalui fasilitas e-Banking akanmendebet dan tercatat pada Rekening yang terdaftar pada fasilitase- Banking.</li>
                                <li>Bank tidak berkewajiban melaksanakan instruksi dari Nasabah jika saldo di Rekening Nasabah tidak mencukupi.</li>
                                <li>Dokumen berupa catatan-catatan Transaksi, surat-surat serta dokumen-dokumen lain yang disimpan dan dipelihara oleh Bank secara tertulis di atas kertas atau media lain maupun rekaman yang dapat dilihat, dibaca ataupun didengar merupakan alat bukti yang sah dan lengkap atas Transaksi yang dilaksanakan Nasabah melalui fasilitas e-Banking.</li>
                                <li>Jenis Transaksi perbankan yang dapat dilakukan melalui fasilitase-Banking ditentukan oleh Bank sebagaimana tertuang dalamSyarat dan Ketentuan Produk Elektronik Banking dan media resmiBank. Perubahan atas jenis Transaksi dimaksud akan diberitahukankepada nasabah dari waktu ke waktu melalui media resmi Bank.</li>
                                <li>Setiap Transaksi melalui fasilitas e-Banking dibatasi nominal danfrekuensinya dengan suatu nominal dan frekuensi maksimum pertransaksi dan/atau per hari yang ditentukan oleh Bank atau karenasebab lain yang ditentukan oleh Bank sebagaimana tertuang dalamSyarat dan Ketentuan Produk Elektronik Banking dan media resmi Bank.</li>
                                <li>Untuk setiap Transaksi yang dilakukan melalui fasilitas e-Banking,Nasabah akan dibebankan biaya dan tarif sesuai dengan ketentuanyang berlaku di Bank sebagaimana yang tertuang dalam Syarat danKetentuan Produk Elektronik Banking dan media resmi Bank.</li>
                                <li>Nasabah wajib memastikan bahwa perangkat komputer dan/atautelpon seluler yang digunakan untuk mengakses BNI e- Banking,bebas dari semua jenis virus atau bentuk aplikasi-aplikasi lainnyayang dapat merugikan Nasabah.</li>
                                <li>Bank sewaktu-waktu dan/atau setiap saat berhak menghentikan setiap fasilitas Elektronik Banking yang diperoleh Nasabah jikaNasabah tidak memenuhi /melanggar ketentuan/kebijakan yangtelah ditetapkan oleh Bank sebagaimana tertuang dalam Syaratdan Ketentuan Produk Elektronik Banking dan media resmi Bankdan atau perundang-undangan yang berlaku, atas hal tersebutbank akan menginformasikan penghentian dimaksud kepadaNasabah dalam bentuk dan sarana apapun.</li>
                            </ol>

                            <h5>C. Fasilitas Pembayaran Tagihan dan Transfer Otomatis</h5>

                            <ol>
                                <li>Nasabah memberi kuasa kepada Bank untuk melaksanakan pembayaran tagihan (telepon/listrik/ telepon pasca bayar/kartu kredit, dll) senilai tagihan atau nilai tagihan yang ditentukan oleh penyedia jasa. Kuasa tersebut berlaku terus menerus sejak ditandatanganinya Formulir Pembukaan Rekening dan berakhir pada saat Rekening ditutup, tidak tersedianya dana pada RekeningNasabah selama 3 periode pembayaran berturut-turut, nomor tagihan salah/tidak ditemukan pada sistem penyedia jasa, atau apabila kuasa tersebut diakhiri oleh Nasabah sebagaimana dimaksud dalam butir VII.F.4 ini.</li>
                                <li>Nasabah bertanggung jawab sepenuhnya atas pemutusan hubungan telepon/listrik/telepon pasca bayar/kartu kredit atau risiko lainnya sebagai akibat tidak dapat dilakukannya pembayaran tagihan atau transfer otomatis karena tidak cukupnya dana pada Rekening Nasabah, Bank belum menerima nilai tagihan yang harus dibayarkan dari penyedia jasa atau akibat kegagalan sistem.Untuk setiap Transaksi pembayaran tagihan dan transfer otomatis, Nasabah akan dibebankan biaya yang tertuang dalam media resmi Bank.</li>
                                <li>Untuk setiap Transaksi pembayaran tagihan dan transfer otomatis, Nasabah akan dibebankan biaya yang tertuang dalam media resmi Bank.</li>
                                <li>Bila Nasabah bermaksud menghentikan fasilitas pembayarantagihan atau transfer otomatis, maka Nasabah wajibmemberitahukan secara tertulis kepada Bank. Apabila Nasabahmenggunakan fasilitas Phone Banking maka Nasabah dapatmenghubungi BNI Call untuk mengajukan pemberhentian palinglambat 7 (tujuh) hari kerja sebelum dimulainya masa pembayaranfasilitas yang bersangkutan.</li>
                            </ol>

                            <h4>VIII. Rekening Tidak Aktif, Pemblokiran dan Penutupan Rekening</h4>

                            <ol>
                                <li>Untuk kepentingan perlindungan Nasabah dan simpanannya, Bank atas pertimbangannya sendiri berhak melakukan pemblokiran fasilitas e-Banking tanpa persetujuan Nasabah terlebih dahulu.</li>
                                <li>Bank berhak memblokir dan/atau menutup Rekening apabila terdapat dugaan penyalahgunaan Rekening dan/atau pembukaan/penggunaan Rekening serta data/informasi/dokumen pendukung terkait Rekening yang tidak sesuai dengan ketentuan perundang-undangan yang berlaku.</li>
                                <li>Dalam hal Rekening Tabungan dan Giro selama 6 (enam) bulan berturut-turut maupun untuk periode lain yang ditetapkan tidak bermutasi debet maupun kredit selain pendebetan dan pengkreditan yang dilakukan oleh sistem Bank untuk biaya administrasi, pajak, denda dan bunga, maka Rekening Tabungan dan Giro akan diberi status tidak aktif. Perubahan periode untuk rekening yang diberi status tidak aktif akan diberitahukan oleh Bank kepada Nasabah dalam media resmi Bank.</li>
                                <li>Rekening dengan status tidak aktif dikenakan biaya yang besarnya tertuang dalam media resmi Bank.</li>
                                <li>Rekening dengan status tidak aktif dapat berubah menjadi Rekening aktif kembali apabila Nasabah melakukan transaksi atas Rekening tersebut baik transaksi debet maupun kredit melalui Kantor Cabang Bank atau fasilitas e-Banking.</li>
                                <li>Bank berhak secara otomatis menutup Rekening Tabungan dan Giro yang berstatus tidak aktif sebagaimana dimaksud butir VIII.3 di atas dan bersaldo Rp. 0,- (saldo nihil) maupun untuk jumlah saldo tertentu yang dari waktu ke waktu akan diberitahukan oleh Bank kepada Nasabah melalui media resmi Bank.</li>
                                <li>Penutupan Rekening Giro atas permintaan Nasabah dapat dilakukan dengan pemberitahuan selambat-lambatnya 1 (satu) hari kerja sebelumnya.</li>
                                <li>Bank berhak dan berwenang untuk melakukan pemblokiran dan atau penutupan rekening apabila diduga nasabah berbentuk Shell Bank atau Bank yang mengizinkan rekeningnya digunakan oleh Shell Bank. Dalam hal ini yang dimaksud dengan Shell Bank adalah bank yang tidak mempunyai kehadiran secara fisik di wilayah hukum Bank tersebut didirikan dan memperoleh izin, dan tidak berafiliasi dengan kelompok usaha jasa keuangan yang menjadi subyek pengawasan terkonsolidasi yang efektif.</li>
                            </ol>

                            <h4>IX. Lain-lain</h4>

                            <ol>
                                <li>Media Resmi Bank adalah sarana penyampaian informasi dari Bank kepada Nasabah berupa website/SMS/BNI Call/Surat/Pengumuman di Kantor Cabang Bank/Publikasi resmi di media massa.</li>
                                <li>Dana yang tersedia dalam Rekening Nasabah dijamin dalam program penjaminan yang diselenggarakan Lembaga Penjamin Simpanan (LPS) sesuai dengan syarat dan ketentuan yang ditetapkan oleh LPS.</li>
                                <li>Perjanjian ini telah disesuaikan dengan Ketentuan PeraturanPerundang-undangan termasuk Ketentuan Peraturan Otoritas JasaKeuangan.</li>
                                <li>Bank tidak bertanggung jawab atas terjadinya hal-hal diluar kekuasaanBank (Force Majeure).</li>
                                <li>Bank berwenang melakukan koreksi mutasi dan saldo RekeningNasabah apabila terjadi kekeliruan pembukuan oleh Bank tanpaberkewajiban memberitahukan alasannya kepada Nasabah.</li>
                                <li>Dalam hal salah satu ketentuan dalam Perjanjian ini dinyatakan batalberdasarkan suatu peraturan perundang-undangan, maka pernyataanbatal tersebut tidak mengurangi keabsahan atau menyebabkanbatalnya persyaratan atau ketentuan lain dalam Perjanjian ini dan olehkarenanya ketentuan lain dalam Perjanjian ini tetap sah dan mengikat.</li>
                            </ol>

                            <h4>X. Hukum Yang Berlaku dan Domisili</h4>

                            <ol>
                                <li>Ketentuan Umum dan Persyaratan Pembukaan Rekening ini serta pelaksanaannya lebih lanjut tunduk pada hukum negara Republik Indonesia.</li>
                                <li>Bank dan Nasabah dengan ini sepakat bahwa segala gugatan akandiajukan di Pengadilan Negeri di wilayah hukum dimana Kantor Cabang BNI pembuka Rekening Nasabah berada.</li>
                                <li>Penundukan pada domisili tersebut di atas tidak membatasi hak Bank untuk mengajukan gugatan terhadap Nasabah dalam domisili lainnya dalam wilayah Indonesia maupun luar Indonesia. Dengan menandatangani Formulir Ketentuan Umum dan Persyaratan Pembukaan Rekening ini, saya/kami menyatakan dengan ini menerima dan setuju mengikatkan diri pada semua syarat dan ketentuan umum yang tertuang dalam Formulir ini.</li>
                            </ol>
                            <br>
                            <div class="form-check">
                                <label class="form-check-label"><input type="checkbox" class="form-check-input" id="ketentuan" name="ketentuan" value="setuju" <?php echo set_checkbox('ketentuan', 'setuju', FALSE); ?>> &nbsp;&nbsp;Saya Setuju</label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="btnLanjut">
                                <button id="btnLanjut" class="btn btn-google" type="submit" name="input" value="input" disabled>Selanjutnya <i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<script src="<?= base_url('assets/new/') ?>js/jquery.js"></script>
<script>
    $(document).ready(function() {
        var ketentuan = '';
        if (ketentuan != "") {
            $('#ketentuan').prop('checked', true);

            $('#ketentuan').click(function() {
                if ($(this).is(':checked')) {
                    $('#btnLanjut').prop('disabled', false);
                } else {
                    $('#btnLanjut').prop('disabled', true);
                }
            });
        } else {
            $('#btnLanjut').prop('disabled', true);

            $('#ketentuan').click(function() {
                if ($(this).is(':checked')) {
                    $('#btnLanjut').prop('disabled', false);
                } else {
                    $('#btnLanjut').prop('disabled', true);
                }
            });
        }
    });
</script>