<?php
require_once 'Koneksi.php';
$kon = new Koneksi();
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style type="text/css">
	body#LoginForm{ background-image:url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}




</style>
<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<center><h2 class="form-heading">REGISTRASI</h2></center>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <p>Please make your username and password</p>
   </div>
    <form id="Login" action="prosesRegistrasi.php" method="POST">

        <div class="form-group">

            <input type="text" class="form-control" id="username" name="username" placeholder="Username">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">

        </div>

         <div class="form-group">

            <input type="password" class="form-control" id="konfirmPassword" name="konfirmasi_password" placeholder="ConfirmPassword">

        </div>
        <div class="forgot">
      
</div>
        <button type="submit" class="btn btn-primary" name="submit" value="submit">Login</button>
        

    </form>
    </div>

</div></div></div>


</body>
</html>



<!-- <!DOCTYPE html>
<html>
<head>
	<title>Jurnal 10</title>
</head>
<body>
	<br>
	<br>
		<center>
			<h3>SELAMAT DATANG DI APLIKASI INI</h3>
		<table bgcolor="grey">
		<form action="prosesRegistrasi.php" method="POST">
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" pattern="[A-Za-z ]{1,20}" title="Username Maximal 20 Karakter">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" pattern="[A-Za-z0-9 ]{6,30}" title="Password Minimal 6 karakter">
				</td>
			</tr>
			<tr>
				<td>Konfirmasi Password</td>
				<td>
					<input type="password" name="konfirmasi_password">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</form>
	</table>
</body>
</html> -->