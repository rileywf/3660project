<html>
  <head>
    <title>Railroad System</title>
  </head>
  <body>
    <?php
      if(isset($_COOKIE["username"])) {
        $username = $_COOKIE["username"];
        $password = $_COOKIE["password"];
        $conn = new mysqli("vconroy.cs.uleth.ca", $username, $password, $username);


        echo "<form action=\"deleteTrain.php\" method=post>";
        $sql = "select * from TRAIN";
        $result = $conn->query($sql);
      }
     ?>

  </body>
</html>
