<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo(basename($_SERVER['PHP_SELF'])); ?></title> 

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a href="#" class="navbar-brand">TaguMedia</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button> 

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="index.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "index.php")?
                "active": ""; ?>"> Home</a>
            </li>

            <li class="nav-item">
                <a href="services.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "services.php")?
                "active": ""; ?>"> Services </a>
            </li>

            <li class="nav-item">
                <a href="gallery.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "gallery.php")?
                "active": ""; ?>"> Gallery</a>
            </li>

            <li class="nav-item">
                <a href="blog.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "blog.php")?
                "active": ""; ?>"> Blog </a>
            </li>

            <li class="nav-item">
                <a href="contact.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "contact.php")?
                "active": ""; ?>"> Contact Us </a>
            </li>
        </ul>

    </div>

</nav> 
 