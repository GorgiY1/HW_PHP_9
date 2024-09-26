<?php 
include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_name = htmlspecialchars($_POST['user_name']);
            $message = htmlspecialchars($_POST['message']);
        
            $sql = "INSERT INTO messages (user_name, message) VALUES (:user_name, :message)";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['user_name' => $user_name, 'message' => $message]);
        
            echo "Message sent!";
        }?>