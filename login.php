<?php
require 'fungsi/fungsi.php';
require 'fungsi/proses_log.php';
 ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login - Admin </title>

  <link rel="stylesheet" href="<?=url()?>css/reset.css">

  <link rel="icon" type="image/png" href="<?=url()?>images/logo_absensi.png">

    <link rel="stylesheet" href="<?=url()?>css/style.css" media="screen" type="text/css" /> 

</head>

<style>
        #root{
            background-position: center;
            background-image: url('ali.jpg');
            color: white;
            font-size: 2em;
            text-align: center;
            height: 100vh;
        }   
        </style>

<body>
<form action="" autocomplete="off" method="POST">
  <div class="wrap">
  	<h1 class="login_adm">Login Admin</h1>
	  <br><center><p>Repost by <a href='https://AliAlkatiri.com/' title='AliAlkatiri.com' target='_blank'>AliAlkatiri.com</a></p></center>

		<div class="avatar">
      <img src="<?=url()?>images/employee2.png">
		</div>
		<input type="text" name="user" autocomplete="OFF" placeholder="username" value="admin" required>

		<input type="password" name="pass" placeholder="password" value="admin" required>
	<!-- 	<a href="" class="forgot_link">forgot ?</a> --><br>
		<button type="submit" name="login">Sign in</button>
	</div>
	<?php if (isset($_POST['login'])) {
		$pro->login();

	} ?>
</form>


</body>

</html>

