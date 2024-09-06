<?php
    session_start();
    
    if(!isset($_SESSION['user'])) header("Location: index.php");
    $user = $_SESSION['user'];
    $_SESSION['users'] = 'users';

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
        <?php include('partials/app-sidebar.php') ; ?>
        <div class="dashboard-content">
        <?php include('partials/app-topnav.php'); ?>
            <div class="dashboard-content">
                <div class="dashboard-content-main">
                    <form action="database/add.php" class="appForm" method="POST">
                        <div>
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name">
                        </div>
                        <div>
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name">
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </div>
                        
                        <div>
                            <button type="submit">
                            <i class="fa fa-plus"></i>
                            Submit
                        </button>
                          
                        </div>
                        
                    </form>
                    <?php if(isset($_SESSION['response'])){
                          $response_message = $_SESSION['response']['message'];
                          $is_success = $_SESSION['response']['success'];
                    ?>  
                        <div class="responseMessage">
                            <p class="<?= $is_success ? 'responseMessage_success' : 'responseMessage_error'?>">
                                <?= $response_message?>
                            </p>
                        </div>
                    <?php unset($_SESSION['response']);}?>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js">
    </script>
  </body>
</html>
