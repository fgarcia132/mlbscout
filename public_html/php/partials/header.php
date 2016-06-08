<header ng-controller="NavController">
	<bootstrap-breakpoint></bootstrap-breakpoint>

	<div class="container">
		<nav class="navbar navbar-inverse">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						  data-target="#bs-example-navbar-collapse-1" aria-expanded="false"
						  ng-click="navCollapsed =!navCollapsed">
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
					<li><a href="#">Have an Account? Sign Up</a></li>
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