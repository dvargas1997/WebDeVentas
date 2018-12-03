function Validar() {
	var nombre, apellido, email, usuario, password, telefono;
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	email = document.getElementById("email").value;
	usuario = document.getElementById("usuario").value;
	password = document.getElementById("password").value;
	telefono = document.getElementById("telefono").value;
	

	if(nombre ==="" || apellido ==="" || email ==="" || usuario ==="" || password ==="" || telefono ===""){
		alert ("Todos los campos son obligatorios");
		return false;
	}

	else if (telefono.length>10){
		alert("el telefono ingresado es muy largo");
		return false;
	}
	else if (telefono.length<8){
		alert("el telefono ingresado es muy pequeño")
		return false;
	}
	else if (isNaN(telefono)){

		alert("el telefono ingresado no es un numero");
		return false;
	}
}