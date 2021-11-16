
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
    $result = $conn->query($sql);

      if($conn->query($sql)) {
      echo "<table border='1' style='width:100%'>
      <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Name</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
      echo "<tr>";
      echo "<td>" . $row['ID'] . "</td>";
      echo "<td>" . $row['typesOfTrain'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "</tr>";
      }
      echo "</table>";
    } else {
      $err = $conn->errono;
      printf("error: %d", $err);
    }
    echo "<a href=\"main.php\">Return</a> to Home Page.";
  } else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>
