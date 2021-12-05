<html>
	<h1>Query Route</h1>
	<body>
		<form action="queryRoute.php" method=post>
		Route Name: <input type=text name="rname" size=20><br><br>

		<label for="typesOfTrain">Choose a Train type:</label>
		<select name="traintype" id="typesOfTrain">
		<option value=""> - </option>
		<option value="Cargo">Cargo</option>
		<option value="Passanger">Passenger</option>
		</select> <br> <br>

		Route ID: <input type=text name="rid" size=20><br><br>

		Leave all Fields Blank to query all<br><br>
		<input type=submit name="Submit" value="Query">

		</form>

	</body>
</html>
