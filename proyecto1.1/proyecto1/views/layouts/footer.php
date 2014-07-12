 
  <div class="row">

    <div class="col-md-9">
      <hr>
        <p class="text-center">

          Clase de Programacion Web. <br><span class="glyphicon glyphicon-registration-mark"></span>

          <?php
            echo date('Y');
          ?>

        </p>
    </div>

  </div>


	 <script type="text/javascript">
	 	$(document).ready(function(){
	 		$(".accountForm").fancybox({
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
	 	 $(document).ready(function(){
	 		$("#formreg").bootstrapValidator({
        excluded: [':disabled'],
	 			feefbackIcons:{
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
              idcontinente: {
                  validators: {
                      notEmpty: {
                         message: 'El idcontinente es requerido'
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
              },
              idequipo: {
                  validators: {
                      notEmpty: {
                         message: 'El idequipo es requerido'
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
              foto: {
                  validators: {
                      notEmpty: {
                         message: 'La foto es requerida'
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
              peso: {
                  validators: {
                      notEmpty: {
                         message: 'El peso es requerido'
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
              abreviatura: {
                  validators: {
                      notEmpty: {
                         message: 'La abreviatura es requerida'
                      }
                  }
              },
              idciudad: {
                  validators: {
                      notEmpty: {
                         message: 'El idciudad es requerido'
                      }
                  }
              },
          }
      

	 			
	 		});

	 	});
	 </script>

	 <script>
	 	$(document).ready(function() {
      $('#fecha').datetimepicker();

      $('#fechaform').bootstrapValidator({
          feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
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

      $('#datetimePicker')
          .on('dp.change dp.show', function(e) {
              // Validate the date when user change it
              $('#meetingForm')
                  // Get the bootstrapValidator instance
                  .data('bootstrapValidator')
                  // Mark the field as not validated, so it'll be re-validated when the user change date
                  .updateStatus('meeting', 'NOT_VALIDATED', null)
                  // Validate the field
                  .validateField('meeting');
          });

    });

	 </script>	


   <script>
      $(document).ready(function() {
          $('#ratyForm')
              .bootstrapValidator({
                  // The disabled elements are excluded
                  // Hidden elements (including the rating star) are included
                  excluded: ':disabled',
                  feedbackIcons: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                  },
                  fields: {
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
            }
        });
});
</script>

 
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrapValidator.min.js"></script>

  </body>
</html>