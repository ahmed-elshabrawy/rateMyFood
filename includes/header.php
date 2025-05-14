<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RateMyFood - <?php echo isset($pageTitle) ? $pageTitle : 'Home'; ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/front.css" />
</head>

<body>
    <header>
        <h1 class="text-danger">RATEMYFOOD :: <?php echo isset($pageTitle) ? $pageTitle : 'Home'; ?></h1>
        <nav>
            <a href="index.php">Home</a> |
            <a href="login.php">Login</a>
        </nav>
    </header>