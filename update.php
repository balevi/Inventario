    
<?php

    $verificar  = ( isset($_REQUEST["patrimonio"]) || isset($_REQUEST["descricao"]) || isset($_REQUEST["status"]) || isset($_REQUEST["proprietario"]) || isset($_REQUEST["posicao"]) || isset($_REQUEST["usuario"]) ) && (isset($_REQUEST["id"]) &&  $_REQUEST["id"] != "false" );

    session_start();
    if ($verificar == true )
    {
        $id = $_REQUEST["id"];
        $patrimonio = $_REQUEST["patrimonio"];
        $descricao = $_REQUEST["descricao"];
        $status = $_REQUEST["status"];
        $proprietario = $_REQUEST["proprietario"];
        $posicao = $_REQUEST["posicao"];
        $usuario = $_REQUEST["usuario"];

        
        $con=mysqli_connect("localhost", "root", "", "inventario");
        if($patrimonio != "false")
        {
      
    
            $res = mysqli_query($con, " UPDATE patrimonio SET patrimonio = '$patrimonio' WHERE id ='$id' ");

        }

        if($descricao != "false")
        {
          
            $res = mysqli_query($con, " UPDATE descricao SET descricao = '$descricao' WHERE patrimonio_id ='$id' ");

        }

        if($status != "false")
        {
          
            $res = mysqli_query($con, " UPDATE status SET status = '$status' WHERE patrimonio_id ='$id' ");

        }        

        if($proprietario != "false")
        {
          
            $res = mysqli_query($con, " UPDATE proprietario SET proprietario = '$proprietario' WHERE patrimonio_id ='$id' ");

        }

        if($posicao != "false")
        {
          
            $res = mysqli_query($con, " UPDATE posicao SET posicao = '$posicao' WHERE patrimonio_id ='$id' ");

        }
        if($usuario != "false")
        {
          
            $res = mysqli_query($con, " UPDATE usuario SET usuario = '$usuario' WHERE patrimonio_id ='$id' ");

        }


            if ($res>0)
            {
            
                    $_SESSION['cor'] = "alert alert-success";
                    $_SESSION['res'] = "Salvo com Sucesso!";
            }else{
                    $_SESSION['cor'] = "alert alert-danger";
                    $_SESSION['res'] = "Erro na Atualização!";
                }

    } else{
        $_SESSION['cor'] = "alert alert-warning";
        $_SESSION['res'] = "Nenhum registro novo para alteração!";

    }
           header('Location: inventario.php');
?>