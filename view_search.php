<title>Fallout Shelter</title>
<?php
    session_start();
    if(isset($_SESSION['loginsaya'])){
        mysql_close($kon); // Menutup koneksi
        header('Location: view_home.php'); // Mengarahkan ke Home Page
}
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
                                <span><i class="icon-cloud"></i>+019 4854 8817</span>
                                <span><i class="icon-mail"></i>ohidul.islam951@gmail.com</span>
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
              <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="button navbar-right">
                		<div id="profile">
                <button class="navbar-btn nav-button wow bounceInRight login" data-toggle="modal"  data-target=".bs-example-modal-sm" data-wow-delay="0.8s">Login</button>
                  
                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>                    </button>
                      <h4 class="modal-title" id="mySmallModalLabel"> Member Login</h4>
                    </div>
                    <div class="modal-body">
                        <div class="date_btn">
							<form class="form-group" name="form1" method="post" action="proses_logmem.php">
								<table  border="0" width="250" class="tabel_member" align="center">
									<tr>
									  <td width="80" align="left">Email</td>
									  <td>
                                          <input class="form-control"   type="text" name="idpelanggan" placeholder="Email" required>
									  </td>
									</tr>
                                    <tr>
                                        <td colspan="3" heigt="50"><br/> </td>
                                    </tr>
										<br/>
										<tr>
										 <td width="80" align="left" > Password</td>
										 <td>
										<input class="form-control"  width="100%" type="password" name="password" placeholder="Password" required>
										 </td>
										</tr>
										
										<tr>
										 <td colspan="2">
											  <label><br/>
														<center><input class="btn btn-success btn-block" type="submit" name="submit" value="Submit" ></center>
											  </label></td>
										</tr>
										<tr><br/> 
								</table>
				            </form>
                        </div>
                        </div>
                          <div class="modal-footer">
                          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"> Cancel</button>
                          <p>Not a member? <a href="#" data-toggle="modal"  data-target=".bs-example-modal-sm2">Sign Up</a></p>
                          <p>Forgot <a href="contact.html">Password?</a></p>
                        </div>
          </div>
        </div>
      </div>
                  
                  <button class="navbar-btn nav-button wow fadeInRight" data-toggle="modal"  data-target=".bs-example-modal-sm2" data-wow-delay="0.6s">Sign up</button>
                  <div class="modal fade bs-example-modal-sm2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-sm2"  >
                    <div class="modal-content">

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>                    </button>
                      <h4 class="modal-title" id="mySmallModalLabel"> Member Sign up</h4>
                    </div>
                    <div class="modal-body">
                        <iframe height="370" width="100%" scrolling="yes" frameborder="no" src="form_daftar.php"></iframe>
                    </div>
                    <div class="modal-footer">
                          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"> Cancel</button>
                    </div>
          </div>
        </div>
      </div>
                  </div>
              </div>
              <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="index.php">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="about.html">About us</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="contact.html">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
                 
                  <div class="item"><img src="img/slider-image-3.jpg" alt="Mirror Edge"></div>
                  <div class="item"><img src="img/slider-image-2.jpg" alt="The Last of us"></div>
                  <div class="item"><img src="img/slider-image-1.jpg" alt="GTA V"></div>
                 
                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>Find your dream service here</h2>
                        <p>Discovered by district and type of accommodation you want. Click search and you will find something you want</p>
                        <div class="search-form wow pulse" data-wow-delay="0.8s">
                            
                            
                                 <form action = "view_home.php" method = "post" class=" form-inline">
                                        <div class="form-group">
                                        <select class="form-control"  name="tipe" id="country" onchange="change_country(this.value)" class="frm-field required">
                                            <option value="null">Choose Type</option>
                                            <option value="Apartment">Apartements</option>         
                                            <option value="House">Houses</option>
                                            <option value="Hotel">Hotels</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control"  name="tujuan" id="country" onchange="change_country(this.value)" class="frm-field required">
                                            <option value="null">Choose Regency</option>
                                            <option value="North Lombok">North Lombok</option>         
                                            <option value="West Lombok">West Lombok</option>
                                            <option value="Central Lombok">Central Lombok</option>
                                            <option value="East Lombok">East Lombok</option>
                                        
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <input class="btn" type="submit" value="Search" />
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-area">
            
            <div class="container">
                <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
                    <h5></h5>
                    <h2><span></span> Available Hotels for you</h2>
                </div>
                <div id="line">&nbsp;</div>
                <div class="row jobs">
                    <div class="col-md-9">
                        <div class="job-posts table-responsive">
                            <?php
                                    $wilayah = "" ;
                                    $rumah = "" ;
                                    if(isset($_POST["tujuan"]))
                                        $wilayah = $_POST["tujuan"] ;
                                    if(isset($_POST["tipe"]))
                                        $rumah = $_POST["tipe"] ;
                                    include "koneksi.php" ;
                                    $sql = "select * from tuan where lokasi like '%$wilayah%' AND tiperumah like '%$rumah%' order by idtuan desc" ;
                                    $hasil = mysqli_query($kon, $sql) ;
                                    if (!$hasil)
                                        die ("Gagal query...".mysqli_error($kon)) ;
                                ?>
                                <table class="table"  align="left">
                                <tr class="odd wow fadeInUp">
                                    <th>Image</th>
                                    <th>Type</th>
                                    <th>Many Room</th>
                                    <th>Ordered</th>
                                    <th>Location</th>
                                    <th>Price</th>
                                    <th></th>
                                    
                                </tr> 
                                <?php
                                    $no = 0;
                                    while ($row=mysqli_fetch_assoc($hasil))
                                    {
                                        echo"<tr>" ;
                                        echo"<td><a height='100px' href='pict/{$row['foto']}'/>
                                            <img src='thumb/t_{$row['foto']}' width='100'/> </a></td>" ;
                                        echo"<td>".$row['tiperumah']."</td>" ;
                                        echo"<td>".$row['akomodasi']."</td>" ;
                                        echo"<td>".$row['terpesan']."</td>" ;
                                        echo"<td>".$row['lokasi']."</td>" ;
                                        echo"<td>"."Rp ".$row['harga']."</td>" ;
                                        echo"<td>"."<button class='btn' data-toggle='modal'  data-target='.bs-example-modal-sm'>Order</button></td>";
                                        echo"</tr>" ;
                                    }
                                ?>
                              </table>
                            
                            
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm">
                        <div class="job-add wow fadeInRight" data-wow-delay="1.5s">
                            <h2>Seeking a hotel?</h2> 
                            <a href="#" data-toggle="modal"  data-target=".bs-example-modal-sm2">Create a Account</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

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
