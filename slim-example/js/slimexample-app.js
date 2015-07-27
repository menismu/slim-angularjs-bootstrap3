/**
 * Angular app module for slim example.
 */

var slimExampleApp = angular.module('slimExampleApp', ['ngRoute', 'ngSpinner', 'slimExampleControllers', 'ngStorage']);

slimExampleApp.constant('appConstants', {
	'APP_ROOT': '',
	'ITEM_ALL': '/api/index.php/item/all',
	'ITEM_BY_ID': '/api/index.php/item'
})

slimExampleApp.config(['$routeProvider', '$locationProvider', '$httpProvider', 'appConstants', function($routeProvider, $locationProvider, $httpProvider, appConstants) {
	$routeProvider.
		when('/', {
			templateUrl: appConstants.APP_ROOT + '/views/home.html',
			controller: 'HomeController'
		}).when('/item/:itemId', {
			templateUrl: appConstants.APP_ROOT + '/views/item.html',
			controller: 'ItemController'
		}).when('/about', {
			templateUrl: appConstants.APP_ROOT + '/views/about.html',
			controller: 'AboutController'
		}).
		otherwise({
			redirectTo: '/'
	});
	
	$locationProvider.html5Mode(false);
	
	$httpProvider.defaults.useXDomain = true;
	$httpProvider.defaults.withCredentials = true;
	delete $httpProvider.defaults.headers.common['X-Requested-With'];
}]);

slimExampleApp.run(['$location', '$rootScope', '$localStorage', function AppRun($location, $rootScope, $localStorage) {
    
}]);