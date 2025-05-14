<?php
include 'includes/header.php';
include 'includes/sidebar.php';

// Initialize error message variable
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);

    // Handle the image upload
    $image = $_FILES['logo'];
    $imageName = $image['name'];
    $imageTmpName = $image['tmp_name'];
    $imageError = $image['error'];
    $imageSize = $image['size'];

    // Ensure the 'images' directory exists and is writable
    $directory = dirname(__DIR__, 1) . '/images'; // Absolute path to images directory
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);  // Create the directory if it doesn't exist
    }

    // Check if there was no error during the file upload
    if ($imageError === 0) {
        // Check if the file size is less than 5MB
        if ($imageSize < 5000000) {
            // Generate a unique name for the image
            $imageNewName = uniqid('', true) . "." . pathinfo($imageName, PATHINFO_EXTENSION);
            $imageDestination = $directory . '/' . $imageNewName;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($imageTmpName, $imageDestination)) {
                // Insert the restaurant data into the database
                $stmt = $pdo->prepare("INSERT INTO restaurants (name, image, description) VALUES (?, ?, ?)");
                $stmt->execute([$name, $imageNewName, $description]);

                // Redirect to the restaurant list page after successful insertion
                header('Location: restaurants.php');
                exit();
            } else {
                $errorMessage = "Failed to upload the image.";
            }
        } else {
            $errorMessage = "Image size is too large. Max size is 5MB.";
        }
    } else {
        $errorMessage = "There was an error uploading the image.";
    }
}
?>

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
                <?php if ($errorMessage): ?>
                    <div class="alert alert-danger">
                        <strong>Error!</strong> <?= $errorMessage ?>
                    </div>
                <?php endif; ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Restaurant Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="logo">Restaurant Logo</label>
                        <input type="file" class="form-control-file" id="logo" name="logo" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Restaurant Description</label>
                        <textarea class="form-control" id="text" name="description" rows="3" required></textarea>
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