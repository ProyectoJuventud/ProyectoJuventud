
$(document).ready(function () {


	var departamentosDDL = $('#select_pregunta_5');
	var municipiosDDL = $('#select_pregunta_6');

	//  Estara desactivada inicialmente
	municipiosDDL.prop('disabled', true);

	$.ajax({
		url: 'encuestas/getdepartamentos',
		method: 'POST',
		dataType: 'json',

		success: function (data) {

			alert(data);
			// $(data).each(function (index, departamento) {

			// 	departamentosDDL.append($('<option/>', { value: departamento.id, text: departamento.nombre_departamento}));
			// });
		},
		error: function (err) {
			alert('Se produjo un error al cargar la lista de Departamentos.');
		}
	});

	//////////////////////////////////////////////////////////////////////////////////////////////////

	departamentosDDL.change(function () {

		var validation = $('#form_encuesta').data('formValidation');

		$.ajax({
			url: 'encuestas/GetMunicipioPorId',
			method: 'post',
			dataType: 'json',

			data: { DepartamentoId: $(this).val() },

			success: function (data) {

				// Vacio la lista
				municipiosDDL.empty();

				// Tuve que darselo de esta manera (distinta a los otros apppend de option) debido a que con la otra forma
				// no podia darle las opciones de "disabled" y "selected".
				municipiosDDL.append("<option disabled selected value='' >Seleccione un Municipio..</option>");

				$(data).each(function (index, municipio) {

					municipiosDDL.append($('<option/>', { value: municipio.id, text: municipio.nombre_municipio }));
				});

				// Lo activo
				municipiosDDL.prop('disabled', false);
				validation.resetField(municipiosDDL, true);
			},

			error: function (err) {

				alert('Se produjo un error al cargar la lista de Municipios.');
			}
		});
	});


	////////////////////////////////    PREGUNTA  2   ////////////////////////////////////////////////

	/* La pregutna 32 se abrira si la pregunta 2 y 7 son SI.
	Debo chequear esto mismo tanto para la PREGUNTA 2 como para la PREGUNTA 7*/
	var pregunta_32 = $('#pregunta_32');

	$('#select_pregunta_2').change(function () {

		var validation = $('#form_encuesta').data('formValidation');

		/* El "val = 1" corresponde a MUJER. En "select_pregunta_7", el "val = 1" corresponde a que TIENE HIJOS*/
		if($(this).val() == '1'){

			if($('#select_pregunta_7').val() == '1'){

				pregunta_32.fadeIn(400);
			}
		}
		else{

			pregunta_32.fadeOut(400);
			validation.resetField($('#select_pregunta_32'), true);
		}
	});

	////////////////////////////////    PREGUNTA  7   ////////////////////////////////////////////////

	/* La pregutna 32 se abrira si la pregunta 2 y 7 son SI*/
	var pregunta_32 = $('#pregunta_32');


	$('#select_pregunta_7').change(function () {

		var validation = $('#form_encuesta').data('formValidation');

		/* El "val = 1" corresponde a si TIENE HIJOS . En "select_pregunta_2", el "val = 1" corresponde a que si es MUJER */
		if($(this).val() == '1'){

			if($('#select_pregunta_2').val() == '1'){

				pregunta_32.fadeIn(400);
			}
		}
		else{

			pregunta_32.fadeOut(400);
			validation.resetField($('#select_pregunta_32'), true);
		}
	});

	////////////////////////////////    PREGUNTA  9   ////////////////////////////////////////////////

	var opciones_si_pregunta_9 = $('#opciones_si_pregunta_9'); /* Bloque DIV oculto */
	var opciones_no_pregunta_9 = $('#opciones_no_pregunta_9'); /* Bloque DIV oculto */

	var pregunta_10 = $('#pregunta_10'); /* Bloque DIV oculto. La pregunta 10 aparecera si la 9 es "NO". */
	var pregunta_17 = $('#pregunta_17'); /* Bloque DIV oculto. La pregunta 17 aparecera si la 9 es "SI". */

	/*Si cambie la opcion en la pregunta 9..*/
	$('#select_pregunta_9').change(function () {

		// Sera utilizado para limpiar las validaciones client-side en el caso de pasar de SI a NO o viceversa.
		// Utilizara funcion "reserField" de "validation.io".
		var validation = $('#form_encuesta').data('formValidation');

		if ( $(this).val() == 'No' ){

			//  Si seleccione NO, entonces debo ocultar todos los radios de SI y mostrar los de NO
			opciones_si_pregunta_9.fadeOut(300, function(){
				opciones_no_pregunta_9.fadeIn(300);
			});

			//  Si ya habia marcado alguna opcion de SI y pase a elegir NO, entonces vuelvo al valor por defecto ("Elija una opcion") y borro la validacion
			// client-side.
			validation.resetField($('input[data-pregunta= "radio_si_pregunta_9"]'), true);


			/////////////
			// Ahora debo mostrar la pregunta 10
			////////////
			pregunta_10.fadeIn(500);


			/////////////
			// Ahora debo ocultar la pregunta 17 y volver a su valor por defecto
			////////////
			pregunta_17.fadeOut(500);
			validation.resetField($('#select_pregunta_17'), true);
		}

		//  Si la pregunta 9 es SI, primero debo ocultar las opciones de NO, mostrar las opciones de SI y borrar las validaciones
		// client-side del NO que hayan pasando para volver a default.
		else{

			opciones_no_pregunta_9.fadeOut(300, function(){
				opciones_si_pregunta_9.fadeIn(300);
			});

			//  Si ya habia marcado alguna opcion de NO y pase a elegir SI, entonces vuelvo al valor por defecto ("Elija una opcion")
			// y borro la validacion client-side.
			validation.resetField($('input[data-pregunta= "radio_no_pregunta_9"]'), true);


			/////////////
			// Ahora, si pregunta 9 es SI, entonces debo OCULTAR la pregunta 10 y borrar las selecciones marcadas en ella.
			////////////

			pregunta_10.fadeOut(400); /*Oculto la pregunta*/

			/*Oculto el bloque que tiene las opciones de la pregunta 10 */
 			$('#opciones_si_pregunta_10').fadeOut(400);

			//  Si ya habia marcado alguna opcion de la pregunta 10 (Si o NO), entonces vuelvo al valor por defecto ("Elija una opcion")
			// y borro la validacion client-side.
			validation.resetField($('#select_pregunta_10'), true);

			/* Quito las opciones que pude haber marcado de la pregunta 10 y elimino su validacion client-side*/
			validation.resetField($('input[data-pregunta= "radio_si_pregunta_10"]'), true);

			/////////////
			// Ahora, si pregunta 9 es SI, entonces debo MOSTRAR la pregunta 17
			////////////
			pregunta_17.fadeIn(500);
		}
	});


	////////////////////////////////    PREGUNTA  10   ////////////////////////////////////////////////

	var opciones_si_pregunta_10 = $('#opciones_si_pregunta_10'); /* Bloque DIV oculto */

	/*Si cambie la opcion en la pregunta 10..*/
	$('#select_pregunta_10').change(function () {

		// Sera utilizado para limpiar las validaciones client-side en el caso de pasar de SI a NO o viceversa.
		// Utilizara funcion "reserField" de "validation.io".
		var validation = $('#form_encuesta').data('formValidation');

		/* Si elijo NO, entonces no solo debo ocultar las opciones, sino tambien desmarcar las que habia marcado*/
		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_10.fadeOut(300);

			//  Si ya habia marcado alguna opcion de SI y pase a elegir NO, entonces vuelvo a su valor por defecto (ninguna opcion marcada) y
			// borro la validacion client-side posible.
			validation.resetField($('input[data-pregunta= "radio_si_pregunta_10"]'), true);
		}

		else{
			opciones_si_pregunta_10.fadeIn(300);
		}
	});

	////////////////////////////////    PREGUNTA  12   ////////////////////////////////////////////////

	/* Todo el bloque de las preguntas 13, 14, 15*/
	var bloque_13_14_15 = $('#bloque_13_14_15');

	var pregunta_18 = $('#pregunta_18'); /* Bloque DIV oculto. La pregunta 18 aparecera si pregunta 12 es value = 2, 3 o 4. */

	/*Si cambie la opcion en la pregunta 12..*/
	$('#select_pregunta_12').change(function () {

		var validation = $('#form_encuesta').data('formValidation');

		/* "Value = 1" es igual a "Nunca he trabajado" */
		if ( $(this).val() == '1' ){

			/*Primero oculto el bloque de las preguntas dependientes (13, 14 y 15)*/
			bloque_13_14_15.fadeOut(300);

			/* Reseteo el campo de la pregunta 13: vuelvo a valor por defecto (Elija una opcion) y quito validacion client-side.*/
			validation.resetField($('#select_pregunta_13'), true);

			/* Reseteo el campo de la pregunta 14: vuelvo a valor por defecto (Elija una opcion) y quito validacion client-side.*/
			validation.resetField($('#select_pregunta_14'), true);

			/* Quito las opciones marcadas de la pregunta 14 tanto para SI como para NO.*/
			validation.resetField($('input[data-pregunta= "radio_si_pregunta_14"]'), true);
			validation.resetField($('input[data-pregunta= "radio_no_pregunta_14"]'), true);

			/*Oculto los radios */
			$('#opciones_si_pregunta_14').fadeOut(300);
			$('#opciones_no_pregunta_14').fadeOut(300);

			/* Reseteo el campo de la pregunta 15: vuelvo a valor por defecto (Elija una opcion) y quito validacion client-side.*/
			validation.resetField($('#select_pregunta_15'), true);


			/////////////
			// Ahora debo ocultar la pregunta 18 y volver a su valor por defecto
			////////////
			pregunta_18.fadeOut(500);
			validation.resetField($('#select_pregunta_18'), true);
		}

		/*Si marque cualquiera de las otras opciones en 12, muestro las preguntas 13, 14 y 15*/
		else{
			bloque_13_14_15.fadeIn(300);


			/////////////
			// Ahora debo MOSTRAR la pregunta 18
			////////////
			pregunta_18.fadeIn(500);
		}
	});


	////////////////////////////////    PREGUNTA  14   ////////////////////////////////////////////////

	var opciones_si_pregunta_14 = $('#opciones_si_pregunta_14'); /*Bloque DIV oculto */
	var opciones_no_pregunta_14 = $('#opciones_no_pregunta_14'); /* Bloque DIV oculto */

	/*Si cambie la opcion en la pregunta 14..*/
	$('#select_pregunta_14').change(function () {

		// Sera utilizado para limpiar las validaciones client-side en el caso de pasar de SI a NO o viceversa.
		// Utilizara funcion "reserField" de "validation.io".
		var validation = $('#form_encuesta').data('formValidation');

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_14.fadeOut(300, function(){
				opciones_no_pregunta_14.fadeIn(300);
			});

			//  Si ya habia marcado alguna opcion de SI y pase a elegir NO, entonces debo borrar la validacion client-side de SI.
			validation.resetField($('input[data-pregunta= "radio_si_pregunta_14"]'), true);
		}
		else{

			opciones_no_pregunta_14.fadeOut(300, function(){
				opciones_si_pregunta_14.fadeIn(300);
			});

			//  Si ya habia marcado alguna opcion de NO y pase a elegir SI, entonces debo borrar la validacion client-side de NO.
			validation.resetField($('input[data-pregunta= "radio_no_pregunta_14"]'), true);
		}
	});


	////////////////////////////////    PREGUNTA  16   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_16"]').click(function () {

		disableCheckboxes('pregunta_16', 3);
	});


	////////////////////////////////    PREGUNTA  19   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_19"]').click(function () {

		disableCheckboxes('pregunta_19', 3);

		/*Habilitamos el campo para escribir si y solo si el checkbox de OTRAS esta seleccionado*/
		/* "Val = 7" es opcion "OTRAS" */
		if ($('input[data-pregunta="check_pregunta_19"][value="7"]').is(":checked")) {

			$('input[id="input_text_pregunta_19"]').attr('disabled', false);
		}
		else{

			$('input[id="input_text_pregunta_19"]').attr('disabled', true);

			/* Borro lo que pude haber escrito*/
			$('input[id="input_text_pregunta_19"]').val('');
		}
	});


	////////////////////////////////    PREGUNTA  20   ////////////////////////////////////////////////

	var opciones_si_pregunta_20 = $('#opciones_si_pregunta_20');

	/*Si cambie la opcion en la pregunta 20..*/
	$('#select_pregunta_20').change(function () {

		// Sera utilizado para limpiar las validaciones client-side en el caso de pasar de SI a NO o viceversa.
		// Utilizara funcion "reserField" de "validation.io".
		var validation = $('#form_encuesta').data('formValidation');

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_20.fadeOut(300);

			//  Si ya habia marcado alguna opcion de SI y pase a elegir NO, entonces debo borrar la validacion client-side de SI.
			validation.resetField($('input[data-pregunta= "radio_si_pregunta_20"]'), true);
		}
		else{
			opciones_si_pregunta_20.fadeIn(300);
		}
	});


	////////////////////////////////    PREGUNTA  21   ////////////////////////////////////////////////

	var bloque_22_23_24 = $('#bloque_22_23_24');

	var check_pregunta_22 = $('input[data-pregunta= "check_pregunta_22"]');
	var check_pregunta_23 = $('input[data-pregunta= "check_pregunta_23"]');

	/*Si cambie la opcion en la pregunta 21..*/
	$('#select_pregunta_21').change(function () {

		var validation = $('#form_encuesta').data('formValidation');

		if ( $(this).val() == 'No' ){

			bloque_22_23_24.fadeOut(300);

			validation.resetField(check_pregunta_22, true);
			check_pregunta_22.attr('disabled', false); /*habilito todos de nuevo por si habia marcado 3.*/

			validation.resetField(check_pregunta_23, true);
			check_pregunta_23.attr('disabled', false); /*habilito todos de nuevo por si habia marcado 3.*/

			validation.resetField($('#select_pregunta_24'), true);
		}
		else{
			bloque_22_23_24.fadeIn(300);
		}
	});



	////////////////////////////////    PREGUNTA  23   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_23"]').click(function () {

		disableCheckboxes('pregunta_23', 3);
	});


	////////////////////////////////    PREGUNTA  27   ////////////////////////////////////////////////

	var opciones_si_pregunta_27 = $('#opciones_si_pregunta_27'); /* bloque DIV oculto */

	var Allcheckboxes_pregunta_27 = $('input[data-pregunta= "check_pregunta_27"]'); /* Contiene todos los checkboxes de la pregunta*/

	/*Si cambie la opcion en la pregunta 27..*/
	$('#select_pregunta_27').change(function () {

		var validation = $('#form_encuesta').data('formValidation');

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_27.fadeOut(300);
			Allcheckboxes_pregunta_27.attr('disabled', false); /*habilito todos de nuevo por si habia marcado 3.*/

			validation.resetField(Allcheckboxes_pregunta_27, true);
		}
		else{
			opciones_si_pregunta_27.fadeIn(300);
		}
	});

	$('input[data-pregunta= "check_pregunta_27"]').click(function () {

		/*Habilitamos el campo para escribir si y solo si el checkbox de OTRAS esta seleccionado*/
		/* "Val = 7" es opcion "OTRAS" */
		if ($('input[data-pregunta="check_pregunta_27"][value="7"]').is(":checked")) {

			$('input[id="input_text_pregunta_27"]').attr('disabled', false);
		}
		else{

			$('input[id="input_text_pregunta_27"]').attr('disabled', true);

			/* Borro lo que pude haber escrito*/
			$('input[id="input_text_pregunta_27"]').val('');
		}
	});


	////////////////////////////////    PREGUNTA  28   ////////////////////////////////////////////////

	var opciones_si_pregunta_28 = $('#opciones_si_pregunta_28');

	var Allcheckboxes_pregunta_28 = $('input[data-pregunta= "check_pregunta_28"]'); /* Contiene todos los checkboxes de la pregunta*/

	/*Si cambie la opcion en la pregunta 28..*/
	$('#select_pregunta_28').change(function () {

		var validation = $('#form_encuesta').data('formValidation');

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_28.fadeOut(300);
			Allcheckboxes_pregunta_28 .attr('disabled', false); /*habilito todos de nuevo por si habia marcado 3.*/

			validation.resetField(Allcheckboxes_pregunta_28, true);
		}
		else{
			opciones_si_pregunta_28.fadeIn(300);
		}
	});

	$('input[data-pregunta= "check_pregunta_28"]').click(function () {

		/*Habilitamos el campo para escribir si y solo si el checkbox de OTRAS esta seleccionado*/
		/* "Val = 7" es opcion "OTRAS" */
		if ($('input[data-pregunta="check_pregunta_28"][value="7"]').is(":checked")) {

			$('input[id="input_text_pregunta_28"]').attr('disabled', false);
		}
		else{

			$('input[id="input_text_pregunta_28"]').attr('disabled', true);

			/* Borro lo que pude haber escrito*/
			$('input[id="input_text_pregunta_28"]').val('');
		}
	});

	$('input[data-pregunta= "check_pregunta_28"]').click(function () {

		disableCheckboxes('pregunta_28', 3);
	});


	////////////////////////////////    PREGUNTA  30   ////////////////////////////////////////////////



	////////////////////////////////    PREGUNTA  31   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_31"]').click(function () {

		disableCheckboxes('pregunta_31', 3);
	});

	////////////////////////////////    PREGUNTA  34   ////////////////////////////////////////////////



	////////////////////////////////    PREGUNTA  35 ---> 36, 37, 38, 39 ////////////////////////////////////////////////

	var opciones_si_pregunta_35 = $('#opciones_si_pregunta_35');

	var Allradios_pregunta_35 = $('input[data-pregunta= "radio_si_pregunta_35"]'); /* Contiene todos los radios de la pregunta*/

	/* Todo el bloque de las preguntas 36, 37, 38 y 39*/
	var bloque_36_37_38_39 = $('#bloque_36_37_38_39');

	/*Si cambie la opcion en la pregunta 35..*/
	$('#select_pregunta_35').change(function () {

		var validation = $('#form_encuesta').data('formValidation');

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_35.fadeOut(300);

			//  Si ya habia marcado alguna opcion de SI y pase a elegir NO, entonces debo borrar la validacion client-side de SI.
			validation.resetField(Allradios_pregunta_35, true);

			/*Y ahora las oculto*/
			bloque_36_37_38_39.fadeOut(300);

			// Ademas debo borrar las validaciones client-side y vuelvo a valor por defecto (Elija una opcion) en las preguntas 36 37 38 y 39
			// si volvi a elegi No en pregunta 35.
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

	/* Todo el bloque de las preguntas 36, 37, 38 y 39*/
	var bloque_42_43_44_45 = $('#bloque_42_43_44_45');

	/*Si cambie la opcion en la pregunta 35..*/
	$('#select_pregunta_41').change(function () {

		var validation = $('#form_encuesta').data('formValidation');

		/* Val = 1 corresponde a NUNCA */
		if ( $(this).val() == '1' ){

			// Oculto el BLOQUE
			bloque_42_43_44_45.fadeOut(300);

			// Ademas debo borrar las validaciones client-side y vuelvo a valor por defecto (Elija una opcion) en las preguntas 36 37 38 y 39
			// si volvi a elegi No en pregunta 35.
			validation.resetField($('#select_pregunta_42'), true);
			validation.resetField($('#select_pregunta_43'), true);
			validation.resetField($('#select_pregunta_44'), true);
			validation.resetField($('#select_pregunta_45'), true);
		}

		else{
			bloque_42_43_44_45.fadeIn(500);
		}
	});



	////////////////////////////////    PREGUNTA  46   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_46"]').click(function () {

		disableCheckboxes('pregunta_46', 3);
	});


	////////////////////////////////    PREGUNTA  47   ////////////////////////////////////////////////

	$('input[data-pregunta= "check_pregunta_47"]').click(function () {

		/*Habilitamos el campo para escribir si y solo si el checkbox de OTRAS esta seleccionado*/
		/* "Val = 7" es opcion "OTRAS" */
		if ($('input[data-pregunta="check_pregunta_47"][value="7"]').is(":checked")) {

			$('input[id="input_text_pregunta_47"]').attr('disabled', false);
		}
		else{

			$('input[id="input_text_pregunta_47"]').attr('disabled', true);

			/* Borro lo que pude haber escrito*/
			$('input[id="input_text_pregunta_47"]').val('');
		}
	});

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


    	// fields: {

    	// 	'data[Encuesta][pregunta_1]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_2]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_3]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_4]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_5]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_6]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_7]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_8]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_9]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_9][Si]':{

    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_9][No]':{

    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_10]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_10][Si]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_11]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_12]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_13]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_14]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_14][Si]':{

    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_14][No]':{

    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_15]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_16][]': {
     //            validators: {
     //                choice: {
     //                    min: 1,
     //                    message: 'Debe seleccionar al menos una opción'
     //                }
     //            }
     //        },

    	// 	'data[Encuesta][pregunta_17]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

     //        'data[Encuesta][pregunta_18]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_19][Si][]': {
     //            validators: {
     //                choice: {
     //                    min: 1,
     //                    message: 'Debe seleccionar al menos una opción'
     //                }
     //            }
     //        },

     //        'data[Encuesta][pregunta_20]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_20][Si]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_21]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_22][]': {
     //            validators: {
     //                choice: {
     //                    min: 1,
     //                    message: 'Debe seleccionar al menos una opción'
     //                }
     //            }
     //        },

		   //  'data[Encuesta][pregunta_23][]': {
     //            validators: {
     //                choice: {
     //                    min: 1,
     //                    message: 'Debe seleccionar al menos una opción'
     //                }
     //            }
     //        },

     //        'data[Encuesta][pregunta_24]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_25]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_26]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

 		  //   'data[Encuesta][pregunta_27]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_27][Si][]': {
     //            validators: {
     //                choice: {
     //                    min: 1,
     //                    message: 'Debe seleccionar al menos una opción'
     //                }
     //            }
     //        },

     //        'data[Encuesta][pregunta_28]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

     //        'data[Encuesta][pregunta_28][Si][]': {
     //            validators: {
     //                choice: {
     //                    min: 1,
     //                    message: 'Debe seleccionar al menos una opción'
     //                }
     //            }
     //        },

     //        'data[Encuesta][pregunta_29]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

     //        'data[Encuesta][pregunta_30][]': {
     //            validators: {
     //                choice: {
     //                    min: 1,
     //                    message: 'Debe seleccionar al menos una opción'
     //                }
     //            }
     //        },

     //        'data[Encuesta][pregunta_31][]': {
     //            validators: {
     //                choice: {
     //                    min: 1,
     //                    message: 'Debe seleccionar al menos una opción'
     //                }
     //            }
     //        },

     //        'data[Encuesta][pregunta_32]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_33]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

	   	// 	'data[Encuesta][pregunta_34][]': {
     //            validators: {
     //                choice: {
     //                    min: 1,
     //                    message: 'Debe seleccionar al menos una opción'
     //                }
     //            }
     //        },

     //  		'data[Encuesta][pregunta_35]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_35][Si]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_36]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_37]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_38]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_39]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_40]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_41]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

     //  		'data[Encuesta][pregunta_42]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_43]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_44]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_45]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_46]': {
    	// 		validators: {
    	// 			notEmpty: {
    	// 				message: 'Debe seleccionar una opción'
    	// 			}
    	// 		}
    	// 	},

    	// 	'data[Encuesta][pregunta_47][Si][]': {
     //            validators: {
     //                choice: {
     //                    min: 1,
     //                    message: 'Debe seleccionar al menos una opción'
     //                }
     //            }
     //        }

    	// }
    });

});