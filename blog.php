<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/frutilicia.png" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />

    <title>Frutilícia-Cardápio</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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

        <div class="box">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img class="img-responsive" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" alt="Card image cap">
                        <div class="card-body">
        <!--Title-->
                            <h4 class="card-title">Card title</h4>
        <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img class="img-responsive" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" alt="Card image cap">
                        <div class="card-body">
        <!--Title-->
                            <h4 class="card-title">Card title</h4>
        <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                    </div>
                </div>
                    
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img class="img-responsive" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" alt="Card image cap">
                        <div class="card-body">
        <!--Title-->
                            <h4 class="card-title">Card title</h4>
        <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img class="img-responsive" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" alt="Card image cap">
                        <div class="card-body">
        <!--Title-->
                            <h4 class="card-title">Card title</h4>
        <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                    </div>
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

</body>

</html>
