<?php
  session_start();
  if(isset($_SESSION['user'])) header("Location: dashboard.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="css/style.css?=<?php echo time()?>" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="head">
      <a href="login.php">Login</a>
    </div>
    <div class="header">
      <div class="banner">
        <div class="home-page-container">
          <div class="banner-header">
            <p>Inventory Management System</p>
          </div>
          <p class="bannter-tag-line">
            Track your product seamlessly through every stage of the supply
            chain—from purchasing and production to final sales.
          </p>
        </div>
      </div>
      <div class="home-page-features">
        <div class="home-page-feature">
          <span><i class="fa fa-gear"></i></span>
          <h3>Editable Theme</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis,
            recusandae!
          </p>
        </div>
        <div class="home-page-feature">
          <span><i class="fa fa-star"></i></span>
          <h3>Flat Design</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis,
            recusandae!
          </p>
        </div>
        <div class="home-page-feature">
          <span><i class="fa fa-globe"></i></span>
          <h3>Reach Your Audience</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis,
            recusandae!
          </p>
        </div>
      </div>
      <div class="home-notified-bg">
        <div class="home-notified">
          <div class="email-form">
            <h3>Get Notified of Any Updates!</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
              sunt sequi laboriosam exercitationem odio eveniet illum ut iste
              labore enim corrupti optio consequuntur a eius maxime cumque,
              ipsum quidem id!
            </p>
            <form action="">
              <input
                type="text"
                name="email"
                id="email"
                placeholder="Email Address"
              />
              <button type="button">Notify</button>
            </form>
          </div>
          <div class="video">
            <iframe
              width="400"
              height="300"
              src="https://www.youtube.com/embed/Tuw8hxrFBH8"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>

      <div class="socials">
        <h3>Get in touch</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis,
          officia.
        </p>
        <div class="social-icons">
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-youtube"></i>
        </div>
      </div>
      <div class="footer">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Download</a></li>
          <li><a href="#">Press</a></li>
          <li><a href="#">Email</a></li>
          <li><a href="#">Supprot</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
  </body>
</html>
