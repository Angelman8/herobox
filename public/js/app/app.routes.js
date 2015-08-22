(function() { 'use strict';

  angular
    .module('app')
    .config(config);

    config.$inject = ['$routeProvider', '$locationProvider'];


    function config($routeProvider, $locationProvider) {
      $routeProvider
        .when('/', {
          templateUrl: '/views/home/index',
          controller: 'HomeController'
        })
        .when('/other', {
          templateUrl: '/views/home/other',
          controller: 'HomeController'
        })
        .otherwise({ 
          redirectTo: '/', 
        });
    }
})();