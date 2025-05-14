<?php $pageTitle = "Login";
include 'includes/header.php'; ?>
<!-- Main Content -->
<div class="form-container">
    <h2>Login to Your Account</h2>
    <form>
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Enter your email" required />

        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter your password" required />

        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register</a></p>
</div>
<!-- End of Main Content -->
<?php include 'includes/footer.php'; ?>