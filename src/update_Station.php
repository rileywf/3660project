<html>
	<h1>Update Station</h1>
	<body>
	<h2>Specify What Station to Update</h2>
		<form action="updateStation.php" method=post>
		Specify Station Name: <input type=text name="SN" size=20><br><br>
 <label for="openingTime">Choose a Opening Train Time:</label>
    <select name="openingTime" id="OT">
      <option value=\"1 AM\">1 AM</option>
      <option value=\"2 AM\">2 AM</option>
      <option value=\"3 AM\">3 AM</option>
      <option value=\"4 AM\">4 AM</option>
      <option value=\"5 AM\">5 AM</option>
      <option value=\"6 AM\">6 AM</option>
      <option value=\"7 AM\">7 AM</option>
      <option value=\"8 AM\">8 AM</option>
      <option value=\"9 AM\">9 AM</option>
      <option value=\"10 AM\">10 AM</option>
      <option value=\"11 AM\">11 AM</option>
      <option value=\"12 PM\">12 PM</option>
      <option value=\"1 PM\">1 PM</option>
      <option value=\"2 PM\">2 PM</option>
      <option value=\"3 PM\">3 PM</option>
      <option value=\"4 PM\">4 PM</option>
      <option value=\"5 PM\">5 PM</option>
      <option value=\"6 PM\">6 PM</option>
      <option value=\"7 PM\">7 PM</option>
      <option value=\"8 PM\">8 PM</option>
      <option value=\"9 PM\">9 PM</option>
      <option value=\"10 PM\">10 PM</option>
      <option value=\"11 PM\">11 PM</option>
  </select> <br> <br>
 <label for="cloingTime">Choose a Closing Train Time:</label>
	<select name="closingTime" id="CT">
		<option value=\"1 AM\">1 AM</option>
		<option value=\"2 AM\">2 AM</option>
		<option value=\"3 AM\">3 AM</option>
		<option value=\"4 AM\">4 AM</option>
		<option value=\"5 AM\">5 AM</option>
		<option value=\"6 AM\">6 AM</option>
		<option value=\"7 AM\">7 AM</option>
		<option value=\"8 AM\">8 AM</option>
		<option value=\"9 AM\">9 AM</option>
		<option value=\"10 AM\">10 AM</option>
		<option value=\"11 AM\">11 AM</option>
		<option value=\"12 PM\">12 PM</option>
		<option value=\"1 PM\">1 PM</option>
		<option value=\"2 PM\">2 PM</option>
		<option value=\"3 PM\">3 PM</option>
		<option value=\"4 PM\">4 PM</option>
		<option value=\"5 PM\">5 PM</option>
		<option value=\"6 PM\">6 PM</option>
		<option value=\"7 PM\">7 PM</option>
		<option value=\"8 PM\">8 PM</option>
		<option value=\"9 PM\">9 PM</option>
		<option value=\"10 PM\">10 PM</option>
		<option value=\"11 PM\">11 PM</option>
</select> <br> <br>
<label for="Type">Choose a Station Type:</label>
    <select name="Type" id="Type">
	    <option value="Cargo">Cargo</option>
	    <option value="Passanger">Passanger</option>
  </select> <br> <br>
		Specify Location: <input type=text name="location" size=20><br><br>
		<input type=submit name="Submit" value="Update Station"></form>
	</body>
</html>
