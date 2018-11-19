<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Berisi Halaman Login">
		<meta name="author" content="Kaisha">
		<!--<link rel="icon" href="../../favicon.ico">-->
		<title><?php echo $title ?></title>
		
		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- Add custom CSS here -->
		<link href="<?php echo base_url() ?>assets/css/signin.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 column col-lg-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="form-signin-heading text-center">WIPERINDONESIA</h2><br/>
						</div>
						<div class="panel-body">
							<?php
								if($this->session->flashdata('sukses'))
								{
									echo $this->session->flashdata('sukses');
								}
							?>						
							<form action="<?php echo base_url('C_login') ?>" method="post" class="form-signin" role="form">
						        <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
						        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
						      	<button type="submit" name="submit" id="submit" value="Login" class="btn btn-lg btn-primary btn-block">Sign in</button>						
						    </form>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<!-- JavaScript -->
		<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<!-- JavaScript -->
	</body>
</html>