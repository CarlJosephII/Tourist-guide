<?php include('config.php'); ?>

<?php

if(isset($_POST['login'])){

$username = $_POST['email'];
$password = md5($_POST['senha']);

$check_login = mysql_query("SELECT `id`,`nome` FROM `usuarios` WHERE `email` ='$username' AND `senha` ='$password'") or die (mysql_error());

if(mysql_num_rows($check_login) == 1){
$row = mysql_fetch_assoc($check_login);
$ID = $row['id'];
$Nome = $row['nome'];
session_start();
$_SESSION['ID'] = $ID;
$_SESSION['Nome'] = $Nome;
header('location: perfil.php');

}else{
echo '<script>alert("Usuario ou Senha Incorrecto");</script>';
}

}

?>

<?php
if(isset($_POST['cadastro'])){
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$pais = $_POST['pais'];
$senha = md5($_POST['senha']);

	$processo = mysql_query("SELECT `email` FROM `usuarios` WHERE `email` = '$email'") or die(mysql_error());
	
if(mysql_num_rows($processo) >= '1'){
	
	echo '<script>alert("Usuário Já Existente");</script>';
}

else{

mysql_query("INSERT INTO `usuarios` (id,nome,sobrenome,email,pais,senha,imagem) VALUE('','$nome','$sobrenome','$email','$pais','$senha','imgs-users/image.png')") or die (mysql_error());
echo '<script>alert("Cadastrado Com Sucesso");</script>';

}
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>Agência Turística Nacional | Home</title>

        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <link href="css/fullscreen-slider.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">

    </head>
    <body class="notransition no-hidden">

        <!-- Hero -->

        <div id="hero-container">
            <ul class="cb-slideshow">
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
            </ul>
            <div class="home-header">
                <div class="home-logo osLight"><span class="fa fa-home"></span> AngoTurismo - Agência Turística Nacional</div>
                <a href="#" class="home-navHandler visible-xs"><span class="fa fa-bars"></span></a>
                <div class="home-nav">
                    <ul>
                        <li style="margin-top:-9px;"><a href="#" data-toggle="modal" data-target="#signup">Cadastrar</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#signin">Entrar</a></li>
                    </ul>
                </div>
            </div>
            <div class="home-caption">
                <div class="home-title">Venha Conhecer Melhor Angola</div>
                <div class="home-subtitle">Com O Ango Turismo - Seu Guia Turistico Nacional</div>
               
            </div>
            <div class="search-panel">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="city" placeholder="Cidade" autocomplete="off">
                    </div>
                    <div class="form-group hidden-xs adv">
                        <a href="#" data-toggle="dropdown" class="btn btn-white dropdown-toggle">
                            <span class="dropdown-label">Quartos &nbsp;</span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-select">
                            <li><input type="radio" name="bedno"><a href="#">1</a></li>
                            <li><input type="radio" name="bedno"><a href="#">2</a></li>
                            <li><input type="radio" name="bedno"><a href="#">3</a></li>
                            <li><input type="radio" name="bedno"><a href="#">4</a></li>
                        </ul>
                    </div>
                    <div class="form-group hidden-xs adv">
                        <a href="#" data-toggle="dropdown" class="btn btn-white dropdown-toggle">
                            <span class="dropdown-label">Pessoas &nbsp;</span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-select">
                            <li><input type="radio" name="bathno"><a href="#">1</a></li>
                            <li><input type="radio" name="bathno"><a href="#">2</a></li>
                            <li><input type="radio" name="bathno"><a href="#">3</a></li>
                            <li><input type="radio" name="bathno"><a href="#">4</a></li>
                        </ul>
                    </div>
                    <div class="form-group hidden-xs adv">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
                            <input class="form-control price" type="text" placeholder="De">
                        </div>
                    </div>
                    <div class="form-group hidden-xs adv">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
                            <input class="form-control price" type="text" placeholder="Até">
                        </div>
                    </div>
                    <div class="form-group hidden-xs adv">
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Alugar</label></div>
                    </div>
                    <div class="form-group hidden-xs adv">
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Comprar</label></div>
                    </div>
                    <div class="form-group">
                        <a href="explore.html" class="btn btn-green">Procurar</a>
                        <a href="#" class="btn btn-o btn-white pull-right visible-xs" id="advanced">Advanced Search <span class="fa fa-angle-up"></span></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="highlight">
            <div class="h-title osLight">Encontre o Seu Lugar Com O Ango Turismo</div>
            <div class="h-text osLight">Você Pode Procurar por Hoteis, Restaurantes, Gastronamia e Comprar ou Alugar Uma Casa</div>
        </div>

        <!-- Content -->

        <div class="home-wrapper">
            <div class="home-content">
                <h2 class="osLight">Nossos Serviços</h2>
                <div class="row pb40">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                        <a href="#">
                            <span class="icon-pointer s-icon"></span>
                            <div class="s-content">
                                <h2 class="s-main osLight">Encontre Qualquer Lugar no País</h2>
                                <h3 class="s-sub osLight">Hoteis, Restaurantes, Gastronamia e Imagens Do País</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                        <a href="#">
                            <span class="icon-users s-icon"></span>
                            <div class="s-content">
                                <h2 class="s-main osLight">Temos Agentes Com Experiência</h2>
                                <h3 class="s-sub osLight">Equipa Experiente Para Melhor Agrade-lo e Satisfazer os Seus Pedidos</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                        <a href="#">
                            <span class="icon-home s-icon"></span>
                            <div class="s-content">
                                <h2 class="s-main osLight">Compre ou Alugue Uma Casa</h2>
                                <h3 class="s-sub osLight">Compre ou Alugue Uma Propriedade do Seu Agrado</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                        <a href="#">
                            <span class="icon-cloud-upload s-icon"></span>
                            <div class="s-content">
                                <h2 class="s-main osLight">Gerencie as Suas Propriedades</h2>
                                <h3 class="s-sub osLight">Cria Uma Conta Para Ter Acesso Completo ao Nosso Sistema </h3>
                            </div>
                        </a>
                    </div>
                </div>
                <h2 class="osLight">Descubra os Melhores Lugares</h2>
                <div class="row pb40">
                    
             <?php 
			 $select = mysql_query("SELECT *FROM galeria LIMIT 6");
			 
			 while($linha = mysql_fetch_array($select)) {
				 echo'<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a href="single.html" class="propWidget-2">
                            <div class="fig">
                                <img src="'.$linha['imagem'].'" width="800" height="210" alt="Modern Residence in New York">
                                <img class="blur" src="'.$linha['imagem'].'" alt="Modern Residence in New York">
                                <div class="opac"></div>
                                <div class="priceCap osLight"><span>'.$linha['gastos'].'</span></div>
                                <div class="figType">'.$linha['tipo'].'</div>
                                <h3 class="osLight">'.$linha['nome'].'</h3>
                              
                                <ul class="rating">
                                    <li><span class="fa fa-star star-1"></span></li>
                                    <li><span class="fa fa-star star-2"></span></li>
                                    <li><span class="fa fa-star star-3"></span></li>
                                    <li><span class="fa fa-star star-4"></span></li>
                                    <li><span class="fa fa-star-o star-5"></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>';
				 
				 }
			 
			 ?>      
               
                    
                    
                    
                   
                    
                </div>
                <h2 class="osLight">Nossos Usuários</h2>
                <div class="row pb40">
                    
                    <?php
					$consulta = mysql_query("SELECT *FROM usuarios LIMIT 4");
					while ($linha = mysql_fetch_array($consulta)){
						echo '<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="agent">
                            <a href="profile.html" class="agent-avatar">
                                <img src="'.$linha['imagem'].'" alt="Jane Smith">
                                <div class="ring"></div>
                            </a>
                            <div class="agent-name osLight">'.$linha['nome'].' '.$linha['sobrenome'].'
							<br><br>

						'.$linha['pais'].'	
							</div>
							
                            <div class="agent-rating">
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                                <span class="fa fa-star text-yellow"></span>
                            </div>
                            <div class="agent-contact">
                                <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-green"><span class="fa fa-envelope-o"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-facebook"><span class="fa fa-facebook"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-google"><span class="fa fa-google-plus"></span></a>
                            </div>
                        </div>
                    </div>';
						}
					
					 ?>
                    
                    
                </div>
                <h2 class="osLight">Comentários</h2>
                <div id="home-testimonials" class="carousel slide carousel-wb mb20" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#home-testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#home-testimonials" data-slide-to="1" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="imgs-users/1398279_534061756678000_1928118141_o.jpg" class="home-testim-avatar" alt="Jane Smith">
                            <div class="home-testim">
                                <div class="home-testim-text">Há muitas variações de passagens de Lorem Ipsum disponíveis, mas a maioria sofreu alteração de alguma forma, pelo humor injetado, ou ao acaso palavras</div>
                                <div class="home-testim-name">Ariclene Narciso</div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="imgs-users/20140328_172239.jpg" class="home-testim-avatar" alt="Rust Cohle">
                            <div class="home-testim">
                                <div class="home-testim-text">Há muitas variações de passagens de Lorem Ipsum disponível, mas a maioria sofreu alteração em alguma forma, por humor injetado, ou randomizou palavras</div>
                                <div class="home-testim-name">Carlos José</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <div class="home-footer">
            <div class="home-wrapper">
                <div class="row">
                    
                    
                    
                    
                </div>
                <div class="copyright"> AngoTurismo - Agência Turística Nacional<br> &copy; 2014</div>
            </div>
        </div>

        <div class="modal fade" id="signin" role="dialog" aria-labelledby="signinLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="signinLabel">Entrar</h4>
                    </div>
                    <div class="modal-body">
                      <form  action="" method="post" role="form" name="login">
                            <div class="form-group">
                                <input type="text" placeholder="Email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Senha" class="form-control" name="senha">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Lembrar-me</label></div>
                                    </div>
                                    <div class="col-xs-6 align-right">
                                        <p class="help-block"><a href="#" class="text-green">Esqueceu a senha?</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="btn-group-justified">
                                    <input type="submit"  style="padding-right:90%; text-align:center;" class="btn btn-lg btn-green" name="login" value="Entrar">
                                    
                                </div>
                            </div>
                            <p class="help-block">Não Tem Conta? <a href="#" class="modal-su text-green">Cadastrar</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="signup" role="dialog" aria-labelledby="signupLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="signupLabel">Cadastro de Usuários</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="post">
                            <div class="form-group">
                                <input type="text" placeholder="Nome" class="form-control" name="nome">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Sobrenome" class="form-control" name="sobrenome">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Email" class="form-control" name="email">
                            </div>
                            
                            <div class="form-group">
                            <select name="pais" class="form-control" style=" padding-bottom00:-50px;">
                            <option value="Angola">Angola</option>
                            <option value="Brasil">Brasil</option>
                            <option value="Estados Unidos">Estados Unidos</option>
                            <option value="Argentina">Argentina</option>
                            <option value="França">França</option>
                            </select>
                       
                            </div>
                            
                            <div class="form-group">
                                <input type="password" placeholder="Senha" class="form-control" name="senha">
                            </div>
                            
                            <div class="form-group">
                                <div class="btn-group-justified">
                                   <input type="submit"  style="padding-right:90%; text-align:center;" class="btn btn-lg btn-green" name="cadastro" value="Cadastrar">
                                </div>
                            </div>
                            <p class="help-block">Já está cadastrado? <a href="#" class="modal-si text-green">Entrar</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery-ui-touch-punch.js"></script>
        <script src="js/jquery.placeholder.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.touchSwipe.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>
        <script src="js/infobox.js"></script>
        <script src="js/jquery.visible.js"></script>
        <script src="js/home.js" type="text/javascript"></script>
    </body>
</html>