<?php

if(isset($_COOKIE["username"])) {
  $username = $_COOKIE["username"];
  $password = $_COOKIE["password"];
  $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
  $val = $_GET['id'];
  $sql = "delete from Apart_Of where ID='$val'";
  if($conn->query($sql)) {
    echo "<h3>Assigned Deleted</h3>";
    echo "<br><a href=\"delete_ApartOf.php\">Return</a> back to Deleting assigning.";
  } else {
    $err = $conn->errno;
    $errtext = $conn->error;
    if($err == 1451) {
      echo "<h3>Cannot delete Apart_Of $_GET[id]!</h3>";
      echo $errtext;
      echo "Something happened and cannot delete $_GET[id]!";
      echo "<br><br><a href=\"delete_Apart_Of.php\">Return</a> to Deleting assigning.";
    } else {
      echo "You got error code of $err". $errtext;
      echo "<br><br><a href=\"main.php\">Return</a> to Home Page.";
    }
  }
  echo "<a href=\"main.php\">Return</a> to Home Page.";
  } else {
      echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}
?>
