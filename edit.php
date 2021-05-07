<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','hackathon2');
$query2 = mysqli_query($con, "SELECT * FROM company");
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
				<form action="page.php" method="POST">
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
				<form action="update.php" method="POST">
					<button class="btn col-12 pb-2 mt-3">
						<p class="hh ">
							UPDATE
						</p>
					</button>
				</form>
				<form class="ml-3 col-6" action="edit.php" method="POST">
					<button class="btn col-12 pb-2 mt-3">
						<p class="hh ">
							INSERT
						</p>
					</button>
				</form>
			</div>
		</div>
	</header>
	<section>
	<form action="insert.php" method="POST">
		<div class="col-8 mx-auto mt-3">
			<div class="maincolorb borderblackkk pr-5 pl-5 pb-5 pt-5">
				<div class="row">
					<div class="col-4 ">
						<img src="img/girl.png">
					</div>
					<div class="col-8 mx-auto">
						<div class="rad pb-2 pt-2">
							<h3 class="hh">Имя:
								<textarea style="color: black; background: white;" class="form-control premcolor hh" value="" name="name"></textarea>
							</h3>
						</div>
						<div class="pb-2 pt-2 mt-3">
							<h3 class="hh">Будущий:<textarea style="color: black; background: white;" class="form-control maincolorb hh" name="tag" value=""></textarea></h3>
						</div>
						<div class="pb-2 pt-2 mt-3">
							<h3 class="hh">Сотрудничество с <span class="hh">ZHENIT</span></h3>
						</div>
						<div class="pb-2 pt-2 mt-3">
							<h3 class="hh">Город:<textarea style="color: black;background: white;" class="form-control maincolorb hh" name="city" value=""></textarea></h3>
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
							<h3 class="hhb">год рождения:
								<textarea class="form-control hhb" name="dat" value=""></textarea>
							</h3>
							<h3 class="hhb">проходит стажировку:
								<textarea class="form-control hhb" name="stag" value=""></textarea>
							</h3>
							<h3 class="hhb">пол:
								<textarea class="form-control hhb" name="sex" value=""></textarea>
							</h3>
							<h3 class="hhb">место учебы:
								<textarea class="form-control hhb" name="school" value=""></textarea>
							</h3>
							<h3 class="hhb">Языки:
								<textarea class="form-control hhb" name="lang" value=""></textarea>
							</h3>
						</div>
						<div class="pb-2 pt-2 mt-3 borderbot">
							<h3 class="text-center hhb">О себе</h3>
						</div>
						<div class="pb-2 pt-2 mt-3 borderbot">
							<h3 class="hhb">О себе:
								<textarea class="form-control hhb" name="textt" value=""></textarea>
							</h3>
						</div>
						<div class="pb-2 pt-2 mt-3 borderbot">
							<h3 class="text-center hhb">Контакты</h3>
						</div>
						<div class="pb-2 pt-2 mt-3 borderbot">
							<h3 class="hhb">телефон:
								<textarea class="form-control hhb" name="phone" value=""></textarea>
							</h3>
							<h3 class="hhb">EMail:
								<textarea class="form-control hhb" name="email" value=""></textarea>
							</h3>
							<h3 class="hhb">insta:
								<textarea class="form-control hhb" name="insta" value=""></textarea>
							</h3>
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
			
			<button class="btn col-4 pb-2 mt-3">
				<p class="hh ">
					РЕДАКТИРОВАТЬ
				</p>
			</button>
		</div>
	</form>
	</section>
		
	

</body>
</html>