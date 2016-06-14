
$(document).ready(function () {

	////////////////////////////////    PREGUNTA  9   ////////////////////////////////////////////////

	var select_pregunta_9 = $('#select_pregunta_9');
	var opciones_si_pregunta_9 = $('#opciones_si_pregunta_9'); /* Bloque DIV oculto */
	var opciones_no_pregunta_9 = $('#opciones_no_pregunta_9'); /* Bloque DIV oculto */

	var Allradios_si_pregunta_9 = $('input[data-pregunta= "radio_si_pregunta_9"]'); /* Contiene todos los radios SI de la pregunta*/
	var Allradios_no_pregunta_9 = $('input[data-pregunta= "radio_no_pregunta_9"]');  /* Contiene todos los radios NO de la pregunta*/


	select_pregunta_9.change(function () {

		// Sera utilizado para limpiar las validaciones client-side en el caso de pasar de SI a NO o viceversa.
		// Utilizara funcion "reserField" de "validation.io".
		var validation = $('#form_encuesta').data('formValidation');

		if ( $(this).val() == 'No' ){

			//  Si seleccione NO, entonces debo ocultar todos los radios de SI y mostrar los de NO
			opciones_si_pregunta_9.fadeOut(300, function(){

				Allradios_si_pregunta_9.prop('checked', false);  /* Deselecciono cualquier radio que haya marcado de SI*/
				opciones_no_pregunta_9.fadeIn(300);
			});

			//  Si ya habia marcado alguna opcion de SI y pase a elegir NO, entonces debo borrar la validacion client-side de SI.
			validation.resetField(Allradios_si_pregunta_9, true);
		}

		else{
			opciones_no_pregunta_9.fadeOut(300, function(){

				Allradios_no_pregunta_9.prop('checked', false);  /* Deselecciono cualquier radio que haya marcado de NO */
				opciones_si_pregunta_9.fadeIn(300);
			});

			// Aca ocurre lo mismo pero a la inversa.
			validation.resetField(Allradios_no_pregunta_9, true);
		}
	});


	////////////////////////////////    PREGUNTA  10   ////////////////////////////////////////////////

	var select_pregunta_10 = $('#select_pregunta_10');
	var opciones_si_pregunta_10 = $('#opciones_si_pregunta_10'); /* Bloque DIV oculto */

	var Allradios_pregunta_10 = $('input[data-pregunta= "radio_si_pregunta_10"]'); /* Contiene todos los radios de la pregunta*/

	select_pregunta_10.change(function () {

		// Sera utilizado para limpiar las validaciones client-side en el caso de pasar de SI a NO o viceversa.
		// Utilizara funcion "reserField" de "validation.io".
		var validation = $('#form_encuesta').data('formValidation');

		/* Si elijo NO, entonces no solo debo ocultar las opciones, sino tambien desmarcar las que habia marcado*/
		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_10.fadeOut(300);
			Allradios_pregunta_10.prop('checked', false);  /*Quito seleccion a las marcadas*/

			//  Si ya habia marcado alguna opcion de SI y pase a elegir NO, entonces debo borrar la validacion client-side de SI.
			validation.resetField(Allradios_pregunta_10, true);
		}

		else{
			opciones_si_pregunta_10.fadeIn(300);
		};
	});


	////////////////////////////////    PREGUNTA  14   ////////////////////////////////////////////////

	var select_pregunta_14 = $('#select_pregunta_14');
	var opciones_si_pregunta_14 = $('#opciones_si_pregunta_14'); /*Bloque DIV oculto */
	var opciones_no_pregunta_14 = $('#opciones_no_pregunta_14'); /* Bloque DIV oculto */

	var Allradios_si_pregunta_14 = $('input[data-pregunta= "radio_si_pregunta_14"]'); /* Contiene todos los radios SI de la pregunta*/
	var Allradios_no_pregunta_14 = $('input[data-pregunta= "radio_no_pregunta_14"]');/* Contiene todos los radios NO de la pregunta*/

	select_pregunta_14.change(function () {

		// Sera utilizado para limpiar las validaciones client-side en el caso de pasar de SI a NO o viceversa.
		// Utilizara funcion "reserField" de "validation.io".
		var validation = $('#form_encuesta').data('formValidation');

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_14.fadeOut(300, function(){

				opciones_no_pregunta_14.fadeIn(300);
				Allradios_si_pregunta_14.prop('checked', false); /* Deselecciono cualquier radio que haya marcado de SI*/
			});

			//  Si ya habia marcado alguna opcion de SI y pase a elegir NO, entonces debo borrar la validacion client-side de SI.
			validation.resetField(Allradios_si_pregunta_14, true);
		}
		else{

			opciones_no_pregunta_14.fadeOut(300, function(){
				opciones_si_pregunta_14.fadeIn(300);
				Allradios_no_pregunta_14.prop('checked', false); /* Deselecciono cualquier radio que haya marcado de NO */
			});

			//  Si ya habia marcado alguna opcion de NO y pase a elegir SI, entonces debo borrar la validacion client-side de NO.
			validation.resetField(Allradios_no_pregunta_14, true);
		}
	});


	////////////////////////////////    PREGUNTA  15   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_16"]').click(function () {

		disableCheckboxes('pregunta_16', 3);
	});


	////////////////////////////////    PREGUNTA  19   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_19"]').click(function () {

		disableCheckboxes('pregunta_19', 3);
	});


	////////////////////////////////    PREGUNTA  20   ////////////////////////////////////////////////

	var select_pregunta_20 = $('#select_pregunta_20');
	var opciones_si_pregunta_20 = $('#opciones_si_pregunta_20');

	var Allradios_pregunta_20 = $('input[data-pregunta= "radio_si_pregunta_20"]'); /* Contiene todos los radios de la pregunta*/

	select_pregunta_20.change(function () {

		// Sera utilizado para limpiar las validaciones client-side en el caso de pasar de SI a NO o viceversa.
		// Utilizara funcion "reserField" de "validation.io".
		var validation = $('#form_encuesta').data('formValidation');

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_20.fadeOut(300);
			Allradios_pregunta_20.prop('checked', false);  /*Quito seleccion a las marcadas*/

			//  Si ya habia marcado alguna opcion de SI y pase a elegir NO, entonces debo borrar la validacion client-side de SI.
			validation.resetField(Allradios_pregunta_20, true);
		}
		else{
			opciones_si_pregunta_20.fadeIn(300);
		};
	});


	////////////////////////////////    PREGUNTA  22   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_22"]').click(function () {

		// Permitira seleccionar hasta 3 checkboxes y mostrara el mensaje de alerta en la pregunta qu corresponda
		disableCheckboxes('pregunta_22', 3);
	});


	////////////////////////////////    PREGUNTA  23   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_23"]').click(function () {

		disableCheckboxes('pregunta_23', 2);
	});


	////////////////////////////////    PREGUNTA  27   ////////////////////////////////////////////////

	var select_pregunta_27 = $('#select_pregunta_27');
	var opciones_si_pregunta_27 = $('#opciones_si_pregunta_27'); /* bloque DIV oculto */

	var Allcheckboxes_pregunta_27 = $('input[data-pregunta= "check_pregunta_27"]'); /* Contiene todos los checkboxes de la pregunta*/

	select_pregunta_27.change(function () {

		var validation = $('#form_encuesta').data('formValidation');

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_27.fadeOut(300);
			Allcheckboxes_pregunta_27.prop('checked', false);  /*Quito seleccion a los marcados*/
			Allcheckboxes_pregunta_27.attr('disabled', false); /*habilito todos de nuevo por si habia marcado 3.*/

			validation.resetField(Allcheckboxes_pregunta_27, true);
		}
		else{
			opciones_si_pregunta_27.fadeIn(300);
		}
	});

	Allcheckboxes_pregunta_27.click(function () {

		disableCheckboxes('pregunta_27', 3);
	});


	////////////////////////////////    PREGUNTA  28   ////////////////////////////////////////////////

	var select_pregunta_28 = $('#select_pregunta_28');
	var opciones_si_pregunta_28 = $('#opciones_si_pregunta_28');

	var Allcheckboxes_pregunta_28 = $('input[data-pregunta= "check_pregunta_28"]'); /* Contiene todos los checkboxes de la pregunta*/

	select_pregunta_28.change(function () {

		var validation = $('#form_encuesta').data('formValidation');

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_28.fadeOut(300);
			Allcheckboxes_pregunta_28 .prop('checked', false); /*Quito seleccion a los marcados*/
			Allcheckboxes_pregunta_28 .attr('disabled', false); /*habilito todos de nuevo por si habia marcado 3.*/

			validation.resetField(Allcheckboxes_pregunta_28, true);
		}
		else{
			opciones_si_pregunta_28.fadeIn(300);
		}
	});

	$('input[data-pregunta= "check_pregunta_28"]').click(function () {

		disableCheckboxes('pregunta_28', 3);
	});


	////////////////////////////////    PREGUNTA  30   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_30"]').click(function () {

		disableCheckboxes('pregunta_30', 3);
	});


	////////////////////////////////    PREGUNTA  31   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_31"]').click(function () {

		disableCheckboxes('pregunta_31', 3);
	});


	////////////////////////////////    PREGUNTA  34   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_34"]').click(function () {

		disableCheckboxes('pregunta_34', 3);
	});


	////////////////////////////////    PREGUNTA  35 ---> 36, 37, 38, 39 ////////////////////////////////////////////////

	var select_pregunta_35 = $('#select_pregunta_35');
	var opciones_si_pregunta_35 = $('#opciones_si_pregunta_35');

	var Allradios_pregunta_35 = $('input[data-pregunta= "radio_si_pregunta_35"]'); /* Contiene todos los radios de la pregunta*/

	/* Todo el bloque de las preguntas 36, 37, 38 y 39*/
	var bloque_36_37_38_39 = $('#bloque_36_37_38_39');


	select_pregunta_35.change(function () {

		var validation = $('#form_encuesta').data('formValidation');

		if ( $(this).val() == 'No' ){

			Allradios_pregunta_35.prop('checked', false);  /*Quito seleccion a las marcadas en la pregunta 35*/

			opciones_si_pregunta_35.fadeOut(300);

			// Recordar que las preguntas 36, 37, 38 y 39 dependen de 35. Por lo tanto si habia marcado algo en estas preguntas y
			// luego cambio la opcion de la pregunta 35 pro NO, debo DESMARCAR todo lo que habia marcado en 36 37 38 y 39 y poner
			// nuevamnete la primer opcion que es VACIO.
			$('#select_pregunta_36 option[value=""]').prop('selected', true);
			$('#select_pregunta_37 option[value=""]').prop('selected', true);
			$('#select_pregunta_38 option[value=""]').prop('selected', true);
			$('#select_pregunta_39 option[value=""]').prop('selected', true);

			/*Y ahora las oculto*/
			bloque_36_37_38_39.fadeOut(300);

			//  Si ya habia marcado alguna opcion de SI y pase a elegir NO, entonces debo borrar la validacion client-side de SI.
			validation.resetField(Allradios_pregunta_35, true);

			// Ademas debo borrar las validaciones de las preguntas 36 37 38 y 39 si volvi a elegir NO.
			validation.resetField($('#select_pregunta_36'), true);
			validation.resetField($('#select_pregunta_37'), true);
			validation.resetField($('#select_pregunta_38'), true);
			validation.resetField($('#select_pregunta_39'), true);
		}

		else{
			opciones_si_pregunta_35.fadeIn(300);

			bloque_36_37_38_39.fadeIn(500);
		}
	});

	////////////////////////////////    PREGUNTA  41   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_41"]').click(function () {

		disableCheckboxes('pregunta_41', 3);
	});



	////////////////////////////////    PREGUNTA  46   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_46"]').click(function () {

		disableCheckboxes('pregunta_46', 3);
	});


	////////////////////////////////    PREGUNTA  47   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_47"]').click(function () {

		disableCheckboxes('pregunta_47', 3);
	});





	///////////////////////////////////////    METODOS    ////////////////////////////////////////////////

	/* Desactivara los checkboxes de la pregunta "pregunta" luego de tener seleccionado tanto checkboxes como "cantidad" */
	var disableCheckboxes = function (pregunta, cantidad) {

		// Esto tiene TODOS los checkboxes
		var Allcheckboxes = $('input[data-pregunta="check_' + pregunta + '"]');

		var checkboxesSelected = $('input[data-pregunta="check_' + pregunta + '"]:checked');

		var checkboxesNoSelected = $('input[data-pregunta="check_' + pregunta + '"]:not(:checked)');

		if (checkboxesSelected.length >= cantidad) {

			checkboxesNoSelected.attr('disabled', true);

			$('#mensaje_alerta_' + pregunta).html('<div class="estilo_mensaje maximo_seleccionado_' + pregunta +'" style="display:none"> <b>Advertencia: </b> No puede seleccionar más opciones');

			$('.maximo_seleccionado_' + pregunta).fadeIn(500).delay(5000).fadeOut('slow');

		}

		else{
			Allcheckboxes.attr('disabled', false);
		}
	};


    ////////////////////////// VALIDACIONES CLIENT-SIDE ///////////////////////////////

    /*ID formulario*/
    $('#form_encuesta').formValidation({
    	framework: 'bootstrap',

    	icon: {
    		valid: 'glyphicon glyphicon-ok',
    		invalid: 'glyphicon glyphicon-remove',
    		validating: 'glyphicon glyphicon-refresh'
    	},


    	fields: {

    		'data[Encuestas][pregunta_1]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_2]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_3]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_4]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_5]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_6]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_7]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_8]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_9]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_9][Si]':{

    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_9][No]':{

    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_10]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_10][Si]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_11]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_12]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_13]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_14]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_14][Si]':{

    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_14][No]':{

    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_15]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_16][]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Debe seleccionar al menos una opción'
                    }
                }
            },

    		'data[Encuestas][pregunta_17]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

            'data[Encuestas][pregunta_18]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_19][]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Debe seleccionar al menos una opción'
                    }
                }
            },

            'data[Encuestas][pregunta_20]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_20][Si]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_21]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_22][]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Debe seleccionar al menos una opción'
                    }
                }
            },

		    'data[Encuestas][pregunta_23][]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Debe seleccionar al menos una opción'
                    }
                }
            },

            'data[Encuestas][pregunta_24]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_25]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_26]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

 		    'data[Encuestas][pregunta_27]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_27][Si][]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Debe seleccionar al menos una opción'
                    }
                }
            },

            'data[Encuestas][pregunta_28]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

            'data[Encuestas][pregunta_28][Si][]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Debe seleccionar al menos una opción'
                    }
                }
            },

            'data[Encuestas][pregunta_29]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

            'data[Encuestas][pregunta_30][]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Debe seleccionar al menos una opción'
                    }
                }
            },

            'data[Encuestas][pregunta_31][]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Debe seleccionar al menos una opción'
                    }
                }
            },

            'data[Encuestas][pregunta_32]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_33]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

	   		'data[Encuestas][pregunta_34][]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Debe seleccionar al menos una opción'
                    }
                }
            },

      		'data[Encuestas][pregunta_35]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_35][Si]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_36]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_37]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_38]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_39]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_40]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_41][]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Debe seleccionar al menos una opción'
                    }
                }
            },

      		'data[Encuestas][pregunta_42]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_43]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_44]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_45]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_46]': {
    			validators: {
    				notEmpty: {
    					message: 'Debe seleccionar una opción'
    				}
    			}
    		},

    		'data[Encuestas][pregunta_47][]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Debe seleccionar al menos una opción'
                    }
                }
            }

    	}
    });


});


