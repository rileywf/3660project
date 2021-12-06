<?php

if(isset($_COOKIE["username"])) {

  echo "<form action=\"updateConductor2.php\" method=post>";

   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
   if($mysqli->connect_errno) {
     echo "Connection Error!";
     exit;
   }
     echo "<h2> What changes do you want to change </h2>";
     echo "<input type=hidden name=\"ID\" value=\"$_POST[ID]\">";

	   echo "Conductor Name: <input type=text name=\"name\" value=\"\"><br><br>";

	   echo "phoneNum: <input type=text name=\"pnum\" value=\"\"><br><br>";

     echo "age: <input type=text name=\"age\" value=\"\"><br><br>";

     echo "<label for=\"Certification\">Is Conductor Certificated:</label>";
     echo "<select name=\"Certification\" id=\"Certification\">";
     echo "<option value=\"Yes\">Yes</option>";
     echo "<option value=\"No\">No</option>";
     echo "</select> <br> <br>";

	   echo "<input type=submit name=\"submit\" value=\"Update\">";

	echo "</form>";
  echo "<a href=\"main.php\">Return</a> to Home Page.";
} else {
  echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}
?>
