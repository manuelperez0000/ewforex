function enviar(){	
			var dato = document.getElementById("pass");	
			var dato1 = document.getElementById("pass1");	
			if (dato.value==dato1.value){
				/*alert("claves bien");*/
				formulario.submit();
				return true;
			} else {
				alert("Los passwords no son iguales");
				document.getElementById("pass").setAttribute("class", "form-control pass_error");
				document.getElementById("pass1").setAttribute("class", "form-control pass_error");
				return false;
			}
		}