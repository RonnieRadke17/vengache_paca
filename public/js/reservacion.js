function validar() {
    validacion =true
    var nom,fecha,categoria;
    var express = /^[\w.-]+@[\w.-]+\.[a-z]+$/; // Expresión regular para validar el correo electrónico
    const nomApeExp = /^[A-Za-zÀ-ÖØ-öø-ÿ\s']+$/; // Expresión regular para validar nombre y apellido
    
    // Obtiene los valores de los campos del formulario
    nom = document.getElementById("Name").value;
    fecha = document.getElementById("fecha").value;
    categoria = document.getElementById("categoria").value;
    //categoria = document.getElementById("categoria").value;

    // Validación del campo "nombre"
    if (nom === "") {
        alert("Ingresa el nombre");
        return  validacion = false;
    } else if (nom.length > 30) {
        alert("El nombre solo puede tener hasta 30 caracteres");
        return  validacion = false;
    } else if (!nomApeExp.test(nom)) {
        alert("El nombre solo acepta caracteres válidos");
        return  validacion = false;
    }

    if (fecha === "") {
        alert("Ingresa la fecha");
        return  validacion = false;
    } else if (fecha.length > 30) {
        alert("La fecha solo puede tener hasta 30 caracteres");
        return  validacion = false;
    }


    if(categoria === "null"){
        alert("selecciona una mesa");
        return  validacion = false;
    }


    if(validacion){
        alert("registro exitoso")
        return validacion
    }
    


}
