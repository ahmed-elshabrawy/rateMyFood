<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<!-- Main Content -->
<div id="content">
    <?php include 'includes/nav.php' ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create restaurant</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="name">Restaurant Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="logo">Restaurant Logo</label>
                        <input type="file" class="form-control-file" id="logo">
                    </div>
                    <div class="form-group">
                        <label for="text">Restaurant Description</label>
                        <textarea class="form-control" id="text" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'includes/footer.php'; ?>