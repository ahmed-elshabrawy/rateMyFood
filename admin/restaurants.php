<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<!-- Main Content -->
<div id="content">
    <?php include 'includes/nav.php' ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">restaurants List</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" colspan="2">Name</th>
                            <th scope="col">description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="../images/shaltat.jpg" alt="عم شلتت" width="50" height="50">
                            </td>
                            <td>عم شلتت</td>
                            <td>
                                <p>عم شلتت ملك الفطير المصري بالطعم الأصلي وغموس فلاحي زي ما قال الكتاب</p>
                            </td>
                            <td>
                                <a href="edit_restaurant.php" class="btn btn-info btn-circle">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <img src="../images/shaltat.jpg" alt="عم شلتت" width="50" height="50">
                            </td>
                            <td>عم شلتت</td>
                            <td>
                                <p>عم شلتت ملك الفطير المصري بالطعم الأصلي وغموس فلاحي زي ما قال الكتاب</p>
                            </td>
                            <td>
                                <a href="edit_restaurant.php" class="btn btn-info btn-circle">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <img src="../images/shaltat.jpg" alt="عم شلتت" width="50" height="50">
                            </td>
                            <td>عم شلتت</td>
                            <td>
                                <p>عم شلتت ملك الفطير المصري بالطعم الأصلي وغموس فلاحي زي ما قال الكتاب</p>
                            </td>
                            <td>
                                <a href="edit_restaurant.php" class="btn btn-info btn-circle">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
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