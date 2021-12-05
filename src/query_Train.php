<html>
  <h1>Query Trains.</h1>
  <body>
    <form action="queryTrain.php" method=post>
      Train ID: <input type=text name="tid" size=20><br><br>

      Route ID: <input type=text name="rid" size=20><br><br>

      <label for="fuel">Train Fuel Type:</label>

      <select name="fueltype" id="fuel">
      <option value=""> - </option>
      <option value="Electric">Electric</option>
      <option value="Diesel">Diesel</option>
      </select><br><br>

      <label for="typeoftrain">Choose a Train type:</label>
		  <select name="traintype" id="typeoftrain">
      <option value=""> - </option>
		  <option value="Cargo">Cargo</option>
		  <option value="Passanger">Passenger</option>
		  </select> <br> <br>

      Passenger Capacity: <input type=text name="pcapacity" size 20><br><br>

      Leave all Fields Blank to query all<br><br>
      <input type=submit name="Submit" value="Query">

      </form>

      <a href="main.php">Return to homepage</a>

  </body>
</html>
