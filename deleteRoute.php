<?php

if(isset($_COOKIE["username"])) {
  $username = $_COOKIE["username"];
  $password = $_COOKIE["password"];
  $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
  $val = $_GET['id'];
  $sql = "delete from ROUTES where ID='$val'";
  if($conn->query($sql)) {
    echo "<h3>Route Deleted</h3>";
    echo "<br><a href=\"delete_Route.php\">Return</a> back to Routes.";
  } else {
    $err = $conn->errno;
    $errtext = $conn->error;
    if($err == 1451) {
      echo "<h3>Cannot delete route $_GET[ID]!</h3>";
      echo "<p>The route has a Station or Train assigned to them!</p>";
      echo "<br><br><a href=\"delete_Route.php\">Return</a> to Delete Route Page.";
    } else {
      echo "You got error code of $err. $errtext";
      echo "<br><br><a href=\"main.php\">Return</a> to Home Page.";
    }
  }
  } else {
      echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}
?>
