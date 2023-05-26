<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola_dev_web";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$ordem = $_GET['ordem'];

if ($ordem == 'nome') {
    $sql = "SELECT * FROM alunos ORDER BY nome";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Matrícula</th><th>Nome</th><th>Sobrenome</th><th>Idade</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['matricula'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['sobrenome'] . "</td>"; // Exibe o último nome
        echo "<td>" . $row['idade'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    echo "<p>Número de alunos cadastrados: " . $result->num_rows . "</p>";
    
    if ($ordem == 'sobrenome') {
        $sql_media = "SELECT AVG(idade) AS media_idade FROM alunos";
        $result_media = $conn->query($sql_media);
        
        if ($result_media->num_rows > 0) {
            $row_media = $result_media->fetch_assoc();
            echo "<p>Média de idade da turma: " . $row_media['media_idade'] . "</p>";
        }
    }
} else {
    echo "Nenhum aluno cadastrado.";
}

$conn->close();
} elseif ($ordem == 'matricula') {
    $sql = "SELECT * FROM alunos ORDER BY matricula";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Matrícula</th><th>Nome</th><th>Sobrenome</th><th>Idade</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['matricula'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['sobrenome'] . "</td>"; // Exibe o último nome
        echo "<td>" . $row['idade'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    echo "<p>Número de alunos cadastrados: " . $result->num_rows . "</p>";
    
    if ($ordem == 'sobrenome') {
        $sql_media = "SELECT AVG(idade) AS media_idade FROM alunos";
        $result_media = $conn->query($sql_media);
        
        if ($result_media->num_rows > 0) {
            $row_media = $result_media->fetch_assoc();
            echo "<p>Média de idade da turma: " . $row_media['media_idade'] . "</p>";
        }
    }
} else {
    echo "Nenhum aluno cadastrado.";
}

$conn->close();
} elseif ($ordem == 'chegada') {
    $sql = "SELECT * FROM alunos ORDER BY id"; // Ordena pela coluna 'id', que representa a ordem de cadastro
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Matrícula</th><th>Nome</th><th>Sobrenome</th><th>Idade</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['matricula'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['sobrenome'] . "</td>"; // Exibe o último nome
        echo "<td>" . $row['idade'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    echo "<p>Número de alunos cadastrados: " . $result->num_rows . "</p>";
    
    if ($ordem == 'sobrenome') {
        $sql_media = "SELECT AVG(idade) AS media_idade FROM alunos";
        $result_media = $conn->query($sql_media);
        
        if ($result_media->num_rows > 0) {
            $row_media = $result_media->fetch_assoc();
            echo "<p>Média de idade da turma: " . $row_media['media_idade'] . "</p>";
        }
    }
} else {
    echo "Nenhum aluno cadastrado.";
}

$conn->close();
} elseif ($ordem == 'sobrenome') {
    $sql = "SELECT matricula, sobrenome, idade FROM alunos ORDER BY matricula ASC"; // Ordena por matrícula em ordem crescente (ordem de chegada) e exibe apenas o último nome
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Matrícula</th><th>Sobrenome</th><th>Idade</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['matricula'] . "</td>";
        echo "<td>" . $row['sobrenome'] . "</td>"; // Exibe o último nome
        echo "<td>" . $row['idade'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    echo "<p>Número de alunos cadastrados: " . $result->num_rows . "</p>";
    
    if ($ordem == 'sobrenome') {
        $sql_media = "SELECT AVG(idade) AS media_idade FROM alunos";
        $result_media = $conn->query($sql_media);
        
        if ($result_media->num_rows > 0) {
            $row_media = $result_media->fetch_assoc();
            echo "<p>Média de idade da turma: " . $row_media['media_idade'] . "</p>";
        }
    }
} else {
    echo "Nenhum aluno cadastrado.";
}

$conn->close();
}


?>
