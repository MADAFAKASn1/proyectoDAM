<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrar</title>
    </head>
    <body>
        El formulario de: <br>
        <?php 
            echo $_POST["nombreapel"]; 
        ?> 		
        con edad <br>
        <?php 
            echo $_POST["edad"]; 
        ?> 
        con genero: <br>
        <?php 
            echo $_POST["genero"]; 
        ?> 
        con correo: <br>
        <?php 
            echo $_POST["email"]; 
        ?> 
        y sugiere: <br>
        <?php 
            echo $_POST["descripcion"]; 
        ?>   
        se ha registrado correctamente en el servidor
    </body>
</html>