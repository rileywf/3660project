
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

      if($conn->query($sql)) {
      echo "<table border='1' style='width:100%'>
      <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Name</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
      echo "<tr>";
      echo "<td>" . $row['ID'] . "</td>";
      echo "<td>" . $row['typesOfTrain'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "</tr>";
      }
      echo "</table>";
    } else {
      $err = $conn->errono;
      printf("error: %d", $err);
    }
    echo "<a href=\"main.php\">Return to Home Page.</a>";

  } else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>
