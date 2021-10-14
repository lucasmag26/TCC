<?php
    include('verifica_acesso_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro-Compra-produto</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/estilo1.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
                                     <?php
                include('menu_usuario.php');
            ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo">&#128451;  Cadastros <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="cadastro_funcionario.php">&#128221;  Funcionário</a>
                            </li>
                            <li>
                                <a href="cadastro_fornecedor.php">&#128230;  Fornecedor</a>
                            </li>
                            <li>
                                <a href="cadastro_compra.php">&#128722;  Compra</a>
                            </li>
                            <li>
                                <a href="cadastro_compra_produto.php">&#128203;  Compra-produto</a>
                            </li>
                            <li>
                                <a href="cadastro_estoque.php"><i class="fa fa-cubes"></i>  Estoque</a>
                            </li>
                            <li>
                                <a href="cadastro_produtofinal.php"><i class="fa fa-cube"></i>  Produto Final</a>
                            </li>
                            <li>
                                <a href="cadastro_venda.php">&#128179;  Venda</a>
                            </li>
                            <li>
                                <a href="cadastro_produtodavenda.php">&#128142;  Produto da Venda</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
            <!-- #################################################################### -->
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Cadastro de Produto Comprado &#128203;
                        </h1>
                        <form class="form-horizontal" action="PHP/cadastro_compra_produto.php" method="post">
                            <div class="form-group">
                                <label class="control-label col-md-2" for="compra">Compra:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">&#128203;</span>
                                    <input type="text" name="compra" id="compra" class="form-control" placeholder="Compra" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="produto">Produto:</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon"><i class="fa fa-cube"></i></span>
                                    <input type="text" name="produto" id="produto" class="form-control" placeholder="Produto" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="quantidade">Quantidade:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon"><i class="fa fa-cubes"></i></span>
                                    <input type="number" name="quantidade" id="quantidade" class="form-control" placeholder="Quantidade"required="required" min="0" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="validade">Validade:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">&#128197;</span>
                                    <input type="date" name="validade" id="validade" placeholder="Validade" class="form-control" required="required"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="valor">Valor:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">&#128178;</span>
                                    <input type="text" name="valor" id="valor" class="form-control" placeholder="R$" required="required"/>
                            </div>
                            </div>
                                <div class="col-md-offset-2 col-md-2">
                                    <input type="submit" value="Enviar" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ################################################################################## -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>