<!-- LLamado al archivo "webroot/css/styles.css". Poner ahi todos los estilos -->
<?php echo $this->Html->css('styles', array('inline' => false)); ?>


<div class="container">

	<h2> Encuenta Juventud </h2>

	<?php echo $this->Form->create('Encuestas'); ?>


	<!-- ////////////////////////////////    PREGUNTA  1   ///////////////////////////////////////////////// -->

	<div class="row">

		<label class="col-xs-12"> 1) Edad </label>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_1" name="data[Encuestas][pregunta_1]" class="form-control">

				<option selected disabled value=""> Elija una opcion.. </option>
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

			<!-- Este estilo esta definido en app/webroot/css/styles.css. Creo que sera comun para todas las preguntas donde al elegir una opcion, se despliegan otras opciones (como en este caso).
			Lo que hace es meter un poquito para adentro las nuevas opciones para que se note que son opciones de la pregunta  -->
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

        	$('#mensaje_alerta_' + pregunta).html('<div class="maximo_seleccionado" style="display:none"> No puede elegir mas de ' +cantidad+ ' opciones');

        	$('.maximo_seleccionado').fadeIn(500).delay(5000).fadeOut('slow');

        }

        else{
        	Allcheckboxes.attr('disabled', false);
        }
    };

    //////////////////////////////

});


</script>