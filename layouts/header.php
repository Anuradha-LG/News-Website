<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsPortal - Stay Informed</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header class="main-header">
        <div class="header-top">
            <div class="container">
                <div class="logo">
                    <a href="index.php">
                        <h1>News<span>Portal</span></h1>
                    </a>
                </div>
                <div class="search-bar">
                    <form action="search.php" method="GET">
                        <input type="text" name="query" placeholder="Search news...">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        
        <nav class="main-nav">
            <div class="container">
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="nav-links">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="categories.php">Categories</a></li>
                    <li><a href="latest.php">Latest News</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="nav-right">
                    <a href="#" class="weather">
                        <i class="fas fa-cloud"></i>
                        <span>24°C</span>
                    </a>
                    <div class="date">
                        <?php echo date("F j, Y"); ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Main content will start here -->