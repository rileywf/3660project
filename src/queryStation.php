<?php

if(isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
    $password = $_COOKIE["password"];

    $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
    if($mysqli->connect_errno) {
      echo "Connection Error!";
      exit;
    }

    $condcounter = 0;
    $sql = "select * from STATION";

    if(!empty($_POST['sname'] or !empty($_POST['openingTime'])) or !empty($_POST['closingTime']) or !empty($_POST['location']) or !empty($_POST['Type']))
    {
      $sql .= " where";
    } 

    if (!empty($_POST['sname']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " name='$_POST[sname]'";
      $condcounter++;
    }

    if (!empty($_POST['sopen']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " openingTime='$_POST[sopen]'";
      $condcounter++;
    }

    if (!empty($_POST['sclose']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " closingTime='$_POST[sclose]'";
      $condcounter++;
    }

    if (!empty($_POST['loc']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " location='$_POST[loc]'";
      $condcounter++;
    }

    if (!empty($_POST['typeoftrain']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " Type='$_POST[typeoftrain]'";
      $condcounter++;
    }

    $result = $conn->query($sql);

    if($conn->query($sql))
    {
      echo "<tale border='1' style='width:100%'>
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
      echo "<td>" . $row['ClosingTime'] . "</td>";
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
  echo "<a href=\"main.php\">Return to homepage<\a>";


} else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>