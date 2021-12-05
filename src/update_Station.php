<html>
	<h1>Update Station</h1>
	<body>
	<h2>Specify What Station to Update</h2>
		<form action="updateStation.php" method=post>
      Station Name: <input type=text name="SN" value="" size=20><br><br>

      Opening Time: <input type=text name="OT" value="" size=20><br><br>

      Closing Name: <input type=text name="CT" value="" size=20><br><br>

      Address: <input type=text name="loc" value="" size=20><br><br>

      <label for="Type">Type of station:</label>
      <select name="type" id="Type">
      <option value="Cargo">Cargo</option>
      <option value="Passanger">Passanger</option>
      </select> <br> <br>

      <input type=submit name="Submit" value="Update Station">
	</body>
</html>
