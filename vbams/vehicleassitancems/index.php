<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Basic page needs
        ============================================ -->
        
        <title>VBAMS || Home Page </title>
        
        <!-- ============== All CSS ================ -->
        <!-- normalize css
        ============================================ -->
        <link rel="stylesheet" href="css1/normalize.css">

        <!-- animate css
        ============================================ -->
        <link rel="stylesheet" href="css1/animate.css">

        <!-- bootstrap css
        ============================================ -->
        <link rel="stylesheet" href="css1/bootstrap.min.css">

        <!-- meanmenu css
        ============================================ -->
        <link rel="stylesheet" href="css1/meanmenu.min.css">

        <!-- font-awesome css
        ============================================ -->
        <link rel="stylesheet" href="css1/font-awesome.min.css">

        <!-- icofont css
        ============================================ -->
        <link rel="stylesheet" href="css1/icofont.css">

        <!-- change-text css
        ============================================ -->
        <link rel="stylesheet" href="css1/change-text.css">

        <!-- YTPlayer css
        ============================================ -->
        <link rel="stylesheet" href="css1/jquery.mb.YTPlayer.min.css">

        <!-- main css
        ============================================ -->
        <link rel="stylesheet" href="css1/main.css">

        <!-- owl.carousel css
        ============================================ -->
        <link rel="stylesheet" href="css1/owl.carousel.css">
        <link rel="stylesheet" href="css1/owl.theme.css">
        <link rel="stylesheet" href="css1/owl.transitions.css">

        <!-- nivo-slider css
        ============================================ -->
        <link rel="stylesheet" href="lib/css/nivo-slider.css">
        <link rel="stylesheet" href="lib/css/preview.css">

        <!-- style css
        ============================================ -->
        <link rel="stylesheet" href="style.css">

        <!-- responsive css
        ============================================ -->
        <link rel="stylesheet" href="css1/responsive.css">

        <!-- modernizr js
        ============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

       <?php include_once('includes/header.php');?>
        <!-- slider area start -->
        <div class="slider-area">
            <div class="bend niceties preview-1">
                <!-- slider images start -->
                <div id="nivoslider" class="slides">
                    <img src="img1/slider/towing1.jpeg" alt="slider_1" title="#slider-direction-1"/>
                    <img src="img1/slider/towing2.jpg" alt="slider_2" title="#slider-direction-2"/>
                </div>
                <!-- slider images end -->
                <!-- slider 1 direction -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <!-- slider progress start -->
                    <div class="slider-progress"></div>
                    <!-- slider progress end -->
                    <!-- slider caption start -->
                    <div class="slider-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <!-- layer 1 -->
                                    <div class="layer-1-1">
                                        <h2 class="title-1">Best Vehicle Breakdown  </h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2">
                                        <h2 class="title-2"> Assistance Management System </h2>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-1-3">
                                        <p class="title-3"> Hello </p>
                                    </div>
                                    <!-- layer 4 -->
                                    <div class="layer-1-4">
                                        <a href="contact.php" class="title-4">contact us </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider caption end -->
                </div>
                <!-- slider 2 direction -->
                <div id="slider-direction-2" class="t-cn slider-direction">
                    <!-- slider progress start -->
                    <div class="slider-progress"></div>
                    <!-- slider progress end -->
                    <!-- slider caption start -->
                    <div class="slider-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <!-- layer 1 -->
                                  <div class="layer-1-1">
                                        <h2 class="title-1">Best Vehicle Breakdown  </h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2">
                                        <h2 class="title-2"> Assistance Management System </h2>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-2-3">
                                        <p class="title-3"> Hello </p>
                                    </div>
                                    <!-- layer 4 -->
                                    <div class="layer-2-4">
                                        <a href="contact.php" class="title-4">contact us </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider caption end -->
                </div>
            </div>
        
        </div>
        <!-- slider area end -->
        <!-- about us area start -->
        <div class="about-us-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- section title start -->
                        <div class="section-heading">
                            <h2>About <span>Us</span></h2>
                        </div>
                        <!-- section title end -->
                        <!-- about content start -->
                        <div class="about-us-info">
                             <?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                            <p><?php  echo htmlentities($row->PageDescription);?></p>
                            
                            <?php $cnt=$cnt+1;}} ?>
                        </div>
                        <!-- about content end -->
                    </div>
                    <div class="col-md-6 hidden-xs">
                        <!-- about us img start -->
                        <div class="about-us-img">
                            <img src="img1/about/tow-truck-federal-way-2.jpg" alt="">
                        </div>
                        <!-- about us img end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- about us area end -->
      
    
        <!-- blog area end -->
        <!-- quick book area start -->
       
        <!-- quick book area end -->
        <?php include_once('includes/footer.php');?>

        <!-- ============== All JS ================ -->
        <!-- jquery js
        =========================================== -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>

        <!-- bootstrap js
        =========================================== -->
        <script src="js/bootstrap.min.js"></script>

        <!-- meanmenu js
        =========================================== -->
        <script src="js/jquery.meanmenu.js"></script>

        <!-- scrollUp js
        =========================================== -->
        <script src="js/jquery.scrollUp.min.js"></script>

        <!-- wow js
        =========================================== -->
        <script src="js/wow.min.js"></script>

        <!-- owl.carousel js
        =========================================== -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- change-text js
        =========================================== -->
        <script src="js/change-text.js"></script>

        <!-- YTPlayer js
        =========================================== -->
        <script src="js/jquery.mb.YTPlayer.min.js"></script>

        <!-- textillate js
        =========================================== -->
        <script src="js/jquery.lettering.js"></script>
        <script src="js/jquery.textillate.js"></script>

        <!-- nivo.slider js
        =========================================== -->
        <script src="lib/js/jquery.nivo.slider.js"></script>
        <script src="lib/home.js"></script>

        <!-- plugins js
        =========================================== -->
        <script src="js/plugins.js"></script>

        <!-- main js
        =========================================== -->
        <script src="js/main.js"></script>
    </body>
</html>
