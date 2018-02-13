<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
</head>

<body>
<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">TSS</a>
			<button class="navbar-toggle" data-toggle="collapse" data-target="#mymenu">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				
			</button>
		</div>
		<div class="collapse navbar-collapse" id="mymenu">
			<ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li><a href="#">Home</a></li>
				<li><a href="#">Home</a></li>
				<li><a href="#">Home</a></li>
				<li class="dropdown">
					<a href="#" data-toggle="dropdown">More <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Sony</a>
						<li><a href="#">Sony</a>
						<li><a href="#">Sony</a>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
	<div class="container">
		<div class="jumbotron">
			<h1>The Stepping Stone</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</button>
			<button class="btn btn-success">Signup</button>
		</div>
	</div>
</body>



<div class="modal fade" id="loginModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2>New User Login Here</h2>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<div class="row">
							<label class="col-md-2 control-label">Username</label>
							<div class="col-md-10">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
									<input type="text" class="form-control" placeholder="Username">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-2 control-label">Password</label>
							<div class="col-md-10">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-unlock"></i></div>
									<input type="password" class="form-control" placeholder="Password">
								</div>
							</div>
						</div>
					</div>
					
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
</html>