<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM producto WHERE id_producto = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id_producto; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id_producto; ?>">
	
			<label for="precioVenta">Precio del producto</label>
			<input value="<?php echo $producto->producto_precio ?>" class="form-control" name="precio" required type="text" id="precioVenta">

			<label for="precioCompra">Nombre del producto</label>
			<input value="<?php echo $producto->producto_nombre ?>" class="form-control" name="nombre" required type="text" id="precioCompra">

			<label for="precioCompra">Descuento del producto</label>
			<input value="<?php echo $producto->producto_descuento ?>" class="form-control" name="descuento" required type="text" id="precioCompra">

			<label for="descripcion">Descripción</label>
			<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"><?php echo $producto->descripcion ?></textarea>

			<label for="precioVenta">Existencia</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="text" id="precioVenta">

			<label for="precioCompra">Material</label>
			<input value="<?php echo $producto->material ?>" class="form-control" name="material" required type="text" id="precioCompra">

			<label for="existencia">Color</label>
			<input value="<?php echo $producto->color ?>" class="form-control" name="color" required type="text" id="existencia">
			
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
