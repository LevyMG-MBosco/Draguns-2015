<?php
//set CAPTCHA
$date = date("Ymd");
$rand = rand(0,9999999999999);
$height = "80";
$width  = "240";
$img    = "$date$rand-$height-$width.jpgx";
// check for contact form
$error = array();
if($_POST) {
   // check for captcha
   if(file_get_contents("http://www.opencaptcha.com/validate.php?ans=".$_POST['captcha']."&img=".$_POST['img'])=='pass') {
            $captcha = true;
    }
    else {
        $error[] = "You did not enter the CAPTCHA correctly.";
    }
    if($captcha == true) {

            // captcha is all bueno, validate required fields
            if(!$_POST["name"]):
                $error[] = "Please enter your name.";
            endif;
            if(!$_POST["email"]):
                $error[] = "Please enter your e-mail address.";
            endif;
            if(!$_POST["company"]):
                $error[] = "Please enter your company name.";
            endif;
            if(!$_POST["comments"]):
                $error[] = "Please enter your comments or inquiry.";
            endif;

            // if no errors, fire off the contact form; then add in an error message anyways cause im lazy
            if(array_sum($error) == 0):

                // assemble the message

                $subject = "Dragun's Landscaping Inquiry";

                $headers = 'From: noreply@generalcarbide.com' . "\r\n" .
                           'Reply-To: noreply@generalcarbide.com' . "\r\n" .
                           'X-Mailer: PHP/' . phpversion();


                $message =  "Name: " . $_POST["name"] ."\r";
                $message .= "Email: " . $_POST["email"] ."\r";
                $message .= "Company: " . $_POST["company"] ."\r";

                if($_POST["phone"]):
                    $message .= "Phone: " . $_POST["phone"] ."\r";
                endif;

                if($_POST["state"]):
                    $message .= "State: " . $_POST["state"] ."\r";
                endif;

                $message .= "Comments: " . $_POST["comments"] ."\r";

                // php mail function it works 60% of the time...every time...

                mail("mike@levymgi.com", $subject, $message, $headers);
                mail("greg@levymgi.com", $subject, $message, $headers);

                // Maybe eventually we can do an AJAX form for them, but these people really don't appreciate that shit in the long run

                //echoing html roflcopter
                $error[] = "<h3>Your inquiry has been sent.  Please allow 24 hours for a pigeon to carry this message to it's recipients.</h3>";
            endif;

    }

}


?>
<?php include_once('includes/header.php'); ?>
<div class="interior" style="background-image: url('assets/imgs/BackgroundWalls.png');-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <h1 class="green-back">Contact - Answers to Your Questions</h1>
      <div class="interior-content">
<form class="form-horizontal" method="post" action="contact.php">
  <div class="form-group">
    <div class="row">
      <div class="col-xs-11 col-sm-3">
        <label for=="name" class="pull-right">Your Name:</label>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0">
        <input name="name" type="text" placeholder="Name" class="form-control" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-xs-11 col-sm-3">
        <label for=="email" class="pull-right">Email Address:</label>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0">
        <input name="email" type="text" placeholder="Email" class="form-control" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-xs-11 col-sm-3">
        <label for=="title" class="pull-right">Title:</label>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0">
        <input name="title" type="text" placeholder="Title" class="form-control" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-xs-11 col-sm-3">
        <label for="company" class="pull-right">Company:</label>
      </div>
       <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0">
        <input type="text" name="company" placeholder="Company" class="form-control" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-xs-11 col-sm-3">
        <label for="address1" class="pull-right">Address Line 1:</label>
      </div>
       <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0">
        <input type="text" name="address1" placeholder="Address Line 1" class="form-control" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-xs-11 col-sm-3">
        <label for="address2" class="pull-right">Address Line 2:</label>
      </div>
       <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0">
        <input type="text" name="address2" placeholder="Address Line 2" class="form-control" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-xs-11 col-sm-3">
        <label for="city" class="pull-right">City:</label>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0">
        <input name="city" type="text" placeholder="City" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-xs-11 col-sm-3">
        <label for="state" class="pull-right">State:</label>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0">
        <select name="state" class="form-control">
          <option value="" selected="selected">Select state/province</option>
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AB">Alberta</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="BC">British Columbia</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="ME">Maine</option>
          <option value="MB">Manitoba</option>
          <option value="MD">Maryland</option>
          <option value="MA">Massachusetts</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NB">New Brunswick</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NF">Newfoundland</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="NT">Northwest Territories</option>
          <option value="NS">Nova Scotia</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="ON">Ontario</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="PE">Prince Edward Island</option>
          <option value="PR">Puerto Rico</option>
          <option value="QC">Quebec</option>
          <option value="RI">Rhode Island</option>
          <option value="SK">Saskatchewan</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
          <option value="YT">Yukon Territories</option>
          <option value="AA">Military -- AA</option>
          <option value="AE">Military -- AE</option>
          <option value="AP">Military -- AP</option>
          <option>Not Applicable</option>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-xs-11 col-sm-3">
        <label for="zip" class="pull-right">Zip:</label>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0">
        <input name="zip" type="text" placeholder="Zip" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-xs-11 col-sm-3">
        <label for="phone" class="pull-right">Phone:</label>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0">
        <input name="phone" type="text" placeholder="Phone" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-xs-11 col-sm-3">
        <label for="mobile" class="pull-right">Mobile:</label>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0">
        <input name="mobile" type="text" placeholder="Mobile" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-xs-11 col-sm-3">
        <label for="comments" class="pull-right">Comments:</label>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0">
        <textarea name="comments" class="form-control" placeholder="Your comment(s) or inquiry..." required></textarea>
      </div>
    </div>
  </div>

  <div class="form-group">
      <div class="col-xs-6 col-xs-offset-3">
        <p><label for='captcha'>CAPTCHA:</label></p>
         <?php echo "<input class='form-control' type='hidden' name='img' value='$img'>";
                echo "<a href='http://www.opencaptcha.com'><img src='http://www.opencaptcha.com/img/$img' height='$height' alt='captcha' width='$width' border='0' /></a><br /><br />";
                echo "<div class='row col-xs-4'><input type=text name='captcha' class='form-control' placeholder='Enter The CAPTCHA' /></div>";
            ?>
      </div>
  </div>

  <div class="form-group">
      <div class="col-xs-6 col-xs-offset-3">
          <input type="submit" class="btn btn-danger lol btn-lg" value="Submit">
      </div>
  </div>
</form>
      </div>
    </div>
  </div>
</div>
</div>
<?php include_once('includes/footer.php'); ?>
