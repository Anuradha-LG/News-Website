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

 <!-- Main content will start here -->
<!-- After the header -->
<main>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="featured-grid">
                <div class="featured-main">
                    <article class="featured-card large">
                        <div class="card-img">
                            <img src="https://plus.unsplash.com/premium_photo-1688561384438-bfa9273e2c00?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Featured News">
                            <span class="category">Technology</span>
                        </div>
                        <div class="card-content">
                            <h2>AI Revolution: The Future of Technology in 2025</h2>
                            <p>Latest developments in artificial intelligence are reshaping how we interact with technology...</p>
                            <div class="meta">
                                <span class="author">By John Doe</span>
                                <span class="date">January 21, 2025</span>
                                <span class="read-time">5 min read</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="featured-sidebar">
                    <article class="featured-card small">
                        <div class="card-img">
                            <img src="https://plus.unsplash.com/premium_photo-1688561384438-bfa9273e2c00?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Science News">
                            <span class="category">Science</span>
                        </div>
                        <div class="card-content">
                            <h3>New Discovery in Quantum Computing</h3>
                            <div class="meta">
                                <span class="date">January 21, 2025</span>
                                <span class="read-time">3 min read</span>
                            </div>
                        </div>
                    </article>
                    <article class="featured-card small">
                        <div class="card-img">
                            <img src="https://plus.unsplash.com/premium_photo-1688561384438-bfa9273e2c00?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Business News">
                            <span class="category">Business</span>
                        </div>
                        <div class="card-content">
                            <h3>Global Markets See Record Growth</h3>
                            <div class="meta">
                                <span class="date">January 21, 2025</span>
                                <span class="read-time">4 min read</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- After Latest News Section -->
<section class="categories-trending">
    <div class="container">
        <div class="grid-layout">
            <!-- Categories Section -->
            <div class="categories-section">
                <div class="section-header">
                    <h2>News Categories</h2>
                    <a href="categories.php" class="view-all">All Categories <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="category-grid">
                    <a href="category.php?id=technology" class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <h3>Technology</h3>
                        <span class="post-count">24 Articles</span>
                    </a>

                    <a href="category.php?id=sports" class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-basketball-ball"></i>
                        </div>
                        <h3>Sports</h3>
                        <span class="post-count">18 Articles</span>
                    </a>

                    <a href="category.php?id=business" class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Business</h3>
                        <span class="post-count">32 Articles</span>
                    </a>

                    <a href="category.php?id=entertainment" class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-film"></i>
                        </div>
                        <h3>Entertainment</h3>
                        <span class="post-count">27 Articles</span>
                    </a>

                    <a href="category.php?id=science" class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h3>Science</h3>
                        <span class="post-count">21 Articles</span>
                    </a>

                    <a href="category.php?id=health" class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3>Health</h3>
                        <span class="post-count">15 Articles</span>
                    </a>
                </div>
            </div>

            <!-- Trending Section -->
            <aside class="trending-section">
                <div class="section-header">
                    <h2>Trending Now</h2>
                    <div class="trending-nav">
                        <button class="nav-btn prev" id="trendingPrev">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="nav-btn next" id="trendingNext">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>

                <div class="trending-container">
                    <div class="trending-list">
                        <article class="trending-card">
                            <span class="trending-number">01</span>
                            <div class="trending-content">
                                <span class="category">Technology</span>
                                <h3>The Rise of Quantum Computing in Modern Tech</h3>
                                <div class="meta">
                                    <span class="views"><i class="fas fa-eye"></i> 5.2K</span>
                                    <span class="date">2 hours ago</span>
                                </div>
                            </div>
                        </article>

                        <article class="trending-card">
                            <span class="trending-number">02</span>
                            <div class="trending-content">
                                <span class="category">Sports</span>
                                <h3>World Cup Final Sets New Viewership Record</h3>
                                <div class="meta">
                                    <span class="views"><i class="fas fa-eye"></i> 4.8K</span>
                                    <span class="date">3 hours ago</span>
                                </div>
                            </div>
                        </article>

                        <article class="trending-card">
                            <span class="trending-number">03</span>
                            <div class="trending-content">
                                <span class="category">Business</span>
                                <h3>Global Markets React to New Economic Policies</h3>
                                <div class="meta">
                                    <span class="views"><i class="fas fa-eye"></i> 4.1K</span>
                                    <span class="date">5 hours ago</span>
                                </div>
                            </div>
                        </article>

                        <article class="trending-card">
                            <span class="trending-number">04</span>
                            <div class="trending-content">
                                <span class="category">Entertainment</span>
                                <h3>Upcoming Movie Releases for Summer 2025</h3>
                                <div class="meta">
                                    <span class="views"><i class="fas fa-eye"></i> 3.9K</span>
                                    <span class="date">6 hours ago</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>


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