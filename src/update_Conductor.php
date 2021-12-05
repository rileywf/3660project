<html>
	<h1>Update Conductor</h1>
	<body>
	<h2>Specify Which Conductor to Update</h2>
		<form action="updateConductor.php" method=post>
		Specify Conductor Name: <input type=text name="Cname" size=20><br><br>
    Specify Phone Number: <input type=text name="PN" size=20><br><br>
    Specify Conductor Age: <input type=text name="age" size=20><br><br>


    <label for="Certification">Is Conductor Certificated:</label>
    <select name="Cert" id="Certification">
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    </select> <br> <br>
		<input type=submit name="Submit" value="Update Conductor"></form>
	</body>
</html>
