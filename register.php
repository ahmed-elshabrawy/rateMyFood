<?php $pageTitle = "Register";
include 'includes/header.php'; ?>
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