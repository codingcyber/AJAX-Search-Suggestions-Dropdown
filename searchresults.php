<?php
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
$selectdb = mysqli_select_db($connection, 'phpajax');
if(!$selectdb){
	die("Database Selection Failed" . mysqli_error($connection));
}

$search = $_GET['search'];
$sql = "SELECT * FROM cities WHERE name LIKE '$search%' LIMIT 5";
$result = mysqli_query($connection, $sql);
while($row = mysqli_fetch_assoc($result)){
	echo "<li><a href='#'>".$row['name']."</a>";
}
?>