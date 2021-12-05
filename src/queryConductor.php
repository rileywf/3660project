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
    $routeid = $_POST['routeid'];
    $cert = $_POST['certification']


    $condcounter = 0;

        //selection statment
    $sql = "select * from CONDUCTOR";

    if(!empty($cname) or !empty($cid) or !empty($cphone) or !empty($cage) or !empty($cert))
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
      echo "<table border='1' style='width:100%'>
      <tr>
      <th>Name</th>
      <th>ID</th>
      <th>Phone Number</th>
      <th>Age</th>
      <th>Assigned Route</th>
      <th>Certification</th>
      </tr>";

    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . $row['cname'] . "</td>";
      echo "<td>" . $row['cid'] . "</td>";
      echo "<td>" . $row['cphone'] . "</td>";
      echo "<td>" . $row['cage'] . "</td>";
      echo "<td>" . $row['routeid'] . "</td>";
      echo "<td>" . $row['cert'] . "</td>";
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
