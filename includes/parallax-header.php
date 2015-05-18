<!-- These parallax includes are used by the index page, since the parallax functionality there specifically
changes the way the markup needs to be formed -->
<!DOCTYPE html>
<!-- For referencing current page -->
<?php $page = basename($_SERVER['PHP_SELF']); ?>
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
            <li <?php if ($page == "industries.php"){ echo "class='active'"; } ?>><a href="industries.php">INDUSTRIES</a></li>
            <li <?php if ($page == "grades.php"){ echo "class='active'"; } ?>><a href="grades.php">GRADES</a></li>
            <li <?php if ($page == "quality.php"){ echo "class='active'"; } ?>><a href="quality.php">QUALITY</a></li>
            <li <?php if ($page == "library.php"){ echo "class='active'"; } ?>><a href="library.php">LIBRARY</a></li>
            <li <?php if ($page == "toolbox.php"){ echo "class='active'"; } ?>><a href="toolbox.php">TOOLBOX</a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li <?php if ($page == "gallery.php"){ echo "class='active'"; } ?>><a href="gallery.php">GALLERY</a></li>
            <li <?php if ($page == "about.php"){ echo "class='active'"; } ?>><a href="about.php">ABOUT US</a></li>
            <li <?php if ($page == "contact.php"){ echo "class='active'"; } ?>><a href="contact.php">CONTACT US</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
