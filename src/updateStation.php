<?php

if(isset($_COOKIE["username"])) {

  echo "<form action=\"updateStation2.php\" method=post>";

   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
   if($mysqli->connect_errno) {
     echo "Connection Error!";
     exit;
   }
     echo "<h2> What changes do you want to change </h2>";
     echo "<input type=hidden name=\"name\" value=\"$_POST[name]\">";

	   echo "Opening Time: <input type=text name=\"OT\" value=\"\"><br><br>";
     echo "Closing Time: <input type=text name=\"CT\" value=\"\"><br><br>";
     echo "Address: <input type=text name=\"LOC\" value=\"\"><br><br>";

     echo "<label for=\"type\">Train Type:</label>";
     echo "<select name=\"type\" id=\"type\">";
     echo "<option value=\"Cargo\">Cargo</option>";
     echo "<option value=\"Passanger\">Passenger</option>";
     echo "</select> <br> <br>";

	   echo "<input type=submit name=\"submit\" value=\"Update\">";

	echo "</form>";
  echo "<a href=\"main.php\">Return</a> to Home Page.";
} else {
  echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}
?>
