<?php 
$con = mysqli_connect('127.0.0.1', 'root','','hackathon2');
$update=mysqli_query($con, "UPDATE company SET anketid= '{$_POST['compid']}' WHERE id={$_POST['anketid']}'");
$update2=mysqli_query($con, "UPDATE ankets SET compid = '{$_POST['anketid']}' WHERE id='{$_POST['compid']}'");
header('location: company.php');
?>