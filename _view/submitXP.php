<?php
    require_once ("../_controller/check_login.php");
    require_once ("../_controller/mysql_connect.php");
    require_once ("../_controller/helper.php");
    require_once ("../_controller/getProfileData.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<!--CSS-->
		<link rel="stylesheet" href="../_css/styleSubmitXP.css" type="text/css">
		<link rel="stylesheet" href="../_css/simple-scrollbar.css" type="text/css"></script>
		<!--BOOTSTRAP-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<!-- JQUERY -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="../_js/simple-scrollbar.min.js"></script> 
		<!-- FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
		<meta charset='utf-8'>
	</head>
	<body>
		<!-- PERFIL -->
		<div class="container_profile_bg"> <!-- usuário do perfil escolhe -->
			<div class="container_profile">
				<div class="container_profile_top">
                    <a class="container_profile_top_button_left" href="home.php">home</a>
                    <a class="container_profile_top_button_left" href="pageTaverna.php">taverna</a>
                    <a class="container_profile_top_button_left" href="pageRanking.php">hall da fama</a>
					<a class="container_profile_top_button_left" href="pageGuild.php">sobre o reino</a>
                    <a class="container_profile_top_button_right" href="<?php echo '../_view/pageProfile.php?id='.$_SESSION['byron_gamification']['user']?>">olá, <?php echo $_SESSION['byron_gamification']['user']?></a>
				</div>
				<div class="container_profile_bottom">
					<div class="register_form_content" ss-container>
						<form class="register_form" action="../_controller/diretorModify.php" method="POST">
							<div class="register_form_title">Ora, ora, temos aqui um(a) líder de classe!</div>
							<div class="register_form_text"> Qual membro será bonificado/penalizado?
								<select class="register_form_input" name="usrname">
										<?php
											$classe = $userData['class'];

											$sql = "SELECT `user`,`class`,`name` FROM `usuario`";
											$conn = mysqli_connect("localhost", "root", "", "gamification_db") or die();
											$result = mysqli_query($conn,$sql);
											while($row = mysqli_fetch_array($result)){
												if(strtolower($row['class']) == strtolower($classe)){
	                               					echo "<option value=".$row['user'].">".$row['user']."</option>";
	                               				}
	                               			}
                               				

										?>
								</select>
								</div>
							<div class="register_form_text">> Qual quantidade de xp você gostaria de adicionar/retirar?</div>
							<div class="register_form_desc">Caso necessário, acesse a tabela de pontos. Adicione apenas o valor da soma, no caso de mais de um valor.</div>
							<input class="register_form_input" type="text" name="new_exp" placeholder="Ex: +10 ou -5">
							<div class="register_form_text">> Adicione uma pequena descrição do(s) motivo(s) de adição/retirada de xp.</div>
							<input class="register_form_input" type="text" name="pointdesc" placeholder="Ex: Fez bench (+10); Atraso em reunião (-5)">
							<div class="register_form_title">Gostaria de confirmar a alteração de xp?</div>
							<button class="register_form_submit" type="submit">submit</button>
						</form>
					</div>
				</div>
            </div>
        </div>
		<!-- END PERFIL -->
		<!-- JAVASCRIPT -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<!-- END JAVASCRIPT -->
	</body>
</html>