var app = angular.module('app', ['ngRoute']);

app.config(function($routeProvider) {

    $routeProvider.when("/listadehabitos", {
        controller: "listadehabitos",
        templateUrl: "partials/listadehabitos.html",

    }).when("/novohabito", {
        controller: "novohabito",
        templateUrl: "partials/novohabito.html",

    }).otherwise({
        controller: "listadehabitos",
        templateUrl: "partials/listadehabitos.html"
    });
});