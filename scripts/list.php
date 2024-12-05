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
    <title>Listagem De Registros</title>
    <link rel="stylesheet" href="../css/cad_estilo.css">
    <style>
        form .tabela-dados {
          border-collapse: collapse;
          width: 100%;
        }
        
        form .tabela-dados th, form .tabela-dados td {
          padding: 12px;
          border: 1px solid #ddd;
        }
        
        form .tabela-dados th {
          background-color: #f2f2f2;
        }
        
        form .tabela-dados tr:nth-child(even) {
          background-color: #f9f9f9;
        }
        
        form .tabela-dados th, form .tabela-dados td {
          text-align: left;
        }
        
        form .tabela-dados tr:hover {
          background-color: #f5f5f5;
        }
    </style>
    
</head>
<body>
    <header>
            <h1>Listagem de Registros</h1>
    </header>
    <main>
        <form action="" class="">
            <table class='tabela-dados'>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>Ações</th>
                </tr>
                <?php
                if ($total_registros > 0) {
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
                        <td>
                            <input type='button' class='btn-alterar' onclick='alterarRegistro(`$vcodi`, `$vnome`, `$vemail`, `$vsenha`, `$vsexo`, `$vdtna`)' value='Alterar'>
                            <input type='button' class='btn-excluir' onclick='IrParaExcluir()' value='Excluir'>
                        </td>
                    </tr>";
                    }
                }
                else
                    echo "<script language='javascript'> 
                    window.alert('Não existem registros para exibir');
                    window.history.back();
                    </script>;"
            

            ?>
        </table>

        <div class="botoes">
            <input type="button" class="btn-form" onclick="location.href='../index.html'" value="Voltar">
        </div>

        </form>
    </main>
    <footer>
        <p>&copy; 2024 ProjetoCrudBruno. Todos os direitos reservados.</p>
    </footer>
    <script>
        function alterarRegistro(codi, nome, email, senha, sexo, dtna) {
            window.location.href = "alterar.php?codi=" + codi + "&nome=" + nome + "&email=" + email + "&senha=" + senha + "&sexo=" + sexo + "&dtna=" + dtna;
        }
        function IrParaExcluir(codigo) {
            window.location.href = "../paginas/excluir.html";
        }
    </script>
</body>
</html>