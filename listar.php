<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM producto");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Productos</h1>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Id del producto</th>
					<th>Precio del producto</th>
					<th>Nombre del producto</th>
					<th>Descuento del producto</th>
					<th>Descripción</th>
					<th>Existencia</th>
					<th>Material</th>
					<th>Color</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td><?php echo $producto->id_producto ?></td>
					<td><?php echo $producto->producto_precio."$" ?></td>
					<td><?php echo $producto->producto_nombre ?></td>
					<td><?php echo $producto->producto_descuento."%" ?></td>
					<td><?php echo $producto->descripcion ?></td>
					<td><?php echo $producto->existencia ?></td>
					<td><?php echo $producto->material ?></td>
					<td><?php echo $producto->color ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id_producto?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id_producto?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>