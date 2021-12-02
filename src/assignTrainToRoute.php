<?php

if(isset($_COOKIE["username"])) {
  $username = $_COOKIE["username"];
  $password = $_COOKIE["password"];
  $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

  $sql = "update TRAIN set rID ='$_POST[ID]' where ID ='$_POST[ID2]'";
  if($conn->query($sql)) {
    echo "<h3>Added Train to Route!</h3>";
  } else {
    $err = $conn->errno;
    $errtext = $conn->error;
    if($err == 1451) {
      echo "<h3>No such Train or Route.</h3>";
    } else {
      echo "You got error code of $err. $errtext";
    }
  }
  echo "<br><br><a href=\"main.php\">Return</a> to Home Page.";
} else {
  echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}

?>
