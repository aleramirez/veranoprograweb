<?php include ('../layouts/header.php'); ?>

    <div class="row">
      <div class="col-md-10">
        <h4>Registro Pais</h4>
        <form id="formregistro" method="POST" class="form-horizontal">
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