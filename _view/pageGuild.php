<?php

require_once ("../_controller/mysql_connect.php");
require_once ("../_controller/helper.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<!--CSS-->
		<link rel="stylesheet" href="../_css/stylePageGuild.css" type="text/css">
		<link rel="stylesheet" href="../_css/simple-scrollbar.css" type="text/css"></script>
		<!--BOOTSTRAP-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<!-- JQUERY -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="../_js/smoothscroll.js"></script> 
		<script type="text/javascript" src="../_js/simple-scrollbar.min.js"></script> 
		<!-- FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
		<meta charset='utf-8'>
	</head>
	<body>
		<!-- NAVBAR -->
		<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarToggler">
				<ul id="navbar_left" class="navbar-nav mr-auto">
					<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Guildas
						<span class="sr-only">(current)</span><span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a class="nav-link smoothScroll" href="#guild1">guilda 1</a></li>
						  <li><a class="nav-link smoothScroll" href="#guild2">guilda 2</a></li>
						  <li><a class="nav-link smoothScroll" href="#guild3">guilda 3</a></li>
						  <li><a class="nav-link smoothScroll" href="#guild4">guilda 4</a></li>
						  <li><a class="nav-link" href="pageGuild.php">ver todas</a></li>
						</ul>
				    </li>
				    <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Classes
                            <span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a class="nav-link" href="pageClass.php#alquimista">alquimista</a></li>
						  <li><a class="nav-link" href="pageClass.php#arqueiro">arqueiro</a></li>
						  <li><a class="nav-link" href="pageClass.php#bardo">bardo</a></li>
						  <li><a class="nav-link" href="pageClass.php#guerreiro">guerreiro</a></li>
						  <li><a class="nav-link" href="pageClass.php#ladino">ladino</a></li>
						  <li><a class="nav-link" href="pageClass.php#mago">mago</a></li>
						  <li><a class="nav-link" href="pageClass.php#paladino">paladino</a></li>
						  <li><a class="nav-link" href="pageClass.php">ver todas</a></li>
						</ul>
				    </li>
                  <li class="nav-item">
						<a class="nav-link" href="pagePoints.php">Pontuação</a>
				  </li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<a class="nav-link" href="Home.php">Home!</a>

				</ul>
			</div>
		</nav>
		<!-- END NAVBAR -->
        <!-- MODAL LOGIN -->
        <div id="login" class="modal_login">
			<div class="modal_login_content" style="max-width:600px">
				<div class="modal_login_header"><br>
					<span onclick="document.getElementById('login').style.display='none'" class="modal_login_button_internal modal_login_button_internal_close" title="Fechar">&times;</span>
					<img src="img_avatar4.png" style="width:30%" class="modal_login_img">
					<p class="modal_login_header_text">"- Alto lá, viajante! - disse a guarda, em tom intimidador, no momento em que você se aproximou dos portões do vilarejo. - Identifique-se!"</p>
				</div>
	
				<form class="modal_login_form" action="_controller/login.php" method="POST">
					<input class="modal_login_form_input modal_login_form_input_name" type="text" placeholder="Nome de Usuário" name="usrname" required>
					<input class="modal_login_form_input" type="password" placeholder="Senha" name="psw" required>
					<button class="modal_login_button_internal modal_login_button_internal_submit" type="submit">passar pelos portões</button>
				</form>
			</div>
		  </div>
        <!-- END MODAL LOGIN -->
		<!-- INTRODUÇÃO -->
		<div class="container_intro_bg" style="background-image: url('../_img/backgrounds/4.jpg');">
			<div class="container_intro_text">
				<div class="container_title">há muito, muito tempo...</div>
				<div class="container_description" ss-container>havia um reino que vivia felizinho, aí os quatro bardos capitães da guarda real decidiram criar cada um sua guilda para propagar os valores que consideravam sagrados: estratégia, arte, conhecimento e filosofia. Insira o resto da história aqui aaaaaaaa aaaaaaaa aaaaaaa aaaaaaaa aaaaaaaaaa aaaaaa aaaaa aaa aaaaaa aaaaa aaaaaa aaaaa aa aa aaaaaaaaa aaa aaa aaaaaa aaa aaa aaa aaaaa aaaaaaaaaa aaa aaaaaa aaaaaa aaaa aaaaa aaaa aaaa aaaaaaaaaaaa aaa aaaaaaaa aaaaaaa</div>
			</div>
		</div>
		<!-- END INTRODUÇÃO -->
		<!-- CONTEÚDO -->
		<!-- GUILDA 1 -->
		<div id="guild1" class="container_information">
			<div class="container_information_text">
				<div class="container_title">Guilda 1</div>
				<div class="container_description" ss-container>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget enim lectus. Fusce nec sem mauris. Phasellus suscipit purus eu nunc condimentum, in lacinia augue aliquet. Aenean ut ligula orci. Duis in blandit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus viverra bibendum purus in laoreet. Suspendisse sit amet congue dolor. Aliquam erat volutpat.</p>
					<p>Vestibulum efficitur massa magna, id cursus sem imperdiet non. Aenean mollis finibus euismod. Sed non libero varius, accumsan metus at, pharetra tellus. Integer at placerat nunc, vel facilisis arcu. Donec ac eleifend lorem, nec sodales neque. Fusce ullamcorper ipsum cursus nunc faucibus dignissim. Phasellus in metus nibh. Morbi vitae velit nec ipsum luctus lobortis. Donec vel rhoncus elit. Mauris pulvinar, ipsum ac porttitor maximus, orci libero euismod eros, vel fermentum metus tortor vel dolor. Sed rhoncus elit magna, auctor pharetra augue rhoncus vitae. Suspendisse at ex at orci facilisis ultricies. Nulla urna nisl, feugiat sit amet ullamcorper id, imperdiet interdum massa. Donec eu odio eget lectus vulputate finibus vitae sed tortor. Praesent pretium tristique faucibus.</p>
					<p>In pellentesque ut odio ullamcorper mollis. Vivamus a ipsum at urna aliquam efficitur bibendum in dui. Proin quis odio tincidunt, sagittis sem placerat, fringilla diam. Nullam quis nisl facilisis, mattis arcu vel, elementum lacus. Curabitur id tincidunt orci, eget egestas orci. Sed id erat finibus, hendrerit nibh id, porta eros. In venenatis magna purus, sagittis posuere sem placerat at.</p>
				</div>
			</div>
		</div>
		<div class="container_information" style="background-image: url('../_img/backgrounds/6.jpg');"></div>
		<!-- GUILDA 2 -->
		<div id="guild2" class="container_information">
			<div class="container_information_text">
				<div class="container_title">Guilda 2</div>
				<div class="container_description" ss-container>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget enim lectus. Fusce nec sem mauris. Phasellus suscipit purus eu nunc condimentum, in lacinia augue aliquet. Aenean ut ligula orci. Duis in blandit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus viverra bibendum purus in laoreet. Suspendisse sit amet congue dolor. Aliquam erat volutpat.</p>
					<p>Vestibulum efficitur massa magna, id cursus sem imperdiet non. Aenean mollis finibus euismod. Sed non libero varius, accumsan metus at, pharetra tellus. Integer at placerat nunc, vel facilisis arcu. Donec ac eleifend lorem, nec sodales neque. Fusce ullamcorper ipsum cursus nunc faucibus dignissim. Phasellus in metus nibh. Morbi vitae velit nec ipsum luctus lobortis. Donec vel rhoncus elit. Mauris pulvinar, ipsum ac porttitor maximus, orci libero euismod eros, vel fermentum metus tortor vel dolor. Sed rhoncus elit magna, auctor pharetra augue rhoncus vitae. Suspendisse at ex at orci facilisis ultricies. Nulla urna nisl, feugiat sit amet ullamcorper id, imperdiet interdum massa. Donec eu odio eget lectus vulputate finibus vitae sed tortor. Praesent pretium tristique faucibus.</p>
					<p>In pellentesque ut odio ullamcorper mollis. Vivamus a ipsum at urna aliquam efficitur bibendum in dui. Proin quis odio tincidunt, sagittis sem placerat, fringilla diam. Nullam quis nisl facilisis, mattis arcu vel, elementum lacus. Curabitur id tincidunt orci, eget egestas orci. Sed id erat finibus, hendrerit nibh id, porta eros. In venenatis magna purus, sagittis posuere sem placerat at.</p>
				</div>
			</div>
		</div>
		<div class="container_information" style="background-image: url('../_img/backgrounds/7.jpg');"></div>
		<!-- GUILDA 3 -->
		<div id="guild3" class="container_information">
			<div class="container_information_text">
				<div class="container_title">Guilda 3</div>
				<div class="container_description" ss-container>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget enim lectus. Fusce nec sem mauris. Phasellus suscipit purus eu nunc condimentum, in lacinia augue aliquet. Aenean ut ligula orci. Duis in blandit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus viverra bibendum purus in laoreet. Suspendisse sit amet congue dolor. Aliquam erat volutpat.</p>
					<p>Vestibulum efficitur massa magna, id cursus sem imperdiet non. Aenean mollis finibus euismod. Sed non libero varius, accumsan metus at, pharetra tellus. Integer at placerat nunc, vel facilisis arcu. Donec ac eleifend lorem, nec sodales neque. Fusce ullamcorper ipsum cursus nunc faucibus dignissim. Phasellus in metus nibh. Morbi vitae velit nec ipsum luctus lobortis. Donec vel rhoncus elit. Mauris pulvinar, ipsum ac porttitor maximus, orci libero euismod eros, vel fermentum metus tortor vel dolor. Sed rhoncus elit magna, auctor pharetra augue rhoncus vitae. Suspendisse at ex at orci facilisis ultricies. Nulla urna nisl, feugiat sit amet ullamcorper id, imperdiet interdum massa. Donec eu odio eget lectus vulputate finibus vitae sed tortor. Praesent pretium tristique faucibus.</p>
					<p>In pellentesque ut odio ullamcorper mollis. Vivamus a ipsum at urna aliquam efficitur bibendum in dui. Proin quis odio tincidunt, sagittis sem placerat, fringilla diam. Nullam quis nisl facilisis, mattis arcu vel, elementum lacus. Curabitur id tincidunt orci, eget egestas orci. Sed id erat finibus, hendrerit nibh id, porta eros. In venenatis magna purus, sagittis posuere sem placerat at.</p>
				</div>
			</div>
		</div>
		<div class="container_information" style="background-image: url('../_img/backgrounds/8.jpg');"></div>
		<!-- GUILDA 4 -->
		<div id="guild4" class="container_information">
			<div class="container_information_text">
				<div class="container_title">Guilda 4</div>
				<div class="container_description" ss-container>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget enim lectus. Fusce nec sem mauris. Phasellus suscipit purus eu nunc condimentum, in lacinia augue aliquet. Aenean ut ligula orci. Duis in blandit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus viverra bibendum purus in laoreet. Suspendisse sit amet congue dolor. Aliquam erat volutpat.</p>
					<p>Vestibulum efficitur massa magna, id cursus sem imperdiet non. Aenean mollis finibus euismod. Sed non libero varius, accumsan metus at, pharetra tellus. Integer at placerat nunc, vel facilisis arcu. Donec ac eleifend lorem, nec sodales neque. Fusce ullamcorper ipsum cursus nunc faucibus dignissim. Phasellus in metus nibh. Morbi vitae velit nec ipsum luctus lobortis. Donec vel rhoncus elit. Mauris pulvinar, ipsum ac porttitor maximus, orci libero euismod eros, vel fermentum metus tortor vel dolor. Sed rhoncus elit magna, auctor pharetra augue rhoncus vitae. Suspendisse at ex at orci facilisis ultricies. Nulla urna nisl, feugiat sit amet ullamcorper id, imperdiet interdum massa. Donec eu odio eget lectus vulputate finibus vitae sed tortor. Praesent pretium tristique faucibus.</p>
					<p>In pellentesque ut odio ullamcorper mollis. Vivamus a ipsum at urna aliquam efficitur bibendum in dui. Proin quis odio tincidunt, sagittis sem placerat, fringilla diam. Nullam quis nisl facilisis, mattis arcu vel, elementum lacus. Curabitur id tincidunt orci, eget egestas orci. Sed id erat finibus, hendrerit nibh id, porta eros. In venenatis magna purus, sagittis posuere sem placerat at.</p>
				</div>
			</div>
		</div>
		<div class="container_information" style="background-image: url('../_img/backgrounds/9.jpg');"></div>
		<!-- END CONTEÚDO -->
		<!-- JAVASCRIPT -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<!-- END JAVASCRIPT -->
	</body>
</html>