<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<!-- Main Content -->
<div id="content">
    <?php include 'includes/nav.php' ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Users List</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Ahmed Ali</td>
                            <td>ahmed@gmail.com</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Mona Ahmed</td>
                            <td>mona@gmail.com</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Mohamed Ali</td>
                            <td>medo@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'includes/footer.php'; ?>