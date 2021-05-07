<?php 
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','hackathon2');
$update=mysqli_query($con, "UPDATE ankets SET name = '{$_POST['name']}', tag='{$_POST['tag']}', city='{$_POST['city']}', dat='{$_POST['dat']}', stag='{$_POST['stag']}', sex='{$_POST['sex']}', school='{$_POST['school']}', lang='{$_POST['lang']}', textt='{$_POST['textt']}', phone='{$_POST['phone']}', email='{$_POST['email']}', insta='{$_POST['insta']}' WHERE userid='{$_SESSION['id']}'");
header('location: page.php');
?>