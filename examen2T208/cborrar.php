<?php
require_once 'bbdd.php';
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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="formulario">&nbsp;</div>
        <h1>Confirmar Borrado</h1>
        <ul>
        <li><a href="index.php">Inicio</a></li>            
        <li><a href="listado.php">Listado</a></li>
        </ul>
        <?php
$_SESSION['IdProducto'] = (isset($_REQUEST['IdProducto']))?
            $_REQUEST['IdProducto']:0;

$bd = conectaBd();
$consulta = "SELECT * FROM producto WHERE IdProducto=".$_SESSION['IdProducto'];
$resultado = $bd->query($consulta);

if (!$resultado) {
       $url = "error.php?msg_error=Error_Consulta_Confirmar_Eliminar";
       header('Location:'.$url);
} else { 
       $registro = $resultado->fetch(); 
       if(!$registro) {
           $url = "error.php?msg_error=Error_Producto_Inexistente";
           header('Location:'.$url);
       } else {
           echo "Producto=".$registro['NombreProducto']."<br/>";
           echo "<a href='borrar.php'>Confirmar eliminar el producto</a><br/>";
           echo "<a href='listado.php'>Volver al listado</a><br/>";
       }
}  
?>
    </body>
</html>
