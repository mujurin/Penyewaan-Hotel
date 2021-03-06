<?php
    session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fallout Shelter</title>
        <meta name="description" content="company is a free job board template">
        <meta name="author" content="Ohidul">
        <meta name="keyword" content="html, css, bootstrap, job-board">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/animate.css">        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <style>
input[type=submit] {
    background: linear-gradient(to bottom, #0088CC, #0044CC);
    border: 1px solid #0088CC;
    color: #FFF;
    margin: 4px 10px;
    padding: 5px;
    width: 100px;
}

input[type=submit]:hover {
    cursor: pointer;
}

input[type=submit]:active {
    background: #0044CC;
}

input[type=reset] {
    background: linear-gradient(to bottom, #0088CC, #0044CC);
    border: 1px solid #0088CC;
    color: #FFF;
    margin: 4px 10px;
    padding: 5px;
    width: 100px;
}

input[type=reset]:hover {
    cursor: pointer;
}

input[type=reset]:active {
    background: #0044CC;
}
:-moz-placeholder {
    color: blue;
}
 
::-webkit-input-placeholder {
    color: blue;
}
table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
    padding:20px;
     
}
form {
	font-family: "Calibri";
	font-size: 15px;
}
</style>
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->
		
        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8 col-xs-8">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="icon-cloud"></i>0274 1234 56</span>
                                <span><i class="icon-mail"></i>admin@shelter.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-3  col-xs-offset-1">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="button navbar-right">
                		<div id="profile">
	                         <b class="navbar-btn nav-button wow bounceInRight login" >
                                 <?php 
                                     // error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                     
                                      echo isset($_SESSION["nama"]) ? $_SESSION["nama"] : '' ;
                                      echo "" ; 
                                 ?></b>
                             <b class="navbar-btn nav-button wow fadeInRight"id="logout" ><a href="logout.php" color="white">Log Out</a></b>
	                    </div>
              </div>
              <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="index.php">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="about.html">About us</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="contact.html">Contact</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="#" data-toggle="modal"  data-target=".bs-example-modal-sm3">Host</a></li>
              </ul>
                                  <div class="modal fade bs-example-modal-sm3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg"  >
                    <div class="modal-content">

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>                    </button>
                      <h4 class="modal-title" id="mySmallModalLabel"> Member Sign up</h4>
                    </div>
                    <div class="modal-body">
                        <iframe height="500" width="100%" scrolling="yes" frameborder="no" src="tuanrumah.php"></iframe>
                    </div>
                    <div class="modal-footer">
                          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"> Cancel</button>
                    </div>
          </div>
        </div>
      </div>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="content-area">
       <div id="line">&nbsp;</div>     
<?php
	include "koneksi.php" ;
    $idtuan = $_GET["idtuan"] ;
	$sql = "select * from tuan where idtuan = '{$idtuan}' " ;
	$hasil = mysqli_query($kon, $sql) ;
    while($row=mysqli_fetch_assoc($hasil));
	if (!$hasil)
		die ("Gagal query...".mysqli_error($kon)) ;
?>
<form action="simpan_pesan.php" method="POST">
<table border="1" align="center" width="400px">
<tr>
    <td colspan="2" ><h2><center>Room Booking Process</center></h2></td>
</tr>
<tr>
<td>Email </td>
<td><input type="text" class="form-control" readonly="readonly" name="idpelanggan" value="<?php echo isset($_SESSION["idpelanggan"]) ? $_SESSION["idpelanggan"] : '' ; ?>"/></td>
</tr>
<tr>
<td >Id Host</td>
<td><input type="text" class="form-control" readonly="readonly" name="idtuan" value="<?php echo $idtuan ?>" /></td>
</tr>
<tr>
<td>Many rooms</td>
<td><input type="text" class="form-control"  name="jlhkamar" placeholder = "Many rooms"/></td>
</tr>
<tr>
<td>Length of stay</td>
<td><input type="text" class="form-control"  name="lama" placeholder = "/Days"/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="SUBMIT"/>
<input type="reset" value="RESET"/></td>
</tr>
</table>
</form>
       </div>
        <div class="footer-area">
            <div class="container">
                <div class="row footer">
                    <div class="col-md-4">
                        <div class="single-footer">
                            <img src="img/footer-logo.png" alt="" class="wow pulse" data-wow-delay="1s">
                            <p>Making the Web is actually inspired by the art . And art is not more important than life . However , life feels sad when without art .</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-footer">
                            <h4>STMIK AKAKOM YOGYAKARTA</h4>
                            <div class="twitter-updates">
                                <div class="single-tweets">
                                    <p><strong>STIMIK AKAKOM YOGYAKARTA</strong> -The Lecture certified programmers , STMIK AKAKOM Yogyakarta , College of Informatics and Computer Management .<a href="http://www.akakom.ac.id">http://www.akakom.ac.id</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-footer">
                            <h4>Useful links</h4>
                            <div class="footer-links">
                                <ul class="list-unstyled">
                                    <li><a href="">About Us</a></li>
                                    <li><a href="" class="active">Services</a></li>
                                    <li><a href="">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer-copy">
                    <p><span>(C) webstie, All rights reserved</span> | <span>Graphic Designed by <a href="https://dribbble.com/siblu">Eftakher Alam</a></span> | <span> Web Designed by <a href="http://ohidul.me">Ohidul Islam</a></span> </p>
                </div>
            </div>
        </div>
		
		
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/main.js"></script>
			
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script>
		$(document).ready(function(){
		$('[data-toggle="popover"]').popover(); 
		});
	</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
		
		
    </body>
</html>