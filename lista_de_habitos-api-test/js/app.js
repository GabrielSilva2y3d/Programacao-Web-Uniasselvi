/*
    Declaramos o módulo, que é ligado à
    página Web através da diretiva ng - app
    ngRoute na linha abaixo é uma injeção de
    dependência, é um módulo que está contido
    do arquivo angular - route.js 
*/

var app = angular.module("app", ["ngRoute"]);

/*Aqui definimos a dinâmica de navegação da
 página. Para cada URL que a página possui
 define-se qual controller será usado
 e qual arquivo.html será exibido */

app.config(function($routeProvider) {
    $routeProvider.when("/api-test-get", {
        controller: "apiTestGetController",
        templateUrl: "partials/api-test-get.html"
    }).when("/api-test-post", {
        controller: "apiTestPostController",
        templateUrl: "partials/api-test-post.html"
    }).when("/api-test-put", {
        controller: "apiTestPutController",
        templateUrl: "partials/api-test-put.html"
    }).when("/api-test-delete", {
        controller: "apiTestDeleteController",
        templateUrl: "partials/api-test-delete.html"
    }).otherwise({
        controller: "welcomeController",
        templateUrl: "partials/welcome.html"
    });
});