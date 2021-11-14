<?php
if(isset($_COOKIE["username"])) {
  $username = $_COOKIE["username"];
  $password = $_COOKIE["password"];
  $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

  $sql = "delete from ROUTES where name='$_POST[name]'";
  if($conn->query($sql)) {
    echo "<h3>Route Deleted!</h3>";
  } else {
    $err = $conn->errno;
    $errtext = $conn->error;
    if($err == 1451) {
      echo "<h3>Cannot delete Route $_POST[name]!</h3>";
      echo "One or more of $_POST[name] has trains or conductors assigned to them.";
    } else {
      echo "You got error code of $err. $errtext";
    }
  }
  echo "<br><br><a href=\"main.php\">Return</a> to Home Page.";
} else {
  echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}

?>
