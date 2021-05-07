<?php
session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1', 'root','','hackathon2');
	$query = mysqli_query($con, "SELECT * FROM company WHERE id='{$_SESSION['id']}'");
	$query2 = mysqli_query($con, "SELECT * FROM ankets ");
	$stroka=$query->fetch_assoc(); 
	
	
?>
<!DOCTYPE html>
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
				<form action="index.php" method="POST">
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
				<form action="editcompany.php" method="POST">
					<button class="btn col-12 pb-2 mt-3">
						<p class="hh ">
							Edit
						</p>
					</button>
				</form>
			</div>
		</div>
	</header>
	<section>
		<div class="col-8 mx-auto mt-3">
			<h3 class="hhh text-center" style="color: black">Компания</h3>
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
				</div>
			</div>
		</div>
		<h3 class="hhh text-center" style="color: black">Заявки пользователей</h3>
		<?php
            for($i=0;$i<mysqli_num_rows($query2);$i++){
            $stroka2 = $query2->fetch_assoc();
        ?>
			<div class="col-8 mx-auto mt-3">
				<div class="maincolorb borderblackkk pr-5 pl-5 pb-5 pt-5">
					<div class="row">
						<div class="col-4 ">
							<img src="img/girl.png">
						</div>
						<div class="col-8 mx-auto">
							<div class="premcolor rad pb-2 pt-2">
								<h3 class="text-center hhh text-color-prem"><?php echo $stroka2['name']?></h3>

							</div>
							<div class="pb-2 pt-2 mt-3">
								<h3 class="hh">Будущий :<span class="hh"><?php echo $stroka2['tag']?></span></h3>
							</div>
							<div class="pb-2 pt-2 mt-3">
								<h3 class="hh">Сотрудничество с <span class="hh">ZHENIT</span></h3>
							</div>
							<div class="pb-2 pt-2 mt-3">
								<h3 class="hh">Город:<span class="hh"><?php echo $stroka2['city']?></span></h3>
							</div>
							<div class="row">
								<button   class="col-4 pt-3 pb-3 mt-5 premcolor ">
	                            	<a class=" aa col-12 text-center">Принять заявку</a>
	                        	</button>
	                        	<form action="page2.php" method="POST">                       
	                       			<button   class="col-12 pt-3 pb-3 mt-5 premcolor ">
	                            		<a class=" aa col-12 text-center">Открыть профиль</a>
	                            		<input style="display: none;" type="" name="pageid" value="<?php echo $stroka2['id']?>">
	                        		</button>
	                   			 </form>
	                   		</div>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
	</section>
</body>