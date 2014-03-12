<?php

//Definición de constantes
define('EDAD_MINIMA', 1);
define('EDAD_MAXIMA', 100);

//Función para validar formularios.
//Indica si un valor es un número entero

function validarEntero ($valor) {
    if (filter_var($valor, FILTER_VALIDATE_INT)) {
        return true;
    } else {    
        return false;
    }
}

function comprobarRango ($valor, $inicio, $final) {
    return ($valor>=$inicio && $valor<=$final);
}

function validarEdad($valor) {
    return(validarEntero($valor) &&
            comprobarRango($valor, EDAD_MINIMA, EDAD_MAXIMA));
}

function validarNombre($valor) {
        $valor = limpiarTexto($valor);
    if ($valor=="") {
        return false;
    } else {
        return true;
    }
}

function limpiarTexto($valor) {
    if (isset($valor)) {
        $valor = htmlspecialchars($valor, ENT_QUOTES, "ISO-8859-1");
        $valor = strip_tags(trim($valor));
    } else {
        $valor = "";
    }
    return $valor;
}


//Verifica que un nombre solo tenga letras, al menos una.
function validarNombreEstricto($valor) {
    $patron= "/^[[:alpha:]]+$/";
    if (preg_match($patron, $valor)) {
        return true;
    } else {
        return false;
    }    
}


function resultadoCheck($valor) {
    if (isset($valor)) {
        return true;
    } else {
        return false;
    }
}
