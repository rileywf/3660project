<?php

if(isset($_COOKIE["username"])) {
  $username = $_COOKIE["username"];
  $password = $_COOKIE["password"];
  $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
  $val = $_GET['name'];
  $sql = "delete from STATION where name='$val'";
  if($conn->query($sql)) {
    echo "<h3>Station Deleted</h3>";
    echo "<br><a href=\"delete_Station.php\">Return</a> back to Station.";
  } else {
    $err = $conn->errno;
    $errtext = $conn->error;
    if($err == 1451) {
      echo "<h3>Cannot delete STATION $_GET[name]!</h3>";
      echo "Something happened and cannot delete $_GET[name]!";
      echo "<br><br><a href=\"delete_Station.php\">Return</a> to delete station Page.";
    } else {
      echo "You got error code of $err. $errtext";
      echo "<br><br><a href=\"main.php\">Return</a> to Home Page.";
    }
  }
  echo "<a href=\"main.php\">Return</a> to Home Page.";
  } else {
      echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}
?>
