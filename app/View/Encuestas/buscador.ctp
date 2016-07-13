<div class="container">

	<h2> Estadisticas </h2>

	<h4> Total encuestas: <?php echo $cantidadEncuestas; ?> </h4>

	<!-- /////////////////////////////////////     PREGUNTA 1 ////////////////////////////////////////////////////////////// -->

	<h4> 1) Edad </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th>15 a 18</th>
				<th>19 a 24</th>
				<th>25 a 29</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta1_opc1 ?> </td>
				<td> <?php echo $pregunta1_opc2 ?> </td>
				<td> <?php echo $pregunta1_opc3 ?> </td>
			</tr>
		</tbody>

	</table>

	<br />
	<!-- /////////////////////////////////////     PREGUNTA 2 ////////////////////////////////////////////////////////////// -->

	<h4> 2) Sexo </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th>Masculino</th>
				<th>Femenino</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta2_opc1 ?> </td>
				<td> <?php echo $pregunta2_opc2 ?> </td>
			</tr>
		</tbody>

	</table>

	<br />
	<!-- /////////////////////////////////////     PREGUNTA 3 ////////////////////////////////////////////////////////////// -->

	<h4> 3) Zona de origen </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Urbana </th>
				<th> Rural </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta3_opc1 ?> </td>
				<td> <?php echo $pregunta3_opc2 ?> </td>
			</tr>
		</tbody>

	</table>

	<br />
	<!-- /////////////////////////////////////     PREGUNTA 4 ////////////////////////////////////////////////////////////// -->

	<h4> 4) Zona de residencia </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Urbana </th>
				<th> Rural </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta4_opc1 ?> </td>
				<td> <?php echo $pregunta4_opc2 ?> </td>
			</tr>
		</tbody>

	</table>

	<br />
	<!-- /////////////////////////////////////     PREGUNTA 5 ////////////////////////////////////////////////////////////// -->

	<h4> 5) Departamento de residencia </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Colón </th>
				<th> Concordia </th>
				<th> Diamante </th>
				<th> Federacíon </th>
				<th> Federal </th>
				<th> Feliciano </th>
				<th> Gualeguay </th>
				<th> Gualeguachú </th>
				<th> Villa Paranacito </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta5_opc1 ?> </td>
				<td> <?php echo $pregunta5_opc2 ?> </td>
				<td> <?php echo $pregunta5_opc3 ?> </td>
				<td> <?php echo $pregunta5_opc4 ?> </td>
				<td> <?php echo $pregunta5_opc5 ?> </td>
				<td> <?php echo $pregunta5_opc6 ?> </td>
				<td> <?php echo $pregunta5_opc7 ?> </td>
				<td> <?php echo $pregunta5_opc8 ?> </td>
				<td> <?php echo $pregunta5_opc9 ?> </td>
			</tr>
		</tbody>

		<thead>
			<tr>
				<th> La Paz </th>
				<th> Nogoyá </th>
				<th> Paraná </th>
				<th> San Salvador </th>
				<th> Rosario del Tala </th>
				<th> Concepción del Uruguay </th>
				<th> Victoria </th>
				<th> Villaguay </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta5_opc10 ?> </td>
				<td> <?php echo $pregunta5_opc11 ?> </td>
				<td> <?php echo $pregunta5_opc12 ?> </td>
				<td> <?php echo $pregunta5_opc13 ?> </td>
				<td> <?php echo $pregunta5_opc14 ?> </td>
				<td> <?php echo $pregunta5_opc15 ?> </td>
				<td> <?php echo $pregunta5_opc16 ?> </td>
				<td> <?php echo $pregunta5_opc17 ?> </td>
			</tr>
		</tbody>
	</table>

	<br />
	<!-- /////////////////////////////////////     PREGUNTA 7 ////////////////////////////////////////////////////////////// -->

	<h4> 7) Hijos </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Con Hijos </th>
				<th> Sin Hijos </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta7_opc1 ?> </td>
				<td> <?php echo $pregunta7_opc2 ?> </td>
			</tr>
		</tbody>

	</table>

	<br />
	<!-- /////////////////////////////////////     PREGUNTA 8 ////////////////////////////////////////////////////////////// -->

	<h4> 8) Con quien vivis? </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Padres </th>
				<th> Sin Padre/Madre con su conyuge </th>
				<th> Hermanos </th>
				<th> Familiar </th>
				<th> Hijos </th>
				<th> Pareja </th>
				<th> Pareja con sus hijos </th>
				<th> Amigos </th>
				<th> Solo  </th>
				<th> Otros </th>

			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta8_opc1 ?> </td>
				<td> <?php echo $pregunta8_opc2 ?> </td>
				<td> <?php echo $pregunta8_opc3 ?> </td>
				<td> <?php echo $pregunta8_opc4 ?> </td>
				<td> <?php echo $pregunta8_opc5 ?> </td>
				<td> <?php echo $pregunta8_opc6 ?> </td>
				<td> <?php echo $pregunta8_opc7 ?> </td>
				<td> <?php echo $pregunta8_opc8 ?> </td>
				<td> <?php echo $pregunta8_opc9 ?> </td>
				<td> <?php echo $pregunta8_opc10 ?> </td>
			</tr>
		</tbody>

	</table>

	<br />
	<!-- /////////////////////////////////////     PREGUNTA 9 ////////////////////////////////////////////////////////////// -->

	<h4> 9) Estudias? </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Si </th>
				<th> No </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta9_Si ?> </td>
				<td> <?php echo $pregunta9_No ?> </td>
			</tr>
		</tbody>

	</table>

	<br />
	<!-- /////////////////////////////////////     PREGUNTA 9 SI y NO ////////////////////////////////////////////////////////////// -->

	<h4> Personas que SI estudian (<?php echo $pregunta9_Si ?>). Nivel: </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Estudios Primarios </th>
				<th> Estudios Secundarios </th>
				<th> Terciarios/Universitarios </th>
				<th> Posgrados </th>
				<th> Otros </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta9_Si_opc1 ?> </td>
				<td> <?php echo $pregunta9_Si_opc2 ?> </td>
				<td> <?php echo $pregunta9_Si_opc3 ?> </td>
				<td> <?php echo $pregunta9_Si_opc4 ?> </td>
				<td> <?php echo $pregunta9_Si_opc5 ?> </td>
			</tr>
		</tbody>

	</table>

	<h4> Personas que NO estudian (<?php echo $pregunta9_No ?>). Motivos: </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Trabajo o busco trabajo </th>
				<th> Concluí mis estudios </th>
				<th> La Institución educativa está muy lejos </th>
				<th> No puedo pagar los estudios </th>
				<th> No me interesa </th>
				<th> Estoy esperando un hijo/cuidado de hijo/s </th>
				<th> Enfermedad o discapacidad </th>
				<th> Otro </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta9_No_opc6 ?> </td>
				<td> <?php echo $pregunta9_No_opc7 ?> </td>
				<td> <?php echo $pregunta9_No_opc8 ?> </td>
				<td> <?php echo $pregunta9_No_opc9 ?> </td>
				<td> <?php echo $pregunta9_No_opc10 ?> </td>
				<td> <?php echo $pregunta9_No_opc11 ?> </td>
				<td> <?php echo $pregunta9_No_opc12 ?> </td>
				<td> <?php echo $pregunta9_No_opc13 ?> </td>
			</tr>
		</tbody>

	</table>

	<br />
	<!-- /////////////////////////////////////     PREGUNTA 10  ////////////////////////////////////////////////////////////// -->

	<h4> 10) En base a las personas que seleccionaron Que NO estudian (<?php echo $pregunta9_No ?>) </h4>

	<h4>Les gustarían estudiar? </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Si </th>
				<th> No </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta10_Si ?> </td>
				<td> <?php echo $pregunta10_No ?> </td>
			</tr>
		</tbody>

	</table>

	<h4> Personas que Si les gustaria estudiar (<?php echo $pregunta10_Si ?>). Motivos: </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Me aportaría sabers y conocimientos </th>
				<th> Conseguiría un mejor trabajo </th>
				<th> Otros </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta10_Si_opc1 ?> </td>
				<td> <?php echo $pregunta10_Si_opc2 ?> </td>
				<td> <?php echo $pregunta10_Si_opc3 ?> </td>
			</tr>
		</tbody>

	</table>

	<br />
	<!-- /////////////////////////////////////     PREGUNTA 11 ////////////////////////////////////////////////////////////// -->

	<h4> 11) Elegiste o eligirías una carrera según? </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Gustos o deseos personales </th>
				<th> Para tener un mejor poder adquisitivo </th>
				<th> Tradicion Familiar </th>
				<th> Cercania y/o bajos costos </th>
				<th> Otros </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta11_opc1 ?> </td>
				<td> <?php echo $pregunta11_opc2 ?> </td>
				<td> <?php echo $pregunta11_opc3 ?> </td>
				<td> <?php echo $pregunta11_opc4 ?> </td>
				<td> <?php echo $pregunta11_opc5 ?> </td>
			</tr>
		</tbody>

	</table>

	<br />
	<!-- /////////////////////////////////////     PREGUNTA 12 ////////////////////////////////////////////////////////////// -->

	<h4> 12) A que edad comenzaste a trabajar? </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Nunca he trabajado </th>
				<th> 15 a 18 </th>
				<th> 19 a 24 </th>
				<th> 25 a 29 </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta12_opc1 ?> </td>
				<td> <?php echo $pregunta12_opc2 ?> </td>
				<td> <?php echo $pregunta12_opc3 ?> </td>
				<td> <?php echo $pregunta12_opc4 ?> </td>
			</tr>
		</tbody>

	</table>
	<br />
	<!-- /////////////////////////////////////     PREGUNTA 13 (depende de 12) /////////////////////////////////////////////////////// -->

	<h4> De acuerdo a las personas que SI trabajan (<?php echo $pregunta12_Si ?>). </h4>
	<h4> 13) Como conseguiste tu primer trabajo? </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Presentando CV en comercio/fabrica/empresa </th>
				<th> Páginas Web a las cuales me subscribí </th>
				<th> Contacto por un familiar </th>
				<th> Contacto por un conocido </th>
				<th> Otros </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta13_opc1 ?> </td>
				<td> <?php echo $pregunta13_opc2 ?> </td>
				<td> <?php echo $pregunta13_opc3 ?> </td>
				<td> <?php echo $pregunta13_opc4 ?> </td>
				<td> <?php echo $pregunta13_opc5 ?> </td>
			</tr>
		</tbody>

	</table>

	<br />
	<!-- /////////////////////////////////////     PREGUNTA 14 (depende de 12) ////////////////////////////////////////////////////// -->

	<h4> De acuerdo a las personas que SI trabajan (<?php echo $pregunta12_Si ?>). </h4>
	<h4> 14) Trabajaste el ultimo mes? </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Si </th>
				<th> No </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta14_Si ?> </td>
				<td> <?php echo $pregunta14_No ?> </td>
			</tr>
		</tbody>

	</table>

	<br />
	<!-- /////////////////////////////////////     PREGUNTA 14 SI y NO  ////////////////////////////////////////////////////////////// -->

	<h4> Personas que SI trabajaron el último mes (<?php echo $pregunta14_Si ?>). Tipo: </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> Relación de dependencia en blanco </th>
				<th> Relación de dependencia en negro </th>
				<th> Emprendimiento propio o familiar </th>
				<th> Changas </th>
				<th> Trabajos de limpieza, cuidado de niños, ancianos, etc </th>
				<th> Otros </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta14_Si_opc1 ?> </td>
				<td> <?php echo $pregunta14_Si_opc2 ?> </td>
				<td> <?php echo $pregunta14_Si_opc3 ?> </td>
				<td> <?php echo $pregunta14_Si_opc4 ?> </td>
				<td> <?php echo $pregunta14_Si_opc5 ?> </td>
				<td> <?php echo $pregunta14_Si_opc6 ?> </td>
			</tr>
		</tbody>

	</table>

	<h4> Personas que NO trabajaron el ultimo mes (<?php echo $pregunta14_No ?>). Motivos: </h4>
	<table class="table table-striped table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th> No busco trabajo </th>
				<th> No encontre lo que buscaba </th>
				<th> Tengo que cuidar a un familiar </th>
				<th> Tengo que cuidar hijo/s </th>
				<th> Estoy esperando un hijo/s </th>
				<th> Enfermedad o discapacidad </th>
				<th> No me interesa </th>
				<th> Estoy estudiando </th>
				<th> Otro </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <?php echo $pregunta14_No_opc7 ?> </td>
				<td> <?php echo $pregunta14_No_opc8 ?> </td>
				<td> <?php echo $pregunta14_No_opc9 ?> </td>
				<td> <?php echo $pregunta14_No_opc10 ?> </td>
				<td> <?php echo $pregunta14_No_opc11 ?> </td>
				<td> <?php echo $pregunta14_No_opc12 ?> </td>
				<td> <?php echo $pregunta14_No_opc13 ?> </td>
				<td> <?php echo $pregunta14_No_opc14 ?> </td>
				<td> <?php echo $pregunta14_No_opc15 ?> </td>
			</tr>
		</tbody>

	</table>

	<br />



	<?php echo $this->Html->link('Volver', array('controller' => 'encuestas', 'action' => 'index'));?>

</div> <!-- Cierra CONTAINER -->