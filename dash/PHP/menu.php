<?php
    echo    "<nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-ex1-collapse'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand' href='index.html'>SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class='nav navbar-right top-nav'>
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-envelope'></i> <b class='caret'></b></a>
                    <ul class='dropdown-menu message-dropdown'>
                        <li class='message-preview'>
                            <a href='#'>
                                <div class='media'>
                                    <span class='pull-left'>
                                        <img class='media-object' src='http://placehold.it/50x50' alt=''>
                                    </span>
                                    <div class='media-body'>
                                        <h5 class='media-heading'>
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class='small text-muted'><i class='fa fa-clock-o'></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class='message-preview'>
                            <a href='#'>
                                <div class='media'>
                                    <span class='pull-left'>
                                        <img class='media-object' src='http://placehold.it/50x50' alt='>
                                    </span>
                                    <div class='media-body'>
                                        <h5 class='media-heading'>
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class='small text-muted'><i class='fa fa-clock-o'></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class='message-preview'>
                            <a href='#'>
                                <div class='media'>
                                    <span class='pull-left'>
                                        <img class='media-object' src='http://placehold.it/50x50' alt='>
                                    </span>
                                    <div class='media-body'>
                                        <h5 class='media-heading'>
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class='small text-muted'><i class='fa fa-clock-o'></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class='message-footer'>
                            <a href='#'>Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-bell'></i> <b class='caret'></b></a>
                    <ul class='dropdown-menu alert-dropdown'>
                        <li>
                            <a href='#'>Alert Name <span class='label label-default'>Alert Badge</span></a>
                        </li>
                        <li>
                            <a href='#'>Alert Name <span class='label label-primary'>Alert Badge</span></a>
                        </li>
                        <li>
                            <a href='#'>Alert Name <span class='label label-success'>Alert Badge</span></a>
                        </li>
                        <li>
                            <a href='#'>Alert Name <span class='label label-info'>Alert Badge</span></a>
                        </li>
                        <li>
                            <a href='#'>Alert Name <span class='label label-warning'>Alert Badge</span></a>
                        </li>
                        <li>
                            <a href='#'>Alert Name <span class='label label-danger'>Alert Badge</span></a>
                        </li>
                        <li class='divider'></li>
                        <li>
                            <a href='#'>View All</a>
                        </li>
                    </ul>
                </li>
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i> John Smith <b class='caret'></b></a>
                    <ul class='dropdown-menu'>
                        <li>
                            <a href='#'><i class='fa fa-fw fa-user'></i> Profile</a>
                        </li>
                        <li>
                            <a href='#'><i class='fa fa-fw fa-envelope'></i> Inbox</a>
                        </li>
                        <li>
                            <a href='#'><i class='fa fa-fw fa-gear'></i> Settings</a>
                        </li>
                        <li class='divider'></li>
                        <li>
                            <a href='#'><i class='fa fa-fw fa-power-off'></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class='collapse navbar-collapse navbar-ex1-collapse'>
                <ul class='nav navbar-nav side-nav'>
                    <li>
                        <a href='../index.html'><i class='fa fa-fw fa-dashboard'></i> Dashboard</a>
                    </li>
                    <li>
                        <a href='javascript:;' data-toggle='collapse' data-target='#demo'>&#128451;  Cadastros <i class='fa fa-fw fa-caret-down'></i></a>
                        <ul id='demo' class='collapse'>
                            <li>
                                <a href='../cadastro_funcionario.html'>&#128221;  Funcionário</a>
                            </li>
                            <li>
                                <a href='../cadastro_fornecedor.html'>&#128230;  Fornecedor</a>
                            </li>
                            <li>
                                <a href='../cadastro_compra.html'>&#128722;  Compra</a>
                            </li>
                            <li>
                                <a href='../cadastro_compra_produto.html'>&#128203;  Compra-produto</a>
                            </li>
                            <li>
                                <a href='../cadastro_estoque.html'><i class='fa fa-cubes'></i>  Estoque</a>
                            </li>
                            <li>
                                <a href='../cadastro_produtofinal.html'><i class='fa fa-cube'></i>  Produto Final</a>
                            </li>
                            <li>
                                <a href='../cadastro_venda.html'>&#128179;  Venda</a>
                            </li>
                            <li>
                                <a href='../cadastro_produtodavenda.html'>&#128142;  Produto da Venda</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href='javascript:;' data-toggle='collapse' data-target='#demo2'>&#128394;  Edição <i class='fa fa-fw fa-caret-down'></i></a>
                        <ul id='demo2' class='collapse'>
                            <li>
                                <a href='edicao_funcionario.php'>&#128221;  aFuncionário</a>
                            </li>
                            <li>
                                <a href='edicao_fornecedor.php'>&#128230;  Fornecedor</a>
                            </li>
                            <li>
                                <a href='edicao_compra.php'>&#128722;  Compra</a>
                            </li>
                            <li>
                                <a href='edicao_compra_produto.php'>&#128203;  Compra-produto</a>
                            </li>
                            <li>
                                <a href='edicao_estoque.php'><i class='fa fa-cubes'></i>  Estoque</a>
                            </li>
                            <li>
                                <a href='edicao_produtofinal.php'><i class='fa fa-cube'></i>  Produto Final</a>
                            </li>
                            <li>
                                <a href='edicao_venda.php'>&#128179;  Venda</a>
                            </li>
                            <li>
                                <a href='edicao_produtodavenda.php'>&#128142;  Produto da Venda</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>";
?>
