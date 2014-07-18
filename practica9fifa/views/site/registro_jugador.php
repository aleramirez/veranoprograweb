<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Jugador.php');
  include ('../../controllers/jugadorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  
  if (isset($_POST['numero'])) {
    $jugadorC = new JugadorController();
    $jugadorC->insertaJugador($_POST);
  }
?>

    <div class="row">
      <div class="col-md-10">
        <h4>Registro Jugador</h4>
        <form id="formregistro" method="POST" class="form-horizontal">
          <div class="form-group">
            <label class="col-lg-3 control-label" for="numero">N&uacute;mero:</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="numero" />
            </div>
          </div>

          <div class="form-group">
              <label class="col-lg-3 control-label" for="idintegrante">Id Integrante:</label>
              <div class="col-lg-5">
                  <input type="text" class="form-control" name="idintegrante" id="idintegrante" />
              </div>
          </div>
            <div class="form-group">
              <label class="col-lg-3 control-label" for="idposicion">Posici&oacute;n:</label>
              <div class="col-lg-4">
                  <input type="file" class="form-control" name="idposicion" id="idposicion"/>
            </div>
          </div>
        <input type="submit" name="Guardar" value="Guardar" />
        </form>  


    </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>