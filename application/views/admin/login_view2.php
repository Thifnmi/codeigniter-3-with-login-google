
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Space Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->

<!-- css files -->
<link href="<?= base_url() ?>public/css/style3.css" rel="stylesheet" type="text/css" media="all" />
<!-- css files -->

<!-- Online-fonts -->
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!-- //Online-fonts -->

</head>
<body>
	<!-- main -->
	<div class="main">
		<div class="main-w3l">
			<h1 class="logo-w3">Login For Admin</h1>
			<div class="w3layouts-main">
				<h2><span>Login now</span></h2>
					<form action="<?= base_url() ?>index.php/Admin/Login/checkLogin" method="post">
					
						<input class="dangnhap" placeholder="username" name="username" type="text" >
						<input placeholder="password" name="password" type="password" >
						<input type="submit" value="Get Started" >
					</form>
					<h6><a href="#">Lost Your Password?</a></h6>
			</div>
		</div>
	</div>

</body>
</html>
