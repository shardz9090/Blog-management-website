<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h2 class="card-title text-center">Register</h2>
                    <h5 class="card-title text-center">Please enter your details</h5>
                    <?php echo form_open_multipart('Home/register_form', array('id' => 'myForm')); ?>
                    <div class="form-label-group">
                        <label for=" fname">Full Name</label>
                        <input type="fname" id="fname" name="fname" class="form-control" placeholder="Full Name" required autocomplete="off">
                    </div>
                    <div class="form-label-group">
                        <label for="uImage">Photo</label>
                        <input type="file" id="uImage" name="uImage" class="form-control" required>
                    </div>
                    <div class="form-label-group">
                        <label for=" uname">Username</label>
                        <input type="uname" id="uname" name="uname" class="form-control" placeholder="Username" required autocomplete="off">
                    </div>
                    <div class="form-label-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required onkeyup="checkPasswordStrength(this.value)" autocomplete="off">
                        <div id="password-strength-indicator"></div>
                    </div>
                    <div class=" form-label-group">
                        <label for="conpassword">Confirm Password</label>
                        <input type="password" id="conpassword" name="conpassword" class="form-control" placeholder="Confirm Password" required>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Remember password?</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                    <hr class="my-4">
                    <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
                    <?php echo form_close(); ?>
                    <p>Already have an account?</p>
                    <a href="<?php echo base_url('signin') ?>">Sign in</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function hideAlert() {
        var overlay = document.getElementById('alert-overlay');
        overlay.style.display = 'none';
    }
</script>

<?php if ($this->session->flashdata('success')) : ?>
    <div id="alert-overlay">
        <div id="alert-content">
            <?php echo $this->session->flashdata('success'); ?>
            <button type="button" class="btn btn-primary" onclick="hideAlert()">OK</button>
        </div>
    </div>
    <script>
        // Show the overlay
        var overlay = document.getElementById('alert-overlay');
        overlay.style.display = 'block';
    </script>
<?php elseif ($this->session->flashdata('wrong')) : ?>
    <div id="alert-overlay">
        <div id="alert-content" style="background-color: #f44336;">
            <?php echo $this->session->flashdata('wrong'); ?>
            <button type="button" class="btn btn-danger" onclick="hideAlert()">OK</button>
        </div>
    </div>
    <script>
        // Show the overlay
        var overlay = document.getElementById('alert-overlay');
        overlay.style.display = 'block';
    </script>
<?php endif; ?>







<script>
    function checkPasswordStrength(password) {
        var indicator = document.getElementById('password-strength-indicator');
        var strength = 'Weak';

        // Regular expression to check for at least one alphabet and one digit
        var pattern = /^(?=.*[A-Za-z])(?=.*\d)/;

        if (password.length >= 8 && pattern.test(password)) {
            strength = 'Strong';
        } else if (password.length >= 6) {
            strength = 'Moderate';
        }

        indicator.innerText = 'Password Strength: ' + strength;
    }
</script>