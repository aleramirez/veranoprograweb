<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Equipo.php');
  include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 


  $equipoC = new EquipoController();
  if (isset($_POST['nombre'])) {
    $equipoC->insertaEquipo($_POST,$_FILES);
  }
?>

    <div class="row">
      <div class="col-md-10">
        <h4>Registro Equipo</h4>

        
        <!-- bloque para convertirla en funcion -->
        <?php
          if($equipoC->muestra_errores){
        ?> 

          <div class="alert alert-danger">

            <?php
              foreach ($equipoC->errores as $value) {
                  echo "<p>$value</p>";
                }  
            ?>

          </div>

        <?php
          } 
        ?>

        
        <form id="formregistro" method="POST" class="form-horizontal" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $equipoC->get_nombre(); ?>"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="idpais">Id_pais</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="idpais" id="idpais" value="<?php echo $equipoC->get_idpais(); ?>"/>
            </div>
          </div>

          <div class="form-group">
              <label class="col-lg-3 control-label" for="escudo">escudo</label>
              <div class="col-lg-4">
                  <input type="file" class="form-control" name="escudo" id="escudo" value="<?php echo $equipoC->get_escudo(); ?>"/>
              </div>
          </div>
          <input type="submit" name="Guardar" value="Guardar" />
        </form>

      </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>