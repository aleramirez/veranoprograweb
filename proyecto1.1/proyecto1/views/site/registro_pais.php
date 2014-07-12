 <?php include ('../layouts/header.php'); ?>
 
      <div class="row">

        <div class="col-md-4" id="col1">
          <h2>Registro Pa&iacute;s</h2>
            
            <!-- <a class="btn btn-default" href="#" role="button">Formulario Equipo</a> -->
            <br />
                <form id="formreg" method="post" class="form-horizontal">
                  
                  <div class="form-group">
                      <label for="nombre">Nombre:</label>
                      <input type="text" class="form-control" id="nombre" placeholder="Enter nombre">
                  </div>

                  
                   <div class="form-group">
                      <label for="bandera">Bandera:</label>
                      <input type="file" class="form-control" id="bandera" placeholder="Enter escudo">
                  </div>

                  <div class="form-group">
                      <label for="id_continente">Pa&iacute;s:</label>
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