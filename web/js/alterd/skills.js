angular.module('app').controller('skillsListController', ['$scope','$http',
    function($scope , $http){
        var self = this;

        console.log('Entering skills list...');

        /*


         $http.requestAction('sheet/list', JSON.stringify({}))
         .success(function(data){
         $scope.sheets = data;
         });

         */

        $http.requestAction('skills/list', JSON.stringify({}))
            .success(function(data){
                console.log(data);
            });
    }]);

angular.module('app').controller('skillsAddController', ['$scope','$http',
    function($scope , $http){
        var self = this;

        $scope.formData = {};

        $scope.formSubmit = function(){
            console.log($scope.formData);
            $http.requestAction('skills/add', JSON.stringify($scope.formData))
                .success(function(data){
                    console.log(data);
                });
        };
    }]);
