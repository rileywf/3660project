<?php
if(isset($_COOKIE["username"])){

<<<<<<< HEAD
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
=======
echo "<form action=\"updateRoute2.php\" method=post>";

	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];	

	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
	if($conn->connect_errno)
	{
	   echo "Connection Problem!";
	   exit; 
	}
	
	$sql = "select * from ROUTES 
>>>>>>> 87bc0ea80ecf581c0506d4b2117369f3e385651d
	    where name='$_POST[rname]'
	    and typesOfTrain='$_POST[sname]'
	    and ID='$_POST[IDname]'";

	$result = $conn->query($sql);
	if(!$result)
	{
	   echo "Problem executing select!";
<<<<<<< HEAD
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
=======
	   exit; 
	}

     // ('$_POST[IDname]','$_POST[rname]','$_POST[sname]')"; AND IDname='$_POST[IDname]'

        if($result->num_rows!= 0)
	{
	   $rec=$result->fetch_assoc(); 
	   echo "Route Name: <input type=text name=\"rname\" value=\"$rec[rname]\"><br><br>";
	   echo "Supported Trains: <input type=text typesOfTrain=\"loc\" value=\"$rec[sname]\"><br><br>";
	   echo "Route ID: <input type=text name=\"ID\" value=\"$rec[IDname]\"><br><br>";
	   echo "<input type=hidden name=\"oldname\" value=\"$_POST[rname]\">";
	   echo "<input type=submit name=\"submit\" value=\"Update\">"; 
	}
	else
	{
		echo "<p>Umm...you may want to enter some data. ;) </p>"; 
	}

	echo "</form>";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 

>>>>>>> 87bc0ea80ecf581c0506d4b2117369f3e385651d
}
?>
