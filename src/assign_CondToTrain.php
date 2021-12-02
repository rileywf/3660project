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
      $sql=  "select condName from CONDUCTOR";
      $result = $conn->query($sql);
      if($result->num_rows != 0) {
        echo "Conductor Name: <select name=\"name\">";
        while($val = $result->fetch_assoc()) {
          echo "<option value='$val[name]'>$val[name]</option>";
        }
        echo "</select><br><br>";
      }

        $sql2=  "select ID from TRAIN";
        $result2 = $conn->query($sql2);
        if($resul2t->num_rows != 0) {
          echo "Train ID: <select name=\"id\">";
          while($val = $result->fetch_assoc()) {
            echo "<option value='$val[id]'>$val[id]</option>";
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
