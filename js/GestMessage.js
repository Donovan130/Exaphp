/******Script para gestión de errores en formularios******/

/****Función que recibe el codigo de error****/
function ShowErrorMessage(NumError, vIcono, vTitmessage, vMessage) {
	Swal.fire({
		position:'center',
		icon: vIcono,
		title: vTitmessage,
		text: vMessage,
		customClass: {
			popup: 'swal2-MyClass2',
			content: 'swal2-MyClass'
		},
		showClass: {
			popup:'animate__animated animate__fadeInDown'
		},
		hideClass: {
			popup: 'animate__animated animate__fadeOutUp'
		},
		confirmButtonText: 'Aceptar'
	}).then(function(Clean){
		if (Clean) {
			if (NumError == "001") {
				$("#TexNombre").focus();
			}
            if (NumError == "002") {
                $("#TexEdad").val("");
                $("#TexEdad").focus();
            }
            if (NumError == "003" || NumError == "004") {
                $("#TexEdad").val("");
                $("#TexEdad").focus();
            }            
		}
	});
}