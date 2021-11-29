<html>
<head>
<title>Railroad System</title>
</head>
<h1>Add a new Conductor</h1>
<body>
<?php
  if(isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
    $password = $_COOKIE["password"];
    $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

    echo "<form action=\"insertConductor.php\" method=post>";
    $sql=  "select ID from TRAIN";
    $result = $conn->query($sql);
    if($result->num_rows != 0) {
      echo "Train ID: <select name=\"rid\">";
      while($val = $result->fetch_assoc()) {
        echo "<option value='$val[ID]'>$val[ID]</option>";
      }
      echo "</select><br><br>";

      echo "Phone Number: <input type=text name=\"PN\" value=\"\" size=20><br><br>";

      echo "Conductor Name: <input type=text name=\"Cname\" value=\"\" size=20><br><br>";

      echo "Age: <input type=text name=\"age\" value=\"\" size=20><br><br>";

      echo "<label for=\"Certification\">Is Conductor Certificated:</label>";
      echo "<select name=\"Cert\" id=\"Certification\">";
      echo "<option value=\"Yes\">Yes</option>";
      echo "<option value=\"No\">No</option>";
      echo "</select> <br> <br>";

      echo "<input type=submit name=\"Submit\" value=\"Insert\">";
    } else {
      echo "<p> ERROR, ENTER SOME DATA</p>";
    }
    echo "</form>";
  } else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
  }
 ?>
</html>
