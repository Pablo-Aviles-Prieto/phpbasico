<?php
require_once 'bbdd.php'; 
require_once 'func.php';
require_once 'userlogin.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Examen 2T</title>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="proveedores">&nbsp;</div>
        <h1>Listado de Proveedores</h1>
        <?php
            $bd = conectaBd();
            $consulta = "SELECT * FROM proveedor ORDER By NombreEmpresa";
            $resultado = $bd->query($consulta);
            if (!$resultado) {
                $url = "error.php?msg_error=Error_consulta_proveedor";
                header('Location:'.$url);
            } else {
                echo "<table border=1 width=100%>";
                echo "<tr>";
                echo "<th>Empresa</th>";
                echo "<th>Contacto</th>";
                echo "<th>Cargo</th>";
                echo "<th>Pais</th>";
                echo "<th>Telefono</th>";
                echo "</tr>";
                foreach($resultado as $registro) {
                    echo "<tr>";
                    echo "<td>".$registro['NombreEmpresa']."</td>";
                    echo "<td>".$registro['NombreContacto']."</td>";
                    echo "<td>".$registro['CargoContacto']."</td>";
                    echo "<td>".$registro['Pais']."</td>";
                    echo "<td>".$registro['Telefono']."</td>";
                }
                echo "</table>";
            }
            
            $bd = null;
        ?> 
    </body>
</html>
