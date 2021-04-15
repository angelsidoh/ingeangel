//contador de caracteres mensaje
function countChars(obj,x){
 
    var chars = "charNum"+x;
    console.log(x);
    document.getElementById(chars).innerHTML = obj.value.length+' characters';
    obtnermensaje(x);
  
  
  
}

// end contador de caracteres mensajes


// Conekta

$("#subcall").hide();

// end conekta
var contadornotificaciones = 0;
var auxicontadorseg = 0;
var contadorinnotifi = 0;


function contadorFechas() {
  var tiempo = document.querySelector('#tiempo2').value;

  var fechaBDExtss = $('#fechainicio2').attr('value');
  var fech = new Date(fechaBDExtss);
  var anios = fech.getFullYear();
  var mess = fech.getMonth() + 1;
  mess = mess.toString();
  mess = mess.padStart(2, 0)
  var diass = fech.getDate();
  diass = diass.toString();
  diass = diass.padStart(2, 0)
  var tiempo = parseInt(tiempo, 10);
  var horass = fech.getHours() + tiempo;
  horass = horass.toString();
  horass = horass.padStart(2, 0)
  var minutoss = fech.getMinutes();
  minutoss = minutoss.toString();
  minutoss = minutoss.padStart(2, 0)
  var segundoss = fech.getSeconds();
  segundoss = segundoss.toString();
  segundoss = segundoss.padStart(2, 0);
  var tiempox = tiempo;
  var tiempox1 = tiempox;
  var contadorDias = 0;
  while (tiempox >= 24) {
    tiempox = tiempox - 24;
    contadorDias++;
    console.log(contadorDias);
    for (let i = 0; i < contadorDias; i++) {
      console.log(horass + ' -' + i);
      if (horass >= 48) {
        console.log('->' + i);
        if (horass >= (24 * (i + 1)) && horass < (24 * (i + 2))) {
          horass = parseInt(horass, 10);
          horass = horass - (24 * i);
          horass = horass.toString();
          horass = horass.padStart(2, 0)
          diass = parseInt(diass, 10);
          diass = diass + i;
          diass = diass.toString();
          diass = diass.padStart(2, 0);


        }
      }
      if (horass >= (24) && horass < (48)) {
        horass = parseInt(horass, 10);
        horass = horass - 24;
        horass = horass.toString();
        horass = horass.padStart(2, 0)
        diass = parseInt(diass, 10);
        diass = diass + 1;
        diass = diass.toString();
        diass = diass.padStart(2, 0);


      }

    }
  }



  // if(horass >= 24 && horass < 48){
  //   horass = parseInt(horass, 10);
  //   horass = horass - 24;
  //   horass = horass.toString();
  //   horass = horass.padStart(2, 0)
  //   diass = parseInt(diass, 10);
  //   diass = diass + 1;
  //   diass = diass.toString();
  //   diass = diass.padStart(2, 0)

  // }
  // if(horass >= 48 && horass < 72){
  //   horass = parseInt(horass, 10);
  //   horass = horass - 48;
  //   horass = horass.toString();
  //   horass = horass.padStart(2, 0)
  //   diass = parseInt(diass, 10);
  //   diass = diass + 2;
  //   diass = diass.toString();
  //   diass = diass.padStart(2, 0)
  // }
  // if(horass >= 72 && horass < 96){
  //   horass = horass - 72;
  //   horass = horass.padStart(2, 0)
  //   diass = parseInt(diass, 10);
  //   diass = diass + 3;
  //   diass = diass.toString();
  //   diass = diass.padStart(2, 0)
  // }
  // if(horass >= 96 && horass < 120){
  //   horass = horass - 96;
  //   diass = parseInt(diass, 10);
  //   diass = diass + 4;
  //   diass = diass.toString();
  //   diass = diass.padStart(2, 0)
  // }
  if (mess > 12 && mess <= 24) {
    anios = anios + 1;
    mess = mess - 12;
    mess = mess.toString();
    mess = mess.padStart(2, 0)
  } else if (mess > 24 && mess <= 36) {
    anios = anios + 2;
    mess = mess - 24;
    mess = mess.toString();
    mess = mess.padStart(2, 0)
  } else if (mess > 36 && mess <= 48) {
    anios = anios + 3;
    mess = mess - 36;
    mess = mess.toString();
    mess = mess.padStart(2, 0)
  } else {
    anios = anios;
  }
  var strDatess = anios + "-" + (mess + "-" + diass + " " + horass + ":" + minutoss + ":" + segundoss);

  var esVisible = $("#tiempo2").is(":visible");
  // console.log(esVisible);

  if (esVisible == true) {

    document.getElementById("tiempo3").value = tiempo;
    document.getElementById("fechafin2").value = strDatess;

  }

  console.log(strDatess);
}

$('#tiempo2').change(function () {
  contadorFechas();
});
$('#fechainicio2').change(function () {
  contadorFechas();
});

$(".menu-icon").hover(
  function () {
    $(".menu-icon span").addClass('colorfixhover');


  },
  function () {
    $(".menu-icon span").removeClass('colorfixhover');

  }
);

let fechas = ['0'];
let maximos1 = ['0'];
let maximos2 = ['0'];
let contadorPxP = ['0'];
var fecha = '-';
var contadorPjs = 0;
var contadorSegundos = 0;
let xfecha = 0;

var contadorProyectosJs = 0;
let vecPasos = [0];

function abc(datos, maxfecha, contadorProyectos, contPasosxProyecto, contPasos) {
  contadorProyectosJs = contadorProyectos;

  //console.log(datos, maxfecha, contPasosxProyecto);
  fechas[contadorPjs] = datos;
  contadorPxP[contadorPjs] = contPasosxProyecto;
  // console.log('->' + fechas, '->' + maxfecha, contadorPxP);
  var auxDetPaso = contadorPxP[0];
  vecPasos[0] = parseInt(auxDetPaso);
  $('.cuenta-regresiva9999').countdown('2050-12-31 23:59:59', function (event) {
    // $('#dias9999').html(event.strftime('%D'));
    // $('#horas9999').html(event.strftime('%H'));
    // $('#minutos9999').html(event.strftime('%M'));
    // $('#segundos9999').html(event.strftime('%S'));
    // // $('.cuenta-regresiva9999').addClass('coloryellow');
    // // $('.cuenta-regresiva9999').removeClass('colorgreen');
    // if ((event.strftime('%S') == 00) && (event.strftime('%D') == 00) && (event.strftime('%H') == 00) && (event.strftime('%M') == 00)) {
    //   // $('.cuenta-regresiva9999').removeClass('coloryellow');
    //   // $('.cuenta-regresiva9999').addClass('colorgreen');
    // }
    // console.log(contadorSegundos+'-'+contPasos);
    drenado(fechas, contadorPxP, contadorProyectos, contPasosxProyecto, contPasos, auxDetPaso, vecPasos, contadorSegundos);
    contadorSegundos++;
    auxicontadorseg++;
    contadornotificaciones = auxicontadorseg / 1;

    // console.log(contadornotificaciones);
    if (contadornotificaciones >= 1) {
      
      auxicontadorseg = 0;

    }
    // consultaNotificaciones();
//  console.log(contadorinnotifi);
    // console.log(contadorSegundos);





    var d = new Date();


    var meses = $('#seleccion').attr('value');


    meses = parseInt(meses);
    // console.log(meses);

    var año = d.getFullYear();
    var mes = d.getMonth() + 1;
    mes = mes.toString();
    mes = mes.padStart(2, 0)
    var mes2 = d.getMonth() + meses;
    mes2 = mes2.toString();
    mes2 = mes2.padStart(2, 0)
    var dia = d.getDate();
    dia = dia.toString();
    dia = dia.padStart(2, 0)
    var hora = d.getHours();
    hora = hora.toString();
    hora = hora.padStart(2, 0)
    var minuto = d.getMinutes();
    minuto = minuto.toString();
    minuto = minuto.padStart(2, 0)
    var segundo = d.getSeconds();
    segundo = segundo.toString();
    segundo = segundo.padStart(2, 0)


    var strDate = año + "-" + (mes + "-" + dia + " " + hora + ":" + minuto + ":" + segundo);
    if (mes2 > 12 && mes2 <= 24) {
      año1 = año + 1;
      mes2 = mes2 - 12;
      mes2 = mes2.toString();
      mes2 = mes2.padStart(2, 0)
    } else if (mes2 > 24 && mes2 <= 36) {
      año1 = año + 2;
      mes2 = mes2 - 24;
      mes2 = mes2.toString();
      mes2 = mes2.padStart(2, 0)
    } else if (mes2 > 36 && mes2 <= 48) {
      año1 = año + 3;
      mes2 = mes2 - 36;
      mes2 = mes2.toString();
      mes2 = mes2.padStart(2, 0)
    } else {
      año1 = año;
    }
    var strDate2 = año1 + "-" + (mes2 + "-" + dia + " " + hora + ":" + minuto + ":" + segundo);

    // console.log(strDate2);

    var preciobasico = $('#preciobasico').attr('value');
    var precionegocio = $('#precionegocio').attr('value');
    var precioprofesional = $('#precioprofesional').attr('value');
    var seleccion = $('#paquete').attr('value');
    if (seleccion == 'Paquete Básico') {
      document.getElementById("precio").value = preciobasico;
      document.getElementById("precioshow").value = '$' + preciobasico;
    }
    if (seleccion == 'Paquete Negocio') {
      document.getElementById("precio").value = precionegocio;
      document.getElementById("precioshow").value = '$' + precionegocio;
    }
    if (seleccion == 'Paquete Profesional') {
      document.getElementById("precio").value = precioprofesional;
      document.getElementById("precioshow").value = '$' + precioprofesional;
    }
    var fechaBDExt = $('#fechainicio1').attr('value');
    var mesespago = $('#seleccion1').attr('value');
    mesespago = parseInt(mesespago);


    var fechaBD = new Date(fechaBDExt);
    var anioBD = fechaBD.getFullYear();
    var mesBD = fechaBD.getMonth() + mesespago;
    mesBD = mesBD.toString();
    mesBD = mesBD.padStart(2, 0);
    var diaBD = fechaBD.getDate();
    diaBD = diaBD.toString();
    diaBD = diaBD.padStart(2, 0)
    var horaBD = fechaBD.getHours();
    horaBD = horaBD.toString();
    horaBD = horaBD.padStart(2, 0)
    var minutoBD = fechaBD.getMinutes();
    minutoBD = minutoBD.toString();
    minutoBD = minutoBD.padStart(2, 0)
    var segundoBD = fechaBD.getSeconds();
    segundoBD = segundoBD.toString();
    segundoBD = segundoBD.padStart(2, 0)


    if (mesBD > 12 && mesBD <= 24) {
      anioBD = anioBD + 1;
      mesBD = mesBD - 12;
      mesBD = mesBD.toString();
      mesBD = mesBD.padStart(2, 0)
    } else if (mesBD > 24 && mesBD <= 36) {
      anioBD = anioBD + 2;
      mesBD = mesBD - 24;
      mesBD = mesBD.toString();
      mesBD = mesBD.padStart(2, 0)
    } else if (mesBD > 36 && mesBD <= 48) {
      anioBD = anioBD + 3;
      mesBD = mesBD - 36;
      mesBD = mesBD.toString();
      mesBD = mesBD.padStart(2, 0)
    } else {
      anioBD = anioBD;
    }
    var strDate3 = anioBD + "-" + (mesBD + "-" + diaBD + " " + horaBD + ":" + minutoBD + ":" + segundoBD);
    if (pathname == '/administradorProy.php') {
      if ($("fechainicio")) {
        var esVisiblea = $("#fechainicio").is(":visible");
        if (esVisiblea == true) {
          document.getElementById("fechainicio").value = strDate;
        }

      }
      if ($("fechafin")) {
        var esVisiblea = $("#fechafin").is(":visible");
        if (esVisiblea == true) {
          document.getElementById("fechafin").value = strDate2;
        }


      }
      var esVisible = $("#fechafin1").is(":visible");
      // console.log(esVisible);

      if (esVisible == true) {
        document.getElementById("fechafin1").value = strDate3;

      }
    }


    var preciobasico1 = $('#preciobasico1').attr('value');
    // console.log(preciobasico1);
    var precionegocio1 = $('#precionegocio1').attr('value');
    var precioprofesional1 = $('#precioprofesional1').attr('value');
    if (mesespago == 2) {
      preciobasico1 = preciobasico1 * 1;
      precionegocio1 = precionegocio1 * 1;
      precioprofesional1 = precioprofesional1 * 1;
    }
    if (mesespago == 3) {
      preciobasico1 = preciobasico1 * 2;
      precionegocio1 = precionegocio1 * 2;
      precioprofesional1 = precioprofesional1 * 2;
    }
    if (mesespago == 4) {
      preciobasico1 = preciobasico1 * 3;
      precionegocio1 = precionegocio1 * 3;
      precioprofesional1 = precioprofesional1 * 3;
    }
    if (mesespago == 5) {
      preciobasico1 = preciobasico1 * 4;
      precionegocio1 = precionegocio1 * 4;
      precioprofesional1 = precioprofesional1 * 4;
    }
    if (mesespago == 6) {
      preciobasico1 = preciobasico1 * 5;
      precionegocio1 = precionegocio1 * 5;
      precioprofesional1 = precioprofesional1 * 5;
    }
    if (mesespago == 7) {
      preciobasico1 = preciobasico1 * 6;
      precionegocio1 = precionegocio1 * 6;
      precioprofesional1 = precioprofesional1 * 6;
    }
    if (mesespago == 8) {
      preciobasico1 = preciobasico1 * 7;
      precionegocio1 = precionegocio1 * 7;
      precioprofesional1 = precioprofesional1 * 7;
    }
    if (mesespago == 9) {
      preciobasico1 = preciobasico1 * 8;
      precionegocio1 = precionegocio1 * 8;
      precioprofesional1 = precioprofesional1 * 8;
    }
    if (mesespago == 10) {
      preciobasico1 = preciobasico1 * 9;
      precionegocio1 = precionegocio1 * 9;
      precioprofesional1 = precioprofesional1 * 9;
    }
    if (mesespago == 11) {
      preciobasico1 = preciobasico1 * 10;
      precionegocio1 = precionegocio1 * 10;
      precioprofesional1 = precioprofesional1 * 10;
    }
    if (mesespago == 12) {
      preciobasico1 = preciobasico1 * 11;
      precionegocio1 = precionegocio1 * 11;
      precioprofesional1 = precioprofesional1 * 11;
    }
    if (mesespago == 13) {
      preciobasico1 = preciobasico1 * 12;
      precionegocio1 = precionegocio1 * 12;
      precioprofesional1 = precioprofesional1 * 12;
    }
    var esVisible = $("#precioshow").is(":visible");
    // console.log(esVisible);

    if (esVisible == true) {
      var preciomes = $('#precioshow').attr('value');
      var hosting = $('#hosting').attr('value');
      var dominio = $('#dominio').attr('value');
      var mantenimiento = $('#mantenimiento').attr('value');
      var basededatos = $('#basededato').attr('value');
      
    preciomes=parseInt(preciomes, 10);
    hosting=parseInt(hosting, 10);
    dominio=parseInt(dominio, 10);
    mantenimiento=parseInt(mantenimiento, 10);
    basededatos=parseInt(basededatos, 10);
    console.log(preciomes);
    
    var mesescont = meses - 1;
    console.log(mesescont);
    // (mesescont * preciomes);
    var programacionprecio = preciomes-(hosting+dominio+mantenimiento+basededatos);
    var total =  (hosting+dominio+mantenimiento+basededatos+programacionprecio); 
    total = total+(total*0.16);
    document.getElementById("precio").value = total;
    document.getElementById("programacion").value = programacionprecio;

    }
    var esVisible2 = $("#precioshow1").is(":visible");
    if (esVisible2 == true) {
      
      var precioshow1 = $('#precioshow1').attr('value');
      precioshow1 = parseInt(precioshow1);
      precioshow1 = precioshow1*(mesespago-1);
      console.log(mesespago);
      document.getElementById("precio1").value = precioshow1;

    }
    
    
    
    
  });



  // consulta de bases de datos para notificaciones


  // end consulta de BD PARA Notificaciones




  // var contador = 0;
  // var auxcontador = contadorPxP[0];

  // // if (contadorPjs == (contPasos-1)) {
  // //   console.log('hola->' + contadorProyectosJs);
  // //   drenado(fechas, contadorPxP, contadorProyectos, contPasosxProyecto, contPasos);
  // // }

  // console.log(contadorPjs);
  contadorPjs++;


}


var subnotificacion = [''];
var notificacion = [subnotificacion];

var subrespuestanotificacion = [''];
var respuestanotificacion = [subrespuestanotificacion];

function consultaNotificaciones() {

  // llamado de ajax
  // crear objeto
  //  console.log(dato);
  const xhr = new XMLHttpRequest();
  // abrir conexion
  xhr.open('POST', 'includes/modelos/consultanotificaciones.php', true);
  // pasar datos

  xhr.onload = function () {

    if (this.status === 200) {
      const respuesta = JSON.parse(xhr.responseText);
// console.log(respuesta[0][0].estado);
      for (let x = 0; x < respuesta.length; x++) {
        for (let u = 0; u < respuesta[x].length; u++) {

          subrespuestanotificacion[u] = respuesta[x][u].estado;
          respuestanotificacion[x] = subrespuestanotificacion;
         
          
          
          // console.log(respuestanotificacion[x][u], notificacion[x][u]);
          
          subnotificacion[u] =  respuesta[x][u].estado;
          notificacion[x] = subnotificacion;
          

          // if(notificacion[u] == respuestanotificacion[u]){
          //   console.log('yes');
          // }else{
          //   console.log('********no*******');
          // }
          
          
            
          
          
         
        }
      }

      //     respuestanotificacion[u] = '' + respuesta[u];

      //     console.log(respuestanotificacion[u] + ' /' + notificacion[u]);
      //   //  console.log(respuesta[u]);
          // if (contadorinnotifi >= 3) {
          //   if (notificacion[u] == respuestanotificacion[u]) {
          //     console.log('si');
          //   } else {
          //     swal({
          //       content: "",
          //       text: 'El usuario: x'+' A pagado su factura',
          //       icon: "success",
          //       button: {
          //         text: "Continuar",
          //         closeModal: true,
          //       },
          //     });
              
          //   }
          // }
          // notificacion[u] = respuestanotificacion[u];

          // if (respuestanotificacion[u] == notificacion[u]) {
          //  console.log('si');
          // } else {
          //   console.log('no');
          // }


          // if(notificacion[u] == respuestanotificacion[u]){
          //   console.log ('==');
          // }else{
          //   console.log('dif');
          // }
          // if(u >= 1){
          //   notificacion[u] = respuestanotificacion[u];
          // }else{
          //   notificacion[0][0] = x;
          // }
          // console.log ('-notificacion: '+notificacion[u] , ' -respuestanotificacion: '+respuestanotificacion[u]);






      //   }
      // }

      // respuestanotificacion = respuesta.estado;
      // console.log(respuestanotificacion+ '/' + notificacion);
      // console.log(respuesta.length);
      // if(notificacion != respuestanotificacion){
      //   console.log('siii');
      // }else{
      //   console.log('noo');
      // }
      // notificacion = respuestanotificacion;

      // console.log('->'+respuesta);
      if (respuesta.estado == 'pago agregado') {
        swal({
            content: "",
            text: 'Nuevo pago Agregado',
            icon: "success",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'cuenta.php#angel-ruiz';
            }
          });
      }
    }
  }
  // enviar datos
  xhr.send();
  contadorinnotifi++;
}

function drenado(fechas, contadorPxP, contadorProyectos, contPasosxProyecto, contPasos, auxDetPaso, vecPasos, contadorSegundos) {
  //  console.log(fechas, contadorPxP, contadorProyectos, contPasosxProyecto, contPasos, vecPasos);
  var sumaPasos = auxDetPaso;
  var yaux = 0;
  var superVecFechas = [0]
  var vectIntS = [0];
  var cont = 0;
  var contadoraux = 0;
  for (let x = 0; x < contadorProyectos; x++) {
    contadoraux = 0;
    if (yaux == 0) {
      // console.log((contadorPxP[x]));
      yaux = 0;
    }

    if (yaux !== 0) {
      // console.log((yaux - contadorPxP[vecPasos[x - 1]]) + 1);
      // console.log(contadorPxP[vecPasos[x - 1]]);
      yaux = (yaux - contadorPxP[vecPasos[x - 1]]) + 1;
      // console.log(yaux);
    }
    vectIntS = [0];
    for (let y = yaux; y < vecPasos[x]; y++) {
      //console.log(contadoraux+'-');
      vectIntS[contadoraux] = fechas[y];
      // console.log(vectIntS);
      // console.log(fechas[y] + y);
      superVecFechas[x] = vectIntS;
      // console.log(superVecFechas);
      // console.log((vecPasos[x] - 1));
      // console.log(fechas[y]);

      if (y == (vecPasos[x] - 1)) {
        auxDetPaso = contadorPxP[y + 1];
        // console.log((vecPasos[x]-1));

        var intauxDetPaso = parseInt(auxDetPaso, 10);
        sumaPasos = (intauxDetPaso + vecPasos[x]);
        yaux = sumaPasos - 1;
        vecPasos[(x + 1)] = sumaPasos;

      }
      contadoraux++
    }
    if (x == (contadorProyectos - 1)) {
      // console.log(superVecFechas);
      pasosTime(superVecFechas, contadorSegundos);
    }
  }
}

let todosS = ['0'];

let todosM = ['0'];
let todosH = ['0'];
let todosD = ['0'];
let Seg = ['0'];
let Min = ['0'];
let Hor = ['0'];
let Dia = ['0']
var s = 0;
var auxs = '';

function pasosTime(superVecFechas) {
  if (contadorSegundos >= 1) {
    // console.log(superVecFechas);
    // console.log(superVecFechas.length);
    // console.log('hola');
    let superVecFechasAux = superVecFechas;
    Seg = ['00'];
    Min = ['00'];
    Hor = ['00'];
    Dia = ['00'];
    for (let x = 0; x < superVecFechas.length; x++) {
      todosS = ['00'];
      todosM = ['00'];
      todosH = ['00'];
      todosD = ['00'];

      for (let y = 0; y < superVecFechasAux[x].length; y++) {

        //  console.log(x + '-' + y + '->' + superVecFechas[x][y]);
        xfecha = '' + superVecFechas[x][y];
        //  console.log(xfecha);
        if (xfecha !== '') {
          // console.log(y);
        }
        var cuentasreg = ('.cuenta-regresiva' + x + '-' + y);
        var iddias = ('#dias' + x + '-' + y);
        var idhoras = ('#horas' + x + '-' + y);
        var idminutos = ('#minutos' + x + '-' + y);
        var idsegundos = ('#segundos' + x + '-' + y);
        //  console.log(cuentasreg,iddias,idhoras,idminutos,idsegundos);
        // console.log('xxxx'+x+y+'-'+xfecha);
        $(cuentasreg).countdown(xfecha, function (event) {





          s = event.strftime('%S');
          todosS[y] = s;

          m = event.strftime('%M');
          todosM[y] = m;
          h = event.strftime('%H');
          todosH[y] = h;
          d = event.strftime('%D');
          todosD[y] = d;
          // console.log(todosS);


          // $(cuentasreg).addClass('coloryellow');
          // $(cuentasreg).removeClass('colorgreen');

          // if ((event.strftime('%S') == 00) && (event.strftime('%D') == 00) && (event.strftime('%H') == 00) && (event.strftime('%M') == 00)) {
          //   $(cuentasreg).removeClass('coloryellow');
          //   $(cuentasreg).addClass('colorgreen');
          // }
        });

      }
      Seg[x] = todosS;
      Min[x] = todosM;
      Hor[x] = todosH;
      Dia[x] = todosD;
      // console.log(Seg);
    }

    faxS(Seg);
    faxM(Min);
    faxH(Hor);
    faxD(Dia);
  }
}

function faxS(Seg) {
  var posvecSeg = 0;
  var auxSeg = 0;
  // console.log(Seg);
  for (let s = 0; s < Seg.length; s++) {
    for (let s1 = 0; s1 < Seg[s].length; s1++) {
      var cuentasreg = ('.cuenta-regresiva' + s + '-' + s1);
      var prueb = ('.cuenta-regresiva' + s + '-' + s1 + ' ' + '.clearfix .lix:nth-child(-n+9)');
      // console.log(prueb);
      var idsegundosS = ('#segundos' + s + '-' + s1);
      $(idsegundosS).text(Seg[s][s1]);
      // console.log(s +'-' + s1+ Seg[s][s1]);
      if (Seg[s][s1] == undefined) {
        Seg[s][s1] = '00';
      }
      if (auxSeg == (Seg[s][s1])) {
        auxSeg = (Seg[s][s1]);


        // console.log('si');
        $(prueb).removeClass('coloryellow');

        $(cuentasreg).addClass('colorgreen');
      } else {

        // console.log('no');
        $(prueb).addClass('coloryellow');

        $(cuentasreg).removeClass('colorgreen');
      }
    }
  }
}

function faxM(Min) {

  var auxSeg = 0;
  // console.log(Min);
  for (let s = 0; s < Min.length; s++) {
    for (let s1 = 0; s1 < Min[s].length; s1++) {
      var cuentasreg = ('.cuenta-regresiva' + s + '-' + s1);
      var prueb = ('.cuenta-regresiva' + s + '-' + s1 + ' ' + '.clearfix .lix:nth-child(-n+9)');
      var idsegundosS = ('#minutos' + s + '-' + s1);
      $(idsegundosS).text(Min[s][s1]);
      // console.log(auxSeg+'-'+Min[s][s1]);
      if (Min[s][s1] == undefined) {
        Min[s][s1] = '00';
      }
      if (auxSeg == (Min[s][s1])) {
        auxSeg = (Min[s][s1]);

      } else {
        $(prueb).addClass('coloryellow');

        $(cuentasreg).removeClass('colorgreen');

      }
    }
  }
}

function faxH(Hor) {
  var auxSeg = 0;
  // console.log(Hor);
  for (let s = 0; s < Hor.length; s++) {
    for (let s1 = 0; s1 < Hor[s].length; s1++) {
      var cuentasreg = ('.cuenta-regresiva' + s + '-' + s1);
      var prueb = ('.cuenta-regresiva' + s + '-' + s1 + ' ' + '.clearfix .lix:nth-child(-n+9)');
      var idsegundosS = ('#horas' + s + '-' + s1);
      $(idsegundosS).text(Hor[s][s1]);
      if (Hor[s][s1] == undefined) {
        Hor[s][s1] = '00';
      }
      if (auxSeg == (Hor[s][s1])) {
        auxSeg = (Hor[s][s1]);

      } else {
        $(prueb).addClass('coloryellow');

        $(cuentasreg).removeClass('colorgreen');

      }
    }
  }
}

function faxD(Dia) {
  var auxSeg = 0;
  //console.log(Dia);
  for (let s = 0; s < Dia.length; s++) {
    for (let s1 = 0; s1 < Dia[s].length; s1++) {
      var cuentasreg = ('.cuenta-regresiva' + s + '-' + s1);
      var prueb = ('.cuenta-regresiva' + s + '-' + s1 + ' ' + '.clearfix .lix:nth-child(-n+9)');
      var idsegundosS = ('#dias' + s + '-' + s1);
      $(idsegundosS).text(Dia[s][s1]);
      if (Dia[s][s1] == undefined) {
        Dia[s][s1] = '00';
      }
      if (auxSeg == (Dia[s][s1])) {
        auxSeg = (Dia[s][s1]);

      } else {
        $(prueb).addClass('coloryellow');

        $(cuentasreg).removeClass('colorgreen');

      }
    }
  }
}




// checks
function cheksxs(datos) {

}
var i = 0;
$("#plus0").hover(
  function () {
    i = 0;
    ches(i);


  },
  function () {
    i = '';

  }
);
$("#plus1").hover(
  function () {
    i = 1;
    ches(i);



  },
  function () {
    i = '';

  }
);
$("#plus2").hover(
  function () {
    i = 2;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus3").hover(
  function () {
    i = 3;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus4").hover(
  function () {
    i = 4;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus5").hover(
  function () {
    i = 5;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus6").hover(
  function () {
    i = 6;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus7").hover(
  function () {
    i = 7;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus8").hover(
  function () {
    i = 8;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus9").hover(
  function () {
    i = 9;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus2000").hover(
  function () {
    i = 2000;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus2001").hover(
  function () {
    i = 2001;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus2002").hover(
  function () {
    i = 2002;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus2003").hover(
  function () {
    i = 2003;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus2004").hover(
  function () {
    i = 2004;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus2005").hover(
  function () {
    i = 2005;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus2006").hover(
  function () {
    i = 2006;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus2007").hover(
  function () {
    i = 2007;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus2008").hover(
  function () {
    i = 2008;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus2009").hover(
  function () {
    i = 2009;
    ches(i);


  },
  function () {
    i = '';
  }
);

$("#plus1000").hover(
  function () {
    i = 1000;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus1001").hover(
  function () {
    i = 1001;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus1002").hover(
  function () {
    i = 1002;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus1003").hover(
  function () {
    i = 1003;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus1004").hover(
  function () {
    i = 1004;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus1005").hover(
  function () {
    i = 1005;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus1006").hover(
  function () {
    i = 1006;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus1007").hover(
  function () {
    i = 1007;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus1008").hover(
  function () {
    i = 1008;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus1009").hover(
  function () {
    i = 1009;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus3000").hover(
  function () {
    i = 3000;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus3001").hover(
  function () {
    i = 3001;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus3002").hover(
  function () {
    i = 3002;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus3003").hover(
  function () {
    i = 3003;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus3004").hover(
  function () {
    i = 3004;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus3005").hover(
  function () {
    i = 3005;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus3006").hover(
  function () {
    i = 3006;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus3007").hover(
  function () {
    i = 3007;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus3008").hover(
  function () {
    i = 3008;
    ches(i);


  },
  function () {
    i = '';
  }
);
$("#plus3009").hover(
  function () {
    i = 3009;
    ches(i);


  },
  function () {
    i = '';
  }
);
var chesx4000 = new Array();
var chesy4000 = new Array();





  // var plus = "#plus"+(4000+chesx);
  // console.log(plus)
$(".contenedor-especial")
  .mouseover(function () {
    // console.log('hola');
   
  })
  .mouseout(function () {
    // console.log('adios');
  });





function ches(i) {


  var check = '#check' + i;
  var plus = '#plus' + i;
  var neg = '#neg' + i;
  var lista = '#lista' + i;
  // console.log(check);
  $(check).click(function () {
    if ($(this).is(":checked")) {
      $(plus).hide();
      $(neg).show();
      $(lista).show();

    } else {
      $(plus).show();
      $(neg).hide();
      $(lista).hide();
    }
  });
}


// end checks


// hover cuenta perfil


// var file = up("foto1file").files[0];
//                     console.log(file);
$('.progrss').addClass('hidden');
$("#foto1file").change(function () {
  var file = up("foto1file").files[0];
  console.log(file);
  $('.progrss').removeClass('hidden');
  var formdata = new FormData();
  formdata.append("foto1file", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", completeHandler, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", "includes/modelos/upload4.php");
  ajax.onload = function () {
    if (this.status === 200) {
      // console.log(JSON.parse(ajax.responseText));
      const respuesta = JSON.parse(ajax.responseText);
      // console.log('->->' + respuesta.estado);
      if (respuesta.estado === 'uploadsuccess') {
        $('.progrss').addClass('hidden');
        swal({
          content: "",
          text: 'Ha cambiado su foto de perfil',
          icon: "success",
          button: {
            text: "Continuar",
            closeModal: true,
          },
        }).then((value) => {
          switch (value) {
            default:
              location.reload();
          }
        });
        setTimeout(() => {
          location.reload();
        }, 2200);
      }
      if (respuesta.estado === 'fotoformatoerror') {
        swal({
          content: "",
          text: 'El archivo seleccionado no es una foto. ¡Por favor selecciona otro archivo e intentalo de nuevo!',
          icon: "info",
          button: {
            text: "Continuar",
            closeModal: true,
          },
        })
      }


    }
  }
  ajax.send(formdata);
});
$(".contenedor-perfil .imagen").hover(
  function () {
    $('.edit-fotox').addClass('edit-foto');
    $(".foto .edit-foto i").click(function () {
      $("input[type='file']").trigger('click');


    });
  },
  function () {
    $('.edit-fotox').removeClass('edit-foto');
  }
);

function progressHandler(event) {
  up("loaded_n_total").innerHTML = "Subiendo Foto " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  if (percent == 100) {
    up("progressBar").value = Math.round(percent);
    up("status").innerHTML = "Espere unos segundos más!";
  } else {
    up("progressBar").value = Math.round(percent);
    up("status").innerHTML = Math.round(percent) + "% Subiendo foto";
  }

}

function completeHandler(event) {
  up("status").innerHTML = event.target.responseText;
  up("progressBar").value = 0;
}

function errorHandler(event) {
  up("status").innerHTML = "Upload Failed";
}

function abortHandler(event) {
  up("status").innerHTML = "Upload Aborted";
}

function up(el) {
  return document.getElementById(el);
}

// localStorage.setItem("Numero", 12);
// // localStorage.setItem("token", "");
// // localStorage.setItem("Nombre", "Checo Pérez");
// // localStorage.setItem("Token", )
var elNombre = localStorage.getItem("Nombre");
var elNumero = parseInt(localStorage.getItem("Numero"));
var eltoken = (localStorage.getItem("token"));
// console.log(elNombre + elNumero + '-' + eltoken);
//NUEVO MENSAJE

const formNuevoMensaje = document.querySelector('#agregar-nuevomensaje');
var idboton ='';
var formasunto = '';
var formidmensaje = '';
var formidusuario = '';
var formidea = '';
var formnombreusuario= '';
function obtnermensaje(x){
  var iddelmensaje = '#agregar-nuevomensaje'+x; 
  idboton = '#btnagregarmensaje'+x;
  formasunto = '#asunto'+x;
formidmensaje= '#idmensaje'+x;
formidusuario = '#idusuario'+x
formidea = '#idea'+x;
formnombreusuario = '#nombreusuario'+x;
  console.log(iddelmensaje);
  const formNuevoMensaje = document.querySelector(iddelmensaje);
  if ($(iddelmensaje).length) {
    eventListeners();
  
    function eventListeners() {
      formNuevoMensaje.addEventListener('submit', AgregarNuevoMensaje);
    }
  }
}


function AgregarNuevoMensaje(e) {
  e.preventDefault();
  console.log(idboton);
  const accion = document.querySelector(idboton).value;
  if (accion == 'Enviar Mensaje') {
    const asunto = document.querySelector(formasunto).value;
    const idmensaje = document.querySelector(formidmensaje).value;
    const idusuario = document.querySelector(formidusuario).value;
    const mensaje = document.querySelector(formidea).value;
    const nombreusuario= document.querySelector(formnombreusuario).value;
    
    const mensajenuevo = new FormData();

    mensajenuevo.append('asunto', asunto);
    mensajenuevo.append('idmensaje', idmensaje);
    mensajenuevo.append('idusuario', idusuario);
    mensajenuevo.append('mensaje', mensaje);
    mensajenuevo.append('nombreusuario', nombreusuario);
    mensajenuevo.append('accion', accion);
    if (accion === 'Enviar Mensaje') {
      console.log (accion);
      nuevomensaje(mensajenuevo);
    }
  }
}

function nuevomensaje(dato) {
  // llamado de ajax
  // crear objeto
  //  console.log(dato);
  const xhr = new XMLHttpRequest();
  // abrir conexion
  xhr.open('POST', 'includes/modelos/nuevomensaje.php', true);
  // pasar datos
  xhr.onload = function () {
    if (this.status === 200) {
      const respuesta = JSON.parse(xhr.responseText);
      console.log(respuesta);
      // if (respuesta.estado === 'creandocuenta') {
      //   swal({
      //       content: "",
      //       text: 'Tu idea a sido enviada y tu cuenta registrada.',
      //       icon: "success",
      //       button: {
      //         text: "Continuar",
      //         closeModal: true,
      //       },
      //     })
      //     .then((value) => {
      //       switch (value) {
      //         default:
      //           window.location.href = 'bienvenida.php#angel-ruiz';
      //       }
      //     });

      // }
    }
  }
  xhr.send(dato);
}
// END NUEVO MENSAJE
// AGREGAR IDEA USUARIO MAS REGISTRO
const formIdeaUsuario = document.querySelector('#agregar-registrouser');
if ($("#agregar-registrouser").length) {
  eventListeners();

  function eventListeners() {
    formIdeaUsuario.addEventListener('submit', AgregarIdeaUser);
  }
}
function AgregarIdeaUser(e) {
  e.preventDefault();
  const accion = document.querySelector('#btnagregarideauser').value;
  if (accion == 'Registrarse') {
    const nombre = document.querySelector('#nameuser').value;
    const apellidos = document.querySelector('#apellidos').value;
    const mail = document.querySelector('#mail').value;
    const tel = document.querySelector('#tel').value;
    const select = document.querySelector('#select').value;
    const sector = document.querySelector('#sector').value;
    const idea = document.querySelector('#idea').value;
    
    const infoidea = new FormData();

    infoidea.append('nombre', nombre);
    infoidea.append('apellidos', apellidos);
    infoidea.append('mail', mail);
    infoidea.append('tel', tel);
    infoidea.append('select', select);
    infoidea.append('sector', sector);
    infoidea.append('idea', idea);
    infoidea.append('accion', accion);
    if (accion === 'Registrarse') {
      console.log (accion);
      registroIdeaUser(infoidea);
    }
}
}
function registroIdeaUser(dato) {
  // llamado de ajax
  // crear objeto
  //  console.log(dato);
  const xhr = new XMLHttpRequest();
  // abrir conexion
  xhr.open('POST', 'includes/modelos/agregarusuarioidea.php', true);
  // pasar datos
  xhr.onload = function () {
    if (this.status === 200) {
      const respuesta = JSON.parse(xhr.responseText);
      console.log(respuesta);
      if (respuesta.estado === 'creandocuenta') {
        swal({
            content: "",
            text: 'Tu idea a sido enviada y tu cuenta registrada.',
            icon: "success",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'bienvenida.php#angel-ruiz';
            }
          });

      }
    }
  }
  xhr.send(dato);
}

// END IDEA USUARIO MAS REGISTRO
// agregar paso
const formAgregarPaso = document.querySelector('#agregar-paso');
if ($("#agregar-paso").length) {
  eventListeners();

  function eventListeners() {
    formAgregarPaso.addEventListener('submit', agregarPaso);
  }
}

function agregarPaso(e) {
  e.preventDefault();
  

  const accion = document.querySelector('#btnagregarpaso').value;
  if (accion == 'Agregar Paso') {
    const numpaso = document.querySelector('#num_paso').value;
    const descripcion = document.querySelector('#descripcion').value;
    const fecha = document.querySelector('#fecha').value;
    const horainicio = document.querySelector('#horainicio').value;
    const fechaxfin = document.querySelector('#fechaxfin').value;
    const horainicioxfin = document.querySelector('#horainicioxfin').value;
    const idproyecto = document.querySelector('#idproy').value;






    const infoeliminarpaso = new FormData();

    infoeliminarpaso.append('numpaso', numpaso);
    infoeliminarpaso.append('descripcion', descripcion);
    infoeliminarpaso.append('fecha', fecha);
    infoeliminarpaso.append('horainicio', horainicio);
    infoeliminarpaso.append('fechaxfin', fechaxfin);
    infoeliminarpaso.append('horainicioxfin', horainicioxfin);
    infoeliminarpaso.append('idproyecto', idproyecto);
    infoeliminarpaso.append('accion', accion);
    if (accion === 'Agregar Paso') {

      agregarxPaso(infoeliminarpaso);
    }

  }

}

function agregarxPaso(dato) {
  // llamado de ajax
  // crear objeto
  //  console.log(dato);
  const xhr = new XMLHttpRequest();
  // abrir conexion
  xhr.open('POST', 'includes/modelos/agregarpasos.php', true);
  // pasar datos
  xhr.onload = function () {
    if (this.status === 200) {
      const respuesta = JSON.parse(xhr.responseText);
      console.log(respuesta);
      if (respuesta.estado === 'paso agregado') {
        swal({
            content: "",
            text: 'Paso agregado correctamente',
            icon: "success",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'cuenta.php#angel-ruiz';
            }
          });

      }
    }
  }
  xhr.send(dato);
}

// end agregar paso
// eliminar paso
const formEliminarPaso = document.querySelector('#eliminar-paso');
if ($("#eliminar-paso").length) {
  eventListeners();

  function eventListeners() {
    formEliminarPaso.addEventListener('submit', eliminarPaso);
  }
}

function eliminarPaso(e) {
  e.preventDefault();

  const accion = document.querySelector('#btneliminarpaso').value;
  if (accion == 'Eliminar Paso') {
    swal({
        title: "Estas seguro de eliminar este paso?",
        text: "Si eliminas este paso no podras recuperarlo",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("El paso será eliminado!", {
            icon: "success",
          });
          const idpaso = document.querySelector('#idpago2').value;

          console.log(accion, idpaso);

          const infoeliminarpaso = new FormData();

          infoeliminarpaso.append('idpaso', idpaso);

          infoeliminarpaso.append('accion', accion);
          if (accion === 'Eliminar Paso') {

            eliminarxPaso(infoeliminarpaso);
          }
        } else {
          swal("Decidiste no eliminar este paso");
        }

      });


  }

}

function eliminarxPaso(dato) {
  // llamado de ajax
  // crear objeto
  //  console.log(dato);
  const xhr = new XMLHttpRequest();
  // abrir conexion
  xhr.open('POST', 'includes/modelos/eliminarpasos.php', true);
  // pasar datos
  xhr.onload = function () {
    if (this.status === 200) {
      const respuesta = JSON.parse(xhr.responseText);
      console.log(respuesta);
      if (respuesta.estado === 'se elimino el paso') {
        swal({
            content: "",
            text: 'El paso se elimino',
            icon: "success",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'cuenta.php#angel-ruiz';
            }
          });

      }
    }
  }
  xhr.send(dato);
}

// end eliminar paso
// modifiar/eliminar pago
const formEliminarModificarPaso = document.querySelector('#modificar-paso');
if ($("#modificar-paso").length) {
  eventListeners();

  function eventListeners() {
    formEliminarModificarPaso.addEventListener('submit', eliminarmodificarPaso);
  }
}

function eliminarmodificarPaso(e) {
  e.preventDefault();

  const accion = document.querySelector('#btnmodificarpaso').value;
  if (accion == 'Modificar Paso') {
    const idpaso = document.querySelector('#contrato_pago2').value;
    const n_paso = document.querySelector('#nopaso').value;
    const descripcion = document.querySelector('#descripcion').value;
    const fechainicio = document.querySelector('#fecha').value;
    const horainicio = document.querySelector('#horainicio').value;
    const fechafin = document.querySelector('#fechafin').value;
    const horafin = document.querySelector('#horafin').value;
    console.log(fechainicio, accion);

    const infomodificarpaso = new FormData();

    infomodificarpaso.append('idpaso', idpaso);
    infomodificarpaso.append('n_paso', n_paso);
    infomodificarpaso.append('descripcion', descripcion);
    infomodificarpaso.append('fechainicio', fechainicio);
    infomodificarpaso.append('horainicio', horainicio);
    infomodificarpaso.append('fechafin', fechafin);
    infomodificarpaso.append('horafin', horafin);
    infomodificarpaso.append('accion', accion);
    if (accion === 'Modificar Paso') {

      modificarPaso(infomodificarpaso);
    }

  }

}

function modificarPaso(dato) {
  // llamado de ajax
  // crear objeto
  //  console.log(dato);
  const xhr = new XMLHttpRequest();
  // abrir conexion
  xhr.open('POST', 'includes/modelos/modificar.php', true);
  // pasar datos
  xhr.onload = function () {
    if (this.status === 200) {
      const respuesta = JSON.parse(xhr.responseText);
      console.log(respuesta);
      if (respuesta.estado === 'paso modificado') {
        swal({
            content: "",
            text: 'El paso a sido modificado',
            icon: "success",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'cuenta.php#angel-ruiz';
            }
          });

      }
    }
  }
  xhr.send(dato);
}
// END modificar/eliminar pago

// cuenta FORM
const formCuentaUser = document.querySelector('#cuenta');
if ($("#cuenta").length) {
  eventListeners();

  function eventListeners() {
    formCuentaUser.addEventListener('submit', actualizarCuenta);
  }
}

function actualizarCuenta(e) {
  e.preventDefault();
  const calle = document.querySelector('#calle').value;
  const numie = document.querySelector('#numie').value;
  const colonia = document.querySelector('#colonia').value;
  const cpostal = document.querySelector('#cpostal').value;
  const domiciliof = document.querySelector('#domiciliof').value;
  const cfdi = document.querySelector('#cfdi').value;
  const rfc = document.querySelector('#rfc').value;

  const accion = document.querySelector('#btnactualizar').value;
  // console.log(calle + numie + colonia + cpostal + accion + domiciliof + cfdi + rfc);

  const infoactualuser = new FormData();

  infoactualuser.append('calle', calle);
  infoactualuser.append('numie', numie);
  infoactualuser.append('colonia', colonia);
  infoactualuser.append('cpostal', cpostal);
  infoactualuser.append('domiciliof', domiciliof);
  infoactualuser.append('cfdi', cfdi);
  infoactualuser.append('rfc', rfc);
  infoactualuser.append('accion', accion);

  if (accion === 'Actualizar') {
    // console.log('jjey');
    actualizarUserUserDB(infoactualuser);
  }
}

function actualizarUserUserDB(dato) {
  // llamado de ajax
  // crear objeto
  //  console.log(dato);
  const xhr = new XMLHttpRequest();
  // abrir conexion
  xhr.open('POST', 'includes/modelos/actualizaruseruser.php', true);
  // pasar datos
  xhr.onload = function () {
    if (this.status === 200) {
      const respuesta = JSON.parse(xhr.responseText);
      // console.log(respuesta);
      if (respuesta.estado === 'hubo cambios') {
        swal({
            content: "",
            text: 'Datos Actualizados',
            icon: "success",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'cuenta.php#perfil';
            }
          });

      }
      if (respuesta.estado === 'no hubo cambios') {
        swal({
            content: "",
            text: 'No has actualizado ningun dato',
            icon: "info",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'cuenta.php#cuenta';
            }
          });

      }
    }
  }
  xhr.send(dato);
}
//end cuenta
const formLoginUser = document.querySelector('#login');
if ($("#login").length) {
  eventListeners();

  function eventListeners() {
    formLoginUser.addEventListener('submit', leerLogin);
  }
}

function leerLogin(e) {
  e.preventDefault();
  const mail = document.querySelector('#correo').value;
  const pass = document.querySelector('#pass').value;
  console.log(mail, pass)
  validarString(mail);
  if (caracteresCorreoValido(mail) === false) {
    swal({
      content: "",
      text: 'El correo es inválido',
      icon: "error",
      button: {
        text: "Continuar",
        closeModal: true,
      },
    });
  }
  const accion = document.querySelector('#btnlogin').value;
  const accionrep = quitarAcentos(accion);
  let cadena = mail;
  // esta es la palabra a buscar
  let termino = ["@gmail.com", "@hotmail.com", "@outlook.com"];
  let x1 = 0;
  for (let x = 0; x <= 2; x++) {

    let find = termino[x]
    // para buscar la palabra hacemos
    let posicion = cadena.indexOf(find);


    if (posicion !== -1) {
      console.log(x + "->La palabra está en la posición " + posicion);
      $('#correo').css({
        'background': '#ffffff'
      });
      x = 3;

    } else {
      console.log('-z' + x);
      if (x == 2) {

        swal({
          content: "",
          text: '¡Por favor! Usa una cuenta correo válida como @hotmail.com, @gmail.com, @outlook.com',
          icon: "error",
          button: {
            text: "Continuar",
            closeModal: true,
          },
        });
      }

    }


  }

  if (mail === '') {
    $('#correo').css({
      'background': 'red'
    });
    swal({
      content: "",
      text: 'Hay campos vacíos.',
      icon: "error",
      button: {
        text: "Continuar",
        closeModal: true,
      },
    });
  }
  if (pass === '') {
    $('#pass').css({
      'background': 'red'
    });
    swal({
      content: "",
      text: 'Hay campos vacíos.',
      icon: "error",
      button: {
        text: "Continuar",
        closeModal: true,
      },
    });
  } else {
    $('#pass').css({
      'background': '#ffffff'
    });
  }

  if (mail != '') {
    const ifouser = new FormData();

    ifouser.append('correo', mail);
    ifouser.append('pass', pass);
    ifouser.append('accion', accionrep);
    if (accion === 'Iniciar Sesión') {
      consultaBD(ifouser);
    }
  }


}

function consultaBD(dato) {
  // llamado de ajax
  // crear objeto

  const xhr = new XMLHttpRequest();
  // abrir conexion
  xhr.open('POST', 'includes/modelos/jsonlogin.php', true);
  // pasar datos
  xhr.onload = function () {
    if (this.status === 200) {
      const respuesta = JSON.parse(xhr.responseText);
      console.log(respuesta);
      if (respuesta.Estado === 'Incorrecto') {
        swal({
          content: "",
          text: 'Los datos son incorrectos.¡Por favor Verificalos!',
          icon: "error",
          button: {
            text: "Continuar",
            closeModal: true,
          },
        });
      }
      if (respuesta.Estado === 'Correcto') {
        swal({
            content: "",
            text: '¡Bienvenido ' + respuesta.Usuario + '!',
            icon: "success",
            buttons: {
              defeat: "¡Continuar!",
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'cuenta.php#angel-ruiz';
            }
          });
        setTimeout(() => {
          window.location.href = 'cuenta.php#angel-ruiz';
        }, 3200);
      }
    }
  }
  // enviar datos
  xhr.send(dato);
}
$('#telefono').numeric();
$('#postal').numeric();
$('#numiedirec').numeric();

// Agregar Pago
const formAgregarPago = document.querySelector('#agregar-pago');
if ($("#agregar-pago").length) {
  eventListeners();

  function eventListeners() {
    formAgregarPago.addEventListener('submit', leerAgregarPago);

  }
}

function leerAgregarPago(e) {
  e.preventDefault();
  const accion = document.querySelector('#btnagregarpago').value;
  if (accion == 'Agregar Pago') {

    const select = document.querySelector('#seleccion1').value;

    const fechainicio = document.querySelector('#fechainicio1').value;
    const fechafin = document.querySelector('#fechafin1').value;
    const paquete = document.querySelector('#paquete1').value;
    const precio = document.querySelector('#precio1').value;
    const contratoid = document.querySelector('#contratoid').value;
    const tokencontrato = document.querySelector('#tokencontrato').value;

    const idproyecto = document.querySelector('#idproyecto1').value;

    const infoagregarPago = new FormData();
    infoagregarPago.append('accion', accion);
    infoagregarPago.append('select', select);
    infoagregarPago.append('fechainicio', fechainicio);
    infoagregarPago.append('fechafin', fechafin);
    infoagregarPago.append('paquete', paquete);
    infoagregarPago.append('precio', precio);
    infoagregarPago.append('contratoid', contratoid);
    infoagregarPago.append('tokencontrato', tokencontrato);
    infoagregarPago.append('idproyecto', idproyecto);

    // console.log(tokencontrato);
    agregarPago(infoagregarPago);
  }
}

function agregarPago(dato) {
  // llamado de ajax
  // crear objeto
  //  console.log(dato);
  const xhr = new XMLHttpRequest();
  // abrir conexion
  xhr.open('POST', 'includes/modelos/jsonagregarpago.php', true);
  // pasar datos

  xhr.onload = function () {

    if (this.status === 200) {
      const respuesta = JSON.parse(xhr.responseText);
      console.log(respuesta);
      if (respuesta.estado == 'pago agregado') {
        swal({
            content: "",
            text: 'Nuevo pago Agregado',
            icon: "success",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'cuenta.php#angel-ruiz';
            }
          });
      }
    }
  }
  // enviar datos
  xhr.send(dato);
}

// END Agregar Pago
// agregar contrato
const formAgregarContrato = document.querySelector('#agregar-contrato');
if ($("#agregar-contrato").length) {
  eventListeners();

  function eventListeners() {
    formAgregarContrato.addEventListener('submit', leerAgregarContrato);

  }
}

function leerAgregarContrato(e) {
  e.preventDefault();
  const accion = document.querySelector('#btnagregarcontrato').value;
  if (accion == 'Agregar Contrato') {
    const select = document.querySelector('#seleccion').value;
    const fechainicio = document.querySelector('#fechainicio').value;
    const fechafin = document.querySelector('#fechafin').value;
    
    const precio = document.querySelector('#precio').value;
    const idproyecto = document.querySelector('#idproyecto').value;
    const hosting = document.querySelector('#hosting').value;
    const dominio = document.querySelector('#dominio').value;
    const mantenimiento = document.querySelector('#mantenimiento').value;
    const basededato = document.querySelector('#basededato').value;
    const programacion = document.querySelector('#programacion').value;

    const infoagregarcontrato = new FormData();
    infoagregarcontrato.append('accion', accion);
    infoagregarcontrato.append('select', select);
    infoagregarcontrato.append('fechainicio', fechainicio);
    infoagregarcontrato.append('fechafin', fechafin);
    // infoagregarcontrato.append('paquete', paquete);
    infoagregarcontrato.append('precio', precio);
    infoagregarcontrato.append('idproyecto', idproyecto);
    infoagregarcontrato.append('hosting', hosting);
    infoagregarcontrato.append('dominio', dominio);
    infoagregarcontrato.append('mantenimiento', mantenimiento);
    infoagregarcontrato.append('basededato', basededato);
    infoagregarcontrato.append('programacion', programacion);
    // infoagregarcontrato.append('paquetebasico', paquetebasico);
    // infoagregarcontrato.append('paquetenegocio', paquetenegocio);
    // infoagregarcontrato.append('paqueteprofesional', paqueteprofesional);


    // console.log(accion, select + 'Meses', fechainicio, fechafin);
    agregarContrato(infoagregarcontrato);
  }
}

function agregarContrato(dato) {
  // llamado de ajax
  // crear objeto
  //  console.log(dato);
  const xhr = new XMLHttpRequest();
  // abrir conexion
  xhr.open('POST', 'includes/modelos/jsonagregarcontrato.php', true);
  // pasar datos

  xhr.onload = function () {

    if (this.status === 200) {
      const respuesta = JSON.parse(xhr.responseText);
      console.log(respuesta);
      if (respuesta.estado == 'contrato nuevo agregado') {
        swal({
            content: "",
            text: 'Nuevo contrato agragado',
            icon: "success",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'cuenta.php#angel-ruiz';
            }
          });
      }
    }
  }
  // enviar datos
  xhr.send(dato);
}

// END Agregar Contraros
const formRegistroUser = document.querySelector('#registro');
if ($("#registro").length) {
  eventListeners();

  function eventListeners() {
    formRegistroUser.addEventListener('submit', leerRegistro);

  }
}

function leerRegistro(e) {
  e.preventDefault();
  const accion = document.querySelector('#btnregcuenta1').value;

  if (accion == 'Registrar') {

    const nombre = document.querySelector('#nombre').value;
    const apellido = document.querySelector('#apellido').value;
    const telefono = document.querySelector('#telefono').value;
    const correo = document.querySelector('#correo').value;
    const calle = document.querySelector('#calle').value;
    const numiedirec = document.querySelector('#numiedirec').value;
    const col = document.querySelector('#col').value;
    const postal = document.querySelector('#postal').value;
    const paquete = document.querySelector('#paquete').value;
    const fecha = document.querySelector('#fecha').value;
    const precio = document.querySelector('#precio').value;
    console.log(precio);

    console.log(nombre, apellido, telefono, correo, calle, numiedirec, col, postal, paquete, fecha);
    let condicionvalid = 0;
    let condicionvalid1 = 0;
    if (nombre === '') {
      $('#nombre').css({
        'background': 'red'
      });
      swal({
        content: "",
        text: 'Es obligatorio ingresar su Nombre',
        icon: "info",
        button: {
          text: "Continuar",
          closeModal: true,
        },
      });
    } else {
      $('#nombre').css({
        'background': '#93A9CC'
      });
      if (apellido === '') {
        $('#apellido').css({
          'background': 'red'
        });
        swal({
          content: "",
          text: 'Es obligatorio ingresar sus Apellidos',
          icon: "info",
          button: {
            text: "Continuar",
            closeModal: true,
          },
        });
      } else {
        $('#apellido').css({
          'background': '#93A9CC'
        });
        if (telefono === '') {
          $('#telefono').css({
            'background': 'red'
          });
          swal({
            content: "",
            text: 'Es obligatorio ingresar un Número telefónico o de WhatsApp',
            icon: "info",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          });
        } else {
          $('#telefono').css({
            'background': '#93A9CC'
          });
          if (correo === '') {
            $('#correo').css({
              'background': 'red'
            });
            swal({
              content: "",
              text: 'Es obligatorio ingresar un Correo Electrónico',
              icon: "info",
              button: {
                text: "Continuar",
                closeModal: true,
              },
            });
          } else {
            $('#correo').css({
              'background': '#93A9CC'
            });
            if (calle === '') {
              $('#calle').css({
                'background': 'red'
              });
              swal({
                content: "",
                text: 'Es obligatorio ingresar la Calle de su domicilio',
                icon: "info",
                button: {
                  text: "Continuar",
                  closeModal: true,
                },
              });
            } else {
              $('#calle').css({
                'background': '#93A9CC'
              });
              if (numiedirec === '') {
                $('#numiedirec').css({
                  'background': 'red'
                });
                swal({
                  content: "",
                  text: 'Es obligatorio ingresar el Número de su domicilio',
                  icon: "info",
                  button: {
                    text: "Continuar",
                    closeModal: true,
                  },
                });
              } else {
                $('#numiedirec').css({
                  'background': '#93A9CC'
                });
                if (col === '') {
                  $('#col').css({
                    'background': 'red'
                  });
                  swal({
                    content: "",
                    text: 'Es obligatorio ingresar la Colonia de su domicilio',
                    icon: "info",
                    button: {
                      text: "Continuar",
                      closeModal: true,
                    },
                  });
                } else {
                  $('#col').css({
                    'background': '#93A9CC'
                  });
                  if (postal === '') {
                    $('#postal').css({
                      'background': 'red'
                    });
                    swal({
                      content: "",
                      text: 'Es obligatorio ingresar el Código postal de su domicilio',
                      icon: "info",
                      button: {
                        text: "Continuar",
                        closeModal: true,
                      },
                    });
                  } else {
                    $('#postal').css({
                      'background': '#93A9CC'
                    });
                    if (paquete === '') {
                      $('#paquete').css({
                        'background': 'red'
                      });
                      swal({
                        content: "",
                        text: 'Es obligatorio ingresar el Paquete de servicio deseado',
                        icon: "info",
                        button: {
                          text: "Continuar",
                          closeModal: true,
                        },
                      });
                    } else {
                      $('#paquete').css({
                        'background': '#93A9CC'
                      });
                      if (fecha === '') {
                        $('#fecha').css({
                          'background': 'red'
                        });
                        swal({
                          content: "",
                          text: 'La Fecha estará disponible automáticamente',
                          icon: "info",
                          button: {
                            text: "Continuar",
                            closeModal: true,
                          },
                        });
                      } else {
                        $('#fecha').css({
                          'background': '#93A9CC'
                        });
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    validarString(correo);
    if (caracteresCorreoValido(correo) === false) {
      $('#correo').css({
        'background-color': 'red'
      });
      swal({
        content: "",
        text: 'El correo es inválido, debido a que tiene acentos. ¡Intenta con otro por favor!',
        icon: "error",
        button: {
          text: "Continuar",
          closeModal: true,
        },
      });

    } else {
      condicionvalid1 = 1;
    }
    let cadena = correo;
    // esta es la palabra a buscar
    let termino = ["@gmail.com", "@hotmail.com", "@outlook.com"];
    let x1 = 0;
    for (let x = 0; x <= 2; x++) {

      let find = termino[x]
      // para buscar la palabra hacemos
      let posicion = cadena.indexOf(find);


      if (posicion !== -1) {
        // console.log(x + "->La palabra está en la posición " + posicion);
        condicionvalid = 1;
        x = 3;

      } else {
        // console.log('-z' + x);
        if (x == 2) {
          $('#correo').css({
            'background-color': 'red'
          });
          swal({
            content: "",
            text: '¡Por favor! Usa una cuenta correo válida como @hotmail.com, @gmail.com, @outlook.com',
            icon: "error",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          });
        }

      }
    }
    if (condicionvalid == 1 && condicionvalid1 == 1 && correo != '' && nombre != '' && apellido != '' && telefono != '' && calle != '' && numiedirec != '' && col != '' && postal != '' && paquete != '') {

      const ifouserreg = new FormData();

      ifouserreg.append('nombre', nombre);
      ifouserreg.append('apellido', apellido);
      ifouserreg.append('telefono', telefono);
      ifouserreg.append('correo', correo);
      ifouserreg.append('calle', calle);
      ifouserreg.append('numiedirec', numiedirec);
      ifouserreg.append('col', col);
      ifouserreg.append('postal', postal);
      ifouserreg.append('paquete', paquete);
      ifouserreg.append('fecha', fecha);
      ifouserreg.append('precio', precio);
      ifouserreg.append('accion', accion);

      if (accion === 'Registrar') {
        registroDB(ifouserreg);
      }
    }
  }
  if (accion == 'Nuevo Proyecto') {


    const precio = document.querySelector('#precio').value;
    const telefono = document.querySelector('#telefono').value;
    const correo = document.querySelector('#correo').value;
    const paquete = document.querySelector('#paquete').value;
    const fecha = document.querySelector('#fecha').value;

    console.log(paquete, fecha);
    let condicionvalid = 0;
    let condicionvalid1 = 0;

    if (correo === '') {
      $('#correo').css({
        'background': 'red'
      });
      swal({
        content: "",
        text: 'Es obligatorio ingresar un Correo Electrónico',
        icon: "info",
        button: {
          text: "Continuar",
          closeModal: true,
        },
      });
    } else {
      $('#correo').css({
        'background': '#93A9CC'
      });
      if (telefono === '') {
        $('#telefono').css({
          'background': 'red'
        });
        swal({
          content: "",
          text: 'Es obligatorio ingresar un Número telefónico o de WhatsApp',
          icon: "info",
          button: {
            text: "Continuar",
            closeModal: true,
          },
        });
      } else {
        $('#telefono').css({
          'background': '#93A9CC'
        });
        if (paquete === '') {
          $('#paquete').css({
            'background': 'red'
          });
          swal({
            content: "",
            text: 'Es obligatorio ingresar el Paquete de servicio deseado',
            icon: "info",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          });
        } else {
          $('#paquete').css({
            'background': '#93A9CC'
          });
          if (fecha === '') {
            $('#fecha').css({
              'background': 'red'
            });
            swal({
              content: "",
              text: 'La Fecha estará disponible automáticamente',
              icon: "info",
              button: {
                text: "Continuar",
                closeModal: true,
              },
            });
          } else {
            $('#fecha').css({
              'background': '#93A9CC'
            });
          }
        }
      }
    }






    validarString(correo);
    if (caracteresCorreoValido(correo) === false) {
      $('#correo').css({
        'background-color': 'red'
      });
      swal({
        content: "",
        text: 'El correo es inválido, debido a que tiene acentos. ¡Intenta con otro por favor!',
        icon: "error",
        button: {
          text: "Continuar",
          closeModal: true,
        },
      });

    } else {
      condicionvalid1 = 1;
    }
    let cadena = correo;
    // esta es la palabra a buscar
    let termino = ["@gmail.com", "@hotmail.com", "@outlook.com"];
    let x1 = 0;
    for (let x = 0; x <= 2; x++) {

      let find = termino[x]
      // para buscar la palabra hacemos
      let posicion = cadena.indexOf(find);


      if (posicion !== -1) {
        // console.log(x + "->La palabra está en la posición " + posicion);
        condicionvalid = 1;
        x = 3;

      } else {
        // console.log('-z' + x);
        if (x == 2) {
          $('#correo').css({
            'background-color': 'red'
          });
          swal({
            content: "",
            text: '¡Por favor! Usa una cuenta correo válida como @hotmail.com, @gmail.com, @outlook.com',
            icon: "error",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          });
        }

      }
    }
    if (condicionvalid == 1 && condicionvalid1 == 1 && correo != '' && telefono != '' && paquete != '' && precio != '') {

      const ifouserreg = new FormData();


      ifouserreg.append('telefono', telefono);
      ifouserreg.append('correo', correo);
      ifouserreg.append('precio', precio);
      ifouserreg.append('paquete', paquete);
      ifouserreg.append('fecha', fecha);
      ifouserreg.append('accion', accion);

      if (accion === 'Nuevo Proyecto') {
        registroDB(ifouserreg);
      }
    }
  }

}

function eliminarDatos(dato) {
  const xhr = new XMLHttpRequest();
  // abrir conexion
  xhr.open('POST', 'includes/modelos/delatedatos.php', true);
  // pasar datos

  xhr.onload = function () {

    if (this.status === 200) {
      const respuesta = JSON.parse(xhr.responseText);
      console.log(respuesta);
      if (respuesta.estado === 'no se puedo crear un proyecto nuevo') {
        swal({
            content: "",
            text: 'Error: bd-x-00000001',
            icon: "error",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'cuenta.php#angel-ruiz';
            }
          });
      }
    }
  }
  xhr.send(dato);
}
var identi0 = 'respuesta.id0';
var identi1 = 'respuesta.id1';
var identi2 = 'respuesta.id2';
var identi3 = 'respuesta.id3';
var respuestaelim = '';

function registroDB(dato) {
  // llamado de ajax
  // crear objeto
  //  console.log(dato);
  const xhr = new XMLHttpRequest();
  // abrir conexion
  xhr.open('POST', 'includes/modelos/jsonregistro.php', true);
  // pasar datos

  xhr.onload = function () {

    if (this.status === 200) {
      const respuesta = JSON.parse(xhr.responseText);
      console.log(respuesta);
      identi0 = respuesta.id0;

      identi3 = respuesta.id3;
      respuestaelim = respuesta.estado;

      if (respuesta.estado === 'error en la creacion del nuevo proyecto') {
        if (identi0 != 0 || identi3 != 0) {
          const idinfo = new FormData();
          idinfo.append('id0', identi0);

          idinfo.append('id3', identi3)
          idinfo.append('accion', 'eliminar');
          eliminarDatos(idinfo);
        }
      }
      if (respuesta.estado === 'nuevo proyecto creado') {
        swal({
            content: "",
            text: 'Nuevo proyecto creado',
            icon: "success",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'cuenta.php#angel-ruiz';
            }
          });
        setTimeout(() => {
          window.location.href = 'cuenta.php#angel-ruiz';
        }, 3200);
      }


      if (respuesta.estado === 'nuevacuentaregistrada') {
        swal({
            content: "",
            text: 'Bienvenido ' + respuesta.variables.nombre,
            icon: "success",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'bienvenida.php#angel-ruiz';
            }
          });
        setTimeout(() => {
          window.location.href = 'bienvenida.php#angel-ruiz';
        }, 3200);
      }

      if (respuesta.estado === 'correoexiste') {
        swal({
            content: "",
            text: 'Esta cuenta ya existe. Por favor inicia sesión',
            icon: "error",
            button: {
              text: "Iniciar de Sesión",
              closeModal: true,
            },
          })
          .then((value) => {
            switch (value) {
              default:
                window.location.href = 'login.php#angel-ruiz';
            }
          });

      }
      if (respuesta.estado === 'errorINSERTARenBD') {
        swal({
          content: "",
          text: 'Ha ocurrido una falla, por favor inténtelo más tarde.',
          icon: "info",
          button: {
            text: "Continuar",
            closeModal: true,
          },
        });
      }
    }




  }
  xhr.send(dato);
}
//Validar tipo Correo
function caracteresCorreoValido(mail) {
  var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
  if (caract.test(mail) === false) {
    return false;
  } else {
    return true;
  }
}
//Quitar acentos
function quitarAcentos(cadena) {
  const acentos = {
    'Ñ': 'N',
    'ñ': 'n',
    'á': 'a',
    'é': 'e',
    'í': 'i',
    'ó': 'o',
    'ú': 'u',
    'Á': 'A',
    'É': 'E',
    'Í': 'I',
    'Ó': 'O',
    'Ú': 'U'
  };
  return cadena.split('').map(letra => acentos[letra] || letra).join('').toString();
}

function validarString(dato) {
  iaux = dato.length;
  for (var i = 0; i < iaux; i++) {
    var caracter = dato.charAt(i);

    var acentos = "áéíóúÁÉÍÓÚ<>´";

    for (var a = 0; a < acentos.length; a++) {

      if (caracter == acentos.charAt(a)) {
        // alert("Caracter no permitido:\n" + acentos.charAt(a) + 
        // "\n Por favor corrija el correo o intente con uno diferente");

        swal({

          content: "",
          text: 'Hay caracteres en tu correo, no válidos\n' + 'El siguiente caracter: " ' + acentos.charAt(a) + ' " No es válido\n Revisa que tu correo sea correcto \n o intenta con otro',
          //icon: "success",
          icon: "error",
          button: {
            text: "Continuar",
            closeModal: true,
          },
        });
        $('.input_grid1 #correo').css({
          'background-color': 'red'
        });
        $('.input_grid1 #correo').css({
          'color': 'black'
        });
      }
    }
  }
}


function mostrarPassword() {
  var cambio = document.getElementById("pass");
  if (cambio.type == "password") {
    cambio.type = "text";
    $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
  } else {
    cambio.type = "password";
    $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
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
    if (element.classList.contains(stringClass)) {
      // console.log('hola');
      $("#imglogo").show();
      $("#imglogo2").hide();
      $("#imglogo2").removeClass('animacionlogo');
      $("#imglogo").addClass('animacionlogo');
      $("#boddu").removeClass('buddu');
      element.classList.remove(stringClass);
      $("#menu-screen").css("z-index", "-1");
    } else {
      $("#menu-screen").css("z-index", "2");
      $("#imglogo").hide();
      $("#imglogo2").show();
      $("#boddu").addClass('buddu');
      $("#imglogo2").addClass('animacionlogo');
      $("#imglogo").removeClass('animacionlogo');
      // console.log('adios');
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

  // console.log(resolucion);
});
$(document).ready(function () {

  resolucion = screen.width;

  // console.log(resolucion);
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
    // console.log(fleep);
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
    // console.log(fleep);
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
    // console.log(fleep);
    if (resolucion <= 1280) {
      $heightDown = $('.imgfondoprincipal').height() + $('#card1-back').height();
      // console.log($heightDown);
      $('html, body').animate({
        scrollTop: $heightDown
      }, 100);
    }
  })
$(".fleep2")
  .mouseleave(function () {
    fleep = '0';
    // console.log(fleep);
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
    // console.log(fleep);
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
    // console.log(fleep);

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
//console.log(pathname);
if (pathname == '/index.php' || pathname == '/') {
  $(document).ready(function () {
    $("body").css("background-color", "#ffffff");
  });
} else if (pathname == '/login.php') {
  $(document).ready(function () {
    $("body").css("background-color", "#ffffff");
  });
} else if (pathname == '/contratar.php') {
  $(document).ready(function () {
    $("body").css("background-color", "#ffffff");
  });
} else {
  $(document).ready(function () {

    $("body").css("background-color", "#161616");

  });
}

if ($('#paquetes').is(':hidden')) {
  // console.log("Esta oculto");
} else {
  // console.log('Visible');
}
// slider
var cambioSliderPal = 0;
function swp() {
  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 0,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: '.swiper-pagination',
    },
    
    autoplay: {
  delay: 2000,
  },
  });
}
swp();
$(document).ready(function () {
 
  var imgItems = $('.slider li').length;
  var imgPos = 1;
  var menu = ['Proyectos', 'Cuenta', 'Pagos']
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

$('.right span').click(function () {
  console.log('hey');
 
  cambioSliderPal = 1;
  
});
$('.left span').click(function () {
  console.log('hey');

  cambioSliderPal = 2;
  
});

// console.log(cambioSliderPal);
if(cambioSliderPal == 0){
  setInterval(function(){
      nextSliderx();
      
  }, 15000);
}

  function paginacion() {
    var paginacionPos = $(this).index();
    paginacionPos = paginacionPos + 1;
    console.log('--'+paginacionPos);
    console.log(cambioSliderPal);

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
  function nextSliderx() {
    
    if(cambioSliderPal == 0){
      nextSlider();
      
      
    }
  }

  function nextSlider() {
    
    if (imgPos >= imgItems) {
      imgPos = 1;
    } else {
      imgPos++;
    }
    
    // console.log(imgPos);
   
    
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
// slider2
$(document).ready(function () {

  var imgItems2 = $('.slider2 li').length;
  
  var menu = [ 'Proyectos', 'Cuenta', 'Pagos', 'Contratos', 'Mensajes'];
  for (i = 0; i < imgItems2; i++) {
    $('.paginacion2').append('<li><h3>' + menu[i] + '</h3></li>');
  }


  $('.slider2 li').hide();
  $('.slider2 li:first').show();
  $('.paginacion2 li:first').css({
    'text-shadow': ' 0px 0px 10px var(--ColorFontEspecial)'
  });

  $('.paginacion2 li').click(paginacion2);
  $('.right2 h3').click(nextSlider2);
  $('.left2 h3').click(prevSlider2);

  // setInterval(function(){
  //     nextSlider();
  // }, 10000);

  function paginacion2() {
    var paginacionPos2 = $(this).index();
    paginacionPos2 = paginacionPos2 + 1;
    // console.log(paginacionPos2);

    $('.slider2 li').hide();
    $('.slider2 li:nth-child(' + paginacionPos2 + ')').fadeIn();

    $('.paginacion2 li').css({
      'text-shadow': '0 0 0px #000000'
    });
    $(this).css({
      'text-shadow': ' 0px 0px 10px var(--ColorFontEspecial)'
    });

    imgPos2 = paginacionPos2;
  }

  function nextSlider2() {
    if (imgPos2 >= imgItems2) {
      imgPos2 = 1;
    } else {
      imgPos2++;
    }

    console.log(imgPos2);
    $('.slider2 li').hide();
    $('.slider2 li:nth-child(' + imgPos2 + ')').fadeIn();

    $('.paginacion2 li').css({
      'text-shadow': '0 0 0px #000000'
    });
    $('.paginacion2 li:nth-child(' + imgPos2 + ')').css({
      'text-shadow': ' 0px 0px 10px var(--ColorFontEspecial)'
    });
    

  }

  function prevSlider2() {
    if (imgPos2 <= 1) {
      imgPos2 = imgItems2;
    } else {
      imgPos2--;
    }
    console.log(imgPos2);
    $('.slider2 li').hide();
    $('.slider2 li:nth-child(' + imgPos2 + ')').fadeIn();

    $('.paginacion2 li').css({
      'text-shadow': '0 0 0px #000000'
    });
    $('.paginacion2 li:nth-child(' + imgPos2 + ')').css({
      'text-shadow': ' 0px 0px 10px var(--ColorFontEspecial)'
    });

  }
});
//end slider2
// slider3
$(document).ready(function () {
  

  var imgItems3 = $('.slider3 li').length;
  var imgPos3 = 1;
  var menu = ['', 'Proyecto', 'Pagos', 'Contratos', 'Mensajes'];
  for (i = 1; i <= imgItems3; i++) {
    $('.paginacion3').append('<li><h3>' + menu[i] + '</h3></li>');
  }


  $('.slider3 li').hide();
  $('.slider3 li:first').show();
  $('.paginacion2 li:first').css({
    'text-shadow': ' 0px 0px 10px var(--ColorFontEspecial)'
  });

  $('.paginacion3 li').click(paginacion3);
  $('.right3 h3').click(nextSlider3);
  $('.left3 h3').click(prevSlider3);

  // setInterval(function(){
  //     nextSlider();
  // }, 10000);

  function paginacion3() {
    var paginacionPos3 = $(this).index();
    paginacionPos3 = paginacionPos3 + 1;
    // console.log(paginacionPos3);

    $('.slider3 li').hide();
    $('.slider3 li:nth-child(' + paginacionPos3 + ')').fadeIn();

    $('.paginacion3 li').css({
      'text-shadow': '0 0 0px #000000'
    });
    $(this).css({
      'text-shadow': ' 0px 0px 10px var(--ColorFontEspecial)'
    });

    imgPos3 = paginacionPos3;
  }

  function nextSlider3() {
    if (imgPos3 >= imgItems3) {
      imgPos3 = 1;
    } else {
      imgPos3++;
    }

    console.log(imgPos3);
    $('.slider3 li').hide();
    $('.slider3 li:nth-child(' + imgPos3 + ')').fadeIn();

    $('.paginacion3 li').css({
      'text-shadow': '0 0 0px #000000'
    });
    $('.paginacion3 li:nth-child(' + imgPos3 + ')').css({
      'text-shadow': ' 0px 0px 10px var(--ColorFontEspecial)'
    });

  }

  function prevSlider3() {
    if (imgPos3 <= 1) {
      imgPos3 = imgItems3;
    } else {
      imgPos3--;
    }
    console.log(imgPos3);
    $('.slider3 li').hide();
    $('.slider3 li:nth-child(' + imgPos3 + ')').fadeIn();

    $('.paginacion3 li').css({
      'text-shadow': '0 0 0px #000000'
    });
    $('.paginacion3 li:nth-child(' + imgPos3 + ')').css({
      'text-shadow': ' 0px 0px 10px var(--ColorFontEspecial)'
    });

  }
});
//slider3 end

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
$("#subcall").hide();
$('#subcall').removeClass('showanimcion');

$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#check-hotcall").click(function () {
  if ($(this).is(":checked")) {
    $("#flechaup").hide();
    $("#flechadown").show();
    $("#subcall").show();
   
    $('#subcall').addClass('showanimcion');
  
    
  } else {
    $("#flechaup").show();
    $("#flechadown").hide();
    $("#subcall").hide();
    $('#subcall').removeClass('showanimcion');

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
// console.log(numLetters);

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

// console.log('abc is ' + x.length + ' code units long');
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
      $("#subcall").hide();
      $('#subcall').removeClass('showanimcion');
      $("#check-hotcall").prop("checked", false);
      $("#flechaup").show();
      $("#flechadown").hide();
      // console.log('hey'+operacion);
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
    // console.log('hola');
    var contchecks = 0;
    for (let checkss = 0; checkss <= 100; checkss++) {
      var inps = '#inps' + (4000 + checkss);
      var serie = (4000 + checkss);
      var inputchects = $(inps).attr('id');
      if (inps === ('#' + inputchects)) {

        // console.log(inps + '-' + inputchects);
        chesy4000[contchecks] = inps;
        chesx4000[contchecks] = serie;
        contchecks++;
      }
    }
    // console.log(chesx4000);
    for (let x = 0; x < chesx4000.length; x++) {
      var plus = '#plus' + chesx4000[x];
      //  console.log('aqui'+chesx4000[x]);
      $(plus).hover(
        function () {

          // console.log(chesx4000[x]);
          i = chesx4000[x];
          ches(i);


        },
        function () {
          i = '';
        }
      );

    }


  } else {
    $('.barramenu').removeClass('fix-menubarra');
    $('.menu-barra').removeClass('menu-barraextra');
    $("#subcall").hide();
    $('#subcall').removeClass('showanimcion');
    $("#check-hotcall").prop("checked", false);
    $("#flechaup").show();
    $("#flechadown").hide();




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

// contador pasos