'use strict';
angular.module('Client',['ngResource','ngRoute'])
    .config(function ($routeProvider) {
        $routeProvider
            .when('/projects',{
                templateUrl:'views/projects/index.html',
                controller:'IndexProjectCtrl',
            })
            .when('/projects/new',{
                templateUrl:'views/projects/create.html',
                controller:'CreateProjectCtrl',
            })
            .when('/projects/edit/:id',{
                templateUrl:'views/projects/create.html',
                controller:'EditProjectCtrl',
            })
            .when('/projects/show/:id',{
                templateUrl:'views/projects/show.html',
                controller:'EditProjectCtrl',
            })
            // tasks
            .when('/tasks',{
                templateUrl:'views/tasks/index.html',
                controller:'IndexTaskCtrl',
            })
            .when('/tasks/new',{
                templateUrl:'views/tasks/create.html',
                controller:'CreateTaskCtrl',
            })
            .when('/tasks/edit/:id',{
                templateUrl:'views/tasks/edit.html',
                controller:'EditTaskCtrl',
            })

            .otherwise({
                redirectTo:'/'
            });
    });

