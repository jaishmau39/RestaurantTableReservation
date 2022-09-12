<!DOCTYPE html>
<?php
//Step1
 $db = mysqli_connect('localhost','root','root','database_name')
 or die('Error connecting to MySQL server.');
?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>input form</title>
		<link rel="stylesheet" href="stylelogreg.css">
	</head>
	<body>
		<div class="box">
			<h2>Login</h2>
			<form>
				<div class="inputBox">
					<input type="text" name="name" required="">
					<label>Username</label>
				</div>
				<div class="inputBox">
					<input type="password" name="password" required="">
					<label>password</label>
				</div>
				<input type="submit" name="" value="submit">
			</form>
		</div>
 
            <?php
            $a=$_GET("name")
            $b=$_GET("password")
            $query = "INSERT INTO TABLE table_name VALUES ($a,$b)";
            mysqli_query($db, $query) or die('Error querying database.');
            ?>
	</body>
</html>