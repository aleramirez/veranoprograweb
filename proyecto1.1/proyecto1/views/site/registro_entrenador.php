<?php 

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Entrenador.php');
  include ('../../controllers/EntrenadorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  
  if (isset($_POST['idpais'])) {
    $entrenadorC = new EntrenadorController();
    $entrenadorC->insertaEntrenador($_POST);
  }
?>


    <div class="row">
      <div class="col-md-10">
        <h4>Registro Entrenador:</h4>
        <form id="formregistro" method="POST" class="form-horizontal">

          <div class="form-group">
           <div class="form-group">
            <label class="col-lg-3 control-label" for="idpais">Id Pa&iacute;s</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="idpais" id="idpais" />
            </div>
          </div>
          </div>

         
           
        <input type="submit" name="Guardar" value="Guardar" />
        </form>  


    </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>