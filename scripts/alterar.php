<?php
include '../scripts/conexao.php';

$codi = $_GET['codi'];
$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$sexo = $_GET['sexo'];
$dtna = $_GET['dtna'];
 

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Alterar Registros</title>
  <link rel="stylesheet" href="../css/cad_estilo.css" />
</head>

<body>
  <header>
    <h1>Alterar Registro</h1>
  </header>

  <main>

    <form
      class="formulario"
      id="searchForm"
      action="../scripts/alte.php"
      method="POST">
      <div class="campo">
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codi" value="<?php echo $codi; ?>" readonly />
      </div>
      <div class="campo">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" />
      </div>
      <div class="campo">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" />
      </div>
      <div class="campo">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" value="<?php echo $senha; ?>" />
      </div>
      <div class="campo">
        <label>Sexo:</label>
        <div>
          <input type="radio" id="masculino" name="sexo" value="m" <?php if ($sexo == 'm') echo 'checked'; ?> />
          <label for="masculino">Masculino</label>
        </div>
        <div>
          <input type="radio" id="feminino" name="sexo" value="f" <?php if ($sexo == 'f') echo 'checked'; ?> />
          <label for="feminino">Feminino</label>
        </div>
      </div>
      <div class="campo">
        <label for="data-nascimento">Data de Nascimento:</label>
        <input type="date" id="data-nascimento" name="data-nascimento" value="<?php echo $dtna; ?>" />
      </div>
      <div class="botoes">
        <input type="submit" class="btn-form" name="bt-submit" value="Alterar" />
      </div>
    </form>

  </main>

  <footer>
    <p>&copy; 2024 ProjetoCrudBruno. Todos os direitos reservados.</p>
  </footer>
</body>

</html>