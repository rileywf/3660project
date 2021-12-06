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
      echo "<table class=\"table table-striped table-hover\">";
      echo "<thead><tr>";
      echo "<th scope=\"col\">Name</th>";
      echo "<th scope=\"col\">Opening Time</th>";
      echo "<th scope=\"col\">Closing Time</th>";
      echo "<th scope=\"col\">Location</th>";
      echo "<th scope=\"col\">Train Type Supported</th>";
      echo "</tr></thead>";
      echo "<tbody>";
    }

    else {
      $err = $conn->errono;
      printf("error: %d", $err);
    }

    while($val = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<th scope=\"row\">$val[name]</th>";
      echo "<td>$val[openingTime]</td>";
      echo "<td>$val[closingTime]</td>";
      echo "<td>$val[location]</td>";
      echo "<td>$val[Type]</td>";
      echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "<a href=\"query_Station.php\">Return to Station Query</a>";

} else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>
