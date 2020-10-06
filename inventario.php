<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INVENTARIO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<body>
    

    <?php 
        require_once 'conexao.php';
    ?>


    <img src="https://4.bp.blogspot.com/-m1WwbPYUV0U/VdHSD1q6fFI/AAAAAAAACCw/esmMxWGi58g/s1600/prodeb.jpg"  id="logo2" class="rounded mx-auto d-block my-2" alt="prodeb" width="100px" heigth="100px">
                            
    <section id="sect" >
    <div class="d-flex justify-content-center"><i  style="font-size: 2em;">Relação de Patrimônios - CSOL 5</i> </div>
    <?php       
        session_start(); 
        if (isset($_SESSION['res']))
        { ?>
            <div class="d-flex justify-content-center <?php echo $_SESSION['cor']; ?> alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['res'];  unset($_SESSION['res']); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        <?php } ?>

           
        
           
            <nav class="navbar navbar-light bg-light">

            </nav>
            <table class="table table-hover table-sm" id="tabela">
                <thead class="thead-dark">
                    <tr>
                        <th><h5>Patrimonio</h5></th>
                        <th><h5>Descrição</h5></th>
                        <th><h5>Status</h5></th>
                        <th><h5>Proprietário</h5></th>
                        <th><h5>Posição</h5></th>
                        <th><h5>Usuário</h5></th>
                        <th><i id="lock" class="fas fa-lock-open" style="font-size: 1.5em;"></i></th>
            
                    </tr>
                </thead>
                        
                <?php
                    while ($dado = mysqli_fetch_assoc($dados1)) 
                    { ?>
                        <tr class= "linha">
                            <td class= "cell "><p class="parag" id="<?php echo $dado["id"]; ?>" ><?php echo $dado["patrimonio"]; ?></p>
                                <select class= "selec" name="patri" >
                                <?php   
                                    $dados2 = $mysqli->query($consulta2) or die($mysqli->error);  
                                    while ($dado2 = mysqli_fetch_assoc($dados2)) 
                                    { ?>
                                        <option ><?php echo $dado2["patrimonio"]; ?></option>
                              <?php }  ?>
                                </select>
                            </td>
                            <td class= "cell"><p class="parag" id="<?php echo $dado["id"]; ?>"><?php echo $dado["descricao"]; ?></p>
                            <select  class= "selec" name="descri">
                                <?php   
                                    $dados3 = $mysqli->query($consulta3) or die($mysqli->error);  
                                    while ($dado3 = mysqli_fetch_assoc($dados3)) 
                                    { ?>
                                        <option ><?php echo $dado3["descricao"]; ?></option>
                              <?php }  ?>
                                </select>
                            </td>
                            <td class= "cell"><p class="parag" id="<?php echo $dado["id"]; ?>"><?php echo $dado["status"]; ?></p>
                            <select  class= "selec" name= "stat">
                                <?php   
                                    $dados4 = $mysqli->query($consulta4) or die($mysqli->error);  
                                    while ($dado4 = mysqli_fetch_assoc($dados4)) 
                                    { ?>
                                        <option ><?php echo $dado4["status"]; ?></option>
                              <?php }  ?>
                                </select>
                            </td>
                            <td class= "cell"><p class="parag" id="<?php echo $dado["id"]; ?>"><?php echo $dado["proprietario"]; ?></p>
                            <select  class= "selec" name= "propri">
                                <?php   
                                    $dados5 = $mysqli->query($consulta5) or die($mysqli->error);  
                                    while ($dado5 = mysqli_fetch_assoc($dados5)) 
                                    { ?>
                                        <option ><?php echo $dado5["proprietario"]; ?></option>
                              <?php }  ?>
                                </select>
                            </td>
                            <td class= "cell"><p class="parag" id="<?php echo $dado["id"]; ?>"><?php echo $dado["posicao"]; ?></p>
                            <select  class= "selec" name= "posic">
                                <?php   
                                    $dados6 = $mysqli->query($consulta6) or die($mysqli->error);  
                                    while ($dado6 = mysqli_fetch_assoc($dados6)) 
                                    { ?>
                                        <option ><?php echo $dado6["posicao"]; ?></option>
                              <?php }  ?>
                                </select>
                            </td>
                            <td class= "cell"><p class="parag" id="<?php echo $dado["id"]; ?>"><?php echo $dado["usuario"]; ?></p>
                            <select  class= "selec" name= "usua">
                                <?php   
                                    $dados7 = $mysqli->query($consulta7) or die($mysqli->error);  
                                    while ($dado7 = mysqli_fetch_assoc($dados7)) 
                                    { ?>
                                        <option ><?php echo $dado7["usuario"]; ?></option>
                              <?php }  ?>
                                </select>
                            </td>
                            <td>
                            <form action="update.php" method="get">
                                <input type = "text" name="patrimonio" class ="patri" value="false" hidden>
                                <input type = "text" name="id" class ="id"value= "false" hidden>
                                <input type = "text" name="descricao" class= "descri" value="false" hidden>
                                <input type = "text" name="status" class= "stat" value ="false" hidden >
                                <input type = "text" name="proprietario" class="propri" value ="false"hidden>
                                <input type = "text" name="posicao" class= "posic" value ="false"hidden>
                                <input type = "text" name="usuario" class= "usua" value ="false" hidden>
                                <button class="far fa-check-circle btn btn-outline-success buttons" style="font-size: 1.5em;"></button>
                            </form>
                            </td>
                            
                        </tr>       
                <?php   }?>
            </table>         
            <div class="d-flex justify-content-center"><i class="fas fa-plus-square btn btn-outline-primary " style="font-size: 1.5em;"></i> </div>
     
                                     
    </section>
                                
    <footer>
        <h2>Copyright&copy;.2020, PRODEB</h2>
    </footer> 
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="Script/inventario.js"></script>
   </body>
</html>