<html>
<head>
	<h1>Update Train</h1>
	<body>
	<h2>Specify which Train to Update</h2>
</head>
<body>
		<?php
			if(isset($_COOKIE["username"])) {
				$username = $_COOKIE["username"];
				$password = $_COOKIE["password"];
				$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

				echo "<form action=\"updateTrain.php\" method=post>";

				$sql=  "select ID from TRAIN";
				$result = $conn->query($sql);
				if($result->num_rows != 0) {
					echo "Train ID: <select name=\"ID\">";
					while($val = $result->fetch_assoc()) {
						echo "<option value='$val[ID]'>$val[ID]</option>";
					}
					echo "</select><br><br>";
				}

				echo "<input type=submit name=\"Submit\" value=\"Next\">";
				echo "</form>";
				echo "<br><br><a href=\"main.php\">Return</a> to Home Page.";
			} else {
				echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
			}
		 ?>
	</body>
</html>
