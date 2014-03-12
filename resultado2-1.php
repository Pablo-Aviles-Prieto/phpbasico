<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>TODO write content</div>
        <?php
            $nombre = $_REQUEST['nombre'];
            $edad = $_REQUEST['edad'];
            //Cálculo y salida 
            If ($edad!=null)
            {
            echo $nombre." No está vacío";           
            } else { 
            echo $nombre." Está vacío";
            }
        ?>
    </body>
</html>