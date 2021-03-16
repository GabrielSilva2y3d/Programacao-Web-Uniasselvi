<?php
/*
* Função que converte os parâmetros
* de requisições HTTP
* POST e PUT em um Hábito
*
*/
function f_parametro_to_habito(){
    // Obtém o conteúdo da requisição
    $dados = file_get_contents("php://input");

    // Converte para Json e retornar
    $habito = json_decode($dados, true);
    return $habito;
}

//funcão que retorna uma conexão com o banco de dados
function f_obtem_conexao(){
    $servidor = "localhost";
    $usuario = "host";
    $senha = "";
    $database = "listadehabitos";

    //cria uma conexão com o banco de dados
    $conexao = new mysqli($servidor, $usuario, $senha, $database);

    //verifica a conexão
    if ($conexao -> connect_error){
        die("Falha na conexão: ".$conexao->connect_error);
    }
    return $conexao;
}

//Função que retorna os hábitos
function f_select_habito(){
    /*
    cria uma cláusula WHERE com os parâmetros que foram
    recebidos através da requisição HTTP get
    */

    $queryWhere = " WHERE ";
    $primeiroParametro = true;
    $parametrosGet = array_keys($_GET);
    foreach ($parametrosGet as $param) {
        if (!$primeiroParametro) {
            $queryWhere .= " AND ";
        }
        $primeiroParametro = false;
        $queryWhere .= $param." = '".$_GET[$param]."'";
    }
        //executa a query da variavel $sql
        $sql = " SELECT id, nome, status FROM habitos ";

        //utiliza o where criado como base nos parâmetros do GET
        if ($queryWhere != " WHERE ") {
            $sql .= $queryWhere;
        }

        //executa a query
        $resultado = $conexao -> query($sql);

        //verifica se query retornou registros
        if ($resultado !== false && $resultado -> num_rows > 0) {
            //inicializa o array para a formatação dos objetos JSON
            $jsonHabitosArray = array();
            $contador = 0;
            while ($registro = $resultado->fetch_assoc()) {
                
            /*monta um objeto JSON através de um array
            indexado através de strings*/

                $jsonHabito = array();
                $jsonHabito["id"] = $registro["id"];
                $jsonHabito["nome"] = $registro["nome"];
                $jsonHabito["status"] = $registro["status"];
                $jsonHabitosArray[$contador++] = $jsonHabito;
            }

            /*Transforma o array com os resultados da query
            em um array JSON e o imprime na página*/
            print json_encode($jsonHabitosArray);

        } else {
            //Se a query não retornou registros, devolve um array vazio
            print json_encode(array());
        }

    //fecha conexão com o MySQL
    $conexao->close();
}



//insere um novo hábito na tabela habito
function f_insert_habito(){
    $habito = f_parametro_to_habito();

    /*busca nome que foi recebido via POST
    através do formulário de cadastro */
    $nome = $habito["nome"];

    //insere um hábito na tabela habitos do banco de dados
    $sql = "INSERT INTO habitos (nome) VALUES ('".$nome."')";

    //obtem conexão
    $conexao = f_obtem_conexao();

    /*verifica se ocorreu tudo bem
    caso houve erro, fecha a conexão e 
    aborta o programa*/

    if (!($conexao->query($sql) === TRUE)) {
        $conexao->close();
        die("Erro: ".$sql."<br>".$conexao->error);
    }
    //insere as demais informações no Json
    $habito["id"] = mysqli_insert_id($conexao);
    $habito["status"] = "A";
    print json_encode($habito);

    $conexao -> close();
}


//atualiza um hábito existente

function f_update_habito(){
    $habito = f_parametro_to_habito();

    $id = $habito["id"];
    $nome = $habito["nome"];
    $status = $habito["status"];
    
    //Atualiza o status de 'A' - Ativo para 'V' - Vencido
    $sql = " UPDATE habitos"." SET status = '".$status."' "." ,nome = '".$nome."'"." WHERE id = ".$id;

    //Obtém a conexão com o banco de dados
    $conn = f_obtem_conexao();

    //verifica se o comando foi exacutado com sucesso
    if (!($conn->query($sql) === TRUE)) {
        $conn -> close();
        die("Erro ao atualizar: ".$conn->error);
    }
    //retorna o registro atualizado
    print json_encode($habito);

    $conn -> close();
}

//exclui um hábito existente

function f_delete_habito(){
    //obtem o id do registro que foi recebido via GET
    $id = $_GET["id"];
    
    $sql = "DELETE FROM habitos WHERE id = ".$id;

    //obtem conexão
    $conn = f_obtem_conexao();

    //executa o comando DELETE da variavel $sql
    if (!($conn->query($sql) === TRUE)) {
        die("Erro ao deletar: ".$conn->error);
    }
    
    $conn->close();

}
 /*
 A variável de servidor REQUEST_METHOD
 contém o nome do método HTTP através
 qual o arquivo solicitado foi
 acessado 
 */

$metodo = $_SERVER['REQUEST_METHOD'];

 /*
 Verifica qual ação a ser tomada
 de acordo com o método HTTP
 que foi utilizado para acessar
 este recurso
 */

switch ($metodo){
    //se for GET deve consultar
    case "GET":
        f_select_habito();
        break;
    
    //se for POST deve inserir
    case "POST":
        f_insert_habito();
        break;
    
    //se for PUT deve alterar
    case "PUT":
        f_update_habito();
        break;
    
    //se for DELETE deve excluir

    case "DELETE":
        f_delete_habito();
        break;

     

 }
?>