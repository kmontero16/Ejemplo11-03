<?php 
include('../Librerias/Constantes.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_SESSION["hm"]?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="../CSS/Estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>        
        <div id="contenedor">
            <div id="head"></div>
                <div id="menu"><?php include('../menu.php');?></div>
                <div id="contenido">
                    <form action="../Librerias/RecepcionVacaciones.php" method="post">
                        Rut: <input id="rut" name="rut" type="text">
                        <br>Nombre: <input id="nombre" name="nombre" type="text">
                        <br>Cargo: <input id="cargo" name="cargo" type="text">
                        <br>Fecha de inicio:<input id="fechaini" name="fechaini" type="text">
                        <br>Días totales:<input id="diastotales" type="text">
                        <br>Comentario<textarea id="comentario" rows="7" cols=20>   </textarea>
                        <input type="submit" value="Enviar"  >                     
                    </form>
                </div>
        </div>        
    </body>
    <script>
        $("#subsolicitud").show();
        $("#subsolicitud").addClass("active");
        $("#subsolicitud").css("display","block");
        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>

