<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Formulario de Registro</title>

	    <!-- Bootstrap -->
	    <link href="../css/bootstrap.min.css" rel="stylesheet">
	    
	    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
	    <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
	    <link rel="stylesheet" href="../css/style.css">
	    
	    <script src="../js/jquery-1.10.2.min.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  

	</head>
	
	<body>
		<h1>Formulario Registro de Jugador:</h1>
		<div class="container">
      		<div class="row">
        		<div class="col-md-6">

        			<form id="accountForm" method="post" class="form-horizontal">
            

			                    <div class="form-group">
			                        <label class="col-lg-3 control-label">N&uacute;mero:</label>
			                        <div class="col-lg-5">
			                            <input type="text" class="form-control" name="numero" />
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <label class="col-lg-3 control-label">Id_Integrante:</label>
			                        <div class="col-lg-5">
			                            <input type="text" class="form-control" name="idintegrante" />
			                        </div>
			                    </div>

			      

			                    <div class="form-group">
			                        <label class="col-lg-3 control-label">Id_Posici&oacute;n:</label>
			                        <div class="col-lg-5">
			                            <input type="text" class="form-control" name="idposicion" />
			                        </div>
			                    </div>
			          
                    			<div class="form-group">
					                <div class="col-lg-5 col-lg-offset-3">
					                    <button type="submit" class="btn btn-primary">Validar</button>
					                </div>
           						 </div>

                    		

					</form>

				</div>

			</div>

		</div>

		<!-- Include Raty JS file -->
		<script src="../js/jquery.raty.min.js"></script>
		
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker').datetimepicker({
                language: 'es'
            });
        });
    </script>

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker').datetimepicker({
                pickTime:false
            });
        });
    </script>
   

    <script type="text/javascript" src="../js/moment.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>




		<script>

		$(document).ready(function() {
			$('#accountForm').bootstrapValidator({
				 excluded: [':disabled'],
                  feedbackIcons: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                  },

                fields: {
		                

		                fecha: {
		                    validators: {
		                        notEmpty: {
		                            message: 'La fecha es requerida'
		                        }
		                    }
		                },

		                
		                numero: {
		                    validators: {
		                        notEmpty: {
		                            message: 'El numero es requerido'
		                        }
		                    }
		                },

		                idintegrante: {
			                  validators: {
			                      notEmpty: {
			                          message: 'El idintegrante es requerido'
			                      }
			                  }
			              },

			            idposicion: {
			                  validators: {
			                      notEmpty: {
			                          message: 'El idposicion es requerido'
			                      }
			                  }
			              }
		    }
			});
		       
		});
		   
		</script>

		<script src="../js/bootstrap.min.js"></script>
	    <script src="../js/bootstrapValidator.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	
	</body>

</html>