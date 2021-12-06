<html>
<head>
<title>Railroad System</title>
</head>
<h1>Pick an Train Arrival Time at Station</h1>
<body>
  <?php
    if(isset($_COOKIE["username"])) {
      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];
      $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

      echo "<form action=\"insertTime.php\" method=post>";

      $sql=  "select name from STATION";
      $result = $conn->query($sql);
      if($result->num_rows != 0) {
        echo "Station Name: <select name=\"name\">";
        while($val = $result->fetch_assoc()) {
          echo "<option value='$val[name]'>$val[name]</option>";
        }
        echo "</select><br><br>";
      }

      $sql2=  "select ID from TRAIN";
      $result2 = $conn->query($sql2);
      if($result->num_rows != 0) {
        echo "Train ID: <select name=\"id\">";
        while($val2 = $result2->fetch_assoc()) {
          echo "<option value='$val2[ID]'>$val2[ID]</option>";
        }
        echo "</select><br><br>";
      }

      echo "Arrival Time: <input type=text name=\"AT\" value=\"\" size=20><br><br>";

      echo "<input type=submit name=\"Submit\" value=\"Insert\">";
      echo "</form>";
      echo "<br><br><a href=\"main.php\">Return</a> to Home Page.";
    } else {
      echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
    }
   ?>
</body>
</html>
