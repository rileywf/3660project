<html>
  <body>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
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
      echo "<table class=\"table table-striped table-hover\">";
      echo "<thead><tr>";
      echo "<th scope=\"col\">Train ID</th>";
      echo "<th scope=\"col\">Assigned Route</th>";
      echo "<th scope=\"col\">Fuel Type</th>";
      echo "<th scope=\"col\">Type of Train</th>";
      echo "<th scope=\"col\">Passenger Capacity</th>";
      echo "</tr></thead>";
      echo "<tbody>";
    }

    else {
      $err = $conn->errono;
      printf("error: %d", $err);
    }

    while($val = mysqli_fetch_array($result))
    {
      $sql2 = "select name from ROUTES where ID='$rid'";
      $result2 = $conn->query($sql2);
      echo "<tr>";
      echo "<th scope=\"row\">$val[ID]</th>";
      if($result2->num_rows != 0) {
        $val2 = $result2->fetch_assoc();
        echo "<td>$val2[name]</td>";
      } else {
        echo "<td>unassigned</td>";
      }
      echo "<td>$val[Fuel]</td>";
      echo "<td>$val[Type]</td>";
      echo "<td>$val[passenger_capacity]</td>";
      echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "<a href=\"query_Train.php\">Return to Train Query</a>";

} else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>
