<!DOCTYPE html>
<html>
<head>
	<title>TUGAS AKHIR HONEYPOT</title>
</head>
<body>
	<h2>Login - Server Utama</h2>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<script>
		function validasiLogin() {
			if( document.loginform.username.value == "" ) {
            alert( "Username harus di isi!" );
            document.loginform.username.focus() ;
            return false;
         	}
         	if( document.loginform.password.value == "" ) {
            alert( "Password harus di isi!" );
            document.loginform.password.focus() ;
            return false;
			}
		return( true );
		}
	</script>
	<br/>
	<br/>
	<form name="loginform" method="post" action="login.php" onsubmit="return validasiLogin()">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</body>
</html>
