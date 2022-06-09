<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Halaman Login</title>
</head>
<body>
	<!--kotak login-->
	<div class="page-login">
		
		<!--box-->
		<div class="box box-login">

			<div class="box-header text-center">
				Login
			</div>

			<div class="box-body">
				
				<!--form login-->
				<form action="" method="POST">
					<div class="form-group">
						<label> Username </label>
						<input type="text" name=" user" placeholder="Username" class="input-control">
					</div>

					<div class="form-group">
						<label> Password </label>
						<input type="password" name=" pass" placeholder="Password" class="input-control">
					</div>

					<input type="submit" name="login" value="Login" class="btn">

				</form>
				<?php
				if(isset($_POST['login'])) {
					$user = $_POST['user'];
					$pass = $_POST['pass'];
					$data_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user' AND password = '$pass'");
					$r = mysqli_fetch_array($data_user);
					$username = $r['username'];
					$password = $r['password'];
					$level = $r['level'];
					if($user == $username && $pass == $password) {
						$_SESSION['level'] = $level;
						header('location:index.php');

				} else {
					echo 'salah masuk lurr';
				}
			}
			
			?>

			</div>

			<div class="box-footer text-center">
				<a href="index.php"> Halaman Utama</a>
			</div>
			
		</div>

	</div>

</body>
</html>