<html>
  <h1>Query Station</h1>
  <body>
    <form action="queryStation.php" method=post>
    Station Name: <input type=text name="sname" value="" size=20><br><br>

    Station Opening Time: <input type=text name="sopen" value="" size=20><br><br>

    Station Closing Time: <input type=text name="sclose" value="" size=20><br><br>

    Location: <input type=text name="loc" value="" size=20><br><br>

    <label for="traintype">Type of Train Allowed at Station:</label>

    <select name="typeoftrain" id="traintype">
    <option value=""> - </option>
    <option value="Cargo">Cargo</option>
    <option value="Passanger">Passenger</option>
    </select><br><br>

    Leave all Fields Blank to query all<br><br>
    <input type=submit name="Submit" value="Query">

    </form>

  </body>
</html>
