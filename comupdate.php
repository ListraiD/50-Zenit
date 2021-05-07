<?php 
session_start();
$image_dir="img/";
$image_name=$image_dir . basename($_FILES['file']['name']);
$upload=move_uploaded_file($_FILES['file']['tmp_name'], $image_name);
$con = mysqli_connect('127.0.0.1', 'root','','hackathon2');
$update=mysqli_query($con, "UPDATE company SET title = '{$_POST['title']}', textt='{$_POST['textt']}', file='{$image_name}' WHERE id='{$_SESSION['id']}'");
header('location: maincomp.php');
?>