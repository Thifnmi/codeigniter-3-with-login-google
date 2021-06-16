<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Space Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />

	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link href="<?= base_url() ?>public/css/style3.css" rel="stylesheet" type="text/css" media="all" />
	<!-- css files -->

	<!-- Online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<!-- //Online-fonts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

</head>

<body>
	<!-- main -->
	<div class="main">
		<div class="main-w3l">
			<h1 class="logo-w3">Login </h1>
			<div class="w3layouts-main">
				<h2><span>Login now</span></h2>
				<form method="post">
					<input class="dangnhap" placeholder="username" name="username" type="text">
					<input placeholder="password" name="password" type="password">
					<input type="submit" name="login" value="Get Started">

					<!-- <div class="panel panel-default">
						
						// if (!isset($login_button['login_button'])) {

							// $user_data = $this->session->userdata('user_data');
							// header('location:http://localhost:8080/hihi/index.php/User/user');
							// echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
							// echo '<img src="' . $user_data['profile_picture'] . '" class="img-responsive img-circle img-thumbnail" />';
							// echo '<h3><b>Name : </b>' . $user_data["first_name"] . ' ' . $user_data['last_name'] . '</h3>';
							// echo '<h3><b>Email :</b> ' . $user_data['email_address'] . '</h3>';
							// echo '<h3><a href="' . base_url() . 'google_login/logout">Logout</h3></div>';
						// } else {
							echo '<div align="center">' . $login_button['login_button'] . '</div>';
						// }
						?>
					</div> -->
				</form>
				<a  href="<?= $login_button ?>">
					<i class="fab fa-google-plus-g"></i> Sign in using Google+
				</a>
				<h6><a href="#">Lost Your Password?</a></h6>
			</div>
		</div>
	</div>

</body>

</html>