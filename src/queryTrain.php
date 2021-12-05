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
    $sql = "select * from TRAIN";

    if(!empty($_POST['ID'] or !empty($_POST['rID'])) or !empty($_POST['Fuel']) or !empty($_POST['Type']) or !empty($_POST['passenger_capacity']))
    {
      $sql .= " where";
    }

    if (!empty($_POST['tid']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " ID='$_POST[tid]'";
      $condcounter++;
    }

    if (!empty($_POST['rid']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " rID='$_POST[rid]'";
      $condcounter++;
    }

    if (!empty($_POST['fueltype']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " Fuel='$_POST[fueltype]'";
      $condcounter++;
    }

    if (!empty($_POST['traintype']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " Type='$_POST[traintype]'";
      $condcounter++;
    }

    if (!empty($_POST['pcapacity']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " passenger_capacity='$_POST[pcapacity]'";
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
      <th>passenger_capacity</th>
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
