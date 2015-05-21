<?php include_once('includes/parallax-header.php'); ?>
<div class="parallax">
  <div id="parallax-1" class="parallax-group">
    <div class="container">

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
    <div class="nav-wrap container hidden-xs visible-sm-* visible-md-* visible-lg-*">
      <ul class="col-xs-12 navigation">
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
  </div>

  <div id="parallax-background" class="parallax-group">
    <div class="parallax-layer parallax-layer-back">
    </div>
  </div>

  <div id="parallax-2" class="parallax-group">
    <div class="parallax-layer parallax-layer-base">
      <div id="hero-statement" class="col-xs-12">
        <img class="center-block img-responsive" src="assets/imgs/HeroText.png" />
      </div>
      <div class="container">
        <div id="mobile-content-wrap" class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="midpage-float">
              <h1><a href="walls.php">Pavers & Wall Systems</a></h1>
              <p class="hidden-xs visible-sm-* visible-md-* visible-lg-*">
                Interlocking pavers and wall systems provide an affordable and easy-to-install solution for walls, driveways, walkways and patios. Dragun’s has the lowest prices, widest inventory and largest displays. We also offer free design assistance and tool rentals for the DIYer.
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="midpage-float">
              <h1><a href="mulch.php">Soil, Mulch & Firewood</a></h1>
              <p class="hidden-xs visible-sm-* visible-md-* visible-lg-*">
                Give your landscape the foundation it needs to grow and thrive with mulch, compost, top soil, soil mixes, sand and rock from Dragun’s. You’ll also find grass seed, fertilizer, landscape fabric and gardening tool, plus firewood. We offer delivery and free pH testing of your soil.
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="midpage-float">
              <h1><a href="stone.php">Natural Stone & Gravel</a></h1>
              <p class="hidden-xs visible-sm-* visible-md-* visible-lg-*">
                Boulders, rocks , stone and gravel add texture and contrast to your landscaping. Turn to Dragun’s  -- waterfall boulders, flagstone walkway, river rock edging, pea gravel driveway, Belgium block wall – for these enduring and low-maintenance elements.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="parallax-group midsection">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="green italic">We Create Beautiful Spaces and Comfortable Places</h2>
          <p>Beautify your yard with our wide range of our landscaping materials. From the finest topsoil, color
          enhanced mulch, and nutrient enriched compost to patio pavers wall systems, Dragun’s has
          everything you need to complete your landscape projects.</p>

          <h4>GALLERY</h4>
          <!-- Gallery view -->
        </div>
      </div>
    </div>
  </div>
  <div class="footer parallax-group">
    <div class="container">
      <div class="row">
        <div class="footer-left col-xs-12 col-sm-4">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <h1>Dragun's Landscape Supply Inc.</h1>
            </div>

            <div class="col-xs-6 col-sm-12">
              <p>Wexford/Cranberry:</p>
              <p>2458 Rochester Road,</p>
              <p>Sewickley, PA 15143</p>
              <p>Phone: 412-635-8441</p>
            </div>

            <div class="col-xs-6 col-sm-12">
              <p>Ross/Pittsburgh:</p>
              <p>4535 Peoples Road,</p>
              <p>Pittsburgh, PA 15223</p>
              <p>Phone: 412-939-3675</p>
            </div>
          </div>
        </div>
        <div class="footer-mid col-xs-12 col-sm-4">
          <ul class="footer-nav">
            <li><a href="index.php">Home</a></li><br />
            <li><a href="walls.php">Pavers & Wall Systems</a></li><br />
            <li><a href="mulch.php">Soil, Mulch & Firewood</a></li><br />
            <li><a href="stone.php">Natural Stone & Gravel</a></li><br />
            <li><a href="accessories.php">Rental Tools & Accessories</a></li><br />
            <li><a href="gallery.php">Gallery</a></li><br />
            <li><a href="about.php">About Us</a></li><br />
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-right col-xs-12 col-sm-4">
          <h1>North Pittsburgh/Wexford/Cranberry</h1>
          <p>412.635.8441 > Open Today &middot; <?php echo $north; ?></p>

          <h1>North Hills/Pittsburgh</h1>
          <p>412.939.3675 > Open Today &middot; <?php echo $pittsburgh; ?></p><br />
          <div class="facebook">
            <p>Follow us on Facebook</p><img src="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<?php include_once('includes/parallax-footer.php'); ?>
