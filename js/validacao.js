function validacao() {
	var erro;
	var rname = document.getElementById('rname');
	if (rname.value == "") {
		erro = "Nome inválido";
		document.getElementById('').innerHTML = erro;
		return false;
	}
	var remail = document.getElementById('remail');
	if (remail.value == "" || remail.value.indexOf('@') == -1 || remail.indexOf('.') == -1) {
		erro = "Email inválido";
		document.getElementById('').innerHTML = erro;
		return false;
	}
	var ruser = document.getElementById('ruser');
	if (ruser.value == "") {
		erro = "Usuário inválido";
		document.getElementById('').innerHTML = erro;
		return false;
	}
	var rpass = document.getElementById('rpass');
	if (rpass.value == "") {
		erro = "Senha inválido";
		document.getElementById('').innerHTML = erro;
		return false;
	}
	var rconfirm = document.getElementById('rconfirm');
	if (rconfirm.value != rpass.value ) {
		erro = "Senhas não são identicas";
		document.getElementById('').innerHTML = erro;
		return false;
	}
	else {
		return true;
	}
}