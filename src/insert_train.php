
<html>
  <head>
    <title>Railroad System</title>
  </head>
  <h1>Add a new Train</h1>
  <body>
    <?php
      if(isset($_COOKIE["username"])) {
        $username = $_COOKIE["username"];
        $password = $_COOKIE["password"];
        $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

        echo "<form action=\"insertTrain.php\" method=post>";
        echo "ID of Train: <input type=text name=\"idname\" value=\"\" size=20><br><br>";
        $sql=  "select name from ROUTES";
        $result = $conn->query($sql);
        if($result->num_rows != 0) {
          echo "Route Name: <select name=\"rid\">";
          while($val = $result->fetch_assoc()) {
            $sql2 = "select ID from ROUTES where name = \"name\"";
            echo "<option value='$val[name]'>$val[name]</option>";
          }
          echo "</select> <br> <br>";

          echo "<label for=\"Fuel\">Choose a Train fuel type:</label>";
          echo "<select name=\"Fuel\" id=\"Fuel\">";
          echo "<option value=\"Diesel\">Diesel</option>";
          echo "<option value=\"Electric\">Electric</option>";
          echo "</select> <br> <br>";

          echo "<label for=\"Type\">Choose a Train type:</label>";
          echo "<select name=\"Type\" id=\"Type\">";
          echo "<option value=\"Cargo\">Cargo</option>";
          echo "<option value=\"Passanger\">Passanger</option>";
          echo "</select> <br> <br>";

          echo "Passanger Capacity: <input type=text name=\"pasg\" value=\"\" size=20><br><br>";

          echo "<input type=submit name=\"Submit\" value=\"Insert\">";
        } else {
          echo "<p> ERROR, ENTER SOME DATA</p>";
        }
        echo "</form>";
      } else {
        echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
      }
     ?>
  </body>
</html>
