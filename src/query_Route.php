<html>
	<h1>Query Route</h1>
	<body>
		<form action="queryRoute.php" method=post>
		Route Name: <input type=text name="rname" size=20><br><br>

		<label for="typesOfTrain">Choose a Train type:</label>
		<select name="sname" id="typesOfTrain">
		<option value="Cargo">Cargo</option>
		<option value="Passanger">Passanger</option>
	</select> <br> <br>

		Route ID: <input type=text name="IDname" size=20><br><br>

		<input type=submit name="Submit" value="Query"></form>

		<form action="queryRoute2.php" method=post>
			<input type=submit value="All"></form>

	</body>
</html>