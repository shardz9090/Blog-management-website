<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem">
    <div class="container py-2">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2">
                    <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
                </p>
                <p class="mb-2">
                    <i class="fa fa-phone-alt me-3"></i>+012 345 67890
                </p>
                <p class="mb-2">
                    <i class="fa fa-envelope me-3"></i>info@example.com
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Services</h4>
                <a class="btn btn-link" href="">Air Freight</a>
                <a class="btn btn-link" href="">Sea Freight</a>
                <a class="btn btn-link" href="">Road Freight</a>
                <a class="btn btn-link" href="">Logistic Solutions</a>
                <a class="btn btn-link" href="">Industry solutions</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="<?php echo base_url('home'); ?>">View all blogs</a>
                <a class="btn btn-link" href="<?php echo base_url('blogs'); ?>">View your blogs</a>
                <a class="btn btn-link" href="<?php echo base_url('post'); ?>">Post a blog</a>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All
                    Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By
                    <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/wow/wow.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/easing/easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script src=""></script>

<!-- Template Javascript -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

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
<?php elseif ($this->session->flashdata('warning')) : ?>
    <div id="alert-overlay">
        <div id="alert-content" style="background-color: #ff9800;">
            <?php echo $this->session->flashdata('warning'); ?>
            <button type="button" class="btn btn-warning" onclick="hideAlert()">OK</button>
        </div>
    </div>
    <script>
        // Show the overlay
        var overlay = document.getElementById('alert-overlay');
        overlay.style.display = 'block';
    </script>
<?php endif; ?>
</body>

</html>