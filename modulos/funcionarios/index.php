<?php
    include_once '../../config.php';

    // Busca os dados do banco
    $sql = "SELECT * FROM funcionario";
    $funcionarios = retornaDados($sql);
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

                    <h1 class="text-center display-3">Lista de Funcionários</h1>

                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>E-mail</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($funcionarios as $funcionario){ ?>
                                <tr>
                                    <td><?= $funcionario['IDFUN'] ?></td>
                                    <td><?= $funcionario['nomeFUN'] ?></td>
                                    <td><?= $funcionario['telFUN'] ?></td>
                                    <td><?= $funcionario['emailFUN'] ?></td>
                                    <td>
                                        <a class="btn btn-secondary btn-sm" href="visualizar.php?id=<?= $funcionario['IDFUN'] ?>"><i class="fa-regular fa-eye"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </main>

                <?php include_once path('template/footer.php') ?>
            </div>
        </div>
        <?php include_once path('template/scripts.php') ?>
    </body>
</html>
