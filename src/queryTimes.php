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
    $sql = "select * from TIMES";

    if(!empty($_POST['rid'] or !empty($_POST['arrtime'])) /*or !empty($_POST['times'])*/ )
    {
      $sql .= " where";
    }


    if (!empty($_POST['rid']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " ID='$_POST[rid]'";
      $condcounter++;
    }

    if (!empty($_POST['arrivesTimes']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " arrivesTimes='$_POST[cid]'";
      $condcounter++;
    }
/*
    if (!empty($_POST['times']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " times='$_POST[times]'";
      $condcounter++;
    }
*/

$result = $conn->query($sql);

if($conn->query($sql))
{
  echo "<table border='1' style='width:100%'>
  <tr>
  <th>Route ID</th>
  <th>Arrival Times</th>
  <th>Departure Times</th>
  </tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['arrivesTimes'] . "</td>";
  echo "<td>" . $row['times'] . "</td>";
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
