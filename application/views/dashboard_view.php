<link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Hide all content sections except dashboard on page load
        $('.section-content').hide();
        $('#usersContent').show();

        // Button click event to show corresponding content
        $('.btn').click(function() {
            var target = $(this).data('target');
            $('.section-content').hide();
            $('#' + target + 'Content').show();
        });
    });
</script>



<div>
    <div class="d-flex flex-row">
        <div class="col-md-3">
            <div class="card card1 p-3">
                <div class="image d-flex flex-row align-items-center mt-3"> <span>Admin Dashboard</span> </div>
                <hr class="hline">
                <div class="d-flex flex-column align-items-center">
                    <button class="btn mt-3" data-target="users"><i class="fa fa-users"></i><span>Users</span></button>
                    <button class="btn mt-3" data-target="inbox"><i class="fa fa-inbox"></i><span>Blogs</span></button>
                </div>
            </div>
        </div>

        <div id="usersContent" class="section-content">
            <!-- Users content goes here -->
            <div class="col-md-9">
                <div class="card card2 p-3">
                    <div class="d-flex flex-row gap-3">
                        <div class="card cardchild mt-3 p-2 px-3 py-3">
                            <div class="d-flex p-2 mt-2 justify-content-between rounded">
                                <div class="d-flex flex-column"><span class="type">Users</span>
                                    <span class="number"><?php $user_count = count($user_details); ?><?= $user_count ?></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <img src="https://i.imgur.com/Slxu74c.png" class="logo1" height="40" width="40" />
                                </div>
                            </div>
                        </div>
                        <div class="card cardchild mt-3 p-2 px-3 py-3">
                            <div class="d-flex p-2 mt-2 justify-content-between rounded">
                                <div class="d-flex flex-column"><span class="type">Blogs</span>
                                    <span class="number"><?= $blog_count ?></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <img src="https://i.imgur.com/7SEdq7z.png" class="logo2" height="40" width="40" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-5 gap-2 p-3">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Birth Year</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($user_details as $user) : ?>
                                        <tr>
                                            <td><?= $user['fname'] ?></td>
                                            <td><?= $user['gender'] ?></td>
                                            <td><?= $user['birth_year'] ?></td>
                                            <td>
                                                <button class="btn1">Delete</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div id="inboxContent" class="section-content">
            <!-- Inbox content goes here -->
            <div class="col-md-9">
                <div class="card card2 p-3">
                    <div class="d-flex flex-row gap-3">
                        <div class="card cardchild mt-3 p-2 px-3 py-3">
                            <div class="d-flex p-2 mt-2 justify-content-between rounded">
                                <div class="d-flex flex-column"><span class="type">Users</span>
                                    <span class="number"><?php $user_count = count($user_details); ?><?= $user_count ?></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <img src="https://i.imgur.com/Slxu74c.png" class="logo1" height="40" width="40" />
                                </div>
                            </div>
                        </div>
                        <div class="card cardchild mt-3 p-2 px-3 py-3">
                            <div class="d-flex p-2 mt-2 justify-content-between rounded">
                                <div class="d-flex flex-column"><span class="type">Blogs</span>
                                    <span class="number"><?= $blog_count ?></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <img src="https://i.imgur.com/7SEdq7z.png" class="logo2" height="40" width="40" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5 gap-2 p-3">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($blogs as $blog) : ?>
                                        <tr>
                                            <td><?= $blog['b_title']; ?></td>
                                            <td><?= $blog['uname']; ?></td>
                                            <td>
                                                <button class="btn1">Delete</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>