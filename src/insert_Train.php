
<html>
  <head>
    <title>Railroad System</title>
  </head>
  <h1>Add a new Train</h1>
  <body>

       <form action="insertTrain.php" method=post>

         <label for="Fuel">Choose a Train fuel type:</label>
         <select name="Fuel" id="Fuel">
         <option value="Diesel">Diesel</option>
         <option value="Electric">Electric</option>
         </select> <br> <br>

         <label for="Type">Choose a Train type:</label>
         <select name="Type" id="Type">
         <option value="Cargo">Cargo</option>
         <option value="Passanger">Passanger</option>
         </select> <br> <br>

         Passanger Capacity: <input type=text name="pasg" value="" size=20><br><br>

         <input type=submit name="Submit" value="Insert">
         <a href=\"main.php\">Return</a> to Home Page.

  </body>
</html>
