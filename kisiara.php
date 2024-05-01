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
    <title>Kişi arama </title>
</head>
<body><div id="colorlib-page">
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
                        <div class="container">
    <form action="" method="POST">
        <div class="row">
            <div class="col-md-6">
                <label for="title">AD:</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="ad">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" name="ad_sbmt">Ara</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="author">Soyad:</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="soyad">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" name="soyad_sbmt">Ara</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="author">Telefon:</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="tel">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" name="tel_sbmt">Ara</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="author">Adres:</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="adres">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" name="adres_sbmt">Ara</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

</div>

</div>
                </div>
            </div>
        </section>
    </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->
</section>

        <?php
        function kisiara(){
            $con = mysqli_connect('localhost','root','','person');
            if(!$con){
                die('Veritabanı bağlantı hatası: ' .mysqli_connect_error());
            }
            $search_ad = $_POST["ad"];
            $search_soyad = $_POST["soyad"];
            $search_tel = $_POST["tel"];
            $search_adres = $_POST["adres"];

            if(isset($_POST["ad_sbmt"])) {
                $search_ad = $_POST["ad"];
                $sql = "SELECT * FROM person_data WHERE ad = '$search_ad'";

            } elseif(isset($_POST["soyad_sbmt"])) {
                $search_soyad = $_POST["soyad"];
                $sql = "SELECT * FROM person_data WHERE soyad = '$search_soyad'";
            } elseif(isset($_POST["tel_sbmt"])) {
                $search_tel = $_POST["tel"];
                $sql = "SELECT * FROM person_data WHERE tel = '$search_tel'";
            } elseif(isset($_POST["adres_sbmt"])) {
                $search_adres = $_POST["adres"];
                $sql = "SELECT * FROM person_data WHERE adres = '$search_adres'";
            } else {
                echo "Aranan değerlere ait veri bulunamadı.";
                exit;
            }   
            $result = mysqli_query($con,$sql);
            echo '<div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
				<div class="container-fluid px-3 px-md-0">
					<div class="row">
						<div class="col-md-12 mb-4">

                        <div class="container">';
            echo '<table class="table table-striped"><tr><th>ID</th><th>AD</th><th>SOYAD</th><th>TELEFON</th><th>ADRES</th><th></th></tr>';
            while($row = mysqli_fetch_assoc($result)){
                echo "<td>".$row["id"]." </td> <td> ".$row["ad"]." </td><td> ".$row["soyad"]." </td><td> ".$row["tel"]." </td> <td> ".$row["adres"]." </td> ";
                echo "<td><input type='button' value='DELETE' onclick = \"window.location.href='kisiara.php?id=".$row["id"]."'\"></td></tr>";   
            
                echo '</table>';
            }
        }
        kisiara();


        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <a href="home.php">Kişi Sil </a>

</body>
</html>