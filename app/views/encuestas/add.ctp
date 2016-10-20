<?php echo $this->addScript($this->Html->css('validation_client_side')); ?>
<?php echo $this->addScript($this->Html->css('styles_add')); ?>
<?php echo $this->addScript($this->Html->css('animate.min')); ?>


<?php echo $this->Html->script('validation_client_side', array('inline' => false, 'defer' => true)); ?>
<?php echo $this->Html->script('bootstrap_validation_client_side', array('inline' => false, 'defer' => true)); ?>

<?php echo $this->Html->script('codigoJquery_add', array('inline' => false, 'defer' => true)); ?>


<?php

// $this->Html->meta(array('property' => 'og:title', 'type' => 'meta', 'content' => 'Encuesta sobre las #JuventudesEntrerrianas'), NULL, array('inline' => false));

// $this->Html->meta(array('property' => 'og:site_name', 'type' => 'meta', 'content' => 'Secretaria de la Juventud del Gobierno de Entre Rios'), NULL, array('inline' => false));

// $this->Html->meta(array('property' => 'og:description', 'type' => 'meta', 'content' => 'Entrá y completá la encuesta sobre las #JuventudesEntrerrianas.'), NULL, array('inline' => false));

// $this->Html->meta(array('property' => 'og:image', 'type' => 'meta', 'content' => 'http://entrerios.gob.ar/juventud/images/diagnostico-juventudes-entrerrianas.png'), NULL, array('inline' => false));

// $this->Html->meta(array('property' => 'og:author', 'type' => 'meta', 'content' => 'https://www.facebook.com/JuventudesEntrerrianas'), NULL, array('inline' => false));


// $this->Html->meta(array('property' => 'twitter:card', 'type' => 'meta', 'content' => 'summary_large_image'), NULL, array('inline' => false));

// $this->Html->meta(array('property' => 'twitter:site', 'type' => 'meta', 'content' => '@juventudeser'), NULL, array('inline' => false));

// $this->Html->meta(array('property' => 'twitter:title', 'type' => 'meta', 'content' => 'Encuesta sobre las #JuventudesEntrerrianas'), NULL, array('inline' => false));


// $this->Html->meta(array('property' => 'twitter:description', 'type' => 'meta', 'content' => 'Entrá y completá la encuesta sobre las #JuventudesEntrerrianas.'), NULL, array('inline' => false));

// $this->Html->meta(array('property' => 'twitter:image:src', 'type' => 'meta', 'content' => 'http://entrerios.gob.ar/juventud/images/diagnostico-juventudes-entrerrianas.png'), NULL, array('inline' => false));

?>

<!-- ///////////////////////////    HEADER   /////////////////////// -->

<!-- <section id="Uno" class="wrapper">
	<div class="inner">

		<div class="logo">
			<a href='http://www.entrerios.gob.ar/juventud/'>
				<img src="http://entrerios.gob.ar/juventud/images/juventudes-entrerrianas.png"/>
				<?php //echo $this->Html->image('cti_final.jpg', $options = array('class' => 'imagen_cti'));  ?>
			</a>
		</div>
	</div>
</section> -->

<!-- ///////////////////////////////////////////////////////////////////// -->

<div class="container">

	<!-- /////////////////////////////   CONFIGURACION VENTANA MODAL ///////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <div class="modal fade" id="ventana_modal" tabindex="1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-md">

          <div class="modal-content">

            <!-- ///////////////////////////////////////////////-->

            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"> Cerrar </span></button>

              <h4 class="modal-title" id="ModalLabel"> Ingrese Contraseña </h4>

            </div> <!-- Fin de cabecera-->

            <!-- ///////////////////////////////////////////////-->

            <!-- Cuerpo del modal -->
            <div class="modal-body">

            	<?php echo $this->Form->create('Acceso', array('url' => array('controller' => 'encuestas', 'action' => 'verificar_acceso'))); ?>

            		<?php echo $this->Form->input('pass', array('label' => 'Contraseña',
            												    'class' => 'form-control',
            												    'id' => 'campo_pass',
            												    'type' => 'password',
            												    'autocomplete' => 'off'
            												)
					); ?>

            </div>

            <!-- ///////////////////////////////////////////////-->

            <!-- Aca el pie del formulario con los botones -->
            <div class="modal-footer">

            	<?php echo $form->submit('Aceptar', array('class' => 'btn btn-sm btn-danger')); ?>

				<?php echo $form->end();?>

            </div> <!--Cierro el footer -->


          </div> <!-- Cierro el "modal-content"-->
        </div> <!-- Cierro el "modal-dialog"-->

    </div> <!-- Cierro el "modal"-->


    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	<!-- <h2 class="text-center titulo_principal animated flipInX"> GRACIAS </h2> -->
	<!-- <h2 class="text-center subtitulo_principal animated slideInUp"> Por formar parte del diagnóstico de juventudes! </h2> -->

	<br />

	<?php echo $form->create('Encuesta', array('id' => 'form_encuesta')); ?>


	<!-- ////////////////////////////////    PREGUNTA  1   ///////////////////////////////////////////////// -->

	<!-- Algunas preguntas estan en formato de Cakephp para que le ande las validaciones server-side. Por alguna razon
	cuando estan en HTML puro no funcionan. No hago a todas en formato Cakephp poruqe es mucho viaje, solo a las mas faciles
	para que al menos si alguien desactiva javascript, no pueda submitear la encuesta (al menos si no respondio alguna
	de las preguntas que tienen validacion server.side).-->
	<div class="form-group has-feedback">

		<!--Es necesario tener el label aparte (en otra row), sino el icon de las validaciones client-side se ubica mal en
		las preguntas donde el texto del label es muy largo, asi que por las dudas lo hago separado en todas las preguntas -->
		<div class="row">
				<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_1"> 1) Edad </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<?php echo $form->input('pregunta_1', array(
															'id' => 'select_pregunta_1',
															'class' => 'form-control',
															'label' => false,
															'type' => 'select',
					  										'empty' => array(
																	        '' => array(
																	            'name' => 'Elija una opción..',
																	            'value' => '',
																	            'disabled' => true,
																	            'selected' => true
																	        )),
					  										'options' => array(
															            '1'=>'15 a 18 años',
														    			'2'=>'19 a 24 años',
														    			'3'=>'25 a 29 años'
														    )
				)); ?>

			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  2   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_2"> 2) Sexo </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<?php echo $form->input('pregunta_2', array(
															'id' => 'select_pregunta_2',
															'class' => 'form-control',
															'label' => false,
															'type' => 'select',
					  										'empty' => array(
																	        '' => array(
																	            'name' => 'Elija una opción..',
																	            'value' => '',
																	            'disabled' => true,
																	            'selected' => true
																	        )),
					  										'options' => array(
															            '1'=>'Masculino',
														    			'2'=>'Femenino'
														    )
				)); ?>

			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  3   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_3"> 3) Zona de Origen </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<?php echo $form->input('pregunta_3', array(
															'id' => 'select_pregunta_3',
															'class' => 'form-control',
															'label' => false,
															'type' => 'select',
					  										'empty' => array(
																	        '' => array(
																	            'name' => 'Elija una opción..',
																	            'value' => '',
																	            'disabled' => true,
																	            'selected' => true
																	        )),
					  										'options' => array(
															            '1'=>'Urbana',
														    			'2'=>'Rural'
														    )
				)); ?>

			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  4   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_4"> 4) Zona de Residencia </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<?php echo $form->input('pregunta_4', array(
															'id' => 'select_pregunta_4',
															'class' => 'form-control',
															'label' => false,
															'type' => 'select',
					  										'empty' => array(
																	        '' => array(
																	            'name' => 'Elija una opción..',
																	            'value' => '',
																	            'disabled' => true,
																	            'selected' => true
																	        )),
					  										'options' => array(
															            '1'=>'Urbana',
														    			'2'=>'Rural'
														    )
				)); ?>

			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  5   ///////////////////////////////////////////////// -->

	<!--  Esta como usa AJAX mejor ni la toco -->
	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_5"> 5) Departamento de Residencia </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_5" name="data[Encuesta][pregunta_5]" class="form-control">
					<option selected disabled value=""> Seleccione un Departamento.. </option>
				</select>
			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  6   ///////////////////////////////////////////////// -->

	<!--  Esta como usa AJAX mejor ni la toco -->
	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_6"> 6) Municipio de Residencia </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_6" name="data[Encuesta][pregunta_6]" class="form-control">
					<option selected disabled value=""> Seleccione un Municipio.. </option>
				</select>
			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  7   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_7"> 7) ¿Tenes hijos? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<?php echo $form->input('pregunta_7', array(
															'id' => 'select_pregunta_7',
															'class' => 'form-control',
															'label' => false,
															'type' => 'select',
					  										'empty' => array(
																	        '' => array(
																	            'name' => 'Elija una opción..',
																	            'value' => '',
																	            'disabled' => true,
																	            'selected' => true
																	        )),
					  										'options' => array(
															            '1'=>'Sí',
														    			'2'=>'No'
														    )
				)); ?>

			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  8   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_8"> 8) ¿Con quien vivis? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<?php echo $form->input('pregunta_8', array(
															'id' => 'select_pregunta_8',
															'class' => 'form-control',
															'label' => false,
															'type' => 'select',
					  										'empty' => array(
																	        '' => array(
																	            'name' => 'Elija una opción..',
																	            'value' => '',
																	            'disabled' => true,
																	            'selected' => true
																	        )),
					  										'options' => array(
															            '1'=>'Padres',
														    			'2'=>'Padre/Madre con su conyuge',
														    			'3'=>'Hermanos',
														    			'4'=>'Familiar',
														    			'5'=>'Hijos',
														    			'6'=>'Pareja',
														    			'7'=>'Pareja con sus hijos',
														    			'8'=>'Amigos',
														    			'9'=>'Solo',
														    			'10'=>'Otro',
														    )
				)); ?>

			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  9   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_9"> 9) ¿Estudias? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_9" name="data[Encuesta][pregunta_9]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="Si"> Sí </option>
					<option value="No"> No </option>
				</select>
			</div>
		</div>
	</div>

	<div class="form-group has-feedback" id="opciones_si_pregunta_9" style="display:none">

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<!-- La clase "opciones_radios" esta en Styles.css, ponindo esto mas a la derecha porque es un submodulo de la preg 7. -->
				<div class= "opciones_radios">

					<div> <input type="radio"  data-pregunta="radio_si_pregunta_9" name="data[Encuesta][pregunta_9][Si]" value="1"> Estudios Primarios </div>
					<div> <input type="radio"  data-pregunta="radio_si_pregunta_9" name="data[Encuesta][pregunta_9][Si]" value="2"> Estudios Secundarios </div>
					<div> <input type="radio"  data-pregunta="radio_si_pregunta_9" name="data[Encuesta][pregunta_9][Si]" value="3"> Estudios Terciarios/Universitarios </div>
					<div> <input type="radio"  data-pregunta="radio_si_pregunta_9" name="data[Encuesta][pregunta_9][Si]" value="4"> Estudios Posgrado </div>
					<div> <input type="radio"  data-pregunta="radio_si_pregunta_9" name="data[Encuesta][pregunta_9][Si]" value="5"> Otros </div>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group has-feedback" id="opciones_no_pregunta_9" style="display:none">

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<!-- La clase "opciones_radios" esta en Styles.css, ponindo esto mas a la derecha porque es un submodulo de la preg 7. -->
				<div class= "opciones_radios">

					<div> <input type="radio"  data-pregunta="radio_no_pregunta_9" name="data[Encuesta][pregunta_9][No]" value="6"> Porque trabajo o estoy buscando trabajo </div>
					<div> <input type="radio"  data-pregunta="radio_no_pregunta_9" name="data[Encuesta][pregunta_9][No]" value="7"> Porque ya concluí mis estudios </div>
					<div> <input type="radio"  data-pregunta="radio_no_pregunta_9" name="data[Encuesta][pregunta_9][No]" value="8"> Porque la Institución educativa está muy lejos</div>
					<div> <input type="radio"  data-pregunta="radio_no_pregunta_9" name="data[Encuesta][pregunta_9][No]" value="9"> Porque no puedo pagar los estudios </div>
					<div> <input type="radio"  data-pregunta="radio_no_pregunta_9" name="data[Encuesta][pregunta_9][No]" value="10"> Porque no me interesa </div>
					<div> <input type="radio"  data-pregunta="radio_no_pregunta_9" name="data[Encuesta][pregunta_9][No]" value="11"> Porque estoy esperando un hijo/cuidado de hijo/s </div>
					<div> <input type="radio"  data-pregunta="radio_no_pregunta_9" name="data[Encuesta][pregunta_9][No]" value="12"> Por enfermedad o discapacidad </div>
					<div> <input type="radio"  data-pregunta="radio_no_pregunta_9" name="data[Encuesta][pregunta_9][No]" value="13"> Otro </div>
				</div>
			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  10  (depende de 9) ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback" id="pregunta_10" style="display:none">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_10"> 10) ¿Te gustaría estudiar? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_10" name="data[Encuesta][pregunta_10]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="Si"> Sí </option>
					<option value="No"> No </option>
				</select>
			</div>
		</div>
	</div>

	<div class="form-group has-feedback" id="opciones_si_pregunta_10" style="display:none">

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<div class="opciones_radios">

					<div> <input type="radio"  data-pregunta="radio_si_pregunta_10"  name="data[Encuesta][pregunta_10][Si]" value="1"> Porque me aporataría saberes y conocimientos </div>
					<div> <input type="radio"  data-pregunta="radio_si_pregunta_10"  name="data[Encuesta][pregunta_10][Si]" value="2"> Porque conseguiría un mejor trabajo </div>
					<div> <input type="radio"  data-pregunta="radio_si_pregunta_10"  name="data[Encuesta][pregunta_10][Si]" value="3"> Otros </div>
				</div>
			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  11   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_11"> 11) ¿Elegiste o elegirías una carrera según? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_11" name="data[Encuesta][pregunta_11]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="1"> Gustos o deseos personales </option>
					<option value="2"> Para tener un mejor poder adquisitivo </option>
					<option value="3"> Tradicion familiar </option>
					<option value="4"> Cercania y/o bajos costos </option>
					<option value="5"> Otros </option>
				</select>
			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  12   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_12"> 12) ¿A que edad comenzaste a trabajar? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_12" name="data[Encuesta][pregunta_12]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="1"> Nunca he trabajado </option>
					<option value="2"> 15 a 18 años </option>
					<option value="3"> 19 a 24 años </option>
					<option value="4"> 25 a 29 años </option>
				</select>
			</div>
		</div>
	</div>


	<div id="bloque_13_14_15" style="display:none">

		<!-- ////////////////////////////////    PREGUNTA  13  (depende de 12) ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_13"> 13) ¿Como conseguiste tu primer trabajo? </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<select id="select_pregunta_13" name="data[Encuesta][pregunta_13]" class="form-control">
						<option selected disabled value=""> Elija una opción.. </option>
						<option value="1"> Presentación de CV en comercio/fábrica/empresa </option>
						<option value="2"> Páginas web a las cuales me suscribí </option>
						<option value="3"> Contacto por un familiar </option>
						<option value="4"> Contacto por un conocido </option>
						<option value="5"> Otros </option>
					</select>
				</div>
			</div>
		</div>

		<!-- ////////////////////////////////    PREGUNTA  14  (depende de 12)  ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_14"> 14) ¿Trabajaste el último mes? </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<select id="select_pregunta_14" name="data[Encuesta][pregunta_14]" class="form-control">
						<option selected disabled value=""> Elija una opción.. </option>
						<option value="Si"> Sí </option>
						<option value="No"> No </option>
					</select>
				</div>
			</div>
		</div>

		<div class="form-group has-feedback" id="opciones_si_pregunta_14" style="display:none">

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

					<div class="opciones_radios">

						<div> <input type="radio"  data-pregunta="radio_si_pregunta_14" name="data[Encuesta][pregunta_14][Si]" value="1"> Relación de dependencia Registrado (en blanco) </div>
						<div> <input type="radio"  data-pregunta="radio_si_pregunta_14" name="data[Encuesta][pregunta_14][Si]" value="2"> Relación de dependencia no Registrado (en negro) </div>
						<div> <input type="radio"  data-pregunta="radio_si_pregunta_14" name="data[Encuesta][pregunta_14][Si]" value="3"> Emprendimiento propio o familiar </div>
						<div> <input type="radio"  data-pregunta="radio_si_pregunta_14" name="data[Encuesta][pregunta_14][Si]" value="4"> Changas </div>
						<div> <input type="radio"  data-pregunta="radio_si_pregunta_14" name="data[Encuesta][pregunta_14][Si]" value="5"> Trabajo de limpieza, cuidado de niños, ancianos, casas </div>
						<div> <input type="radio"  data-pregunta="radio_si_pregunta_14" name="data[Encuesta][pregunta_14][Si]" value="6"> Otros </div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-group has-feedback" id="opciones_no_pregunta_14" style="display:none">

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

					<div class="opciones_radios">

						<div> <input type="radio"  data-pregunta="radio_no_pregunta_14" name="data[Encuesta][pregunta_14][No]" value="7"> Porque no busco trabajo </div>
						<div> <input type="radio"  data-pregunta="radio_no_pregunta_14" name="data[Encuesta][pregunta_14][No]" value="8"> No encontré lo que buscaba según mis requisitos</div>
						<div> <input type="radio"  data-pregunta="radio_no_pregunta_14" name="data[Encuesta][pregunta_14][No]" value="9"> Porque tengo que cuidar a un familiar </div>
						<div> <input type="radio"  data-pregunta="radio_no_pregunta_14" name="data[Encuesta][pregunta_14][No]" value="10"> Porque tengo que cuidar hijo/s </div>
						<div> <input type="radio"  data-pregunta="radio_no_pregunta_14" name="data[Encuesta][pregunta_14][No]" value="11"> Porque estoy esperando un hijo/s </div>
						<div> <input type="radio"  data-pregunta="radio_no_pregunta_14" name="data[Encuesta][pregunta_14][No]" value="12"> Por enfermedad o discapacidad </div>
						<div> <input type="radio"  data-pregunta="radio_no_pregunta_14" name="data[Encuesta][pregunta_14][No]" value="13"> Porque no me interesa </div>
						<div> <input type="radio"  data-pregunta="radio_no_pregunta_14" name="data[Encuesta][pregunta_14][No]" value="14"> Porque estoy estudiando </div>
						<div> <input type="radio"  data-pregunta="radio_no_pregunta_14" name="data[Encuesta][pregunta_14][No]" value="15"> Otros </div>
					</div>
				</div>
			</div>
		</div>

		<!-- ////////////////////////////////    PREGUNTA  15  (depende de 12)  ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_15"> 15) Elegiste tu trabajo según... </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<select id="select_pregunta_15" name="data[Encuesta][pregunta_15]" class="form-control">
						<option selected disabled value=""> Elija una opción.. </option>
						<option value="1"> Profesión/Conocimientos técnicos</option>
						<option value="2"> Posibilidades de hacer carrera</option>
						<option value="3"> Remuneración </option>
						<option value="4"> Flexibilidad horaria</option>
						<option value="5"> La oferta existente </option>
						<option value="6"> Tradición familiar  </option>
						<option value="7"> Otros </option>
					</select>
				</div>
			</div>
		</div>

	</div> <!-- Cierra bloque_13_14_15 -->


	<!-- ////////////////////////////////    PREGUNTA  16   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label id="label_pregunta_16" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_16"> 16) ¿Cuales crees que son las principales dificultades para conseguir trabajo? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<ul class="checkbox">
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_16" name="data[Encuesta][pregunta_16][]" value="1" /> Poca disponibilidad horaria   </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_16" name="data[Encuesta][pregunta_16][]" value="2" /> Poca oferta   </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_16" name="data[Encuesta][pregunta_16][]" value="3" /> Las Distancias </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_16" name="data[Encuesta][pregunta_16][]" value="4" /> Por cuidado de hijos  </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_16" name="data[Encuesta][pregunta_16][]" value="5" /> Porque tengo una discapacidad  </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_16" name="data[Encuesta][pregunta_16][]" value="6" /> Porque no me gusta lo que hay disponible </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_16" name="data[Encuesta][pregunta_16][]" value="7"/>  Otros </li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div id="mensaje_alerta_pregunta_16" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6"></div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  17 (depende de PREGUNTA 9)  ///////////////////////////////////////////////// -->

	<!-- Solo es visible si pregunta 9 es SI -->
	<div class="form-group has-feedback" id="pregunta_17" style="display:none">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_17"> 17) Para llegar a tu Institución Educativa demorás... </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_17" name="data[Encuesta][pregunta_17]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="1"> De 0 a 30 minutos </option>
					<option value="2"> 30 minutos a 1 hora </option>
					<option value="3"> De 1 a 2 horas </option>
					<option value="4"> Mas de 2 horas </option>
				</select>
			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  18   ///////////////////////////////////////////////// -->

	<!-- Solo es visible si pregunta 12 es value = 2, 3 o 4 -->
	<div class="form-group has-feedback" id="pregunta_18" style="display:none">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_18"> 18) Para llegar a tu trabajo demorás... </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_18" name="data[Encuesta][pregunta_18]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="1"> De 0 a 30 minutos </option>
					<option value="2"> 30 minutos a 1 hora </option>
					<option value="3"> De 1 a 2 horas </option>
					<option value="4"> Mas de 2 horas </option>
				</select>
			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  19   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label id="label_pregunta_19" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_19"> 19) ¿Participás en organizaciones? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<ul class="checkbox">
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_19" name="data[Encuesta][pregunta_19][Si][]" value="1" />  Políticas </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_19" name="data[Encuesta][pregunta_19][Si][]" value="2"/>  Religiosas </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_19" name="data[Encuesta][pregunta_19][Si][]" value="3"/>  Ambientales </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_19" name="data[Encuesta][pregunta_19][Si][]" value="4"/>  Humanitarias </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_19" name="data[Encuesta][pregunta_19][Si][]" value="5"/>  Culturales </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_19" name="data[Encuesta][pregunta_19][Si][]" value="6" />  Recreativas </li>
					<li>
						<input type ="checkbox"  data-pregunta= "check_pregunta_19" name="data[Encuesta][pregunta_19][Si][]" value="7" />
						Otras
						&nbsp;
						<input id= "input_text_pregunta_19" type="text" maxlength="40" data-toggle="tooltip"										  data-placement="right" title= "Hasta 40 caracteres" disabled placeholder="Especificar..." name="data[Encuesta][pregunta_19_otras]">
					</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div id="mensaje_alerta_pregunta_19" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6"></div>
		</div>

	</div>

	<!-- ////////////////////////////////    PREGUNTA  20   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_20"> 20) ¿Realizas algun deporte o actividad física? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_20" name="data[Encuesta][pregunta_20]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="Si"> Sí </option>
					<option value="No"> No </option>
				</select>
			</div>
		</div>
	</div>

	<div class="form-group has-feedback" id="opciones_si_pregunta_20" style="display:none">

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<div class="opciones_radios">

					<div> <input type="radio"  data-pregunta="radio_si_pregunta_20"  name="data[Encuesta][pregunta_20][Si]" value="1"> 1 vez a la semana </div>
					<div> <input type="radio"  data-pregunta="radio_si_pregunta_20"  name="data[Encuesta][pregunta_20][Si]" value="2"> 2 o 3 veces a la semana </div>
					<div> <input type="radio"  data-pregunta="radio_si_pregunta_20"  name="data[Encuesta][pregunta_20][Si]" value="3"> Más de 3 veces a la semana </div>
				</div>
			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  21   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_21"> 21) ¿Tenes acceso a internet? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_21" name="data[Encuesta][pregunta_21]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="Si"> Sí </option>
					<option value="No"> No </option>
				</select>
			</div>
		</div>
	</div>


	<div id="bloque_22_23_24" style="display:none">

		<!-- ////////////////////////////////    PREGUNTA  22 (depende de 21)  ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<label id="label_pregunta_22" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_22"> 22) ¿Cuales son los principales sitios que visitas? </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<ul class="checkbox">
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_22" name="data[Encuesta][pregunta_22][]" value="1" />  Facebook </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_22" name="data[Encuesta][pregunta_22][]" value="2" />  Twitter </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_22" name="data[Encuesta][pregunta_22][]" value="3"/>  Instagram </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_22" name="data[Encuesta][pregunta_22][]" value="4"/>  Whatsapp </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_22" name="data[Encuesta][pregunta_22][]" value="5"/>  Skype </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_22" name="data[Encuesta][pregunta_22][]" value="6"/>  Correo electrónico </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_22" name="data[Encuesta][pregunta_22][]" value="7"/>  YouTube </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_22" name="data[Encuesta][pregunta_22][]" value="8"/>  Plataformas del trabajo </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_22" name="data[Encuesta][pregunta_22][]" value="9"/>  Bolsas de trabajo </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_22" name="data[Encuesta][pregunta_22][]" value="10"/> Facultad </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_22" name="data[Encuesta][pregunta_22][]" value="11"/> Ebooks </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_22" name="data[Encuesta][pregunta_22][]" value="12"/> Otros </li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div id="mensaje_alerta_pregunta_22" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6"></div>
			</div>
		</div>

		<!-- ////////////////////////////////    PREGUNTA  23 (depende de 21)  ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<label id="label_pregunta_23" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_23"> 23) ¿Desde donde te contectas? </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<ul class="checkbox">
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_23" name="data[Encuesta][pregunta_23][]" value="1" />  Casa </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_23" name="data[Encuesta][pregunta_23][]" value="2"/>  Escuela/Facultad </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_23" name="data[Encuesta][pregunta_23][]" value="3" />  Trabajo </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_23" name="data[Encuesta][pregunta_23][]" value="4"/>  Casa de un amigo/familiar </li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_23" name="data[Encuesta][pregunta_23][]" value="5"/>  Espacio público</li>
						<li><input type ="checkbox"  data-pregunta= "check_pregunta_23" name="data[Encuesta][pregunta_23][]" value="6"/>  Otros </li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div id="mensaje_alerta_pregunta_23" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6"></div>
			</div>
		</div>

		<!-- ////////////////////////////////    PREGUNTA  24 (depende de 21)  ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">
			<div class="row">
				<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_24"> 24) ¿Con que frecuencia te conectas? </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<select id="select_pregunta_24" name="data[Encuesta][pregunta_24]" class="form-control">
						<option selected disabled value=""> Elija una opción.. </option>
						<option value="1"> Ocasionalmente </option>
						<option value="2"> Periódicamente </option>
						<option value="3"> Diariamente </option>
					</select>
				</div>
			</div>
		</div>

	</div>  <!-- Cierra bloque 22,23,24 -->

	<!-- ////////////////////////////////    PREGUNTA  25   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_25"> 25) ¿Conoces algún centro de salud cercano a tu residencia? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<?php echo $form->input('pregunta_25', array(
															'id' => 'select_pregunta_25',
															'class' => 'form-control',
															'label' => false,
															'type' => 'select',
					  										'empty' => array(
																	        '' => array(
																	            'name' => 'Elija una opción..',
																	            'value' => '',
																	            'disabled' => true,
																	            'selected' => true
																	        )),
					  										'options' => array(
															            '1'=>'Sí',
														    			'2'=>'No'
														    )
				)); ?>

			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  26   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_26"> 26) Cuando necesitas atención médica o queres saber algo sobre la salud, cuidado del cuerpo, vas al... </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<?php echo $form->input('pregunta_26', array(
															'id' => 'select_pregunta_26',
															'class' => 'form-control',
															'label' => false,
															'type' => 'select',
					  										'empty' => array(
																	        '' => array(
																	            'name' => 'Elija una opción..',
																	            'value' => '',
																	            'disabled' => true,
																	            'selected' => true
																	        )),
					  										'options' => array(
															            '1'=>'Centro de Salud',
														    			'2'=>'Hospital',
														    			'3'=>'Clínica o consultorio privado',
														    			'4'=>'Consulta con un familiar/amigo',
														    			'5'=>'Busco soluciones en la Web',
														    			'6'=>'Ningun lado, me quedo en casa'

														    )
				)); ?>

			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  27   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_27"> 27) ¿Has participado o recibido información en talleres o charlas relacionadas a tu salud en los últimos 6 meses? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_27" name="data[Encuesta][pregunta_27]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="Si"> Sí </option>
					<option value="No"> No </option>
				</select>
			</div>
		</div>
	</div>

	<div class="form-group has-feedback" id="opciones_si_pregunta_27" style="display:none">

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<div class="opciones_checkbox">

					<ul class="checkbox">
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_27" name="data[Encuesta][pregunta_27][Si][]" value="1"> Metodos anticonceptivos y embarazo </li>
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_27" name="data[Encuesta][pregunta_27][Si][]" value="2"> Adicciones (alcohol, cigarrillos, drogas, etc) </li>
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_27" name="data[Encuesta][pregunta_27][Si][]" value="3"> Planificación familiar </li>
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_27" name="data[Encuesta][pregunta_27][Si][]" value="4"> Diversidad sexual </li>
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_27" name="data[Encuesta][pregunta_27][Si][]" value="5"> Enfermedades estacionales o epidemias </li>
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_27" name="data[Encuesta][pregunta_27][Si][]" value="6"> Violencias </li>
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_27" name="data[Encuesta][pregunta_27][Si][]" value="7"> 	    Otros
							&nbsp;
							<input id= "input_text_pregunta_27" type="text" maxlength="40" data-toggle="tooltip"										  data-placement="right" title= "Hasta 40 caracteres" disabled placeholder="Especificar..." name="data[Encuesta][pregunta_27_otras]">
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div id="mensaje_alerta_pregunta_27" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6"></div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  28   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_28"> 28) ¿Consideras que es importante que existan talleres o charlas relacionadas con tu salud? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_28" name="data[Encuesta][pregunta_28]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="Si"> Sí </option>
					<option value="No"> No </option>
				</select>
			</div>
		</div>
	</div>

	<div class="form-group has-feedback" id="opciones_si_pregunta_28" style="display:none">

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<div class="opciones_checkbox">

					<ul class="checkbox">
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_28" name="data[Encuesta][pregunta_28][Si][]" value="1"> Metodos anticonceptivos y embarazo </li>
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_28" name="data[Encuesta][pregunta_28][Si][]" value="2"> Adicciones (alcohol, cigarrillos, drogas, etc) </li>
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_28" name="data[Encuesta][pregunta_28][Si][]" value="3"> Planificación familiar </li>
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_28" name="data[Encuesta][pregunta_28][Si][]" value="4"> Diversidad sexual </li>
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_28" name="data[Encuesta][pregunta_28][Si][]" value="5"> Enfermedades estacionales o epidemias </li>
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_28" name="data[Encuesta][pregunta_28][Si][]" value="6"> Violencias </li>
						<li> <input type="checkbox"  data-pregunta= "check_pregunta_28" name="data[Encuesta][pregunta_28][Si][]" value="7">    	Otros
							&nbsp;
							<input id= "input_text_pregunta_28" type="text" maxlength="40" data-toggle="tooltip"										  data-placement="right" title= "Hasta 40 caracteres" disabled placeholder="Especificar..." name="data[Encuesta][pregunta_28_otras]">
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div id="mensaje_alerta_pregunta_28" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6"></div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  29   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_29"> 29) ¿A que edad tuviste tu primer relación sexual? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<?php echo $form->input('pregunta_29', array(
															'id' => 'select_pregunta_29',
															'class' => 'form-control',
															'label' => false,
															'type' => 'select',
					  										'empty' => array(
																	        '' => array(
																	            'name' => 'Elija una opción..',
																	            'value' => '',
																	            'disabled' => true,
																	            'selected' => true
																	        )),
					  										'options' => array(
															            '1'=>'Nunca',
														    			'2'=>'13 años',
														    			'3'=>'14 años',
														    			'4'=>'15 años',
														    			'5'=>'16 años',
														    			'6'=>'17 años',
														    			'7'=>'18 años o más',
														    )
				)); ?>

			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  30   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label id="label_pregunta_30" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_30"> 30) ¿Cuales de los siguientes métodos anticonceptivos crees que son eficientes? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<ul class="checkbox">
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_30" name="data[Encuesta][pregunta_30][]" value="1" />  Método del calendario </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_30" name="data[Encuesta][pregunta_30][]" value="2" />  Coito interrumpido </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_30" name="data[Encuesta][pregunta_30][]" value="3" />  Pastillas anticonceptivas </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_30" name="data[Encuesta][pregunta_30][]" value="4" />  Pastillas del "Dia despues" </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_30" name="data[Encuesta][pregunta_30][]" value="5" />  DIU </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_30" name="data[Encuesta][pregunta_30][]" value="6" />  Parches </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_30" name="data[Encuesta][pregunta_30][]" value="7" />  Preservativos </li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div id="mensaje_alerta_pregunta_30" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6"></div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  31  ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label id="label_pregunta_31" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_31"> 31) ¿Cual utilizás frecuentemente? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<ul class="checkbox">
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_31" name="data[Encuesta][pregunta_31][]" value="1" />  Pastillas anticonceptivas </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_31" name="data[Encuesta][pregunta_31][]" value="2" />  Coito interrumpido </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_31" name="data[Encuesta][pregunta_31][]" value="3" />  Pastillas del "Dia despues" </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_31" name="data[Encuesta][pregunta_31][]" value="4"/>  Método del calendario </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_31" name="data[Encuesta][pregunta_31][]" value="5"/>  DIU </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_31" name="data[Encuesta][pregunta_31][]" value="6" />  Parches </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_31" name="data[Encuesta][pregunta_31][]" value="7"/>  Preservativos </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_31" name="data[Encuesta][pregunta_31][]" value="8"/>  Ninguno de los anteriores </li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div id="mensaje_alerta_pregunta_31" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6"></div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  32  (Depende de 2 y 7)  ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback" id="pregunta_32" style="display:none">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_32"> 32) ¿Durante el embarazo te hiciste los chequeos correspondientes? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_32" name="data[Encuesta][pregunta_32]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="1"> Sí </option>
					<option value="2"> No </option>
					<option value="3"> No conozco cuales son </option>
				</select>
			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  33   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_33"> 33) ¿Cuando comienza la paternidad? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<?php echo $form->input('pregunta_33', array(
															'id' => 'select_pregunta_33',
															'class' => 'form-control',
															'label' => false,
															'type' => 'select',
					  										'empty' => array(
																	        '' => array(
																	            'name' => 'Elija una opción..',
																	            'value' => '',
																	            'disabled' => true,
																	            'selected' => true
																	        )),
					  										'options' => array(
															            '1'=>'Cuando se concibe al bebe',
														    			'2'=>'Durante el embarazo',
														    			'3'=>'Cuando nace',
														    			'4'=>'Cuando la mama lo decide',
														    )
				)); ?>

			</div>
		</div>
	</div>

	<!-- ////////////////////////////  ////    PREGUNTA  34   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label id="label_pregunta_34" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_34"> 34) ¿Que considerás como drogas? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<ul class="checkbox">
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_34" name="data[Encuesta][pregunta_34][]" value="1"/>  Cocaina </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_34" name="data[Encuesta][pregunta_34][]" value="2" />  Metanfetaminas </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_34" name="data[Encuesta][pregunta_34][]" value="3" />  Marihuana </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_34" name="data[Encuesta][pregunta_34][]" value="4" />  Paco </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_34" name="data[Encuesta][pregunta_34][]" value="5" />  Alcohol </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_34" name="data[Encuesta][pregunta_34][]" value="6"/>  Cigarrillos </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_34" name="data[Encuesta][pregunta_34][]" value="7"/>  Otras </li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div id="mensaje_alerta_pregunta_34" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6"></div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  35   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_35"> 35) ¿Consumís alguna de las anteriores? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_35" name="data[Encuesta][pregunta_35]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="Si"> Sí </option>
					<option value="No"> No </option>
				</select>
			</div>
		</div>
	</div>

	<div class="form-group has-feedback" id="opciones_si_pregunta_35" style="display:none">

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<div class="opciones_radios">

					<div> <input type="radio"  data-pregunta="radio_si_pregunta_35" name="data[Encuesta][pregunta_35][Si]" value="1"> 1 vez cada 6 meses </div>
					<div> <input type="radio"  data-pregunta="radio_si_pregunta_35" name="data[Encuesta][pregunta_35][Si]" value="2"> 1 vez al mes </div>
					<div> <input type="radio"  data-pregunta="radio_si_pregunta_35" name="data[Encuesta][pregunta_35][Si]" value="3"> 1 vez a la semana </div>
					<div> <input type="radio"  data-pregunta="radio_si_pregunta_35" name="data[Encuesta][pregunta_35][Si]" value="4"> 2 a 3 veces a la semana </div>
					<div> <input type="radio"  data-pregunta="radio_si_pregunta_35" name="data[Encuesta][pregunta_35][Si]" value="5"> Más de 3 veces por semana </div>
				</div>
			</div>
		</div>
	</div>


	<div id="bloque_36_37_38_39" style="display:none">

		<!-- ////////////////////////////////    PREGUNTA  36  (depende de 35)  ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_36"> 36) ¿A que edad comenzaste a consumir? </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<select id="select_pregunta_36" name="data[Encuesta][pregunta_36]" class="form-control">
						<option selected disabled value=""> Elija una opcion </option>
						<option value="1"> 15 a 18 años </option>
						<option value="2"> 19 a 24 años </option>
						<option value="3"> 25 a 29 años </option>
					</select>
				</div>
			</div>
		</div>

		<!-- ////////////////////////////////    PREGUNTA  37 (depende de 35)  ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_37"> 37) ¿En que lugar fue tu primer consumo? </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<select id="select_pregunta_37" name="data[Encuesta][pregunta_37]" class="form-control">
						<option selected disabled value=""> Elija una opción.. </option>
						<option value="1"> Sólo en casa </option>
						<option value="2"> En casa y con amigos </option>
						<option value="3"> En una fiesta fuera de casa </option>
						<option value="4"> Otros </option>
					</select>
				</div>
			</div>
		</div>

		<!-- ////////////////////////////////    PREGUNTA  38 (depende de 35)  ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_38"> 38) ¿Cual droga probaste por primera vez? </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<select id="select_pregunta_38" name="data[Encuesta][pregunta_38]" class="form-control">
						<option selected disabled value=""> Elija una opción.. </option>
						<option value="1"> Cocaina </option>
						<option value="2"> Metanfetaminas </option>
						<option value="3"> Marihuana </option>
						<option value="4"> Paco </option>
						<option value="5"> Alcohol </option>
						<option value="6"> Cigarrillos </option>
						<option value="7"> Otras </option>
					</select>
				</div>
			</div>
		</div>

		<!-- ////////////////////////////////    PREGUNTA  39  (depende de 35) ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_39"> 39) ¿Dónde y con quienes consumís? </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<select id="select_pregunta_39" name="data[Encuesta][pregunta_39]" class="form-control">
						<option selected disabled value=""> Elija una opción.. </option>
						<option value="1"> Solo en casa </option>
						<option value="2"> En casa y con amigos </option>
						<option value="3"> En una fiesta fuera de casa </option>
						<option value="4"> Otras </option>
					</select>
				</div>
			</div>
		</div>

	</div> <!-- cierra el bloque 36, 37, 38, 39 -->


	<!-- ////////////////////////////////    PREGUNTA  40   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_40"> 40) ¿Pensas que es un problema el consumo de drogas? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<?php echo $form->input('pregunta_40', array(
															'id' => 'select_pregunta_40',
															'class' => 'form-control',
															'label' => false,
															'type' => 'select',
					  										'empty' => array(
																	        '' => array(
																	            'name' => 'Elija una opción..',
																	            'value' => '',
																	            'disabled' => true,
																	            'selected' => true
																	        )),
					  										'options' => array(
															            '1'=>'Sí',
														    			'2'=>'No'
														    )
				)); ?>

			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  41   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label id="label_pregunta_41" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_41"> 41) ¿Considerás que pasaste por alguna situación de violencia física o psicologica? Seleccionar aquellas que creas más relevante </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<select id="select_pregunta_41" name="data[Encuesta][pregunta_41]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="1"> Nunca </option>
					<option value="2"> En casa  </option>
					<option value="3"> En la escuela/facultad  </option>
					<option value="4"> En el trabajo  </option>
					<option value="5"> En el barrio  </option>
					<option value="6"> En la organización a la que pertenezco  </option>
					<option value="7"> Otros  </option>
				</select>
			</div>
		</div>
	</div>


	<div id="bloque_42_43_44_45" style="display:none">

		<!-- ////////////////////////////////    PREGUNTA  42 (depende de 41)    ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_42"> 42) ¿Con que frecuencia? </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<select id="select_pregunta_42" name="data[Encuesta][pregunta_42]" class="form-control">
						<option selected disabled value=""> Elija una opción.. </option>
						<option value="1"> Al menos una vez </option>
						<option value="2"> Ocasionalmente </option>
						<option value="3"> Periodicamente</option>
					</select>
				</div>
			</div>
		</div>

		<!-- ////////////////////////////////    PREGUNTA  43 (depende de 41)    ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_43"> 43) ¿Considerás que es necesario hacer la denuncia? </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<select id="select_pregunta_43" name="data[Encuesta][pregunta_43]" class="form-control">
						<option selected disabled value=""> Elija una opción.. </option>
						<option value="1"> Sí </option>
						<option value="2"> No </option>
					</select>
				</div>
			</div>
		</div>

		<!-- ////////////////////////////////    PREGUNTA  44 (depende de 41)    ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_44"> 44) ¿Lo has denunciado? </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<select id="select_pregunta_44" name="data[Encuesta][pregunta_44]" class="form-control">
						<option selected disabled value=""> Elija una opción.. </option>
						<option value="1"> Sí </option>
						<option value="2"> No </option>
					</select>
				</div>
			</div>
		</div>

		<!-- ////////////////////////////////    PREGUNTA  45 (depende de 41)    ///////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_45"> 45) ¿Crees que es una problematica a tratar en ambas partes? </label>
			</div>

			<div class="row">
				<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
					<select id="select_pregunta_45" name="data[Encuesta][pregunta_45]" class="form-control">
						<option selected disabled value=""> Elija una opción.. </option>
						<option value="1"> Sí </option>
						<option value="2"> No </option>
					</select>
				</div>
			</div>
		</div>

	</div> <!-- Cierra bloque 42, 43, 44, 45 -->


	<!-- ////////////////////////////////    PREGUNTA  46   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_46"> 46) ¿Cual es el número a llamar en caso de violencia de género? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

				<?php echo $form->input('pregunta_46', array(
															'id' => 'select_pregunta_46',
															'class' => 'form-control',
															'label' => false,
															'type' => 'select',
					  										'empty' => array(
																	        '' => array(
																	            'name' => 'Elija una opción..',
																	            'value' => '',
																	            'disabled' => true,
																	            'selected' => true
																	        )),
					  										'options' => array(
															            '1'=>'144',
														    			'2'=>'111',
														    			'3'=>'110'
														    )
				)); ?>

			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  47   ///////////////////////////////////////////////// -->

	<div class="form-group has-feedback">

		<div class="row">
			<label id="label_pregunta_47" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6 control-label" for="select_pregunta_47"> 47) ¿Cuales consideras que son problemas de los jovenes? </label>
		</div>

		<div class="row">
			<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">
				<ul class="checkbox">
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_47" name="data[Encuesta][pregunta_47][Si][]" value="1" />  Adicciones </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_47" name="data[Encuesta][pregunta_47][Si][]" value="2" />  Primer empleo </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_47" name="data[Encuesta][pregunta_47][Si][]" value="3" />  Bulling </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_47" name="data[Encuesta][pregunta_47][Si][]" value="4" />  Maternidad/Paternidad temprana </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_47" name="data[Encuesta][pregunta_47][Si][]" value="5" />  En Diversidad sexual </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_47" name="data[Encuesta][pregunta_47][Si][]" value="6" />  Indigencia </li>
					<li><input type ="checkbox"  data-pregunta= "check_pregunta_47" name="data[Encuesta][pregunta_47][Si][]" value="7" />
						Otros
						&nbsp;
						<input id= "input_text_pregunta_47" type="text" maxlength="40" data-toggle="tooltip"										  data-placement="right" title= "Hasta 40 caracteres" disabled placeholder="Especificar..." name="data[Encuesta][pregunta_47_otras]">
					</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div id="mensaje_alerta_pregunta_47" class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6"></div>
		</div>
	</div>

	<!-- ////////////////////////////////      FINAL DEL FORMULARIO   ///////////////////////////////////////////////// -->


	<div class="row boton_enviar">
		<div class="col-sm-offset-2 col-md-offset-3 col-xs-12 col-sm-8 col-md-6">

			<?php echo $this->Form->button('<span class="glyphicon glyphicon-send"></span> &nbsp; ENVIAR',

															    			 array('type' => 'submit',
										    										'escape' => false,
										    										'class'=>'btn btn-lg btn-primary',
																		));
									  		?>
		</div>
	</div>


	<?php echo $form->end();?>


	<div class="row boton_estadisticas">
		<div class="col-sm-offset-10 col-md-offset-10 col-xs-10 col-sm-2 col-md-2">

		<!-- link para poder llamar al VENTANA MODAL -->
		<?php echo $this->Html->link('<i class="glyphicon glyphicon-alert"></i> &nbsp; Estadisticas', array('controller' => '#', 'action' => '#'),
                                                  array('type' => 'button',
                                                        'class' => 'btn btn-warning btn-md',

                                                        'data-toggle' => 'modal',
                                                        'data-target' => '#ventana_modal',
                                                        'escape' => false));  ?>

		</div>
	</div>


</div> <!-- Cierra CONTAINER -->



<!-- ///////////////////////////////////////////////////     FOOTER   /////////////////////////////////////////////////////////// -->


<!-- <section id="footer">
	<div class="inner">
		<p class="zeromargin" style="width:100%;">
			<a href="http://www.entrerios.gob.ar/juventud"><img src="http://entrerios.gob.ar/juventud/images/juventudes-entrerrianas.png" alt="Secretaria de la Juventud Entre Ríos"/></a><br>Los contenidos de este sitio están licenciados bajo <a href="https://creativecommons.org/licenses/by/2.5/ar/" style="color:rgb(215, 215, 215); ">Creative Commons Reconocimiento 2.5 Licencia Argentina</a>.</p>
	</div>
</section>
 -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////77 -->


<script type="text/javascript">

	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})

</script>