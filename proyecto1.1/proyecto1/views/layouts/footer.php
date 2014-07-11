 
 	<footer>
 		  <nav class="navbar navbar-default" role="navigation" style="background-color:#326295;" >
      <div class="container-fluid">
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#"><img src="images/next.png"></a></li>
            <li><a href="#">T&eacute;rminos del servicio /</a></li>
            <li><a href="#">Pol&iacute;ticas de privacidad /</a></li>
            <li><a href="#">Desc&aacute;rgalo /</a></li>
            <li><a href="#">Contacto con la FIFA /</a></li>
            <li><a href="#">Versi&oacute;n Celular</a></li>

          </ul>
        </div>

         <div class="row">
          
          <div class="col-md-6">
            <h5>Copyright© 1994 - 2014 FIFA. Reservados todos los derechos</h5>
          </div>

           <div class="col-md-6">
            <h5>Plataformas Sociales Oficiales de la FIFA<img src="images/redes.jpg" align="center" width="40%" height="40%"></h5>
          </div>

      </div>

       </nav>

    </footer>
 </div>

	 <script type="text/javascript">
	 	$(document).ready(function)({
	 		$("accountForm").fancybox({
	 			'autoScale':false,
	 			'transitionIn':'none',
	 			'transitionOut':'none',
	 			'width':680,
	 			'height':450,
	 			'type':'iframe'
	 		});

	 	});
	 </script>

	  <script>
	 	$(document).ready(function)({
	 		$("accountForm").bootstrapValidator({
	 			feefbackIcons:{
	 				valid:'glyphicon glyphicon-ok',
	                invalid: 'glyphicon glyphicon-remove',
	                validating: 'glyphicon glyphicon-refresh'
           		 }
	 			}
	 		});

	 	});
	 </script>

	 <script>
	 	$(document).ready(function)({
	 		$('#fecha').bootstrapValidator({
         excluded: [':disabled'],
	 			feedbackIcons: {
		 			valid:'glyphicon glyphicon-ok',
		            invalid: 'glyphicon glyphicon-remove',
		            validating: 'glyphicon glyphicon-refresh'
	 		},
	 		fields: {
              meeting: {
                  validators: {
                      date: {
                          format: 'MM/DD/YYYY h:m A',
                          message: 'The value is not a valid date'
                      }
                  }
              }
          }
	 			
	 		});

	 	});
	 </script>	

  <script>
    $(document).ready(function)({
      $('#formconti').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
          valid:'glyphicon glyphicon-ok',
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
        
      });

    });
  </script>  

  <script>
    $(document).ready(function)({
      $('#formequi').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
          valid:'glyphicon glyphicon-ok',
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
         
              idpais: {
                  validators: {
                      notEmpty: {
                          message: 'El idpais es requerido'
                      }
                  }
              },
              escudo: {
                  validators: {
                      notEmpty: {
                          message: 'El escudo es requerido'
                      }
                  }
              }
          }
        
      });

    });
  </script>  

   <script>
    $(document).ready(function)({
      $('#formesta').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
          valid:'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
              Nombre: {
                  validators: {
                      notEmpty: {
                          message: 'El nombre es requerido'
                      }
                  }
              }
          }
        
      });

    });
  </script>

   <script>
    $(document).ready(function)({
      $('#forminte').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
          valid:'glyphicon glyphicon-ok',
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
               apellido: {
                  validators: {
                      notEmpty: {
                          message: 'El apellido es requerido'
                      }
                  }
              },
               peso: {
                  validators: {
                      notEmpty: {
                          message: 'El peso es requerido'
                      }
                  }
              },
               estatura: {
                  validators: {
                      notEmpty: {
                          message: 'La estatura es requerida'
                      }
                  }
              },
               foto: {
                  validators: {
                      notEmpty: {
                          message: 'La fot} es requerida'
                      }
                  }
              },
               Edad: {
                  validators: {
                      notEmpty: {
                          message: 'La edad es requerida'
                      }
                  }
              },
               idequipo: {
                  validators: {
                      notEmpty: {
                          message: 'El idequipo es requerido'
                      }
                  }
              }
          }
        
      });

    });
  </script> 

  <script>
    $(document).ready(function)({
      $('#formpa').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
          valid:'glyphicon glyphicon-ok',
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
              bandera: {
                  validators: {
                      notEmpty: {
                          message: 'La bandera es requerida'
                      }
                  }
              },
              idcontinente: {
                  validators: {
                      notEmpty: {
                          message: 'El continente es requerido'
                      }
                  }
              }
          }
        
      });

    });
  </script>   

  <script>
    $(document).ready(function)({
      $('#formpa').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
          valid:'glyphicon glyphicon-ok',
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
              abreviatura: {
                  validators: {
                      notEmpty: {
                          message: 'La abreviatura es requerida'
                      }
                  }
              }
          }
        
      });

    });
  </script>   



 </div> <!-- /container -->


 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
    <script src="../js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.es.js"></script>
    <script  type = "text/javascript"  src = "js/jquery.fancybox.pack.js" ></script>

  </body>
</html>