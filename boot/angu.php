<!DOCTYPE html>
<html ng-app='myApp'>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body ng-controller='myCtrl'>
<div class="container">
	<div class="jumbotron">


		<h1>The Stepping Stone</h1>
		<h3>Add New Student <button class="btn btn-primary" data-toggle="modal" data-target="#addModal" ng-click="newData={}">Add</button></h3>
	</div>
	<table class="table table-hover table-bordered table-striped">
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Age</th>
			<th>Detail</th>
		</tr>
		<tr ng-repeat="x in allData">
			<td>{{ $index+1 }}</td>
			<td>{{ x.name }}</td>
			<td>{{ x.age }}</td>
			<td><button ng-click="show(x)" class="btn btn-info" data-toggle="modal" data-target="#showModal">Detail</button></td>
		</tr>

	</table>
</div>

<div class="modal fade" id="showModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>User Detail
			</div>
			<div class="modal-body">
				<h2><strong>Name : </strong>{{ selectedObj.name }}</h2>
				<h2><strong>Age : </strong>{{ selectedObj.age }}</h2>
				<h2><strong>City : </strong>{{ selectedObj.city }}</h2>
			</div>
			<div class="modal-footer">
				<button data-dismiss="modal" class="btn btn-danger">Close</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="addModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Add New User</h3>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Name</label>
					<input type="text" placeholder="Full Name" ng-model="newData.name" class="form-control">
				</div>
				<div class="form-group">
					<label>Age</label>
					<input type="text" placeholder="Age" ng-model="newData.age" class="form-control">
				</div>
				<div class="form-group">
					<label>City</label>
					<input type="text" placeholder="City" ng-model="newData.city" class="form-control">
				</div>
			</div>
			<div class="modal-footer">
				<button data-dismiss="modal" class="btn btn-success" ng-click="save()">Add</button>
				<button data-dismiss="modal" class="btn btn-danger">Close</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>