// Driver for the mobile nav
$(document).ready(function() {
    //stick in the fixed 100% height behind the navbar but don't wrap it
    $('#slide-nav.navbar-inverse').after($('<div class="inverse" id="navbar-height-col"></div>'));

    $('#slide-nav.navbar-default').after($('<div id="navbar-height-col"></div>'));

    // Enter your ids or classes
    var toggler = '.navbar-toggle';
    var pagewrapper = '#page-content';
    var navigationwrapper = '.navbar-header';
    var menuwidth = '100%'; // the menu inside the slide menu itself
    var slidewidth = '80%';
    var menuneg = '-100%';
    var slideneg = '-80%';


    $("#slide-nav").on("click", toggler, function (e) {
      var selected = $(this).hasClass('slide-active');

      $('#slidemenu').stop().animate({
          left: selected ? menuneg : '0px'
      });

      $('#navbar-height-col').stop().animate({
          left: selected ? slideneg : '0px'
      });

      $(pagewrapper).stop().animate({
          left: selected ? '0px' : slidewidth
      });

      $(navigationwrapper).stop().animate({
          left: selected ? '0px' : slidewidth
      });

      $(this).toggleClass('slide-active', !selected);
      $('#slidemenu').toggleClass('slide-active');

      $('#page-content, body, .navbar-header').toggleClass('slide-active');
    });


    var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';


    $(window).on("resize", function () {

        if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
            $(selected).removeClass('slide-active');
        }


    });

    $('.bxslider').bxSlider({
      pagerCustom: '#bx-pager'
    });
});

//Handles allowing the lightbox plugin to function
$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

//Calculator functions here
function wallCalc(){
  var lengthv = $("#lengthv").val();
  var widthv = $("#widthv").val();
  var totalv = lengthv * widthv * 1.5;
  var pallets1 = totalv / 24;
  var totalc = (lengthv * 12) / 16;
  var pallets2 = totalc / 48;
  var totalp = (totalv - totalc) * 2;
  var totalqt = lengthv / 28;
  $("#title-value").html("Results");
  $("#results").html("<p><strong>Total Versa-Lok Standards Required:</strong> " +
  totalv +
  "</p>\n\<p><strong>Pallets: </strong>"+
  pallets1+
  "</p>\n\<p><strong>Total C-Caps Required: </strong>"+
  totalc+
  "</p> \n\<p><strong>Pallets: </strong>"+
  pallets2+
  "</p>\n\<p><strong>Total Pins Required: </strong>"+
  totalp+
  "</p>\n\<p><strong>Total Qts of Kapseal Required: </strong>"+
  totalqt+
  "<div class='col-sm-4'><p><button id='reset' class='btn btn-primary'>Reset</button</p></div>");

  $("#versaForm").fadeOut("fast", function(){
    $("#results").fadeIn("fast");
  });
}

function mulchCalc(){
  var lengthg = $("#lengthg").val();
  var widthg = $("#widthg").val();
  var depthg = $("#depthg").val();
  var cubicyards = (lengthg) * (widthg) * (depthg) / 270;
  $("#title-value").html("Results");
  $("#results").html("<p><strong>Number of cubic yards needed:</strong>  "+cubicyards+"</p><p><button id='reset' class='btn btn-primary'>Reset</button</p>");
  $("#versaForm").fadeOut("fast", function(){
      $("#results").fadeIn("fast");
  });
}

function stoneCalc() {
  var lengthg = $("#lengthg").val();
  var widthg = $("#widthg").val();
  var depthg = $("#depthg").val();
  var results = (lengthg) * (widthg) * 0.085 * (depthg) / 23;
  $("#title-value").html("Results");
  $("#results").html("<p><strong>Number of tractor buckets needed:</strong>  "+results+"</p><p><button id='reset' class='btn btn-primary'>Reset</button</p>");
  $("#versaForm").fadeOut("fast", function(){
      $("#results").fadeIn("fast");
  });
}

$(".mobile-backtotop").click(function(){
  $('html, body').animate({scrollTop: 0}, 750, 'swing');
});

$(document).on("click", "#reset", function(){
    $("#results").fadeOut("fast", function(){
        $("#versaForm").fadeIn("fast");
    });
    $("#lengthg").val("");
    $("#widthg").val("");
    $("#depthg").val("");
});

try{
  $(window).scroll(function(){
    if ($(this).scrollTop()) {
      $('.mobile-backtotop:hidden').stop(true, true).fadeIn();
    } else {
      $('.mobile-backtotop').stop(true, true).fadeOut();
    }
  });
}catch(e){/*lol*/}
