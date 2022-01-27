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










function connecttext( textid, ischecked ) {
   if( ischecked == true ) {
      // チェックが入っていたら有効化
      document.getElementById(textid).disabled = false;
   }
   else {
      // チェックが入っていなかったら無効化
      document.getElementById(textid).disabled = true;
   }
}

$(".area dt input[type='checkbox']").change(function () {
    var area = $(this).parents(".area").find("dd input[type='checkbox']");
    if ($(this).is(":checked")) {
        area.prop("checked",true);
    } else {
        area.prop("checked",false);
    }
});

$(".area dd input[type='checkbox']").change(function () {
    var length = $(this).parents(".area").find("dd").length;
    var checked_length = $(this).parents(".area").find("dd input:checked").length;
    var pref = $(this).parents(".area").find("dt input");
    if(checked_length == 0){
        pref.prop("checked",false);
    } else if(length == checked_length) {
        pref.prop("checked",true);
    }
});

$(document).on("click", ".add", function() {
    $(this).parent().clone(true).insertAfter($(this).parent());
});
$(document).on("click", ".del", function() {
    var target = $(this).parent();
    if (target.parent().children().length > 1) {
        target.remove();
    }
});