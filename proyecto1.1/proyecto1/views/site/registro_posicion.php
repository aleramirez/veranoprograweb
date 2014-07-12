 <?php include ('../layouts/header.php'); ?>
 
      <div class="row">

        <div class="col-md-4" id="col1">
          <h2>RegistroPosici&oacute;n</h2>
            
            <!-- <a class="btn btn-default" href="#" role="button">Formulario Equipo</a> -->
            <br />
                <form id="formreg" method="post" class="form-horizontal">
                  
                  <div class="form-group">
                      <label for="nombre">Nombre:</label>
                      <input type="text" class="form-control" id="nombre" placeholder="Enter nombre">
                  </div>

                  <div class="form-group">
                      <label for="abreviatura">Abreviatura:</label>
                      <input type="text" class="form-control" id="abreviatura" placeholder="Enter nombre">
                  </div>


                  <button type="button" class="btn btn-primary">Validar</button>



                </form>

        <!--  </div>

       </div> -->

<?php include ('../layouts/footer.php'); ?>