<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Resultado da Pesquisa </title>
    <link rel="stylesheet" href="../css/pesquisaPHP.css">
</head>

<body>
    <header>
        <h1>Resultado da Pesquisa</h1>
    </header>

    <main>
        <?php
        include 'conexao.php';

        $crit = $_POST['txtnome'];

        $pesq = $conexao->query("SELECT * FROM tbusuario WHERE nome_t LIKE '%$crit%'");

        if ($pesq->rowCount() > 0) {
            echo "<table>";
            echo "<tr><th>Código</th><th>Nome</th><th>E-mail</th><th>Senha</th><th>Sexo</th><th>Data de Nascimento</th></tr>";

            while ($linha = $pesq->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $linha['codi_t'] . "</td>";
                echo "<td>" . $linha['nome_t'] . "</td>";
                echo "<td>" . $linha['email_t'] . "</td>";
                echo "<td>" . $linha['senha_t'] . "</td>";
                echo "<td>" . $linha['sexo_t'] . "</td>";
                echo "<td>" . $linha['dtna_t'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Nenhum resultado encontrado.";
        }
        ?>
        <div class="botoes">
            <?php if ($pesq->rowCount() > 0) { ?>
                <input type="button" class="btn-form" value="Voltar" onclick="location.href='../index.html'">
            <?php } else { ?>
                <input type="button" class="btn-form" value="Voltar" onclick="location.href='../index.html'">
            <?php } ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Projeto CRUD. Todos os direitos reservados.</p>
    </footer>
</body>

</html>