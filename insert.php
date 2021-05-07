<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','hackathon2');
$query = mysqli_query($con, "INSERT INTO ankets (name, tag, city, dat, stag, sex, school, lang, textt, phone, email, insta, userid)
							VALUES ('{$_POST['name']}','{$_POST['tag']}','{$_POST['dat']}','{$_POST['city']}','{$_POST['stag']}','{$_POST['sex']}','{$_POST['school']}','{$_POST['lang']}','{$_POST['textt']}','{$_POST['phone']}','{$_POST['email']}','{$_POST['insta']}','{$_SESSION['id']}')");
		header('location: page.php');

?>