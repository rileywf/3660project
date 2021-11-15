<html>
    <h1>Delete a Route</h1>
    <body>
      <form action="deleteRoute.php" method=post>
      Route Name: <input type=text name="rname" size=20><br><br>
      Route ID: <input type=text name="IDname" size=20><br><br>
      <label for="typesOfTrain">Choose a Train type:</label>
      <select name="sname" id="typesOfTrain">
      <option value="Cargo">Cargo</option>
      <option value="Passanger">Passanger</option>
    </select> <br> <br>
      <input type=submit name="Submit" value="Delete"></form>
    </body>
</html>
