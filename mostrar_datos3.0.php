<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="formulariobbdd2.0.css" type="text/css">
	<meta name="author" content="Manu">
    <title>Formulario</title>
</head>
<body>
<?php
//	recoger la información del Formulario
// enviar  al navegador los datos del Formulario
echo "<h2>DATOS DEL PONENTE</h2>";
echo '<p>'.$_GET["nombre"].'</p>';
echo '<p>$_GET["nombre"].</p>';
echo '<p>'.$_GET["telefono"].'</p>';
echo '<p>'.$_GET["correo"].'</p>';
echo '<p>'.$_GET["tema"].'</p>';
?>
