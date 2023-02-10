/*********DECLARACION DE VARIABLES**********/
var Nomemp = "";
var Ed = "";
var Sucur = "";
var PatExam = /^[0-9]+$/i;

/*********SCRIPT PRINCIPAL**********/
$(document).ready(function() {
	$("#TabEmpleados").DataTable({
		"paging": false,
		"lengthChange": true,
		"searching": true,
		"ordering": true,
		"info": true,
		"responsive": true,
		"autoWidth": true,
		"language": {
	        "decimal": "",
	        "emptyTable": "No hay registros",
	        "info": "Mostrados:&nbsp;_START_ al _END_ de _TOTAL_ registros.",
	        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
	        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
	        "infoPostFix": "",
	        "thousands": ",",
	        "lengthMenu": "Registros por página:&nbsp; _MENU_",
	        "loadingRecords": "Cargando...",
	        "processing": "Procesando...",
	        "search": "",
            "searchPlaceholder": " ",
	        "zeroRecords": "Sin resultados encontrados",
        }
	});

	$('[type=search]').each(function () {
        $(this).addClass('d-none');        
	});

    $("#Suc").change(function() {
        Sucur = $("#Suc option:selected").text();
        if (Sucur != "«Seleccione un genero. . . . : »") {
            $('[type=search]').val(Sucur);
            $('[type=search]').keyup();
        }
    });

    $("#TexNombre").blur(function() {
        Nomemp = $("#TexNombre").val().length;
        if (Nomemp <= 50) {
            Nomemp = $("#TexNombre").val().toUpperCase();
            $("#TexNombre").val(Nomemp);
            $("#TexEdad").focus();
        } else if (Nomemp >= 51) {
            ShowErrorMessage("001", "error", "Nombre demasiado largo", "No debe tener más de 50 caracteres");
        }
    });

    $("#TexEdad").blur(function() {
        Ed = $("#TexEdad").val();
        Ed = Number(Ed);
        if (Ed != 0) {
            if (PatExam.test(Ed)) {
                if (Ed >= 101) {
                    ShowErrorMessage("003", "error", "Edad erronea", "La edad no debe ser mayor a 100 años");                
                } else if (Ed < 100) {
                    $("#Sexo").focus();
                }
            } else {
                ShowErrorMessage("002", "error", "Edad erronea", "La edad no debe contener caracteres alfabéticos");            
            }            
        } else if (Ed == 0 || Ed == "") {
            ShowErrorMessage("004", "error", "Edad erronea", "La edad es obligatoria");
        }
    });
});