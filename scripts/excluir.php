<?php

include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['codigo'];

    $sql = "DELETE FROM tbusuario WHERE codi_t = '$codigo'";

    try {
        $resultado = $conexao->query($sql);
        if ($resultado->rowCount() > 0) {
            echo "<script>
                alert('Registro excluído com sucesso!');
                window.location.href='../paginas/excluir.html';
            </script>";
        } else {
            echo "<script>
                alert('Registro não encontrado!');
                window.location.href='../paginas/excluir.html';
            </script>";
        }
    } catch (PDOException $e) {
        echo "Erro ao excluir o registro: " . $e->getMessage();
    }
}
?>