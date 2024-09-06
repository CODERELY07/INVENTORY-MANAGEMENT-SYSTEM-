<?php
    session_start();
    
    if(!isset($_SESSION['user'])) header("Location: index.php");
    $user = $_SESSION['user'];


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
    <div class="dashboard-main-con">
        <div class="dashboard-sidebar" id="dashboard_toggle">
            <h3>IMS</h3>
            <div class="dashboard_sidebar_user">
                <img src="images/user/profile.jpg" alt="User image.">
                <span><?= $user['lastname']; ?></span>
            </div>
            <div class="line"></div>
            <div class="dashboard-menu">
                <ul class="dashboard-menu-lists">
                    <li>
                        <a href="#" class="active "><i class="fa fa-dashboard "></i> <span class="menu-icons" >Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#" ><i class="fa fa-dashboard"></i> <span class="menu-icons">Campaigns</span></a>
                    </li>
                    <li>
                        <a href="#" ><i class="fa fa-dashboard"></i> <span class="menu-icons">Revenue Management</span></a>
                    </li>
                    <li>
                        <a href="#" ><i class="fa fa-dashboard"></i> <span class="menu-icons">Accounts Receivable</span></a>
                    </li>
                    <li>
                        <a href="#" ><i class="fa fa-dashboard"></i> <span class="menu-icons">Cofiguration</span></a>
                    </li>
                    <li>
                        <a href="#" ><i class="fa fa-dashboard"></i> <span class="menu-icons">Status</span></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="dashboard-content">
            <div class="top-nav">
                <i class="fa fa-navicon" id="toggleBtn"></i>
                <span><a href="database/logout.php"><i class="fa fa-power-off"> </i>  Logout</a></span>
            </div>
            <div class="dashboard-content">
                <div class="dashboard-content-main">

                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js">
    </script>
  </body>
</html>
