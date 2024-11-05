<?php
    echo "<link rel='stylesheet' type='text/css' href='../css/cad_estilo.css'>";
	include 'conexao.php';
    $crit=$_POST['txtnome'];
    $pesq=$cmd->query("select * from tbtest where nome_t like '$crit%'");
	$total_registros =$pesq->rowCount();
    if ($total_registros > 0)
        {
        echo "<table>";
        echo "<tr> <th colspan=6> Dados Cadastrados </th> </tr>";
        echo "<tr> 
                <th> Código </th>
                <th> Nome </th>
                <th> e-Mail </th>
                <th> Senha </th>
                <th> Sexo </th>
                <th> Nascimento </th>
             </tr>";
				
        while($linha=$pesq->fetch(PDO::FETCH_ASSOC))
        {
            $vcod=$linha['codi_t'];
            $vnom=$linha['nome_t'];
            $vema=$linha['emai_t'];
        	$vsen=$linha['senh_t'];
			$vsex=$linha['sexo_t'];
            $dtna=$linha['dtna_t'];
            echo "<tr>
                    <td>$vcod</td>
                    <td>$vnom</td>
                    <td>$vema</td>
                    <td>$vsen</td>
                    <td>$vsex</td>
                    <td>$dtna</td>
                  </tr>";
		}
		echo "</table>";
        echo "<br/><br/>";
        echo "<a class='ligacao' href='pesq.html'>&nbsp;Nova Pesquisa&nbsp;</a>";
       }
    else
        {
        echo "<script language=javascript> window.alert('Não existem registros para exibir!!!'); location.href='pesq.html'; </script>";
        }
?>
