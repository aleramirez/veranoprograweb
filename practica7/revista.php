<html lang="en">
	
	<head>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Formulario registro status</title>

	    <!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-datetimepicker.css" />

	</head>
	
	<body>
		
		<form id="formrevista" method="post" class="form-horizontal">
    			
    			<div class="form-group">
			        <label class="col-lg-3 control-label">Nombre:</label>
			        
                        <input type="text" class="form-horizontal" name="nombre" />
    			</div>

    			<div class="form-group">
			        <label class="col-lg-3 control-label">Portada:</label>
			        
                        <input type="text" class="form-horizontal" name="portada" />
    			</div>

    			<div class="form-group">
			        <label class="col-lg-3 control-label">Fecha:</label>
			        
                        <input type="text" class="form-horizontal" name="fecha" />
    			</div>

    			<div class="form-group">
			        <label class="col-lg-3 control-label">Volumen:</label>
			        
                        <input type="text" class="form-horizontal" name="volumen" />
    			</div>

    			<div class="form-group">
			        <label class="col-lg-3 control-label">T&iacute;tulo:</label>
			        
                        <input type="text" class="form-horizontal" name="titulo" />
    			</div>

    			<div class="form-group">
			        <label class="col-lg-3 control-label">Subtitulo:</label>
			        
                        <input type="text" class="form-horizontal" name="subtitulo" />
    			</div>

    			<div class="form-group">
			        <label class="col-lg-3 control-label">N&uacute;mero:</label>
			        
                        <input type="text" class="form-horizontal" name="numero" />
    			</div>

    			<div class="form-group">
			        <label class="col-lg-3 control-label">Clave:</label>
			        
                        <input type="text" class="form-horizontal" name="clave" />
    			</div>

    			<div class="form-group">
			        <label class="col-lg-3 control-label">Directorio:</label>
			        
                        <textarea type="text" class="form-horizontal" name="directorio" />
    			</div>

    			<div class="form-group">
			        <label class="col-lg-3 control-label">Editorial:</label>
			        
                        <textarea type="text" class="form-horizontal" name="editorial" />
    			</div>

    			<div class="form-group">
			        <label class="col-lg-3 control-label">Id Status:</label>      
                      <input type="text" class="form-horizontal" name="id_status" />
    			</div>

		</form>



		<!-- Include Raty JS file -->
		<script src="js/jquery.raty.min.js"></script>
		
		<script>

		$(document).ready(function() {
			$('#formrevista').bootstrapValidator({
				 excluded: [':disabled'],
                  feedbackIcons: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                  },

                fields: {
		                nombre: {
		                    validators: {
		                        notEmpty: {
		                            message: 'El nombre es requerido'
		                        }
		                    }
		                }

		                portada: {
		                    validators: {
		                        notEmpty: {
		                            message: 'La portada es requerida'
		                        }
		                    }
		                }

		                fecha: {
		                    validators: {
		                        notEmpty: {
		                            message: 'La fecha es requerida'
		                        }
		                    }
		                }

		                volumen: {
		                    validators: {
		                        notEmpty: {
		                            message: 'el volumen  es requerido'
		                        }
		                    }
		                }

		                titulo: {
		                    validators: {
		                        notEmpty: {
		                            message: 'El titulo es requerido'
		                        }
		                    }
		                }

		                subtitulo: {
		                    validators: {
		                        notEmpty: {
		                            message: 'El subtitulo es requerido'
		                        }
		                    }
		                }

		                numero: {
		                    validators: {
		                        notEmpty: {
		                            message: 'El numero es requerido'
		                        }
		                    }
		                }

		                clave: {
		                    validators: {
		                        notEmpty: {
		                            message: 'La clave es requerida'
		                        }
		                    }
		                }


		    };
			})
		       
		});
		   
		</script>

		<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	
	</body>

</html>