<?php require_once 'funciones_db.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Inventario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>INVENTARIO</div>
        <?php
            $bd = conectaBd();
            $consulta = "SELECT * FROM equipo";
            $resultado = $bd->query($consulta);
            print_r($resultado);
            if (!$resultado) {
                echo "No hay Equipos...";
            } else {
                echo "Equipo<br>Nombre<br>";
                foreach($resultado as $registro) {
                    echo $registro['nombre']."<br>"; 
                }
            }
            
            $bd = null;
        ?>    
    </body>
</html>
