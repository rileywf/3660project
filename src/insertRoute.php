<?php
  if(isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
    $password = $_COOKIE["password"];

    $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
    if($mysqli->connect_errno) {
      echo "Connection Error!";
      exit;

    }
    $sql = "insert into ROUTES(typesOfTrain, name, ID) values
            ('$_POST[sname]','$_POST[rname]','$_POST[IDname]')";
    if($conn->query($sql)) {
      echo "<h3>Route Added!</h3>";
    } else {
      $err = $conn->errono;
      if($err == 1062) {
        echo "<p>Route already Exists!</p>";
      } else {
        echo "<p>Route already Exists!</p>";
      }
    }
    echo "<a href=\"main.php\">Return</a> to Home Page.";
  } else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>
