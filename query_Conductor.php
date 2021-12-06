<html>
  <h1>Query Conductors</h1>
  <body>
    <form action="queryConductor.php" method=post>
      Conductor Name: <input type=text name="cname" size=20><br><br>

      Conductor ID: <input type=text name="cid" size=20><br><br>

      Conductor Phone #: <input type=text name="cphone" size=20><br><br>

      Conductor Age: <input type=text name="cage" size=20><br><br>

      Assigned Route (ID): <input type=text name="routeid" size=20><br><br>

      <label for="cert">Certified?</label>

      <select name="certification" id="cert">
      <option value=""> - </option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
      </select>

      Leave all Fields Blank to query all<br><br>
      <input type=submit name="Submit" value="Query">

    </form>

    <a href="main.php">Return to homepage</a>

  </body>
</html>
