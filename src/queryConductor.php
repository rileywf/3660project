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
/*
    $sql = "select * from CONDUCTOR
            where condName='$_POST[cname]'
            or ID='$_POST[cid]'
            or phoneNum='$_POST[cphone]'
            or age='$_POST[cage]'
            or rID='$_POST[routeid]'
            or Certification='$_POST[certification]'";
*/
            
            //selection statment
            $sql = "select * from CONDUCTOR
                    where";

            if (!empty($_POST['cname']))
            {
              if($condcounter > 0)
              {
                $sql .= " and";
              }
              $sql .= " condName='$_POST[cname]'";
              $condcounter++;
            }

            if (!empty($_POST['cid']))
            {
              if($condcounter > 0)
              {
                $sql .= " and";
              }
              $sql .= " ID='$_POST[cid]'";
              $condcounter++;
            }

            if (!empty($_POST['cphone']))
            {
              if($condcounter > 0)
              {
                $sql .= " and";
              }
              $sql .= " phoneNum='$_POST[cphone]'";
              $condcounter++;
            }

            if (!empty($_POST['cage']))
            {
              if($condcounter > 0)
              {
                $sql .= " and";
              }
              $sql .= " age='$_POST[cage]'";
              $condcounter++;
            }

            if (!empty($_POST['routeid']))
            {
              if($condcounter > 0)
              {
                $sql .= " and";
              }
              $sql .= " rID='$_POST[routeid]'";
              $condcounter++;
            }

            if (!empty($_POST['certification']))
            {
              if($condcounter > 0)
              {
                $sql .= " and";
              }
              $sql .= " Certification='$_POST[certification]'";
              $condcounter++;
            }

    $result = $conn->query($sql);

    if($conn->query($sql))
    {
      echo "<tale border='1' style='width:100%'>
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
  echo "<a href=\"main.php\">Return to homepage<\a>";

} else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
?>