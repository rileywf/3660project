<html>
  <body>
      <title> Railroad System - Delete a Conductor</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  <?php
      if(isset($_COOKIE["username"])) {
          $username = $_COOKIE["username"];
          $password = $_COOKIE["password"];
          $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
          $sql = "select * from CONDUCTOR";
          $result = $conn->query($sql);
          echo "<table class=\"table table-striped table-hover\">";
          echo "<thead><tr>";
          echo "<th scope=\"col\">ID</th>";
          echo "<th scope=\"col\">Name</th>";
          echo "<th scope=\"col\">Assigned Train</th>";
          echo "<th scope=\"col\">Age</th>";
          echo "<th scope=\"col\">Phone Number</th>";
          echo "<th scope=\"col\">Certified?</th>";
          echo "<th scope=\"col\">Delete</th>";
          echo "</tr></thead>";
          echo "<tbody>";
          while($val = mysqli_fetch_array($result)) {
            $sql2 = "select ID from TRAIN where ID='$val[ID]'";
            $result2 = $conn->query($sql);
            $val2 = $result2->fetch_assoc();
            echo "<tr>";
            echo "<th scope=\"row\">$val[ID]</th>";
            echo "<td>$val[condName]</td>";
            echo "<td>$val[tID]</td>";
            echo "<td>$val[age]</td>";
            echo "<td>$val[phoneNum]</td>";
            echo "<td>$val[Certification]</td>";
            echo "<td><a href=\"deleteConductor.php?id=$val[ID]\">Delete</a></td>";
            echo "</tr>";
          }
          echo "</tbody>";
          echo "</table>";
          echo "<br><br><a href=\"main.php\">Return</a> to Home Page.";
        } else {
          echo "<h1>Not logged in redirecting...</h1>";
          header("Location: index.php");
          die();
        }
  ?>
</html>
