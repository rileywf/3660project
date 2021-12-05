<?php

if(isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
    $password = $_COOKIE["password"];

    $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
    if($mysqli->connect_errno) {
      echo "Connection Error!";
      exit;
    }

    $sname = 0;
    $sopen = 0;
    $sclose = 0;
    $loc = 0;
    $typeoftrain = 0;


    $sname = $_POST['sname'];
    $sopen = $_POST['sopen'];
    $sclose = $_POST['sclose'];
    $loc = $_POST['loc'];
    $typeoftrain = $_POST['typeoftrain'];

    $condcounter = 0;
    $sql = "select * from STATION";

    if(!empty($sname) or !empty($sopen) or !empty($sclose) or !empty($loc) or !empty($typeoftrain))
    {
      $sql .= " where";
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

    if (!empty($sopen))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " openingTime='$sopen'";
      $condcounter++;
    }

    if (!empty($sclose))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " closingTime='$sclose'";
      $condcounter++;
    }

    if (!empty($loc))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " location='$loc'";
      $condcounter++;
    }

    if (!empty($typeoftrain))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " Type='$typeoftrain'";
      $condcounter++;
    }

    $result = $conn->query($sql);

    if($conn->query($sql))
    {
      echo "<table border='1' style='width:100%'>
      <tr>
      <th>Name</th>
      <th>Opening Time</th>
      <th>Closing Time</th>
      <th>Location</th>
      <th>Train Type Allowed</th>
      </tr>";

    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['openingTime'] . "</td>";
      echo "<td>" . $row['closingTime'] . "</td>";
      echo "<td>" . $row['location'] . "</td>";
      echo "<td>" . $row['Type'] . "</td>";
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
