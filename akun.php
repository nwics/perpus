
<?php
session_start();
require 'config.php';

// if(isset($_POST["register"])) {
// 	if(registrasi($_POST) > 0) {
// 		echo " <script> 
// 		alert('user berhasil ditambahkan');
// 		document.location.href = 'registrasi.php';
// 		</script>";
// 	} else {
// 		echo " <script> 
// 		alert('user gagal ditambahkan');
// 		document.location.href = 'registrasi.php';
// 		</script>";
// 	}
// }


?>


<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN LOGIN</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>
	<h1>HALAMAN LOGIN</h1>

	<form action="" method="post">
	<ul>
		<li>
			<label for="user">username :</label>
			<input type="text" name="user" id="user">
		</li>

		<li>
			<label for="pass">password :</label>
			<input type="password" name="pass" id="pass">
		</li>
		<!-- <li>
			<label for="password2">konfirmasi password :</label>
			<input type="password" name="password2" id="password2">
		</li> -->
		<li>
			<button type="submit" name="login">LOGIN!</button>
		</li>
	</ul>

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

</body>
</html>