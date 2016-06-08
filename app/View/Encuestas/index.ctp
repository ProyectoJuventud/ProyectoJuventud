

<div class="container">

	<h2> Juventud </h2>

	<?php echo $this->Form->create('Encuestas'); ?>

		<div class="row">

			<div class="form-group">
			<label class="col-xs-12 control-label">Edad </label>

			<div class="col-xs-12 col-sm-5">
				<select id="select_pregunta_1" name="data[Encuesta][pregunta_1]" class="form-control">

						<option selected disabled value="">Elija una opcion..</option>
						<option value="1">15 a 18</option>
						<option value="2">18 a 24</option>
						<option value="3">25 a 29</option>
				</select>
			</div>

			</div>
		</div>


		<!-- ///////////////////////////////////////////////////////////////////////////////// -->

		<div class="row">

			<div class="form-group">
			<label class="col-xs-12 control-label">Estudias? </label>

			<div class="col-xs-12 col-sm-5">
				<select id="select_pregunta_7" class="form-control">

						<option selected disabled value="">Elija una opcion..</option>
						<option value="Si">Si</option>
						<option value="No">No</option>
				</select>
			</div>

			</div>
		</div>

		<div class="row">

			<div class= "option_pregunta_7_si" style="display:none">  <input type="radio"  name="data[Encuesta][pregunta_7]" value="1"> Primario </div>
			<div class= "option_pregunta_7_si" style="display:none">  <input type="radio"  name="data[Encuesta][pregunta_7]" value="2"> Secundario  </div>
			<div class= "option_pregunta_7_si" style="display:none">  <input type="radio"  name="data[Encuesta][pregunta_7]" value="3"> Terciario/Uni </div>
			<div class= "option_pregunta_7_si" style="display:none">  <input type="radio"  name="data[Encuesta][pregunta_7]" value="4"> Posgrado </div>
			<div class= "option_pregunta_7_si" style="display:none">  <input type="radio"  name="data[Encuesta][pregunta_7]" value="5"> Otros </div>

			<div class= "option_pregunta_7_no" style="display:none">  <input type="radio"  name="data[Encuesta][pregunta_7]" value="6"> Porque trabajo o estoy busncado trabajo </div>
			<div class= "option_pregunta_7_no" style="display:none">  <input type="radio"  name="data[Encuesta][pregunta_7]" value="7"> Porque ya concluí mis estudios </div>
			<div class= "option_pregunta_7_no" style="display:none">  <input type="radio"  name="data[Encuesta][pregunta_7]" value="8"> Porque la institución educativa esta muy lejos </div>
			<div class= "option_pregunta_7_no" style="display:none">  <input type="radio"  name="data[Encuesta][pregunta_7]" value="9"> Porque no puedo pagar los estudios</div>
			<div class= "option_pregunta_7_no" style="display:none">  <input type="radio"  name="data[Encuesta][pregunta_7]" value="10"> Porque no me interesa </div>
			<div class= "option_pregunta_7_no" style="display:none">  <input type="radio"  name="data[Encuesta][pregunta_7]" value="11"> Porque estoy esperando un hijo/cuidado de hijo/s </div>
			<div class= "option_pregunta_7_no" style="display:none">  <input type="radio"  name="data[Encuesta][pregunta_7]" value="12"> Por enfermedades o discapacidad  </div>
			<div class= "option_pregunta_7_no" style="display:none">  <input type="radio"  name="data[Encuesta][pregunta_7]" value="13"> Otro  </div>

		</div>


		<?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-sm btn-primary')); ?>

		<?php echo $this->Form->end(); ?>
</div>


<!-- //////////////////////////////////////////////////////////////////////////////////////////////////7 -->

<script type="text/javascript">

	$(document).ready(function () {

		var select_pregunta_7 = $('#select_pregunta_7');
		var option_pregunta_7_si = $('.option_pregunta_7_si');
		var option_pregunta_7_no = $('.option_pregunta_7_no');


		select_pregunta_7.change(function () {

			if ( $(this).val() == 'No' ){

				option_pregunta_7_si.fadeOut(400);
				option_pregunta_7_no.fadeIn(400);
			}

			else{

 				option_pregunta_7_no.fadeOut(400);
				option_pregunta_7_si.fadeIn(400);
			}
		});
	});

</script>