<html>
	<h1>Update Conductor</h1>
	<body>
	<h2>Specify Which Conductor to Update</h2>
		<form action="updateConductor.php" method=post>
		Specify Conductor Name: <input type=text name="rname" size=20><br><br>
    <label for="typesOfTrain">Choose a Certification type:</label>
    <select name="sname" id="Certification">
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select> <br> <br>
		Specify Route ID: <input type=text name="IDname" size=20><br><br>
		<input type=submit name="Submit" value="Update Route"></form>
	</body>
</html>


    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `rID` int(11) DEFAULT NULL,
    `phoneNum` int(11) DEFAULT NULL,
    `condName` char(255) DEFAULT NULL,
    `age` int(11) DEFAULT NULL,
    `Certification` enum('Yes','No') DEFAULT NULL,
    PRIMARY KEY (`ID`),
