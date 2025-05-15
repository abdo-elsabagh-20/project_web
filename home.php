<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />ٌ
  <link rel="stylesheet" href="css/style.css" />
  <link rel="icon" href="./images/favicon.png" />
  <title>Leno App | Health & Productivity</title>
</head>

<body>
  <!-- start navbar  -->
  <navbar class="navbar">
    <div class="navbar-container container">
      <div class="navbar-logo">
        <img src="images/logo.svg" alt="" />
      </div>
      <div class="navbar-menu">
        <ul class="navbar-list">
          <li class="navbar-item">
            <a href="#Home" class="navbar-link">Home</a>
          </li>
          <li class="navbar-item">
            <a href="#Features" class="navbar-link">Features</a>
          </li>
          <li class="navbar-item">
            <a href="#download" class="navbar-link">Download</a>
          </li>
          <li class="navbar-item">
            <a href="#details" class="navbar-link">Details</a>
          </li>
          <li class="navbar-item">
            <a href="index.php" class="navbar-link">Login</a>
          </li>
          <li class="navbar-item">
            <a href="#" class="navbar-link--primary">
              <i class="fa-brands fa-facebook"></i>
            </a>
          </li>
          <li class="navbar-item">
            <a href="#" class="navbar-link--primary">
              <i class="fa-brands fa-twitter"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- Mobile Menu & Icon -->
      <div class="navbar_mobile-menu">
        <div class="navbar_mobile-menu-toggle">
          <i class="fas fa-bars fa-2x"></i>
        </div>
        <!-- Mobile Menu Items -->
        <div class="navbar_mobile-menu-items">
          <ul class="navbar_mobile-menu-list">
            <li class="navbar_mobile-menu-item">
              <a href="index.html" class="navbar_mobile-menu-link">Home</a>
            </li>
            <li class="navbar_mobile-menu-item">
              <a href="index.html#features" class="navbar_mobile-menu-link">Features</a>
            </li>
            <li class="navbar_mobile-menu-item">
              <a href="index.html#preview" class="navbar_mobile-menu-link">Preview</a>
            </li>
            <li class="navbar_mobile-menu-item">
              <a href="index.html#details" class="navbar_mobile-menu-link">Details</a>
            </li>
            <li class="navbar_mobile-menu-item">
              <a href="index.html#download" class="navbar_mobile-menu-link">Download</a>
            </li>
            <li class="navbar_mobile-menu-item">
              <a href="#" class="navbar_mobile-menu-link--primary">
                <i class="fa-brands fa-facebook"></i>
              </a>
            </li>
            <li class="navbar_mobile-menu-item">
              <a href="#" class="navbar_mobile-menu-link--primary">
                <i class="fa-brands fa-twitter"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </navbar>
  <!-- Hero -->
  <header class="hero" id="Home">
    <div class="hero-container container">
      <div class="hero-content">
        <h1 class="hero-text">
          Your <span class="hero-text--primary">Productivity</span> assistant
        </h1>
        <p class="hero_description">
          Boost your productivity and improve your health with Leno - the
          all-in-one app for developers and creators.
        </p>
        <div class="hero-buttons">
          <a href="#download" class="hero_button btn">
            <i class="fa-brands fa-apple"></i> For Apple
          </a>
          <a href="#download" class="hero_button btn">
            <i class="fa-brands fa-android"></i> For Android
          </a>
        </div>
      </div>
      <div class="hero-img">
        <img src="images/header-smartphones.png" alt="" />
      </div>
    </div>
  </header>
  <!-- end hero  -->
  <section class="testimonials">
    <div class="container-testimonials container">
      <div class="testimonials-card">
        <div class="testimonials-image">
          <img src="images/testimonial-1.jpg" alt="" />
        </div>
        <div class="testimonials-content">
          <p class="testimonials-card-text">
            "Leno has truly transformed how I manage my time and health.
            Highly recommended!"
          </p>
          <h3 class="testimonials-ard-title">Samantha Samson</h3>
        </div>
      </div>

      <div class="testimonials-card">
        <div class="testimonials-image">
          <img src="images/testimonial-2.jpg" alt="" />
        </div>
        <div class="testimonials-content">
          <p class="testimonials-card-text">
            "As a developer, I rely on Leno every day to keep me focused and
            energized. It's a game-changer!"
          </p>
          <h3 class="testimonials-ard-title">Mike Johnson</h3>
        </div>
      </div>

      <div class="testimonials-card">
        <div class="testimonials-image">
          <img src="images/testimonial-3.jpg" alt="" />
        </div>
        <div class="testimonials-content">
          <p class="testimonials-card-text">
            "With Leno, I've been able to achieve my goals faster and
            healthier than ever before. It's a must-have app!"
          </p>
          <h3 class="testimonials-ard-title">Laney Smith</h3>
        </div>
      </div>
    </div>
  </section>
  <!-- end testimonials  -->

  <!-- start Features -->
  <section class="Features" id="Features">
    <div class="Features-container container">
      <div class="Features-content">
        <h2 class="Features-title">Key Takeaways</h2>
        <p class="Features-description">
          Discover the powerful features that make Leno the ultimate
          productivity and health companion:
        </p>
        <div class="features_grid">
          <!-- Grid Column 1 -->
          <div class="features_grid-column features_grid-column-left">
            <!-- Grid Item 1 -->
            <div class="features_grid-item">
              <div class="features_grid-item-text">
                <h4 class="features_grid-item-text-title">Real-Time Data</h4>
                <p class="features_grid-item-text-description">
                  Access real-time data instantly, ensuring you're always
                  up-to-date with the latest information.
                </p>
              </div>
              <div class="features_grid-item-icon">
                <i class="fas fa-rocket fa-4x"></i>
              </div>
            </div>
            <!-- Grid Item 2 -->
            <div class="features_grid-item">
              <div class="features_grid-item-text">
                <h4 class="features_grid-item-text-title">Visual Editor</h4>
                <p class="features_grid-item-text-description">
                  Customize your workspace with our intuitive visual editor.
                </p>
              </div>
              <div class="features_grid-item-icon">
                <i class="fas fa-code fa-4x"></i>
              </div>
            </div>
            <!-- Grid Item 3 -->
            <div class="features_grid-item">
              <div class="features_grid-item-text">
                <h4 class="features_grid-item-text-title">Refined Options</h4>
                <p class="features_grid-item-text-description">
                  Access a wide range of refined options to tailor Leno to
                  your unique needs.
                </p>
              </div>
              <div class="features_grid-item-icon">
                <i class="fas fa-gem fa-4x"></i>
              </div>
            </div>
          </div>

          <!-- Grid Column 2 -->
          <div class="features_grid-column features_grid-column-center">
            <img src="./images/features-smartphone-1.png" alt="" />
          </div>

          <!-- Grid Column 3 -->
          <div class="features_grid-column features_grid-column-right">
            <!-- Grid Item 1 -->
            <div class="features_grid-item">
              <div class="features_grid-item-text">
                <h4 class="features_grid-item-text-title">Calendar Input</h4>
                <p class="features_grid-item-text-description">
                  Seamlessly integrate your calendar to stay organized and on
                  track.
                </p>
              </div>
              <div class="features_grid-item-icon">
                <i class="fas fa-calendar fa-4x"></i>
              </div>
            </div>
            <!-- Grid Item 2 -->
            <div class="features_grid-item">
              <div class="features_grid-item-text">
                <h4 class="features_grid-item-text-title">Easy Reading</h4>
                <p class="features_grid-item-text-description">
                  Enjoy distraction-free reading with Leno's clean and
                  intuitive interface.
                </p>
              </div>
              <div class="features_grid-item-icon">
                <i class="fas fa-book fa-4x"></i>
              </div>
            </div>
            <!-- Grid Item 3 -->
            <div class="features_grid-item">
              <div class="features_grid-item-text">
                <h4 class="features_grid-item-text-title">Good Foundation</h4>
                <p class="features_grid-item-text-description">
                  Leno is built on a solid foundation of user feedback and
                  cutting-edge technology.
                </p>
              </div>
              <div class="features_grid-item-icon">
                <i class="fas fa-cube fa-4x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end Features  -->
  <!-- start Preview -->
  <section class="preview" id="preview">
    <div class="preview-container container">
      <div class="preview-content">
        <h2 class="preview-title">Preview</h2>
        <p class="preview-descriptiton">
          Take a sneak peek at Leno's sleek and intuitive interface:
        </p>
        <div class="preview-image-container">
          <div class="review-video">
            <img src="images/video-frame.jpg" alt="" />
            <button class="preview_button">
              <button class="preview_button" onclick="openVideo()">
                <span class="preview__video-play-button">
                  <span></span>
                </span>
              </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end preview -->
  <!-- start details -->
  <section class="details" id="details">
    <div class="details-container container">
      <div class="details-grid">
        <!-- item 1 -->
        <div class="Grid-image-details">
          <img src="images/details-1.png" alt="" />
        </div>
        <!-- item 2 -->
        <div class="details-content-grid">
          <h3 class="details-grid-heading">
            Start using Leno today and set your long term goals
          </h3>
          <p class="details-grid-par">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ipsum
            est molestiae, qui in totam ad. Eum voluptatibus sequi fugiat.
          </p>
          <a href="details.html" class="details-grid-button btn">More</a>
        </div>
        <!-- item 3 -->
        <div class="details-content-grid">
          <h3 class="details-grid-heading">
            The calendar feature helps you schedule tasks
          </h3>
          <p class="details-grid-par">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ipsum
            est molestiae, qui in totam ad. Eum voluptatibus sequi fugiat.
          </p>
          <a href="details.html" class="details-grid-button btn">More</a>
        </div>
        <!-- item 4 -->
        <div class="Grid-image-details">
          <img src="images/details-2.png" alt="" />
        </div>
      </div>
      <!-- icons -->
      <div class="details-icon">
        <div class="details-icon-item">
          <i class="fas fa-users fa-4x"></i>
          <div class="details-icon-amount">44,000</div>
          <h4 class="details-icon-title">Happy Customers</h4>
        </div>
        <div class="details-icon-item">
          <i class="fas fa-code fa-4x"></i>
          <div class="details-icon-amount">585</div>
          <h4 class="details-icon-title">Issues Solved</h4>
        </div>
        <div class="details-icon-item">
          <i class="fas fa-comments fa-4x"></i>
          <div class="details-icon-amount">788</div>
          <h4 class="details-icon-title">Good Reviews</h4>
        </div>
        <div class="details-icon-item">
          <i class="fas fa-rocket fa-4x"></i>
          <div class="details-icon-amount">100</div>
          <h4 class="details-icon-title">Case Studies</h4>
        </div>
        <div class="details-icon-item">
          <i class="fas fa-edit fa-4x"></i>
          <div class="details-icon-amount">110</div>
          <h4 class="details-icon-title">Press Article</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- end details -->
  <!-- start screen shots  -->
  <section class="screen-shots">
    <div class="screen-shots-container container">
      <div class="content-screen-shots">
        <h2 class="screen-shots-title">Screenshots</h2>
        <div class="screen-shots-image">
          <img src="images/screenshot-3.png" alt="" />
          <img src="images/screenshot-2.png" alt="" />
          <img src="images/screenshot-1.png" alt="" />
          <img src="images/screenshot-9.png" alt="" />
          <img src="images/screenshot-4.png" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- download -->
  <section class="download" id="download">
    <div class="download-container container">
      <div class="download-content">
        <p class="download-description">
          Download Leno today to see the benefits and enjoy the results faster
          than any other app out there
        </p>
        <div class="download-buttons">
          <a href="#download" class="download-button btn">
            <i class="fa-brands fa-apple"></i> For Apple
          </a>
          <a href="#download" class="download-button btn">
            <i class="fa-brands fa-android"></i> For Android
          </a>
        </div>
      </div>
      <div class="download-img">
        <img src="./images/download.png" alt="" />
      </div>
    </div>
  </section>
  <!-- end hero  -->
  <!-- start footer  -->
  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container container">
      <div class="footer-about">
        <h4 class="footer-title">About Leno</h4>
        <p class="footer-description">
          Leno is a mobile app that helps you stay focused and improve your
          productivity. The app provides you with tools to set goals, track
          your progress, and maintain a healthy work-life balance.
        </p>
      </div>

      <div class="footer-links">
        <h4 class="footer-title">Quick Links</h4>
        <ul class="footer-links-list">
          <li class="footer-links-item">
            <a href="index.html" class="footer-links-link"> Home </a>
          </li>
          <li class="footer-links-item">
            <a href="index.html#testimonials" class="footer-links-link">
              Testimonials
            </a>
          </li>
          <li class="footer-links-item">
            <a href="index.html#features" class="footer-links-link">
              Features
            </a>
          </li>
          <li class="footer-links-item">
            <a href="index.html#preview" class="footer-links-link">
              Preview
            </a>
          </li>
          <li class="footer-links-item">
            <a href="index.html#details" class="footer-links-link">
              Details
            </a>
          </li>
          <li class="footer-links-item">
            <a href="index.html#download" class="footer-links-link">
              Download
            </a>
          </li>
        </ul>
      </div>

      <div class="footer-social">
        <a href="#" class="footer-social-link">
          <i class="fa-brands fa-facebook fa-3x"></i>
        </a>
        <a href="#" class="footer-social-link">
          <i class="fa-brands fa-twitter fa-3x"></i>
        </a>
        <a href="#" class="footer-social-link">
          <i class="fa-brands fa-instagram fa-3x"></i>
        </a>
        <a href="#" class="footer-social-link">
          <i class="fa-brands fa-linkedin fa-3x"></i>
        </a>
      </div>
    </div>
  </footer>
  <!-- end footer  -->
  <script src="./script.js"></script>
</body>

</html>