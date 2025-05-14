<?php
require_once 'db.php';
include 'includes/header.php'; ?>

<?php
$stmt = $pdo->query("SELECT * FROM restaurants");
$restaurants = $stmt->fetchAll();
?>
<!-- Main Content -->
<section class="food-container">
    <?php foreach ($restaurants as $rest): ?>
        <div class="food-item">
            <img src="images/<?= htmlspecialchars($rest['image']) ?>" alt="<?= htmlspecialchars($rest['name']) ?>">
            <h3><?= htmlspecialchars($rest['name']) ?></h3>
            <p><?= htmlspecialchars($rest['description']) ?></p>
            <a href="restaurant.php?id=<?= $rest['id'] ?>" class="read_more">Read More</a>
        </div>
    <?php endforeach; ?>
</section>
<!-- End of Main Content -->
<?php include 'includes/footer.php'; ?>