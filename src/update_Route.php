<html>
  <head>
    <title> Railroad System </title>
  </head>
  <body>
    <?php
      if(isset($_COOKIE["username"])) {
        echo "<form action=\"updateRoute.php\" method=post>";
        $username = $_COOKIE["username"];
        $password = $_COOKIE["password"];
        $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

        $sql = "select name from ROUTES";
        $result = $conn->query($sql);
        if($result->num_rows != 0) {
          echo "<h3>Railroad Routes <select name=\"name\">";
          while($val = $result->fetch_assoc()) {
            echo "<option value='$val[name]'>$val[name]</option>";
          }
          echo "</select>";
          echo "<input type=submit name=\"submit\" value=\"View\">";
        } else {
          echo "<p>No data in ROUTES</p>";
        }
        echo "</form>";
      } else {
        echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
      }
     ?>
   </body>
 </html>
