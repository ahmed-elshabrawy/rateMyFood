<?php $pageTitle = "Restaurant";
include 'includes/header.php'; ?>
<!-- Main Content -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <img src="images/shaltat.jpg" alt="صورة مطعم البركة" class="restaurant-img">
        </div>
        <div class="col-md-8">
            <h1>مطعم البركة</h1>
            <div class="restaurant-info">
                <h3 class="pt-2 text-primary fs-4">Description::</h3>
                <p>مطعم البركة بيقدم أشهى الأكلات الشرقية والمشويات الطازجة، بالإضافة لمجموعة مميزة من المقبلات.</p>
            </div>
        </div>
    </div>

    <div class="reviews">
        <h3 class="pt-2 text-primary fs-4">Reviews::</h3>
        <div class="review">
            <p><strong>Mohamed:</strong> الأكل ممتاز والخدمة رائعة!</p>
        </div>
        <div class="review">
            <p><strong>Sara:</strong> جربت المحشي وكان طعمه تحفة.</p>
        </div>
    </div>

    <div class="add-review">
        <h3 class="pt-2 text-primary fs-4">Add Review::</h3>
        <form>
            <textarea placeholder="Write your comment here.." required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
</div>
<!-- End of Main Content -->
<?php include 'includes/footer.php'; ?>