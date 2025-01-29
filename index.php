<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NewsPortal - Stay Informed</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Font Awesome for icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
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
              <input type="text" name="query" placeholder="Search news..." />
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




    <footer class="main-footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grid">
                <!-- About Section -->
                <div class="footer-column">
                    <div class="footer-logo">
                        <h2>News<span>Portal</span></h2>
                    </div>
                    <p class="about-text">Your trusted source for the latest news and in-depth reporting. We bring you accurate, unbiased coverage from around the world.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                    <li><a href="index.php" class="active">Home</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="latest.php">Latest News</a></li>
            <li><a href="contact.php">Contact</a></li>
                        <li><a href="admin.php">Admin</a></li>
                    </ul>
                </div>

                <!-- Categories -->
                <div class="footer-column">
                    <h3>Categories</h3>
                    <ul class="footer-links">
                        <li><a href="category.php?id=technology">Technology</a></li>
                        <li><a href="category.php?id=sports">Sports</a></li>
                        <li><a href="category.php?id=business">Business</a></li>
                        <li><a href="category.php?id=entertainment">Entertainment</a></li>
                        <li><a href="category.php?id=science">Science</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="footer-column">
                    <h3>Subscribe Newsletter</h3>
                    <p>Stay updated with our latest news and updates.</p>
                    <form class="newsletter-form" id="newsletterForm">
                        <div class="form-group">
                            <input type="email" placeholder="Enter your email" required>
                            <button type="submit">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                    <div class="newsletter-success" id="newsletterSuccess">
                        Thanks for subscribing!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p>&copy; 2025 NewsPortal. All rights reserved.</p>
                <div class="footer-bottom-links">
                    <a href="privacy.php">Privacy</a>
                    <a href="terms.php">Terms</a>
                    <a href="sitemap.php">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button id="backToTop" class="back-to-top" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
</button>
  </body>
</html>