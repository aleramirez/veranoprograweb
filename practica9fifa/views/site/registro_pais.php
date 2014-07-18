<?php 
  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Pais.php');
  include ('../../controllers/PaisController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 

  if (isset($_POST['nombre'])) {
    $paisC= new PaisController();
    $paisC->insertaPais($_POST,$_FILES);
  }
?>

    <div class="row">
      <div class="col-md-10">
        <h4>Registro Pais</h4>
        <form id="formregistro" method="POST" class="form-horizontal" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="nombre" />
            </div>
          </div>

          <div class="form-group">
              <label class="col-lg-3 control-label" for="idcontinente">Id_continente</label>
              <div class="col-lg-5">
                  <input type="text" class="form-control" name="idcontinente" id="idcontinente" />
              </div>
          </div>
            <div class="form-group">
              <label class="col-lg-3 control-label" for="bandera">Bandera</label>
              <div class="col-lg-4">
                  <input type="file" class="form-control" name="bandera" id="bandera"/>
            </div>
          </div>
        <input type="submit" name="Guardar" value="Guardar" />
        </form>  


    </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>