<?php echo $this->addScript($this->Html->css('styles_buscador')); ?>

<?php echo $this->Html->script('codigoJquery_buscador', array('inline' => false, 'defer' => true)); ?>


<div class="container">

	<h2> Filtros </h2>


	<?php echo $form->create('Filtro', array('url' => array('controller' => 'encuestas', 'action' => 'buscador'))); ?>

		<!-- /////////////////////////////////////     FILTRO EDAD  ////////////////////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<div class="col-xs-12 col-md-5 col-sm-6">

					<?php echo $this->Form->input('filtro_edad', array(
																'class' => 'form-control',
																'label' => 'Edad',
						  										'empty'=>'Sin filtro por Edad.. ',
																'options' => array(
															    '1'=>'15 a 18 años',
															    '2'=>'19 a 24 años',
															    '3'=>'25 a 29 años'
					))); ?>

				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     FILTRO SEXO  ////////////////////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<div class="col-xs-12 col-md-5 col-sm-6">

					<?php echo $this->Form->input('filtro_sexo', array(
																'class' => 'form-control',
																'label' => 'Sexo',
						  										'empty'=>'Sin filtro por Sexo.. ',
																'options' => array(
															    '1'=>'Masculino',
															    '2'=>'Femenino'
					))); ?>

				</div>
			</div>
		</div>


		<!-- /////////////////////////////////////     FILTRO ZONA RESIDENCIA   //////////////////////////////////////////////////////// -->

		<div class="form-group has-feedback">

			<div class="row">
				<div class="col-xs-12 col-md-5 col-sm-6">

					<?php echo $this->Form->input('filtro_zona_residencia', array(
																'class' => 'form-control',
																'label' => 'Zona de Residencia',
						  										'empty'=>'Sin filtro por Zona de Residencia.. ',
																'options' => array(
															    '1'=>'Urbana',
															    '2'=>'Rural'
					))); ?>

				</div>
			</div>
		</div>

		<!-- ////////////////////////////////    FILTRO DEPARTAMENTO   ///////////////////////////////////////////////// -->

		<?php if(isset($condicion_departamento_value)){ ?>
			<div class="departamento_seleccionado" id="<?php echo $condicion_departamento_value; ?>"></div>
		<?php } ?>

		<div class="form-group has-feedback">

			<div class="row">
				<div class="col-xs-12 col-md-5 col-sm-6">

					<?php echo $this->Form->input('filtro_departamento', array(
																'id' => 'filtro_departamento',
																'class' => 'form-control',
																'label' => 'Departamento',
																'type' => 'select',
						  										'empty'=>'Sin filtro por Departamento.. '

					)); ?>

				</div>
			</div>
		</div>

	<?php echo $form->submit('Buscar', array('class' => 'btn btn-sm btn-info')); ?>

	<?php echo $form->end();?>



	<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////     RESULTADO ESTADISTICAS   ///////////////////////////////////////// -->


	<br /><br />


	<?php if($cantidadEncuestas == 0){ ?>

		<h2> Resultados </h2>

		<h4> No se ha encontrado ninguna encuesta </h4>

	<?php } ?>

	<!-- //////////////////////////////////////////////// -->

	<?php if($cantidadEncuestas > 0){ ?>


		<h1><?php echo $this->Html->link('EXPORTAR', array('controller' => 'encuestas', 'action' => 'exportar')); ?></h1>


		<h2> Resultados </h2>

		<h4> Total encuestas encontradas: <?php echo $cantidadEncuestas; ?> </h4>


		<!-- /////////////////////////////////////     PREGUNTA 1 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 1) Edad </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>15 a 18 años</th>
							<td> <?php echo $pregunta1_opc1 ?> </td>
						</tr>
						<tr>
							<th>19 a 24 años</th>
							<td> <?php echo $pregunta1_opc2 ?> </td>
						</tr>
						<tr>
							<th>25 a 29 años</th>
							<td> <?php echo $pregunta1_opc3 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 2 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 2) Sexo </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>Masculino</th>
							<td> <?php echo $pregunta2_opc1 ?> </td>
						</tr>
						<tr>
							<th>Femenino</th>
							<td> <?php echo $pregunta2_opc2 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 3 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 3) Zona de origen </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Urbana </th>
							<td> <?php echo $pregunta3_opc1 ?> </td>
						</tr>
						<tr>
							<th> Rural </th>
							<td> <?php echo $pregunta3_opc2 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 4 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 4) Zona de residencia </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Urbana </th>
							<td> <?php echo $pregunta4_opc1 ?> </td>
						</tr>
						<tr>
							<th> Rural </th>
							<td> <?php echo $pregunta4_opc2 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 5 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 5) Departamento de residencia </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Colón </th>
							<td> <?php echo $pregunta5_opc1 ?> </td>
						</tr>
						<tr>
							<th> Concordia </th>
							<td><?php echo $pregunta5_opc2 ?>  </td>
						</tr>
						<tr>
							<th> Diamante </th>
							<td> <?php echo $pregunta5_opc3 ?> </td>
						</tr>
						<tr>
							<th> Federacíon </th>
							<td> <?php echo $pregunta5_opc4 ?> </td>
						</tr>
						<tr>
							<th> Federal </th>
							<td> <?php echo $pregunta5_opc5 ?>  </td>
						</tr>
						<tr>
							<th> Feliciano </th>
							<td> <?php echo $pregunta5_opc6 ?>  </td>
						</tr>
						<tr>
							<th> Gualeguay </th>
							<td> <?php echo $pregunta5_opc7 ?> </td>
						</tr>
						<tr>
							<th> Gualeguachú </th>
							<td> <?php echo $pregunta5_opc8 ?>  </td>
						</tr>
						<tr>
							<th> Villa Paranacito </th>
							<td>  <?php echo $pregunta5_opc9 ?> </td>
						</tr>
						<tr>
							<th> La Paz </th>
							<td> <?php echo $pregunta5_opc10 ?> </td>
						</tr>
						<tr>
							<th> Nogoyá </th>
							<td> <?php echo $pregunta5_opc11 ?> </td>

						</tr>
						<tr>
							<th> Paraná </th>
							<td> <?php echo $pregunta5_opc12 ?> </td>
						</tr>
						<tr>
							<th> San Salvador </th>
							<td> <?php echo $pregunta5_opc13 ?> </td>
						</tr>
						<tr>
							<th> Rosario del Tala </th>
							<td> <?php echo $pregunta5_opc14 ?> </td>
						</tr>
						<tr>
							<th> Concepción del Uruguay </th>
							<td> <?php echo $pregunta5_opc15 ?> </td>
						</tr>
						<tr>
							<th> Victoria </th>
							<td> <?php echo $pregunta5_opc16 ?> </td>
						</tr>
						<tr>
							<th> Villaguay </th>
							<td> <?php echo $pregunta5_opc17 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 7 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 7) Hijos </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Con Hijos </th>
							<td> <?php echo $pregunta7_opc1 ?> </td>
						</tr>
						<tr>
							<th> Sin Hijos </th>
							<td> <?php echo $pregunta7_opc2 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 8 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 8) Con quien vivis? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Padres </th>
							<td> <?php echo $pregunta8_opc1 ?> </td>
						</tr>
						<tr>
							<th> Sin Padre/Madre con su conyuge </th>
							<td> <?php echo $pregunta8_opc2 ?> </td>
						</tr>
						<tr>
							<th> Hermanos </th>
							<td> <?php echo $pregunta8_opc3 ?> </td>
						</tr>
						<tr>
							<th> Familiar </th>
							<td> <?php echo $pregunta8_opc4 ?> </td>
						</tr>
						<tr>
							<th> Hijos </th>
							<td> <?php echo $pregunta8_opc5 ?> </td>
						</tr>
						<tr>
							<th> Pareja </th>
							<td> <?php echo $pregunta8_opc6 ?> </td>
						</tr>
						<tr>
							<th> Pareja con sus hijos </th>
							<td> <?php echo $pregunta8_opc7 ?> </td>
						</tr>
						<tr>
							<th> Amigos </th>
							<td> <?php echo $pregunta8_opc8 ?> </td>
						</tr>
						<tr>
							<th> Solo  </th>
							<td> <?php echo $pregunta8_opc9 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta8_opc10 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 9 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 9) Estudias? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Si </th>
							<td> <?php echo $pregunta9_Si ?> </td>
						</tr>
						<tr>
							<th> No </th>
							<td> <?php echo $pregunta9_No ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 9 SI y NO ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> Personas que SI estudian (<?php echo $pregunta9_Si ?>). Nivel: </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">


						<tr>
							<th> Estudios Primarios </th>
							<td> <?php echo $pregunta9_Si_opc1 ?> </td>
						</tr>
						<tr>
							<th> Estudios Secundarios </th>
							<td> <?php echo $pregunta9_Si_opc2 ?> </td>
						</tr>
						<tr>
							<th> Terciarios/Universitarios </th>
							<td> <?php echo $pregunta9_Si_opc3 ?> </td>
						</tr>
						<tr>
							<th> Posgrados </th>
							<td> <?php echo $pregunta9_Si_opc4 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta9_Si_opc5 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> Personas que NO estudian (<?php echo $pregunta9_No ?>). Motivos: </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Trabajo o busco trabajo </th>
							<td> <?php echo $pregunta9_No_opc6 ?> </td>
						</tr>
						<tr>
							<th> Concluí mis estudios </th>
							<td> <?php echo $pregunta9_No_opc7 ?> </td>
						</tr>
						<tr>
							<th> La Institución educativa está muy lejos </th>
							<td> <?php echo $pregunta9_No_opc8 ?> </td>
						</tr>
						<tr>
							<th> No puedo pagar los estudios </th>
							<td> <?php echo $pregunta9_No_opc9 ?> </td>
						</tr>
						<tr>
							<th> No me interesa </th>
							<td> <?php echo $pregunta9_No_opc10 ?> </td>
						</tr>
						<tr>
							<th> Estoy esperando un hijo/cuidado de hijo/s </th>
							<td> <?php echo $pregunta9_No_opc11 ?> </td>
						</tr>
						<tr>
							<th> Enfermedad o discapacidad </th>
							<td> <?php echo $pregunta9_No_opc12 ?> </td>
						</tr>
						<tr>
							<th> Otro </th>
							<td> <?php echo $pregunta9_No_opc13 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 10  ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 10) En base a las personas que seleccionaron Que NO estudian (<?php echo $pregunta9_No ?>) </h4>

				<h4>Les gustarían estudiar? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Si </th>
							<td> <?php echo $pregunta10_Si ?> </td>
						</tr>
						<tr>
							<th> No </th>
							<td> <?php echo $pregunta10_No ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> Personas que Si les gustaria estudiar (<?php echo $pregunta10_Si ?>). Motivos: </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Me aportaría sabers y conocimientos </th>
							<td> <?php echo $pregunta10_Si_opc1 ?> </td>
						</tr>
						<tr>
							<th> Conseguiría un mejor trabajo </th>
							<td> <?php echo $pregunta10_Si_opc2 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta10_Si_opc3 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 11 ////////////////////////////////////////////////////////////// -->


		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 11) Elegiste o eligirías una carrera según? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Gustos o deseos personales </th>
							<td> <?php echo $pregunta11_opc1 ?> </td>
						</tr>
						<tr>
							<th> Para tener un mejor poder adquisitivo </th>
							<td> <?php echo $pregunta11_opc2 ?> </td>
						</tr>
						<tr>
							<th> Tradicion Familiar </th>
							<td> <?php echo $pregunta11_opc3 ?> </td>
						</tr>
						<tr>
							<th> Cercania y/o bajos costos </th>
							<td> <?php echo $pregunta11_opc4 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta11_opc5 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 12 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 12) A que edad comenzaste a trabajar? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Nunca he trabajado </th>
							<td> <?php echo $pregunta12_opc1 ?> </td>
						</tr>
						<tr>
							<th> 15 a 18 </th>
							<td> <?php echo $pregunta12_opc2 ?> </td>
						</tr>
						<tr>
							<th> 19 a 24 </th>
							<td> <?php echo $pregunta12_opc3 ?> </td>
						</tr>
						<tr>
							<th> 25 a 29 </th>
							<td> <?php echo $pregunta12_opc4 ?> </td>
						</tr>
					</table>

				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 13 (depende de 12) /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> De acuerdo a las personas que SI trabajan (<?php echo $pregunta12_Si ?>). </h4>
				<h4> 13) Como conseguiste tu primer trabajo? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Presentando CV en comercio/fabrica/empresa </th>
							<td> <?php echo $pregunta13_opc1 ?> </td>
						</tr>
						<tr>
							<th> Páginas Web a las cuales me subscribí </th>
							<td> <?php echo $pregunta13_opc2 ?> </td>
						</tr>
						<tr>
							<th> Contacto por un familiar </th>
							<td> <?php echo $pregunta13_opc3 ?> </td>
						</tr>
						<tr>
							<th> Contacto por un conocido </th>
							<td> <?php echo $pregunta13_opc4 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta13_opc5 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 14 (depende de 12) ////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> De acuerdo a las personas que SI trabajan (<?php echo $pregunta12_Si ?>). </h4>
				<h4> 14) Trabajaste el ultimo mes? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Si </th>
							<td> <?php echo $pregunta14_Si ?> </td>
						</tr>
						<tr>
							<th> No </th>
							<td> <?php echo $pregunta14_No ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 14 SI y NO  ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> Personas que SI trabajaron el último mes (<?php echo $pregunta14_Si ?>). Tipo: </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Relación de dependencia en blanco </th>
							<td> <?php echo $pregunta14_Si_opc1 ?> </td>
						</tr>
						<tr>
							<th> Relación de dependencia en negro </th>
							<td> <?php echo $pregunta14_Si_opc2 ?> </td>
						</tr>
						<tr>
							<th> Emprendimiento propio o familiar </th>
							<td> <?php echo $pregunta14_Si_opc3 ?> </td>
						</tr>
						<tr>
							<th> Changas </th>
							<td> <?php echo $pregunta14_Si_opc4 ?> </td>
						</tr>
						<tr>
							<th> Trabajos de limpieza, cuidado de niños, ancianos, etc </th>
							<td> <?php echo $pregunta14_Si_opc5 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta14_Si_opc6 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> Personas que NO trabajaron el ultimo mes (<?php echo $pregunta14_No ?>). Motivos: </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> No busco trabajo </th>
							<td> <?php echo $pregunta14_No_opc7 ?> </td>
						</tr>
						<tr>
							<th> No encontre lo que buscaba </th>
							<td> <?php echo $pregunta14_No_opc8 ?> </td>
						</tr>
						<tr>
							<th> Tengo que cuidar a un familiar </th>
							<td> <?php echo $pregunta14_No_opc9 ?> </td>
						</tr>
						<tr>
							<th> Tengo que cuidar hijo/s </th>
							<td> <?php echo $pregunta14_No_opc10 ?> </td>
						</tr>
						<tr>
							<th> Estoy esperando un hijo/s </th>
							<td> <?php echo $pregunta14_No_opc11 ?> </td>
						</tr>
						<tr>
							<th> Enfermedad o discapacidad </th>
							<td> <?php echo $pregunta14_No_opc12 ?> </td>
						</tr>
						<tr>
							<th> No me interesa </th>
							<td> <?php echo $pregunta14_No_opc13 ?> </td>
						</tr>
						<tr>
							<th> Estoy estudiando </th>
							<td> <?php echo $pregunta14_No_opc14 ?> </td>
						</tr>
						<tr>
							<th> Otro </th>
							<td> <?php echo $pregunta14_No_opc15 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 15 (depende de 12) /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> De acuerdo a las personas que SI trabajan (<?php echo $pregunta12_Si ?>). </h4>
				<h4> 15) Eligieron su trabajo según </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Profesión/Conocimientos técnicos </th>
							<td> <?php echo $pregunta15_opc1 ?> </td>
						</tr>
						<tr>
							<th> Posibilidades de hacer carrera </th>
							<td> <?php echo $pregunta15_opc2 ?> </td>
						</tr>
						<tr>
							<th> Remuneración </th>
							<td> <?php echo $pregunta15_opc3 ?> </td>
						</tr>
						<tr>
							<th> Flexibilidad horaria </th>
							<td> <?php echo $pregunta15_opc4 ?> </td>
						</tr>
						<tr>
							<th> La oferta existente </th>
							<td> <?php echo $pregunta15_opc5 ?> </td>
						</tr>
						<tr>
							<th> Tradición familiar </th>
							<td> <?php echo $pregunta15_opc6 ?> </td>
						</tr>
						<tr>
							<th> otros </th>
							<td> <?php echo $pregunta15_opc7 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 16 /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 16) Cuales crees que son las principales dificultades para conseguir trabajo  </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Poca disponibilidad horaria </th>
							<td> <?php echo $pregunta16_opc1 ?> </td>
						</tr>
						<tr>
							<th> Poca oferta </th>
							<td> <?php echo $pregunta16_opc2 ?> </td>
						</tr>
						<tr>
							<th> Las Distancias </th>
							<td> <?php echo $pregunta16_opc3 ?> </td>
						</tr>
						<tr>
							<th> Por cuidado de hijos  </th>
							<td> <?php echo $pregunta16_opc4 ?> </td>
						</tr>
						<tr>
							<th> Porque tengo una discapacidad </th>
							<td> <?php echo $pregunta16_opc5 ?> </td>
						</tr>
						<tr>
							<th> Porque no me gusta lo que hay disponible </th>
							<td> <?php echo $pregunta16_opc6 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta16_opc7 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>


		<!-- /////////////////////////////////////     PREGUNTA 17 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 17) Para llegar a tu Institución Educativa demorás...  </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> De 0 a 30 minutos</th>
							<td> <?php echo $pregunta17_opc1 ?> </td>
						</tr>
						<tr>
							<th> De 30 minutos a 1 hora </th>
							<td> <?php echo $pregunta17_opc2 ?> </td>
						</tr>
						<tr>
							<th> De 1 a 2 horas </th>
							<td> <?php echo $pregunta17_opc3 ?> </td>
						</tr>
						<tr>
							<th> Mas 2 horas </th>
							<td> <?php echo $pregunta17_opc4 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 18 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 18) Para llegar a tu trabajo demorás...  </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> De 0 a 30 minutos</th>
							<td> <?php echo $pregunta18_opc1 ?> </td>
						</tr>
						<tr>
							<th> De 30 minutos a 1 hora </th>
							<td> <?php echo $pregunta18_opc2 ?> </td>
						</tr>
						<tr>
							<th> De 1 a 2 horas </th>
							<td> <?php echo $pregunta18_opc3 ?> </td>
						</tr>
						<tr>
							<th> Mas 2 horas </th>
							<td> <?php echo $pregunta18_opc4 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 19 /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 19) Participás en organizaciones  </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Políticas  </th>
							<td> <?php echo $pregunta19_opc1 ?> </td>
						</tr>
						<tr>
							<th> Religiosas  </th>
							<td> <?php echo $pregunta19_opc2 ?> </td>
						</tr>
						<tr>
							<th> Ambientales </th>
							<td> <?php echo $pregunta19_opc3 ?> </td>
						</tr>
						<tr>
							<th> Humanitarias   </th>
							<td> <?php echo $pregunta19_opc4 ?> </td>
						</tr>
						<tr>
							<th> Culturales  </th>
							<td> <?php echo $pregunta19_opc5 ?> </td>
						</tr>
						<tr>
							<th> Recreativas  </th>
							<td> <?php echo $pregunta19_opc6 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta19_opc7 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 19 OTRAS /////////////////////////////////////////////////////// -->

		<!-- Si alguien ha escrito algo, muestro esto -->
		<?php if (isset($pregunta19_otras)){ ?>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-5">

					<h4> 19) Respuestas dadas por usuarios en campo OTROS  </h4>

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover table-condensed">

							<?php foreach ($pregunta19_otras as $respuesta_otras) { ?>

							<tr>
								<td> <?php echo $respuesta_otras ?> </td>
							</tr>

							<?php }?>

						</table>
					</div>
				</div>
			</div>

		<?php } ?>

		<!-- /////////////////////////////////////     PREGUNTA 20 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 20) Realizas algun deporte o actividad física?  </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Si </th>
							<td> <?php echo $pregunta20_Si ?> </td>
						</tr>
						<tr>
							<th> No </th>
							<td> <?php echo $pregunta20_No ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 20 (SI) ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> Personas que SI realizan algun deporte o actividad física? (<?php echo $pregunta20_Si ?>). Cantidad: </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> 1 vez a la semana </th>
							<td> <?php echo $pregunta20_Si_opc1 ?> </td>
						</tr>
						<tr>
							<th> 2 o 3 veces a la semana </th>
							<td> <?php echo $pregunta20_Si_opc2 ?> </td>
						</tr>
						<tr>
							<th> Más de 3 veces a la semana </th>
							<td> <?php echo $pregunta20_Si_opc3 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<br />

		<!-- /////////////////////////////////////     PREGUNTA 21 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 21) Tenes acceso a internet  </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Si </th>
							<td> <?php echo $pregunta21_Si ?> </td>
						</tr>
						<tr>
							<th> No </th>
							<td> <?php echo $pregunta21_No ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 22 /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 22) Cuales son los principales sitios que visitas?  </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Facebook </th>
							<td> <?php echo $pregunta22_opc1 ?> </td>
						</tr>
						<tr>
							<th> Twitter </th>
							<td> <?php echo $pregunta22_opc2 ?> </td>
						</tr>
						<tr>
							<th> Instagram </th>
							<td> <?php echo $pregunta22_opc3 ?> </td>
						</tr>
						<tr>
							<th> Whatsapp  </th>
							<td> <?php echo $pregunta22_opc4 ?> </td>
						</tr>
						<tr>
							<th> Skype </th>
							<td> <?php echo $pregunta22_opc5 ?> </td>
						</tr>
						<tr>
							<th> Correo electrónico </th>
							<td> <?php echo $pregunta22_opc6 ?> </td>
						</tr>
						<tr>
							<th> YouTube </th>
							<td> <?php echo $pregunta22_opc7 ?> </td>
						</tr>
						<tr>
							<th> Plataformas del trabajo </th>
							<td> <?php echo $pregunta22_opc8 ?> </td>
						</tr>
						<tr>
							<th> Bolsas de Trabajo  </th>
							<td> <?php echo $pregunta22_opc9 ?> </td>
						</tr>
						<tr>
							<th> Facultad </th>
							<td> <?php echo $pregunta22_opc10 ?> </td>
						</tr>
						<tr>
							<th> Ebooks </th>
							<td> <?php echo $pregunta22_opc11 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta22_opc12 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 23 /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 23) Desde donde te contectas?  </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Casa </th>
							<td> <?php echo $pregunta23_opc1 ?> </td>
						</tr>
						<tr>
							<th> Escuela/Facultad </th>
							<td> <?php echo $pregunta23_opc2 ?> </td>
						</tr>
						<tr>
							<th> Trabajo </th>
							<td> <?php echo $pregunta23_opc3 ?> </td>
						</tr>
						<tr>
							<th> Casa de un amigo/Familiar  </th>
							<td> <?php echo $pregunta23_opc4 ?> </td>
						</tr>
						<tr>
							<th> Espacio público </th>
							<td> <?php echo $pregunta23_opc5 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta23_opc6 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 24 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 24) Con que frecuiencia te conectas? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Ocasionalmente </th>
							<td> <?php echo $pregunta24_opc1 ?> </td>
						</tr>
						<tr>
							<th> Periódicamente </th>
							<td> <?php echo $pregunta24_opc2 ?> </td>
						</tr>
						<tr>
							<th> Diariamente </th>
							<td> <?php echo $pregunta24_opc3 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 25 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 25) Conoces algún centro de salud carcano a tu residencia? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Si </th>
							<td> <?php echo $pregunta25_opc1 ?> </td>
						</tr>
						<tr>
							<th> No </th>
							<td> <?php echo $pregunta25_opc2 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 26 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 26) Cuando necesitas atención médica o queres saber algo sobre la salud, cuidado del cuerpo, vas al... </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Centro de salud </th>
							<td> <?php echo $pregunta26_opc1 ?> </td>
						</tr>
						<tr>
							<th> Hospital </th>
							<td> <?php echo $pregunta26_opc2 ?> </td>
						</tr>
						<tr>
							<th> Clínica o consultorio privado </th>
							<td> <?php echo $pregunta26_opc3 ?> </td>
						</tr>
						<tr>
							<th> Consulta con un familiar/amigo </th>
							<td> <?php echo $pregunta26_opc4 ?> </td>
						</tr>
						<tr>
							<th> Busco soluciones en la web </th>
							<td> <?php echo $pregunta26_opc5 ?> </td>
						</tr>
						<tr>
							<th> Ningun lado, me quedo en casa </th>
							<td> <?php echo $pregunta26_opc6 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>


		<!-- /////////////////////////////////////     PREGUNTA 27 /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 27) Has participado o recibido información en talleres o charlas relacionadas a tu salud en los últimos 6 meses?  </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Metodos anticonceptivos y embarazo   </th>
							<td> <?php echo $pregunta27_opc1 ?> </td>
						</tr>
						<tr>
							<th> Adicciones (alcohol, cigarrillos, drogas, etc)   </th>
							<td> <?php echo $pregunta27_opc2 ?> </td>
						</tr>
						<tr>
							<th> Planificación familiar  </th>
							<td> <?php echo $pregunta27_opc3 ?> </td>
						</tr>
						<tr>
							<th> Diversidad sexual   </th>
							<td> <?php echo $pregunta27_opc4 ?> </td>
						</tr>
						<tr>
							<th> Enfermedades estacionales o epidemias   </th>
							<td> <?php echo $pregunta27_opc5 ?> </td>
						</tr>
						<tr>
							<th> Violencias  </th>
							<td> <?php echo $pregunta27_opc6 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta27_opc7 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 27 OTRAS /////////////////////////////////////////////////////// -->

		<!-- Si alguien ha escrito algo, muestro esto -->
		<?php if (isset($pregunta27_otras)){ ?>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-5">

					<h4> 27) Respuestas dadas por usuarios en campo OTROS  </h4>

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover table-condensed">

							<?php foreach ($pregunta27_otras as $respuesta_otras) { ?>

							<tr>
								<td> <?php echo $respuesta_otras ?> </td>
							</tr>

							<?php }?>

						</table>
					</div>
				</div>
			</div>

		<?php } ?>


		<!-- /////////////////////////////////////     PREGUNTA 28 /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 28) Considerias que es importante que existieran talleres o charlas relacionadas con tu salud?   </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Metodos anticonceptivos y embarazo   </th>
							<td> <?php echo $pregunta28_opc1 ?> </td>
						</tr>
						<tr>
							<th> Adicciones (alcohol, cigarrillos, drogas, etc)   </th>
							<td> <?php echo $pregunta28_opc2 ?> </td>
						</tr>
						<tr>
							<th> Planificación familiar  </th>
							<td> <?php echo $pregunta28_opc3 ?> </td>
						</tr>
						<tr>
							<th> Diversidad sexual   </th>
							<td> <?php echo $pregunta28_opc4 ?> </td>
						</tr>
						<tr>
							<th> Enfermedades estacionales o epidemias   </th>
							<td> <?php echo $pregunta28_opc5 ?> </td>
						</tr>
						<tr>
							<th> Violencias  </th>
							<td> <?php echo $pregunta28_opc6 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta28_opc7 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 28 OTRAS /////////////////////////////////////////////////////// -->

		<!-- Si alguien ha escrito algo, muestro esto -->
		<?php if (isset($pregunta28_otras)){ ?>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-5">

					<h4> 28) Respuestas dadas por usuarios en campo OTROS  </h4>

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover table-condensed">

							<?php foreach ($pregunta28_otras as $respuesta_otras) { ?>

							<tr>
								<td> <?php echo $respuesta_otras ?> </td>
							</tr>

							<?php }?>

						</table>
					</div>
				</div>
			</div>

		<?php } ?>

		<!-- /////////////////////////////////////     PREGUNTA 29 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 29) A que edad tuviste tu primer relación sexual? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Nunca </th>
							<td> <?php echo $pregunta29_opc1 ?> </td>
						</tr>
						<tr>
							<th> 13 </th>
							<td> <?php echo $pregunta29_opc2 ?> </td>
						</tr>
						<tr>
							<th> 14 </th>
							<td> <?php echo $pregunta29_opc3 ?> </td>
						</tr>
						<tr>
							<th> 15 </th>
							<td> <?php echo $pregunta29_opc4 ?> </td>
						</tr>
						<tr>
							<th> 16 </th>
							<td> <?php echo $pregunta29_opc5 ?> </td>
						</tr>
						<tr>
							<th> 17 </th>
							<td> <?php echo $pregunta29_opc6 ?> </td>
						</tr>
						<tr>
							<th> 18 o más </th>
							<td> <?php echo $pregunta29_opc7 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>


		<!-- /////////////////////////////////////     PREGUNTA 30 /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 30) Cuales de los siguientes métodos anticonceptivos crees que son eficientes?  </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Método del calendario </th>
							<td> <?php echo $pregunta30_opc1 ?> </td>
						</tr>
						<tr>
							<th> Coito interrumpido </th>
							<td> <?php echo $pregunta30_opc2 ?> </td>
						</tr>
						<tr>
							<th> Pastillas anticonceptivas </th>
							<td> <?php echo $pregunta30_opc3 ?> </td>
						</tr>
						<tr>
							<th> Pastillas del "Dia despues"  </th>
							<td> <?php echo $pregunta30_opc4 ?> </td>
						</tr>
						<tr>
							<th> DIU </th>
							<td> <?php echo $pregunta30_opc5 ?> </td>
						</tr>
						<tr>
							<th> Parches </th>
							<td> <?php echo $pregunta30_opc6 ?> </td>
						</tr>
						<tr>
							<th> Preservativos </th>
							<td> <?php echo $pregunta30_opc7 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 31 /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 31) Cuales de los siguientes métodos anticonceptivos crees que son eficientes?  </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Método del calendario </th>
							<td> <?php echo $pregunta31_opc1 ?> </td>
						</tr>
						<tr>
							<th> Coito interrumpido </th>
							<td> <?php echo $pregunta31_opc2 ?> </td>
						</tr>
						<tr>
							<th> Pastillas anticonceptivas </th>
							<td> <?php echo $pregunta31_opc3 ?> </td>
						</tr>
						<tr>
							<th> Pastillas del "Dia despues"  </th>
							<td> <?php echo $pregunta31_opc4 ?> </td>
						</tr>
						<tr>
							<th> DIU </th>
							<td> <?php echo $pregunta31_opc5 ?> </td>
						</tr>
						<tr>
							<th> Parches </th>
							<td> <?php echo $pregunta31_opc6 ?> </td>
						</tr>
						<tr>
							<th> Preservativos </th>
							<td> <?php echo $pregunta31_opc7 ?> </td>
						</tr>
						<tr>
							<th> Ninguno de los anteriores </th>
							<td> <?php echo $pregunta31_opc8 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 32 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 32) Durante el embarazo te hiciste los chequeos correspondientes?  </h4>
				<h5> Se aplica a personas que son mujeres y tuvieron hijos (<?php echo $pregunta32_Si ?>)  </h5>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Si </th>
							<td> <?php echo $pregunta32_opc1 ?> </td>
						</tr>
						<tr>
							<th> No </th>
							<td> <?php echo $pregunta32_opc2 ?> </td>
						</tr>
						<tr>
							<th> No conozco cuales son </th>
							<td> <?php echo $pregunta32_opc3 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 33 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 33) Cuando comienza la paternidad? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Cuando se concibe al bebe </th>
							<td> <?php echo $pregunta33_opc1 ?> </td>
						</tr>
						<tr>
							<th> Durante el embarazo </th>
							<td> <?php echo $pregunta33_opc2 ?> </td>
						</tr>
						<tr>
							<th> Cuando nace </th>
							<td> <?php echo $pregunta33_opc3 ?> </td>
						</tr>
						<tr>
							<th> Cuando la mama lo decide </th>
							<td> <?php echo $pregunta33_opc4 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 34 /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 34) Que considerás como drogas?  </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Cocaina </th>
							<td> <?php echo $pregunta34_opc1 ?> </td>
						</tr>
						<tr>
							<th> Metanfetaminas </th>
							<td> <?php echo $pregunta34_opc2 ?> </td>
						</tr>
						<tr>
							<th> Marihuana </th>
							<td> <?php echo $pregunta34_opc3 ?> </td>
						</tr>
						<tr>
							<th> Paco  </th>
							<td> <?php echo $pregunta34_opc4 ?> </td>
						</tr>
						<tr>
							<th> Alcohol </th>
							<td> <?php echo $pregunta34_opc5 ?> </td>
						</tr>
						<tr>
							<th> Cigarrillos </th>
							<td> <?php echo $pregunta34_opc6 ?> </td>
						</tr>
						<tr>
							<th> Otras </th>
							<td> <?php echo $pregunta34_opc7 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 35 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 35) Consumís alguna de las anteriores? </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Si </th>
							<td> <?php echo $pregunta35_Si ?> </td>
						</tr>
						<tr>
							<th> No </th>
							<td> <?php echo $pregunta35_No ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 35 (SI) ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> De acuerdo a las personas que SI consumen alguna droga (<?php echo $pregunta35_Si ?>). Cantidad: </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>  1 vez cada 6 meses </th>
							<td> <?php echo $pregunta35_Si_opc1 ?> </td>
						</tr>
						<tr>
							<th> 1 vez al mes </th>
							<td> <?php echo $pregunta35_Si_opc2 ?> </td>
						</tr>
						<tr>
							<th> 1 vez a la semana </th>
							<td> <?php echo $pregunta35_Si_opc3 ?> </td>
						</tr>
						<tr>
							<th> 2 a 3 veces a la semana </th>
							<td> <?php echo $pregunta35_Si_opc4 ?> </td>
						</tr>
						<tr>
							<th> Más de 3 veces por semana </th>
							<td> <?php echo $pregunta35_Si_opc5 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 36 (depende de 35) /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> De acuerdo a las personas que SI consumen alguna droga (<?php echo $pregunta35_Si ?>). </h4>
				<h4> 36) A que edad comenzaste a consumir? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> 15 a 18 </th>
							<td> <?php echo $pregunta36_opc1 ?> </td>
						</tr>
						<tr>
							<th> 19 a 24 </th>
							<td> <?php echo $pregunta36_opc2 ?> </td>
						</tr>
						<tr>
							<th> 25 a 29 </th>
							<td> <?php echo $pregunta36_opc3 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 37 (depende de 35) /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> De acuerdo a las personas que SI consumen alguna droga (<?php echo $pregunta35_Si ?>). </h4>
				<h4> 37) En que lugar fue tu primer consumo? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Solo en casa </th>
							<td> <?php echo $pregunta37_opc1 ?> </td>
						</tr>
						<tr>
							<th> En casa y con amigos </th>
							<td> <?php echo $pregunta37_opc2 ?> </td>
						</tr>
						<tr>
							<th> En una fiesta fuera de casa </th>
							<td> <?php echo $pregunta37_opc3 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta37_opc4 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 38 (depende de 35) /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> De acuerdo a las personas que SI consumen alguna droga (<?php echo $pregunta35_Si ?>). </h4>
				<h4> 38) Cual droga probaste por primera vez? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Cocaina </th>
							<td> <?php echo $pregunta38_opc1 ?> </td>
						</tr>
						<tr>
							<th> Metanfetaminas </th>
							<td> <?php echo $pregunta38_opc2 ?> </td>
						</tr>
						<tr>
							<th> Marihuana </th>
							<td> <?php echo $pregunta38_opc3 ?> </td>
						</tr>
						<tr>
							<th> Paco </th>
							<td> <?php echo $pregunta38_opc4 ?> </td>
						</tr>
						<tr>
							<th> Alcohol </th>
							<td> <?php echo $pregunta38_opc5 ?> </td>
						</tr>
						<tr>
							<th> Cigarrillos </th>
							<td> <?php echo $pregunta38_opc6 ?> </td>
						</tr>
						<tr>
							<th> Otras </th>
							<td> <?php echo $pregunta38_opc7 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 39 (depende de 35) /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> De acuerdo a las personas que SI consumen alguna droga (<?php echo $pregunta35_Si ?>). </h4>
				<h4> 39) Dónde y con quienes consumís? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Solo en casa </th>
							<td> <?php echo $pregunta39_opc1 ?> </td>
						</tr>
						<tr>
							<th> En casa y con amigos </th>
							<td> <?php echo $pregunta39_opc2 ?> </td>
						</tr>
						<tr>
							<th> En una fiesta fuera de casa </th>
							<td> <?php echo $pregunta39_opc3 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta39_opc4 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 40 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 40) Pensas que es un problema el consumo de drogas? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th> Si </th>
							<td> <?php echo $pregunta40_opc1 ?> </td>
						</tr>
						<tr>
							<th> No </th>
							<td> <?php echo $pregunta40_opc2 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 41 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 41) Considerás que pasaste por alguna situación de violencia física o psicologica? Seleccionar aquellas que creas más relevante </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Nunca </th>
							<td> <?php echo $pregunta41_opc1 ?> </td>
						</tr>
						<tr>
							<th> En casa </th>
							<td> <?php echo $pregunta41_opc2 ?> </td>
						</tr>
						<tr>
							<th> En la escuela/facultad </th>
							<td> <?php echo $pregunta41_opc3 ?> </td>
						</tr>
						<tr>
							<th> En el trabajo </th>
							<td> <?php echo $pregunta41_opc4 ?> </td>
						</tr>
						<tr>
							<th> En el barrio </th>
							<td> <?php echo $pregunta41_opc5 ?> </td>
						</tr>
						<tr>
							<th> En la organización a la que pertenezco </th>
							<td> <?php echo $pregunta41_opc6 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta41_opc7 ?> </td>
						</tr>
					</table>

				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 42 (depende de 41) /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> De acuerdo a las personas que SI pasaron por alguna situación de violencia física o psicologica (<?php echo $pregunta41_Si ?>). </h4>
				<h4> 42) Con que frecuencia? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Al menos una vez </th>
							<td> <?php echo $pregunta42_opc1 ?> </td>
						</tr>
						<tr>
							<th> Ocasionalmente </th>
							<td> <?php echo $pregunta42_opc2 ?> </td>
						</tr>
						<tr>
							<th> Periodicamente </th>
							<td> <?php echo $pregunta42_opc3 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 43 (depende de 41) /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> De acuerdo a las personas que SI pasaron por alguna situación de violencia física o psicologica (<?php echo $pregunta41_Si ?>). </h4>
				<h4> 43) Considerás que es necesario hacer la denuncia? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Si </th>
							<td> <?php echo $pregunta43_opc1 ?> </td>
						</tr>
						<tr>
							<th> No </th>
							<td> <?php echo $pregunta43_opc2 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 44 (depende de 41) /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> De acuerdo a las personas que SI pasaron por alguna situación de violencia física o psicologica (<?php echo $pregunta41_Si ?>). </h4>
				<h4> 44) Lo has denunciado? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Si </th>
							<td> <?php echo $pregunta44_opc1 ?> </td>
						</tr>
						<tr>
							<th> No </th>
							<td> <?php echo $pregunta44_opc2 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 45 (depende de 41) /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> De acuerdo a las personas que SI pasaron por alguna situación de violencia física o psicologica (<?php echo $pregunta41_Si ?>). </h4>
				<h4> 45) Crees que es una problematica a tratar en ambas partes? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Si </th>
							<td> <?php echo $pregunta45_opc1 ?> </td>
						</tr>
						<tr>
							<th> No </th>
							<td> <?php echo $pregunta45_opc2 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 46 ////////////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 46) Cual es el número a llamar en caso de violencia de género? </h4>

				<div class="table-responsive">

					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> 144 </th>
							<td> <?php echo $pregunta46_opc1 ?> </td>
						</tr>
						<tr>
							<th> 111 </th>
							<td> <?php echo $pregunta46_opc2 ?> </td>
						</tr>
						<tr>
							<th> 110 </th>
							<td> <?php echo $pregunta46_opc3 ?> </td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 47 /////////////////////////////////////////////////////// -->

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">

				<h4> 47) Cuales consideras que son problemas de los jovenes? </h4>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed">

						<tr>
							<th> Adicciones   </th>
							<td> <?php echo $pregunta47_opc1 ?> </td>
						</tr>
						<tr>
							<th> Primer empleo   </th>
							<td> <?php echo $pregunta47_opc2 ?> </td>
						</tr>
						<tr>
							<th> Bulling   </th>
							<td> <?php echo $pregunta47_opc3 ?> </td>
						</tr>
						<tr>
							<th> Maternidad/Paternidad temprana   </th>
							<td> <?php echo $pregunta47_opc4 ?> </td>
						</tr>
						<tr>
							<th> En Diversidad sexual   </th>
							<td> <?php echo $pregunta47_opc5 ?> </td>
						</tr>
						<tr>
							<th> Indigencia  </th>
							<td> <?php echo $pregunta47_opc6 ?> </td>
						</tr>
						<tr>
							<th> Otros </th>
							<td> <?php echo $pregunta47_opc7 ?> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- /////////////////////////////////////     PREGUNTA 47 OTRAS /////////////////////////////////////////////////////// -->

		<!-- Si alguien ha escrito algo, muestro esto. Solo llega a la vista si hay algo en esta variable. -->
		<?php if (isset($pregunta47_otras)){ ?>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-5">

					<h4> 47) Respuestas dadas por usuarios en campo OTROS  </h4>

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover table-condensed">

							<?php foreach ($pregunta47_otras as $respuesta_otras) { ?>

							<tr>
								<td> <?php echo $respuesta_otras ?> </td>
							</tr>

							<?php }?>

						</table>
					</div>
				</div>
			</div>

		<?php } ?>
	<?php } ?>



	<?php echo $this->Html->link('Volver', array('controller' => 'encuestas', 'action' => 'add'));?>

	<br /><br />

</div> <!-- Cierra CONTAINER -->