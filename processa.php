<!DOCTYPE html>
<html>
<head>
    <title>Resposta do Cadastro</title>
    <script>
        function voltar() {
            window.location.href = "pagina_exercicio.html";
        }
    </script>
</head>
<body>
    <h2>Resposta de Cadastro</h2>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "escola_dev_web";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $alunos = array();
    for ($i = 1; $i <= 4; $i++) {
        $matricula = $_POST['matricula' . $i];
        $nome = $_POST['nome' . $i];
        $sobrenome = $_POST['sobrenome' . $i];
        $idade = $_POST['idade' . $i];
        $alunos[] = array('matricula' => $matricula, 'nome' => $nome, 'sobrenome' => $sobrenome, 'idade' => $idade);
    }

    foreach ($alunos as $aluno) {
        $matricula = $aluno['matricula'];
        $nome = $aluno['nome'];
        $sobrenome = $aluno['sobrenome'];
        $idade = $aluno['idade'];

        $sql = "INSERT INTO alunos (matricula, nome, sobrenome, idade) VALUES ('$matricula', '$nome', '$sobrenome', '$idade')";

        if ($conn->query($sql) !== TRUE) {
            echo "Erro ao inserir aluno: " . $conn->error;
        } else {
            echo "Aluno cadastrado com sucesso!<br>";
        }
    }

    $conn->close();
    ?>
    
    <br>
    <button onclick="voltar()">Voltar</button>
</body>
</html>
