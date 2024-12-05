<?php
    include '../scripts/conexao.php';

    $lista = $conexao->query("SELECT * FROM tbUsuario");
    $total_registros = $lista->rowCount();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="">
        <table class='tabela-dados'>
            <tr><th colspan='7'>Dados Cadastrados</th></tr>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Categoria</th>
                <th>Senha</th>
                <th>Sexo</th>
                <th>Data de Nascimento</th>
            </tr>
            <?php
                while ($linha = $lista->fetch(PDO::FETCH_ASSOC)) {
                    $vcodi = $linha['codi_t'];
                    $vnome = $linha['nome_t'];
                    $vemail = $linha['email_t'];
                    $vsenha = $linha['senha_t'];
                    $vsexo = $linha['sexo_t'];
                    $vdtna = $linha['dtna_t'];
            
            
                    echo "<tr>
                    <td>$vcodi</td>
                    <td>$vnome</td>
                    <td>$vemail</td>
                    <td>$vsenha</td>
                    <td>$vsexo</td>
                    <td>$vdtna</td>
                    </tr>";
                }
            ?>
        <button class='btn-menu' onClick='window.location.href=\"index.html\";'>Menu</button>
        </table>
        </form>
    </main>
    <script language='javascript'>
        window.alert('Não existem registros para exibir');
        window.history.back();
    </script>;
</body>
</html>
<?php
    include '../scripts/conexao.php';

    $lista = $conexao->query("SELECT * FROM tbUsuario");
    $total_registros = $lista->rowCount();
    
    echo "
        <header>
            <h1>Lista de Usuários</h1>
        </header>
    ";


    if ($total_registros > 0) {
        echo "
        <table class='tabela-dados'>
            <tr><th colspan='7'>Dados Cadastrados</th></tr>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Categoria</th>
                <th>Senha</th>
                <th>Sexo</th>
                <th>Data de Nascimento</th>
            </tr>";
            
        // Preenchendo as linhas da tabela com os registros
        while ($linha = $lista->fetch(PDO::FETCH_ASSOC)) {
            $vcodi = $linha['codi_t'];
            $vnome = $linha['nome_t'];
            $vemail = $linha['email_t'];
            $vsenha = $linha['senha_t'];
            $vsexo = $linha['sexo_t'];
            $vdtna = $linha['dtna_t'];


            echo "<tr>
                    <td>$vcodi</td>
                    <td>$vnome</td>
                    <td>$vemail</td>
                    <td>$vsenha</td>
                    <td>$vsexo</td>
                    <td>$vdtna</td>
                </tr>";
        }

        echo "</table>";  // Fechando a tabela após o loop de dados
        echo "<br/><br/>";
        echo "<button class='btn-menu' onClick='window.location.href=\"index.html\";'>Menu</button>";
    } else {

    }
?>
