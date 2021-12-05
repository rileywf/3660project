<html>
  <h1>Query Station</h1>
  <body>
    <form action="queryStation.php" method=post>
    Station Name: <input type=text name="sname" size=20><br><br>

    Station Opening Time: <input type=text name="sopen" size=20><br><br>

    Station Closing Time: <input type=text name="sclose" size=20><br><br>

    Location: <input type=text name="loc" size=20><br><br>

    <label for="traintype">Type of Train Allowed at Station:</label>

    <select name="typeoftrain" id="traintype">
    <option value=""> - </option>
    <option value="Cargo">Cargo</option>
    <option value="Passanger">Passenger</option>
    </select><br><br>

    <input type=submit name="Submit" value="Query">

    </form>
    
  </body>
</html>
