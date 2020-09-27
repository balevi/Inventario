
<?php
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "inventario";   
                        
        $mysqli = new mysqli($host, $usuario, $senha, $bd);//conexao com o banco de dados
        
        if (mysqli_connect_errno()) { // verificar se conexao teve sucesso, caso contrario voltara para index
           print ("erro banco");
        }
     
            $consulta1 ="select P.patrimonio,D.descricao,po.posicao,pr.proprietario, st.status, us.usuario FROM patrimonio p JOIN descricao d ON p.id = D.patrimonio_id JOIN posicao po ON P.id = po.patrimonio_id JOIN proprietario pr ON p.id = pr.patrimonio_id JOIN status st ON p.id = st.patrimonio_id JOIN usuario us ON p.id = us.patrimonio_id";
            $consulta2 ="select DISTINCT patrimonio from patrimonio";
            $consulta3 ="select DISTINCT descricao from descricao";
            $consulta4 ="select DISTINCT status from status";
            $consulta5 ="select DISTINCT proprietario from proprietario";
            $consulta6 ="select DISTINCT posicao from posicao";
            $consulta7 ="select DISTINCT usuario from usuario";
            $dados1 = $mysqli->query($consulta1) or die($mysqli->error);

    ?>