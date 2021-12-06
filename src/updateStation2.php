<?php
  if(isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
    $password = $_COOKIE["password"];

    $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
    if($mysqli->connect_errno) {
      echo "Connection Error!";
      exit;
    }

		$sql = "update STATION set openingTime='$_POST[OT]', closingTime = '$_POST[CT]',
		location='$_POST[LOC]', Type='$_POST[type]' where name ='$_POST[name]'";
    if($conn->query($sql)) {
      echo "<h3>Updated Station!</h3>";
    } else {
      $err = $conn->errono;
      if($err == 1062) {
        echo "<p>Couldn't update Station!</p>";
      } else {
        echo "<p> MySQL error: $err </p>";
      }
    }
    echo "<a href=\"main.php\">Return</a> to Home Page.";
  } else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>
