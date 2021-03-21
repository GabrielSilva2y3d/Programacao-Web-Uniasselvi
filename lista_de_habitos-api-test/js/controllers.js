//Declaramos o controller para a página api-test-get.html

app.controller("apiTestGetController", function($scope, $http) {
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
});

// Declaramos o controller para a página api-test-post.html

app.controller("apiTestPostController", function($scope, $http) {
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
});

// Declaramos o controller para a página api-test-put.html

app.controller("apiTestPutController", function($http, $scope) {

    $scope.result = "";
    $scope.id = "";
    $scope.nome = "";
    $scope.status = "";

    //atualizar
    $scope.listaDeHabitosApiPut = (function($http) {
        $http.put("http://localhost:3000/Lista_de_Habitos_REST-API/habitos.php", { id: $scope.id, nome: $scope.nome, status: $scope.status }).success(function(data) {
            var output = JSON.stringify(data);
            $scope.result = output;
        });
    });
});


// Declaramos o controller para a página api-test-delete.html
app.controller("apiTestDeleteController", function($scope, $http) {

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
});

// Declaramos o controller para a página welcome.html

app.controller("welcomeController", function($scope) {});