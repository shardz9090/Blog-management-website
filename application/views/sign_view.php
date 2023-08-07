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
                    <h5 class="card-title text-center">Sign In</h5>
                    <?php echo form_open('Home/login_form') ?>
                    <div class="form-label-group">
                        <label for=" uname">Username</label>
                        <input type="uname" id="uname" name="uname" class="form-control" placeholder="Email address" required autofocus>
                    </div>

                    <div class=" form-label-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Remember password?</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                    <!-- <hr class="my-4"> -->
                    <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
                    <a href="<?php echo base_url('register') ?>">Create Account</a>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($this->session->flashdata('suc')) { ?>
    toastr.success("<?php echo $this->session->flashdata('suc'); ?>");
<?php } else if ($this->session->flashdata('worng')) {  ?>
    toastr.error("<?php echo $this->session->flashdata('worng'); ?>");
<?php } else if ($this->session->flashdata('warning')) {  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php } else if ($this->session->flashdata('info')) {  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>
<?php $this->session->unset_userdata('suc'); ?>
<?php $this->session->unset_userdata('worng'); ?>