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
<form action="functions/delete.php" method="POST">
    <div class="container">
        <div class=" text-center mt-5 ">

            <h1 >Kişi Silme </h1>
                
            
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
                            <label for="form_name">Ad *</label>
                            <input id="form_name" type="text" name="ad" class="form-control" placeholder="Silmek istediğiniz kişinin ismi giriniz *" required="required" data-error="İsim eklemek zorunludur.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Soyad *</label>
                            <input id="form_lastname" type="text" name="soyad" class="form-control" placeholder="Silmek istediğiniz kişinin soyadını giriniz *" required="required" data-error="Soyad eklemek zorunludur.">
                                                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Silmek istediğiniz kişinin mail adresini giriniz*" required="required" data-error="Geçereli mail adresi zorunludur.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                            <label for="form_email">Telefon *</label>
                            <input id="form_email" type="text" name="tel" class="form-control" placeholder="Silmek istediğiniz kişinin telefon no giriniz*" required="required" data-error="Geçereli telefon numarası  zorunludur.">
                            
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    
                    <div class="col-md-12">
                        
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block " value="Kişiyi sil" >
                    
                </div>
          
                </div>


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