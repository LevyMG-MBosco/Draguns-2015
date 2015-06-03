<?php include_once('includes/header.php'); ?>

<div class="interior" style="background-image: url('assets/imgs/BackgroundWalls.png');-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="green-back">Beauty, Durability and Ease of Installation</h1>
        <div class="interior-content leftside-alignment col-xs-12 col-sm-8">
          <p>
            Interlocking pavers, wall systems and veneers — with a vast array of textures, colors, options and styles — provides function and a lifetime of beauty to patios, walkways, walls, and driveways. Their precise dimensions make them the ideal product for the contractor or DIYer.  Unlike concrete that shifts and cracks, interlocking systems offer the most worry-free and durable choice for all of your hardscape needs. Dragun's Landscape Supply has the lowest prices, widest inventory, and largest displays in western Pennsylvania; and a wide selection of hardscape tools for rent and sale to get the job done. Bring in your measurements and photos for product and design assistance.
          </p>
          <a  href="accessories.php" class="accessories-link">See our accessories & tools. <span class="acc-arrow">></span></a>
        </div>

        <div class="interior-content col-xs-12 col-sm-4">
            <img class="img-responsive center-block" src="assets/imgs/walls-quote.png" />
            <div class="youtube-container">
              <a href="https://www.youtube.com/embed/EoHKxG6f0CY">Watch Video <img src="assets/imgs/youtube.png" /></a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="interior midsection">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <img class="distributors img-responsive" src="assets/imgs/techobloc.jpeg" />
        <h3 class="blue">Techo-bloc Walls and Pavers</h3>
        <p>100% True Full-Bodied Color</p>
        <p>Combine old-world craftsmanship with modern innovation in this family of products.</p>
        <a class="product-link" href="gallery.php">View <img src="assets/imgs/logos/techo-bloc.png" /> Products ></a>
      </div>
      <div class="col-xs-12 col-sm-4">
        <img class="distributors img-responsive" src="assets/imgs/unilock.jpeg" />
        <h3 class="blue">Unilock Walls and Pavers</h3>
        <p>Superior Wear Resistance and Color Longevity</p>
        <p>Enhanced color process, strength, endless design possibilities, and a lifetime guarantee make this a homeowner's choice.</p>
        <a class="product-link" href="gallery.php">View <img src="assets/imgs/logos/unilock.png" /> Products ></a>
      </div>
      <div class="col-xs-12 col-sm-4">
        <img class="distributors img-responsive" src="assets/imgs/versalok.jpeg" />
        <h3 class="blue">VERSA-LOK Retaining Walls</h3>
        <p>A High-end Appearance, no High-end Cost</p>
        <p>VERSA-LOK retaining walls combine stability, durability, cost-effectiveness, endless design options and beauty.</p>
        <a class="product-link" href="gallery.php">View <img src="assets/imgs/logos/versa-lok.png" /> Products ></a>
      </div>
    </div>
    <div style="margin-top: 10px;" class="row">
      <div class="col-xs-12 col-sm-4">
        <img class="distributors img-responsive" src="assets/imgs/eldorado.jpeg" />
        <h3 class="blue">Eldorado Stone</h3>
        <p>Believability is Key </p>
        <p>Eldorado Stone is known for creating authentic-looking products at attainable prices.</p>
        <a class="product-link" href="gallery.php">View <img src="assets/imgs/logos/eldorado-logo.png" /> Products ></a>
      </div>
      <div class="col-xs-12 col-sm-4">
        <img class="distributors img-responsive" src="assets/imgs/keystone.jpeg" />
        <h3 class="blue">Keystone Retaining Wall Systems</h3>
        <p>Design, Performance, Aesthetics </p>
        <p>Solutions for commercial, industrial, public works and residential applications.</p>
        <a class="product-link" href="gallery.php">View <img src="assets/imgs/logos/keystone2.png" /> Products ></a>
      </div>
      <div class="col-xs-12 col-sm-4">
        <img class="distributors img-responsive" src="assets/imgs/ephenry.jpeg" />
        <h3 class="blue">EP Henry </h3>
        <p>Values that Endure</p>
        <p>Cast Veneer Stone is so close to natural stone in appearance, color, and texture -- the two are virtually indistinguishable.</p>
        <a class="product-link" href="gallery.php">View <img src="assets/imgs/logos/ephvalues.png" /> Products ></a>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-3">
        <a class="calc-link" data-toggle="modal" data-target="#calc-modal" ><img src="assets/imgs/calculator.png" />Wall Calculator</a>
      </div>
    </div>
  </div>
</div>

<div id="calc-modal" class="calculator modal fade" aria-hidden="true" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Wall Calculator</h4>
      </div>

      <div class="modal-body">
        <div id="versaForm">
          <form name="versaForm" role="form" class="form-horizontal">
            <div class="form-group">
              <label for="inputType" class="col-md-5 control-label">Length of Wall <em>(in feet):</em></label>
              <div class="col-md-7">
                <input type="text" class="form-control" size="6" name="lengthv" id="lengthv" />
              </div>
            </div>
            <div class="form-group">
              <label for="inputType" class="col-md-5 control-label">Height of Wall <em>(in feet):</em></label>
              <div class="col-md-7">
                <input type="text" class="form-control" size="6" name="widthv" id="widthv" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12">
                <em>(Be sure to include embedment in height of wall, 6&quot; or 10% of total height)</em>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12 text-center">
                <button type="button" class="btn btn-primary full" onClick="wallCalc();">Calculate</button>
              </div>
            </div>
          </form>
        </div>
        <div id="results"></div>
      </div>
    </div>
  </div>
</div>

<?php include_once('includes/footer.php'); ?>
