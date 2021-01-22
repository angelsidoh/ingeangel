if ($('#paquetes').is(':hidden')) {
  console.log("Esta oculto");
} else {
  console.log('Visible');
}
// slider
$(document).ready(function(){

  var imgItems = $('.slider li').length;
  var imgPos = 1;

  for( i=1; i<=imgItems; i++){
      $('.paginacion').append('<li><span><i class="fa fa-circle"></i></span></li>');
  }
  

  $('.slider li').hide();
  $('.slider li:first').show();
  $('.paginacion li:first').css({'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918'});

  $('.paginacion li').click(paginacion);
  $('.right span').click(nextSlider);
  $('.left span').click(prevSlider);

  // setInterval(function(){
  //     nextSlider();
  // }, 10000);

  function paginacion(){
      var  paginacionPos = $(this).index();
      paginacionPos = paginacionPos + 1;
      console.log(paginacionPos);

      $('.slider li').hide();
      $('.slider li:nth-child('+ paginacionPos +')').fadeIn();

      $('.paginacion li').css({'text-shadow': '0 0 0px #ffffff'});
      $(this).css({'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918'});

      imgPos = paginacionPos;
  }
  function nextSlider(){
      if(imgPos>=imgItems){
          imgPos = 1;
      }else{
          imgPos++;
      }
      
      console.log(imgPos);
      $('.slider li').hide();
      $('.slider li:nth-child('+ imgPos +')').fadeIn();

      $('.paginacion li').css({'text-shadow': '0 0 0px #ffffff'});
      $('.paginacion li:nth-child('+ imgPos +')').css({'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918'});
      
  }
  function prevSlider(){
      if(imgPos<=1){
          imgPos = imgItems;
      }else{
          imgPos--;
      }
      console.log(imgPos);
      $('.slider li').hide();
      $('.slider li:nth-child('+ imgPos +')').fadeIn();

      $('.paginacion li').css({'text-shadow': '0 0 0px #ffffff'});
      $('.paginacion li:nth-child('+ imgPos +')').css({'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918'});
      
  }
});
//end slider

$(".caracteristica img").addClass('show_hide');
$(".text_carac").addClass('show_hide');

$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#check").click(function () {
  if ($(this).is(":checked")) {
    $("#btn").hide();
    $("#clc").show();
  } else {
    $("#btn").show();
    $("#clc").hide();
  }
});

$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#check-hotcall").click(function () {
  if ($(this).is(":checked")) {
    $("#flechaup").hide();
    $("#flechadown").show();
  } else {
    $("#flechaup").show();
    $("#flechadown").hide();
  }
});
$('.proyectos').hover(function () {

  $('.proyectos a p').addClass('fixproyectos');
}, function () {
  $('.proyectos a p').removeClass('fixproyectos');
});

$("h1").lettering();
$("h1").click(function() { 
  var el = $(this),  
     newone = el.clone();
  el.before(newone);
  el.remove();
});

var text = $("#sparklemaster"),
numLetters = text.find("span").length;
console.log(numLetters);

function randomBlurize() {
text.find("span:nth-child(" + (Math.floor(Math.random()*numLetters)+1) + ")")
  .animate({
    'textShadowBlur': Math.floor(Math.random()*25)+4,
    'textShadowColor': 'rgba(0,100,0,' + (Math.floor(Math.random()*200)+55) + ')'
  });
// Call itself recurssively
setTimeout(randomBlurize, 100);
} // Call once
randomBlurize();

// hack to get animations to run again

// $("h3").lettering();

// // hack to get animations to run again


// var text = $("#sparklemaster"),
// numLetters = text.find("span").length;
// console.log(numLetters);

// function randomBlurize() {
// text.find("span:nth-child(" + (Math.floor(Math.random()*numLetters)+1) + ")")
//   .animate({
//     'textShadowBlur': Math.floor(Math.random()*25)+4,
//     'textShadowColor': 'rgba(0,100,0,' + (Math.floor(Math.random()*200)+55) + ')'
//   });
// // Call itself recurssively
// setTimeout(randomBlurize, 100);
// } // Call once
// randomBlurize();
// var text = $("#sparklemaster"),
//   numLetters = text.find("span").length;
//   console.log(numLetters);

// function randomBlurize() {


//   // Call itself recurssively
//   setTimeout(randomBlurize, 100);
// } // Call once
// randomBlurize();


$("#textBienvenida > div").length; 
var x = 'abc';
var empty = '';

console.log('abc is ' + x.length + ' code units long');
/* "Mozilla is 7 code units long" */
var scrollup = 0;
var scrolldown = 0;
var auxop = 0;
var operacion = 0;
var margin_menu = 0;
$(window).scroll(function () {
  var barraAltura = $('.menu-barra').innerHeight();
  var margin = barraAltura * -1;
  // console.log(margin);
  var scroll = $(window).scrollTop();
  var margin_menu = 0;
  if (auxop <= scroll) {
    scrollup = scroll;
    operacion = scrolldown - scrollup;

    if (operacion <= -120) {
      operacion = -120;
    }
    margin_menu = operacion;
    $('.menu-barra').css({
      'margin-top': margin_menu + 'px'
    });


  }
  if (auxop > scroll) {
    scrolldown = scroll;
    operacion = scrollup - scrolldown;
    if (operacion >= 120) {
      operacion = 120;
    }
    margin_menu = margin + operacion;

    $('.menu-barra').css({
      'margin-top': margin_menu + 'px'
    })
    $('.menu-barra').addClass('menu-barraextra');
  }





  //console.log(auxop, margin_menu, scroll, margin);

  if (scroll > 966) {
    $('.menu-barra').addClass('fix-menubarra');


  } else {
    $('.barramenu').removeClass('fix-menubarra');
    $('.menu-barra').removeClass('menu-barraextra');




  }
  auxop = scroll;
});

$(document).ready(function () {
  for (let x = 1; x <= 280; x++) {
    $("#info"+x).hover(function () {
      $("#caracteristicaimg"+x).removeClass('show_hide');
    }, function () {
      $("#caracteristicaimg"+x).addClass('show_hide');
    });
    $("#info"+x).hover(function () {
        $(".text_carac").removeClass('show_hide');
      }, function () {
        $(".text_carac").addClass('show_hide');
      });
   
  }
});

$(document).mousemove(function (event) {
  for (let x = 1; x <= 280; x++) {
    $("#caracteristicaimg"+x).css({
      left: event.pageX -300,
      top: event.pageY - 90
    });
    $(".text_carac").css({
        left: event.pageX -300,
        top: event.pageY - 90
      });
  }
})
