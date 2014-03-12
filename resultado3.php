<?php require_once 'validate.php'; ?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>El formulario</div>
        <?php
            //Entrada datos
            $nombre = $_REQUEST['nombre'];
            $edad = $_REQUEST['edad'];
            $beca = (isset($_REQUEST['beca']))?true:false;
            $sexo = (isset($_REQUEST['sexo']))?$_REQUEST['sexo']:false;
            $estado = (isset($_REQUEST['estado']))?$_REQUEST['estado']:false;
            //Validar datos
            $error = false;
            $mensaje_error = "ERROR: ";
            //Validar nombre
            $nombre = limpiarTexto($nombre);
            If (!validarNombre($nombre)) {
                $error = true;
                $mensaje_error .= "Nombre obligatorio ";
            } else {
                echo $nombre;
            }
            //Validar edad
            If (!validarEdad($edad)) {
                $error = true;
                $mensaje_error .= "La edad debe ser un digito ";
            }
            //Validar sexo
            If (!($sexo)) {
                $error = true;
                $mensaje_error .= "Sexo no seleccionado ...<br> "; 
             }
            //Estado civil
            If (!($estado)) {
                $error = true;
                $mensaje_error .= "Estado civil no seleccionado ...<br>";
                }
            //Cálculo y salida 
            If ($edad>=18)
                {
                    echo " Es mayor de edad <br>";           
                } else { 
                    echo " Es menor de edad <br>";
            
            }
            //Si se solicita beca
            If ($beca) {
                echo " Solicita beca <br>";
            } else {
            echo " No solicita beca <br>";  
            }
            //Te devuelva el sexo seleccionado
            echo "Sexo = " .$sexo;
            //Salto de línea
            echo "<br>";
            //Te devuelva el estado civil seleccionado
            echo "Estado civil, " .$estado;
            //Salto de línea
            echo "<br>";
            //Si hay error
            If ($error) {
            echo $mensaje_error; 
            } else {
                echo "<br><a href='formulario3.html'>Volver al formulario</a>";
            }
        ?>
    </body>
</html>