<html>
  <head>
    <title> Railroad System </title>
  </head>
  <body>
    <?php
      echo "<p>$_POST[name]</p>";
      if(isset($_COOKIE["username"])) {
          $username = $_COOKIE["username"];
          $password = $_COOKIE["password"];
          $conn = new mysqli("vconroy.cs.uleth.ca", $username, $password, $password);

          $sql = "update ROUTES set name='ISWork' where name='$_POST[name]'";
          if($conn->query($sql)) {
            echo "<p>Updated</p>";
          } else {
            $err = $conn->errno;
            $errtext = $conn->error;
            echo $errtext;
          }
      } else {
        echo "<p> Error!</p>";
      }
    ?>
  </body>
</html>