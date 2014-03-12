<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function comprobarMasa($valor) {
    if ($valor = '') {
        return true;
    } else {
        return false;
    }
}

function calculoIMC($masa, $estatura) {
    $estatura1 = $estatura / 100;
    $estatura2 = $estatura1 * $estatura1;
    $imc = $masa / $estatura2;
    return round($imc, 2);
}
    

function clasificacionIMC($imc) {
        If ($imc < 18.50) {
            $clasificacion = "Bajo peso";
        } elseif ($imc < 25){
            $clasificacion = "Normal";
        } elseif ($imc < 30) {
            $clasificacion = "Sobrepeso";
        } else {
            $clasificacion = "Obesidad";
        }
        return $clasificacion;
}


function enRango($inicio, $fin, $valor) {
    return ($valor>=$inicio && $valor<=$fin);
}

//Definición de constantes
define('PESO_MIN', 1);
define('PESO_MAX', 500);
define('ALT_MIN', 0);
define('ALT_MAX', 300);
define('MSG_ERR_PESO', 'Peso mal introducido');
define('MSG_ERR_ALT', 'Altura mal introducida');

/**
 * validarPeso
 * Validar peso: Indica si el valor de peso es correcto
 * @param peso debe ser un valor numérico entre lo definido en ctes...
 * @return boolean True si cumple y False en caso contrario
 */
function validarPeso($masa) {
    if (filter_var($masa,FILTER_VALIDATE_INT)) {
        $resultado = enRango(PESO_MIN, PESO_MAX, $masa);
    } else {
        $resultado = FALSE;
    }
    return $resultado;
}

/**
 * validarEstatura
 * Validar estatura: Indica si el valor de estatura es correcto
 * @param estatura debe ser un valor numérico entre ctes definidas...
 * @return boolean True si cumple y False en caso contrario
 */
function validarAltura($altura) {
    if (filter_var($altura,FILTER_VALIDATE_INT)) {
        $resultado2 = enRango(ALT_MIN, ALT_MAX, $altura);
    } else {
        $resultado2 = FALSE;
    }
    return $resultado2;
}