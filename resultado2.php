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
            If ($edad>=18)
            {
            echo $nombre." Es mayor de edad";           
            } else { 
            echo $nombre." Es menor de edad";
            }
        ?>
    </body>
</html>