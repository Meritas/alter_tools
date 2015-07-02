var app = angular.module('app',["ui.router", "ui.bootstrap"]).config(['$compileProvider',
    function( $compileProvider )
    {
        $compileProvider.aHrefSanitizationWhitelist(/^\s*(https?|ftp|mailto|data):/);
    }
]);

angular.module('app', ['ui.router','ngMessages']).config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider){
    $urlRouterProvider.otherwise("/");

    const TMP_PATH = 'templates/';
    $stateProvider.
        state('index', {
            url: '/',
            views: {
                /*'header':{
                    templateUrl: '',
                    controller: 'controller as headerController'
                },*/
                'main':{
                    templateUrl: TMP_PATH + 'character-sheets/index.html',
                    controller: 'indexController as indexController'
                }/*,
                'footer':{
                    templateUrl: '',
                    controller: 'controller as footerController'
                }*/
            }
        })
        .state('index.generate', {
            url: 'edit',
            views: {
                'main@':{
                    templateUrl: TMP_PATH + 'character-sheets/edit/sheet.tmp',
                    controller: 'editCharacterSheetController as editController'
                }
            }
        }).
        state('index.edit', {
            url: 'edit',
            views: {
                'main@':{
                    templateUrl: TMP_PATH + 'character-sheets/edit/sheet.tmp',
                    controller: 'editCharacterSheetController as editController'
                }
            }
        })
        /*state('index.registration', {
            url: 'register',
            views: {
                'main@':{
                    templateUrl: TMP_PATH + 'user/register/registerForm.html',
                    controller: 'userRegistrationController as userRegistrationController'
                }
            }
        })*/
}]);

angular.module('app').run(['$http', function($http){
    $http.requestAction = function(route, postData){
        var fd = new FormData();
        fd.append('post', postData);

        return $http.post(route, fd, {
            headers: {'Content-Type': undefined}

        });

    };
}]);