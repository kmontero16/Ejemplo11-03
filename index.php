<?php
include('./Librerias/Constantes.php');
include('./Librerias/VacacionesClass.php');

$_SESSION["hm"]="Pagina en PHP";
$vaca=new Vacaciones( "1-9", "Test", "Cargo test", "", "", "comentarios test");
$_SESSION["regVacaciones"]=$vaca;
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_SESSION["hm"]?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="CSS/Estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="contenedor">
            <div id="head"></div>
            <div id="menu" ><?php include('menu.php');?></div>
            <div id="contenido"></div>
        </div>
    </body>
    <script>
        $("#prisolicitud").on("click",
        function(event){
            $("#subsolicitud").show;
            $("#subsolicitud").css("display","block");
        });
        $('[data-toggle="tooltip"]').tooltip();
    </script>
        <?php
        // put your code here
        ?>
</html>
