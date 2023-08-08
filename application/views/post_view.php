<!-- Contact Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container contact-page py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">BLOG</h6>
                <h1 class="mb-4">Post Your Blog Here</h1>
                <p class="mb-4"> Please fill the boxes accordingly.</p>
                <div class="bg-light p-3">
                    <?php echo form_open_multipart('Home/blog_form'); ?>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="b_title" id="b_title" placeholder="Title of blog" required>
                                <label for="b_title">Blog Title</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-label-group">
                                <label for="b_image">Photo</label>
                                <input type="file" id="b_image" name="b_image" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-label-group">
                                <label for="b_description">Your Blog</label>
                                <input type="hidden" id="b_description" name="b_description" required>
                                <div id="editor" style="height: 300px; border: 1px solid #ccc;"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit blog</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Include TinyMCE JavaScript -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '#editor',
        height: 300,
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar_mode: 'floating',
        toolbar: 'undo redo | bold italic underline | bullist numlist | link image',
        setup: function(editor) {
            editor.on('change', function() {
                // Update the hidden input field with the content of the editor
                document.getElementById('b_description_input').value = editor.getContent();
            });
        }
    });
</script>