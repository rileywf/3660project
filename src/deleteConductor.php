<?php

if(isset($_COOKIE["username"])) {
  $username = $_COOKIE["username"];
  $password = $_COOKIE["password"];
  $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
  $val = $_GET['id'];
  $sql = "delete from CONDUCTOR where ID='$val'";
  if($conn->query($sql)) {
    echo "<h3>Conductor Removed</h3>";
    echo "<br><a href=\"delete_Conductor.php\">Return</a> back to delete conductor page.";
  } else {
    $err = $conn->errno;
    $errtext = $conn->error;
    if($err == 1451) {
      echo "<h3>Cannot delete STATION $_GET[name]!</h3>";
      echo "Something happened and cannot delete $_GET[name]!";
      echo "<br><br><a href=\"delete_Conductor.php\">Return</a> to delete conductor Page.";
    } else {
      echo "You got error code of $err. $errtext";
      echo "<br><a href=\"delete_Conductor.php\">Return</a> back to delete conductor page.";
    }
  }
  echo "<br><a href=\"main.php\">Return</a> to Home Page.";
  } else {
      echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}
?>
