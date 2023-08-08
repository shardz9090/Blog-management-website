<script>
    <?php if ($this->session->flashdata('alert_message')) { ?>
        var alertMessage = "<?php echo $this->session->flashdata('alert_message'); ?>";
        alert(alertMessage);
    <?php } ?>
</script>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h1 class="card-title text-center">Sign In</h1>
                    <h5 class="card-title text-center">Enter you login details</h5>
                    <?php echo form_open('Home/login_form') ?>
                    <div class="form-label-group">
                        <label for=" uname">Username</label>
                        <input type="uname" id="uname" name="uname" class="form-control" placeholder="Email address" autofocus>
                    </div>
                    </br>
                    <div class=" form-label-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    </br>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                    <?php echo form_close(); ?>
                    </br>
                    <a href="<?php echo base_url('register') ?>">Create Account</a> </br></br>
                    <a href="<?php echo base_url('adminlogin') ?>">Admin Login</a>
                </div>
            </div>
        </div>
    </div>
</div>