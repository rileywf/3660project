<?php

if(isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
    $password = $_COOKIE["password"];

    $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
    if($mysqli->connect_errno) {
      echo "Connection Error!";
      exit;
    }

    $tid = 0;
    $rid = 0;
    $fueltype = 0;
    $typeoftrain = 0;
    $pcapacity = 0;

    $tid = $_POST['tid'];
    $rid = $_POST['rid'];
    $fueltype = $_POST['fueltype'];
    $typeoftrain = $_POST['typeoftrain'];
    $pcapacity = $_POST['pcapacity'];


    $condcounter = 0;
    $sql = "select * from TRAIN";

    if(!empty($tid) or !empty($rid) or !empty($fueltype) or !empty($typeoftrain) or !empty($pcapacity))
    {
      $sql .= " where";
    }

    if (!empty($tid))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " ID='$tid'";
      $condcounter++;
    }

    if (!empty($rid))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " rID='$rid'";
      $condcounter++;
    }

    if (!empty($fueltype))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " Fuel='$fueltype'";
      $condcounter++;
    }

    if (!empty($traintype))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " Type='$traintype'";
      $condcounter++;
    }

    if (!empty($pcapacity))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " passenger_capacity='$pcapacity'";
      $condcounter++;
    }

    $result = $conn->query($sql);

    if($conn->query($sql))
    {
      echo "<table border='1' style='width:100%'>
      <tr>
      <th>Train ID</th>
      <th>Route ID</th>
      <th>Fuel</th>
      <th>Type</th>
      <th>Passenger Capacity</th>
      </tr>";

    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . $row['ID'] . "</td>";
      echo "<td>" . $row['rID'] . "</td>";
      echo "<td>" . $row['Fuel'] . "</td>";
      echo "<td>" . $row['Type'] . "</td>";
      echo "<td>" . $row['passenger_capacity'] . "</td>";
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
