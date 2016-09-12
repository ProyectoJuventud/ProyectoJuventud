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

  ///////////////////////////////////   PREGUNTA 1 ////////////////////////////////////////////////////////////

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

  ///////////////////////////////////   PREGUNTA 2 ////////////////////////////////////////////////////////////

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

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 3 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('3) Zona de origen');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Urbana');
    $xls->writeNumber($pregunta3_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Rural');
    $xls->writeNumber($pregunta3_opc2);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 4 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('4) Zona de Residencia');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Urbana');
    $xls->writeNumber($pregunta4_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Rural');
    $xls->writeNumber($pregunta4_opc2);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 5 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('5) Departamento de Residencia');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Colón');
    $xls->writeNumber($pregunta5_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Concordia');
    $xls->writeNumber($pregunta5_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Diamante');
    $xls->writeNumber($pregunta5_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Federacíon');
    $xls->writeNumber($pregunta5_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Federal');
    $xls->writeNumber($pregunta5_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Feliciano');
    $xls->writeNumber($pregunta5_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Gualeguay');
    $xls->writeNumber($pregunta5_opc7);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Gualeguachú');
    $xls->writeNumber($pregunta5_opc8);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Villa Paranacito');
    $xls->writeNumber($pregunta5_opc9);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('La Paz');
    $xls->writeNumber($pregunta5_opc10);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Nogoyá');
    $xls->writeNumber($pregunta5_opc11);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Paraná');
    $xls->writeNumber($pregunta5_opc11);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('San Salvador');
    $xls->writeNumber($pregunta5_opc11);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Rosario del Tala');
    $xls->writeNumber($pregunta5_opc11);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Concepción del Uruguay');
    $xls->writeNumber($pregunta5_opc11);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Victoria');
    $xls->writeNumber($pregunta5_opc11);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Villaguay');
    $xls->writeNumber($pregunta5_opc11);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 7 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('7) Hijos');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Con Hijos');
    $xls->writeNumber($pregunta7_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sin Hijos');
    $xls->writeNumber($pregunta7_opc2);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 8 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('8) ¿Con quien vivis?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Padres');
    $xls->writeNumber($pregunta8_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sin Padre/Madre con su conyuge');
    $xls->writeNumber($pregunta8_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Hermanos');
    $xls->writeNumber($pregunta8_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Familiar');
    $xls->writeNumber($pregunta8_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Hijos');
    $xls->writeNumber($pregunta8_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Pareja');
    $xls->writeNumber($pregunta8_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Pareja con sus hijos');
    $xls->writeNumber($pregunta8_opc7);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Amigos');
    $xls->writeNumber($pregunta8_opc8);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Solo');
    $xls->writeNumber($pregunta8_opc9);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta8_opc10);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 9 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('9) ¿Estudias?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta9_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta9_No);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  //////////////   PREGUNTA 9 Opciones SI ///////////////////////////////

  $xls->openRow();
    $xls->writeString('Personas que SI estudian:');
    $xls->writeNumber($pregunta9_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Nivel:');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Estudios Primarios');
    $xls->writeNumber($pregunta9_Si_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Estudios Secundarios');
    $xls->writeNumber($pregunta9_Si_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Terciarios/Universitarios');
    $xls->writeNumber($pregunta9_Si_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Posgrados');
    $xls->writeNumber($pregunta9_Si_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta9_Si_opc5);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  //////////////   PREGUNTA 9 Opciones NO ///////////////////////////////

  $xls->openRow();
    $xls->writeString('Personas que NO estudian:');
    $xls->writeNumber($pregunta9_No);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Motivos:');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Trabajo o busco trabajo');
    $xls->writeNumber($pregunta9_No_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Concluí mis estudios');
    $xls->writeNumber($pregunta9_No_opc7);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('La Institución educativa está muy lejos');
    $xls->writeNumber($pregunta9_No_opc8);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No puedo pagar los estudios');
    $xls->writeNumber($pregunta9_No_opc9);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No me interesa');
    $xls->writeNumber($pregunta9_No_opc10);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Estoy esperando un hijo/cuidado de hijo/s');
    $xls->writeNumber($pregunta9_No_opc11);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Enfermedad o discapacidad');
    $xls->writeNumber($pregunta9_No_opc12);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otro');
    $xls->writeNumber($pregunta9_No_opc13);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 10 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('10) En base a las personas que seleccionaron Que NO estudian:');
    $xls->writeNumber($pregunta9_No);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('¿Les gustarían estudiar?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta10_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta10_No);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('Personas que SI les gustaria estudiar:');
    $xls->writeNumber($pregunta10_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Motivos:');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Me aportaría sabers y conocimientos ');
    $xls->writeNumber($pregunta10_Si_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Conseguiría un mejor trabajo');
    $xls->writeNumber($pregunta10_Si_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta10_Si_opc3);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();


  ///////////////////////////////////   PREGUNTA 11 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('11) ¿Elegiste o elegirías una carrera según?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Gustos o deseos personales');
    $xls->writeNumber($pregunta11_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Para tener un mejor poder adquisitivo');
    $xls->writeNumber($pregunta11_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Tradicion Familiar');
    $xls->writeNumber($pregunta11_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Cercania y/o bajos costos');
    $xls->writeNumber($pregunta11_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta11_opc5);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();


  ///////////////////////////////////   PREGUNTA 12 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('12) ¿A que edad comenzaste a trabajar?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Nunca he trabajado');
    $xls->writeNumber($pregunta12_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('15 a 18 años');
    $xls->writeNumber($pregunta12_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('19 a 24 años');
    $xls->writeNumber($pregunta12_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('25 a 29 años');
    $xls->writeNumber($pregunta12_opc4);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 13 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('De acuerdo a las personas que SI trabajan: ');
    $xls->writeNumber($pregunta12_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('13) ¿Como conseguiste tu primer trabajo?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Presentando CV en comercio/fabrica/empresa');
    $xls->writeNumber($pregunta13_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Páginas Web a las cuales me subscribí');
    $xls->writeNumber($pregunta13_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Contacto por un familiar');
    $xls->writeNumber($pregunta13_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Contacto por un conocido');
    $xls->writeNumber($pregunta13_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta13_opc5);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 14 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('De acuerdo a las personas que SI trabajan:');
    $xls->writeNumber($pregunta12_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('14) ¿Trabajaste el ultimo mes?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta14_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta14_No);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  //////////////////////////////////

  $xls->openRow();
    $xls->writeString('Personas que SI trabajaron el último mes:');
    $xls->writeNumber($pregunta14_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Tipo:');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Relación de dependencia en blanco');
    $xls->writeNumber($pregunta14_Si_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Relación de dependencia en negro');
    $xls->writeNumber($pregunta14_Si_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Emprendimiento propio o familiar');
    $xls->writeNumber($pregunta14_Si_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Changas');
    $xls->writeNumber($pregunta14_Si_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Trabajos de limpieza, cuidado de niños, ancianos, etc');
    $xls->writeNumber($pregunta14_Si_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta14_Si_opc6);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  //////////////////////////////////

  $xls->openRow();
    $xls->writeString('Personas que NO trabajaron el último mes:');
    $xls->writeNumber($pregunta14_No);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Motivos:');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No busco trabajo');
    $xls->writeNumber($pregunta14_Si_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No encontre lo que buscaba');
    $xls->writeNumber($pregunta14_Si_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Tengo que cuidar a un familiar');
    $xls->writeNumber($pregunta14_Si_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Tengo que cuidar hijo/s');
    $xls->writeNumber($pregunta14_Si_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Estoy esperando un hijo/s');
    $xls->writeNumber($pregunta14_Si_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Enfermedad o discapacidad');
    $xls->writeNumber($pregunta14_Si_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No me interesa');
    $xls->writeNumber($pregunta14_Si_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Estoy estudiando');
    $xls->writeNumber($pregunta14_Si_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta14_Si_opc6);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();


  ///////////////////////////////////   PREGUNTA 15 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('De acuerdo a las personas que SI trabajan:');
    $xls->writeNumber($pregunta12_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('15) Eligieron su trabajo según');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Profesión/Conocimientos técnicos');
    $xls->writeNumber($pregunta15_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Posibilidades de hacer carrera');
    $xls->writeNumber($pregunta15_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Remuneración');
    $xls->writeNumber($pregunta15_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Flexibilidad horaria');
    $xls->writeNumber($pregunta15_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('La oferta existente');
    $xls->writeNumber($pregunta15_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Tradición familiar');
    $xls->writeNumber($pregunta15_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta15_opc7);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 16 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('16) ¿Cuales crees que son las principales dificultades para conseguir trabajo?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Poca disponibilidad horaria');
    $xls->writeNumber($pregunta16_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Poca oferta');
    $xls->writeNumber($pregunta16_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Las Distancias');
    $xls->writeNumber($pregunta16_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Por cuidado de hijos');
    $xls->writeNumber($pregunta16_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Porque tengo una discapacidad');
    $xls->writeNumber($pregunta16_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Porque no me gusta lo que hay disponible');
    $xls->writeNumber($pregunta16_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta16_opc7);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 17 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('17) Para llegar a tu Institución Educativa demorás...');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('De 0 a 30 minutos');
    $xls->writeNumber($pregunta17_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('De 30 minutos a 1 hora');
    $xls->writeNumber($pregunta17_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('De 1 a 2 horas');
    $xls->writeNumber($pregunta17_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Mas 2 horas');
    $xls->writeNumber($pregunta17_opc4);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 18 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('18) Para llegar a tu trabajo demorás...');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('De 0 a 30 minutos');
    $xls->writeNumber($pregunta18_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('De 30 minutos a 1 hora');
    $xls->writeNumber($pregunta18_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('De 1 a 2 horas');
    $xls->writeNumber($pregunta18_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Mas 2 horas');
    $xls->writeNumber($pregunta18_opc4);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 19 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('19) Participás en organizaciones');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Políticas');
    $xls->writeNumber($pregunta19_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Religiosas');
    $xls->writeNumber($pregunta19_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Ambientales');
    $xls->writeNumber($pregunta19_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Humanitarias');
    $xls->writeNumber($pregunta19_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Culturales');
    $xls->writeNumber($pregunta19_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Recreativas');
    $xls->writeNumber($pregunta19_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta19_opc4);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 20 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('20) ¿Realizas algun deporte o actividad física?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta20_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta20_No);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ////////////////////////////

  $xls->openRow();
    $xls->writeString('Personas que SI realizan algun deporte o actividad física: ');
    $xls->writeNumber($pregunta20_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Cantidad:');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('1 vez a la semana');
    $xls->writeNumber($pregunta20_Si_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('2 o 3 veces a la semana');
    $xls->writeNumber($pregunta20_Si_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Más de 3 veces a la semana');
    $xls->writeNumber($pregunta20_Si_opc3);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 21 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('21) ¿Tenes acceso a internet?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta21_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta21_No);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 22 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('22) ¿Cuales son los principales sitios que visitas?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Facebook');
    $xls->writeNumber($pregunta22_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Twitter');
    $xls->writeNumber($pregunta22_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Instagram');
    $xls->writeNumber($pregunta22_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Whatsapp');
    $xls->writeNumber($pregunta22_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Skype');
    $xls->writeNumber($pregunta22_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Correo electrónico');
    $xls->writeNumber($pregunta22_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('YouTube');
    $xls->writeNumber($pregunta22_opc7);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Plataformas del trabajo');
    $xls->writeNumber($pregunta22_opc8);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Bolsas de Trabajo');
    $xls->writeNumber($pregunta22_opc9);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Facultad');
    $xls->writeNumber($pregunta22_opc10);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Ebooks');
    $xls->writeNumber($pregunta22_opc11);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta22_opc12);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 23 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('23) ¿Desde donde te contectas?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Casa');
    $xls->writeNumber($pregunta23_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Escuela/Facultad');
    $xls->writeNumber($pregunta23_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Trabajo');
    $xls->writeNumber($pregunta23_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Casa de un amigo/Familiar');
    $xls->writeNumber($pregunta23_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Espacio público');
    $xls->writeNumber($pregunta23_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta23_opc6);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 24 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('24) ¿Con que frecuencia te conectas?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Ocasionalmente');
    $xls->writeNumber($pregunta24_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Periódicamente');
    $xls->writeNumber($pregunta24_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Diariamente');
    $xls->writeNumber($pregunta24_opc3);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();


  ///////////////////////////////////   PREGUNTA 25 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('25) ¿Conoces algún centro de salud cercano a tu residencia?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta25_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta25_opc2);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 26 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('26) Cuando necesitas atención médica o queres saber algo sobre la salud, cuidado del cuerpo, vas al...');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Centro de salud');
    $xls->writeNumber($pregunta26_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Hospital');
    $xls->writeNumber($pregunta26_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Clínica o consultorio privado');
    $xls->writeNumber($pregunta26_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Consulta con un familiar/amigo');
    $xls->writeNumber($pregunta26_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Busco soluciones en la Web');
    $xls->writeNumber($pregunta26_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Ningun lado, me quedo en casa');
    $xls->writeNumber($pregunta26_opc6);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();


  ///////////////////////////////////   PREGUNTA 27 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('27) ¿Han participado o recibido información en talleres o charlas relacionadas a tu salud en los últimos 6 meses?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta27_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta27_No);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////

  $xls->openRow();
    $xls->writeString('De acuerdo a las personas que SI han participado o recibido información en talleres o charlas: ');
    $xls->writeNumber($pregunta27_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Talleres o charlas:');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Metodos anticonceptivos y embarazo');
    $xls->writeNumber($pregunta27_Si_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Adicciones (alcohol, cigarrillos, drogas, etc)');
    $xls->writeNumber($pregunta27_Si_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Planificación familiar');
    $xls->writeNumber($pregunta27_Si_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Diversidad sexual');
    $xls->writeNumber($pregunta27_Si_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Enfermedades estacionales o epidemias');
    $xls->writeNumber($pregunta27_Si_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Violencias');
    $xls->writeNumber($pregunta27_Si_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta27_Si_opc7);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 28 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('28) ¿Considerías que es importante que existieran talleres o charlas relacionadas con tu salud?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta28_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta28_No);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////

  $xls->openRow();
    $xls->writeString('28) De acuerdo a las personas que SI consideran que es importante que existieran talleres o charlas:');
    $xls->writeNumber($pregunta28_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Talleres o charlas consideradas importantes:');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Metodos anticonceptivos y embarazo');
    $xls->writeNumber($pregunta28_Si_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Adicciones (alcohol, cigarrillos, drogas, etc)');
    $xls->writeNumber($pregunta28_Si_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Planificación familiar');
    $xls->writeNumber($pregunta28_Si_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Diversidad sexual');
    $xls->writeNumber($pregunta28_Si_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Enfermedades estacionales o epidemias');
    $xls->writeNumber($pregunta28_Si_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Violencias');
    $xls->writeNumber($pregunta28_Si_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta28_Si_opc7);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 29 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('29) ¿A que edad tuviste tu primer relación sexual?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Nunca');
    $xls->writeNumber($pregunta29_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('13 años');
    $xls->writeNumber($pregunta29_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('14 años');
    $xls->writeNumber($pregunta29_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('15 años');
    $xls->writeNumber($pregunta29_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('16 años');
    $xls->writeNumber($pregunta29_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('17 años');
    $xls->writeNumber($pregunta29_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('18 años o más');
    $xls->writeNumber($pregunta29_opc7);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 30 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('30) ¿Cuales de los siguientes métodos anticonceptivos crees que son eficientes?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Método del calendario');
    $xls->writeNumber($pregunta30_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Coito interrumpido');
    $xls->writeNumber($pregunta30_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Pastillas anticonceptivas');
    $xls->writeNumber($pregunta30_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Pastillas del "Dia despues"');
    $xls->writeNumber($pregunta30_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('DIU');
    $xls->writeNumber($pregunta30_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Parches');
    $xls->writeNumber($pregunta30_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Preservativos');
    $xls->writeNumber($pregunta30_opc7);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();


  ///////////////////////////////////   PREGUNTA 31 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('31) ¿Cual utilizás frecuentemente?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Pastillas anticonceptivas');
    $xls->writeNumber($pregunta31_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Coito interrumpido');
    $xls->writeNumber($pregunta31_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Pastillas del "Dia despues"');
    $xls->writeNumber($pregunta31_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Método del calendario');
    $xls->writeNumber($pregunta31_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('DIU');
    $xls->writeNumber($pregunta31_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Parches');
    $xls->writeNumber($pregunta31_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Preservativos');
    $xls->writeNumber($pregunta31_opc7);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Ninguno de los anteriores');
    $xls->writeNumber($pregunta31_opc8);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();


  ///////////////////////////////////   PREGUNTA 32 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('32) ¿Durante el embarazo te hiciste los chequeos correspondientes? ');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Se aplica a personas que son mujeres y tuvieron hijos: ');
    $xls->writeNumber($pregunta32_Si);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta32_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta32_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No conozco cuales son');
    $xls->writeNumber($pregunta32_opc3);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 33 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('33) ¿Cuando comienza la paternidad?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Cuando se concibe al bebe');
    $xls->writeNumber($pregunta33_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Durante el embarazo');
    $xls->writeNumber($pregunta33_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Cuando nace');
    $xls->writeNumber($pregunta33_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Cuando la mama lo decide');
    $xls->writeNumber($pregunta33_opc4);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 34 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('34) ¿Que considerás como drogas?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Cocaina');
    $xls->writeNumber($pregunta34_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Metanfetaminas');
    $xls->writeNumber($pregunta34_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Marihuana');
    $xls->writeNumber($pregunta34_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Paco');
    $xls->writeNumber($pregunta34_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Alcohol');
    $xls->writeNumber($pregunta34_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Cigarrillos');
    $xls->writeNumber($pregunta34_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otras');
    $xls->writeNumber($pregunta34_opc7);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 35 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('35) ¿Consumís alguna de las anteriores?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta35_Si );
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta35_No );
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  //////////////////////////////

  $xls->openRow();
    $xls->writeString('De acuerdo a las personas que SI consumen alguna droga:');
    $xls->writeNumber($pregunta35_Si);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('Cantidad:');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('1 vez cada 6 meses');
    $xls->writeNumber($pregunta35_Si_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('1 vez al mes');
    $xls->writeNumber($pregunta35_Si_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('1 vez a la semana');
    $xls->writeNumber($pregunta35_Si_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('2 a 3 veces a la semana');
    $xls->writeNumber($pregunta35_Si_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Más de 3 veces por semana');
    $xls->writeNumber($pregunta35_Si_opc5);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();


  ///////////////////////////////////   PREGUNTA 36 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('De acuerdo a las personas que SI consumen alguna droga:');
    $xls->writeNumber($pregunta35_Si);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('36) ¿A que edad comenzaste a consumir?:');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('15 a 18 años');
    $xls->writeNumber($pregunta36_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('19 a 24 años');
    $xls->writeNumber($pregunta36_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('25 a 29 años');
    $xls->writeNumber($pregunta36_opc3);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 37 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('De acuerdo a las personas que SI consumen alguna droga:');
    $xls->writeNumber($pregunta35_Si);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('37) ¿En que lugar fue tu primer consumo?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Solo en casa');
    $xls->writeNumber($pregunta37_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('En casa y con amigos');
    $xls->writeNumber($pregunta37_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('En una fiesta fuera de casa');
    $xls->writeNumber($pregunta37_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta37_opc4);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 38 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('De acuerdo a las personas que SI consumen alguna droga:');
    $xls->writeNumber($pregunta35_Si);
  $xls->closeRow();

   $xls->openRow();
    $xls->writeString('38) ¿Cual droga probaste por primera vez?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Cocaina');
    $xls->writeNumber($pregunta38_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Metanfetaminas');
    $xls->writeNumber($pregunta38_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Marihuana');
    $xls->writeNumber($pregunta38_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Paco');
    $xls->writeNumber($pregunta38_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Alcohol');
    $xls->writeNumber($pregunta38_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Cigarrillos');
    $xls->writeNumber($pregunta38_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otras');
    $xls->writeNumber($pregunta38_opc7);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 39 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('De acuerdo a las personas que SI consumen alguna droga:');
    $xls->writeNumber($pregunta35_Si);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('39) ¿Dónde y con quienes consumís?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Solo en casa');
    $xls->writeNumber($pregunta39_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('En casa y con amigos');
    $xls->writeNumber($pregunta39_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('En una fiesta fuera de casa');
    $xls->writeNumber($pregunta39_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta39_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Alcohol');
    $xls->writeNumber($pregunta39_opc5);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 40 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('40) Pensas que es un problema el consumo de drogas?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta40_opc1 );
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta40_opc2 );
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 41 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('41) ¿Considerás que pasaste por alguna situación de violencia física o psicologica? Seleccionar aquellas que creas más relevante');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Nunca');
    $xls->writeNumber($pregunta41_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('En casa');
    $xls->writeNumber($pregunta41_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('En la escuela/facultad');
    $xls->writeNumber($pregunta41_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('En el trabajo');
    $xls->writeNumber($pregunta41_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('En el barrio');
    $xls->writeNumber($pregunta41_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('En la organización a la que pertenezco');
    $xls->writeNumber($pregunta41_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta41_opc7);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();


  ///////////////////////////////////   PREGUNTA 42 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('De acuerdo a las personas que SI pasaron por alguna situación de violencia física o psicologica:');
    $xls->writeNumber($pregunta41_Si);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('42) ¿Con que frecuencia?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Al menos una vez');
    $xls->writeNumber($pregunta42_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Ocasionalmente');
    $xls->writeNumber($pregunta42_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Periodicamente');
    $xls->writeNumber($pregunta42_opc3);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 43 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('De acuerdo a las personas que SI pasaron por alguna situación de violencia física o psicologica:');
    $xls->writeNumber($pregunta41_Si);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('43) ¿Considerás que es necesario hacer la denuncia?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta43_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta43_opc2);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 44 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('De acuerdo a las personas que SI pasaron por alguna situación de violencia física o psicologica:');
    $xls->writeNumber($pregunta41_Si);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('44) ¿Lo has denunciado?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta44_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta44_opc2);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  ///////////////////////////////////   PREGUNTA 45 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('De acuerdo a las personas que SI pasaron por alguna situación de violencia física o psicologica:');
    $xls->writeNumber($pregunta41_Si);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('45) ¿Crees que es una problematica a tratar en ambas partes?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Sí');
    $xls->writeNumber($pregunta45_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('No');
    $xls->writeNumber($pregunta45_opc2);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();


  ///////////////////////////////////   PREGUNTA 46 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('46) ¿Cual es el número a llamar en caso de violencia de género?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('144');
    $xls->writeNumber($pregunta46_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('111');
    $xls->writeNumber($pregunta46_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('110');
    $xls->writeNumber($pregunta46_opc3);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();


  ///////////////////////////////////   PREGUNTA 47 ////////////////////////////////////////////////////////////

  $xls->openRow();
    $xls->writeString('47) ¿Cuales consideras que son problemas de los jovenes?');
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Adicciones');
    $xls->writeNumber($pregunta47_opc1);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Primer empleo');
    $xls->writeNumber($pregunta47_opc2);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Bulling');
    $xls->writeNumber($pregunta47_opc3);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Maternidad/Paternidad temprana');
    $xls->writeNumber($pregunta47_opc4);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('En Diversidad sexual');
    $xls->writeNumber($pregunta47_opc5);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Indigencia');
    $xls->writeNumber($pregunta47_opc6);
  $xls->closeRow();
  $xls->openRow();
    $xls->writeString('Otros');
    $xls->writeNumber($pregunta47_opc7);
  $xls->closeRow();

  $xls->openRow();
    $xls->writeString('');
  $xls->closeRow();

  //////////////////////////////////////////////////////////////////////////////////////////////////////////

  $xls->addXmlFooter();
  exit();
?>