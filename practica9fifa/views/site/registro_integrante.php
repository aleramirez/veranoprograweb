<?php 

include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Integrante.php');
  include ('../../controllers/IntegranteController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  
  if (isset($_POST['nombre'])) {
    $integranteC = new IntegranteController();
    $integranteC->insertaIntegrante($_POST,$_FILES);
  }

  
?>

    <div class="row">
      <div class="col-md-10">
        <h4>Registro Integrante</h4>
        <form id="formregistro" method="POST" class="form-horizontal" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="nombre" id="nombre"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label"for="apellido">Apellido</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="apellido" id="apellido"/>
            </div>
          </div>

          <div class="form-group">
              <label class="col-lg-3 control-label" for="peso">Peso</label>
              <div class="col-lg-5">
                  <input type="text" class="form-control" name="peso" id="peso" />
              </div>
          </div>

          <div class="form-group">
              <label class="col-lg-3 control-label" for="estatura">Estatura</label>
              <div class="col-lg-5">
                  <input type="text" class="form-control" name="estatura" id="estatura" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-lg-3 control-label" for="foto">Foto</label>
              <div class="col-lg-4">
                  <input type="file" class="form-control" name="foto" id="foto"/>
              </div>
          </div>
          <div class="form-group">
              <label class="col-lg-3 control-label" for="Edad">Edad</label>
              <div class="col-lg-5">
                  <input type="text" class="form-control" name="Edad" id="Edad" />
              </div>
          </div>

           <div class="form-group">
           <label class="col-lg-3 control-label" for="idequipo">Identificador de Equipo:</label>
            <div class="col-lg-3">
              <select class="form-control">
                  <option>Elige uno:</option>             
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
            </div>
        </div>          
          <input type="submit" name="Guardar" value="Guardar" />
        </form>  

      </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>