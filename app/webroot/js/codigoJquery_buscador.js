$(document).ready(function(){

	var departamentosDDL = $('#filtro_departamento');

	//  Para poner el Departameto seleccionado al devolver la lista de encuestas filtradas. Este DIV "departamento_seleccionado" solo
	// existe si ha elegido algun departamento para filtrar y en su atributo ID tiene el ID del departamento seleccionado.
	var id_departamento = $('.departamento_seleccionado').attr("id");

	$.ajax({
		url: 'getdepartamentos',
		method: 'POST',
		dataType: 'json',

		success: function (data) {

			$(data).each(function (index, departamento) {

				departamentosDDL.append($('<option/>', { value: departamento.Departamento.id, text: departamento.Departamento.nombre_departamento}));
			});

			// Una vez que cargue todos los departamentos, verifico si hay algun departamento seleccionado y traido desde el controller
			// para ponerle este valor en el select de departamentos.

			//  Si es "undefined" es porque no hemos utilizado el filtro de Departamentos.
			if(id_departamento !== undefined){

				// Le damos al filtro el id del departamento seleccionado en el filtro y lo ponemos en VALUE para que ponga
				// el nombre del departamento correspondiente en el SELECT.
				$('#filtro_departamento').val(id_departamento).change();
			}
		},
		error: function (err) {
			alert('Se produjo un error al cargar la lista de Departamentos.');
		}
	});

});