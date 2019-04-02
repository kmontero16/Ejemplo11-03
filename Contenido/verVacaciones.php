<?php 
session_start();
include('../Librerias/Constantes.php');
include('../Librerias/VacacionesClass.php');


if(isset($_SESSION["aVacaciones"])){
    $arrVacaciones=$_SESSION["aVacaciones"];    
}
 else {
     $arrVacaciones="";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_SESSION["hm"]?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="../CSS/Estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>        
        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('../menu.php');?></div>
            <div id="contenido">
                
                <table>
                    <thead>
                        <tr>
                            <td></td>
                            <td>Rut</td>
                            <td>Nombre</td>
                            <td>Cargo</td>
                            <td>Fecha de inicio</td>
                            <td>Dias</td>
                            <td>Comentarios</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($arrVacaciones as $key => $oVacaciones) {
                        ?>
                        <tr>
                        <td>#<?=$key +1;?></td>
                        <td><?=$oVacaciones->getRut();?></td>
                        <td><?=$oVacaciones->getNombre();?></td>
                        <td>Cargo</td>
                        <td>Fecha Inicio</td>
                        <td>Fecha Fin</td>
                        <td>Días</td>
                        <td>Comentario</td>
                        <td><input type="button" value="Eliminar" onclick="javascript:feliminar(<?=$oVacaciones->getRut();?>);"></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                    
            </div>
        </div>   
        <div id="resultado"></div>
        <form id="formEliminar" action="../Librerias/Eliminar.php" method="post">
            <input type="hidden" name="rut" id="rut">
        </form>
    </body>
    <script>
        function feliminar(id){
           $("#rut").val(id);
           $("#formelimina").submit();
        }
        $("#btneliminar").on( "click", function( event ) {
           $.post( "../Librerias/Eliminar.php", { rut:  $("#eliminarut_jq").value() }, function( data ) {
                $( "#resultado" ).html( data );
            });
        });
        $("#prisolicitud").on("click",function(event){
            if(($("[id*=subsolicitud]").css("display")!=="none")){
                 $("[id*=subsolicitud]").css("display","none");
            }
            else{
                $("[id*=subsolicitud]").show();
                $("[id*=subsolicitud]").css("display","block");
            }
        });
        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>