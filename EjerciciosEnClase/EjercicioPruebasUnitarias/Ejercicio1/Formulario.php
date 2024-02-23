<?php
class Formulario{
    public function ValidarNombre($nombre){
        if($nombre == ""){
            return "El nombre no puede estar vacio";
        }
        if(strlen($nombre) < 3){
            return "El nombre debe tener al menos 3 caracteres";
        }
        if(strlen($nombre) > 30){
            return "El nombre no puede tener mas de 30 caracteres";
        }
        return "Nombre valido";
    }

    public function ValidarCorreo($correo){
        if($correo == ""){
            return "El correo no puede estar vacio";
        }
        if(strlen($correo) < 7){
            return "El correo debe tener al menos 7 caracteres";
        }
        if(strlen($correo) > 20){
            return "El correo no puede tener mas de 20 caracteres";
        }
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            return "El correo no es valido";
        }
        return "Correo valido";
    }

    public function ValidarContrasena($contrasena){
        if($contrasena == ""){
            return "La contraseña no puede estar vacia";
        }
        if(strlen($contrasena) < 5){
            return "La contraseña debe tener al menos 5 caracteres";
        }
        if(strlen($contrasena) > 16){
            return "La contraseña no puede tener mas de 16 caracteres";
        }
        if(!preg_match('/[A-Z]/', $contrasena)){
            return "La contraseña debe tener al menos una mayuscula";
        }
        if(!preg_match('/[a-z]/', $contrasena)){
            return "La contraseña debe tener al menos una minuscula";
        }
        if(!preg_match('/[0-9]/', $contrasena)){
            return "La contraseña debe tener al menos un numero";
        }
        if(!preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $contrasena)){
            return "La contraseña debe tener al menos un caracter especial";
        }
        return "Contraseña valida";
    }
}
?>