<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link data-require="bootstrap-css@3.3.6" data-semver="3.3.6" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" />
		<link rel="stylesheet" href="../../css/style.css" />
		<script data-require="jquery@*" data-semver="2.2.0" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script data-require="bootstrap.js@*" data-semver="3.3.6" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="script.js"></script>
		<title>RealTimeScout</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

			<!-- header -->
			<header class="p-y-4">
				<div class="container">
					<nav class="navbar navbar-inverse">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">RealTimeScout</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Players</a></li>
								<li><a href="#">Search</a></li>
								<li><a href="#">Profile</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>
			</header>
			<main>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="well text-center">
								<h1>Contact Us</h1>
							</div>
						</div>
					</div>
					<!-- main content-->
					<div class="row">
						<div class="col-xs-12">
							<div class="well text-center">
								<form class="form-horizontal well" action="email.php">
									<div class="form-group">
										<label for="name">Name</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-user" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="name" name="name" placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="email">Email address</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
											<input type="email" class="form-control" id="email" name="email" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="subject">Subject</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-pencil" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
										</div>
									</div>
									<div class="form-group">
										<label for="message">Message</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-comment" aria-hidden="true"></i>
											</div>
											<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
										</div>
									</div>
									<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
									<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<footer class="p-y-4">
			<div class="container">
				<div class="copyright text-center">
					<div class="nav-center">
						<ul class="nav nav-pills nav-justified">
							<li role="presentation"><a href="#">Home</a></li>
							<li role="presentation"><a href="#">About Us</a></li>
							<li role="presentation"><a href="#">Players</a></li>
							<li role="presentation"><a href="#">Search</a></li>
							<li role="presentation"><a href="#">Profile</a></li>
							<li role="presentation"><a href="#">Contact Us</a></li>
						</ul>
					</div>
					&copy; RealTimeScout Productions
				</div>
			</div>
		</footer>
	</body>
</html>