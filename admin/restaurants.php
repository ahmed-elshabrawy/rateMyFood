<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php
// Fetch users from the database
$stmt = $pdo->prepare("SELECT id, name, image, description FROM restaurants");
$stmt->execute();
$restaurants = $stmt->fetchAll();
?>


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
                        <?php if (count($restaurants) > 0): ?>
                            <?php foreach ($restaurants as $restaurant): ?>
                                <tr>
                                    <th scope="row"><?= htmlspecialchars($restaurant['id']) ?></th>
                                    <td>
                                        <img src="../images/<?= htmlspecialchars($restaurant['image']) ?>" alt="<?= htmlspecialchars($restaurant['name']) ?>" width="50" height="50">
                                    </td>
                                    <td><?= htmlspecialchars($restaurant['name']) ?></td>
                                    <td>
                                        <p><?= htmlspecialchars($restaurant['description']) ?></p>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="edit_restaurant.php?id=<?= $restaurant['id'] ?>" class="btn btn-info btn-circle m-1">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="delete_restaurant.php?id=<?= $restaurant['id'] ?>" class="btn btn-danger btn-circle m-1">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center">No restaurants found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'includes/footer.php'; ?>