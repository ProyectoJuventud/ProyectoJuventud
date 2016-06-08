<?php
	App::uses('AppController', 'Controller');

	class EncuestasController extends AppController {

		public function index() {

			if ($this->request->is('post')) {

				debug($_POST);

				debug($this->request->data['Encuesta']['pregunta_1']);
			}
		}

	}
?>