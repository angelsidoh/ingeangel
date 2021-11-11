<?php
include_once('includes/templates/header.php');
session_start();

?>
<link rel="stylesheet" href="css/signature-pad.css?v=<?php echo time(); ?>">
<div class="firma">
<div onselectstart="return false">
  <!-- <a id="github" style="position: absolute; top: 0; right: 0; border: 0" href="https://github.com/szimek/signature_pad">
    <img src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub">
  </a> -->

  <div id="signature-pad" class="signature-pad">
    <div class="signature-pad--body">
      <canvas></canvas>
    </div>
    <div class="signature-pad--footer">
      <div class="description">FIRMA DE SU CONTRATO</div>

      <div class="signature-pad--actions">
        <div>
          <a type="button" class="button clear" data-action="clear">Eliminar toda la firma</a>
          <a type="button" class="button" data-action="change-color">Color de Lápiz</a>
          <a type="button" class="button" data-action="undo">Eliminar el último trazo</a>

        </div>
        <div>
         <?php 
         if($_SESSION['tipo'] == 'Usuario'){
         ?>
          <a type="button" class="button save" data-action="save-png">Guardar Firma</a>
          <a style= "display: none;"type="button" class="button save" data-action="save-jpg">Guardar JPG</a>
          <a style= "display: none;"type="button" class="button save" data-action="save-svg">Guardar como SVG</a>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
  <div class="img">
  <p style="color: white;">Su firma se guardará con el siguiente formato</p>
  <img src="includes/funciones/doc_sings/83448f3d1163ef9d53631bfd32672a6a.png" alt="83448f3d1163ef9d53631bfd32672a6a.png">
   <!-- <p><a id="github"  href="https://github.com/szimek/signature_pad">
    Esta API pertenece a terceros y es implementado en ingeangel.com como herramienta para firmar.
  </a></p> -->
  </div>
</div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="./js/signature_pad.umd.js"></script>
  <script src="./js/app.js"></script>
  
  <?php
include_once('includes/templates/footer.php');
?>