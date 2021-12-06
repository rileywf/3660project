<html>
	<h1>Update Station</h1>
	<body>
	<h2>Select which Station to Update</h2>
		<?php
			if(isset($_COOKIE["username"])) {
				$username = $_COOKIE["username"];
				$password = $_COOKIE["password"];
				$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

				echo "<form action=\"updateStation.php\" method=post>";

				$sql=  "select name from STATION";
				$result = $conn->query($sql);
				if($result->num_rows != 0) {
					echo "Station Name: <select name=\"name\">";
					while($val = $result->fetch_assoc()) {
						echo "<option value='$val[name]'>$val[name]</option>";
					}
					echo "</select><br><br>";
				}

				echo "<input type=submit name=\"Submit\" value=\"Update Station\">";
				echo "</form>";
				echo "<br><br><a href=\"main.php\">Return</a> to Home Page.";
			} else {
				echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
			}
		 ?>
	</body>
</html>
