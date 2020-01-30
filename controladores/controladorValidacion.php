<?php

function validarRegistro() {
    $errores = [];

    if(isset($_POST['nombre'])) {
        if(empty($_POST['nombre'])){
            $errores['nombre'][] = "Este campo es obligatorio."; 
        }
        if(strlen($_POST['nombre']) < 2) {
            $errores['nombre'][] = "Tu nombre debe tener por lo menos 2 letras.";
        }
    }
    
    if(isset($_POST['email'])) {
        if(empty($_POST['email'])){
            $errores['email'][] = "Este campo es obligatorio."; 
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errores['email'][] = "El formato ingresado es incorrecto.";
        }
    }
    
    if(isset($_POST['pass'])) {
        if(empty($_POST['pass'])){
            $errores['pass'][] = "Este campo es obligatorio."; 
        }
        if(strlen($_POST['pass']) < 6) {
            $errores['pass'][] = "La contraseña debe tener por lo menos 6 letras.";
        }
    }
    
    if(isset($_POST['repass'])) {
        if(empty($_POST['repass'])){
            $errores['repass'][] = "Este campo es obligatorio."; 
        }
        if($_POST['pass'] != $_POST['repass']) {
            $errores['repass'][] = "Las contraseñas deben coincidir.";
        }
    }
    
    return $errores;
}

function persistirDato($campo, $errores) {
    if(isset($errores[$campo])) {
        return "";
    } else {
        if(isset($_POST[$campo])){
            return $_POST[$campo];
        }
    }
}

?>