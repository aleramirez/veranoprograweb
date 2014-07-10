<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Formulario Revistas</title>

	    <!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    
	    <link rel="stylesheet" href="css/bootstrap.min.css"/>
	    <link rel="stylesheet" href="css/bootstrapValidator.min.css"/>
	    <link rel="stylesheet" href="css/style.css">
	    
	    <script src="js/jquery-1.10.2.min.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  

	</head>
	
	<body>
		<h1>Formulario Registro de Revista</h1>
		<div class="container">
      		<div class="row">
        		<div class="col-md-6">

        			<form id="accountForm" method="post" class="form-horizontal">
            
            			<div class="tab-content">
							<div class="tab-pane active" id="info-tab">

			                    <div class="form-group">
			                        <label class="col-lg-3 control-label">Nombre:</label>
			                        <div class="col-lg-5">
			                            <input type="text" class="form-control" name="nombre" />
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <label class="col-lg-3 control-label">Portada:</label>
			                        <div class="col-lg-5">
			                            <input type="text" class="form-control" name="portada" />
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <label class="col-lg-3 control-label">Fecha:</label>
			                        <div class="col-lg-5">
			                        	<div class='input-group date' id='datetimepicker' data-date-format="YYYY/MM/DD">
			                            	<input type="text" class="form-control" name="fecha" />
			                            	<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
			                        	</div>
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <label class="col-lg-3 control-label">Volumen:</label>
			                        <div class="col-lg-5">
			                            <input type="text" class="form-control" name="volumen" />
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <label class="col-lg-3 control-label">T&iacute;tulo:</label>
			                        <div class="col-lg-5">
			                            <input type="text" class="form-control" name="titulo" />
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <label class="col-lg-3 control-label">Subt&iacute;tulo:</label>
			                        <div class="col-lg-5">
			                            <input type="text" class="form-control" name="subtitulo" />
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <label class="col-lg-3 control-label">N&uacute;mero:</label>
			                        <div class="col-lg-5">
			                            <input type="text" class="form-control" name="numero" />
			                        </div>
			                    </div>

			                     <div class="form-group">
			                        <label class="col-lg-3 control-label">Clave:</label>
			                        <div class="col-lg-5">
			                            <input type="text" class="form-control" name="clave" />
			                        </div>
			                    </div>

			                     <div class="form-group">
			                        <label class="col-lg-3 control-label">Directorio:</label>
			                        <div class="col-lg-3">
			                            <textarea type="text" class="form-control" name="directorio"> </textarea>
			                        </div>
			                    </div>

			                     <div class="form-group">
			                        <label class="col-lg-3 control-label">Editorial:</label>
			                        <div class="col-lg-3">
			                            <textarea type="text" class="form-control" name="editorial"> </textarea>
			                        </div>
			                    </div>

			                    <div class="form-group">
                        			<label class="col-lg-3 control-label">Id_Status</label>
                        			<div class="col-lg-3">
                            			<select class="form-control" name="id_status">
			                                <option value="">Select a status</option>
			                                <option value="1">Estreno</option>
			                                <option value="2">Sin existencias</option>
			                                <option value="3">Rentada</option>
			                                <option value="4">Proximamente</option>
                            			</select>
                        			</div>
                    			</div>

                    			<div class="form-group">
					                <div class="col-lg-5 col-lg-offset-3">
					                    <button type="submit" class="btn btn-primary">Validar</button>
					                </div>
           						 </div>

                    		</div>

						</div>

					</form>

				</div>

			</div>

		</div>

		<!-- Include Raty JS file -->
		<script src="js/jquery.raty.min.js"></script>
		
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
   

    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.es.js"></script>




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
		                nombre: {
		                    validators: {
		                        notEmpty: {
		                            message: 'El nombre es requerido'
		                        }
		                    }
		                },

		                portada: {
		                    validators: {
		                        notEmpty: {
		                            message: 'La portada es requerida'
		                        }
		                    }
		                },

		                fecha: {
		                    validators: {
		                        notEmpty: {
		                            message: 'La fecha es requerida'
		                        }
		                    }
		                },

		                volumen: {
		                    validators: {
		                        notEmpty: {
		                            message: 'El volumen  es requerido'
		                        }
		                    }
		                },

		                titulo: {
		                    validators: {
		                        notEmpty: {
		                            message: 'El titulo es requerido'
		                        }
		                    }
		                },

		                subtitulo: {
		                    validators: {
		                        notEmpty: {
		                            message: 'El subtitulo es requerido'
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

		                clave: {
		                    validators: {
		                        notEmpty: {
		                            message: 'La clave es requerida'
		                        }
		                    }
		                },

		                directorio: {
		                    validators: {
		                        notEmpty: {
		                            message: 'El directorio es requerido'
		                        }
		                    }
		                },

		                editorial: {
		                    validators: {
		                        notEmpty: {
		                            message: 'La editorial es requerida'
		                        }
		                    }
		                },

		                id_status: {
		                    validators: {
		                        notEmpty: {
		                            message: 'El id_status es requerido'
		                        }
		                    }
		                }


		    }
			})
		       
		});
		   
		</script>

		<script src="js/bootstrap.min.js"></script>
	    <script src="js/bootstrapValidator.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	
	</body>

</html>