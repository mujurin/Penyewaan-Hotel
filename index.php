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
	                        <?php
              if(!isset($_SESSION['idpelanggan'])){
              ?> 
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
                                <table  border="0"  class="tabel_member" align="center">
                                    <tr>
                                      <td width="40%" align="left">Email</td>
                                      <td>
                                          <input class="form-control"   type="text" name="idpelanggan" placeholder="Email" required>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" heigt="50"><br/> </td>
                                    </tr>
                                        <br/>
                                        <tr>
                                         <td width="40%" align="left" > Password</td>
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
                  
      <?php
              }else{
              ?>

                             <b class="navbar-btn nav-button wow bounceInRight login" >
                                 <?php 
                                     // error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                      echo isset($_SESSION["nama"]) ? $_SESSION["nama"] : '' ;
                                      echo "" ; 
                                 ?></b>
                             <?php
              }
              ?>
	                    
                             <?php
              if(!isset($_SESSION['idpelanggan'])){
              ?>

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
 <?php
              }else{
              ?>
<button class="navbar-btn nav-button wow fadeInRight"id="logout" ><a href="logout.php" color="white">Log Out</a></button>
                        <?php
              }
              ?>

                        </div>

              </div>
              <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="index.php">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="about.html">About us</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="contact.html">Contact</a></li>
                <?php
              if(!isset($_SESSION['idpelanggan'])){
              ?>
               <?php
              }else{
              ?>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="#" data-toggle="modal"  data-target=".bs-example-modal-sm3">Host</a></li>
             <?php
              }
              ?>
             </ul>
                                  <div class="modal fade bs-example-modal-sm3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg"  >
                    <div class="modal-content">

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>                    </button>
                      <h4 class="modal-title" id="mySmallModalLabel"> Member Sign up</h4>
                    </div>
                    <div class="modal-body">
                        <iframe height="410" width="100%" scrolling="yes" frameborder="no" src="tuanrumah.php"></iframe>
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
                            
                            
                                  <form 
                                  <?php
              if(!isset($_SESSION['idpelanggan'])){
              ?> action = "view_search.php" <?php
              }else{
              ?>
              action = "view_home.php"
              <?php
              }
              ?>
              method = "post" class=" form-inline">
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
                <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">
                    <h5>~~~~~ ! ~~~~~</h5>
                    <h2>Why is booking hotels with Shelter.com cheaper?</h2>    
                </div>
                <div id="line">&nbsp;</div>
                 <div class="row how-it-work text-center">
                    <div class="col-md-4">
                        <div class="single-work wow fadeInUp" data-wow-delay="0.8s">
                            <img src="img/how-work1.png" alt="">
                            <h3>No. 1 in Indonesia</h3>
                            <p>As the no. 1 trustworthy online travel agent, we officially partner with airlines and hotels to offer you special deals.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-work  wow fadeInUp"  data-wow-delay="0.9s">
                            <img src="img/how-work2.png" alt="">
                            <h3>Best deals this year</h3>
                            <p>you will find offers that can not be found on other sites similar. that will not disappoint you.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                            <img src="img/how-work3.png" alt="">
                            <h3>Cooperation cool</h3>
                            <p>We have a working relationship with more than 1000 lodging places and spread across all districts in Indonesia</p>
                        </div>
                    </div>

                </div>
            </div>
<div id="line">&nbsp;</div>

            <div class="container">
                <div class="row job-posting wow fadeInUp" data-wow-delay="1s">
                    <div role="tabpanel">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#job-seekers" aria-controls="home" role="tab" data-toggle="tab">Cooperation with</a></li>
                        <li role="presentation"><a href="#employeers" aria-controls="profile" role="tab" data-toggle="tab">Employeers</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="job-seekers">
                            <ul class="list-inline">
                                <li>
                                    <a href="">
                                        <img src="img/employee4.png" alt="">
                                        <div class="overlay"><h3>Instagram</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/employee5.png" alt="">
                                        <div class="overlay"><h3>Microsoft</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/employee6.png" alt="">
                                        <div class="overlay"><h3>Dribbble</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/employee1.png" alt="">
                                        <div class="overlay"><h3>Beats Music</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/employee2.png" alt="">
                                        <div class="overlay"><h3>Facebook</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/employee3.png" alt="">
                                        <div class="overlay"><h3>Twitter</h3></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="employeers">
                            <ul class="list-inline employeers">
                                <li>
                                    <a href="">
                                        <img src="img/team-small-5.jpg" alt="">
                                        <div class="overlay"><h3>Ohidul Islam</h3><p>Web Designer</p></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/team-small-6.jpg" alt="">
                                        <div class="overlay"><h3>Mohidul Islam</h3><p>CEO</p></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/team-small-3.jpg" alt="">
                                        <div class="overlay"><h3>Unknown girl</h3><p>Graphic Designer</p></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/team-small-4.jpg" alt="">
                                        <div class="overlay"><h3>Eftakher Alam</h3><p>Graphic Designer</p></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/team-small-2.jpg" alt="">
                                        <div class="overlay"><h3>Mark Otto</h3><p>Founder</p></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/team-small-1.jpg" alt="">
                                        <div class="overlay"><h3>Rasel Ahmed</h3><p>Web Developer</p></div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                      </div>

                    </div>
                </div>
            </div>


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
