<html>
	<head>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Bootstrap 101 Template</title>

	    <!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">

		
		<!-- <link rel="stylesheet" type="text/css" href="css/estilo.css" />-->
	</head>
	
	<body>

		<h2 class="text-center">Registro de la Ciudad:</h2><hr>
		<form id="accountForm" method="post" class="form-horizontal">

			<!--<title>Registro Ciudad</title>-->

			  <div class="form-group">
			    <label for="nombre">Nombre:</label>
			    <input type="text" class="form-control" id="nombre" placeholder="Enter nombre">
			  </div>

  			<div class="form-group">
				<div class="col-lg-5 col-lg-offset-3">
					<button type="submit" class="btn btn-primary">Validar</button>
				</div>
           	</div>

		</form>


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
		                }
		        }
		    })
		});

		</script>

	</body>

</html>