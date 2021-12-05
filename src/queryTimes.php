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
    $depttime = 0;

    $rid = $_POST['rid'];
    $arrtime = $_POST['arrtime'];
    $depttime = $_POST['depttime'];

    $condcounter = 0;
    $sql = "select * from TIMES";

    if(!empty($rid) or !empty($arrtime) or !empty($depttime))
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

    if (!empty($_POST['arrivesTimes']))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " arrivesTimes='$arrtime'";
      $condcounter++;
    }

    if (!empty($depttime))
    {
      if($condcounter > 0)
      {
        $sql .= " and";
      }
      $sql .= " times='$depttime'";
      $condcounter++;
    }


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
