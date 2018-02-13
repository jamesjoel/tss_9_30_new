var app = angular.module('myApp', []);

app.service('myServ', function($http, $window){
	this.backdoor=function(){
		$http({
			method : 'get',
			url : 'web_services/backdoor.php'
		}).then(function(res){
			console.log(res.data);
			if(! res.data.user_logged_in)
			{
				$window.location.href="index.html";
			}
		});
	}
});


app.controller('myCtrl', function($scope, $http, $window, myServ){
	$http.defaults.headers.post['Content-Type']='application/x-www-form-urlencoded; charset=utf-8';

	myServ.backdoor();
});