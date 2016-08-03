<?php include('config.php');

session_start();					
					
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
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="css/datepicker.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">

      
    </head>
    <body class="notransition">

        <!-- Header -->

        <div id="header">
            <div class="logo">
                <a href="index.html">
                    <span class="fa fa-home marker"></span>
                    <span class="logoText">AngoTurismo</span>
                </a>
            </div>
            <a href="#" class="navHandler"><span class="fa fa-bars"></span></a>
            <div class="search">
                <span class="searchIcon icon-magnifier"></span>
                <input type="text" placeholder="Procurar Lugares">
            </div>
            <div class="headerUserWraper">
                <a href="#" class="userHandler dropdown-toggle" data-toggle="dropdown"><span class="icon-user"></span><span class="counter">5</span></a>
              <a href="#" class="headerUser dropdown-toggle" data-toggle="dropdown">
                    <img class="avatar headerAvatar pull-left" src="<?php
					$consulta = mysql_query("SELECT *From usuarios WHERE id = '".$_SESSION["ID"]."'");
while($linha = mysql_fetch_assoc($consulta)){
					 echo $linha['imagem']; 
}?>" alt="avatar">
                    <div class="userTop pull-left">
                        <span class="headerUserName"><?php
						$consulta = mysql_query("SELECT *From usuarios WHERE id = '".$_SESSION["ID"]."'");
while($linha = mysql_fetch_assoc($consulta)){
						 echo $linha['nome']; ?> <?php echo $linha['sobrenome'];
						 
						 }?></span> <span class="fa fa-angle-down"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
                <div class="dropdown-menu pull-right userMenu" role="menu">
                    <div class="mobAvatar">
                        <img class="avatar mobAvatarImg" src="<?php
						$consulta = mysql_query("SELECT *From usuarios WHERE id = '".$_SESSION["ID"]."'");
while($linha = mysql_fetch_assoc($consulta)){
						 echo $linha['imagem']; }?>" alt="avatar">
                        <div class="mobAvatarName"><?php 
						$consulta = mysql_query("SELECT *From usuarios WHERE id = '".$_SESSION["ID"]."'");
while($linha = mysql_fetch_assoc($consulta)){
						echo $linha['nome']; }?></div>
                    </div>
                    <ul>
                        <li><a href="#"><span class="icon-settings"></span>Definicões</a></li>
                        <li><a href="profile.html"><span class="icon-user"></span>Perfil</a></li>
                        <li><a href="#"><span class="icon-bell"></span>Notificações <span class="badge pull-right bg-red">5</span></a></li>
                        <li class="divider"></li>
                        <li><a href="sair.php"><span class="icon-power"></span>Sair</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="mapHandler"><span class="icon-map"></span></a>
          <div class="clearfix"></div>
        </div>

        <!-- Left Side Navigation -->

        <div id="leftSide">
            <nav class="leftNav scrollable">
                <div class="search">
                    <span class="searchIcon icon-magnifier"></span>
                    <input type="text" placeholder="Search for houses, apartments...">
                    <div class="clearfix"></div>
                </div>
                <ul>
                    <li><a href="#"><span class="navIcon icon-compass"></span><span class="navLabel">Explorar</span></a></li>
                    <li><a href="#"><span class="navIcon icon-home"></span><span class="navLabel">Lugares</span></a></li>
                    
                   <li><a href="#"><span class="navIcon icon-plus"></span><span class="navLabel">Propriedade</span></a></li> 
                    <li class="hasSub">
                        <a href="#"><span class="navIcon icon-layers"></span><span class="navLabel">Provincias</span><span class="fa fa-angle-left arrowRight"></span></a>
                        <ul>
                            <li><a href="#">Luanda</a></li>
                            <li><a href="#">Benguela<span class="badge pull-right bg-yellow">841</span></a></li>
                            <li><a href="#">Namibe</a></li>
                            <li><a href="#">Bengo</a></li>
                            <li><a href="#">Huambo</a></li>
                         
                        </ul>
                    </li>
                    
                </ul>
            </nav>
            <div class="leftUserWraper dropup">
                <a href="#" class="avatarAction dropdown-toggle" data-toggle="dropdown">
                    <img class="avatar" src="images/avatar-1.png" alt="avatar"><span class="counter">5</span>
                    <div class="userBottom pull-left">
                        <span class="bottomUserName"><?php $linha['nome']?></span> <span class="fa fa-angle-up pull-right arrowUp"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#"><span class="icon-settings"></span>Definições</a></li>
                    <li><a href="profile.html"><span class="icon-user"></span>Perfil</a></li>
                    <li><a href="#"><span class="icon-bell"></span>Notificações<span class="badge pull-right bg-red">5</span></a></li>
                    <li class="divider"></li>
                    <li><a href="sair.php"><span class="icon-power"></span>Sair</a></li>
                </ul>
            </div>
        </div>
        <div class="closeLeftSide"></div>

        <!-- Content -->

        <div id="wrapper">
            <div id="mapView" class="mob-min">
            <div class="mapPlaceholder">
            <span class="fa fa-spin fa-spinner"></span>Carregar o Mapa</div></div>
            
            <div id="content" class="mob-max">
                <div class="singleTop whiteBg">
                    <div class="row mb20">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pb20">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="pc-email"><a href="#" class="btn btn-icon btn-round btn-o btn-magenta btn-sm"><span class="fa fa-envelope-o"></span></a></div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="profile-card">
                                        <div class="pc-avatar"><img src="<?php
										$consulta = mysql_query("SELECT *From usuarios WHERE id = '".$_SESSION["ID"]."'");
while($linha = mysql_fetch_assoc($consulta)){
										 echo $linha['imagem']; }?>" alt="avatar"></div>
                                        <div class="pc-name"><?php 
										$consulta = mysql_query("SELECT *From usuarios WHERE id = '".$_SESSION["ID"]."'");
while($linha = mysql_fetch_assoc($consulta)){
										echo $linha['nome']; }?> <?php 
										$consulta = mysql_query("SELECT *From usuarios WHERE id = '".$_SESSION["ID"]."'");
while($linha = mysql_fetch_assoc($consulta)){
										echo $linha['sobrenome'];}?>
                                </div>
                                
                            </div>
                           
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pb20">
                            <div class="pc-title osLight">Contactos</div>
                            <div class="row pb10">
                                <div class="col-xs-4"><strong>Telmovel</strong></div>
                                <div class="col-xs-8 align-right">(123) 456 789</div>
                            </div>
                            <div class="row pb10">
                                <div class="col-xs-4"><strong>Endereço</strong></div>
                                <div class="col-xs-8 align-right">888 123 456</div>
                            </div>
                            <div class="row pb10">
                                <div class="col-xs-4"><strong>Email</strong></div>
                                <div class="col-xs-8 align-right">
         <?php 
										$consulta = mysql_query("SELECT *From usuarios WHERE id = '".$_SESSION["ID"]."'");
while($linha = mysql_fetch_assoc($consulta)){
										echo ' <a href="mailto:#" class="text-green">'.$linha['email'].'</a>';}?>                       
                               </div>
                            </div>
                            
                            <div class="pc-social"><a href="#" class="btn btn-icon btn-facebook"><span class="fa fa-facebook"></span></a> <a href="#" class="btn btn-icon btn-twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="btn btn-icon btn-google"><span class="fa fa-google-plus"></span></a> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pb20">
                            <div class="pc-about osLight">Sobre Mim</div>
                            <div class="pb20">Nascido numa família de nobreza tribal, numa pequena aldeia do interior onde possivelmente viria a ocupar cargo de chefia, recusou esse destino aos 23 anos ao seguir para a capital, Joanesburgo, e iniciar sua atuação política.</div>
                            
                            <div id="testimonials" class="carousel slide carousel-wb mb20" data-ride="carousel">
                              
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="rightContainer">
                    <h3>Minhas Propriedades</h3>
                    <div class="row">
                        
                        
                        <?php 
			 $select = mysql_query("SELECT *FROM galeria LIMIT 2");
			 
			 while($linha = mysql_fetch_array($select)) {
				 echo'<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <a href="single.html" class="card">
                                <div class="figure">
                                    <img src="'.$linha['imagem'].'" alt="image">
                                    <div class="figCaption">
                                        <div>$1,340,000</div>
                                        <span class="icon-eye"> 180</span>
                                        <span class="icon-heart"> 87</span>
                                        <span class="icon-bubble"> 12</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">'.$linha['tipo'].'</div>
                                </div>
                                <h2>'.$linha['nome'].'</h2>
                                
                                <div class="cardRating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                   
                                </div>
                                
                                <div class="clearfix"></div>
                            </a>
                        </div>';
				 
				 }
			 
			 ?>
                        
                        
                        
                    </div>
                    <ul class="pagination">
                        <li class="disabled"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
  
        <script src="js/json2.js"></script>
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/underscore.js"></script>
        <script src="js/moment-2.5.1.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery-ui-touch-punch.js"></script>
        <script src="js/jquery.placeholder.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.touchSwipe.min.js"></script>
        <script src="js/jquery.slimscroll.min.js"></script>
        <script src="js/jquery.visible.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>
        <script src="js/infobox.js"></script>
        <script src="js/clndr.js"></script>
        <script src="js/jquery.tagsinput.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/app.js"></script>
        <script src="js/calendar.js"></script>
    </body>
</html>