/*
    Declaramos o módulo, que é ligado à
    página Web através da diretiva ng - app
    ngRoute na linha abaixo é uma injeção de
    dependência, é um módulo que está contido
    do arquivo angular - route.js 
*/

var app = angular.module("app", ["ngRoute"]);

//Declaramos o controller para a página api-test-get.html

app.controller("apiTestGetController", ["$scope", "$http", function($scope, $http) {
    $scope.result = "";
    $scope.id = "";
    $scope.listaDeHabitosApiGet = function() {
        if ($scope.id == "") {
            $http.get("http://localhost:3000/Lista_de_Habitos_REST-API/habitos.php").success(function(data) {
                var output = JSON.stringify(data);
                $scope.result = output;
            });
        } else {
            $http.get("http://localhost:3000/Lista_de_Habitos_REST-API/habitos.php", {
                params: {
                    id: $scope.id
                }
            }).success(function(data) {
                var output = JSON.stringify(data);
                $scope.result = output;
            });
        }
    }
}]);

// Declaramos o controller para a página api-test-post.html

app.controller("apiTestPostController", ["$scope ", "$http", function($scope, $http) {
    $scope.result = "";
    $scope.nome = "";

    //criar
    $scope.listaDeHabitosApiPost = function() {
        $http.post("http://localhost:3000/Lista_de_Habitos_REST-API/habitos.php", {
            nome: $scope.nome
        }).success(function(data) {
            var output = JSON.stringify(data);
            $scope.result = output;
        });
    };
}]);

// Declaramos o controller para a página api-test-put.html

app.controller("apiTestPutController", ["$scope", "$http", function($http, $scope) {

    $scope.result = "";
    $scope.id = "";
    $scope.nome = "";
    $scope.status = "";

    //atualizar
    $scope.listaDeHabitosApiPut = (function() {
        $http.put("http://localhost:3000/Lista_de_Habitos_REST-API/habitos.php", { id: $scope.id, nome: $scope.nome, status: $scope.status }).success(function(data) {
            var output = JSON.stringify(data);
            $scope.result = output;
        });
    });
}]);


// Declaramos o controller para a página api-test-delete.html
app.controller("apiTestDeleteController", ["$scope", "$http", function($scope, $http) {

    $scope.result = "";
    $scope.id = "";

    //deletar
    $scope.listaDeHabitosApiDel = (function() {
        $http.delete("http://localhost:3000/Lista_de_Habitos_REST-API/habitos.php", {
            params: {
                id: $scope.id
            }
        }).success(function(data) {
            var output = JSON.stringify(data);
            $scope.result = output;
        });
    });
}]);

// Declaramos o controller para a página welcome.html

app.controller("welcomeController", ["$scope", function($scope) {}]);

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