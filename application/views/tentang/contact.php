<section>
    <div class="container">
        <div class="heading-text heading-section text-center">
            <?php $title = explode('|', $judul) ?>
        </div>
        <div class="row">
            <div class="col-lg-6" data-animate="swing">
                <h3 class="text-uppercase"><?= $title[0] ?></h3>
                <p>Terima kasih telah mengunjungi situs kami.</p>
                <p>Jika terdapat keluhan, pengaduan dan saran terkait kinerja pelayanan kami, silahkan mengirimkannya dengan mengisi form ini.</p>
                <div class="row m-t-40">
                    <div class="col-lg-6">
                        <address>
                            <strong>Kantor Pusat</strong><br>
                            Jl. Soekarno-Hatta No. 3<br>
                            Kubang Jaya, Siak Hulu, Kampar<br>
                            Riau - Indonesia <br>
                            <abbr title="Phone">P:</h4> (0761) 63381
                        </address>
                    </div>
                    <div class="col-lg-6">
                        <address>
                            <strong>Kantor Kas UIR</strong><br>
                            Jl. Khd. Nasution No. 113, Komplek UIR<br>
                            Simpang Tiga, Bukit Raya<br>
                            Pekanbaru, Riau - Indonesia<br>
                            <abbr title="Phone">P:</h4> (0761) 675119
                        </address>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-animate="zoomIn">
                <form class="widget-contact-form" novalidate action="#" role="form" method="post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Enter your Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="subject">Your Subject</label>
                            <input type="text" name="widget-contact-form-subject" required class="form-control required" placeholder="Subject...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                    </div>
                    <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                </form>
            </div>
        </div>
    </div>
</section>