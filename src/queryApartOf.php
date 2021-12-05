<?php

if(isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
    $password = $_COOKIE["password"];

    $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
    if($mysqli->connect_errno) {
      echo "Connection Error!";
      exit;
    }

    $routeid = 0;
    $sname = 0;
    $snumber = 0;

    $routeid = $_POST['routeid'];
    $sname = $_POST['sname'];
    $snumber = $_POST['snumber'];

    $condcounter = 0;
 //selection statment
    $sql = "select * from Apart_Of";

    if(!empty($routeid) or !empty($sname) or !empty($snumber))
    {
      $sql .= " where";
    }


    if (!empty($routeid))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      };
      $sql .= " ID='$routeid'";
      $condcounter++;
    }

    if (!empty($sname))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " name='$sname'";
      $condcounter++;
    }

    if (!empty($snumber))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " stationNumber='$snumber'";
      $condcounter++;
    }


    $result = $conn->query($sql);

    if($conn->query($sql))
    {
      echo "<table border='1' style='width:100%'>
      <tr>
      <th>Route ID</th>
      <th>Station Name</th>
      <th>Station Number</th>
      </tr>";

    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . $row['routeid'] . "</td>";
      echo "<td>" . $row['sname'] . "</td>";
      echo "<td>" . $row['snumber'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  }
  else
  {
    $err = $conn->errono;
    printf("error: %d", $err);
  }
  echo "<a href=\"main.php\">Return to homepage</a>";


} else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>
