 //img slideshow
 var slideIndex = 1;
 showSlides(slideIndex);

 // Next/previous controls
 function plusSlides(n) {
 showSlides(slideIndex += n);
 }

 // Thumbnail image controls
 function currentSlide(n) {
 showSlides(slideIndex = n);
 }

 function showSlides(n) {
 var i;
 var slides = $(".mySlides");
 var dots = $(".dot");
 if (n > slides.length) {slideIndex = 1}
 if (n < 1) {slideIndex = slides.length}
 for (i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";
 }
 for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" active", "");
 }
 slides[slideIndex-1].style.display = "block";
 dots[slideIndex-1].className += " active";
 }



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


/*var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var length = document.getElementById("length");


// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}*/



//scroll top
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

// pop-up
function openForm() {
  $("#ruru-popup").fadeIn();
}

function closeForm() {
  $("#ruru-popup").fadeOut();
}

$("#bar-room-popup").click(function(){
  $(".room-popup").show();
});

$("#close-btn").click(function(){
  $(".room-popup").hide();
});


