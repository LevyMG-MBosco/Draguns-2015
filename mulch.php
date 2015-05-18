<?php include_once('includes/header.php'); ?>

<div class="interior" style="background-image: url('assets/imgs/BackgroundWalls.png');-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>Soil, Mulch & Firewood</h1>
        <div class="interior-content">
        <p>Give the softscapes in your landscaping the foundation they need to grow and thrive.
          Your soil is one of the most important factors in successful landscaping. Using mulch
          not only beautifies but can improve the quality of your soil, prevent weeds and reduce
          the need for water. The friendly pros at Dragun's Landscape Supply can help you choose
          the types that will best fit your landscape project needs. We also offer several mixes
          of grass seed (including Penn State mix and drought-resistant mix), fertilizer,
          landscape fabric, aluminum edging and gardening tools.</p>
          <p>See our <a href="accessories.php">accessories</a> for pavers & wall systems.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="interior midsection">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <h3 class="blue">Techo-bloc Walls and Pavers</h3>
        <p>Combine old-world craftsmanship with
          modern innovation in this family of products.</p>
        <p>Color Thru and Thru, De-Icing Salt Resistant,
          Strength & Durability</p>
        <a>View Techo-Bloc Products</a>
      </div>
      <div class="col-xs-12 col-sm-4">
        <h3 class="blue">Unilock Walls and Pavers</h3>
        <p>Enhanced color process, strength,
          endless design possibilities, and a lifetime
          guarantee make this a homeowner's choice.</p>
        <p>Colorfast Pigments, De-Icing Salt Resistant,
          Strong & Durable</p>
        <a>View Unilock Products</a>
      </div>
      <div class="col-xs-12 col-sm-4">
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
        <a data-toggle="modal" data-target="#calc-modal" >Mulch Calculator</a>
      </div>
    </div>
  </div>
</div>

<div id="calc-modal" class="calculator modal fade" aria-hidden="true" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Mulch Calculator</h4>
      </div>

      <div class="modal-body">
        <p>How much mulch will you need?</p>
        <div id="versaForm">
          <form name="versaForm" role="form" class="form-horizontal">
            <div class="form-group">
              <label for="inputType" class="col-md-5 control-label">Enter Length <em>(in feet):</em></label>
              <div class="col-md-7">
                <input type="text" class="form-control" size="6" name="lengthg" id="lengthg" />
              </div>
            </div>
            <div class="form-group">
              <label for="inputType" class="col-md-5 control-label">Enter Width <em>(in feet):</em></label>
              <div class="col-md-7">
                <input type="text" class="form-control" size="6" name="widthg" id="widthg" />
              </div>
            </div>
            <div class="form-group">
              <label for="inputType" class="col-md-5 control-label">Enter Depth <em>(in inches):</em></label>
              <div class="col-md-7">
                <input type="text" class="form-control" size="6" name="depthg" id="depthg" />
              </div>
              <div class="col-sm-12 text-center">
                <button type="button" class="btn btn-primary full" onClick="mulchCalc();">Calculate</button>
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
