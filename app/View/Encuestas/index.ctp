<!-- LLamado al archivo "webroot/css/styles.css". Poner ahi todos los estilos -->
<?php echo $this->Html->css('styles', array('inline' => false)); ?>

<!-- LLamado al archivo "webroot/js/codigoJquery.js". -->
<?php echo $this->Html->script('codigoJquery', array('inline' => false, 'defer' => true)); ?>


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

	<!-- ////////////////////////////////    PREGUNTA  2   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 2) Sexo </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_2" name="data[Encuestas][pregunta_2]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Femenino </option>
				<option value="2"> Masculino </option>
			</select>
		</div>
	</div>

	<br/>

	<!-- ////////////////////////////////    PREGUNTA  3   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 3) Zona de Origen </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_3" name="data[Encuestas][pregunta_3]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Urbana </option>
				<option value="2"> Rural </option>
			</select>
		</div>
	</div>

	<br/>

	<!-- ////////////////////////////////    PREGUNTA  4   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 4) Localidad de Residencia </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_4" name="data[Encuestas][pregunta_4]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Localidad 1 </option>
				<option value="2"> Localidad 2 </option>
			</select>
		</div>
	</div>

	<br/>

	<!-- ////////////////////////////////    PREGUNTA  5   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 5) Tenes hijos? </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_5" name="data[Encuestas][pregunta_5]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Si </option>
				<option value="2"> No </option>
			</select>
		</div>
	</div>

	<br/>

	<!-- ////////////////////////////////    PREGUNTA  6   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 6) Con quien vivis? </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_6" name="data[Encuestas][pregunta_6]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Padres </option>
				<option value="2"> Padre/Madre con su conyuge </option>
				<option value="3"> Hermanos </option>
				<option value="4"> Familiar </option>
				<option value="5"> Hijos </option>
				<option value="6"> Pareja </option>
				<option value="7"> Pareja con sus hijos </option>
				<option value="8"> Amigos </option>
				<option value="9"> Solo </option>
				<option value="10"> Otro </option>
			</select>
		</div>
	</div>

	<br/>

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

	<!-- ////////////////////////////////    PREGUNTA  8   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 8) Te gustaría estudiar? </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_8" class="form-control">
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

				<div class="opciones_si_pregunta_8" style="display:none">
					<div> <input type="radio"  name="data[Encuestas][pregunta_8]" value="1"> Porque me aporataria saberes y conocimientos </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_8]" value="2"> Porque conseguiria un mejor trabajo </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_8]" value="3"> Otros </div>
				</div>
			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  9   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 9) Elegiste o elegirías una carrera según? </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_9" name="data[Encuestas][pregunta_9]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Gustos o deseos personales </option>
				<option value="2"> Para tener un mejor poder adquisitivo </option>
				<option value="3"> Tradicion familiar </option>
				<option value="4"> Cercania y/o bajos costos </option>
				<option value="5"> Otros </option>
			</select>
		</div>
	</div>
	<br/>

	<!-- ////////////////////////////////    PREGUNTA  10   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 10) A que edad comenzaste a trabajar? </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_10" name="data[Encuestas][pregunta_10]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> 15 a 18 </option>
				<option value="2"> 19 a 24 </option>
				<option value="3"> 25 a 29 </option>
			</select>
		</div>
	</div>

	<br/>

	<!-- ////////////////////////////////    PREGUNTA  11   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 11) Como conseguiste tu primer trabajo? </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_11" name="data[Encuestas][pregunta_11]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Presentación de CV en comercio/fábrica/empresa </option>
				<option value="2"> Páginas web a las cuales me suscribí </option>
				<option value="3"> Contacto por un familiar </option>
				<option value="4"> Contacto por un conocido </option>
				<option value="5"> Otros </option>
			</select>
		</div>
	</div>

	<br/>

	<!-- ////////////////////////////////    PREGUNTA  12   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 12) Trabajaste el último mes? </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_12" class="form-control">
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

				<div class="opciones_si_pregunta_12" style="display:none">
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="1"> Relación de dependencia Registrado (en blanco) </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="2"> Relación de dependencia Registrado (en negro) </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="3"> Emprendimiento propio o familiar </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="4"> Changas </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="5"> Trabajo de limpieza, cuidado de niños, ancianos, casas </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="6"> Otros </div>
				</div>

				<div class="opciones_no_pregunta_12" style="display:none">
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="7"> Porque no busco trabajo </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="8"> No encontré lo que buscaba según mis requisitos</div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="9"> Porque tengo que cuidar a un familiar </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="10"> Porque tengo que cuidar hijo/s </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="11"> Porque estoy esperando un hijo/s </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="12"> Por enfermedad o discapacidad </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="13"> Porque no me interesa </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="14"> Porque estoy estudiando </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_12]" value="15"> Otros </div>
				</div>
			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  13   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 13) Cuáles son las principales dificultades para conseguirlo </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_13" name="data[Encuestas][pregunta_13]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Poca disponibilidad horaria </option>
				<option value="2"> Poca oferta </option>
				<option value="3"> Distancias </option>
				<option value="4"> Por cuidado de hijos </option>
				<option value="5"> Porque tengo una discapacidad </option>
				<option value="6"> Porque no me gusta lo que hay disponible </option>
				<option value="7"> Otros </option>
			</select>
		</div>
	</div>

	<br/>

	<!-- ////////////////////////////////    PREGUNTA  14   ///////////////////////////////////////////////// -->

	<div class="row">
		<label id="label_pregunta_14" class="col-xs-12"> 14) Elegiste tu trabajo según </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<ul class="checkbox">
				<li><input type ="checkbox"  value="1" name="data[Encuestas][pregunta_14][]"/>  Profesión/Conocimientos técnicos </li>
				<li><input type ="checkbox"  value="2" name="data[Encuestas][pregunta_14][]"/>  Posibilidades de hacer carrera </li>
				<li><input type ="checkbox"  value="3" name="data[Encuestas][pregunta_14][]"/>  Remuneración </li>
				<li><input type ="checkbox"  value="4" name="data[Encuestas][pregunta_14][]"/>  Flexibilidad horaria </li>
				<li><input type ="checkbox"  value="5" name="data[Encuestas][pregunta_14][]"/>  La oferta existente </li>
				<li><input type ="checkbox"  value="6" name="data[Encuestas][pregunta_14][]"/>  Tradición familiar </li>
				<li><input type ="checkbox"  value="7" name="data[Encuestas][pregunta_14][]"/>  Otros </li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div id="mensaje_alerta_pregunta_14" class="col-xs-12 col-md-5 col-sm-6"></div>
	</div>

	<br/>

	<!-- ////////////////////////////////    PREGUNTA  15   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 15) Para llegar a tu Institución Educativa demorás </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_15" name="data[Encuestas][pregunta_15]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> De 0 a 30 minutos </option>
				<option value="2"> 30 minutos a 1 hora </option>
				<option value="3"> De 1 a 2 horas </option>
				<option value="4"> Mas de 2 horas </option>
			</select>
		</div>
	</div>

	<br/>

	<!-- ////////////////////////////////    PREGUNTA  16   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 16) Para llegar a tu trabajo demorás </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_16" name="data[Encuestas][pregunta_16]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> De 0 a 30 minutos </option>
				<option value="2"> 30 minutos a 1 hora </option>
				<option value="3"> De 1 a 2 horas </option>
				<option value="4"> Mas de 2 horas </option>
			</select>
		</div>
	</div>

	<br/>

	<!-- ////////////////////////////////    PREGUNTA  17   ///////////////////////////////////////////////// -->

	<div class="row">
		<label id="label_pregunta_17" class="col-xs-12"> 17) Participás en organizaciones </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<ul class="checkbox">
				<li><input type ="checkbox"  value="1" name="data[Encuestas][pregunta_17][]"/>  Políticas </li>
				<li><input type ="checkbox"  value="2" name="data[Encuestas][pregunta_17][]"/>  Religiosas </li>
				<li><input type ="checkbox"  value="3" name="data[Encuestas][pregunta_17][]"/>  Ambientales </li>
				<li><input type ="checkbox"  value="4" name="data[Encuestas][pregunta_17][]"/>  Humanitarias </li>
				<li><input type ="checkbox"  value="5" name="data[Encuestas][pregunta_17][]"/>  Culturales </li>
				<li><input type ="checkbox"  value="6" name="data[Encuestas][pregunta_17][]"/>  Recreativas </li>
				<li><input type ="checkbox"  value="7" name="data[Encuestas][pregunta_17][]"/>  Otras </li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div id="mensaje_alerta_pregunta_17" class="col-xs-12 col-md-5 col-sm-6"></div>
	</div>

	<br/>

	<!-- ////////////////////////////////    PREGUNTA  18   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 18) Realizas algun deporte o actividad física </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_18" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="Si"> Sí </option>
				<option value="No"> No </option>
			</select>
		</div>
	</div>

	<br/>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<div class="opciones_radios">

				<div class="opciones_si_pregunta_18" style="display:none">
					<div> <input type="radio"  name="data[Encuestas][pregunta_18]" value="1"> 1 vez a la semana </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_18]" value="2"> 2 o 3 veces a la semana </div>
					<div> <input type="radio"  name="data[Encuestas][pregunta_18]" value="3"> Más de 3 veces a la semana </div>
				</div>
			</div>
		</div>
	</div>

	<!-- ////////////////////////////////    PREGUNTA  19   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 19) Tenes acceso a internet </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_19" name="data[Encuestas][pregunta_19]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Si </option>
				<option value="2"> No </option>
			</select>
		</div>
	</div>

	<br/>


	<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////    PARTE DANIEL ///////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


	<!-- ////////////////////////////////    PREGUNTA  20   ///////////////////////////////////////////////// -->

	<div class="row">
		<label id="label_pregunta_20" class="col-xs-12"> 20) Cuales son los principales sitios que visitas? </label>
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
		<label id="label_pregunta_21" class="col-xs-12"> 21) Desde donde te contectas? </label>
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
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_25][]" value="1"> Metodos anticonceptivos y embarazo </li>
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

	<div class="row">
		<label class="col-xs-12 col-md-5 col-sm-6"> 26) Considerias que es importante que existieran talleres o charlas relacionadas con tu salud? </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_26" class="form-control">
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

				<div class="opciones_si_pregunta_26" style="display:none">
					<ul class="checkbox">
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_26][]" value="1"> Metodos anticonceptivos y embarazo </li>
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_26][]" value="2"> Adicciones (alcohol, cigarrillos, drogas, etc) </li>
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_26][]" value="3"> Planificación familiar </li>
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_26][]" value="4"> Diversidad sexual </li>
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_26][]" value="5"> Enfermedades estacionales o epidemias </li>
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_26][]" value="6"> Violencias </li>
						<li> <input type="checkbox"  name="data[Encuestas][pregunta_26][]" value="7"> Otros </li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div id="mensaje_alerta_pregunta_26" class="col-xs-12 col-md-5 col-sm-6"></div>
	</div>

	<br />

	<!-- ////////////////////////////////    PREGUNTA  27   ///////////////////////////////////////////////// -->

	<div class="row">
		<label id="label_pregunta_27" class="col-xs-12"> 27) Cuales de los siguientes métodos son anticonceptivos eficientes? </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<ul class="checkbox">
				<li><input type ="checkbox"  value="1" name="data[Encuestas][pregunta_27][]"/>  Método del calendario </li>
				<li><input type ="checkbox"  value="2" name="data[Encuestas][pregunta_27][]"/>  Coito interrumpido </li>
				<li><input type ="checkbox"  value="3" name="data[Encuestas][pregunta_27][]"/>  Pastillas anticonceptivas </li>
				<li><input type ="checkbox"  value="4" name="data[Encuestas][pregunta_27][]"/>  Pastillas del "Dia despues" </li>
				<li><input type ="checkbox"  value="5" name="data[Encuestas][pregunta_27][]"/>  DIU </li>
				<li><input type ="checkbox"  value="6" name="data[Encuestas][pregunta_27][]"/>  Parches </li>
				<li><input type ="checkbox"  value="7" name="data[Encuestas][pregunta_27][]"/>  Preservativos </li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div id="mensaje_alerta_pregunta_27" class="col-xs-12 col-md-5 col-sm-6"></div>
	</div>

	<br />

	<!-- ////////////////////////////////    PREGUNTA  27-b   ///////////////////////////////////////////////// -->

	<div class="row">
		<label id="label_pregunta_27b" class="col-xs-12"> &nbsp; &nbsp; &nbsp; Cual utilizás frecuentemente? </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<ul class="checkbox">
				<li><input type ="checkbox"  value="1" name="data[Encuestas][pregunta_27b][]"/>  Pastillas anticonceptivas </li>
				<li><input type ="checkbox"  value="2" name="data[Encuestas][pregunta_27b][]"/>  Coito interrumpido </li>
				<li><input type ="checkbox"  value="3" name="data[Encuestas][pregunta_27b][]"/>  Pastillas del "Dia despues" </li>
				<li><input type ="checkbox"  value="4" name="data[Encuestas][pregunta_27b][]"/>  Método del calendario </li>
				<li><input type ="checkbox"  value="5" name="data[Encuestas][pregunta_27b][]"/>  DIU </li>
				<li><input type ="checkbox"  value="6" name="data[Encuestas][pregunta_27b][]"/>  Parches </li>
				<li><input type ="checkbox"  value="7" name="data[Encuestas][pregunta_27b][]"/>  Preservativos </li>
				<li><input type ="checkbox"  value="7" name="data[Encuestas][pregunta_27b][]"/>  Ninguo de los anteriores </li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div id="mensaje_alerta_pregunta_27b" class="col-xs-12 col-md-5 col-sm-6"></div>
	</div>

	<br />

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
		<label id="label_pregunta_30" class="col-xs-12"> 30) Que considerás como drogas? </label>
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

	<!-- ////////////////////////////////    PREGUNTA  32  (depende de 31)  ///////////////////////////////////////////////// -->

	<div id="bloque_32_33_34_35" style="display:none">

		<div class="row">
			<label class="col-xs-12"> 32) A que edad comenzaste a consumir? </label>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5 col-sm-6">
				<select id="select_pregunta_32" name="data[Encuestas][pregunta_32]" class="form-control">
					<option selected disabled value=""> Elija una opcion </option>
					<option value="1"> 15 a 18 </option>
					<option value="2"> 19 a 24 </option>
					<option value="3"> 25 a 29 </option>
				</select>
			</div>
		</div>

		<br />

		<!-- ////////////////////////////////    PREGUNTA  33 (depende de 31)  ///////////////////////////////////////////////// -->

		<div class="row">
			<label class="col-xs-12"> 33) En que lugar fue tu primer consumo? </label>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5 col-sm-6">
				<select id="select_pregunta_33" name="data[Encuestas][pregunta_33]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="1"> Sólo en casa </option>
					<option value="2"> En casa y con amigos </option>
					<option value="3"> En una fiesta fuera de casa </option>
					<option value="3"> Otros </option>
				</select>
			</div>
		</div>

		<br />

		<!-- ////////////////////////////////    PREGUNTA  34 (depende de 31)  ///////////////////////////////////////////////// -->

		<div class="row">
			<label class="col-xs-12"> 34) Cual droga probaste por primera vez? </label>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5 col-sm-6">
				<select id="select_pregunta_34" name="data[Encuestas][pregunta_34]" class="form-control">
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

		<br />

		<!-- ////////////////////////////////    PREGUNTA  35  (depende de 31) ///////////////////////////////////////////////// -->

		<div class="row">
			<label class="col-xs-12"> 35) Dónde y con quienes consumís? </label>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5 col-sm-6">
				<select id="select_pregunta_35" name="data[Encuestas][pregunta_35]" class="form-control">
					<option selected disabled value=""> Elija una opción.. </option>
					<option value="1"> Solo en casa </option>
					<option value="2"> En casa y con amigos </option>
					<option value="3"> En una fiesta fuera de casa </option>
					<option value="4"> Otras </option>
				</select>
			</div>
		</div>

		<br />

	</div>

	<!-- ////////////////////////////////    PREGUNTA  36   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 36) Pensas que es un problema el consumo de drogas? </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_36" name="data[Encuestas][pregunta_36]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> Sí </option>
				<option value="2"> No </option>
			</select>
		</div>

	</div>

	<br />

	<!-- ////////////////////////////////    PREGUNTA  37   ///////////////////////////////////////////////// -->

	<div class="row">
		<label id="label_pregunta_30" class="col-xs-12"> 37) Considerás que pasaste por alguna situación de violencia física o psicologica?      </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<ul class="checkbox">
				<li><input type ="checkbox"  value="1" name="data[Encuestas][pregunta_37][]"/>  Nunca </li>
				<li><input type ="checkbox"  value="2" name="data[Encuestas][pregunta_37][]"/>  En casa </li>
				<li><input type ="checkbox"  value="3" name="data[Encuestas][pregunta_37][]"/>  En la escuela/facultad </li>
				<li><input type ="checkbox"  value="4" name="data[Encuestas][pregunta_37][]"/>  En el trabajo </li>
				<li><input type ="checkbox"  value="5" name="data[Encuestas][pregunta_37][]"/>  En el barrio </li>
				<li><input type ="checkbox"  value="6" name="data[Encuestas][pregunta_37][]"/>  En la organización a la que pertenezco </li>
				<li><input type ="checkbox"  value="6" name="data[Encuestas][pregunta_37][]"/>  Otros </li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div id="mensaje_alerta_pregunta_37" class="col-xs-12 col-md-5 col-sm-6"></div>
	</div>

	<br />

	<!-- ////////////////////////////////    PREGUNTA  38, 38b, 39, 40   ///////////////////////////////////////////////// -->

	<!-- Dependen de la pregunta 37! -->


	<!-- ////////////////////////////////    PREGUNTA  41   ///////////////////////////////////////////////// -->

	<div class="row">
		<label class="col-xs-12"> 41) Cual es el número a llamar en caso de violencia de gérero? </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<select id="select_pregunta_41" name="data[Encuestas][pregunta_41]" class="form-control">
				<option selected disabled value=""> Elija una opción.. </option>
				<option value="1"> 140 </option>
				<option value="2"> 111 </option>
				<option value="3"> 110 </option>
			</select>
		</div>
	</div>

	<br />

	<!-- ////////////////////////////////    PREGUNTA  42   ///////////////////////////////////////////////// -->

	<div class="row">
		<label id="label_pregunta_42" class="col-xs-12"> 42) Cuales consideras que son problemas de los jovenes? </label>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-5 col-sm-6">
			<ul class="checkbox">
				<li><input type ="checkbox"  value="1" name="data[Encuestas][pregunta_42][]"/>  Adicciones </li>
				<li><input type ="checkbox"  value="2" name="data[Encuestas][pregunta_42][]"/>  Primer empleo </li>
				<li><input type ="checkbox"  value="3" name="data[Encuestas][pregunta_42][]"/>  Bulling </li>
				<li><input type ="checkbox"  value="4" name="data[Encuestas][pregunta_42][]"/>  Maternidad/Paternidad temprana </li>
				<li><input type ="checkbox"  value="5" name="data[Encuestas][pregunta_42][]"/>  En Diversidad sexual </li>
				<li><input type ="checkbox"  value="6" name="data[Encuestas][pregunta_42][]"/>  Indigencia </li>
				<li><input type ="checkbox"  value="6" name="data[Encuestas][pregunta_42][]"/>  Otros </li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div id="mensaje_alerta_pregunta_42" class="col-xs-12 col-md-5 col-sm-6"></div>
	</div>

	<br />

	<!-- ////////////////////////////////      FINAL DEL FORMULARIO   ///////////////////////////////////////////////// -->

	<?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-sm btn-primary')); ?>

	<?php echo $this->Form->end(); ?>

</div> <!-- Cierra CONTAINER -->