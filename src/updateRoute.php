<?php
if(isset($_COOKIE["username"])){

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
	    where name='$_POST[rname]'
	    and typesOfTrain='$_POST[sname]'
	    and ID='$_POST[IDname]'";

	$result = $conn->query($sql);
	if(!$result)
	{
	   echo "Problem executing select!";
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

}
?>
