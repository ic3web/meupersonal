<html lang ="pt-br">
<head>
	<!--Area de meta tagas-->
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="../asset/image/favico.svg">
	<meta name="viewport" content="width=device-width, initial-scale=0, shrink-to-fit=no">
	<meta name="authot" content="Ic3Web - CEO - Filipi Firmino">
    <meta name="description" content="Sistema de gerenciamento voltado para desenvolvimento pessoa">
    <meta name="keywords" content="gerenciamento, Personal,treino, sport,desenvolvimento, liberdade, tempo,aplicabilidade">

	<!--Titulo da pagina-->
	<title>Personal 1.0</title>

	<!--Importação do css-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../asset/css/style.css">
	
</head>
<body>
    <div class="containerAll">
	    <div class="container-top">
			<div class="name-logo">
					<h4><a href="..\index.php" >Personal</a></h4>
			</div>
				<div class="menu">
					<nav>
						<ul>
							<li><a href ="#">Inicio</a></li>
							<li><a href ="#">Sobre</a></li>
							<li><a href ="#">Quem somos</a></li>
							<li><a href ="#">Pacotes</a></li>
							<li><a href ="#">Contato</a></li>
						</ul>
					</nav>
				</div>
	</div>

	<div class="container">
	
			<div class="main">
				<div class="logo">
					<img src="../asset/image/logo.svg" alt="logo" class="logo"/>
				</div>
					<div class="login">
						<form action="valida.php" method="POST">
							<input type="text" name="login-user" placeholder="Login" class="input"><br>
							<input type="password" name="pass-user" placeholder="Senha" class="input"><br>
							<input type="submit" name="" value="Logar" class="btn-enviar">

						</form>
							<div class="cont-buttons">
									
						<a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target = "#modalReplace">Esqueceu a senha?</a>
									
										
						<a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target = "#modalCadastro"> cadastre-se!</a>
										
							</div>
					</div>						
						<div class="social-media">
								<fieldset>
							<legend for="social-media">Siga-nos!</legend>
							<a href="#"><img src="../asset/image/f.svg" alt="facebook" id="facebook" class="icon-social" onmouseover="document.getElementById(this.id).src='../asset/image/f_blue.svg'" onmouseout="document.getElementById(this.id).src='../asset/image/f.svg'"></a>

							<a href="#"><img src="../asset/image/instagram-logo.svg"alt ="instagran" class="icon-social" id="instagran" onmouseover="document.getElementById(this.id).src='../asset/image/instagram.svg'" onmouseout="document.getElementById(this.id).src='../asset/image/instagram-logo.svg'"></a>

							<a href="#"><img src="../asset/image/g.svg"alt ="Google Plus" class="icon-social" id="google" onmouseover="document.getElementById(this.id).src='../asset/image/g_red.svg'" onmouseout="document.getElementById(this.id).src='../asset/image/g.svg'"></a>

							<a href="#"><img src="../asset/image/s.svg" alt="Snapchat" class="icon-social" id="snap" onmouseover="document.getElementById(this.id).src='../asset/image/s_yellow.svg'" onmouseout="document.getElementById(this.id).src='../asset/image/s.svg'"></a>

							<a href="#"><img src="../asset/image/t.svg" alt="twitter" class="icon-social" id="tt" onmouseover="document.getElementById(this.id).src='../asset/image/t_light-blue.svg'" onmouseout="document.getElementById(this.id).src='../asset/image/t.svg'"></a>
						</fieldset>
					</div>
				</div>	

			<!-- rodape dentro do container aqui-->
	</div>
					<!-- Rodapé fora do container-->
			<div class="rodape">
	
				<div class="info-down">
					
							<p class="item-down"><a href="#">SAC</a></p>
							<p class="item-down"><a href="#">Privacidade</a></p>
							<p class="item-down"><a href="#">Mapa do site</a></p>
						
				</div>
		
				<div class="info-down-center">
					<p>Todos os direitos reservados Personal&copy 2019</p>
				</div>
				<div class="info-down-right ">
						
								<p class="item-down"><a href="#">Trabalhe conosco</a></p>
								<p class="item-down"><a href="#">Parceria</a></p>	
				</div>
		
			</div>
        </div>
    </div>
<!--Modal para cadastro-->
<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastro" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="modalCadastroLabel">Cadastro</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
	  
			<div class="modal-body">
			  <form action = "../asset/script/php/pdoInsert.php"  method= "POST">
				  <div class="form-group">
					  <input class="form-control" type="name" name="name-user" placeholder =  "Nome Completo" require/>
				  </div>
				  <div class="form-group">
					  <input class="form-control" type="email" name="email-user" placeholder =  "e-mail" require/>
				  </div>
				  <div class="form-group">
					  <input class="form-control" type="password" name="pass-user" placeholder =  "Senha" require/>
				  </div>    
					<div class="form-group">
					  <input class="form-control" type="text" name="fone-user" placeholder =  "Ex: (99)-9 9999.9999" require/>
				  </div>
				  <button class = "btn btn-success" onclick = cadastrar() >Cadastrar</button>
			  </form>
			</div>
			<div class="modal-footer">
			  <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
			 </div>
			</div>
		</div>
	</div>
	<!-- modal Replace-->
<div class="modal fade" id="modalReplace" tabindex="-1" role="dialog" aria-labelledby="modalReplace" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="modalReplaceLabel">Recuperar Senha</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
	  
			<div class="modal-body">
			  <form action = "../asset/script/pdoUpdate.php"  method= "POST">
				  
				  <div class="form-group ">
					<label for="rec-senha">Insira seu email para recuperar a senha:</lebel>
					  <input class="form-control" id="rec-senha"type="email" name="email-user" placeholder =  "e-mail" require/>
				  </div>
				  
				  <button class = "btn btn-success" onclick = cadastrar()> Recuperar</button>
			  </form>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			 
			</div>
		</div>
	</div>

	<!-- Scripts in JS and Bootstrap -->

<script src="../asset/script/js/action.js"></script> <!--Script interno-->
<!--Scripts do bootstrap-->
<script src="../node_modules/jquery/dist/jquery.slim.min.js" ></script>
<script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>