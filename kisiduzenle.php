<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/style.css">

    <title>Document</title>
</head>

<body>
   
<!-- Navigation Block -->
<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					
					<li><a href="kisiekle.php">Kişi Ekle</a></li>
					<li><a href="kisicikar.php">Kişi Çıkar</a></li>
					<li><a href="kisiduzenle.php">Kişi Düzenle</a></li>
					<li><a href="kisiara.php">Kişi Ara</a></li>
					
					
				</ul>
			</nav>
		</aside>
<!-- Navigation Block END -->
<form action="functions/update.php" method="POST">
    <div class="container">
        <div class=" text-center mt-5 ">

            <h1 >Kişi Düzenle </h1>
                
            
        </div>
        <div class="text-center mt-5">
            Düzenlenecek Kişiyi seçin: <br><br>
            ad <input type="text" name="ad"> &nbsp; soyad <input type="text" name="soyad"> &nbsp; 

        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
            

            

            <div class="controls">
    
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label for="form_name">Ad </label>
                            <input id="form_name" type="text" name="yeni_ad" class="form-control" placeholder="yeni değer " >
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Soyad </label>
                            <input id="form_lastname" type="text" name="yeni_soyad" class="form-control" placeholder="yeni değer"  >
                                                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email </label>
                            <input id="form_email" type="email" name="yeni_email" class="form-control" placeholder="yeni değer" >
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                            <label for="form_email">Telefon </label>
                            <input id="form_email" type="text" name="yeni_tel" class="form-control" placeholder="yeni değer"  >
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Adres </label>
                            <input id="form_email" type="text" name="adres" class="form-control" placeholder="yeni değer" >
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-12">
                        
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block " value="Güncelle" >
                    
                </div>
          
                </div></fieldset>
                

        </div>
        </form>
        </div>
            </div>


</form>

<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>

<script src="assets/js/bootstrap.js"></script>
</body>


</html>