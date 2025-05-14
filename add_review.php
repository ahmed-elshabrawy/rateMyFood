<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
    $restaurant_id = $_POST['restaurant_id'];
    $user_id = $_SESSION['user_id'];
    $comment = $_POST['review_text'];

    $stmt = $pdo->prepare("INSERT INTO reviews (restaurant_id, user_id, review_text) VALUES (?, ?, ?)");
    $stmt->execute([$restaurant_id, $user_id, $comment]);

    header("Location: restaurant.php?id=$restaurant_id");
    exit;
} else {
    // مش مسجّل دخوله أو خطأ في الطلب
    header("Location: login.php");
    exit;
}
