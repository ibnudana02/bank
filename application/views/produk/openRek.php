<section id="page-content">
    <div class="container">
        <div class="heading-text heading-section text-center">
            <?php $title = explode('|', $judul) ?>
            <h4><?= $title[0] ?></h4>
        </div>
        <div class="row justify-content-center">
            <div class="content col-md-11">
                <div class="card">
                    <div class="card-body">
                        <form id="wizard7" class="wizard needs-validation" data-style="1" novalidate>
                            <h3>Data Diri</h3>
                            <div class="wizard-content">
                                <div class="h5 mb-4">Please fill with your account details</div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <div class="input-group show-hide-password">
                                            <input class="form-control" name="password" placeholder="Enter password" type="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password2">Confirm Password</label>
                                        <div class="input-group show-hide-password">
                                            <input class="form-control" name="password2" placeholder="Enter password" type="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Personal Information</h3>
                            <div class="wizard-content">
                                <div class="h5 mb-4">Please fill with your personal info</div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter your Name">
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
                            <h3>Mailing Address</h3>
                            <div class="wizard-content">
                                <div class="h5 mb-4">Mailing Address</div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="Enter your Street Address">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="address2">Address 2</label>
                                        <input type="text" class="form-control" name="address2" placeholder="Enter your Apartment, studio, or floor">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city" placeholder="Enter your City">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Zip Code:</label>
                                        <input type="number" class="form-control" name="zip" placeholder="Enter Zip Code">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="state">State</label>
                                        <select name="state" class="form-control">
                                            <option>Australia</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="country">Country</label>
                                        <select name="country" class="form-control">
                                            <option>United States</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
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
    //Validation
    wizard7.validate({
        errorClass: 'is-invalid',
        validClass: 'is-valid',
        errorElement: "div",
        rules: {
            // Step 1 - Account information
            username: {
                required: true
            },
            email: {
                required: true,
                email: true,
                minlength: 8
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