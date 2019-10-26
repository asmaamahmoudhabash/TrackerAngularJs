'use strict';
angular.module('Client')
    .factory('ProjectResource',function ($resource) {
       return $resource('http://localhost/myProjects/tracker_api/API/Projects/:id',  {

               id:'@id',

           }, {
           update:
               {method: "put"}


       });

    })

.factory('TaskResource',function ($resource) {
    return $resource('http://localhost/myProjects/tracker_api/API/Tasks/:id',  {

        id:'@id'
    }, {
        update:
            {method: "put"}


    });

});