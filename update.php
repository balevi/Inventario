    
<?php

    $verificar  = isset($_REQUEST["patrimonio"]) && isset($_REQUEST["id"]);

    if ($verificar)
    {
        $patrimonio = $_REQUEST["patrimonio"];
        $id = $_REQUEST["id"];
        session_start();
        if($patrimonio != "false")
        {
      
            $con=mysqli_connect("localhost", "root", "", "inventario");
    
            $res = mysqli_query($con, " UPDATE patrimonio SET patrimonio = '$patrimonio' WHERE id ='$id' ");

            if ($res>0)
            {
            
                    $_SESSION['cor'] = "alert alert-success";
                    $_SESSION['res'] = "Salvo com Sucesso!";
            }else{
                    $_SESSION['cor'] = "alert alert-danger";
                    $_SESSION['res'] = "Erro na Atualização!";
                }
        }else{
            $_SESSION['cor'] = "alert alert-warning";
            $_SESSION['res'] = "Nenhum registro novo para alteração!";
        }
    }
           header('Location: inventario.php');
?>