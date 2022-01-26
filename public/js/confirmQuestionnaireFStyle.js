function hideA(x) {
    if (x.checked) {
      $("#formA").show();
      $("#formB").hide();
    }
  }
 
  function hideB(x) {
    if (x.checked) {
      $("#formB").show();
      $("#formA").hide();
    }
  }



$(document).ready(function(){


$(window).scroll(function() {
  if ($(this).scrollTop() > 20) {
      $(".scrolltoTopbtn").fadeIn();
  } else {
      $(".scrolltoTopbtn").fadeOut("fast");
  }
});

$(".scrolltoTopbtn").click(function () {
 $('html, body').animate({scrollTop: 0}, 0);
});
});

$(document).ready(function() {
  $(window).scroll(function() {
  if($(this).scrollTop() > 200) {
    $("#nav").animate({top: '25px'});
  } else {
    $("#nav").animate({top: '0px'});
  }
});

});