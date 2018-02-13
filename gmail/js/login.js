var app = angular.module('loginApp', []);

app.controller('loginCtrl', function($scope, $http, $window){
	$http.defaults.headers.post['Content-Type']='application/x-www-form-urlencoded; charset=utf-8';
	$scope.user={};
	$scope.userError=false;
	$scope.showPassBox=false;
	$scope.passError=false;
	$scope.doLogin=function(){
		console.log($scope.user);
		$http({
			method : 'POST',
			url : 'web_services/auth.php',
			data : $.param($scope.user)
		}).then(function(res){
			console.log(res.data);
			if(res.data.success)
			{
				$window.location.href='inbox.html';
			}
			else{
				if(res.data.error==1)
				{
					$scope.userError=true;
				}
				if(res.data.error==2)
				{
					$scope.showPassBox=true;
				}
				if(res.data.error==3)
				{
					$scope.passError=true;
				}
			}
		});
	}
});
