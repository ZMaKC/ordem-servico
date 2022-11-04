<?php
    include_once '../../config.php';

    // Pega o ID que veio da URL
    if(empty($_GET['id'])){
        header('Location: index.php');
        exit;
    }else{
        $id = $_GET['id'];
    }

    // Busca os dados do banco
    $sql = "SELECT * FROM produto WHERE IDPRO = $id";
    $produto = retornaDado($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include_once path('template/head.php') ?>
    <body class="sb-nav-fixed">
        <?php include_once path('template/navbar.php') ?>
        <div id="layoutSidenav">
            <?php include_once path('template/sidebar.php') ?>

            <div id="layoutSidenav_content">
                <main class="container">
                    <?php include_once path('template/mensagem.php') ?>
                    
                    <h1><?= $produto['nome'] ?></h1>
                    <p>R$ <?= number_format($produto['valor'], 2, ',', '.') ?></p>
                    <p><?= $produto['descricao'] ?></p>

                    <hr>
                    <a <?php if(podeMostrar(['funcionario'])){ ?>
                    href="editar.php?id=<?= $produto['IDPRO'] ?>" class="btn btn-warning">Editar
                    </a>
                        <?php } ?>
                    <a <?php if(podeMostrar(['funcionario'])){ ?>
                    onclick="return confirm('Deseja realmente apagar o produto?')" href="apagar.php?id=<?= $produto['IDPRO'] ?>" class="btn btn-danger">Apagar
                    </a>
                        <?php } ?>
                </main>

                <?php include_once path('template/footer.php') ?>
            </div>
        </div>
        <?php include_once path('template/scripts.php') ?>
    </body>
</html>
