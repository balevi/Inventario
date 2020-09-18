
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
            
        
            
           // $consulta2 ="select * from descricao";
            $dados1 = $mysqli->query($consulta1) or die($mysqli->error);
            //$dados2 = $mysqli->query($consulta2) or die($mysqli->error);
            /*
            $consulta3 ="select * from posicao ORDER BY id desc limit";
            $consulta4 ="select * from proprietario ORDER BY id desc limit";
            $consulta5 ="select * from status ORDER BY id desc limit";
            $consulta6 ="select * from usuario ORDER BY id desc limit";

        $dados1 = $mysqli->query($consulta1);
        $dados2 = $mysqli->query($consulta2);
        $dados3 = $mysqli->query($consulta3);
        $dados4 = $mysqli->query($consulta4);
        $dados5 = $mysqli->query($consulta5);
        $dados6 = $mysqli->query($consulta6);
       // 
       */