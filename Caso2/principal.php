<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>CONTROL DE DEPORTES</title>
 <link href="estilo_principal.css" rel="stylesheet">
 </head>
 <body>
    <center>
 <header>   
 <?php 
 session_start();
 require 'encabezado.php'; 
 echo "<p id='centrado'>";
 echo 'Bienvenido___ '
 .$_SESSION['admin'].'<br>';

 echo '</p>'; 
 ?>
 </header>
 <section>
 <table border="0" width="800" cellspacing="5"> 
 <tr>
 <td><a href="#">
 <img src="mascota1.jpg" 
 width="150" height="80" /></a>
 </td>
 <td><a href="#">Registro de Mascotas</a></td>
 </tr>
 <tr>
 <td><a href="#">
 <img src="mascota2.jpg" 
 width="150" height="80" /></a>
 </td>
 <td><a href="#">Listado de Mascotas</a></td>
 </tr>
 <tr>
 <td>
                <a href="javascript:imprimirPagina()">
                    <img src="mascota3.jpg" width="150" height="80" alt="Mascotas" />
                </a>
            </td>
            <td>
                <a href="javascript:imprimirPagina()">Imprimir</a>
            </td>
 </tr>
 </table>
 </section>
 <footer>
 <?php require 'pie.php'; ?>
 <a href='cerrar.php'> Cerrar Sesion </a>
 </footer>
    </center> 
</body>
</html>
