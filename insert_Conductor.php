<html>
<head>
<title>Railroad System</title>
</head>
<h1>Add a new Conductor</h1>
<body>
    <form action="insertConductor.php" method=post>
      Conductor Name: <input type=text name="Cname" value="" size=20><br><br>
      Phone Number: <input type=text name="PN" value="" size=20><br><br>


       Age: <input type=text name="age" value="" size=20><br><br>

       <label for="Certification">Is Conductor Certificated:</label>
       <select name="Cert" id="Certification">
       <option value="Yes">Yes</option>
       <option value="No">No</option>
       </select> <br> <br>

       <input type=submit name="Submit" value="Insert">
     </form>
</body>
</html>
