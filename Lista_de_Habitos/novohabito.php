<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Lista de Hábitos</title>
</head>
<body>
    <div class="center">
    <h1>Novo Hábito</h1>
    <form id="formulario" action="insertHabito.php">
        <p><label>Nome: <input type="text" id="nome" name="nome" autofocus></label></p>
        <p><input type="submit" value="Criar"></p>
    </form>
    </div>
    <script type="text/javascript">
        var validaFor = function(){
            var nomeHabito = document.getElementById("nome").value;
                if ("" == nomeHabito) {
                    alert("É necessário informar o hábito");
                    return false;
                }
        }
        document.getElementById("formulario").onsubimit = validaForm;
    </script>
</body>
</html>