<?php
    // Start the session to manage user sessions
    session_start();

    // Initialize error message variable
    $error_message = '';

    // If a user is already logged in, redirect to the dashboard
    if (isset($_SESSION['user'])) {
        header("Location: dashboard.php");
        exit(); // Ensure that the script stops executing after redirect
    }

    // Include the database connection file
    require_once 'database/connection.php';

    // Check if the form was submitted via POST method
    if (isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepare a SQL query to fetch user based on email and password
        $query = 'SELECT * FROM users WHERE users.email = :username AND users.password = :password LIMIT 1';
        $stmt = $conn->prepare($query);

        // Bind parameters to prevent SQL injection
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        // Execute the query
        $stmt->execute();

        // Check if a user was found
        if ($stmt->rowCount() > 0) {
            // Fetch the user data
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $user = $stmt->fetchAll()[0];

            // Store user data in the session
            $_SESSION['user'] = $user;

            // Redirect to the dashboard
            header("Location: dashboard.php");
            exit(); // Ensure that the script stops executing after redirect
        } else {
            // Set an error message if username or password is incorrect
            $error_message = "Please make sure that username and password are correct";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="css/login.css?=<?php echo time()?>">
</head>
<body>
    <div class="container">
        <?php
            if(!empty($error_message)):
        ?>
        <div>
            <p class="error-message">Error: <?= $error_message?></p>
        </div>
        <?php endif;?>
        <div class="login-header">
            <h1>Inventory Management System</h1>
        </div>
        <div class="login-body">
            <form action="login.php" method="POST">
                <div class="input-fields">
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="input-fields">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password">
                </div>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>