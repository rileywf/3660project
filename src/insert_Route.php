<html>
    <h1>Add a new Route</h1>
    <body>
        <form action="insertRoute.php" method=post>
        Name of Route: <input type=text name="rname" size=20><br><br>

        <label for="typesOfTrain">Choose a Train type:</label>
        <select name="sname" id="typesOfTrain">
        <option value="Cargo">Cargo</option>
        <option value="Passanger">Passanger</option>
      </select> <br> <br>
        <input type=submit name="Submit" value="Insert"></form>
        <a href=\"main.php\">Return</a> to Home Page.
    </body>
</html>
