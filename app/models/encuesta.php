<?php

class Encuesta extends AppModel {

	var $name = 'Encuesta';

	var $validate = array(
        'pregunta_1' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => '',
            )
        ),

        'pregunta_2' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => '',
            )
        ),

        'pregunta_3' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => '',
            )
        ),

        'pregunta_4' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => '',
            )
        ),

        'pregunta_7' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => '',
            )
        ),

        'pregunta_8' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => '',
            )
        ),

        'pregunta_25' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => '',
            )
        ),

        'pregunta_26' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => '',
            )
        ),

        'pregunta_29' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => '',
            )
        ),

        'pregunta_33' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => '',
            )
        ),

        'pregunta_40' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => '',
            )
        ),

        'pregunta_46' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => '',
            )
        )
    );

}

?>