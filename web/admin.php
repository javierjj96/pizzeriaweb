<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
    }
} else {
    header("location:login.php");
}
?>
<?php include 'partials/menu.php';?>
<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Hola</strong> <?php echo $_SESSION["usuario"]["nombre"];?></h1>
				<p> <span class="label label-danger"><?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Usuario Administrador' : 'Usuario Vendedor'; ?></span></p>
				<p>
<a href="pizzasvendidas.php" class="btn btn-primary btn-lg">Pizzas vendidas</a>
<a href="registro.php" class="btn btn-primary btn-lg">Registrar un vendedor</a>
<a href="consultas.php" class="btn btn-primary btn-lg">Usuarios registrados</a>
					<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
				</p>
			</div>
		</div>
	</div>
</div><!-- /.container -->
<?php include 'partials/footer.php';?>