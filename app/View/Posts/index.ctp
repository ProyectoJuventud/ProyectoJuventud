<?php
	$this->Html->script('//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.0.min.js', array('inline' => false));
?>

<h2> Juventud </h2>


<div class="form-group">
	<label class="col-sm-3 col-md-2 control-label">Estudias? </label>

	<div class="col-sm-5 col-md-4">
		<select id="select_estudias" name="data[Encuesta][7_estudias]" class="form-control" required="">

				<option selected disabled value="">Elija una opcion..</option>
				<option value="Si">Si</option>
				<option value="No">No</option>
		</select>
	</div>
</div>

<div class= "option_estudias" style="display:none">  <input type="radio"  name="estudio" value="Primario"> Primario </div><br />
<div class= "option_estudias" style="display:none">  <input type="radio"  name="estudio" value="Secundario"> Secundario </div><br />
<div class= "option_estudias" style="display:none">  <input type="radio"  name="estudio" value="Terciario/Uni"> Terciario/Uni </div><br />
<div class= "option_estudias" style="display:none">  <input type="radio"  name="estudio" value="Posgrado"> Posgrado </div><br />
<div class= "option_estudias" style="display:none">  <input type="radio"  name="estudio" value="Otros"> Otros </div><br />


<script type="text/javascript">

	$(document).ready(function () {

		var select_estudias = $('#select_estudias');
		var option_estudias = $('.option_estudias');


		select_estudias.change(function () {

			if ( $(this).val() == '' || $(this).val() == 'No' ){

				 option_estudias.fadeOut(400);
			}

			else{

				 option_estudias.fadeIn(400);
			}
		});
	});

</script>
