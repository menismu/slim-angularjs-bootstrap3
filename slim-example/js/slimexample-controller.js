/**
 * Angular app module for slim-exmaple.
 */

var slimExampleControllers = angular.module('slimExampleControllers', []);

slimExampleControllers.controller('HomeController', ['$scope', '$location', '$http', 'appConstants', function($scope, $location, $http, appConstants) {
	$scope.list = [];
	
	$http.get(appConstants.APP_ROOT + appConstants.ITEM_ALL).success(function(data, status, headers, config) {
		$scope.list = data;
	}).error(function(data, status, headers, config) {
		console.log('error retrieving the list of items');
	});
	
	$scope.select = function(item) {
		$location.path("/item/" + item.id);
	}
}]);

slimExampleControllers.controller('ItemController', ['$scope', '$location', '$http', '$routeParams', 'appConstants', function($scope, $location, $http, $routeParams, appConstants) {
	$scope.item = {};
	
	$http.get(appConstants.APP_ROOT + appConstants.ITEM_BY_ID + "/" + $routeParams.itemId).success(function(data, status, headers, config) {
		$scope.item = data;
	}).error(function(data, status, headers, config) {
		console.log('error retrieving the item data wiht id: ' + $routeParams.itemId);
	});
	
	$scope.back = function() {
		$location.path("/");
	}
}]);

slimExampleControllers.controller('AboutController', ['$scope', '$location', '$http', '$routeParams', 'appConstants', function($scope, $location, $http, $routeParams, appConstants) {
	
}]);
