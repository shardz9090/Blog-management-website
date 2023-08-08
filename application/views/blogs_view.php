    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Your Blogs</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo base_url('home') ?>">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Blogs</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Blogs</h6>
                <h1 class="mb-5">Your blogs</h1>
            </div>
            <div class="row g-4">
                <?php foreach ($blogs as $blog) : ?>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4 h-100">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="<?= base_url('uploads/blog_img/' . $blog['b_image']); ?>" alt="Blog Image">
                            </div>
                            <h4 class="mb-3"><?= $blog['b_title']; ?></h4>
                            <a class="btn-slide mt-2" href="<?php echo base_url('view_blog/' . $blog['bid']); ?>"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>