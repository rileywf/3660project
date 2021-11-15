<html>
  <head>
    <title>Railroad System</title>
  </head>
  <body>
    <?php
      if(isset($_COOKIE["username"])) {
        $username = $_COOKIE["username"];
        $password = $_COOKIE["password"];
        $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

        echo "<form action=\"deleteRoute.php\" method=post>";
        $sql=  "select name from ROUTES";
        $result = $conn->query($sql);
        if($result->num_rows != 0) {
          echo "Route Name: <select name=\"name\">";
          while($val = $result->fetch_assoc()) {
            echo "<option value='$val[name]'>$val[name]</option>";
          }
          echo "</select>";
          echo "<input type=submit name=\"Submit\" value=\"Delete\">";
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
