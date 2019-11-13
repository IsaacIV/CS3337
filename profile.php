<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
</head>

<body>
<?php
include("main_menu.php");
?>

<?php
$connect = mysqli_connect("localhost", "root", "123456");
mysqli_select_db($connect, "p3337");
$selectBooks = "select * from books where email='" . $email . "'";
$results = mysqli_query($connect, $selectBooks);
?>

 <h1 aligh="center">
 Profile Page
 </h1>

 <h3>
    Email: <?php print $_SESSION["email"]; ?> <br>
    Password: <?php print $_SESSION["password"]; ?> <br>	
    Books Sellings: <br>
 </h3>

 <?php
 while ($row = mysqli_fetch_assoc($results)) 
 {
  print "- ";
  print($row["name"]);
  print "<br>";
} ?>


 <p align="center">
<img src="main_page.jpg" width=800 />
</p>

</body>
</html>
