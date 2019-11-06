'use strict';
angular.module('Client')

// projects
    .controller('IndexProjectCtrl', function ($scope, ProjectResource, $location, $timeout) {
        $scope.Projects = ProjectResource.query();
        //delete method
        $scope.removeProject = function (id) {
            ProjectResource.delete({
                id: id
            });
            // var toastHTML = '<span>Project deleted successfully</span>';
            // M.toast({html: toastHTML}, 1000);
            $timeout(function () {
                $location.path('/projects')
            }, 500);

        };


    })
    .controller('CreateProjectCtrl', function ($scope, ProjectResource, $location, $timeout) {
        $scope.title = "Create Project";
        $scope.button = "ADD";
        $scope.Project = {};
        $scope.Project.projects = {};
        $scope.saveProject = function () {
            ProjectResource.save($scope.Project.projects);
            // var toastHTML = '<span>Project create successfully</span>';
            // M.toast({html: toastHTML}, 1000);
            $timeout(function () {
                $location.path('/projects')
            }, 500);

        };
    })
    .controller('EditProjectCtrl', function ($scope, ProjectResource, $location, $timeout, $routeParams) {
        $scope.title = "Edit Project";
        $scope.button = "Edit";
        $scope.Project = ProjectResource.get({
            id: $routeParams.id
        });
        console.log( $scope.Project);

        $scope.saveProject = function () {
            ProjectResource.update($scope.Project.projects);
            // var toastHTML = '<span>Project updated successfully</span>';
            // M.toast({html: toastHTML}, 1000);
            $timeout(function () {
                $location.path('/projects')
            }, 500);

        };
    })

     //tasks

    .controller('IndexTaskCtrl', function ($scope, TaskResource, $location, $timeout, $http) {
        $scope.Tasks = TaskResource.query();

        //delete method
        $scope.removeTask = function (id) {
            TaskResource.delete({
                id: id
            });
            // var toastHTML = '<span>Task deleted successfully</span>';
            // M.toast({html: toastHTML}, 1000);
            $timeout(function () {
                $location.path('/tasks')
            }, 500);

        };
        // active method
        $scope.fe_status = function(task) {

            // $http.post('http://localhost/myProjects/TrackerAngularJs/API/api/Task/fe_active/' + task.id, 'POST').then(function(res) {
            $http.post(urlbase +'/API/api/Task/fe_active/' + task.id, 'POST').then(function(res) {
                console.log(res.data.task);
                task.status = res.data.task.status;

        });
        }
    })
    .controller('CreateTaskCtrl', function ($scope, TaskResource, $location, $timeout,$http) {
    // .controller('CreateTaskCtrl', function ($scope, TaskResource, $location, $timeout,$http,urlbase) {
        $scope.title = "Create Task";
        $scope.button = "ADD";
        $scope.Task = {};
        $scope.projects = [];

        // $http.get("http://localhost/myProjects/TrackerAngularJs/API/allProjects")
        $http.get(urlbase +"/API/allProjects")
            .then (function(res){
                $scope.projects = res.data;
                setTimeout(function () {
                    // $('select').formSelect();
                }, 500);

            });
        $scope.saveTask = function () {
            TaskResource.save($scope.Task);
            // var toastHTML = '<span>Task create successfully</span>';
            // M.toast({html: toastHTML}, 1000);
            $timeout(function () {
                $location.path('/tasks')
            }, 500);

        };
    })
    // .controller('EditTaskCtrl', function ($scope, TaskResource, $location, $timeout, $routeParams,$http,urlbase) {
    .controller('EditTaskCtrl', function ($scope, TaskResource, $location, $timeout, $routeParams,$http) {
        $scope.title = "Edit Task";
        $scope.button = "Edit";
        $scope.project={};
        $scope.projects =[];
        $scope.Task = TaskResource.get({
            id: $routeParams.id

        });

        // $http.get("http://localhost/myProjects/TrackerAngularJs/API/allProjects")
        $http.get(urlbase +"/API/allProjects")
            .then (function(res){
                $scope.projects = res.data;
                setTimeout(function () {
                    // $('select').formSelect();
                }, 500);

            });


        $scope.saveTask = function () {
            TaskResource.update($scope.Task);
            // var toastHTML = '<span>Task updated successfully</span>';
            // M.toast({html: toastHTML}, 1000);
            $timeout(function () {
                $location.path('/tasks')
            }, 500);

        };

        $scope.setTaskProjectId = function (event) {
            console.log(event.target.value);
            $scope.Task.project_id = event.target.value;
        }
    })

;




