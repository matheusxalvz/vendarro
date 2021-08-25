<?php
try {
    $pdo = new PDO("mysql:dbname=db_carros;host=localhost", "root" , "");
    } catch(PDOException $e) {
        echo "ERRO: ".$e->getMessage();
        exit;
    }
?>
<link rel="stylesheet" href="style.css">
<main>
<div class="input-pesquisa"> 
    <form>
    
    <input type="search" name="marca" id="marca" placeholder="Digite alguma coisa..." >
    
   
    </form>
</div>
    <div class="catalogo">
        <h2> Carros encontrados: </h2>
        <div class="carros">
            <?php
            $sql = "SELECT * FROM carros";
            $sql = $pdo->query($sql);
            if($sql->rowCount()>0) {
                foreach($sql->fetchAll() as $carro):;
                ?>
                <div class="carro">
                <img src="img/<?php echo $carro['foto'];?>" width="230px" height="153px">
                <h3><?php echo $carro['nome'];?></h3>
                <p><?php echo $carro['preco']; ?></p>

                </div>
                <?php 
                endforeach;                              
            }
            ?>
        </div>
    </div>

<main>