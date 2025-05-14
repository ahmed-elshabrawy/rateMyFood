<?php $pageTitle = "Restaurant";
include 'includes/header.php';
require_once 'db.php'; // تأكد إن ملف الاتصال موجود
?>

<?php
$restaurantId = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$stmt = $pdo->prepare("SELECT * FROM restaurants WHERE id = ?");
$stmt->execute([$restaurantId]);
$restaurant = $stmt->fetch();

$reviewsStmt = $pdo->prepare("
    SELECT reviews.review_text, users.name as user_name
    FROM reviews
    JOIN users ON reviews.user_id = users.id
    WHERE reviews.restaurant_id = ?
    ORDER BY reviews.created_at DESC
");
$reviewsStmt->execute([$restaurantId]);
$reviews = $reviewsStmt->fetchAll();
?>


<!-- Main Content -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <img src="images/<?= htmlspecialchars($restaurant['image']) ?>" alt="صورة <?= htmlspecialchars($restaurant['name']) ?>" class="restaurant-img">
        </div>
        <div class="col-md-8">
            <h1><?= htmlspecialchars($restaurant['name']) ?></h1>
            <div class="restaurant-info">
                <h3 class="pt-2 text-primary fs-4">Description::</h3>
                <p><?= nl2br(htmlspecialchars($restaurant['description'])) ?></p>
            </div>
        </div>
    </div>

    <div class="reviews">
        <h3 class="pt-2 text-primary fs-4">Reviews::</h3>
        <?php if (count($reviews) > 0): ?>
            <?php foreach ($reviews as $review): ?>
                <div class="review">
                    <p><strong><?= htmlspecialchars($review['user_name'] ?? '') ?>:</strong> <?= htmlspecialchars($review['review_text'] ?? '') ?></p>
                </div>
            <?php endforeach; ?>

        <?php else: ?>
            <p class="text-danger">No reviews yet.</p>
        <?php endif; ?>
    </div>

    <div class="add-review">
        <h3 class="pt-2 text-primary fs-4">Add Review::</h3>
        <?php if (isset($_SESSION['user_id'])): ?>
            <form action="add_review.php" method="POST">
                <input type="hidden" name="restaurant_id" value="<?= $restaurantId ?>">
                <textarea name="review_text" placeholder="Write your comment here.." required class="form-control mb-2"></textarea>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        <?php else: ?>
            <p class="text-muted">You must be <a href="login.php">logged in</a> to leave a review.</p>
        <?php endif; ?>
    </div>
</div>
<!-- End of Main Content -->
<?php include 'includes/footer.php'; ?>