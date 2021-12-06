<html>
<head>
<title>Railroad System</title>
</head>
<h1>Assign a Train to a Route</h1>
<body>
  <?php
    if(isset($_COOKIE["username"])) {
      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];
      $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

      echo "<form action=\"assignTrainToRoute.php\" method=post>";

      $sql=  "select ID from TRAIN";
      $result = $conn->query($sql);
      if($result->num_rows != 0) {
        echo "Train ID: <select name=\"ID\">";
        while($val = $result->fetch_assoc()) {
          echo "<option value='$val[ID]'>$val[ID]</option>";
        }
        echo "</select><br><br>";
      }

      $sql2=  "select ID, name from ROUTES";
      $result2 = $conn->query($sql2);
      if($result2->num_rows != 0) {
        echo "Route Name: <select name=\"ID2\">";
        while($val2 = $result2->fetch_assoc()) {
          echo "<option value='$val2[ID]'>$val2[name]</option>";
        }
        echo "</select><br><br>";
      }

      echo "<input type=submit name=\"Submit\" value=\"Insert\">";
      echo "</form>";
    } else {
      echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
    }
   ?>
</body>
</html>
