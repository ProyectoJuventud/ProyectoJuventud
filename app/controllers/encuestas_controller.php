<?php

	class EncuestasController extends AppController {

		var $name = 'Encuestas';



		public function getdepartamentos() {


			if($this->RequestHandler->isAjax()) {

				$this->autoRender = false;

				 $this->layout = 'ajax';


				$this->loadModel('Departamento');

				$this->Departamento->recursive = -1;

				$departamentos = $this->Departamento->find('all');

		  		echo json_encode($departamentos);
		  	}
		}



		public function GetMunicipioPorId(){

			if($this->RequestHandler->isAjax()) {

				$this->autoRender = false;

				 $this->layout = 'ajax';

				 // Recibe maaal el DATA
				if (!isset($this->data['DepartamentoId'])) {

					throw new BadRequestException();
				}

				$this->loadModel('Municipio');

				$this->Municipio->recursive = -1;

				$municipios = $this->Municipio->find('all',  array('conditions' => array('Municipio.id_departamento' => $this->data['DepartamentoId'])));

				echo json_encode($municipios);

	  		}
		}

		///////////////////////////////////////////////////////////////////

		function index() {


			if (!empty($this->data)) {


				////////////////////////////   PREGUNTA 9 /////////////////////////////

				//  Si pregunta 9, recibe un array de SI, guardo en pregunta 9 el numero recibido en este ARRAY.
				if(isset($this->data['Encuesta']['pregunta_9']['Si'])){

					$this->data['Encuesta']['pregunta_9'] = $this->data['Encuesta']['pregunta_9']['Si'];
				}

				//  Si pregunta 9, recibe un array de NO, guardo en pregunta 9 el numero recibido en este ARRAY.
				if(isset($this->data['Encuesta']['pregunta_9']['No'])){

					$this->data['Encuesta']['pregunta_9'] = $this->data['Encuesta']['pregunta_9']['No'];
				}


				////////////////////////////   PREGUNTA 10 /////////////////////////////

				//  Pregunta 10 puede tomar 3 valores: VACIO, NO o un NUMERO.

				//  Si se abrio la pregunta 10 y eligio una opcion de SI, guardamos el numero de esta opcion.
				if(isset($this->data['Encuesta']['pregunta_10']['Si'])){

					$this->data['Encuesta']['pregunta_10'] = $this->data['Encuesta']['pregunta_10']['Si'];
				}

				// Si llega aca es porque pregunta 10 NO existe, o poruqe existe y elegio "NO".
				// Si existe es porque se abrio la pregunta 10 y selecciono NO, entonces guardo solo 'NO'.
				// Si no existe es porque en la pregunta 9 eligio SI y no se abrio la pregunta 10, y pone VACIO.
				else if(isset($this->data['Encuesta']['pregunta_10'])){

					$this->data['Encuesta']['pregunta_10'] = "No";
				}


				////////////////////////////   PREGUNTA 14 (mima estructura que PREGUNTA 9)  /////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_14']['Si'])){

					$this->data['Encuesta']['pregunta_14'] = $this->data['Encuesta']['pregunta_14']['Si'];
				}

				if(isset($this->data['Encuesta']['pregunta_9']['No'])){

					$this->data['Encuesta']['pregunta_14'] = $this->data['Encuesta']['pregunta_14']['No'];
				}


				////////////////////////////   PREGUNTA 16  //////////////////////////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_6'])){
					// Convierto el array de opciones en un string donde cada elemento estara separado por una coma y este string sera lo que
					// grabemos en la base de datos.
					$this->data['Encuesta']['pregunta_16'] = implode(',', $this->data['Encuesta']['pregunta_16']);;
				}



				///////////////////////////////////////////////////////////////////////////////////////////////////////////////
				///////////////////////////////////////////////////////////////////////////////////////////////////////////////
				///////////////////////////////////////////////////////////////////////////////////////////////////////////////

                if($this->Encuesta->save($this->data, false)){

                   	$this->Session->setFlash('Encuesta agregada correctamente', 'flash_success');
                   	// $this->redirect(array('controller' => 'encuestas', 'action' => 'index'));
                }

			}
		}


		function buscador(){

			$encuestas = $this->Encuesta->find('all', array('recursive' => 1));

			// debug($encuestas);

			$cantidadEncuestas = count($encuestas);

			$this->set(compact('cantidadEncuestas'));

			////////////////////////////  PREGUNTA 1 (VARIABLES) //////////////////////////
			$pregunta1_opc1 = $pregunta1_opc2 = $pregunta1_opc3 = 0;

			////////////////////////////  PREGUNTA 2 (VARIABLES) //////////////////////////
			$pregunta2_opc1 = $pregunta2_opc2 = 0;

			////////////////////////////  PREGUNTA 3 (VARIABLES) //////////////////////////
			$pregunta3_opc1 = $pregunta3_opc2 = 0;

			////////////////////////////  PREGUNTA 4 (VARIABLES) //////////////////////////
			$pregunta4_opc1 = $pregunta4_opc2 = 0;

			////////////////////////////  PREGUNTA 5 (VARIABLES) //////////////////////////
			$pregunta5_opc1 = $pregunta5_opc2 = $pregunta5_opc3 = $pregunta5_opc4 = $pregunta5_opc5 = $pregunta5_opc6 =
			$pregunta5_opc7 = $pregunta5_opc8 = $pregunta5_opc9 = $pregunta5_opc10 = $pregunta5_opc11 = $pregunta5_opc12 =
			$pregunta5_opc13 = $pregunta5_opc14 = $pregunta5_opc15 = $pregunta5_opc16 = $pregunta5_opc17 = 0;

			////////////////////////////  PREGUNTA 7 (VARIABLES) //////////////////////////
			$pregunta7_opc1 = $pregunta7_opc2 = 0;

			////////////////////////////  PREGUNTA 8 (VARIABLES) //////////////////////////
			$pregunta8_opc1 = $pregunta8_opc2 = $pregunta8_opc3 = $pregunta8_opc4 = $pregunta8_opc5 = $pregunta8_opc6 =
			$pregunta8_opc7 = $pregunta8_opc8 = $pregunta8_opc9 = $pregunta8_opc10 = 0;


			////////////////////////////  PREGUNTA 9 (VARIABLES) //////////////////////////
			$pregunta9_Si = $pregunta9_No = 0;

			////////////////////////////  PREGUNTA 9 (SI) (VARIABLES) //////////////////////////
			$pregunta9_Si_opc1 = $pregunta9_Si_opc2 = $pregunta9_Si_opc3 = $pregunta9_Si_opc4 = $pregunta9_Si_opc5 = 0;

			////////////////////////////  PREGUNTA 9 (NO) (VARIABLES) //////////////////////////
			$pregunta9_No_opc6 = $pregunta9_No_opc7 = $pregunta9_No_opc8 = $pregunta9_No_opc9 = $pregunta9_No_opc10 = $pregunta9_No_opc11 =
			$pregunta9_No_opc12 = $pregunta9_No_opc13 = 0;

			////////////////////////////  PREGUNTA 10 (VARIABLES)  //////////////////////////
			$pregunta10_Si = $pregunta10_No = 0;

			////////////////////////////  PREGUNTA 10  (SI) (VARIABLES)  //////////////////////////
			$pregunta10_Si_opc1 = $pregunta10_Si_opc2 = $pregunta10_Si_opc3 = 0;

			////////////////////////////  PREGUNTA 11 (VARIABLES)  //////////////////////////
			$pregunta11_opc1 = $pregunta11_opc2 = $pregunta11_opc3 = $pregunta11_opc4 = $pregunta11_opc5 = 0;

			////////////////////////////  PREGUNTA 12 (VARIABLES)  //////////////////////////
			$pregunta12_Si = 0;
			$pregunta12_opc1 = $pregunta12_opc2 = $pregunta12_opc3 = $pregunta12_opc4 = 0;

			////////////////////////////  PREGUNTA 13 (VARIABLES)  //////////////////////////
			$pregunta13_opc1 = $pregunta13_opc2 = $pregunta13_opc3 = $pregunta13_opc4 = $pregunta13_opc5 = 0;

			////////////////////////////  PREGUNTA 14 (VARIABLES) //////////////////////////
			$pregunta14_Si = $pregunta14_No = 0;

			////////////////////////////  PREGUNTA 14 (SI) (VARIABLES) //////////////////////////
			$pregunta14_Si_opc1 = $pregunta14_Si_opc2 = $pregunta14_Si_opc3 = $pregunta14_Si_opc4 =
			$pregunta14_Si_opc5 = $pregunta14_Si_opc6 = 0;

			////////////////////////////  PREGUNTA 14 (NO) (VARIABLES) //////////////////////////
			$pregunta14_No_opc7 = $pregunta14_No_opc8 = $pregunta14_No_opc9 = $pregunta14_No_opc10 = $pregunta14_No_opc11 =
			$pregunta14_No_opc12 = $pregunta14_No_opc13 = $pregunta14_No_opc14  = $pregunta14_No_opc15  = 0;

			////////////////////////////  PREGUNTA 15 (VARIABLES)  //////////////////////////
			$pregunta15_opc1 = $pregunta15_opc2 = $pregunta15_opc3 = $pregunta15_opc4 = $pregunta15_opc5 = $pregunta15_opc6 =
			$pregunta15_opc7 = 0;

			////////////////////////////  PREGUNTA 16 (VARIABLES)  //////////////////////////
			$pregunta16_opc1 = $pregunta16_opc2 = $pregunta16_opc3 = $pregunta16_opc4 = $pregunta16_opc5 = $pregunta16_opc6 =
			$pregunta16_opc7 = 0;

			////////////////////////////  PREGUNTA 17 (VARIABLES)  //////////////////////////
			$pregunta17_opc1 = $pregunta17_opc2 = $pregunta17_opc3 = $pregunta17_opc4  = 0;



			foreach($encuestas as $encuesta){

				///////////////////////     PREGUNTA 1 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_1']) {
					case '1':
						$pregunta1_opc1++;
						break ;
					case '2':
						$pregunta1_opc2++;
						break ;
					case '3':
						$pregunta1_opc3++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 2 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_2']) {
					case '1':
						$pregunta2_opc1++;
						break ;
					case '2':
						$pregunta2_opc2++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 3 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_3']) {
					case '1':
						$pregunta3_opc1++;
						break ;
					case '2':
						$pregunta3_opc2++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 4 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_4']) {
					case '1':
						$pregunta4_opc1++;
						break ;
					case '2':
						$pregunta4_opc2++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 5 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_5']) {
					case '1':
						$pregunta5_opc1++;
						break ;
					case '2':
						$pregunta5_opc2++;
						break ;
					case '3':
						$pregunta5_opc3++;
						break ;
					case '4':
						$pregunta5_opc4++;
						break ;
					case '5':
						$pregunta5_opc5++;
						break ;
					case '6':
						$pregunta5_opc6++;
						break ;
					case '7':
						$pregunta5_opc7++;
						break ;
					case '8':
						$pregunta5_opc8++;
						break ;
					case '9':
						$pregunta5_opc9++;
						break ;
					case '10':
						$pregunta5_opc10++;
						break ;

					case '11':
						$pregunta5_opc11++;
						break ;
					case '12':
						$pregunta5_opc12++;
						break ;
					case '13':
						$pregunta5_opc13++;
						break ;
					case '14':
						$pregunta5_opc14++;
						break ;
					case '15':
						$pregunta5_opc15++;
						break ;
					case '16':
						$pregunta5_opc16++;
						break ;
					case '17':
						$pregunta5_opc17++;
						break ;
					default:
						break;
				}


				///////////////////////     PREGUNTA 7 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_7']) {
					case '1':
						$pregunta7_opc1++;
						break ;
					case '2':
						$pregunta7_opc2++;
						break ;
					default:
						break;
				}


				///////////////////////     PREGUNTA 8 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_8']) {
					case '1':
						$pregunta8_opc1++;
						break ;
					case '2':
						$pregunta8_opc2++;
						break ;
					case '3':
						$pregunta8_opc3++;
						break ;
					case '4':
						$pregunta8_opc4++;
						break ;
					case '5':
						$pregunta8_opc5++;
						break ;
					case '6':
						$pregunta8_opc6++;
						break ;
					case '7':
						$pregunta8_opc7++;
						break ;
					case '8':
						$pregunta8_opc8++;
						break ;
					case '9':
						$pregunta8_opc9++;
						break ;
					case '10':
						$pregunta8_opc10++;
						break ;
					default:
						break;
				}


				///////////////////////     PREGUNTA 9 (SI) y (NO) /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_9']) {
					case '1':
						$pregunta9_Si++;
						$pregunta9_Si_opc1++;
						break ;
					case '2':
						$pregunta9_Si++;
						$pregunta9_Si_opc2++;
						break ;
					case '3':
						$pregunta9_Si++;
						$pregunta9_Si_opc3++;
						break ;
					case '4':
						$pregunta9_Si++;
						$pregunta9_Si_opc4++;
						break ;
					case '5':
						$pregunta9_Si++;
						$pregunta9_Si_opc5++;
						break ;
					// Comienza NO
					case '6':
						$pregunta9_No++;
						$pregunta9_No_opc6++;
						break ;
					case '7':
						$pregunta9_No++;
						$pregunta9_No_opc7++;
						break ;
					case '8':
						$pregunta9_No++;
						$pregunta9_No_opc8++;
						break ;
					case '9':
						$pregunta9_No++;
						$pregunta9_No_opc9++;
						break ;
					case '10':
						$pregunta9_No++;
						$pregunta9_No_opc10++;
						break ;
					case '11':
						$pregunta9_No++;
						$pregunta9_No_opc11++;
						break ;
					case '12':
						$pregunta9_No++;
						$pregunta9_No_opc12++;
						break ;
					case '13':
						$pregunta9_No++;
						$pregunta9_No_opc13++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 10 /////////////////////////////////////


				// Si entra, significa que tiene NO o algun numeor (1,2,3)
				if(!empty($encuesta['Encuesta']['pregunta_10'])){

					if($encuesta['Encuesta']['pregunta_10'] == 'No'){

						$pregunta10_No++;
					}

					else{

						// Si llega aca es poruqe es 1,2,3
						switch ($encuesta['Encuesta']['pregunta_10']) {
							case '1':
								$pregunta10_Si++;
								$pregunta10_Si_opc1++;
								break ;
							case '2':
								$pregunta10_Si++;
								$pregunta10_Si_opc2++;
								break ;
							case '3':
								$pregunta10_Si++;
								$pregunta10_Si_opc3++;
								break ;
							default:
								break;
						}
					}
				}

				///////////////////////     PREGUNTA 11 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_11']) {
					case '1':
						$pregunta11_opc1++;
						break ;
					case '2':
						$pregunta11_opc2++;
						break ;
					case '3':
						$pregunta11_opc3++;
						break ;
					case '4':
						$pregunta11_opc4++;
						break ;
					case '5':
						$pregunta11_opc5++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 12 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_12']) {
					case '1':
						$pregunta12_opc1++;
						break ;
					// Si es 2,3,4 significa que trabaja
					case '2':
						$pregunta12_Si++;
						$pregunta12_opc2++;
						break ;
					case '3':
						$pregunta12_Si++;
						$pregunta12_opc3++;
						break ;
					case '4':
						$pregunta12_Si++;
						$pregunta12_opc4++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 13 (Depende de 12) /////////////////////////////////////

				// Si entra, significa que en 12 se respondio que SI trabaja (2,3,4)
				if(!empty($encuesta['Encuesta']['pregunta_13'])){

					switch ($encuesta['Encuesta']['pregunta_13']) {
						case '1':
							$pregunta13_opc1++;
							break ;
						case '2':
							$pregunta13_opc2++;
							break ;
						case '3':
							$pregunta13_opc3++;
							break ;
						case '4':
							$pregunta13_opc4++;
							break ;
						case '5':
							$pregunta13_opc5++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 14 (Depende de 12)  /////////////////////////////////////

				// Si entra, significa que en 12 se respondio que SI trabaja (2,3,4)
				if(!empty($encuesta['Encuesta']['pregunta_14'])){


					///////////////////////     PREGUNTA 14 (SI) y (NO) /////////////////////////////////////

					switch ($encuesta['Encuesta']['pregunta_14']) {
						case '1':
							$pregunta14_Si++;
							$pregunta14_Si_opc1++;
							break ;
						case '2':
							$pregunta14_Si++;
							$pregunta14_Si_opc2++;
							break ;
						case '3':
							$pregunta14_Si++;
							$pregunta14_Si_opc3++;
							break ;
						case '4':
							$pregunta14_Si++;
							$pregunta14_Si_opc4++;
							break ;
						case '5':
							$pregunta14_Si++;
							$pregunta14_Si_opc5++;
							break ;
						case '6':
							$pregunta14_Si++;
							$pregunta14_Si_opc6++;
							break ;
						// Comienza NO
						case '7':
							$pregunta14_No++;
							$pregunta14_No_opc7++;
							break ;
						case '8':
							$pregunta14_No++;
							$pregunta14_No_opc8++;
							break ;
						case '9':
							$pregunta14_No++;
							$pregunta14_No_opc9++;
							break ;
						case '10':
							$pregunta14_No++;
							$pregunta14_No_opc10++;
							break ;
						case '11':
							$pregunta14_No++;
							$pregunta14_No_opc11++;
							break ;
						case '12':
							$pregunta14_No++;
							$pregunta14_No_opc12++;
							break ;
						case '13':
							$pregunta14_No++;
							$pregunta14_No_opc13++;
							break ;
						case '14':
							$pregunta14_No++;
							$pregunta14_No_opc14++;
							break ;
						case '15':
							$pregunta14_No++;
							$pregunta14_No_opc15++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 15 (Depende de 12) /////////////////////////////////////

				// Si entra, significa que en 12 se respondio que SI trabaja (2,3,4)
				if(!empty($encuesta['Encuesta']['pregunta_15'])){

					switch ($encuesta['Encuesta']['pregunta_15']) {
						case '1':
							$pregunta15_opc1++;
							break ;
						case '2':
							$pregunta15_opc2++;
							break ;
						case '3':
							$pregunta15_opc3++;
							break ;
						case '4':
							$pregunta15_opc4++;
							break ;
						case '5':
							$pregunta15_opc5++;
							break ;
						case '6':
							$pregunta15_opc6++;
							break ;
						case '7':
							$pregunta15_opc7++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 16   /////////////////////////////////////

				// Separa el string en un elemento de array cada vez que encuentra una ",".
				$opciones_preg16 = (explode(",", $encuesta['Encuesta']['pregunta_16']));

				foreach ($opciones_preg16 as $opcion_preg16) {

					switch ($opcion_preg16) {
						case '1':
							$pregunta16_opc1++;
							break ;
						case '2':
							$pregunta16_opc2++;
							break ;
						case '3':
							$pregunta16_opc3++;
							break ;
						case '4':
							$pregunta16_opc4++;
							break ;
						case '5':
							$pregunta16_opc5++;
							break ;
						case '6':
							$pregunta16_opc6++;
							break ;
						case '7':
							$pregunta16_opc7++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 17 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_17']) {
					case '1':
						$pregunta17_opc1++;
						break ;
					case '2':
						$pregunta17_opc2++;
						break ;
					case '3':
						$pregunta17_opc3++;
						break ;
					case '4':
						$pregunta17_opc4++;
						break ;
					default:
						break;
				}


			}  // cierra FOREACH


			// Envio todo a la VISTA
			$this->set(compact('pregunta1_opc1', 'pregunta1_opc2', 'pregunta1_opc3'));
			$this->set(compact('pregunta2_opc1', 'pregunta2_opc2'));
			$this->set(compact('pregunta3_opc1', 'pregunta3_opc2'));
			$this->set(compact('pregunta4_opc1', 'pregunta4_opc2'));
			$this->set(compact('pregunta5_opc1', 'pregunta5_opc2', 'pregunta5_opc3', 'pregunta5_opc4', 'pregunta5_opc5', 'pregunta5_opc6',
							   'pregunta5_opc7', 'pregunta5_opc8', 'pregunta5_opc9', 'pregunta5_opc10', 'pregunta5_opc11', 'pregunta5_opc12',
							   'pregunta5_opc13','pregunta5_opc14', 'pregunta5_opc15', 'pregunta5_opc16', 'pregunta5_opc17'));
			$this->set(compact('pregunta7_opc1', 'pregunta7_opc2'));
			$this->set(compact('pregunta8_opc1', 'pregunta8_opc2', 'pregunta8_opc3', 'pregunta8_opc4', 'pregunta8_opc5', 'pregunta8_opc6',
							   'pregunta8_opc7', 'pregunta8_opc8', 'pregunta8_opc9', 'pregunta8_opc10'));
			$this->set(compact('pregunta9_Si', 'pregunta9_No'));
			$this->set(compact('pregunta9_Si_opc1', 'pregunta9_Si_opc2', 'pregunta9_Si_opc3', 'pregunta9_Si_opc4', 'pregunta9_Si_opc5'));
			$this->set(compact('pregunta9_No_opc6', 'pregunta9_No_opc7','pregunta9_No_opc8','pregunta9_No_opc9','pregunta9_No_opc10',
							   'pregunta9_No_opc11','pregunta9_No_opc12','pregunta9_No_opc13'));

			$this->set(compact('pregunta10_Si', 'pregunta10_No', 'pregunta10_Si_opc1', 'pregunta10_Si_opc2', 'pregunta10_Si_opc3'));
			$this->set(compact('pregunta11_opc1', 'pregunta11_opc2', 'pregunta11_opc3', 'pregunta11_opc4', 'pregunta11_opc5'));

			$this->set(compact('pregunta12_Si'));
			$this->set(compact('pregunta12_opc1', 'pregunta12_opc2', 'pregunta12_opc3', 'pregunta12_opc4'));
			$this->set(compact('pregunta13_opc1', 'pregunta13_opc2', 'pregunta13_opc3', 'pregunta13_opc4','pregunta13_opc5'));

			$this->set(compact('pregunta14_Si', 'pregunta14_No'));
			$this->set(compact('pregunta14_Si_opc1', 'pregunta14_Si_opc2', 'pregunta14_Si_opc3', 'pregunta14_Si_opc4', 'pregunta14_Si_opc5',
			 				   'pregunta14_Si_opc6'));
			$this->set(compact('pregunta14_No_opc7','pregunta14_No_opc8','pregunta14_No_opc9','pregunta14_No_opc10', 'pregunta14_No_opc11',
							   'pregunta14_No_opc12','pregunta14_No_opc13', 'pregunta14_No_opc14', 'pregunta14_No_opc15'));

			$this->set(compact('pregunta15_opc1', 'pregunta15_opc2', 'pregunta15_opc3', 'pregunta15_opc4', 'pregunta15_opc5',
							   'pregunta15_opc6', 'pregunta15_opc7'));

			$this->set(compact('pregunta16_opc1', 'pregunta16_opc2', 'pregunta16_opc3', 'pregunta16_opc4','pregunta16_opc5',
							   'pregunta16_opc6', 'pregunta16_opc7'));

			$this->set(compact('pregunta17_opc1', 'pregunta17_opc2', 'pregunta17_opc3', 'pregunta17_opc4'));

		} // cierra BUSCADOR;


	}
?>