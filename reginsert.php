<?php
session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1', 'root','','hackathon2');
		$query = mysqli_query($con, "INSERT INTO users (email, name, password)
							VALUES ('{$_POST['email']}', '{$_POST['name']}', '{$_POST['password']}')");
		header('location: index.php');
		
?>