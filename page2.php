<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','hackathon2');
$query = mysqli_query($con, "SELECT * FROM ankets WHERE id='{$_POST['pageid']}'");
$query2 = mysqli_query($con, "SELECT * FROM company");
$stroka=$query->fetch_assoc(); 
$stroka2=$query2->fetch_assoc(); 
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
				<form action="maincomp.php" method="POST">
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
				<form action="main.php" method="POST">
					<button class="btn col-12 pb-2 mt-3">
						<p class="hh ">
							MAIN
						</p>
					</button>
				</form>
				<form class="ml-3" action="edit.php" method="POST">
					<button class="btn col-12 pb-2 mt-3">
						<p class="hh ">
							EDIT
						</p>
					</button>
				</form>
			</div>
		</div>
	</header>
	<section>
		<div class="col-8 mx-auto mt-3">
			<div class="maincolorb borderblackkk pr-5 pl-5 pb-5 pt-5">
				<div class="row">
					<div class="col-4 ">
						<img src="img/girl.png">
					</div>
					<div class="col-8 mx-auto">
						<div class="premcolor rad pb-2 pt-2">
							<h3 class="text-center hhh text-color-prem"><?php echo $stroka['name']?></h3>

						</div>
						<div class="pb-2 pt-2 mt-3">
							<h3 class="hh">Будущий :<span class="hh"><?php echo $stroka['tag']?></span></h3>
						</div>
						<div class="pb-2 pt-2 mt-3">
							<h3 class="hh">Сотрудничество с <span class="hh">ZHENIT</span></h3>
						</div>
						<div class="pb-2 pt-2 mt-3">
							<h3 class="hh">Город:<span class="hh"><?php echo $stroka['city']?></span></h3>
						</div>

						
					</div>
				</div>
			</div>
			<div class="borderblackkk pr-5 pl-5 pb-5 pt-5">
				<div class="row">
					<div class="col-4 pl-2 pr-2 borderblackkk">
						<div class="pb-2 pt-2 mt-3 borderbot">
							<h3 class="text-center hhb">Личная информация</h3>
						</div>
						<div class="pb-2 pt-2 mt-3 borderbot">
							<h3 class="hhb">год рождения:<span class="hhb"><?php echo $stroka['dat']?></span></h3>
							<h3 class="hhb">проходит стажировку:<span class="hhb"><?php echo $stroka['stag']?></span></h3>
							<h3 class="hhb">пол:<span class="hhb"><?php echo $stroka['sex']?></span></h3>
							<h3 class="hhb">место учебы:<span class="hhb"><?php echo $stroka['school']?></span></h3>
							<h3 class="hhb">Языки:<span class="hhb"><?php echo $stroka['lang']?></span></h3>
						</div>
						<div class="pb-2 pt-2 mt-3 borderbot">
							<h3 class="text-center hhb">О себе</h3>
						</div>
						<div class="pb-2 pt-2 mt-3 borderbot">
							<h3 class="hhb">О себе:<span class="hhb"><?php echo $stroka['textt']?></span></h3>
						</div>
						<div class="pb-2 pt-2 mt-3 borderbot">
							<h3 class="text-center hhb">Контакты</h3>
						</div>
						<div class="pb-2 pt-2 mt-3 borderbot">
							<h3 class="hhb">телефон:<span class="hhb"><?php echo $stroka['phone']?></span></h3>
							<h3 class="hhb">EMail:<span class="hhb"><?php echo $stroka['email']?></span></h3>
							<h3 class="hhb">insta:<span class="hhb"><?php echo $stroka['insta']?></span></h3>
						</div>

					</div>
					<div class="col-8 pl-2 pr-2 borderblackkk ">
						<div class="pb-2 pt-2 mt-3 maincolorb rad pb-5">
							<h3 class="text-center hhw">Заявки на расмотрении</h3>
							<div class="col-12 borderbotw">
							</div>
							<h3 class="text-center hhw">список компани:
							<div class="pb-2 pt-2">
							<?php
               	 			for($i=0;$i<mysqli_num_rows($query2);$i++){
                			$stroka2 = $query2->fetch_assoc();
        					?>
        						<div class="mt-3">
									<h3 class="hh" style="color:#E9EBEF;"><?php echo $stroka2['title']?></h3>
									<img src="<?php echo $stroka2['file']?>">
								</div>
							<?php }?>
													
										
											
									
								
							</div> 


						</div>

						
					</div>
				</div>
			</div>
			<div class="maincolorb borderblackkk mt-3">
				<p class="text-center">
					<img src="img/dos3.png">
				</p>
			</div>

		</div>
	</section>
		
	

</body>
</html>