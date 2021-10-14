<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/frutilicia.png" />

    <title>Frutilícia-Contato</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <script>
        function  funcao1()
        {
            alert("Mensagem enviada com sucesso");
        }
    </script>

    <div class="brand">Frutilícia</div>
    <div class="address-bar">Comidas Naturais</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
             <?php
             session_start();
            if( !isset($_SESSION['nome']) )
            {
           echo "<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                <ul class='nav navbar-nav'>
                    <li>
                        <a href='index.php'>Menu</a>
                    </li>
                    <li>
                        <a href='about.php'>Sobre</a>
                    </li>
                    <li>
                        <a href='blog.php'>Cardápio</a>
                    </li>
                    <li>
                        <a href='contact.php'>Contato</a>
                    </li>
                    <li>
                        <a href='cadas.html'>Login</a>
                    </li>
                </ul>
            </div>";}
            else
            {
                echo "<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                <ul class='nav navbar-nav'>
                     <li>
                        <a href='index.php'>Menu</a>
                    </li>
                    <li>
                        <a href='about.php'>Sobre</a>
                    </li>
                    <li>
                        <a href='blog.php'>Cardápio</a>
                    </li>
                    <li>
                        <a href='contact.php'>Contato</a>
                    </li>
                    <li>
                        <a href='dash/index.php'>Dashboa</a>
                    </li>
                </ul>
            </div>";}
            ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Nossa Localização</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <div class="mapa" id="mapa">
                    </div>
                </div>
                <div class="col-md-4">
                    <p>Número:
                        <strong>(12) 3333-3333</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">name@example.com</a></strong>
                    </p>
                    <p>Endereço:
                        <strong>Av.Eduardo Cury,350
                            <br>Jardim Colinas, São José dos Campos</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Contate-nos</strong></h2>
                    <hr>
                    <p>Entre em contato com nossa equipe duvidas, reclamações e elogios!</p>
                    <form role="form" action="PHP/formulario.php" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nome</label>
                                <input type="text"  name="nome" id="nome" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Telefone</label>
                                <input type="tel" name="telefone" id="telefone" class="form-control" autocomplete="off">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Mensagem</label>
                                <textarea class="form-control" name="mensagem"  id="mensagem" rows="6" autocomplete="off"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default" onclick="funcao1()">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Frutilícia &copy; 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mapa.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRjS7yzIDKfwMjljyHDIuJ4rHeJsWkzYI&callback=meuMapa"></script>
</body>

</html>
