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

    $cname = 0;
    $cid = 0;
    $cphone = 0;
    $cage = 0;
    $routeid = 0;
    $cert = 0;

    $cname = $_POST['cname'];
    $cid = $_POST['cid'];
    $cphone = $_POST['cphone'];
    $cage = $_POST['cage'];
    $trainid = $_POST['trainid'];
    $cert = $_POST['certification'];


    $condcounter = 0;

        //selection statment
    $sql = "select * from CONDUCTOR";

    if(!empty($cname) or !empty($cid) or !empty($cphone) or !empty($cage) or !empty($trainid) or !empty($cert))
    {
      $sql .= " where";
    }

    if (!empty($cname))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " condName='$cname'";
      $condcounter++;
    }

        if (!empty($cid))
        {
          if($condcounter > 0)
          {
            $sql .= " and";
          }
          $sql .= " ID='$cid'";
          $condcounter++;
        }

        if (!empty($cphone))
        {
          if($condcounter > 0)
          {
            $sql .= " and";
          }
          $sql .= " phoneNum='$cphone'";
          $condcounter++;
        }

        if (!empty($cage))
        {
          if($condcounter > 0)
          {
            $sql .= " and";
          }
          $sql .= " age='$cage'";
          $condcounter++;
        }

        if (!empty($routeid))
        {
          if($condcounter > 0)
          {
            $sql .= " and";
          }
          $sql .= " rID='$routeid'";
          $condcounter++;
        }

        if (!empty($cert))
        {
          if($condcounter > 0)
          {
            $sql .= " and";
          }
          $sql .= " Certification='$cert'";
          $condcounter++;
        }

        $result = $conn->query($sql);

        if($conn->query($sql))
        {
          echo "<table class=\"table table-striped table-hover\">";
          echo "<thead><tr>";
          echo "<th scope=\"col\">Name</th>";
          echo "<th scope=\"col\">Conductor ID</th>";
          echo "<th scope=\"col\">Phone Number</th>";
          echo "<th scope=\"col\">Age</th>";
          echo "<th scope=\"col\">Assigned Train</th>";
          echo "<th scope=\"col\">Certified?</th>";
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
          echo "<th scope=\"row\">$val[condName]</th>";
          echo "<td>$val[ID]</td>";
          echo "<td>$val[phoneNum]</td>";
          echo "<td>$val[age]</td>";
          echo "<td>$val[tID]</td>";
          echo "<td>$val[Certification]</td>";
          echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "<a href=\"query_Conductor.php\">Return to Conductor Query</a>";

} else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>
