
<?php

 if(isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
    $password = $_COOKIE["password"];

    $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
    if($mysqli->connect_errno) {
      echo "Connection Error!";
      exit;
    }

    $sql = "query into ROUTES(id,name,typesOfTrain) values
            ('$_POST[rname]','$_POST[IDname]','$_POST[sname]')";
  
    if($conn->query($sql)) {
      echo "<h3>Route Found!</h3>";
    } else {
      $err = $conn->errono;
      echo "<p> MySQL error: $err </p>";
    }
    echo "<a href=\"main.php\">Return</a> to Home Page.";
  } else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>


