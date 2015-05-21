<!DOCTYPE html>
<!-- For referencing current page -->
<?php $page = basename($_SERVER['PHP_SELF']); include_once('assets/lib/hours.php');?>

<!-- /// -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title></title>
<link rel="shortcut icon" href="assets/imgs/favicon.ico" type="image/x-icon">

<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="assets/css/theme.css" />
<link type="text/css" rel="stylesheet" href="assets/css/mobilenav.css" />
<link type="text/css" rel="stylesheet" href="assets/css/ekko-lightbox.css" />
<link type="text/css" rel="stylesheet" href="assets/css/jquery.bxslider.css" />

<script src="//code.jquery.com/jquery.min.js"></script>


<!-- Typekit stuff, needs to be in the header -->
<script src="//use.typekit.net/dhw6orn.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

</head>
<body>
  <div id="page-content">
    <!-- Mobile nav implementation -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="slide-nav">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="navbar-brand" href="#">Menu</a>
          <a class="mobile-backtotop">Back to Top<img src="assets/imgs/up.png"></a>
        </div>
        <div id="slidemenu">
          <ul class="nav navbar-nav">
            <li <?php if ($page == "index.php"){ echo "class='active'"; } ?>><a href="index.php">HOME</a></li>
            <li <?php if ($page == "walls.php"){ echo "class='active'"; } ?>><a href="walls.php">PAVER & WALL SYSTEMS</a></li>
            <li <?php if ($page == "mulch.php"){ echo "class='active'"; } ?>><a href="mulch.php">SOIL, MULCH & FIREWOOD</a></li>
            <li <?php if ($page == "stone.php"){ echo "class='active'"; } ?>><a href="stone.php">NATURAL STONE & GRAVEL</a></li>
            <li <?php if ($page == "accessories.php"){ echo "class='active'"; } ?>><a href="accessories.php">RENTAL TOOLS & ACCESSORIES</a></li>

          </ul>
          <ul class="nav navbar-nav">
            <li <?php if ($page == "landscapes.php"){ echo "class='active'"; } ?>><a href="landscapes.php">LANDSCAPES</a></li>
            <li <?php if ($page == "gallery.php"){ echo "class='active'"; } ?>><a href="gallery.php">GALLERY</a></li>
            <li <?php if ($page == "about.php"){ echo "class='active'"; } ?>><a href="about.php">ABOUT US</a></li>
            <li <?php if ($page == "contact.php"){ echo "class='active'"; } ?>><a href="contact.php">CONTACT US</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="header container">
      <div class="row">

        <div class="col-xs-12 col-sm-6">
          <img src="assets/imgs/logo.png" class="img-responsive" />
        </div><div class="col-sm-2"></div>

        <div class="header col-xs-12 col-sm-4 col-sm-4 hidden-xs visible-sm-* visible-md-* visible-lg-*">

          <div class="time">
            <p class="bold green">North Pittsburgh/Wexford/Cranberry</p>
            <p><span class="bold">412.635.8441</span> <span class="green">></span> Open Today &middot; <?php echo $north; ?></p>
            <br />
            <p class="bold green">North Hills/Pittsburgh</p>
            <p><span class="bold">412.939.3675</span> <span class="green">></span> Open Today &middot; <?php echo $pittsburgh; ?></p>
          </div>


          <div class="row hidden-xs visible-sm-* visible-md-* visible-lg-*">
            <div class="left-utility col-xs-3">
              <ul>
                <li><a href="gallery.php">GALLERY</a></li><br />
                <li><a href="gallery.php">LANDSCAPES</a></li>
              </ul>
            </div>
            <div class="right-utility col-xs-8">
              <ul>
                <li><a href="about.php">ABOUT US</a></li><br />
                <li><a href="contact.php">CONTACT US</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="nav-wrap">
      <ul class="col-xs-12 navigation hidden-xs visible-sm-* visible-md-* visible-lg-*">
          <li <?php if ($page == "index.php"){ echo "class='active'"; } ?>><a href="index.php">Home</a></li>
          <li>|</li>
          <li <?php if ($page == "walls.php"){ echo "class='active'"; } ?>><a href="walls.php">Paver & Wall Systems</a></li>
          <li>|</li>
          <li <?php if ($page == "mulch.php"){ echo "class='active'"; } ?>><a href="mulch.php">Soil, Mulch & Firewood</a></li>
          <li>|</li>
          <li <?php if ($page == "stone.php"){ echo "class='active'"; } ?>><a href="stone.php">Natural Stone & Gravel</a></li>
          <li>|</li>
          <li <?php if ($page == "accessories.php"){ echo "class='active'"; } ?>><a href="accessories.php">Rental Tools & Accessories</a></li>
      </ul>
    </div>
