<!-- <head>
    <?php echo $script_captcha; ?>
</head>
<div class="contact-page ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-xs-12">
                <div class="contact-form kontak">
                    <div class="row">
                        <h3 class="text-center struktur">Hubungi Kami</h3>
                    </div>
                    <div class="row">
                        <form id="contactForm" method="POST" action="<?= base_url('contact') ?>" class="contact-form">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea id="message" rows="7" placeholder="Message" class="form-control" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?php echo $captcha ?>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" id="submit" class="contact-btn">Submit</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase">Get In Touch</h3>
                <p>The most happiest time of the day!. Suspendisse condimentum porttitor cursus. Duis nec nulla
                    turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada
                    fermentum bibendum.</p>
                <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum
                    gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                    ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci.
                    Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                <div class="row m-t-40">
                    <div class="col-lg-6">
                        <address>
                            <strong>Polo, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</h4> (123) 456-7890
                        </address>
                    </div>
                    <div class="col-lg-6">
                        <address>
                            <strong>Polo Office</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</h4> (123) 456-7890
                        </address>
                    </div>
                </div>
                <div class="social-icons m-t-30 social-icons-colored">
                    <ul>
                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="widget-contact-form" novalidate action="https://inspirothemes.com/polo/include/contact-form.php" role="form" method="post">
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