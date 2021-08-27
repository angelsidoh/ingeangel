<div class="promocion-container">
    <div class="cont"><div class= "countdown" id="countdown">
    

    </div></div>
    
    <!-- <div class="title-promocion">
        <h3>3 MESES<br>¡GRATIS!</h3>
       
    </div>
    <div class="description-promocion">
        <p>Requisitos</p>
        <p>1. Tener una cuenta en WingsDevs</p>
        <p>2. Tener un proyecto y contrato activos de al menos 1 año</p>
        <p>3. No tener otra promoción activa</p>
        <p>Preguntas</p>
        <p>1. ¿Puedo tener una promocion en cada uno de mis proyectos?</p>
        <p>R1. Si, se puede tener una promoción por proyecto y contrato</p>
    </div> -->
    <div class="botonpromo">
    <a  class="button" href="registro#abcdef">
                 PROMOCIÓN NUEVA
                </a>
    </div>
  
</div>

    
<script>
var end = new Date('08/31/2021 11:59 PM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'LA OFERTA HA EXPIRADO!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);
        function paddy(num, padlen, padchar) {
            var pad_char = typeof padchar !== 'undefined' ? padchar : '0';
            var pad = new Array(1 + padlen).join(pad_char);
            return (pad + num).slice(-pad.length);
        }
        hours = paddy(hours, 2);
        minutes = paddy(minutes, 2);
        seconds = paddy(seconds, 2);
        if (days != 1) {
            document.getElementById('countdown').innerHTML = days + ' días '; 
        }else{
            document.getElementById('countdown').innerHTML = days + ' día ';
        }
       
        document.getElementById('countdown').innerHTML += hours + ':';
        document.getElementById('countdown').innerHTML += minutes + ':';
        document.getElementById('countdown').innerHTML += seconds + '';
    }

    timer = setInterval(showRemaining, 1000);
</script>