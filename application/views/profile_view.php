<link href="<?php echo base_url(); ?>assets/css/profilecss.css" rel="stylesheet">
<?php
$birthYear = '2000';
$currentYear = date('Y');
$age = $currentYear - $birthYear;
?>
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <?php $userImage = $this->session->userdata('uImage'); ?>
                                <img src="<?= base_url('uploads/user_img/' . $userImage); ?>" alt="User Image" class="img-fluid" style="max-width: 400px; max-height: 400px;">
                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 text-white mb-0"><?php echo $this->session->userdata('fname'); ?></h3>
                                    <span class="text-primary"><?php echo $this->session->userdata('uname'); ?></span>
                                </div>
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Birth Year:</span> <?php echo $this->session->userdata('birth_year'); ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Age:</span> <?php echo $age; ?> Years</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Gender:</span> <?php echo $this->session->userdata('gender'); ?></li>
                                    <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span><?php echo $this->session->userdata('mnum'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div>
                    <span class="section-title text-primary mb-3 mb-sm-4">About Me</span>
                    <p>Hi my name is <?php echo $this->session->userdata('fname'); ?>. I was born in <?php echo $this->session->userdata('birth_year'); ?>. I am a <?php echo $this->session->userdata('gender'); ?>.</p>
                    <p class="mb-0"></p>
                </div>
            </div>
        </div>
    </div>
</section>