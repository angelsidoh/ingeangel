// $(".contenedor-perfil .imagen").hover(
//     function () {
//       $('.edit-fotox').addClass('edit-foto');
//       $(".foto .edit-foto i").click(function () {


//           $("input[type='file']").trigger('click');

// console.log('hola');

//       });
//     },
//     function () {
//       $('.edit-fotox').removeClass('edit-foto');
//     }
//   );

var focusx = 0,
  blur = 0;
$(".contenedor-perfil .imagen").hover(function () {
          $('.edit-fotox').addClass('edit-foto');
    $(".foto .edit-foto i").on("click", function() {
      if(focusx == 0){
        console.log('->'+focusx);
        window.location.href = "upfoto.php";
         }
       focusx++
         
      });
  
      },
    function () {
      $('.edit-fotox').removeClass('edit-foto');
    }
  );

  
const formulario = document.getElementById('upload_form')
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file2").files[0];
	//alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file2", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler1, false);
	ajax.addEventListener("load", completeHandler1, false);
	ajax.addEventListener("error", errorHandler1, false);
	ajax.addEventListener("abort", abortHandler1, false);
	ajax.open("POST", "upload8.php");
	ajax.onload = function(){
		if(this.status === 200){
			console.log(JSON.parse(ajax.responseText));
			const respuesta = JSON.parse(ajax.responseText);
			if (respuesta === '1'){
				mostrarNotificacion('Fotos Subidas Correctamente', 'correcto');
				setTimeout(() => {
					window.location.href = 'data.php';
				 }, 3000);
					
		}
	}
}
	ajax.send(formdata);
}

function progressHandler1(event){
	_("loaded_n_total").innerHTML = "Subiendo Foto "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar1").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% Subiendo tu Foto... ¡Espera hasta que el proceso termine!";
}
function completeHandler1(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar1").value = 0;
}
function errorHandler1(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler1(event){
	_("status").innerHTML = "Upload Aborted";
}