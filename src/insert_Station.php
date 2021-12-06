<html>
<head>
<title>Railroad System</title>
</head>
<h1>Add a new Station</h1>
<body>
    <form action="insertStation.php" method=post>
    Station Name: <input type=text name="SN" value="" size=20><br><br>

    Opening Time: <input type=text name="OT" value="" size=20><br><br>

    Closing Time: <input type=text name="CT" value="" size=20><br><br>

    Address: <input type=text name="loc" value="" size=20><br><br>

    <label for="Type">Type of station:</label>
    <select name="type" id="Type">
    <option value="Cargo">Cargo</option>
    <option value="Passanger">Passanger</option>
    </select> <br> <br>

    <input type=submit name="Submit" value="Insert">
    <br><br><a href=\"main.php\">Return</a> to Home Page.

</body>
</html>
