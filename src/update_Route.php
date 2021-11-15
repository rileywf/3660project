<html>
	<h1>Update Route</h1>
	<body>
	<h2>Specify What Route to Update</h2>
		<form action="updateRoute.php" method=post>
		Specify Route Name: <input type=text name="rname" size=20><br><br>
    <label for="typesOfTrain">Choose a Train type:</label>
    <select name="sname" id="typesOfTrain">
    <option value="Cargo">Cargo</option>
    <option value="Passanger">Passanger</option>
  </select> <br> <br>
		Specify Route ID: <input type=text name="IDname" size=20><br><br>
		<input type=submit name="Submit" value="Update Route"></form>
	</body>
</html>
