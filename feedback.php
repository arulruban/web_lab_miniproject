<?php
    require_once "connect.php";

    $e_name = $_POST['e_name'];
    $email = $_POST['email'];
    $t_message = $_POST['t_message'];
   
   
    $sql = "INSERT INTO  feedback (e_name,email,t_message) VALUES ('$e_name', '$email','$t_message')";
    if ($conn->query($sql) === TRUE) {
        echo "form details added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>