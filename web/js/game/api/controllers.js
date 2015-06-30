angular.module('app').controller('indexController', ['$scope','$http',
    function($scope , $http){
        var self = this;

        console.log('try');
    }]);

angular.module('app').controller('editCharacterSheetController', ['$scope','$http',
    function($scope , $http){
        var self = this;

        $scope.formSubmit = function(){
            $http.requestAction('sheet/update', JSON.stringify($scope.formData));

            console.log('Form submitted');
        }
    }]);



angular.module('app').controller('userRegistrationController', ['$scope','$http',
    function($scope , $http){
        var self = this;

        $scope.formData = {
            password: ""
        };
        $scope.sideData = {
            confirmPassword: ""
        };

        $scope.formSubmit = function(){
            $http.requestAction('api/users/create', JSON.stringify($scope.formData));

            console.log('Form submitted');
        }
    }]);