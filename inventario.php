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
<body>
    

    <?php 
        require_once 'conexao.php';
    ?>


    <img src="https://4.bp.blogspot.com/-m1WwbPYUV0U/VdHSD1q6fFI/AAAAAAAACCw/esmMxWGi58g/s1600/prodeb.jpg"  id="logo2" class="rounded mx-auto d-block my-2" alt="prodeb" width="100px" heigth="100px">
                            
    <section id="sect" >
            <nav class="navbar navbar-light bg-light">

            </nav>
            <table class="table table-hover table-sm table-striped" id="tabela">
                <thead class="thead-dark">
                    <tr>
                        <th><h5>Patrimonio</h5></th>
                        <th><h5>Descrição</h5></th>
                        <th><h5>Status</h5></th>
                        <th><h5>Proprietário</h5></th>
                        <th><h5>Posição</h5></th>
                        <th><h5>Usuário</h5></th>
                        <th></th>
                    </tr>
                </thead>
                        
                <?php
                    while ($dado = mysqli_fetch_assoc($dados1)) 
                    { ?>
                        <tr>
                            <td><?php echo $dado["patrimonio"]; ?>
                                <select>
                                <?php
                                    
                                    while ($dado2 = mysqli_fetch_assoc($dados2)) 
                                    { ?>
                                        <option ><?php echo $dado2["patrimonio"]; ?></option>
                                    <?php } $dados2 = $mysqli->query($consulta2) or die($mysqli->error); ?>
                                </select>
                            </td>
                            <td><?php echo $dado["descricao"]; ?></td>
                            <td><?php echo $dado["status"]; ?></td>
                            <td><?php echo $dado["proprietario"]; ?></td>
                            <td><?php echo $dado["posicao"]; ?></td>
                            <td><?php echo $dado["usuario"]; ?></td>
                            
                            
                        </tr>       
                <?php   }?>
            </table>         
                            
     
                                     
    </section>
                                
    <footer>
        <h2>Copyright&copy;.2020, PRODEB</h2>
    </footer> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
   </body>
</html>