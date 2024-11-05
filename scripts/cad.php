// scripts/cad.php
<?php
include('conexao.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura dos dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo']; // Obter o valor do campo sexo

    // Verificar o valor do campo sexo e atribuir o valor correto à variável $sexo
    if ($sexo == "m") {
        $sexo = "M"; // Atribuir "M" para masculino
    } else {
        $sexo = "F"; // Atribuir "F" para feminino
    }

    $datnasc = $_POST['data-nascimento'];

    $sucesso = true; 
    $incluir = $cmd->query("insert into tbusuario(nome_t, email_t, senha_t, sexo_t, dtna_t) values('$nome', '$email', '$senha', '$sexo', '$datnasc')");
    if (empty($nome) || empty($email) || empty($senha)) {
        $sucesso = false;
        $erro = "Todos os campos são obrigatórios.";
    }

    // Se o cadastro for bem-sucedido
    if ($sucesso) {
        echo "<script>
            alert('Cadastro realizado com sucesso!');
            window.location.href='../paginas/cad.html'; // Redireciona de volta para o cadastro
        </script>";
    } else {
        echo "<script>
            alert('Erro no cadastro: $erro');
            window.location.href='../paginas/cad.html'; // Redireciona de volta para o cadastro
        </script>";
    }
} else {
    echo "<p>Dados não enviados corretamente.</p>";
}
?>
