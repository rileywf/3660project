<?php
<<<<<<< HEAD
if (isset($_COOKIE["username"])) {
=======
if (isset($_COOKIE["username"])) { 
>>>>>>> 87bc0ea80ecf581c0506d4b2117369f3e385651d
$username = $_COOKIE["username"];
$password = $_COOKIE["password"];

$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
<<<<<<< HEAD
$sql = "update ROUTES set name='$_POST[rname]' where name='$_POST[oldname]'";
$result = $conn->query($sql);

if($result)
{
	echo "<h3> Route updated!</h3>";

} else {
   $err = $conn->errno();
   if($err == 1062)
   {
      echo "<p>Route name $_POST[rname] already has that name!</p>";
   } else {
      echo "error code $err";
   }

}
echo "<a href=\"main.php\">Return</a> to Home Page.";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
=======
$sql = "update ROUTES set name='$_POST[rname]', where name='$_POST[oldname]'"; 

echo $sql;

if($conn->query($sql)) 
{ 
	echo "<h3> Route updated!</h3>";

} else {
   $err = $conn->errno(); 
   if($err == 1062)
   {
      echo "<p>Route name $_POST[rname] already has that name!</p>"; 
   } else {
      echo "error code $err";
   }
   
}

echo "<a href=\"main.php\">Return</a> to Home Page.";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 
>>>>>>> 87bc0ea80ecf581c0506d4b2117369f3e385651d
}
?>
