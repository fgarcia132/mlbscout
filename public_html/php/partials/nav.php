<body class="sfooter">
	<div class="sfooter-content">

		<!-- header -->
		<header ng-controller="NavController">
			<bootstrap-breakpoint></bootstrap-breakpoint>

			<div class="container">
				<nav class="navbar navbar-inverse">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
								  data-target="#bs-example-navbar-collapse-1" aria-expanded="false"
								  ng-click="navCollapsed = !navCollapsed">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">RealTimeScout</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="navbar-collapse" id="bs-example-navbar-collapse-1" ng-class="{'collapse': navCollapsed}">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Have an Account? Sign Up</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</header>