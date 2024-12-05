// scripts/cad.php
<?php
include('conexao.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];

  
    if ($sexo == "m") {
        $sexo = "M";
    } else {
        $sexo = "F"; 
    }

    $datnasc = $_POST['data-nascimento'];

    $sucesso = true; 
    $incluir = $conexao->query("insert into tbusuario(nome_t, email_t, senha_t, sexo_t, dtna_t) values('$nome', '$email', '$senha', '$sexo', '$datnasc')");
    if (empty($nome) || empty($email) || empty($senha)) {
        $sucesso = false;
        $erro = "Todos os campos são obrigatórios.";
    }


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
