app.value("habitos", {
    habitos: []
});

app.controller("listadehabitos", function($scope, $http, habitos) {
    $scope.habitos = habitos.habitos;
    if (habitos.habitos.length == 0) {
        $http.get('http://localhost:3000/Lista_de_Habitos_REST-API/habitos.php').success(function(data) {
            for (indice in data) {
                habitos.habitos[indice] = data[indice];

            }
        });
    }
    $scope.mostralista = $scope.habitos.length == 0;

    $scope.vencerhabito = function(habito) {
        indice = $scope.habitos.indexOf(habito);
        habito.status = "V";
        $http.put('http://localhost:3000/Lista_de_Habitos_REST-API/habitos.php', habito).success(function(data) {
            $scope.habitos[indice] = data;
        });
    }
    $scope.retomarhabito = function(habito) {
        indice = $scope.habitos.indexOf(habito);
        habito.status = "A";
        $http.put('http://localhost:3000/Lista_de_Habitos_REST-API/habitos.php', habito).success(function(data) {
            $scope.habitos[indice] = data;
        });
    }
    $scope.desistirhabito = function(habito) {
        http.delete('http://localhost:3000/Lista_de_Habitos_REST-API/habitos.php', {
            params: {
                id: habito.id
            }
        }).success(function(data) {
            indice = $scope.habitos.indexOf(habito);
            $scope.habitos.splice(indice, 1);
        });
    }
});

app.controller("novohabito", function($scope, $http, habitos) {
    $scope.habitos = habitos.habitos;
    $scope.name = "";

    $scope.inserirhabito = function(nome) {
        if (nome == "") {
            return;
        }
        $http.post('http://localhost:3000/Lista_de_Habitos_REST-API/habitos.php', { nome: nome }).success(function(data) {
            $scope.habitos[$scope.habitos.length] = data;
            $scope.nome = "";
        });
    }
});