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


	<!-- /////////////////////////////////////     PREGUNTA 3 ////////////////////////////////////////////////////////////// -->



	<?php echo $this->Html->link('Volver', array('controller' => 'encuestas', 'action' => 'index'));?>

</div> <!-- Cierra CONTAINER -->