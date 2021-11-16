<?php

if(isset($_COOKIE["username"])) {

  echo "<form action=\"updateRoute2.php\" method=post>";

   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
   if($mysqli->connect_errno) {
     echo "Connection Error!";
     exit;
   }
	$sql = "select * from ROUTES
	    where name='$_POST[rname]'
	    and typesOfTrain='$_POST[sname]'
	    and ID='$_POST[IDname]'";

	$result = $conn->query($sql);
	if(!$result)
	{
	   echo "Problem executing select!";
	   exit;
	}

if($result->num_rows!= 0)
	{
	   $rec=$result->fetch_assoc();
     echo "<h2> What you want turn the Route into </h2>";
	   echo "Route Name: <input type=text name=\"rname\" value=\"$rec[rname]\"><br><br>";
	   echo "<label for=\"typesOfTrain\">Choose a Train type:</label>
     <select name=\"sname\" id=\"typesOfTrain\">
     <option value=\"Cargo\">Cargo</option>
     <option value=\"Passanger\">Passanger</option>
   </select> <br> <br>";
	   echo "Route ID: <input type=text name=\"ID\" value=\"$rec[IDname]\"><br><br>";
	   echo "<input type=hidden name=\"oldname\" value=\"$_POST[rname]\">";
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
