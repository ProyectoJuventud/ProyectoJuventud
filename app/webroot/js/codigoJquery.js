
$(document).ready(function () {

	////////////////////////////////    PREGUNTA  7   ////////////////////////////////////////////////

	var select_pregunta_7 = $('#select_pregunta_7');
	var opciones_si_pregunta_7 = $('.opciones_si_pregunta_7'); /* Bloque DIV */
	var opciones_no_pregunta_7 = $('.opciones_no_pregunta_7'); /* Bloque DIV */

	var Allradios_si_pregunta_7 = $('input[data-pregunta= "radio_si_pregunta_7"]'); /* Contiene todos los radios SI de la pregunta*/
	var Allradios_no_pregunta_7 = $('input[data-pregunta= "radio_no_pregunta_7"]');  /* Contiene todos los radios NO de la pregunta*/


	select_pregunta_7.change(function () {

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_7.fadeOut(300, function(){

				Allradios_si_pregunta_7.prop('checked', false);  /* Deselecciono cualquier radio que haya marcado de SI*/
				opciones_no_pregunta_7.fadeIn(300);
			});
		}

		else{
			opciones_no_pregunta_7.fadeOut(300, function(){

				Allradios_no_pregunta_7.prop('checked', false);  /* Deselecciono cualquier radio que haya marcado de NO */
				opciones_si_pregunta_7.fadeIn(300);
			});
		}
	});


	////////////////////////////////    PREGUNTA  8   ////////////////////////////////////////////////

	var select_pregunta_8 = $('#select_pregunta_8');
	var opciones_si_pregunta_8 = $('.opciones_si_pregunta_8'); /* Bloque DIV */

	var Allradios_pregunta_8 = $('input[data-pregunta= "radio_si_pregunta_8"]'); /* Contiene todos los radios de la pregunta*/

	select_pregunta_8.change(function () {

		/* Si elijo NO, entonces no solo debo ocultar las opciones, sino tambien desmarcar las que habia marcado*/
		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_8.fadeOut(300);
			Allradios_pregunta_8.prop('checked', false);  /*Quito seleccion a las marcadas*/
		}

		else{
			opciones_si_pregunta_8.fadeIn(300);
		};
	});


	////////////////////////////////    PREGUNTA  12   ////////////////////////////////////////////////

	var select_pregunta_12 = $('#select_pregunta_12');
	var opciones_si_pregunta_12 = $('.opciones_si_pregunta_12'); /*Bloque DIV*/
	var opciones_no_pregunta_12 = $('.opciones_no_pregunta_12'); /* Bloque DIV */

	var Allradios_si_pregunta_12 = $('input[data-pregunta= "radio_si_pregunta_12"]'); /* Contiene todos los radios SI de la pregunta*/
	var Allradios_no_pregunta_12 = $('input[data-pregunta= "radio_no_pregunta_12"]');/* Contiene todos los radios NO de la pregunta*/

	select_pregunta_12.change(function () {

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_12.fadeOut(300, function(){

				opciones_no_pregunta_12.fadeIn(300);
				Allradios_si_pregunta_12.prop('checked', false); /* Deselecciono cualquier radio que haya marcado de SI*/
			});
		}
		else{

			opciones_no_pregunta_12.fadeOut(300, function(){
				opciones_si_pregunta_12.fadeIn(300);
				Allradios_no_pregunta_12.prop('checked', false); /* Deselecciono cualquier radio que haya marcado de NO */
			});
		}
	});


	////////////////////////////////    PREGUNTA  14   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_14"]').click(function () {

		 disableCheckboxes('pregunta_14', 3);
	});


	////////////////////////////////    PREGUNTA  17   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_17"]').click(function () {

		disableCheckboxes('pregunta_17', 3);
	});


	////////////////////////////////    PREGUNTA  18   ////////////////////////////////////////////////

	var select_pregunta_18 = $('#select_pregunta_18');
	var opciones_si_pregunta_18 = $('.opciones_si_pregunta_18');

	var Allradios_pregunta_18 = $('input[data-pregunta= "radio_si_pregunta_18"]'); /* Contiene todos los radios de la pregunta*/

	select_pregunta_18.change(function () {

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_18.fadeOut(300);
			Allradios_pregunta_18.prop('checked', false);  /*Quito seleccion a las marcadas*/
		}
		else{
			opciones_si_pregunta_18.fadeIn(300);
			};
		}
	);


	////////////////////////////////    PREGUNTA  20   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_20"]').click(function () {

		// Permitira seleccionar hasta 3 checkboxes y mostrara el mensaje de alerta en la pregunta qu corresponda
		disableCheckboxes('pregunta_20', 3);
	});


	////////////////////////////////    PREGUNTA  21   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_21"]').click(function () {

		disableCheckboxes('pregunta_21', 2);
	});


	////////////////////////////////    PREGUNTA  25   ////////////////////////////////////////////////

	var select_pregunta_25 = $('#select_pregunta_25');
	var opciones_si_pregunta_25 = $('.opciones_si_pregunta_25'); /* bloque DIV */

	var Allcheckboxes_pregunta_25 = $('input[data-pregunta= "check_pregunta_25"]'); /* Contiene todos los checkboxes de la pregunta*/

	select_pregunta_25.change(function () {

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_25.fadeOut(300);
			Allcheckboxes_pregunta_25.prop('checked', false);  /*Quito seleccion a los marcados*/
			Allcheckboxes_pregunta_25.attr('disabled', false); /*habilito todos de nuevo por si habia marcado 3.*/
		}
		else{
			opciones_si_pregunta_25.fadeIn(300);
		}
	});

	Allcheckboxes_pregunta_25.click(function () {

		disableCheckboxes('pregunta_25', 3);
	});


	////////////////////////////////    PREGUNTA  26   ////////////////////////////////////////////////

	var select_pregunta_26 = $('#select_pregunta_26');
	var opciones_si_pregunta_26 = $('.opciones_si_pregunta_26');

	var Allcheckboxes_pregunta_26 = $('input[data-pregunta= "check_pregunta_26"]'); /* Contiene todos los checkboxes de la pregunta*/

	select_pregunta_26.change(function () {

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_26.fadeOut(300);
			Allcheckboxes_pregunta_26 .prop('checked', false); /*Quito seleccion a los marcados*/
			Allcheckboxes_pregunta_26 .attr('disabled', false); /*habilito todos de nuevo por si habia marcado 3.*/
		}
		else{
			opciones_si_pregunta_26.fadeIn(300);
		}
	});

	$('input[data-pregunta= "check_pregunta_26"]').click(function () {

		disableCheckboxes('pregunta_26', 3);
	});


	////////////////////////////////    PREGUNTA  27   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_27"]').click(function () {

		disableCheckboxes('pregunta_27', 3);
	});


	////////////////////////////////    PREGUNTA  27-b   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_27b"]').click(function () {

		disableCheckboxes('pregunta_27b', 3);
	});


	////////////////////////////////    PREGUNTA  30   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_30"]').click(function () {

		disableCheckboxes('pregunta_30', 3);
	});


	////////////////////////////////    PREGUNTA  31 ---> 32, 33, 34, 35 ////////////////////////////////////////////////

	var select_pregunta_31 = $('#select_pregunta_31');
	var opciones_si_pregunta_31 = $('.opciones_si_pregunta_31');

	var Allradios_pregunta_31 = $('input[data-pregunta= "radio_si_pregunta_31"]'); /* Contiene todos los radios de la pregunta*/

	/* Todo el bloque de las preguntas 32, 33, 34 y 35*/
	var bloque_32_33_34_35 = $('#bloque_32_33_34_35');


	select_pregunta_31.change(function () {

		if ( $(this).val() == 'No' ){

			Allradios_pregunta_31.prop('checked', false);  /*Quito seleccion a las marcadas en la pregunta 31*/

			opciones_si_pregunta_31.fadeOut(300);

			// Recordar que las preguntas 32, 33, 34 y 35 dependen de 31. Por lo tanto si habia marcado algo en estas preguntas y
			// luego cambio la opcion de la pregunta 31 pro NO, debo DESMARCAR todo lo que habia marcado en 32 33 34 y 35 y poner
			// nuevamnete la primer opcion que es VACIO.
			$('#select_pregunta_32 option[value=""]').prop('selected', true);
			$('#select_pregunta_33 option[value=""]').prop('selected', true);
			$('#select_pregunta_34 option[value=""]').prop('selected', true);
			$('#select_pregunta_35 option[value=""]').prop('selected', true);

			/*Y ahora las oculto*/
			bloque_32_33_34_35.fadeOut(300);
		}

		else{
			opciones_si_pregunta_31.fadeIn(300);

			bloque_32_33_34_35.fadeIn(500);
		}
	});


	////////////////////////////////    PREGUNTA  37   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_37"]').click(function () {

		disableCheckboxes('pregunta_37', 3);
	});


	////////////////////////////////    PREGUNTA  42   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_42"]').click(function () {

		disableCheckboxes('pregunta_42', 3);
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

    //////////////////////////////

});
