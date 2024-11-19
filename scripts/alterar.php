<?php
include_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];
    $dataNascimento = $_POST['data-nascimento'];

    if (empty($codigo)) {
        // Perform search operation
        $pesq = $conexao->query("SELECT * FROM tbusuario WHERE nome_t LIKE '%$nome%'");
        // ... rest of the code ...
    } else {
        // Perform update operation
        $sql = "UPDATE tbusuario SET nome_t = '$nome', email_t = '$email', senha_t = '$senha', sexo_t = '$sexo', dtna_t = '$dataNascimento' WHERE codi_t = '$codigo'";
        try {
            $conexao->query($sql);
            echo "<script>
                alert('Registro alterado com sucesso!');
                window.location.href='../paginas/pesquisa.html';
            </script>";
        } catch (PDOException $e) {
            echo "Erro ao alterar o registro: " . $e->getMessage();
        }
    }
}
?>