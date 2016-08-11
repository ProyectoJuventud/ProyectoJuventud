<?php
  /**
   * Export all member records in .xls format
   * with the help of the xlsHelper
   */

  //declare the xls helper
  $xls= new xlsHelper();

  //input the export file name
  $xls->setHeader('Resultado_'.date('Y_m_d'));

  $xls->addXmlHeader();
  $xls->setWorkSheetName('Model');



  //1st row for columns name
  $xls->openRow();
    $xls->writeString('Cantidad de encuestas:');
    $xls->writeNumber($cantidadEncuestas);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('1) Edad');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('15 a 18 años');
    $xls->writeNumber($pregunta1_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('19 a 24 años');
    $xls->writeNumber($pregunta1_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('25 a 29 años');
    $xls->writeNumber($pregunta1_opc3);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('2) Sexo');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Masculino');
    $xls->writeNumber($pregunta2_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Femenino');
    $xls->writeNumber($pregunta2_opc2);
  $xls->closeRow();















  //rows for data
  // foreach ($models as $model):
  //   $xls->openRow();
  //   $xls->writeNumber($model['Model']['number_field_1']);
  //   $xls->writeString($model['Model']['string_field_2']);
  //   $xls->writeString($model['Model']['string_field_3']);
  //   $xls->writeNumber($model['Model']['number_field_4']);
  //   $xls->closeRow();
  // endforeach;

  $xls->addXmlFooter();
  exit();
?>