<?php

	// Para que funciones json_encode en PHP 5.1
	App::import('Vendor', 'jsonwrapper');

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



		public function getmunicipio($id_depto = null){

			if($this->RequestHandler->isAjax()) {

				$this->autoRender = false;

				 $this->layout = 'ajax';

				$this->loadModel('Municipio');

				$this->Municipio->recursive = -1;

				$municipios = $this->Municipio->find('all',  array('conditions' => array('Municipio.id_departamento' => $id_depto)));

				echo json_encode($municipios);
	  		}
		}

		///////////////////////////////////////////////////////////////////

		function index() {

			debug($_POST);

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

				if(isset($this->data['Encuesta']['pregunta_14']['No'])){

					$this->data['Encuesta']['pregunta_14'] = $this->data['Encuesta']['pregunta_14']['No'];
				}


				////////////////////////////   PREGUNTA 16  //////////////////////////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_16'])){
					// Convierto el array de opciones en un string donde cada elemento estara separado por una coma y este string sera lo que
					// grabemos en la base de datos.
					$this->data['Encuesta']['pregunta_16'] = implode(',', $this->data['Encuesta']['pregunta_16']);
				}


				////////////////////////////   PREGUNTA 19 y PREGUNTA 19 OTRAS //////////////////////////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_19']['Si'])){

					$this->data['Encuesta']['pregunta_19'] = implode(',', $this->data['Encuesta']['pregunta_19']['Si']);
				}

				////////////////////////////   PREGUNTA 20   /////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_20']['Si'])){

					$this->data['Encuesta']['pregunta_20'] = $this->data['Encuesta']['pregunta_20']['Si'];
				}

				if(isset($this->data['Encuesta']['pregunta_20']['No'])){

					$this->data['Encuesta']['pregunta_20'] = $this->data['Encuesta']['pregunta_20']['No'];
				}

						////////////////////////////   PREGUNTA 21   /////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_21']['Si'])){

					$this->data['Encuesta']['pregunta_21'] = $this->data['Encuesta']['pregunta_21']['Si'];
				}

				if(isset($this->data['Encuesta']['pregunta_21']['No'])){

					$this->data['Encuesta']['pregunta_21'] = $this->data['Encuesta']['pregunta_21']['No'];
				}


				////////////////////////////   PREGUNTA 22  //////////////////////////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_22'])){

					$this->data['Encuesta']['pregunta_22'] = implode(',', $this->data['Encuesta']['pregunta_22']);
				}

					////////////////////////////   PREGUNTA 23  //////////////////////////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_23'])){

					$this->data['Encuesta']['pregunta_23'] = implode(',', $this->data['Encuesta']['pregunta_23']);
				}

				////////////////////////////   PREGUNTA 27 y PREGUNTA 27 OTRAS //////////////////////////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_27']['Si'])){

					$this->data['Encuesta']['pregunta_27'] = implode(',', $this->data['Encuesta']['pregunta_27']['Si']);
				}

				////////////////////////////   PREGUNTA 28 y PREGUNTA 28 OTRAS //////////////////////////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_28']['Si'])){

					$this->data['Encuesta']['pregunta_28'] = implode(',', $this->data['Encuesta']['pregunta_28']['Si']);
				}

				////////////////////////////   PREGUNTA 30  //////////////////////////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_30'])){

					$this->data['Encuesta']['pregunta_30'] = implode(',', $this->data['Encuesta']['pregunta_30']);
				}

					////////////////////////////   PREGUNTA 31  //////////////////////////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_31'])){

					$this->data['Encuesta']['pregunta_31'] = implode(',', $this->data['Encuesta']['pregunta_31']);
				}

				////////////////////////////   PREGUNTA 34  //////////////////////////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_34'])){

					$this->data['Encuesta']['pregunta_34'] = implode(',', $this->data['Encuesta']['pregunta_34']);
				}

				////////////////////////////   PREGUNTA 35   /////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_35']['Si'])){

					$this->data['Encuesta']['pregunta_35'] = $this->data['Encuesta']['pregunta_35']['Si'];
				}

				////////////////////////////   PREGUNTA 47 y PREGUNTA 47 OTRAS //////////////////////////////////////////////////

				if(isset($this->data['Encuesta']['pregunta_47']['Si'])){

					$this->data['Encuesta']['pregunta_47'] = implode(',', $this->data['Encuesta']['pregunta_47']['Si']);
				}



				///////////////////////////////////////////////////////////////////////////////////////////////////////////////
				///////////////////////////////////////////////////////////////////////////////////////////////////////////////
				///////////////////////////////////////////////////////////////////////////////////////////////////////////////

                if($this->Encuesta->save($this->data, false)){

                   	$this->Session->setFlash('Encuesta agregada correctamente', 'flash_success');
                   	// $this->redirect(array('controller' => 'encuestas', 'action' => 'index'));
                }
                else{

                	$this->Session->setFlash('No se pudo guardar', 'flash_failure');
                }

			}
		}


		function buscador(){

			$encuestas = $this->Encuesta->find('all', array('recursive' => 1));


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

			////////////////////////////  PREGUNTA 18 (VARIABLES)  //////////////////////////
			$pregunta18_opc1 = $pregunta18_opc2 = $pregunta18_opc3 = $pregunta18_opc4  = 0;

			////////////////////////////  PREGUNTA 19 (VARIABLES)  //////////////////////////
			$pregunta19_opc1 = $pregunta19_opc2 = $pregunta19_opc3 = $pregunta19_opc4 = $pregunta19_opc5 = $pregunta19_opc6 =
			$pregunta19_opc7 = 0;

			////////////////////////////  PREGUNTA 19 OTRAS (VARIABLES)  //////////////////////////
			$pregunta19_otras = [];

			////////////////////////////  PREGUNTA 20 (VARIABLES) //////////////////////////
			$pregunta20_Si = $pregunta20_No = 0;

			////////////////////////////  PREGUNTA 20 (SI) (VARIABLES) //////////////////////////
			$pregunta20_Si_opc1 = $pregunta20_Si_opc2 = $pregunta20_Si_opc3 = 0;

			////////////////////////////  PREGUNTA 21 (VARIABLES) //////////////////////////
			$pregunta21_Si = $pregunta21_No = 0;

			////////////////////////////  PREGUNTA 22 (VARIABLES)  //////////////////////////
			$pregunta22_opc1 = $pregunta22_opc2 = $pregunta22_opc3 = $pregunta22_opc4 = $pregunta22_opc5 = $pregunta22_opc6 =
			$pregunta22_opc7 = $pregunta22_opc8 = $pregunta22_opc9 = $pregunta22_opc10 = $pregunta22_opc11 = $pregunta22_opc12 = 0;

			////////////////////////////  PREGUNTA 23 (VARIABLES)  //////////////////////////
			$pregunta23_opc1 = $pregunta23_opc2 = $pregunta23_opc3 = $pregunta23_opc4 = $pregunta23_opc5 = $pregunta23_opc6 = 0;

			////////////////////////////  PREGUNTA 24 (VARIABLES)  //////////////////////////
			$pregunta24_opc1 = $pregunta24_opc2 = $pregunta24_opc3 = 0;

			////////////////////////////  PREGUNTA 25 (VARIABLES) //////////////////////////
			$pregunta25_opc1 = $pregunta25_opc2 = 0;

			////////////////////////////  PREGUNTA 26 (VARIABLES)  //////////////////////////
			$pregunta26_opc1 = $pregunta26_opc2 = $pregunta26_opc3 = $pregunta26_opc4 = $pregunta26_opc5 = $pregunta26_opc6 = 0;

			////////////////////////////  PREGUNTA 27 (VARIABLES)  //////////////////////////
			$pregunta27_opc1 = $pregunta27_opc2 = $pregunta27_opc3 = $pregunta27_opc4 = $pregunta27_opc5 = $pregunta27_opc6 =
			$pregunta27_opc7 = 0;

			////////////////////////////  PREGUNTA 27 OTRAS (VARIABLES)  //////////////////////////
			$pregunta27_otras = [];

			////////////////////////////  PREGUNTA 28 (VARIABLES)  //////////////////////////
			$pregunta28_opc1 = $pregunta28_opc2 = $pregunta28_opc3 = $pregunta28_opc4 = $pregunta28_opc5 = $pregunta28_opc6 =
			$pregunta28_opc7 = 0;

			////////////////////////////  PREGUNTA 28 OTRAS (VARIABLES)  //////////////////////////
			$pregunta28_otras = [];

			////////////////////////////  PREGUNTA 29 (VARIABLES)  //////////////////////////
			$pregunta29_opc1 = $pregunta29_opc2 = $pregunta29_opc3 = $pregunta29_opc4 = $pregunta29_opc5 = $pregunta29_opc6 = $pregunta29_opc7 = 0;

			////////////////////////////  PREGUNTA 30 (VARIABLES)  //////////////////////////
			$pregunta30_opc1 = $pregunta30_opc2 = $pregunta30_opc3 = $pregunta30_opc4 = $pregunta30_opc5 = $pregunta30_opc6 =
			$pregunta30_opc7 = 0;

			////////////////////////////  PREGUNTA 31 (VARIABLES)  //////////////////////////
			$pregunta31_opc1 = $pregunta31_opc2 = $pregunta31_opc3 = $pregunta31_opc4 = $pregunta31_opc5 = $pregunta31_opc6 =
			$pregunta31_opc7 = $pregunta31_opc8 = 0;

			////////////////////////////  PREGUNTA 32 (VARIABLES) //////////////////////////
			$pregunta32_Si = 0;
			$pregunta32_opc1 = $pregunta32_opc2 = $pregunta32_opc3 = 0;

			////////////////////////////  PREGUNTA 33 (VARIABLES)  //////////////////////////
			$pregunta33_opc1 = $pregunta33_opc2 = $pregunta33_opc3 = $pregunta33_opc4 = 0;

			////////////////////////////  PREGUNTA 34 (VARIABLES)  //////////////////////////
			$pregunta34_opc1 = $pregunta34_opc2 = $pregunta34_opc3 = $pregunta34_opc4 = $pregunta34_opc5 = $pregunta34_opc6 =
			$pregunta34_opc7 = 0;

			////////////////////////////  PREGUNTA 35 (VARIABLES) //////////////////////////
			$pregunta35_Si = $pregunta35_No = 0;

			////////////////////////////  PREGUNTA 35 (SI) (VARIABLES) //////////////////////////
			$pregunta35_Si_opc1 = $pregunta35_Si_opc2 = $pregunta35_Si_opc3 = $pregunta35_Si_opc4 = $pregunta35_Si_opc5 = 0;

			////////////////////////////  PREGUNTA 36 (VARIABLES)  //////////////////////////
			$pregunta36_opc1 = $pregunta36_opc2 = $pregunta36_opc3 = 0;

			////////////////////////////  PREGUNTA 37 (VARIABLES)  //////////////////////////
			$pregunta37_opc1 = $pregunta37_opc2 = $pregunta37_opc3 = $pregunta37_opc4 = 0;

			////////////////////////////  PREGUNTA 38 (VARIABLES)  //////////////////////////
			$pregunta38_opc1 = $pregunta38_opc2 = $pregunta38_opc3 = $pregunta38_opc4 = $pregunta38_opc5 = $pregunta38_opc6 = $pregunta38_opc7 = 0;

			////////////////////////////  PREGUNTA 39 (VARIABLES)  //////////////////////////
			$pregunta39_opc1 = $pregunta39_opc2 = $pregunta39_opc3 = $pregunta39_opc4 = 0;

			////////////////////////////  PREGUNTA 40 (VARIABLES) //////////////////////////
			$pregunta40_opc1 = $pregunta40_opc2 = 0;

			////////////////////////////  PREGUNTA 41 (VARIABLES)  //////////////////////////
			$pregunta41_Si = 0;
			$pregunta41_opc1 = $pregunta41_opc2 = $pregunta41_opc3 = $pregunta41_opc4 = $pregunta41_opc5 = $pregunta41_opc6 = $pregunta41_opc7 = 0;

			////////////////////////////  PREGUNTA 42 (VARIABLES)  //////////////////////////
			$pregunta42_opc1 = $pregunta42_opc2 = $pregunta42_opc3 = 0;

			////////////////////////////  PREGUNTA 43 (VARIABLES)  //////////////////////////
			$pregunta43_opc1 = $pregunta43_opc2 = 0;

			////////////////////////////  PREGUNTA 44 (VARIABLES)  //////////////////////////
			$pregunta44_opc1 = $pregunta44_opc2 = 0;

			////////////////////////////  PREGUNTA 45 (VARIABLES)  //////////////////////////
			$pregunta45_opc1 = $pregunta45_opc2 = 0;

			////////////////////////////  PREGUNTA 46 (VARIABLES)  //////////////////////////
			$pregunta46_opc1 = $pregunta46_opc2 = $pregunta46_opc3 = 0;

			////////////////////////////  PREGUNTA 47 (VARIABLES)  //////////////////////////
			$pregunta47_opc1 = $pregunta47_opc2 = $pregunta47_opc3 = $pregunta47_opc4 = $pregunta47_opc5 = $pregunta47_opc6 =
			$pregunta47_opc7 = 0;

			////////////////////////////  PREGUNTA 47 OTRAS (VARIABLES)  //////////////////////////
			$pregunta47_otras = [];



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


				// Si entra, significa que tiene NO o algun numero (1,2,3)
				if(!empty($encuesta['Encuesta']['pregunta_10'])){

					switch ($encuesta['Encuesta']['pregunta_10']) {
						case 'No':
							$pregunta10_No++;
							break ;
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


				///////////////////////     PREGUNTA 18 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_18']) {
					case '1':
						$pregunta18_opc1++;
						break ;
					case '2':
						$pregunta18_opc2++;
						break ;
					case '3':
						$pregunta18_opc3++;
						break ;
					case '4':
						$pregunta18_opc4++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 19   /////////////////////////////////////

				// Separa el string en un elemento de array cada vez que encuentra una ",".
				$opciones_preg19 = (explode(",", $encuesta['Encuesta']['pregunta_19']));

				foreach ($opciones_preg19 as $opcion_preg19) {

					switch ($opcion_preg19) {
						case '1':
							$pregunta19_opc1++;
							break ;
						case '2':
							$pregunta19_opc2++;
							break ;
						case '3':
							$pregunta19_opc3++;
							break ;
						case '4':
							$pregunta19_opc4++;
							break ;
						case '5':
							$pregunta19_opc5++;
							break ;
						case '6':
							$pregunta19_opc6++;
							break ;
						case '7':
							$pregunta19_opc7++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 19 OTRAS  /////////////////////////////////////

				if(!empty($encuesta['Encuesta']['pregunta_19_otras'])){

					// guardo en un array cada una de las respuestas dadas por el usuario
					$pregunta19_otras[] = $encuesta['Encuesta']['pregunta_19_otras'];
				}


				///////////////////////     PREGUNTA 20 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_20']) {

					case 'No':
						$pregunta20_No++;
						break ;
					case '1':
						$pregunta20_Si++;
						$pregunta20_Si_opc1++;
						break ;
					case '2':
						$pregunta20_Si++;
						$pregunta20_Si_opc2++;
						break ;
					case '3':
						$pregunta20_Si++;
						$pregunta20_Si_opc3++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 21 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_21']) {

					case 'No':
						$pregunta21_No++;
						break ;
					case 'Si':
						$pregunta21_Si++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 22 (Depende de 21) /////////////////////////////////////

				// Si entra, significa que en 21 se respondio que SI tiene acceso a internet
				if(!empty($encuesta['Encuesta']['pregunta_22'])){

					// Separa el string en un elemento de array cada vez que encuentra una ",".
					$opciones_preg22 = (explode(",", $encuesta['Encuesta']['pregunta_22']));

					foreach ($opciones_preg22 as $opcion_preg22) {

						switch ($opcion_preg22) {
							case '1':
								$pregunta22_opc1++;
								break ;
							case '2':
								$pregunta22_opc2++;
								break ;
							case '3':
								$pregunta22_opc3++;
								break ;
							case '4':
								$pregunta22_opc4++;
								break ;
							case '5':
								$pregunta22_opc5++;
								break ;
							case '6':
								$pregunta22_opc6++;
								break ;
							case '7':
								$pregunta22_opc7++;
								break ;
							case '8':
								$pregunta22_opc8++;
								break ;
							case '9':
								$pregunta22_opc9++;
								break ;
							case '10':
								$pregunta22_opc10++;
								break ;
							case '11':
								$pregunta22_opc11++;
								break ;
							case '12':
								$pregunta22_opc12++;
								break ;
							default:
								break;
						}
					}
				}

				///////////////////////     PREGUNTA 23 (Depende de 21) /////////////////////////////////////

				// Si entra, significa que en 21 se respondio que SI tiene acceso a internet
				if(!empty($encuesta['Encuesta']['pregunta_23'])){

					// Separa el string en un elemento de array cada vez que encuentra una ",".
					$opciones_preg23 = (explode(",", $encuesta['Encuesta']['pregunta_23']));

					foreach ($opciones_preg23 as $opcion_preg23) {

						switch ($opcion_preg23) {
							case '1':
								$pregunta23_opc1++;
								break ;
							case '2':
								$pregunta23_opc2++;
								break ;
							case '3':
								$pregunta23_opc3++;
								break ;
							case '4':
								$pregunta23_opc4++;
								break ;
							case '5':
								$pregunta23_opc5++;
								break ;
							case '6':
								$pregunta23_opc6++;
								break ;
							default:
								break;
						}
					}
				}

				///////////////////////     PREGUNTA 24 (Depende de 21) /////////////////////////////////////


				// Si entra, significa que en 21 se respondio que SI tiene acceso a internet
				if(!empty($encuesta['Encuesta']['pregunta_23'])){

					switch ($encuesta['Encuesta']['pregunta_24']) {
						case '1':
							$pregunta24_opc1++;
							break ;
						case '2':
							$pregunta24_opc2++;
							break ;
						case '3':
							$pregunta24_opc3++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 25 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_25']) {
					case '1':
						$pregunta25_opc1++;
						break ;
					case '2':
						$pregunta25_opc2++;
						break ;
					default:
						break;
				}


				///////////////////////     PREGUNTA 26 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_26']) {
					case '1':
						$pregunta26_opc1++;
						break ;
					case '2':
						$pregunta26_opc2++;
						break ;
					case '3':
						$pregunta26_opc3++;
						break ;
					case '4':
						$pregunta26_opc4++;
						break ;
					case '5':
						$pregunta26_opc5++;
						break ;
					case '6':
						$pregunta26_opc6++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 27   /////////////////////////////////////

				$opciones_preg27 = (explode(",", $encuesta['Encuesta']['pregunta_27']));

				foreach ($opciones_preg27 as $opcion_preg27) {

					switch ($opcion_preg27) {
						case '1':
							$pregunta27_opc1++;
							break ;
						case '2':
							$pregunta27_opc2++;
							break ;
						case '3':
							$pregunta27_opc3++;
							break ;
						case '4':
							$pregunta27_opc4++;
							break ;
						case '5':
							$pregunta27_opc5++;
							break ;
						case '6':
							$pregunta27_opc6++;
							break ;
						case '7':
							$pregunta27_opc7++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 27 OTRAS  /////////////////////////////////////

				if(!empty($encuesta['Encuesta']['pregunta_27_otras'])){

					// guardo en un array cada una de las respuestas dadas por el usuario
					$pregunta27_otras[] = $encuesta['Encuesta']['pregunta_27_otras'];
				}


				///////////////////////     PREGUNTA 28   /////////////////////////////////////

				$opciones_preg28 = (explode(",", $encuesta['Encuesta']['pregunta_28']));

				foreach ($opciones_preg28 as $opcion_preg28) {

					switch ($opcion_preg28) {
						case '1':
							$pregunta28_opc1++;
							break ;
						case '2':
							$pregunta28_opc2++;
							break ;
						case '3':
							$pregunta28_opc3++;
							break ;
						case '4':
							$pregunta28_opc4++;
							break ;
						case '5':
							$pregunta28_opc5++;
							break ;
						case '6':
							$pregunta28_opc6++;
							break ;
						case '7':
							$pregunta28_opc7++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 28 OTRAS  /////////////////////////////////////

				if(!empty($encuesta['Encuesta']['pregunta_28_otras'])){

					// guardo en un array cada una de las respuestas dadas por el usuario
					$pregunta28_otras[] = $encuesta['Encuesta']['pregunta_28_otras'];
				}


				///////////////////////     PREGUNTA 29 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_29']) {
					case '1':
						$pregunta29_opc1++;
						break ;
					case '2':
						$pregunta29_opc2++;
						break ;
					case '3':
						$pregunta29_opc3++;
						break ;
					case '4':
						$pregunta29_opc4++;
						break ;
					case '5':
						$pregunta29_opc5++;
						break ;
					case '6':
						$pregunta29_opc6++;
					case '7':
						$pregunta29_opc7++;
						break ;
					default:
						break;
				}


				///////////////////////     PREGUNTA 30   /////////////////////////////////////

				// Separa el string en un elemento de array cada vez que encuentra una ",".
				$opciones_preg30 = (explode(",", $encuesta['Encuesta']['pregunta_30']));

				foreach ($opciones_preg30 as $opcion_preg30) {

					switch ($opcion_preg30) {
						case '1':
							$pregunta30_opc1++;
							break ;
						case '2':
							$pregunta30_opc2++;
							break ;
						case '3':
							$pregunta30_opc3++;
							break ;
						case '4':
							$pregunta30_opc4++;
							break ;
						case '5':
							$pregunta30_opc5++;
							break ;
						case '6':
							$pregunta30_opc6++;
							break ;
						case '7':
							$pregunta30_opc7++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 31   /////////////////////////////////////

				// Separa el string en un elemento de array cada vez que encuentra una ",".
				$opciones_preg31 = (explode(",", $encuesta['Encuesta']['pregunta_31']));

				foreach ($opciones_preg31 as $opcion_preg31) {

					switch ($opcion_preg31) {
						case '1':
							$pregunta31_opc1++;
							break ;
						case '2':
							$pregunta31_opc2++;
							break ;
						case '3':
							$pregunta31_opc3++;
							break ;
						case '4':
							$pregunta31_opc4++;
							break ;
						case '5':
							$pregunta31_opc5++;
							break ;
						case '6':
							$pregunta31_opc6++;
							break ;
						case '7':
							$pregunta31_opc7++;
							break ;
						case '8':
							$pregunta31_opc8++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 32 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_32']) {
					case '1':
						$pregunta32_Si++;
						$pregunta32_opc1++;
						break ;
					case '2':
						$pregunta32_Si++;
						$pregunta32_opc2++;
						break ;
					case '3':
						$pregunta32_Si++;
						$pregunta32_opc3++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 33 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_33']) {
					case '1':
						$pregunta33_opc1++;
						break ;
					case '2':
						$pregunta33_opc2++;
						break ;
					case '3':
						$pregunta33_opc3++;
						break ;
					case '4':
						$pregunta33_opc4++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 34   /////////////////////////////////////

				// Separa el string en un elemento de array cada vez que encuentra una ",".
				$opciones_preg34 = (explode(",", $encuesta['Encuesta']['pregunta_34']));

				foreach ($opciones_preg34 as $opcion_preg34) {

					switch ($opcion_preg34) {
						case '1':
							$pregunta34_opc1++;
							break ;
						case '2':
							$pregunta34_opc2++;
							break ;
						case '3':
							$pregunta34_opc3++;
							break ;
						case '4':
							$pregunta34_opc4++;
							break ;
						case '5':
							$pregunta34_opc5++;
							break ;
						case '6':
							$pregunta34_opc6++;
							break ;
						case '7':
							$pregunta34_opc7++;
							break ;
						default:
							break;
					}
				}


				///////////////////////     PREGUNTA 35 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_35']) {

					case 'No':
						$pregunta35_No++;
						break ;
					case '1':
						$pregunta35_Si++;
						$pregunta35_Si_opc1++;
						break ;
					case '2':
						$pregunta35_Si++;
						$pregunta35_Si_opc2++;
						break ;
					case '3':
						$pregunta35_Si++;
						$pregunta35_Si_opc3++;
						break ;
					case '4':
						$pregunta35_Si++;
						$pregunta35_Si_opc4++;
						break ;
					case '5':
						$pregunta35_Si++;
						$pregunta35_Si_opc5++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 36 (Depende de 35) /////////////////////////////////////

				// Si entra, significa que en 35 se respondio que SI
				if(!empty($encuesta['Encuesta']['pregunta_36'])){

					switch ($encuesta['Encuesta']['pregunta_36']) {
						case '1':
							$pregunta36_opc1++;
							break ;
						case '2':
							$pregunta36_opc2++;
							break ;
						case '3':
							$pregunta36_opc3++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 37 (Depende de 35) /////////////////////////////////////

				// Si entra, significa que en 35 se respondio que SI
				if(!empty($encuesta['Encuesta']['pregunta_37'])){

					switch ($encuesta['Encuesta']['pregunta_37']) {
						case '1':
							$pregunta37_opc1++;
							break ;
						case '2':
							$pregunta37_opc2++;
							break ;
						case '3':
							$pregunta37_opc3++;
							break ;
						case '4':
							$pregunta37_opc4++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 38 (Depende de 35) /////////////////////////////////////

				// Si entra, significa que en 35 se respondio que SI
				if(!empty($encuesta['Encuesta']['pregunta_38'])){

					switch ($encuesta['Encuesta']['pregunta_38']) {
						case '1':
							$pregunta38_opc1++;
							break ;
						case '2':
							$pregunta38_opc2++;
							break ;
						case '3':
							$pregunta38_opc3++;
							break ;
						case '4':
							$pregunta38_opc4++;
							break ;
						case '5':
							$pregunta38_opc5++;
							break ;
						case '6':
							$pregunta38_opc6++;
							break ;
						case '7':
							$pregunta38_opc7++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 39 (Depende de 35) /////////////////////////////////////

				// Si entra, significa que en 35 se respondio que SI
				if(!empty($encuesta['Encuesta']['pregunta_39'])){

					switch ($encuesta['Encuesta']['pregunta_39']) {
						case '1':
							$pregunta39_opc1++;
							break ;
						case '2':
							$pregunta39_opc2++;
							break ;
						case '3':
							$pregunta39_opc3++;
							break ;
						case '4':
							$pregunta39_opc4++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 40 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_40']) {
					case '1':
						$pregunta40_opc1++;
						break ;
					case '2':
						$pregunta40_opc2++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 41 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_41']) {
					case '1':
						$pregunta41_opc1++;
						break ;
					// Si es 2,3,4,5,6,7 significa que paso por violencia
					case '2':
						$pregunta41_Si++;
						$pregunta41_opc2++;
						break ;
					case '3':
						$pregunta41_Si++;
						$pregunta41_opc3++;
						break ;
					case '4':
						$pregunta41_Si++;
						$pregunta41_opc4++;
						break ;
					case '5':
						$pregunta41_Si++;
						$pregunta41_opc5++;
						break ;
					case '6':
						$pregunta41_Si++;
						$pregunta41_opc6++;
						break ;
					case '7':
						$pregunta41_Si++;
						$pregunta41_opc7++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 42 (Depende de 41) /////////////////////////////////////

				// Si entra, significa que en 41 se respondio que SI
				if(!empty($encuesta['Encuesta']['pregunta_42'])){

					switch ($encuesta['Encuesta']['pregunta_42']) {
						case '1':
							$pregunta42_opc1++;
							break ;
						case '2':
							$pregunta42_opc2++;
							break ;
						case '3':
							$pregunta42_opc3++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 43 (Depende de 41) /////////////////////////////////////

				// Si entra, significa que en 35 se respondio que SI
				if(!empty($encuesta['Encuesta']['pregunta_43'])){

					switch ($encuesta['Encuesta']['pregunta_43']) {
						case '1':
							$pregunta43_opc1++;
							break ;
						case '2':
							$pregunta43_opc2++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 44 (Depende de 41) /////////////////////////////////////

				// Si entra, significa que en 35 se respondio que SI
				if(!empty($encuesta['Encuesta']['pregunta_44'])){

					switch ($encuesta['Encuesta']['pregunta_44']) {
						case '1':
							$pregunta44_opc1++;
							break ;
						case '2':
							$pregunta44_opc2++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 45 (Depende de 41) /////////////////////////////////////

				// Si entra, significa que en 35 se respondio que SI
				if(!empty($encuesta['Encuesta']['pregunta_45'])){

					switch ($encuesta['Encuesta']['pregunta_45']) {
						case '1':
							$pregunta45_opc1++;
							break ;
						case '2':
							$pregunta45_opc2++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 46 /////////////////////////////////////

				switch ($encuesta['Encuesta']['pregunta_46']) {
					case '1':
						$pregunta46_opc1++;
						break ;
					case '2':
						$pregunta46_opc2++;
						break ;
					case '3':
						$pregunta46_opc3++;
						break ;
					default:
						break;
				}

				///////////////////////     PREGUNTA 47   /////////////////////////////////////

				$opciones_preg47 = (explode(",", $encuesta['Encuesta']['pregunta_47']));

				foreach ($opciones_preg47 as $opcion_preg47) {

					switch ($opcion_preg47) {
						case '1':
							$pregunta47_opc1++;
							break ;
						case '2':
							$pregunta47_opc2++;
							break ;
						case '3':
							$pregunta47_opc3++;
							break ;
						case '4':
							$pregunta47_opc4++;
							break ;
						case '5':
							$pregunta47_opc5++;
							break ;
						case '6':
							$pregunta47_opc6++;
							break ;
						case '7':
							$pregunta47_opc7++;
							break ;
						default:
							break;
					}
				}

				///////////////////////     PREGUNTA 47 OTRAS  /////////////////////////////////////

				if(!empty($encuesta['Encuesta']['pregunta_47_otras'])){

					// guardo en un array cada una de las respuestas dadas por el usuario
					$pregunta47_otras[] = $encuesta['Encuesta']['pregunta_47_otras'];
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
			$this->set(compact('pregunta9_No_opc6', 'pregunta9_No_opc7','pregunta9_No_opc8','pregunta9_No_opc9',								'pregunta9_No_opc10','pregunta9_No_opc11','pregunta9_No_opc12','pregunta9_No_opc13'));

			$this->set(compact('pregunta10_Si', 'pregunta10_No', 'pregunta10_Si_opc1', 'pregunta10_Si_opc2', 'pregunta10_Si_opc3'));
			$this->set(compact('pregunta11_opc1', 'pregunta11_opc2', 'pregunta11_opc3', 'pregunta11_opc4', 'pregunta11_opc5'));

			$this->set(compact('pregunta12_Si'));
			$this->set(compact('pregunta12_opc1', 'pregunta12_opc2', 'pregunta12_opc3', 'pregunta12_opc4'));
			$this->set(compact('pregunta13_opc1', 'pregunta13_opc2', 'pregunta13_opc3', 'pregunta13_opc4','pregunta13_opc5'));

			$this->set(compact('pregunta14_Si', 'pregunta14_No'));
			$this->set(compact('pregunta14_Si_opc1', 'pregunta14_Si_opc2', 'pregunta14_Si_opc3', 'pregunta14_Si_opc4', 							'pregunta14_Si_opc5','pregunta14_Si_opc6'));
			$this->set(compact('pregunta14_No_opc7','pregunta14_No_opc8','pregunta14_No_opc9','pregunta14_No_opc10',							'pregunta14_No_opc11','pregunta14_No_opc12','pregunta14_No_opc13', 'pregunta14_No_opc14', 						'pregunta14_No_opc15'));

			$this->set(compact('pregunta15_opc1', 'pregunta15_opc2', 'pregunta15_opc3', 'pregunta15_opc4', 'pregunta15_opc5',
							   'pregunta15_opc6', 'pregunta15_opc7'));

			$this->set(compact('pregunta16_opc1', 'pregunta16_opc2', 'pregunta16_opc3', 'pregunta16_opc4','pregunta16_opc5',
							   'pregunta16_opc6', 'pregunta16_opc7'));

			$this->set(compact('pregunta17_opc1', 'pregunta17_opc2', 'pregunta17_opc3', 'pregunta17_opc4'));

			$this->set(compact('pregunta18_opc1', 'pregunta18_opc2', 'pregunta18_opc3', 'pregunta18_opc4'));

			$this->set(compact('pregunta19_opc1', 'pregunta19_opc2', 'pregunta19_opc3', 'pregunta19_opc4','pregunta19_opc5',
							   'pregunta19_opc6', 'pregunta19_opc7'));

			$this->set(compact('pregunta19_otras'));

			$this->set(compact('pregunta20_Si', 'pregunta20_No'));

			$this->set(compact('pregunta20_Si_opc1', 'pregunta20_Si_opc2', 'pregunta20_Si_opc3'));

			$this->set(compact('pregunta21_Si', 'pregunta21_No'));

			$this->set(compact('pregunta22_opc1', 'pregunta22_opc2', 'pregunta22_opc3', 'pregunta22_opc4','pregunta22_opc5',
							   'pregunta22_opc6', 'pregunta22_opc7', 'pregunta22_opc8', 'pregunta22_opc9', 'pregunta22_opc10','pregunta22_opc11','pregunta22_opc12'));

			$this->set(compact('pregunta23_opc1', 'pregunta23_opc2', 'pregunta23_opc3', 'pregunta23_opc4','pregunta23_opc5',
							   'pregunta23_opc6'));

			$this->set(compact('pregunta24_opc1', 'pregunta24_opc2', 'pregunta24_opc3'));

			$this->set(compact('pregunta25_opc1', 'pregunta25_opc2'));

			$this->set(compact('pregunta26_opc1', 'pregunta26_opc2', 'pregunta26_opc3', 'pregunta26_opc4', 'pregunta26_opc5', 					'pregunta26_opc6'));

			$this->set(compact('pregunta27_opc1', 'pregunta27_opc2', 'pregunta27_opc3', 'pregunta27_opc4','pregunta27_opc5',
							   'pregunta27_opc6', 'pregunta27_opc7'));

			$this->set(compact('pregunta27_otras'));

			$this->set(compact('pregunta28_opc1', 'pregunta28_opc2', 'pregunta28_opc3', 'pregunta28_opc4','pregunta28_opc5',
							   'pregunta28_opc6', 'pregunta28_opc7'));

			$this->set(compact('pregunta28_otras'));

			$this->set(compact('pregunta29_opc1', 'pregunta29_opc2', 'pregunta29_opc3', 'pregunta29_opc4', 'pregunta29_opc5', 					'pregunta29_opc6', 'pregunta29_opc7'));

			$this->set(compact('pregunta30_opc1', 'pregunta30_opc2', 'pregunta30_opc3', 'pregunta30_opc4','pregunta30_opc5',
							   'pregunta30_opc6', 'pregunta30_opc7'));

			$this->set(compact('pregunta31_opc1', 'pregunta31_opc2', 'pregunta31_opc3', 'pregunta31_opc4','pregunta31_opc5',
							   'pregunta31_opc6', 'pregunta31_opc7', 'pregunta31_opc8'));

			$this->set(compact('pregunta32_Si'));
			$this->set(compact('pregunta32_opc1', 'pregunta32_opc2', 'pregunta32_opc3'));

			$this->set(compact('pregunta33_opc1', 'pregunta33_opc2', 'pregunta33_opc3', 'pregunta33_opc4'));

			$this->set(compact('pregunta34_opc1', 'pregunta34_opc2', 'pregunta34_opc3', 'pregunta34_opc4','pregunta34_opc5',
							   'pregunta34_opc6', 'pregunta34_opc7'));

			$this->set(compact('pregunta35_Si', 'pregunta35_No'));

			$this->set(compact('pregunta35_Si_opc1', 'pregunta35_Si_opc2', 'pregunta35_Si_opc3', 'pregunta35_Si_opc4',							 'pregunta35_Si_opc5'));

			$this->set(compact('pregunta36_opc1', 'pregunta36_opc2', 'pregunta36_opc3'));

			$this->set(compact('pregunta37_opc1', 'pregunta37_opc2', 'pregunta37_opc3', 'pregunta37_opc4'));

			$this->set(compact('pregunta38_opc1', 'pregunta38_opc2', 'pregunta38_opc3', 'pregunta38_opc4', 'pregunta38_opc5', 'pregunta38_opc6', 'pregunta38_opc7'));

			$this->set(compact('pregunta39_opc1', 'pregunta39_opc2', 'pregunta39_opc3', 'pregunta39_opc4'));

			$this->set(compact('pregunta40_opc1', 'pregunta40_opc2'));

			$this->set(compact('pregunta41_Si'));
			$this->set(compact('pregunta41_opc1', 'pregunta41_opc2', 'pregunta41_opc3', 'pregunta41_opc4', 'pregunta41_opc5', 'pregunta41_opc6', 'pregunta41_opc7'));

			$this->set(compact('pregunta42_opc1', 'pregunta42_opc2', 'pregunta42_opc3'));

			$this->set(compact('pregunta43_opc1', 'pregunta43_opc2'));

			$this->set(compact('pregunta44_opc1', 'pregunta44_opc2'));

			$this->set(compact('pregunta45_opc1', 'pregunta45_opc2'));

			$this->set(compact('pregunta46_opc1', 'pregunta46_opc2', 'pregunta46_opc3'));

			$this->set(compact('pregunta47_opc1', 'pregunta47_opc2', 'pregunta47_opc3', 'pregunta47_opc4','pregunta47_opc5',
							   'pregunta47_opc6', 'pregunta47_opc7'));

			$this->set(compact('pregunta47_otras'));

		} // cierra BUSCADOR;


	}
?>