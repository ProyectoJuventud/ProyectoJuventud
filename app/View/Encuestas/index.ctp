<!-- LLamado al archivo "webroot/css/styles.css". Poner ahi todos los estilos -->
<?php echo $this->Html->css('styles', array('inline' => false)); ?>


<div class="container">

	<h2> Encuesta Juventud </h2>

	<?php echo $this->Form->create('Encuestas'); ?>


	<!-- ////////////////////////////////    PREGUNTA  1   ///////////////////////////////////////////////// -->

	<div class="row">

		<label class="col-xs-12"> 1) Edad </label>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_1" name="data[Encuestas][pregunta_1]" class="form-control">

				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> 15 a 18 </option>
				<option value="2"> 19 a 24 </option>
				<option value="3"> 25 a 29 </option>
			</select>
		</div>

	</div>

	<br />

	<!-- ////////////////////////////////    PREGUNTA  7   ///////////////////////////////////////////////// -->

	<div class="row">

		<label class="col-xs-12"> 7) Estudias? </label>

	</div>


	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_7" class="form-control">

				<option selected disabled value=""> Elija una opción.. </option>
				<option value="Si"> Sí </option>
				<option value="No"> No </option>
			</select>

		</div>
	</div>

	<br />

	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">

			<!-- Este estilo esta definido en app/webroot/css/styles.css. Creo que sera comun para todas las preguntas donde al elegir una opcion, se despliegan otras opciones (como en este caso). Ver explicacion en styles.css-->
			<div class="opciones_radios">

				<div class="opciones_si_pregunta_7" style="display:none">

					<div> <input type="radio"  name="data[Encuestas][pregunta_7]" value="1"> Estudios Primarios </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_7]" value="2"> Estudios Secundarios </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_7]" value="3"> Estudios Terciarios/Universitarios </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_7]" value="4"> Estudios Posgrado </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_7]" value="5"> Otros </div>
				</div>

				<div class="opciones_no_pregunta_7" style="display:none">

					<div> <input type="radio"  name="data[Encuestas][pregunta_7]" value="6"> Porque trabajo o estoy buscando trabajo </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_7]" value="7"> Porque ya conclui mis estudios </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_7]" value="8"> Porque la Institución educativa está muy lejos</div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_7]" value="9"> Porque no puedo pagar los estudios </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_7]" value="10"> Porque no me interesa </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_7]" value="11"> Porque estoy esperando un hijo/cuidado de hijo/s </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_7]" value="12"> Por enfermedad o discapacidad </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_7]" value="13"> Otro </div>

				</div>
			</div>

		</div>
	</div>





	<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////    PARTE DANIEL ///////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


	<!-- ////////////////////////////////    PREGUNTA  20   ///////////////////////////////////////////////// -->

	<div class="row">

		<label id="label_pregunta_20" class="col-xs-12">
			20) Cuales son los principales sitios que visitas?
		</label>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">

			<ul class="checkbox">
				<li><input type ="checkbox"  value="1" name="data[Encuestas][pregunta_20][]"/>  Facebook </li>
				<li><input type ="checkbox"  value="2" name="data[Encuestas][pregunta_20][]"/>  Twitter </li>
				<li><input type ="checkbox"  value="3" name="data[Encuestas][pregunta_20][]"/>  Instagram </li>
				<li><input type ="checkbox"  value="4" name="data[Encuestas][pregunta_20][]"/>  Whatsapp </li>
				<li><input type ="checkbox"  value="5" name="data[Encuestas][pregunta_20][]"/>  Skype </li>
				<li><input type ="checkbox"  value="6" name="data[Encuestas][pregunta_20][]"/>  Correo electrónico </li>
				<li><input type ="checkbox"  value="7" name="data[Encuestas][pregunta_20][]"/>  YouTube </li>
				<li><input type ="checkbox"  value="8" name="data[Encuestas][pregunta_20][]"/>  Plataformas del trabajo </li>
				<li><input type ="checkbox"  value="9" name="data[Encuestas][pregunta_20][]"/>  Bolsas de trabajo </li>
				<li><input type ="checkbox"  value="10" name="data[Encuestas][pregunta_20][]"/> Facultad </li>
				<li><input type ="checkbox"  value="11" name="data[Encuestas][pregunta_20][]"/> Ebooks </li>
				<li><input type ="checkbox"  value="12" name="data[Encuestas][pregunta_20][]"/> Otros </li>
			</ul>

		</div>

	</div>

	<div class="row">

		<div id="mensaje_alerta_pregunta_20" class="col-xs-12 col-md-5 col-sm-6"></div>

	</div>

	<br />

	<!-- ////////////////////////////////    PREGUNTA  21   ///////////////////////////////////////////////// -->

	<div class="row">

		<label id="label_pregunta_21" class="col-xs-12">
			21) Desde donde te contectas?
		</label>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">

			<ul class="checkbox">
				<li><input type ="checkbox"  value="1" name="data[Encuestas][pregunta_21][]"/>  Casa </li>
				<li><input type ="checkbox"  value="2" name="data[Encuestas][pregunta_21][]"/>  Escuela/Facultad </li>
				<li><input type ="checkbox"  value="3" name="data[Encuestas][pregunta_21][]"/>  Trabajo </li>
				<li><input type ="checkbox"  value="4" name="data[Encuestas][pregunta_21][]"/>  Casa de un amigo/familiar </li>
				<li><input type ="checkbox"  value="5" name="data[Encuestas][pregunta_21][]"/>  Espacio público</li>
				<li><input type ="checkbox"  value="6" name="data[Encuestas][pregunta_21][]"/>  Otros </li>
			</ul>

		</div>
	</div>

	<div class="row">

		<div id="mensaje_alerta_pregunta_21" class="col-xs-12 col-md-5 col-sm-6"></div>

	</div>

	<br />

	<!-- ////////////////////////////////    PREGUNTA  22   ///////////////////////////////////////////////// -->

	<div class="row">

		<label class="col-xs-12"> 22) Con que frecuiencia te conectas? </label>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_22" name="data[Encuestas][pregunta_22]" class="form-control">

				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Ocasionalmente </option>
				<option value="2"> Periódicamente </option>
				<option value="3"> Diariamente </option>
			</select>
		</div>
	</div>

	<br />

	<!-- ////////////////////////////////    PREGUNTA  23   ///////////////////////////////////////////////// -->

	<div class="row">

		<label class="col-xs-12"> 23) Conoces algún centro de salud carcano a tu residencia? </label>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_23" name="data[Encuestas][pregunta_23]" class="form-control">

				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Sí </option>
				<option value="2"> No </option>
			</select>
		</div>
	</div>

	<br />


	<!-- ////////////////////////////////    PREGUNTA  24   ///////////////////////////////////////////////// -->

	<div class="row">

		<label class="col-xs-12 col-md-5 col-sm-6"> 24) Cuando necesitas atención médica o querpes saber algo sobre la salud, cuidado del cuerpo, vas al... </label>

	</div>


	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_24" class="form-control">

				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Centro de Salud </option>
				<option value="2"> Hospital </option>
				<option value="3"> Clínica o consultorio privado </option>
				<option value="4"> Consulta con un familiar/amigo </option>
				<option value="5"> Busco soluciones en la Web </option>
				<option value="6"> Ningun lado, me quedo en casa </option>
			</select>

		</div>
	</div>

	<br />


	<!-- ////////////////////////////////    PREGUNTA  25   ///////////////////////////////////////////////// -->

	<div class="row">

		<label class="col-xs-12 col-md-5 col-sm-6"> 25) Has participado o recibido información  en talleres o charlas relacionadas a tu salud en los últimos 6 meses? </label>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_25" class="form-control">

				<option selected disabled value=""> Elija una opción.. </option>
				<option value="Si"> Sí </option>
				<option value="No"> No </option>
			</select>

		</div>
	</div>

	<br />

	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">

			<div class="opciones_checkbox">

				<div class="opciones_si_pregunta_25" style="display:none">

					<ul class="checkbox">

						<li> <input type="checkbox"  name="data[Encuestas][pregunta_25][]" value="1"> Metodos anticonceptivos y embarazos </li>
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_25][]" value="2"> Adicciones (alcohol, cigarrillos, drogas, etc) </li>
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_25][]" value="3"> Planificación familiar </li>
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_25][]" value="4"> Diversidad sexual </li>
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_25][]" value="5"> Enfermedades estacionales o epidemias </li>
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_25][]" value="6"> Violencias </li>
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_25][]" value="7"> Otros </li>
					</ul>

				</div>
			</div>
		</div>
	</div>

	<div class="row">

		<div id="mensaje_alerta_pregunta_25" class="col-xs-12 col-md-5 col-sm-6"></div>

	</div>

	<br />


	<!-- ////////////////////////////////    PREGUNTA  26   ///////////////////////////////////////////////// -->

	<!-- que haces con la  opcion ESPECIFICAR CUALES???????? -->


	<!-- ////////////////////////////////    PREGUNTA  27   ///////////////////////////////////////////////// -->

	<!-- Son 2 preguntas o 1? son ambas de opciones multiples??? -->


	<!-- ////////////////////////////////    PREGUNTA  28   ///////////////////////////////////////////////// -->

	<div class="row">

		<label class="col-xs-12"> 28) Durante el embarazo te hiciste los chequeos correspondientes? </label>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_28" name="data[Encuestas][pregunta_28]" class="form-control">

				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Sí </option>
				<option value="2"> No </option>
				<option value="3"> No conozco cuales son </option>
			</select>
		</div>

	</div>

	<br />

	<!-- ////////////////////////////////    PREGUNTA  29   ///////////////////////////////////////////////// -->

	<div class="row">

		<label class="col-xs-12"> 29) Cuando comienza la paternidad? </label>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_29" name="data[Encuestas][pregunta_29]" class="form-control">

				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Cuando se concibe al bebe </option>
				<option value="2"> Durante el embarazo </option>
				<option value="3"> Cuando nace </option>
				<option value="4"> Cunado la mama lo dcide </option>
			</select>
		</div>

	</div>

	<br />


	<!-- ////////////////////////////////    PREGUNTA  30   ///////////////////////////////////////////////// -->

	<div class="row">

		<label id="label_pregunta_30" class="col-xs-12">
			30) Que considerás como drogas?
		</label>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">

			<ul class="checkbox">
				<li><input type ="checkbox"  value="1" name="data[Encuestas][pregunta_30][]"/>  Cocaina </li>
				<li><input type ="checkbox"  value="2" name="data[Encuestas][pregunta_30][]"/>  Metanfetaminas </li>
				<li><input type ="checkbox"  value="3" name="data[Encuestas][pregunta_30][]"/>  Marihuana </li>
				<li><input type ="checkbox"  value="4" name="data[Encuestas][pregunta_30][]"/>  Paco </li>
				<li><input type ="checkbox"  value="5" name="data[Encuestas][pregunta_30][]"/>  Alcohol </li>
				<li><input type ="checkbox"  value="6" name="data[Encuestas][pregunta_30][]"/>  Cigarrillos </li>
				<li><input type ="checkbox"  value="6" name="data[Encuestas][pregunta_30][]"/>  Otras </li>
			</ul>

		</div>
	</div>

	<div class="row">

		<div id="mensaje_alerta_pregunta_30" class="col-xs-12 col-md-5 col-sm-6"></div>

	</div>

	<br />

	<!-- ////////////////////////////////    PREGUNTA  31   ///////////////////////////////////////////////// -->

	<div class="row">

		<label class="col-xs-12"> 31) Consumís alguna de las anteriores? </label>

	</div>


	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_31" class="form-control">

				<option selected disabled value=""> Elija una opción.. </option>
				<option value="Si"> Sí </option>
				<option value="No"> No </option>
			</select>

		</div>
	</div>

	<br />

	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">

			<div class="opciones_radios">

				<div class="opciones_si_pregunta_31" style="display:none">

					<div> <input type="radio"  name="data[Encuestas][pregunta_31]" value="1"> 1 vez cada 6 meses </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_31]" value="2"> 1 vez al mes </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_31]" value="3"> 1 vez a la semana </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_31]" value="4"> 2 a 3 veces a la semana </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_31]" value="5"> Más de 3 veces por semana </div>
				</div>

			</div>

		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  32, 33, 34, 35 (dependen de 31)   ///////////////////////////////////////////////// -->





	<!-- ////////////////////////////////      FINAL DEL FORMULARIO   ///////////////////////////////////////////////// -->



	<?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-sm btn-primary')); ?>

	<?php echo $this->Form->end(); ?>

</div> <!-- Cierra CONTAINER -->



<!-- //////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////-->



<script type="text/javascript">

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

		disableCheckboxes('pregunta_25', 2);
	});


	////////////////////////////////    PREGUNTA  30   ////////////////////////////////////////////////

	$('input[name="data[Encuestas][pregunta_30][]"]').click(function () {

		disableCheckboxes('pregunta_30', 3);
	});


	////////////////////////////////    PREGUNTA  31   ////////////////////////////////////////////////

	var select_pregunta_31 = $('#select_pregunta_31');
	var opciones_si_pregunta_31 = $('.opciones_si_pregunta_31');

	select_pregunta_31.change(function () {

		if ( $(this).val() == 'No' ){

			opciones_si_pregunta_31.fadeOut(300);
		}


		else{
			opciones_si_pregunta_31.fadeIn(300);
		}
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

        	$('#mensaje_alerta_' + pregunta).html('<div class="estilo_mensaje maximo_seleccionado_' + pregunta +'" style="display:none"> <b>Advertencia: </b> No puede elegir más opciones');

        	$('.maximo_seleccionado_' + pregunta).fadeIn(500).delay(5000).fadeOut('slow');

        }

        else{
        	Allcheckboxes.attr('disabled', false);
        }
    };

    //////////////////////////////

});


</script>