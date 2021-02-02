function mostrarPassword(){
  var cambio = document.getElementById("pass");
  if(cambio.type == "password"){
    cambio.type = "text";
    $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
  }else{
    cambio.type = "password";
    $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
  }
} 



// babel
$("#menu-screen").css("z-index", "-1");
const app = (() => {
  let body;
  let menu;
  let menuItems;

  const init = () => {
    body = document.querySelector("body");
    menu = document.querySelector(".menu-icon");
    menuItems = document.querySelectorAll(".nav__list-item");

    applyListeners();
  };

  const applyListeners = () => {
    menu.addEventListener("click", () => toggleClass(body, "nav-active"));
  };

  const toggleClass = (element, stringClass) => {
    if (element.classList.contains(stringClass)){
      console.log('hola');
    element.classList.remove(stringClass);
    $("#menu-screen").css("z-index", "-1");
    }
    else{
      $("#menu-screen").css("z-index", "2");
      console.log('adios');
      element.classList.add(stringClass);
    }
  };

  init();
})();



// $( "div.card" )
// .mouseenter(function() {
//  console.log('buenos dias angel');
//  $(".card").addClass('card-flip');
// })
// .mouseleave(function() {
//   console.log('adios');
//   $(".card").removeClass('card-flip');
// });
var resolucion = 0;
$(window).resize(function () {

  resolucion = screen.width;

  console.log(resolucion);
});
$(document).ready(function(){ 

  resolucion = screen.width;

  console.log(resolucion);
});
var fleep = '0';

$(".fleep1")
  .mouseenter(function () {
    fleep = '1';
    $('.card1').addClass('flipped');
    $('.card2').removeClass('flipped');
    $('.card3').removeClass('flipped');
    $("#card1-front").hide();
    $("#card2-front").show();
    $("#card3-front").show();
    console.log(fleep);
    if (resolucion <= 1280) {
      
      $heightDown = $('.imgfondoprincipal').height();
      console.log($heightDown);
      $('html, body').animate({
        scrollTop: $heightDown
      }, 100);
    }

  })
$(".fleep1")
  .mouseleave(function () {
    fleep = '0';
    console.log(fleep);
    if (fleep === '0') {
      $('.card1').removeClass('flipped');
      $('.card2').removeClass('flipped');
      $('.card3').removeClass('flipped');
      $("#card1-front").show();
      $("#card2-front").show();
      $("#card3-front").show();
      
    }
  });
$(".fleep2")
  .mouseenter(function () {
    $("#card1-front").show();
    $("#card2-front").hide();
    $("#card3-front").show();
    $('.card1').removeClass('flipped');
    $('.card2').addClass('flipped');
    $('.card3').removeClass('flipped');
    fleep = '2';
    console.log(fleep);
    if (resolucion <= 1280) {
      $heightDown = $('.imgfondoprincipal').height() + $('#card1-back').height();
      console.log($heightDown);
      $('html, body').animate({
        scrollTop: $heightDown
      }, 100);
    }
  })
$(".fleep2")
  .mouseleave(function () {
    fleep = '0';
    console.log(fleep);
    if (fleep === '0') {
      $('.card1').removeClass('flipped');
      $('.card2').removeClass('flipped');
      $('.card3').removeClass('flipped');
      $("#card1-front").show();
      $("#card2-front").show();
      $("#card3-front").show();
    }
  });
$(".fleep3")
  .mouseenter(function () {

    $("#card1-front").show();
    $("#card2-front").show();
    $("#card3-front").hide();
    $('.card1').removeClass('flipped');
    $('.card2').removeClass('flipped');
    $('.card3').addClass('flipped');
    fleep = '3';
    console.log(fleep);
    if (resolucion <= 1280) {
      $heightDown = $('.imgfondoprincipal').height() + $('#card1-back').height() + $('#card2-back').height();
      console.log($heightDown);
      $('html, body').animate({
        scrollTop: $heightDown
      }, 100);
    }


  })
$(".fleep3")
  .mouseleave(function () {

    fleep = '0';
    console.log(fleep);

    if (fleep === '0') {
      $('.card1').removeClass('flipped');
      $('.card2').removeClass('flipped');
      $('.card3').removeClass('flipped');
      $("#card1-front").show();
      $("#card2-front").show();
      $("#card3-front").show();
    }
  });


// setInterval(function(){
//      console.log('fleepxx =' +fleep)



//     }, 3500);
// var swikk = 0;
// $('#mybutton1'+fleep).click(function() {
//   swikk = swikk+ 1;
//   console.log(swikk);

//   if (swikk === 1) {
//     $('.card').addClass('flipped');
//     $('.front').addClass('hide');
//     $("#card-front").hide();
//   }
//   if(swikk === 2){
//     $('.card').removeClass('flipped');
//     swikk = 0;
//   }
//   });
//   $('#mybutton2'+fleep).click(function() {
//     swikk = swikk+ 1;
//     console.log(swikk);

//     if (swikk === 1) {
//       $('.card').addClass('flipped');
//     }
//     if(swikk === 2){
//       $('.front').removeClass('hide');
//       $('.card').removeClass('flipped');
//       $("#card-front").show();
//       swikk = 0;
//     }
//     });
//   var condicion = 0;
//  setInterval(function(){
//    if(condicion === 0){
//       cambn();
//    }
//   }, 500);
//   var swikkx = 0;
//   function cambn(){
//     console.log(swikkx);
//     swikkx = swikkx + 1;
//     if (swikkx === 1) {
//       $('.card').addClass('flipped');
//     }
//     if(swikkx === 2 ){
//       $('.card').removeClass('flipped');

//     }
//     if(swikkx === 3 ){
//       $('.card').removeClass('flipped');
//       condicion = 1;
//     }
//   }
// menu proyectos
$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#check-proyectos").click(function () {
  if ($(this).is(":checked")) {
    $("#plus0").hide();
    $("#neg0").show();
    $("#lista-proyectos").show();

  } else {
    $("#plus0").show();
    $("#neg0").hide();
    $("#lista-proyectos").hide();
  }
});
$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#check-practicas").click(function () {
  if ($(this).is(":checked")) {
    $("#plus1").hide();
    $("#neg1").show();
    $("#lista-practicas").show();
    $(".links a p").addClass('color-font');


  } else {
    $("#plus1").show();
    $("#neg1").hide();
    $("#lista-practicas").hide();
  }
});

$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#check-apis").click(function () {
  if ($(this).is(":checked")) {
    $("#plus2").hide();
    $("#neg2").show();
    $("#lista-apis").show();
    $(".links a p").addClass('color-font');


  } else {
    $("#plus2").show();
    $("#neg2").hide();
    $("#lista-apis").hide();
  }
});
$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#check-programacion").click(function () {
  if ($(this).is(":checked")) {
    $("#plus3").hide();
    $("#neg3").show();
    $("#lista-programacion").show();
    $(".links a p").addClass('color-font');


  } else {
    $("#plus3").show();
    $("#neg3").hide();
    $("#lista-programacion").hide();
  }
});
$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#check-diseniomecanico").click(function () {
  if ($(this).is(":checked")) {
    $("#plus4").hide();
    $("#neg4").show();
    $("#lista-diseniomecanico").show();
    $(".links a p").addClass('color-font');


  } else {
    $("#plus4").show();
    $("#neg4").hide();
    $("#lista-diseniomecanico").hide();
  }
});
$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#check-robotica").click(function () {
  if ($(this).is(":checked")) {
    $("#plus5").hide();
    $("#neg5").show();
    $("#lista-robotica").show();
    $(".links a p").addClass('color-font');


  } else {
    $("#plus5").show();
    $("#neg5").hide();
    $("#lista-robotica").hide();
  }
});
$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#check-redes").click(function () {
  if ($(this).is(":checked")) {
    $("#plus6").hide();
    $("#neg6").show();
    $("#lista-redes").show();
    $(".links a p").addClass('color-font');


  } else {
    $("#plus6").show();
    $("#neg6").hide();
    $("#lista-redes").hide();
  }
});
// end menu proyectos

var pathname = window.location.pathname;
pathname = (pathname.replace('/01ingeangel.com', ''));
pathname = (pathname.replace('01', ''));
console.log(pathname);
if (pathname == '/index.php' || pathname == '/') {
  $(document).ready(function () {
    $("body").css("background-color", "#ffffff");
  });
}
else if(pathname == '/login.php'){
  $(document).ready(function () {
    $("body").css("background-color", "#ffffff");
  });
}
else {
  $(document).ready(function () {

    $("body").css("background-color", "#161616");

  });
}

if ($('#paquetes').is(':hidden')) {
  console.log("Esta oculto");
} else {
  console.log('Visible');
}
// slider
$(document).ready(function () {

  var imgItems = $('.slider li').length;
  var imgPos = 1;

  for (i = 1; i <= imgItems; i++) {
    $('.paginacion').append('<li><span><i class="fa fa-circle"></i></span></li>');
  }


  $('.slider li').hide();
  $('.slider li:first').show();
  $('.paginacion li:first').css({
    'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918'
  });

  $('.paginacion li').click(paginacion);
  $('.right span').click(nextSlider);
  $('.left span').click(prevSlider);

  // setInterval(function(){
  //     nextSlider();
  // }, 10000);

  function paginacion() {
    var paginacionPos = $(this).index();
    paginacionPos = paginacionPos + 1;
    console.log(paginacionPos);

    $('.slider li').hide();
    $('.slider li:nth-child(' + paginacionPos + ')').fadeIn();

    $('.paginacion li').css({
      'text-shadow': '0 0 0px #ffffff'
    });
    $(this).css({
      'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918'
    });

    imgPos = paginacionPos;
  }

  function nextSlider() {
    if (imgPos >= imgItems) {
      imgPos = 1;
    } else {
      imgPos++;
    }

    console.log(imgPos);
    $('.slider li').hide();
    $('.slider li:nth-child(' + imgPos + ')').fadeIn();

    $('.paginacion li').css({
      'text-shadow': '0 0 0px #ffffff'
    });
    $('.paginacion li:nth-child(' + imgPos + ')').css({
      'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918'
    });

  }

  function prevSlider() {
    if (imgPos <= 1) {
      imgPos = imgItems;
    } else {
      imgPos--;
    }
    console.log(imgPos);
    $('.slider li').hide();
    $('.slider li:nth-child(' + imgPos + ')').fadeIn();

    $('.paginacion li').css({
      'text-shadow': '0 0 0px #ffffff'
    });
    $('.paginacion li:nth-child(' + imgPos + ')').css({
      'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918'
    });

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
$("h1").click(function () {
  var el = $(this),
    newone = el.clone();
  el.before(newone);
  el.remove();
});

var text = $("#sparklemaster"),
  numLetters = text.find("span").length;
console.log(numLetters);

function randomBlurize() {
  text.find("span:nth-child(" + (Math.floor(Math.random() * numLetters) + 1) + ")")
    .animate({
      'textShadowBlur': Math.floor(Math.random() * 25) + 4,
      'textShadowColor': 'rgba(0,100,0,' + (Math.floor(Math.random() * 200) + 55) + ')'
    });
  // Call itself recurssively
  setTimeout(randomBlurize, 100);
} // Call once
randomBlurize();

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
    $("#info" + x).hover(function () {
      $("#caracteristicaimg" + x).removeClass('show_hide');
    }, function () {
      $("#caracteristicaimg" + x).addClass('show_hide');
    });
    $("#info" + x).hover(function () {
      $(".text_carac").removeClass('show_hide');
    }, function () {
      $(".text_carac").addClass('show_hide');
    });

  }
});

$(document).mousemove(function (event) {
  for (let x = 1; x <= 280; x++) {
    $("#caracteristicaimg" + x).css({
      left: event.pageX - 300,
      top: event.pageY - 90
    });
    $(".text_carac").css({
      left: event.pageX - 300,
      top: event.pageY - 90
    });
  }
})