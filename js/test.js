function validar() {
    var nombre, apellido, correo, expresion, valContra;
    nombre = document.getElementById('nombre').value;
    apellido = document.getElementById('apellido').value;
    correo = document.getElementById('correo').value;
    
    expresion = /\w+@\w+\.+[a-z]/;
    valContra =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    
    
    if (nombre === "" || apellido === "" || correo ===  "") {
        alert("Todos los campos son obligatorios");
        return false;
    
    } else if (nombre.length > 30 ) {
    alert("el nombre es muy largo");
    return false;

    } else if (!/^([a-zA-ZñÑáéíóúÁÉÍÓÚ\s\ ])+$/i.test(nombre) ) {
    alert("el nombre solo puede contener letras");
    return false;

    } else if (apellido.length > 30 ) {
    alert("El apellido es muy largo");
    return false;

    } else if (!/^([a-zA-ZñÑáéíóúÁÉÍÓÚ\s\ ])+$/i.test(apellido ) ) {
    alert("el apellido solo puede contener letras");
    return false;
    
} else if (correo.length > 30 ) {
    alert("el correo es muy largo");
    return false;

} else if (!/^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/i.test(correo) )  {
    alert("Falta agregar @ arroba o una extensión de dominio ejemplo .com");
    return false;
    }
else {
    alert("el formulario ha sido enviado con éxito")
}
}