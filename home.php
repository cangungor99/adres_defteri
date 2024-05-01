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
    <?php
     $con = mysqli_connect('localhost','root','','person');
     if (!$con) {
         die('Connect error : '.mysqli_connect_error());
     }

    $sql = "SELECT * from person_data";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0){
        echo "<h2>Kişi Listesi</h2>";
        echo "<table class='table table-striped'><tr>";
        echo "<th> ID </th><th> AD </th><th> SOYAD </th><th> TELEFON </th><th> ADRES </th></tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["id"]." </td> <td> ".$row["ad"]." </td><td> ".$row["soyad"]." </td><td> ".$row["tel"]." </td> <td> ".$row["adres"]." </td> ";
            echo "<td><input type='button' value='DELETE' onclick = \"window.location.href='delete.php?id=".$row["id"]."'\"></td></tr>";   
        }
        echo "</table>";
    }
    else{
        echo "Veri bulunamadı";
    }

?>
<br><br>

<a href="kisiara.php">Kişi arama </a>
</div>
					</div>
				</div>
			</section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>