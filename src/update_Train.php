<html>
  <head>
    <title>Railroad System</title>
  </head>
  <h1>Update a Train</h1>
  <body>

       <form action="updateTrain.php" method=post>

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

  </body>
</html>
