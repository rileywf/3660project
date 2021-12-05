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

          $rname = 0;
          $traintype = 0;
          $rid = 0;

          $rname = $_POST['rname'];
          $traintype = $_POST['traintype'];
          $rid = $_POST['rid'];


          $condcounter = 0;
       //selection statment
          $sql = "select * from ROUTES";

          if(!empty($rname) or !empty($traintype) or !empty($rid))
          {
            $sql .= " where";
          }

          if (!empty($rname))
          {
            if($condcounter > 0)
            {
              $sql .= " and";
            };
            $sql .= " name='$rname'";
            $condcounter++;
          }

          if (!empty($traintype))
          {
            if($condcounter > 0)
            {
              $sql .= " and";
            }
            $sql .= " typesOfTrain='$traintype'";
            $condcounter++;
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

          $result = $conn->query($sql);

          if($conn->query($sql))
          {
            echo "<table class=\"table table-striped table-hover\">";
            echo "<thead><tr>";
            echo "<th scope=\"col\">Route ID</th>";
            echo "<th scope=\"col\">Route Name</th>";
            echo "<th scope=\"col\">Types of Train Supported</th>";
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
            echo "<td>$val[typesOfTrain]</td>";
            echo "</tr>";
          }

          echo "</tbody>";
          echo "</table>";
          echo "<a href=\"query_Route.php\">Return to Route Query</a>";


  } else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>
