<?php

    session_start();

    $table_name = $_SESSION['users'];


    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encrypted = password_hash($password, PASSWORD_DEFAULT);

    try{
        $command = "INSERT INTO $table_name(firstname, lastname, email, password) VALUES('". $first_name ."', '". $last_name ."', '" . $email . "' ,'" . $encrypted . "')";
        // var_dump($insert);
        // die;
        
        //adding the record
        
        include('connection.php');
        $conn->exec($command);
        $response = [
            'success' => true,
            'message' => $first_name . ' ' . $last_name . 'successfully added to the system.'
        ];
    }catch (PDOException $e){
        $response = [
            'success' => false,
            'message' => $e->getMessage()
        ];
    }

    $_SESSION['response'] = $response;
    header("Location: ../user-add.php");
?>