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

    $rid = 0;
    $arrtime = 0;
    $tid = 0;

    $rid = $_POST['rid'];
    $arrtime = $_POST['arrtime'];
    $tid = $_POST['tid'];

    $condcounter = 0;
    $sql = "select * from TIMES";

    if(!empty($rid) or !empty($arrtime) or !empty($tid))
    {
      $sql .= " where";
    }


    if (!empty($rid))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " ID='$rid'";
      $condcounter++;
    }

    if (!empty($arrtime))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " arrivals='$arrtime'";
      $condcounter++;
    }

    if (!empty($tid))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " ID2='$tid'";
      $condcounter++;
    }

    $result = $conn->query($sql);

    if($conn->query($sql))
    {
      echo "<table class=\"table table-striped table-hover\">";
      echo "<thead><tr>";
      echo "<th scope=\"col\">Station Name</th>";
      echo "<th scope=\"col\">Train ID</th>";
      echo "<th scope=\"col\">Arrival Times</th>";
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
      echo "<th scope=\"row\">$val[ID]</th>";
      echo "<td>$val[ID2]</td>";
      echo "<td>$val[arrivals]</td>";
      echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "<a href=\"query_Times.php\">Return to Time Table Query</a>";


} else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>
