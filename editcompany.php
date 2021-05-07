<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<head>
    <title></title>
</head>
<body>
    <div class="col-12 maincolor">
        <div class="col-8 row mx-auto pr-0 pl-0">
            <div class="col-3">
                <img src="img/bgreg3.png">
            </div>
            <div class="col-6 pr-5">
                <div class=" col-12 bordertopbotblack pt-3 pb-3 ">
                    <p style=" color: black" class="h3 a2 text-center">UPDATE</p>
                </div>
                <form action="comupdate.php" method="POST" enctype="multipart/form-data" >
                    <div class="mx-auto col-12">
                        <input  class="mt-5 col-12 pt-3 pb-3 aa borderblackk" placeholder="title" type="" name="title">
                    </div>
                    <div class="mx-auto col-12">
                        <textarea class="mt-5 col-12 pt-3 pb-3 aa borderblackk" placeholder="about your company" type="" name="textt"> 
                        </textarea> 
                    </div>
                    <div class="mx-auto col-12">
                        <input class="mt-5 col-12 pt-3 pb-3 aa borderblackk"  placeholder="Выбрать файл" class="mt-3" type="file" name="file" > 
                    </div>

                    <div class="mx-auto col-7">
                        <button   class="col-12 pt-3 pb-3 mt-5 btn">
                            <a class=" aa col-12 text-center textcolor"> Less go</a>
                        </button>
                    </div>
                </form>
                <div class="col-12 mt-5">
                    <p style=" color: black" class="hh text-center">OR</p>
                </div>
                
                <div class="col-12 mt-5">
                    <p style=" color: black" class="hh text-center">No account? Creat one.</p>
                    <p style=" color: black" class="hh text-center">Forgot password&</p>

                </div>
                <div class="col-4 mx-auto mt-5" >
                    <form action="index.php">                       
                        <button  class="col-12 pt-3 pb-3 btn">
                            <a  class="textcolor col-12 text-center aa" >Back</a>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-3">
                <img src="img/bgreg3.png">
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>