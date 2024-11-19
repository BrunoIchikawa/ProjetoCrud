<?php
include('conexao.php');
try {
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", username: $usuario, password: $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM tbusuario";
    $stmt = $conexao->query($sql);
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            color: #333;
            color: #fff;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .button-holders {
            gap: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        #btnVoltar{

            top: 50%;
            left: 50%;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;

        }

        #excluir-content {
            margin-left: 10px;
        }

        .btn-form {
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            /* adicionado border-radius para arredondar os cantos */
            cursor: pointer;
        }

        .btn-alterar {
            background-color: #2196F3;
            /* cor de fundo azul */
            color: #fff;
        }

        .btn-excluir {
            background-color: #FF0000;
            /* cor de fundo vermelho */
            color: #fff;
        }

        .btn-alterar:hover {
            background-color: #1A237E;
            /* cor de fundo azul escuro no hover */
        }

        .btn-excluir:hover {
            background-color: #8B0A0A;
            /* cor de fundo vermelho escuro no hover */
        }
    </style>
</head>

<body>
    <header>
        <h1>Lista de Usuários Cadastrados</h1>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($usuarios): ?>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?php echo $usuario['codi_t']; ?></td>
                            <td><?php echo $usuario['nome_t']; ?></td>
                            <td><?php echo $usuario['email_t']; ?></td>

                            <td>
                                <?php
                                if ($usuario['sexo_t'] == "M") {
                                    echo "Masculino";
                                } else {
                                    echo "Feminino";
                                }
                                ?>

                            </td>

                            <td><?php echo date("d/m/Y", strtotime($usuario['dtna_t'])); ?></td>
                            <td>
                                <a href="../paginas/alterar.html" class="btn-form btn-alterar">Alterar</a>
                                <a href="../paginas/excluir.html" class="btn-form btn-excluir">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">Nenhum usuário cadastrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </main>
    <div class="button-holders">
        <input type="button" value="Voltar" onclick="location.href = '../index.html'" id="btnVoltar">

    </div>
    <footer>
        <p>&copy; 2024 Projeto CRUD. Todos os direitos reservados.</p>
    </footer>
</body>

</html>