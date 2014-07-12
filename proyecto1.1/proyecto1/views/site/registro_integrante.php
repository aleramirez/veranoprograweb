<?php include ('../layouts/header.php'); ?>
 
      <div class="row">

        <div class="col-md-4" id="col1">
          <h2>Registro Integrante</h2>
          
            <!-- <a class="btn btn-default" href="#" role="button">Formulario Equipo</a> -->
            <br />
            <form id="formreg" method="post" class="form-horizontal">


              <div class="form-group">
                  <label for="nombre">Nombre del Integrante:</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Enter nombre">
              </div>

              <div class="form-group">
                  <label for="apellido">Apellidos del Integrante:</label>
                  <input type="text" class="form-control" id="apellido" placeholder="Enter apellidos">
              </div>

              <div class="form-group">
                  <label for="Edad">Edad del Integrante:</label>
                  <input type="text" class="form-control" id="Edad" placeholder="Enter edad">
              </div>

              <div class="form-group">
                  <label for="peso">Peso del Integrante:</label>
                  <input type="text" class="form-control" id="peso" placeholder="Enter peso">
              </div>

              <div class="form-group">
                  <label for="estatura">Estatura del Integrante:</label>
                  <input type="text" class="form-control" id="estatura" placeholder="Enter estatura">
              </div>

              <div class="form-group">
                  <label for="foto">Foto del Integrante:</label>
                  <input type="file" class="form-control" id="foto" placeholder="Enter foto">
              </div>

              <div class="form-group">
                  <label for="id_equipo">Equipo:</label>
                  <select class="form-control">
                        <option>Elige uno:</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                  </select>
              </div>


              <button type="button" class="btn btn-primary">Validar</button>

          </form>

        </div>

      </div>


<?php include ('../layouts/footer.php'); ?>

            