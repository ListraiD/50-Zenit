<?php
session_start();
?>
<?php
	$image_dir="img/";
	$image_name=$image_dir . basename($_FILES['file']['name']);
	$upload=move_uploaded_file($_FILES['file']['tmp_name'], $image_name);
	$con = mysqli_connect('127.0.0.1', 'root','','hackathon2');
	$query = mysqli_query($con, "INSERT INTO company (title, email, password, textt, file)
							VALUES ('{$_POST['title']}','{$_POST['email']}', '{$_POST['password']}', '{$_POST['textt']}', '{$image_name}')");
	header('location: index.php');
	
	
		
?>