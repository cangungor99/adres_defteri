<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="index.php">Yeni Kişi</a></li>
					<li><a href="home.php">Kişi Listeleme&Kişi Silme</a></li>
					<li><a href="kisiara.php">Kişi Arama</a></li>
                    
					
				</ul>
			</nav>
		</aside> <!-- END COLORLIB-ASIDE -->

        <div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
				<div class="container-fluid px-3 px-md-0">
					<div class="row">
						<div class="col-md-12 mb-4">

                        <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='POST'>
        <div class="row">
            <div class="col-md-6">
                <label for="title">AD : </label>
                <input type="text" class="form-control" name="ad" required>
            </div>
            <div class="col-md-6">
                <label for="author">Soyad : </label>
                <input type="text" class="form-control" name="soyad" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="author">Telefon : </label>
                <input type="number" class="form-control" name="tel" required>
            </div>
            <div class="col-md-6">
                <label for="author">Adres : </label>
                <input type="text" class="form-control" name="adres" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary" value="Kaydet" name="sbmt">
            </div>
        </div>
    </form>
</div>

    </div>
					</div>
				</div>
			</section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->
</section>
 
 <?php

 function kisiekle(){
    $con = mysqli_connect('localhost', 'root','','person');
    if(!$con){
        die('Veritabanı bağlantı hatası: '.mysqli_connect_error());
    }
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $tel = $_POST["tel"];
    $adres = $_POST["adres"];
    $sql = "INSERT INTO person_data (ad,soyad,tel,adres) VALUES ('$ad','$soyad','$tel', '$adres')";
    if($con->query($sql) === TRUE ){
        echo 'Yeni kişi başarıyla eklendi';
    }else{
        echo 'Hata : '.$sql.'<br>'.$con->error;
    }
    mysqli_close($con);


 }
 if(array_key_exists('sbmt',$_POST)){
    kisiekle();
 }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>