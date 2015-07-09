var compareTo = function() {
    return {
        require: "ngModel",
        scope: {
            otherModelValue: "=compareTo"
        },
        link: function(scope, element, attributes, ngModel) {
            ngModel.$validators.compareTo = function(modelValue) {
                return modelValue == scope.otherModelValue;
            };

            scope.$watch("otherModelValue", function() {
                ngModel.$validate();
            });
        }
    };
};

angular.module('app').directive("compareTo", compareTo);



var c = function(param){
    console.log(param);
};

var objectToArray = function(obj){
    var resultArray = [];
    angular.forEach(obj, function(elem){
        resultArray.push(elem);
    });
    return resultArray;
};

var fetchJsonElement = function(jsonArr, pos){
    if((jsonArr === undefined) || (jsonArr === null)) return;
    var array = JSON.parse(jsonArr);

    if(pos === undefined){
        pos = 0;
    }

    return(array[pos]);
};

var cloneObject = function(obj){
    return JSON.parse(JSON.stringify(obj));
};