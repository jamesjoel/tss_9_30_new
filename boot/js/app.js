var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope){

	$scope.newData={};
	$scope.allData=[
		{
			name : 'rohit',
			age : 25,
			city : 'ujjain'
		},
		{
			name : 'james',
			age : 26,
			city : 'indore'
		},
		{
			name : 'jaya',
			age : 30,
			city : 'mumbai'
		},
		{
			name : 'nidhi',
			age : 28,
			city : 'pune'
		},
		{
			name : 'gaurav',
			age : 28,
			city : 'ujjain'
		}
	];

	$scope.show=function(obj){
		console.log("calling", obj);
		$scope.selectedObj=obj;
	}
	$scope.save=function(){
		console.log($scope.newData);
		$scope.allData.push($scope.newData);
	}
});
