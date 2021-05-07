<?php
session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1', 'root','','hackathon2');
	$query = mysqli_query($con, "SELECT * FROM company");
	$query2 = mysqli_query($con, "SELECT * FROM ankets WHERE userid='{$_SESSION['id']}'");
	$stroka2 = $query2->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Economica&display=swap" rel="stylesheet">

<body class="container pr-0 pl-0">
	<header>
		<div class="col-12 headcolor row">
			<div class="col-2">
				<form action="main.php" method="POST">
					<button class="btn col-12 pb-2 mt-3">
						<p class="hh ">
							BACK
						</p>
					</button>
				</form>
			</div>
			<div class="col-8">
				
			</div>
			<div class="col-2 row">
				
			</div>
		</div>
	</header>
	<section>
		<?php
                for($i=0;$i<mysqli_num_rows($query);$i++){
                	$stroka = $query->fetch_assoc();
        ?> 
		<div class="col-8 mx-auto mt-3">
			<h3 class="hhh text-center" style="color: black">Компании</h3>
			<div class="maincolorb borderblackkk pr-5 pl-5 pb-5 pt-5 mt-5">
				<div class="row">
					<div class="col-2">
						<img src="<?php echo $stroka['file']?>">
					</div>
					<div class="col-8">
							<h3 class="text-center hhh" style="color:#E9EBEF;"><?php echo $stroka['title']?></h3>
						<div class="col-10 mx-auto borderbotww">
							<h3 class="hh"><?php echo $stroka['textt']?></h3>
						</div>
					</div>
					<div class="col-2" style="margin-top: auto;">
						<form class="ml-3 col-12" action="podat.php" method="POST">
							<button class="premcolor col-12 rad" >
								<p class="h ">
									Подать заявку
								</p>
							</button>
							<input type="" name="anketid" style="display: none" value="<?php echo $stroka2['id']?>">
							<input type="" name="compid" style="display: none" value="<?php echo $stroka['id']?>">
						</form>						
					</div>
				</div>
			</div>
		</div>
		<?php }?>
	</section>

</body>
</html>