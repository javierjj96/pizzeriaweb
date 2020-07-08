<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>
<?php include 'partials/menu.php';?>
<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:usuario.php");
    }
} else {
    header("location:login.php");
}
?>

<?php 
if(isset($_POST['insert']))
{
	$hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "bd_login";
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
$vendedor = $_POST['txtvendedor'];
$comuna = $_POST['txtcomuna'];
$pizza = $_POST['txtpizza'];
$precio = $_POST['txtprecio'];   
$query = "INSERT INTO `pedido`(`pizza`, `precio`,`vendedor`,`despacho` ) VALUES ('$pizza','$precio','$vendedor','$comuna')";
$result = mysqli_query($connect,$query);
if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_free_result($result);
    mysqli_close($connect);
}
?>
<div class="container">

	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="pedido.php" method="POST" role="form">
							<legend>Registro de Pedidos</legend>
<div class="form-group">
								<label for="Cliente">Cliente</label>
								<input type="text" name="txtcliente" class="form-control" id="Cliente" autofocus required placeholder="Ingresa Rut del cliente">
							</div>

							<div class="form-group">
								<label for="Pizza">Pizza</label>
								<input type="text" name="txtpizza" class="form-control" id="Pizza" autofocus required placeholder="Ingresa la pizza">
							</div>
	<div class="form-group">
								<label for="Vendedor">Vendedor</label>
								<input type="text" name="txtvendedor" class="form-control" id="Vendedor"  required readonly value="<?php echo $_SESSION["usuario"]["usuario"];?>">
							</div>
	<div class="form-group">
								<label for="Comuna">Comuna</label>
								<input type="text" name="txtcomuna" class="form-control" id="Comuna" autofocus required placeholder="Ingresa la comuna">
							</div>



							<div class="form-group">
								<label for="Precio">Precio</label>
								<input type="precio" name="txtprecio" class="form-control" id="Precio"  required placeholder="Ingresa el precio">
							</div>


							<input type="submit"
name="insert" class="btn btn-success">
	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- /.container -->

<?php include 'partials/footer.php';?>