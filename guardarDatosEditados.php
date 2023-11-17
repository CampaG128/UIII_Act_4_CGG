<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["id"]) || 
	!isset($_POST["precio"]) || 
	!isset($_POST["nombre"]) || 
	!isset($_POST["descuento"]) || 
	!isset($_POST["descripcion"]) || 
	!isset($_POST["existencia"]) || 
	!isset($_POST["material"]) || 
	!isset($_POST["color"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$precio = $_POST["precio"];
$nombre = $_POST["nombre"];
$descuento = $_POST["descuento"];
$descripcion = $_POST["descripcion"];
$existencia = $_POST["existencia"];
$material = $_POST["material"];
$color = $_POST["color"];

$sentencia = $base_de_datos->prepare("UPDATE producto SET producto_precio = ?, producto_nombre = ?, producto_descuento = ?, descripcion = ?, existencia = ?, material = ?, color = ? WHERE id_producto = ?;");
$resultado = $sentencia->execute([$precio, $nombre, $descuento, $descripcion, $existencia, $material, $color, $id]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>