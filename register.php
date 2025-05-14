<?php $pageTitle = "Register";
include 'includes/header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once 'db.php'; // تأكد إن ملف الاتصال موجود

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  // Check if email already exists
  $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
  $checkStmt->execute([$email]);
  $emailExists = $checkStmt->fetchColumn();

  if ($emailExists) {
    echo "<div class='text-danger text-center pt-2'>Email already registered. Please use another one.</div>";
  } else {
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $password]);
    header("Location: login.php");
    exit;
  }
}
?>


<!-- Main Content -->
<div class="form-container">
  <h2>Create an Account</h2>
  <form action="#" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required />
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required />
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required />
    <button type="submit">Register</button>
  </form>
  <p>Already have an account? <a href="login.php">Login</a></p>
</div>
<!-- End of Main Content -->
<?php include 'includes/footer.php'; ?>