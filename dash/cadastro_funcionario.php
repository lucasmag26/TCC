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

    <title>Cadastro-Funcionário</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/estilo1.css" />
    <link rel="icon" href="images/"
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
                            Cadastro de Funcionário &#128221;
                        </h1>
                        <form class="form-horizontal" action="PHP/cadastro_funcionario.php" method="post">
                            <div class="form-group"><!-- SÁLARIO -->
                                <label class="control-label col-md-2" for="nome">Nome:</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">&#128100;</span>
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo" required="required" />
                                </div>
                            </div>
                            <div class="form-group"> <!-- E MAIL -->
                                <label class="control-label col-md-2" for="email">Email:</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">&#128231;</span>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required" />
                                </div>
                            </div>
                            <div class="form-group"><!-- SENHA -->
                                <label class="control-label col-md-2" for="senha">Senha:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">&#128274;</span>
                                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required="required"/>
                                </div>
                            </div>
                            <div class="form-group"><!-- CEP -->
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
                                    <input type="text" class="form-control" name="cep" id="cep" onkeyup="somenteNumeros(this);" OnKeyPress="formatar('#####-###', this)" placeholder="00000-000" maxlength="09" onblur="pesquisacep(this.value)" required="required"/>
                                </div>
                            </div>
                            <div class="form-group"><!-- ESTADO -->
                                <label class="control-label col-md-2" for="estado">Estado:</label>
                                <div class="input-group col-md-3">
                                    <span class="input-group-addon">&#128312;</span>
                                    <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado"  required="required" />
                                </div>
                            </div>
                            <div class="form-group"><!-- CIDADE -->
                                <label class="control-label col-md-2" for="cidade">Cidade:</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">&#128312;</span>
                                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade"  required="required" />
                                </div>
                            </div>
                            <div class="form-group"><!-- BAIRRO -->
                                <label class="control-label col-md-2" for="bairro">Bairro:</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">&#128312;</span>
                                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro" required="required" />
                                </div>
                            </div>
                            <div class="form-group"><!-- RUA -->
                                <label class="control-label col-md-2" for="rua">Rua:</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">&#128312;</span>
                                    <input type="text" class="form-control" name="rua" id="rua" placeholder="Rua"  required="required" />
                                </div>
                            </div>
                            <div class="form-group"><!-- COMPLEMENTO -->
                                <label class="control-label col-md-2">Complemento:</label>
                                <div class="input-group col-md-2">
                                <input type="text" class="form-control" name="complemento" placeholder="Complemento"  id="complemento" />
                                </div>
                            </div>
                            <div class="form-group"><!-- NÚMERO -->
                                <label class="control-label col-md-2" for="numero">Número:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">Nº</span>
                                    <input type="number" name="numero" class="form-control" id="numero" placeholder="Número"  required="required" min="1" max="99999" />
                                </div>
                            </div>
                            <div class="form-group"><!-- GÊNERO -->
                                <label class="control-label col-md-2">Gênero:</label>
                                <div class="col-md-offset-2 col-md-10">
                                    <label for="masculino"><input type="radio" name="genero" id="masculino" value="masculino" required="required" />  Masculino</label>
                                </div>
                                <div class="col-md-offset-2 col-md-10">
                                    <label for="feminino"><input type="radio" name="genero" id="feminino" value="feminino" required="required" />  Feminino</label>
                                </div>
                            </div>
                            <div class="form-group"><!-- TELEFONE -->
                                <label class="control-label col-md-2" for="telefone">Telefone:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">&#128222;</span>
                                    <input type="text" name="telefone" id="telefone" onkeyup="mascara( this, mtel )"  placeholder="(00) 0000-0000" maxlength="14" class="form-control" required="required"/>
                                </div>
                            </div>
                            <div class="form-group"><!--CELULAR -->
                                <label class="control-label col-md-2" for="celular">Celular:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">&#128241;</span>
                                    <input type="text" name="celular" id="celular" onkeyup="mascara( this, mtel )" placeholder="(00) 00000-0000" maxlength="15" class="form-control" required="required"/>
                                </div>
                            </div>
                            <div class="form-group"><!-- RG -->
                                <label class="control-label col-md-2" for="rg">RG:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">&#127991;</span>
                                    <input type="text" name="rg" id="rg" onkeyup="somenteNumeros(this);" OnKeyPress="formatar('##.###.###-#', this)" placeholder="00.000.000-0" maxlength="12" class="form-control" required="required" />
                                </div>
                            </div>
                            <div class="form-group"><!-- CPF -->
                            <script>
function verificarCPF(c){
    var i;
    s = c;
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;
     
     if(s=="11111111111" || s=="22222222222" || s=="33333333333"|| s=="44444444444"|| s=="55555555555"|| s=="66666666666" || s=="77777777777"|| s=="88888888888"|| s=="99999999999"){
        alert("CPF Invalido")
     }else{
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(10-i);
    }
    if (d1 == 0){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }
 
    d1 *= 2;
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(11-i);
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(1) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    if (!v) {
    }
}
}
</script>

                                <label class="control-label col-md-2" for="cpf">CPF:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">&#127991;</span>
                                    <input type="text" name="cpf" id="cpf"  placeholder="000.000.000-00" maxlength="11"  onblur="return verificarCPF(this.value)"  class="form-control" required="required" />
                                </div>
                            </div>
                            <div class="form-group"><!-- CARGO -->
                                <label class="control-label col-md-2" for="cargo">Cargo:</label>
                                <div class="input-group col-md-3">
                                    <span class="input-group-addon">&#128084;</span>
                                    <input type="text" name="cargo" id="cargo" class="form-control" placeholder="Cargo" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="salario">Salário:</label>
                                <div class="input-group col-md-2">
                                    <span class="input-group-addon">&#128178;</span>
                                    <input type="text" name="salario" id="salario" min="0" placeholder="R$" maxlength="12"class="form-control" required="required"/>
                                </div>
                            </div>
                            <div class="form-group">
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
