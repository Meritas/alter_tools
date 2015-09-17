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
                    templateUrl: TMP_PATH + 'character-sheets/list/sheets.html',
                    controller: 'listCharacterSheetsController as listController'
                }/*,
                'footer':{
                    templateUrl: '',
                    controller: 'controller as footerController'
                }*/
            }
        })
        .state('index.generate', {
            url: 'generate',
            views: {
                'main@':{
                    templateUrl: TMP_PATH + 'character-sheets/generate/sheet.html',
                    controller: 'generateCharacterSheetController as generateController'
                }
            }
        }).
        state('index.view', {
            url: 'view',
            views: {
                'main@':{
                    templateUrl: TMP_PATH + 'character-sheets/view/sheet.html',
                    controller: 'viewCharacterSheetController as viewController'
                }
            }
        }).
        state('index.edit', {
            url: 'edit',
            views: {
                'main@':{
                    templateUrl: TMP_PATH + 'character-sheets/generate/sheet.html',
                    controller: 'editCharacterSheetController as editController'
                }
            }
        }).
        state('index.list', {
            url: 'list',
            views: {
                'main@':{
                    templateUrl: TMP_PATH + 'character-sheets/list/sheets.html',
                    controller: 'listCharacterSheetsController as listController'
                }
            }
        }).
        state('index.skills', {
            url: 'skills',
            views: {
                'main@':{
                    templateUrl: TMP_PATH + 'skills/list.html',
                    controller: 'skillsListController as listController'
                }
            }
        }).
        state('index.skills.add', {
            url: '/add',
            views: {
                'main@':{
                    templateUrl: TMP_PATH + 'skills/add.html',
                    controller: 'skillsAddController as addController'
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