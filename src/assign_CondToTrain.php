<html>
<head>
<title>Railroad System</title>
</head>
<h1>Assign a Conductor to Train</h1>
<body>
  <?php
    if(isset($_COOKIE["username"])) {
      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];
      $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

      echo "<form action=\"assignCondToTrain.php\" method=post>";

      $sql=  "select ID from TRAIN";
      $result = $conn->query($sql);
      if($result->num_rows != 0) {
        echo "Train ID: <select name=\"ID\">";
        while($val = $result->fetch_assoc()) {
          echo "<option value='$val[ID]'>$val[ID]</option>";
        }
        echo "</select><br><br>";
      }

      $sql2=  "select condName from CONDUCTOR";
      $result2 = $conn->query($sql2);
      if($result2->num_rows != 0) {
        echo "Conductor Name: <select name=\"condName\">";
        while($val2 = $result2->fetch_assoc()) {
          echo "<option value='$val2[condName]'>$val2[condName]</option>";
        }
        echo "</select><br><br>";
      }

      echo "<input type=submit name=\"Submit\" value=\"Insert\">";
      echo "</form>";
      echo "<br><br><a href=\"main.php\">Return</a> to Home Page.";
    } else {
      echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
    }
   ?>
</body>
</html>
