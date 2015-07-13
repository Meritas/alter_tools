angular.module('app').controller('indexController', ['$scope','$http',
    function($scope , $http){
        var self = this;

        console.log('try');
    }]);

angular.module('app').controller('viewCharacterSheetController', ['$scope','$http','$location',
    function($scope, $http, $location){
        var self = this;
        
        $scope.abilities = [];

        $scope.classes = objectToArray($scope.classesList);

        var getParams = $location.search();

        $http.requestAction('sheet/view', JSON.stringify({uid: getParams.uid}))
            .success(function(data){console.log(data.character_abilities);
                $scope.abilities = JSON.parse(data.character_abilities);
                
                $scope.formData = data;
            });

    }]);

angular.module('app').controller('editCharacterSheetController', ['$scope','$http','$location',
    function($scope, $http, $location){
        var self = this;

        $scope.classesList = cloneObject(CLASSES_LIST);
        
        $scope.arrays = {};
        $scope.abilities = [];

        $scope.response = '';

        var getParams = $location.search();

        $http.requestAction('sheet/view', JSON.stringify({uid: getParams.uid}))
            .success(function(data){
                $scope.formData = data;
                $scope.abilities = JSON.parse(data.character_abilities);
            });
        
        $scope.pushRow = function(arr, elem){
            arr.push(elem);
        };
        
        $scope.removeRow = function(arr, elem){
            if(elem[0] === undefined) return;
            var pos = arr.indexOf(elem[0]);
            if(pos > -1){
                arr.splice(pos, 1);
            }
        }


        $scope.formSubmit = function(){
            $scope.response = '';
            
            $scope.formData.character_abilities = JSON.stringify($scope.abilities);
            
            $http.requestAction('sheet/update', JSON.stringify($scope.formData))
                .success(function (data) {
                    $scope.response = data;
                });

            console.log('Form submitted');
        };
    }]);

angular.module('app').controller('generateCharacterSheetController', ['$scope','$http',
    function($scope , $http){
        var self = this;
        
        $scope.arrays = {};
        $scope.abilities = [];
        
        $scope.pushRow = function(arr, elem){
            arr.push(elem);
        };
        
        $scope.removeRow = function(arr, elem){
            if(elem[0] === undefined) return;
            var pos = arr.indexOf(elem[0]);
            if(pos > -1){
                arr.splice(pos, 1);
            }
        }

        $scope.classesList = cloneObject(CLASSES_LIST);

        $scope.response = '';

        $scope.formSubmit = function() {
            console.log('Generating character...');
            
            $scope.formData.character_abilities = JSON.stringify($scope.abilities);
            
            $scope.response = '';
            console.log($scope.formData.character_abilities);
            $http.requestAction('sheet/generate', JSON.stringify($scope.formData))
                .success(function(data){
                    $scope.response = data;
                });
        };

    }]);

angular.module('app').controller('listCharacterSheetsController', ['$scope','$http',
    function($scope , $http){
        var self = this;

        console.log('Sheets loaded');

        $http.requestAction('sheet/list', JSON.stringify({}))
            .success(function(data){
                $scope.sheets = data;
            });
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

