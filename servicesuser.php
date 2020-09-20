<?php include ("proses/connect.php");
session_start();
if (isset($_SESSION['logged']))
{
?> ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport"    content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author"      content="">
   
   <title>Surya Galuh</title>
</head>
<?php include ("header/headeruser.php"); ?>
<body class="home">
   <!-- Fixed navbar -->
   <!-- /.navbar -->

   <!-- Header -->
   <header id="head">
      <div class="container">
         <div class="row">
            <h1 class="lead">Surya Galuh </h1>
            <p class="tagline">Bengkel motor murah dan terpercaya</p>
         </div>
      </div>
   </header>
   <!-- /Header -->

<!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
               <center> <h1 class="page-header">Services<br>
                    <small>Kami siap melayani anda</small>
                </h1></center>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="gambar_gallery/new-6.jpg" width="700px" height="400px" alt="">
                </a>
                <h3>
                    <center><a href="#" color=black>Servis</a></center>
                </h3>
                <p>Jika Anda memiliki sepeda motor, maka servis rutin adalah yang utama untuk sepeda motor Anda. Karena Surya Galuh  memiliki standard khusus untuk sepeda motor Anda, mekanik yang di miliki pun sudah melalui training khusus dan berpengalaman sehingga keluhan motor Anda akan bisa di tangani dengan baik dan cepat sesuai standard.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="gambar_gallery/new-4.jpg" width="700px" height="400px" alt="">
                </a>
                <h3>
                    <center><a href="#">Ganti Sparepart</a></center>
                </h3>
                <p>Kami melayani penggantian Spare Part Motor. Dan Harga Spare part motor tergolong sangat terjangkau, karena hanya dengan menggunakan suku cadang asli membuat motor Anda semakin awet dan tahan lama.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="gambar_gallery/new-5.jpg" width="700px" height="400px" alt="">
                </a>
                <h3>
                    <center><a href="#">Ganti Oli</a></center>
                </h3>
                <p>Kami menyediakan berbagai macam Oli untuk kebutuhan motor Anda. Penggantian Oli berkala adalah yang terbaik untuk perfoma motor Anda, Dan kami juga bisa melayani penggantian Oli pada Motor Anda di Surya Galuh.</p>
            </div>
        </div>
</div>
<footer id="footer" class="top-space">
      <div class="footer2">
         <div class="container">
            <div class="row">
               
               <div class="col-md-6 widget">
                  <div class="widget-body">
                     <p class="simplenav">
                        Copyright &copy; 2016, Surya Galuh</a> 
                     </p>
                  </div>
               </div>
            </div> <!-- /row of widgets -->
         </div>
      </div>

   </footer>   

   <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
   <script src="assets/js/headroom.min.js"></script>
   <script src="assets/js/jQuery.headroom.min.js"></script>
   <script src="assets/js/template.js"></script>
</body>
</html>

<?php 
}
else
{ 
die ("'<script>alert('anda harus login'); window.location = 'login.php'</script>'");
}
?>