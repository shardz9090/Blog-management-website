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