<html>
<head>
<title>Railroad System</title>
</head>
<h1>Assign a Station to Route</h1>
<body>
  <?php
    if(isset($_COOKIE["username"])) {
      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];
      $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

      echo "<form action=\"assignStationToRoute.php\" method=post>";

      $sql=  "select name from STATION";
      $result = $conn->query($sql);
      if($result->num_rows != 0) {
        echo "Station Name: <select name=\"name\">";
        while($val = $result->fetch_assoc()) {
          echo "<option value='$val[name]'>$val[name]</option>";
        }
        echo "</select><br><br>";
      }

      $sql2=  "select ID, name from ROUTES";
      $result2 = $conn->query($sql2);
      if($result2->num_rows != 0) {
        echo "Route Name: <select name=\"ID\">";
        while($val2 = $result2->fetch_assoc()) {
          echo "<option value='$val2[ID]'>$val2[name]</option>";
        }
        echo "</select><br><br>";
      }

      echo "Station Number: <input type=text name=\"stationNumber\" value=\"\" size=20><br><br>";
      echo "<input type=submit name=\"Submit\" value=\"Insert\">";
      echo "</form>";
      echo "<br><br><a href=\"main.php\">Return</a> to Home Page.";
    } else {
      echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
    }
   ?>
</body>
</html>
