<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
    }
} else {
    header("location:login.php");
}
?>

<?php 
	$conexion=mysqli_connect('localhost','root','','bd_login');
include 'partials/head.php';
include 'partials/menu.php';
 ?>

<br>
<br>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Pizzas</h2>
  <p>Pizzas vendidas</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>pizza</th>
        <th>precio</th>
        <th>vendedor</th>
	<th>despacho</th>
	<th>cliente</th>



      </tr>
    </thead>
    <tbody>    </tbody>
<?php 
		$sql="SELECT * from pedido";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['pizza'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
			<td><?php echo $mostrar['vendedor'] ?></td>
			<td><?php echo $mostrar['despacho'] ?></td>
			<td><?php echo $mostrar['cliente'] ?></td>
		</tr>
	<?php 
	}
	 ?>

  </table>
</div>

</body>
