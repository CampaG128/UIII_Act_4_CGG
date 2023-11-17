<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="descripcion">Precio del producto</label>
		<input class="form-control" name="precio" required type="text" id="precioCompra" placeholder="Precio del producto">

		<label for="precioVenta">Nombre del producto</label>
		<input class="form-control" name="nombre" required type="text" id="precioVenta" placeholder="Nombre del producto">

		<label for="precioCompra">Descuento del producto</label>
		<input class="form-control" name="descuento" required type="text" id="precioCompra" placeholder="Descuento del producto">

		<label for="existencia">Descripción</label>
		<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>
		
		<label for="precioVenta">Existencia</label>
		<input class="form-control" name="existencia" required type="text" id="precioVenta" placeholder="Existencia">

		<label for="precioCompra">Material</label>
		<input class="form-control" name="material" required type="text" id="precioCompra" placeholder="Material">

		<label for="existencia">Color</label>
		<input class="form-control" name="color" required type="text" id="existencia" placeholder="Color">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>