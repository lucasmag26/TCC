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

    <title>Cadastro-Fornecedor</title>

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
<script>
 function somenteNumeros(num) {
        var er = /[^0-9.-]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>  
 
 <script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
        <!-- telefone -->
<script>
function mascara(o,f){
v_obj=o
v_fun=f
setTimeout("execmascara()",1)
}
function execmascara(){
v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
return v;
}
function id( el ){
return document.getElementById( el );
}
window.onload = function(){
id('telefone').onkeypress = function(){
mascara( this, mtel );
}
}
</script>

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
                                <a href="cadastro_venda.html">&#128179;  Venda</a>
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
                            Cadastro de Fornecedor &#128230;
                        </h1>
                        <form class="form-horizontal" action="PHP/cadastro_fornecedor.php" method="post">
                            <div class="form-group">
                                <label class="control-label col-md-2" for="nome">Nome Fantasia:</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">&#128101;</span>
                                    <input type="text" name="nome_fantasia" id="nome_fantasia" class="form-control" placeholder="Nome Fantasia" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="razao">Razão Social:</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">&#128195;</span>
                                    <input type="text" name="razao_social" id="razao_social" class="form-control" placeholder="Razão Social" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="email">Email:</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">&#128231;</span>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="cnpj">CNPJ:</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">&#127991;</span>
                                    <input type="text" name="cnpj" id="cnpj" OnKeyPress="formatar('##.###.###/####-##', this)" placeholder="00.000.000/0000-00" maxlength="20" class="form-control" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="telefone">Telefone:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">&#128222;</span>
                                    <input type="text" name="telefone" id="telefone" placeholder="(00) 0000-0000" maxlength="14" class="form-control" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
<script type='text/javascript' >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=('');
            document.getElementById('bairro').value=('');
            document.getElementById('cidade').value=('');
            document.getElementById('estado').value=('');
           
    }

    function meu_callback(conteudo) {
        if (!('erro' in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.rua);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert('CEP não encontrado.');
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável 'cep' somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != '') {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com '...' enquanto consulta webservice.
                document.getElementById('rua').value='...';
                document.getElementById('bairro').value='...';
                document.getElementById('cidade').value='...';
                document.getElementById('estado').value='...';
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert('Formato de CEP inválido.');
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

</script>
                                <label class="control-label col-md-2" for="cep">CEP:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">&#128315;</span>
                                    <input type="text" name="cep" id="cep" onkeyup="somenteNumeros(this);" OnKeyPress="formatar('#####-###', this)" placeholder="00000-000" maxlength="09" onblur="pesquisacep(this.value)"  class="form-control" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="estado">Estado:</label>
                                <div class="input-group col-md-3">
                                    <span class="input-group-addon">&#128312;</span>
                                    <input type="text" name="estado" id="estado" class="form-control" placeholder="Estado" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="cidade">Cidade:</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">&#128312;</span>
                                    <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="bairro">Bairro:</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">&#128312;</span>
                                    <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="rua">Rua:</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">&#128312;</span>
                                    <input type="text" name="rua" id="rua" class="form-control" placeholder="Rua" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Complemento:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">&#127969;</span>
                                    <input type="text" name="complemento" placeholder="complemento" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="numero">Número:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">Nº</span>
                                    <input type="number" name="numero" id="numero" class="form-control" placeholder="Número" required="required" min="0" max="99999" />
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
    <script>
        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('estado').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
    </script>

</body>

</html>