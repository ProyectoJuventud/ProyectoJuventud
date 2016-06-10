
$(document).ready(function () {


	////////////////////////////////    PREGUNTA  7   ////////////////////////////////////////////////

	var select_pregunta_7 = $('#select_pregunta_7');
	var opciones_si_pregunta_7 = $('.opciones_si_pregunta_7');
	var opciones_no_pregunta_7 = $('.opciones_no_pregunta_7');


	select_pregunta_7.change(function () {

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_7.fadeOut(300, function(){
				opciones_no_pregunta_7.fadeIn(300);
			});
		}

		else{

			opciones_no_pregunta_7.fadeOut(300, function(){
				opciones_si_pregunta_7.fadeIn(300);
			});
		}
	});

////////////////////////////////    PREGUNTA  8   ////////////////////////////////////////////////

	var select_pregunta_8 = $('#select_pregunta_8');
	var opciones_si_pregunta_8 = $('.opciones_si_pregunta_8');

	select_pregunta_8.change(function () {

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_8.fadeOut(300);
		}

		else{

				opciones_si_pregunta_8.fadeIn(300);
			};
		}
	);


	////////////////////////////////    PREGUNTA  12   ////////////////////////////////////////////////

	var select_pregunta_12 = $('#select_pregunta_12');
	var opciones_si_pregunta_12 = $('.opciones_si_pregunta_12');
	var opciones_no_pregunta_12 = $('.opciones_no_pregunta_12');


	select_pregunta_12.change(function () {

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_12.fadeOut(300, function(){
				opciones_no_pregunta_12.fadeIn(300);
			});
		}

		else{

			opciones_no_pregunta_12.fadeOut(300, function(){
				opciones_si_pregunta_12.fadeIn(300);
			});
		}
	});


	////////////////////////////////    PREGUNTA  14   ////////////////////////////////////////////////

	$('input[name="data[Encuestas][pregunta_14][]"]').click(function () {

		disableCheckboxes('pregunta_14', 3);
	});


	////////////////////////////////    PREGUNTA  17   ////////////////////////////////////////////////

	$('input[name="data[Encuestas][pregunta_17][]"]').click(function () {

		disableCheckboxes('pregunta_17', 3);
	});


	////////////////////////////////    PREGUNTA  18   ////////////////////////////////////////////////

	var select_pregunta_18 = $('#select_pregunta_18');
	var opciones_si_pregunta_18 = $('.opciones_si_pregunta_18');

	select_pregunta_18.change(function () {

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_18.fadeOut(300);
		}

		else{

				opciones_si_pregunta_18.fadeIn(300);
			};
		}
	);


	////////////////////////////////    PREGUNTA  20   ////////////////////////////////////////////////

	$('input[name="data[Encuestas][pregunta_20][]"]').click(function () {

		// Permitira seleccionar hasta 3 checkboxes y mostrara el mensaje de alerta en la pregunta qu corresponda
		disableCheckboxes('pregunta_20', 3);
	});


	////////////////////////////////    PREGUNTA  21   ////////////////////////////////////////////////

	$('input[name="data[Encuestas][pregunta_21][]"]').click(function () {

		disableCheckboxes('pregunta_21', 2);
	});


	////////////////////////////////    PREGUNTA  25   ////////////////////////////////////////////////

	var select_pregunta_25 = $('#select_pregunta_25');
	var opciones_si_pregunta_25 = $('.opciones_si_pregunta_25');


	select_pregunta_25.change(function () {

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_25.fadeOut(300);
		}

		else{
			opciones_si_pregunta_25.fadeIn(300);
		}
	});


	$('input[name="data[Encuestas][pregunta_25][]"]').click(function () {

		disableCheckboxes('pregunta_25', 3);
	});


	////////////////////////////////    PREGUNTA  27   ////////////////////////////////////////////////

	$('input[name="data[Encuestas][pregunta_27][]"]').click(function () {

		disableCheckboxes('pregunta_27', 3);
	});

	////////////////////////////////    PREGUNTA  27-b   ////////////////////////////////////////////////

	$('input[name="data[Encuestas][pregunta_27b][]"]').click(function () {

		disableCheckboxes('pregunta_27b', 3);
	});



	////////////////////////////////    PREGUNTA  30   ////////////////////////////////////////////////

	$('input[name="data[Encuestas][pregunta_30][]"]').click(function () {

		disableCheckboxes('pregunta_30', 3);
	});


	////////////////////////////////    PREGUNTA  31 ---> 32, 33, 34, 35 ////////////////////////////////////////////////

	var select_pregunta_31 = $('#select_pregunta_31');
	var opciones_si_pregunta_31 = $('.opciones_si_pregunta_31');

	var bloque_32_33_34_35 = $('#bloque_32_33_34_35');

	select_pregunta_31.change(function () {

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_31.fadeOut(300);

			bloque_32_33_34_35.fadeOut(300);
		}

		else{
			opciones_si_pregunta_31.fadeIn(300);

			bloque_32_33_34_35.fadeIn(500);
		}
	});


	////////////////////////////////    PREGUNTA  37   ////////////////////////////////////////////////

	$('input[name="data[Encuestas][pregunta_37][]"]').click(function () {

		disableCheckboxes('pregunta_37', 3);
	});


	////////////////////////////////    PREGUNTA  42   ////////////////////////////////////////////////

	$('input[name="data[Encuestas][pregunta_42][]"]').click(function () {

		disableCheckboxes('pregunta_42', 3);
	});





	///////////////////////////////////////    METODOS    ////////////////////////////////////////////////

	/* Desactivara los checkboxes de la pregunta "pregunta" luego de tener seleccionado tanto checkboxes como "cantidad" */
	var disableCheckboxes = function (pregunta, cantidad) {

		// Esto tiene TODOS los checkboxes
		var Allcheckboxes = $('input[name="data[Encuestas][' + pregunta + '][]"]');

		// Esto tiene TODOS los checkboxes NO SELECCIONADOS
		var checkboxesNoSelected = $('input[name="data[Encuestas][' + pregunta + '][]"]:not(:checked)');

        // checkboxes SELECCIONADOS
        var checkboxesSelected = $('input[name="data[Encuestas][' + pregunta + '][]"]:checked');

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
