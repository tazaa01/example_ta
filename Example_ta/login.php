<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // database connection
    $conn = new mysqli('127.0.0.1:3306','root','','example_ta');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO register (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        echo "Register OK...";
        $stmt->close();
        $conn->close();
    }
?>
