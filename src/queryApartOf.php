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
      echo "<table class=\"table table-striped table-hover\">";
      echo "<thead><tr>";
      echo "<th scope=\"col\">Route ID</th>";
      echo "<th scope=\"col\">Station Name</th>";
      echo "<th scope=\"col\">Station Number</th>";
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
      echo "<td>$val[name]</td>";
      echo "<td>$val[stationNumber]</td>";
      echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "<a href=\"query_Apart_Of.php\">Return to Route Assignment Query</a>";


} else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>
