<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading"></div>

                <!-- Menu de cadastro  -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Cadastro
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="clientes.php">Cliente</a>
                        <a class="nav-link" href="funcionarios.php">Funcionário</a>
                        <a class="nav-link" href="./login/inserir.php">Usuários</a>
                    </nav>
                </div>
                
                <!-- Menu de clientes  -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseClientes" aria-expanded="false" aria-controls="collapseClientes">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                        Clientes
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseClientes" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= links('modulos/clientes/cadastrar.php') ?>">Novo Cliente</a>
                        <a class="nav-link" href="<?= links('modulos/clientes/index.php') ?>">Lista</a>
                    </nav>
                </div>
                <!-- menu de funcionario -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFuncionario" aria-expanded="false" aria-controls="collapseClientes">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-gear"></i></div>
                        Funcionários
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseFuncionario" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= links('modulos/funcionarios/cadastrar.php') ?>">Novo Funcionários</a>
                        <a class="nav-link" href="<?= links('modulos/funcionarios/index.php') ?>">Lista</a>
                    </nav>
                </div>


                <!-- Menu de produtos  -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProdutos" aria-expanded="false" aria-controls="collapseClientes">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-box-open"></i></div>
                        Produtos
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseProdutos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= links('modulos/produtos/cadastrar.php') ?>">Novo produto</a>
                        <a class="nav-link" href="<?= links('modulos/produtos/index.php') ?>">Lista</a>
                    </nav>
                </div>

                <!-- Menu de ordens de serviços  -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOrdens" aria-expanded="false" aria-controls="collapseClientes">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-toolbox"></i></div>
                        Ordens
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseOrdens" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= links('modulos/ordem_servico/cadastrar.php') ?>">Abrir Ordem de Serviço</a>
                        <a class="nav-link" href="<?= links('modulos/ordem_servico/index.php') ?>">Lista</a>
                    </nav>
                </div>

                <!-- Menu de serviços  -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseServicos" aria-expanded="false" aria-controls="collapseServicos">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-box-open"></i></div>
                        Serviços
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseServicos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= links('modulos/servicos/cadastrar.php') ?>">Novo Serviço</a>
                        <a class="nav-link" href="<?= links('modulos/servicos/index.php') ?>">Lista</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logado como:</div>
        </div>
    </nav>
</div>