
<?php

 if(isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
    $password = $_COOKIE["password"];

    $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
    if($mysqli->connect_errno) {
      echo "Connection Error!";
      exit;
    }
  
    $sql = "select * from ROUTES 
	    where name='$_POST[rname]'
	    and typesOfTrain='$_POST[sname]'
	    and ID='$_POST[IDname]'";
  
    if($conn->query($sql)) {
      echo "<h3>Route Found! Here are the Details</h3>";
      echo "<td>$rec[rname]</td>";
      echo "<td>$rec[IDname]</td>";
      echo "<td>$rec[sname]</td>";
    } else {
      $err = $conn->errono;
      printf("error: %d", $err);
    }
    echo "<a href=\"main.php\">Return</a> to Home Page.";
  } else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>


