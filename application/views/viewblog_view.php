<link href="<?php echo base_url(); ?>assets/css/viewblog.css" rel="stylesheet">

<div id="main-content" class="blog-page">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 left-box">
                <div class="card single_post">
                    <div class="body">
                        <div class="img-post">
                            <img class="d-block img-fluid" src="<?= base_url('uploads/blog_img/' . $blog['b_image']); ?>" alt="Blog Image">
                        </div>
                        <h1><?= $blog['b_title']; ?></h1>
                        <p>By</p>
                        <h3><?= $blog['uname']; ?></h3>
                        <p><?= $blog['created_time']; ?></p>
                        <p><?= $blog['b_description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>