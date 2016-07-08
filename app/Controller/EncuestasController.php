<?php
	App::uses('AppController', 'Controller');



	class EncuestasController extends AppController {

		public $components = array('RequestHandler');



		public function GetDepartamentos() {

			$this->request->allowMethod('ajax');

			if (!$this->request->is('post')) {

				throw new BadRequestException();
			}

			$this->loadModel('Departamento');

			$this->Departamento->recursive = -1;

			$departamentos = $this->Departamento->find('all');

	  		$departamentos =  Hash::extract($departamentos, '{n}.Departamento');

	  		echo json_encode($departamentos);

	  		$this->autoRender = false;
		}



		public function GetMunicipioPorId(){

			$this->request->allowMethod('ajax');

			if (!$this->request->is('post') || !isset($this->request->data['DepartamentoId'])) {

				throw new BadRequestException();
			}

			$this->loadModel('Municipio');

			$this->Municipio->recursive = -1;

			$municipios = $this->Municipio->find('all',  array('conditions' => array('Municipio.id_departamento' => $this->request->data['DepartamentoId'])));

	  		$municipios =  Hash::extract($municipios,'{n}.Municipio');

	  		echo json_encode($municipios);

	  		$this->autoRender = false;
		}



		public function index() {

			debug($_POST);

			if ($this->request->is('post')) {


				////////////////////////////   PREGUNTA 9 /////////////////////////////

				//  Si pregunta 9, recibe un array de SI, guardo en pregunta 9 el numero recibido en este ARRAY.
				if(isset($this->request->data['Encuesta']['pregunta_9']['Si'])){

					$this->request->data['Encuesta']['pregunta_9'] = $this->request->data['Encuesta']['pregunta_9']['Si'];
				}

				//  Si pregunta 9, recibe un array de NO, guardo en pregunta 9 el numero recibido en este ARRAY.
				if(isset($this->request->data['Encuesta']['pregunta_9']['No'])){

					$this->request->data['Encuesta']['pregunta_9'] = $this->request->data['Encuesta']['pregunta_9']['No'];
				}


				////////////////////////////   PREGUNTA 10 /////////////////////////////

				//  Pregunta 10 puede tomar 3 valores: VACIO, NO o un NUMERO.

				//  Si se abrio la pregunta 10 y eligio una opcion de SI, guardamos el numero de esta opcion.
				if(isset($this->request->data['Encuesta']['pregunta_10']['Si'])){

					$this->request->data['Encuesta']['pregunta_10'] = $this->request->data['Encuesta']['pregunta_10']['Si'];
				}

				// Si llega aca es porque pregunta 10 NO existe, o poruqe existe y elegio "NO".
				// Si existe es porque se abrio la pregunta 10 y selecciono NO, entonces guardo solo 'NO'.
				// Si no existe es porque en la pregunta 9 eligio SI y no se abrio la pregunta 10, y pone VACIO.
				else if(isset($this->request->data['Encuesta']['pregunta_10'])){

					$this->request->data['Encuesta']['pregunta_10'] = "No";
				}




				if ($this->Encuesta->save($this->request->data)) {

					$this->Session->setFlash('Encuesta almacenanda correctamente');
					// return $this->redirect(array('action' => 'index'));
				}
				else{
					$this->Session->setFlash('NO SE PUDO GUARDAR');
				}
			}
		}

	}
?>