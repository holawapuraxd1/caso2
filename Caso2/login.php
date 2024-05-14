<?php
 session_start();
 
 if ($_POST['txtUsuario']=='Jose' and $_POST['txtClave']=='123')
 $_SESSION['admin']=$_POST['txtUsuario'];
 else 
 $_SESSION['error']='Usuario incorrecto';
 
 header('location:index.php');
?>