<?php
	session_start();
	error_reporting(0);
	include('includes/dbconn.php');
	if (strlen($_SESSION['vpmsaid']==0)) {
	header('location:logout.php');
	} else {

	if(isset($_POST['submit-vehicle'])) {
		$parkingnumber=mt_rand(10000, 99999);
		$Horario=$_POST['Horario'];
		$nombre=$_POST['nombre'];
		$ci=$_POST['ci'];
		$correo=$_POST['correo'];
		$telf=$_POST['telf'];
		$enteringtime=$_POST['enteringtime'];
			
		$query=mysqli_query($con, "INSERT into vehicle_info(ParkingNumber,Horario,nombre,ci,correo,telf) value('$parkingnumber','$Horario','$nombre','$ci','$correo','$telf')");
		if ($query) {
			echo "<script>alert('Vehículo Registrado Correctamente');</script>";
			echo "<script>window.location.href ='dashboard.php'</script>";
		} else {
			echo "<script>alert('Error');</script>";       
		}
	}
  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Entrada Vehículos</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
        <?php include 'includes/navigation.php' ?>
	
		<?php
		$page="manage-vehicles";
		include 'includes/sidebar.php'
		?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dashboard.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Entrada Vehículos</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<!-- <h1 class="page-header">Vehicle Management</h1> -->
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-default">
					<div class="panel-heading">Entrada Vehículos</div>
					<div class="panel-body">

						<div class="col-md-12">

							<form method="POST">

								<div class="form-group">
									<label>CI</label>
									<input type="text" class="form-control" placeholder="Carnet de Identidad" id="ci" name="ci" required>
								</div>


								<div class="form-group">
									<label>Nombre Completo</label>
									<input type="text" class="form-control" placeholder="Juan Perez" id="nombre" name="nombre" required>
								</div>
								
						
									<div class="form-group">
										<label>Horario</label>
										<select class="form-control" name="Horario" id="Horario">
										<option value="0">Seleccionar Horario</option>
										<?php $query=mysqli_query($con,"select * from horario");
											while($row=mysqli_fetch_array($query))
											{
											?>    
                                        <option value="<?php echo $row['hEntrada'];?>"><?php echo $row['hEntrada'];?></option>
                  						<?php } ?> 
										</select>
									</div>
									

								<div class="form-group">
									<label>Correo</label>
									<input type="text" class="form-control" placeholder="juanitoalcachofa@gmail.com" id="correo" name="correo" required>
								</div>


								<div class="form-group">
									<label>Teléfono</label>
									<input type="text" class="form-control" placeholder="489614" maxlength="10" pattern="[0-9]+" id="telf" name="telf" required>
								</div>


									<button type="submit" class="btn btn-success" name="submit-vehicle">Enviar</button>
									<button type="reset" class="btn btn-default">Reiniciar</button>
								</div> <!--  col-md-12 ends -->
							</form>
						</div> 
					</div>
		
		
		

        <?php include 'includes/footer.php'?>
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
};
	</script>
		
</body>
</html>

<?php }  ?>