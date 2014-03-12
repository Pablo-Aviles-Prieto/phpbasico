<?php require_once 'validateIMC.php'; ?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>El formulario</div>
        <?php
        $masa = $_REQUEST['masa'];
        $altura = $_REQUEST['altura'];
        $errores = array();
        
        //Validar peso
        If (!validarPeso($masa)) {
            $errores[] = MSG_ERR_PESO;
        }
        
         //Validar altura
        If (!validarAltura($altura)) {
          $errores[] = MSG_ERR_ALT;
        }
        

        If (count($errores)>0) {
            echo "Errores<br>";
            foreach($errores as $error) {
                echo $error.'<br>';
                
            }
        } else {
        //Cálculo
        $imc = calculoIMC($masa, $altura);
        $clasificacion = clasificacionIMC($imc);
         //Resultado
        echo "Su IMC es ".$imc;
        echo "<br>";
        echo "Clasificación = ".$clasificacion;       
        }
        ?>
    </body>
</html>

