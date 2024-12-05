<?php



?>

















<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alterar Registros</title>
    <link rel="stylesheet" href="../css/cad_estilo.css" />

    </script>
  </head>
  <body>
    <header>
      <h1>Cadastro de Usuário</h1>
    </header>

    <main>
      <form
        class="formulario"
        id="searchForm"
        action="../scripts/alterar.php"
        method="POST"
      >
        <div class="campo">
        	echo "<label for='txtcodi'>Código do registro a ser alterado&nbsp;</label>";                 
            echo "<input type='text' name='txtcodi' id='txtcodi' readonly=false/><br/>";
        </div>
        <div class="campo">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" readonly="false" />
        </div>
        <div class="campo">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" readonly="false" />
        </div>
        <div class="campo">
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="senha" readonly="false" />
        </div>
        <div class="campo">
          <label>Sexo:</label>
          <div>
            <input type="radio" id="masculino" name="sexo" value="m" />
            <label for="masculino">Masculino</label>
          </div>
          <div>
            <input type="radio" id="feminino" name="sexo" value="f" readonly="false" />
            <label for="feminino">Feminino</label>
          </div>
        </div>
        <div class="campo">
          <label for="data-nascimento">Data de Nascimento:</label>
          <input type="date" id="data-nascimento" name="data-nascimento" readonly="false"/>
        </div>
        <div class="botoes">
          <button type="button" class="btn-form" id="actionButton">Buscar</button>
          <button type="reset" class="btn-form">Limpar</button>
          <button type="button" class="btn-form" onclick="location.href='../scripts/list.php'">Voltar</button>
        </div>
      </form>
    </main>

    <footer>
      <p>&copy; 2024 ProjetoCrudBruno. Todos os direitos reservados.</p>
    </footer>
  </body>
</html>
