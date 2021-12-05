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
 //selection statment
    $sql = "select * from Apart_Of";

    if(!empty($_POST['routeid']) or !empty($_POST['sname']) or !empty($_POST['snumber']))
    {
      $sql .= " where";
    }
    

    if (!empty($_POST['routeid']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      };
      $sql .= " ID='$_POST[routeid]'";
      $condcounter++;
    }

    if (!empty($_POST['sname']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " name='$_POST[sname]'";
      $condcounter++;
    }

    if (!empty($_POST['snumber']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " stationNumber='$_POST[snumber]'";
      $condcounter++;
    }


    $result = $conn->query($sql);

    if($conn->query($sql))
    {
      echo "<tale border='1' style='width:100%'>
      <tr>
      <th>Route ID</th>
      <th>Station Name</th>
      <th>Station Number</th>
      </tr>";

    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . $row['routeid'] . "</td>";
      echo "<td>" . $row['sname'] . "</td>";
      echo "<td>" . $row['snumber'] . "</td>";
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