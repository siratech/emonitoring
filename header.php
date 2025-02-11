<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $appname; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
     <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="../css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../css/normalize.css">
	<!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="../css/wave/waves.min.css">
    <link rel="stylesheet" href="../css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="../css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
<script type="text/javascript" src="../assets/jquery-1.11.2.min.js"></script>

  <!-- Custom styles for this template-->
<style>

/* From Uiverse.io by Tiagoadag */ 
.card4 {
 width: 190px;
 height: 254px;
 transition: all .3s;
  border-radius: 50%;

}

.card2 {
 width: 240px;
 height: 100px;
 transition: all .2s;
}

.card3 {
align-items: center;
 padding: 25px;
}

.card:hover {
 box-shadow: 0px 0px 30px 1px rgba(0, 255, 117, 0.30);
}

#myDIV {
 width: 240px;
 height: 100px;
  color: white;
  animation: mymove 5s infinite;
}

@keyframes mymove {
  50% {box-shadow: 10px 20px 30px blue;}
}
</style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div2>
                <div class="logo-area nav-item nc-al">
					<div class="row">
					                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

					<img src="../img/AGENCY_LOGO.jpg" alt="" height="80px" width="80px;" />
					</div>
					                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

      <a href="index.php"><h3 style="color:#ffffff;"><?php echo $appname; ?></h3></a>	
	  </div>
</div>	  
                    </div>
					</div2>
                </div>

                       				
				
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">							
                            <li class="nav-item nc-al"><a href="#"  data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-support"></i> <?php echo Mansir::get_candidate_name($this_user_id); ?>				 
								</span></a>
                                <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                    <div class="hd-mg-va">
                                        <a href="../logout.php"><span><i class="notika-icon notika-support"></i></span> Logout</a>
                                    </div>
                                </div>
                            </li>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->