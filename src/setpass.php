<?php
    $conn = new mysqli("vconroy.cs.uleth.ca", $_POST["username"], $_POST["password"]);
    #$conn = new mysqli("localhost", $_POST["username"], $_POST["password"]);
    if($conn->connect_errno) {
        echo "$conn->connect_errno";
        echo "<h1>Invalid username or password!</h1><p><a href=\"index.php\">Try Again</a></p>";
        exit;
    }
    $username = $_POST["username"];
    $password = $_POST["password"];


    setcookie("username", $username, time()+3600);
    setcookie("password", $password, time()+3600);

    header('Location:main.php');
?>
