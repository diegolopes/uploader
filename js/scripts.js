//Pre - preencher input do nome
$('#nome').val(lerCookie('Nome'));

//Ativar todos os tooltips da página
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
});

$(function () {
	$('[data-toggle="popover"]').popover()
  })



//Esconder input se o nome já foi preenchido
if(lerCookie('Nome').length >0){
    $('#inputNome,#info').hide();
} 	


$('#atualizar').click(function(){
    window.location.reload();
});



// Funções básicas para os cookies
function criaCookie(nomeCookie, valor, dias) {
	// declara as variáveis
	var expires;
	var date;
	var value;

	// cria um objeto do tipo data
	date = new Date();

	// define a data com base em dias
	date.setTime(date.getTime() + (dias * 24 * 60 * 60 * 1000));

	// converte a data para string no formato UTC(Tempo Universal Coordenado)
	expires = date.toUTCString();

	// pega o valor recebido pela função
	value = valor;

	// cria e atribui os valores do cookie
	document.cookie = nomeCookie + "=" + value + "; expires=" + expires + "; path=/";

	return true;
}

function lerCookies() {
	var cookies = document.cookie;
	if (cookies == "") {
		return "Não há cookies";
	}
	else {
		return document.cookie;
	}
}

function lerCookie(nomeCookie) {
	var name = nomeCookie + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}

function apagaCookie(nomeCookie) {
	criaCookie(nomeCookie, "", -1);
}

//Criar cookie a partir do input
$('#setNome a').click(function(){
    var nome = $('#nome').val();
	criaCookie('Nome',nome,30); 
	window.location.reload();
});

function requester(){
	//Requisita a página comments.php
	var request = $.ajax({
		method: 'post',
		url: 'comments.php'
	}).done(function(msg){
		$('#comments').html(msg);
	});

}

requester();

$('#ajax').click(function(){
	var nome = $('#nome').val();
	var texto = $('#comment').val();

	//  alert(nome+texto);


	// Validação super simples front-end
	if(nome == '' || texto == ''){
		alert('Favor, preencher os campos antes de comentar.');
	}
	
	else{
		var send = $.ajax({
			method: 'post',
			url: 'comment.php',
			data: {nome: nome,comment: texto}
		}).done(function(){
			console.log('Ajax para comments.php');
			requester();
		});
			
	}

});