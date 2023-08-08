<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h2 class="card-title text-center">Register</h2>
                    <h5 class="card-title text-center">Please enter your details</h5>
                    <?php echo form_open_multipart('Home/register_form', array('id' => 'myForm')); ?>
                    <form id="myForm">
                        <div class="form-label-group">
                            <label for="fname">Full Name</label>
                            <input type="fname" id="fname" name="fname" class="form-control" placeholder="Full Name" autocomplete="off">
                        </div> <?php echo form_error('fname') ?></br>
                        <div class="form-label-group">
                            <label for="uImage">Photo</label>
                            <input type="file" id="uImage" name="uImage" class="form-control">
                            <div class="form-label-group">
                                <label for=" uname">Username</label>
                                <input type="uname" id="uname" name="uname" class="form-control" placeholder="Username" autocomplete="off">
                            </div><?php echo form_error('uname') ?></br>
                            <div class="form-label-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" onkeyup="checkPasswordStrength(this.value)" autocomplete="off">
                                <div id="password-strength-indicator"></div>
                            </div><?php echo form_error('password') ?></br>
                            <div class=" form-label-group">
                                <label for="conpassword">Confirm Password</label>
                                <input type="password" id="conpassword" name="conpassword" class="form-control" placeholder="Confirm Password">
                            </div><?php echo form_error('conpassword') ?></br>
                            <div class="form-label-group">
                                <label for="mnum">Mobile Number</label>
                                <input type="tel" id="mnum" name="mnum" class="form-control" placeholder="Mobile Number" autocomplete="off">
                            </div><?php echo form_error('mnum') ?></br>
                            <div class="form-label-group">
                                <label for="birth_year">Birth Year</label>
                                <select id="birth_year" name="birth_year" class="form-control">
                                    <?php
                                    $currentYear = date('Y');
                                    $startYear = 1950;
                                    $endYear = 2015;

                                    for ($year = $endYear; $year >= $startYear; $year--) {
                                        echo "<option value='$year'>$year</option>";
                                    }
                                    ?>
                                </select>
                            </div><?php echo form_error('birth_year') ?></br>
                            <div class="form-label-group">
                                <label for="gender">Gender</label>
                                <select id="gender" name="gender" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div><?php echo form_error('gender') ?></br>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                            <hr class="my-4">
                            <?php echo form_close(); ?>
                            <p>Already have an account?</p>
                            <a href="<?php echo base_url('signin') ?>">Sign in</a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#submitBtn").click(function() {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('home/register_form'); ?>",
                    data: $("#myForm").serialize(), // Serialize the form data
                    success: function(response) {

                        $("#responseMessage").html(response);
                    }
                });
            });
        });

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