<?php
if (isset($_GET['id'])) {
    $resId = (int)$_GET['id'];
    require_once '../db.php';

    // Prepare the SQL statement to delete the user
    $stmt = $pdo->prepare("DELETE FROM restaurants WHERE id = ?");
    $stmt->execute([$resId]);

    header('Location: restaurants.php');
    exit();
} else {
    header('Location: restaurants.php');
    exit();
}
