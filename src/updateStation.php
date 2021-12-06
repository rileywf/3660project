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
	$sql = "select * from STATION
	    where name='$_POST[SN]'
	    and openingTime='$_POST[OT]'
      and closingTime='$_POST[CT]'
      and location='$_POST[loc]'
      and Type='$_POST[Type]'";

	$result = $conn->query($sql);
	if(!$result)
	{
	   echo "Problem executing select!";
	   exit;
	}

if($result->num_rows!= 0)
	{
    echo "<h2> What you want turn the Route into </h2>";
    echo "Route Name: <input type=text name=\"rname\" value=\"$rec[rname]\"><br><br>";
    echo "<label for=\"typesOfTrain\">Choose a Station type:</label>
    <select name=\"Type\" id=\"Type\">
    <option value=\"Cargo\">Cargo</option>
    <option value=\"Passanger\">Passanger</option>
  </select> <br> <br>";

	   $rec=$result->fetch_assoc();
     echo "<h2> What you name would you like to update the Station to? </h2>";
	   echo "Station Name: <input type=text name=\"SN\" value=\"$rec[SN]\"><br><br>";
	   echo "<label for=\"openingTime\">Choose a Opening Time:</label>
     <select name=\"openingTime\" id=\"OT\">
     <option value=\"1 AM\">1 AM</option>
     <option value=\"2 AM\">2 AM</option>
     <option value=\"3 AM\">3 AM</option>
     <option value=\"4 AM\">4 AM</option>
     <option value=\"5 AM\">5 AM</option>
     <option value=\"6 AM\">6 AM</option>
     <option value=\"7 AM\">7 AM</option>
     <option value=\"8 AM\">8 AM</option>
     <option value=\"9 AM\">9 AM</option>
     <option value=\"10 AM\">10 AM</option>
     <option value=\"11 AM\">11 AM</option>
     <option value=\"12 PM\">12 PM</option>
     <option value=\"1 PM\">1 PM</option>
     <option value=\"2 PM\">2 PM</option>
     <option value=\"3 PM\">3 PM</option>
     <option value=\"4 PM\">4 PM</option>
     <option value=\"5 PM\">5 PM</option>
     <option value=\"6 PM\">6 PM</option>
     <option value=\"7 PM\">7 PM</option>
     <option value=\"8 PM\">8 PM</option>
     <option value=\"9 PM\">9 PM</option>
     <option value=\"10 PM\">10 PM</option>
     <option value=\"11 PM\">11 PM</option>
   </select> <br> <br>";
	   echo "Enter station name: <input type=text name=\"ID\" value=\"$rec[SN]\"><br><br>";
	   echo "<input type=hidden name=\"oldname\" value=\"$_POST[SN]\">";
	   echo "<input type=submit name=\"submit\" value=\"Update\">";
	}
	else
	{
		echo "<p>Umm...you may want to enter some data. ;) </p>";
	}
	echo "</form>";
  echo "<a href=\"main.php\">Return</a> to Home Page.";
} else {
  echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}
?>
