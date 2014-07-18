<?php 

include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Estadio.php');
  include ('../../controllers/EstadioController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  
  if (isset($_POST['Nombre'])) {
    $estadioC = new EstadioController();
    $estadioC->insertaEstadio($_POST);
  }
?>
    <div class="row">
      <div class="col-md-10">
        <h4>Registro Estadio</h4>
        <form id="formregistro" method="POST" class="form-horizontal">
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="nombre" id="nombre"/>
            </div>
          </div>

         
        <input type="submit" name="Guardar" value="Guardar" />
        </form>  

     </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>