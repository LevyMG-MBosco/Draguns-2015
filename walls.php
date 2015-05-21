<?php include_once('includes/header.php'); ?>

<div class="interior" style="background-image: url('assets/imgs/BackgroundWalls.png');-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>Beauty, Durability and Ease of Installation</h1>
        <div class="interior-content col-xs-12 col-sm-9">

            <p>
              Interlocking pavers or wall systems — with a vast array of textures, colors, options and styles — provides function and a lifetime of beauty to patios, walkways, walls, and driveways. Their precise dimensions make them the ideal product for the contractor or DIYer.  Unlike concrete that shifts and cracks, interlocking systems offer the most worry-free and durable choice for all of your hardscape needs. Dragun's Landscape Supply has the lowest prices, widest inventory, and largest displays in western Pennsylvania; and a wide selection of hardscape tools for rent and sale to get the job done. Bring in your measurements and photos for product and design assistance.
            </p>
            <p>See our <a href="accessories.php">accessories</a> for pavers & wall systems.</p>


        </div>

        <div class="interior-content col-xs-12 col-sm-3">
          <img class="img-responsive" src="http://placehold.it/250x150" />
        </div>
      </div>
    </div>
  </div>
</div>
<div class="interior midsection">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <img class="img-responsive" src="http://placehold.it/350x150" />
        <h3 class="blue">Techo-bloc Walls and Pavers</h3>
        <p>Combine old-world craftsmanship with
          modern innovation in this family of products.</p>
        <p>Color Thru and Thru, De-Icing Salt Resistant,
          Strength & Durability</p>
        <a>View Techo-Bloc Products</a>
      </div>
      <div class="col-xs-12 col-sm-4">
        <img class="img-responsive" src="http://placehold.it/350x150" />
        <h3 class="blue">Unilock Walls and Pavers</h3>
        <p>Enhanced color process, strength,
          endless design possibilities, and a lifetime
          guarantee make this a homeowner's choice.</p>
        <p>Colorfast Pigments, De-Icing Salt Resistant,
          Strong & Durable</p>
        <a>View Unilock Products</a>
      </div>
      <div class="col-xs-12 col-sm-4">
        <img class="img-responsive" src="http://placehold.it/350x150" />
        <h3 class="blue">Versalok Retaining Walls / Omni-stone Pavers</h3>
        <p>Omni Stone interlocking pavers bring rustic
          charm in five sizes that combine beautifully
          into a hand-chosen pattern or stand-alone
          for a distinctive look.</p>
        <p>Versa-Lok retaining walls combine stability,
          durability, cost-effectiveness, endless
          design options and beauty.</p>
        <a>View Versalock Products</a>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-3">
        <a data-toggle="modal" data-target="#calc-modal" >Wall Calculator</a>
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
