


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

  // console.log(datos, maxfecha, contPasosxProyecto);
  fechas[contadorPjs] = datos;
  contadorPxP[contadorPjs] = contPasosxProyecto;
  // console.log('->' + fechas, '->' + maxfecha, contadorPxP);
  var auxDetPaso = contadorPxP[0];
  vecPasos[0] = parseInt(auxDetPaso);
  $('.cuenta-regresiva9999').countdown(maxfecha, function (event) {
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
    //console.log(contadorSegundos);
  });

  // var contador = 0;
  // var auxcontador = contadorPxP[0];

  // // if (contadorPjs == (contPasos-1)) {
  // //   console.log('hola->' + contadorProyectosJs);
  // //   drenado(fechas, contadorPxP, contadorProyectos, contPasosxProyecto, contPasos);
  // // }

  // console.log(contadorPjs);
  contadorPjs++;


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
      var prueb = ('.cuenta-regresiva' + s + '-' + s1 + ' '+'.clearfix .lix:nth-child(-n+9)');
      // console.log(prueb);
      var idsegundosS = ('#segundos' + s + '-' + s1);
      $(idsegundosS).text(Seg[s][s1]);
      // console.log(s +'-' + s1+ Seg[s][s1]);
      if(Seg[s][s1] == undefined){
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
      var prueb = ('.cuenta-regresiva' + s + '-' + s1 + ' '+'.clearfix .lix:nth-child(-n+9)');
      var idsegundosS = ('#minutos' + s + '-' + s1);
      $(idsegundosS).text(Min[s][s1]);
      // console.log(auxSeg+'-'+Min[s][s1]);
       if(Min[s][s1] == undefined){
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
      var prueb = ('.cuenta-regresiva' + s + '-' + s1 + ' '+'.clearfix .lix:nth-child(-n+9)');
      var idsegundosS = ('#horas' + s + '-' + s1);
      $(idsegundosS).text(Hor[s][s1]);
       if(Hor[s][s1] == undefined){
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
      var prueb = ('.cuenta-regresiva' + s + '-' + s1 + ' '+'.clearfix .lix:nth-child(-n+9)');
      var idsegundosS = ('#dias' + s + '-' + s1);
      $(idsegundosS).text(Dia[s][s1]);
       if(Dia[s][s1] == undefined){
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

function ches(i) {


  var check = '#check' + i;
  var plus = '#plus' + i;
  var neg = '#neg' + i;
  var lista = '#lista' + i;
  console.log(check);
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
$("#foto1file").change(function () {
  var file = up("foto1file").files[0];
  // console.log(file);
  var formdata = new FormData();
  formdata.append("foto1file", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.open("POST", "includes/modelos/upload4.php");
  ajax.onload = function () {
    if (this.status === 200) {
      // console.log(JSON.parse(ajax.responseText));
      const respuesta = JSON.parse(ajax.responseText);
      // console.log('->->' + respuesta.estado);
      if (respuesta.estado === 'uploadsuccess') {
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
  // up("loaded_n_total").innerHTML = "Subiendo Foto " + event.loaded + " bytes of " + event.total;
  // var percent = (event.loaded / event.total) * 100;
  // up("progressBar").value = Math.round(percent);

}

function completeHandler(event) {
  // up("status").innerHTML = event.target.responseText;
  // up("progressBar").value = 0;
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
  console.log(calle+numie+colonia+cpostal+accion+domiciliof+cfdi+rfc);
  
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
    console.log ('jjey');
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
      console.log(respuesta);
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
                window.location.href = 'cuenta.php#angel-ruiz';
            }
          });
        
      }
      if (respuesta.estado === 'no cambios') {
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
                window.location.href = 'cuenta.php#angel-ruiz';
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

const formRegistroUser = document.querySelector('#registro');
if ($("#registro").length) {
  eventListeners();

  function eventListeners() {
    formRegistroUser.addEventListener('submit', leerRegistro);

  }
}

function leerRegistro(e) {
  e.preventDefault();
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
  const accion = document.querySelector('#btnregcuenta1').value;
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
    ifouserreg.append('accion', accion);

    if (accion === 'regcuenta1') {
      registroDB(ifouserreg);
    }
  }

}

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
      element.classList.remove(stringClass);
      $("#menu-screen").css("z-index", "-1");
    } else {
      $("#menu-screen").css("z-index", "2");
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
// console.log(pathname);
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
// slider2
$(document).ready(function () {

  var imgItems2 = $('.slider2 li').length;
  var imgPos2 = 1;
  var menu = ['', 'Proyectos', 'Cuenta', 'Pagos', 'Contratos'];
  for (i = 1; i <= imgItems2; i++) {
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
    console.log(paginacionPos2);

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

// contador pasos