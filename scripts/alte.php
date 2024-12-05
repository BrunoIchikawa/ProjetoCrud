
<?php
    include '../scripts/conexao.php';

    $bt = $_POST['bt-submit'];
      $codi = $_POST['codi'];
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $sexo = $_POST['sexo'];
      $dtna = $_POST['data-nascimento'];

      $atualizar = $conexao->query("update tbUsuario set nome_t = '$nome', email_t = '$email', senha_t = '$senha', sexo_t = '$sexo', dtna_t = '$dtna' where codi_t = '$codi'");
   
      echo "<script>
        alert('Registro alterado com sucesso!');
        window.location.href='../scripts/list.php';
        </script>";
    ?>