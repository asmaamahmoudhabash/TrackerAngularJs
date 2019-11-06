'use strict';
angular.module('Client')

    .factory('ProjectResource',function ($resource) {
    // .factory('ProjectResource',function ($resource) {
    //     return $resource('http://localhost/myProjects/TrackerAngularJs/API/Projects/:id',  {
        return $resource(urlbase +'/API/Projects/:id',  {

            id:'@id',

        }, {
            update:
                {method: "put"
                },

        });

    })
    .factory('TaskResource',function ($resource) {
    // .factory('TaskResource',function ($resource) {
    //     return $resource('http://localhost/myProjects/TrackerAngularJs/API/Tasks/:id',  {
        return $resource(urlbase +'/API/Tasks/:id',  {

            id:'@id'
        }, {
            update:
                {method: "put"}


        });

    });

