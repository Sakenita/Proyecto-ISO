<<<<<<< HEAD
=======
<?php
session_start();
error_reporting(0);
include('dba/dbconn.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"SELECT ID from admin where  username='$adminuser' && password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      //$_SESSION['vpmsaid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    $msg="Error de autenticación";
    }
  }
?>

>>>>>>> 86d323da136ee2bec708e9049345e2bd7f5ef89e
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
<<<<<<< HEAD
	<title>Estacionamiento Unifranz</title>
=======
	<title>Estacionamiento Unifranz :)</title>
>>>>>>> 86d323da136ee2bec708e9049345e2bd7f5ef89e
=======
	<title>Estacionamiento universidad Unifranz :)</title>
>>>>>>> 2369084941d772a12001c9213e65929b3f85bde8
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
		<center><h2><b>Estacionamiento Unifranz</b></h2></center>
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Ingrese sus credenciales</div>
				<div class="panel-body">
					<form method="POST">
					<?php if($msg)
						echo "<div class='alert bg-danger' role='alert'>
						<em class='fa fa-lg fa-warning'>&nbsp;</em> 
						$msg
						<a href='#' class='pull-right'>
						<em class='fa fa-lg fa-close'>
						</em></a></div>" ?> 

						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Usuario" name="username" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<a href="forgot-password.php" style="text-decoration:none;">Olvidaste tu contraseña?</a>
							</div>
							<button class="btn btn-success" type="submit" name="login">Ingresar</button></fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>