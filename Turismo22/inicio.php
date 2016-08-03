<?php
include('config.php');
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

        <!-- header -->

        <div id="header">
            <div class="logo">
                <a href="index.html">
                    <span class="fa fa-home marker"></span>
                    <span class="logoText"></span>
                </a>
            </div>
            <a href="#" class="navHandler"><span class="fa fa-bars"></span></a>
            <div class="search">
                <span class="searchIcon icon-magnifier"></span>
                <input type="text" placeholder="Pesquisar Hoteis e Apartamento. .">
            </div>
            <div class="headerUserWraper">
                <a href="#" class="userHandler dropdown-toggle" data-toggle="dropdown"><span class="icon-user"></span><span class="counter">5</span></a>
                <a href="#" class="headerUser dropdown-toggle" data-toggle="dropdown">
                    <?php
					
					$consulta = mysql_query("SELECT *From usuarios WHERE id = '".$_SESSION["ID"]."'");
                   while($linha = mysql_fetch_assoc($consulta)){
					
                    echo '<img class="avatar headerAvatar pull-left" src="'.$linha['imagem'].'" alt="avatar">
                    <div class="userTop pull-left">
                        <span class="headerUserName">'.$linha['nome'].' '.$linha['sobrenome'].' </span>'; 
						
						} ?><span class="fa fa-angle-down"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
                <div class="dropdown-menu pull-right userMenu" role="menu">
                    <div class="mobAvatar">
                        <img class="avatar mobAvatarImg" src="images/avatar-1.png" alt="avatar">
                        <div class="mobAvatarName"><?php echo $_SESSION["Nome"]; ?></div>
                    </div>
                    <ul>
                        <li><a href="#"><span class="icon-settings"></span>Definições</a></li>
                        <li><a href="profile.html"><span class="icon-user"></span>Perfil</a></li>
                        <li><a href="#"><span class="icon-bell"></span>Notificações<span class="badge pull-right bg-red">5</span></a></li>
                        <li class="divider"></li>
                        <li><a href="sair.php"><span class="icon-power"></span>Sair</a></li>
                    </ul>
                </div>
            </div>
            <div class="headerNotifyWraper">
                <a href="#" class="headerNotify dropdown-toggle" data-toggle="dropdown">
                    <span class="notifyIcon icon-bell"></span>
                    <span class="counter">5</span>
                </a>
                <div class="dropdown-menu pull-right notifyMenu" role="menu">
                    <div class="notifyHeader">
                        <span>Notifications</span>
                        <a href="#" class="notifySettings icon-settings"></a>
                        <div class="clearfix"></div>
                    </div>
                    <ul class="notifyList">
                        <li>
                            <a href="#">
                                <img class="avatar pull-left" src="images/avatar-1.png" alt="avatar">
                                <div class="pulse border-grey"></div>
                                <div class="notify pull-left">
                                    <div class="notifyName">Sed ut perspiciatis unde</div>
                                    <div class="notifyTime">5 minutes ago</div>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="notifyRound notifyRound-red fa fa-envelope-o"></div>
                                <div class="pulse border-red"></div>
                                <div class="notify pull-left">
                                    <div class="notifyName">Lorem Ipsum is simply dummy text</div>
                                    <div class="notifyTime">20 minutes ago</div>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="notifyRound notifyRound-yellow fa fa-heart-o"></div>
                                <div class="pulse border-yellow"></div>
                                <div class="notify pull-left">
                                    <div class="notifyName">It is a long established fact</div>
                                    <div class="notifyTime">2 hours ago</div>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="notifyRound notifyRound-magenta fa fa-paper-plane-o"></div>
                                <div class="pulse border-magenta"></div>
                                <div class="notify pull-left">
                                    <div class="notifyName">There are many variations</div>
                                    <div class="notifyTime">1 day ago</div>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="notifyAll">See All</a>
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
                    <li><a href="explore.html"><span class="navIcon icon-compass"></span><span class="navLabel">Explorar</span></a></li>
                    <li><a href="single.html"><span class="navIcon icon-home"></span><span class="navLabel">Single</span></a></li>
                    <li><a href="add.html"><span class="navIcon icon-plus"></span><span class="navLabel">New</span></a></li>
                  
                    <li class="hasSub">
                        <a href="#"><span class="navIcon icon-layers"></span><span class="navLabel">Elements</span><span class="fa fa-angle-left arrowRight"></span></a>
                        <ul>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="icons.html">Icons <span class="badge pull-right bg-yellow">841</span></a></li>
                            <li><a href="grid.html">Grid</a></li>
                            <li><a href="widgets.html">Widgets</a></li>
                            <li><a href="components.html">Components</a></li>
                            <li><a href="lists.html">Lists</a></li>
                            <li><a href="tables.html">Tables</a></li>
                            <li><a href="form.html">Form</a></li>
                        </ul>
                    </li>
                    <li class="hasSub">
                        <a href="#"><span class="navIcon icon-link"></span><span class="navLabel">Pages</span><span class="fa fa-angle-left arrowRight"></span></a>
                        <ul>
                            <li><a href="signin.html">Sign In</a></li>
                            <li><a href="signup.html">Sign Up</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="index.html">Homepage Slideshow</a></li>
                            <li><a href="index-map.html">Homepage Map</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-post.html">Blog Post</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="leftUserWraper dropup">
                <a href="#" class="avatarAction dropdown-toggle" data-toggle="dropdown">
                    <img class="avatar" src="images/avatar-1.png" alt="avatar"><span class="counter">5</span>
                    <div class="userBottom pull-left">
                        <span class="bottomUserName">John Smith</span> <span class="fa fa-angle-up pull-right arrowUp"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#"><span class="icon-settings"></span>Settings</a></li>
                    <li><a href="profile.html"><span class="icon-user"></span>Profile</a></li>
                    <li><a href="#"><span class="icon-bell"></span>Notifications <span class="badge pull-right bg-red">5</span></a></li>
                    <li class="divider"></li>
                    <li><a href="#"><span class="icon-power"></span>Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="closeLeftSide"></div>

        <!-- Content -->

        <div id="wrapper" class="full">
            <div id="mapView" class="min"><div class="mapPlaceholder"><span class="fa fa-spin fa-spinner"></span> Loading map...</div></div>
            <div id="content" class="max">
                <div class="widgets">
                    <h4>Página Inicial</h4>
                    <div class="row">
                        <div class="col-lg-8">
                          
                        </div><!-- col-lg-8 -->
                         
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="userWidget-1">
                                    <?php
									
									$consulta = mysql_query("SELECT *FROM usuarios WHERE id =  '".$_SESSION["ID"]."'");
									while($linha = mysql_fetch_assoc($consulta)){
									
                                        echo'<div class="avatar">
                                            <img src="'.$linha['imagem'].'" alt="avatar">
                                            <div class="ops">
                                                <a href="#" class="btn btn-icon btn-round btn-o btn-white btn-sm"><span class="fa fa-envelope-o"></span></a>
                                                <a href="#" class="btn btn-icon btn-round btn-o btn-white btn-sm"><span class="fa fa-heart-o"></span></a>
                                            </div>
                                            <div class="name osLight">'.$linha['nome'].'</div>
                                        </div>
                                        <div class="title">'.$linha['pais'].'</div>
                                        <div class="address">'.$linha['cidade'].'</div>
                                        <div class="rating">
                                            <div class="number text-green osLight">4.5</div>
                                            <div class="stars">
                                                <ul>
                                                    <li><span class="fa fa-star star-1"></span></li>
                                                    <li><span class="fa fa-star star-2"></span></li>
                                                    <li><span class="fa fa-star star-3"></span></li>
                                                    <li><span class="fa fa-star star-4"></span></li>
                                                    <li><span class="fa fa-star-o star-5"></span></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <div class="reviews">123 Reviews</div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <ul class="stats">
                                            <li><span>280</span>Followers</li>
                                            <li><span>345</span>Following</li>
                                            <li><span>36</span>Posts</li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="userWidget-2">
                                        <div class="avatar">
                                            <img src="images/avatar-3.png" alt="avatar">
                                        </div>
                                        <div class="info">
                                            <div class="name">Rust Cohle</div>
                                            <div class="title">Administrator</div>
                                            <div class="address">Los Angeles, CA, USA</div>
                                        </div>
                                        <div class="ops">
                                            <a href="#" class="btn btn-icon btn-round btn-o btn-magenta btn-sm"><span class="fa fa-envelope-o"></span></a>
                                            <a href="#" class="btn btn-icon btn-round btn-o btn-red btn-sm"><span class="fa fa-heart-o"></span></a>
                                        </div>';
									}
										?>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="tabsWidget">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="active"><a href="#properties" role="tab" data-toggle="tab">PROPRIEDADES</a></li>
                                            <li><a href="#users" role="tab" data-toggle="tab">AMIGOS</a></li>
                                        </ul>
                                        <div class="tab-content tab-scroll">
                                            <div class="tab-pane fade in active" id="properties">
                                                <ul class="propList">
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="images/prop/1-1-thmb.png" alt="avatar"></div>
                                                            <div class="info text-nowrap">
                                                                <div class="name">Modern Residence in New York</div>
                                                                <div class="address">39 Remsen St, Brooklyn, NY 11201, USA</div>
                                                                <div class="price text-red">$1,550,000 <span class="badge">FOR RENT</span></div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="images/prop/2-1-thmb.png" alt="avatar"></div>
                                                            <div class="info text-nowrap">
                                                                <div class="name">Hauntingly Beautiful Estate</div>
                                                                <div class="address">169 Warren St, Brooklyn, NY 11201, USA</div>
                                                                <div class="price text-red">$1,750,000 <span class="badge">FOR SALE</span></div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="images/prop/3-1-thmb.png" alt="avatar"></div>
                                                            <div class="info text-nowrap">
                                                                <div class="name">Sophisticated Residence</div>
                                                                <div class="address">38-62 Water St, Brooklyn, NY 11201, USA</div>
                                                                <div class="price text-red">$1,340,000 <span class="badge">FOR RENT</span></div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="images/prop/4-1-thmb.png" alt="avatar"></div>
                                                            <div class="info text-nowrap">
                                                                <div class="name">House With a Lovely Glass-Roofed Pergola</div>
                                                                <div class="address">Wunsch Bldg, Brooklyn, NY 11201, USA</div>
                                                                <div class="price text-red">$1,930,000 <span class="badge">FOR SALE</span></div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="images/prop/5-1-thmb.png" alt="avatar"></div>
                                                            <div class="info text-nowrap">
                                                                <div class="name">Luxury Mansion</div>
                                                                <div class="address">95 Butler St, Brooklyn, NY 11231, USA</div>
                                                                <div class="price text-red">$2,350,000 <span class="badge">FOR RENT</span></div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="users">
                                                <ul class="userList">
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="images/avatar-1.png" alt="avatar"></div>
                                                            <div class="info text-nowrap">
                                                                <div class="name">John Smith</div>
                                                                <div class="title">Administrator</div>
                                                                <div class="address">San Francisco, CA, USA</div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="images/avatar-2.png" alt="avatar"></div>
                                                            <div class="info text-nowrap">
                                                                <div class="name">Jane Smith</div>
                                                                <div class="title">Real Estate Agent</div>
                                                                <div class="address">Los Angeles, CA, USA</div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="images/avatar-3.png" alt="avatar"></div>
                                                            <div class="info text-nowrap">
                                                                <div class="name">Rust Cohle</div>
                                                                <div class="title">Administrator</div>
                                                                <div class="address">New York, NY, USA</div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="images/avatar-4.png" alt="avatar"></div>
                                                            <div class="info text-nowrap">
                                                                <div class="name">Antony Iglesias</div>
                                                                <div class="title">Real Estate Agent</div>
                                                                <div class="address">Los Angeles, CA, USA</div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="images/avatar-5.png" alt="avatar"></div>
                                                            <div class="info text-nowrap">
                                                                <div class="name">Alex Rogers</div>
                                                                <div class="title">Administrator</div>
                                                                <div class="address">San Francisco, CA, USA</div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="calendarWidget">
                                <div class="cal"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="commentsWidget">
                                <h5><span class="badge">4</span> Comments</h5>
                                <div class="comment">
                                    <div class="commentAvatar">
                                        <img class="avatar" src="images/avatar-3.png" alt="avatar">
                                        <div class="commentArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="commentContent">
                                        <div class="commentName">Rust Cohle</div>
                                        <div class="commentBody">
                                            It is a long established fact that a reader will be distracted by the readable content
                                        </div>
                                        <div class="commentActions">
                                            <div class="commentTime"><span class="icon-clock"></span> 1 day ago</div>
                                            <ul>
                                                <li><a href="#"><span class="icon-action-undo"></span></a></li>
                                                <li><a href="#"><span class="icon-like"></span> 13</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="comment reply">
                                    <div class="commentAvatar">
                                        <img class="avatar" src="images/avatar-1.png" alt="avatar">
                                        <div class="commentArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="commentContent">
                                        <div class="commentName">John Smith</div>
                                        <div class="commentBody">
                                            Comment posted by me. I have the power to remove it.
                                        </div>
                                        <div class="commentActions">
                                            <div class="commentTime"><span class="icon-clock"></span> 2 hours ago</div>
                                            <ul>
                                                <li><a href="#"><span class="fa fa-trash-o"></span></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="comment">
                                    <div class="commentAvatar">
                                        <img class="avatar" src="images/avatar-5.png" alt="avatar">
                                        <div class="commentArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="commentContent">
                                        <div class="commentName">Alex Rogers</div>
                                        <div class="commentBody">
                                            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                                        </div>
                                        <div class="commentActions">
                                            <div class="commentTime"><span class="icon-clock"></span> 20 minutes ago</div>
                                            <ul>
                                                <li><a href="#"><span class="icon-action-undo"></span></a></li>
                                                <li><a href="#"><span class="icon-like"></span> 13</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="comment">
                                    <div class="commentAvatar">
                                        <img class="avatar" src="images/avatar-2.png" alt="avatar">
                                        <div class="commentArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="commentContent">
                                        <div class="commentName">Jane Smith</div>
                                        <div class="commentBody">
                                            Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                        </div>
                                        <div class="commentActions">
                                            <div class="commentTime"><span class="icon-clock"></span> 5 minutes ago</div>
                                            <ul>
                                                <li><a href="#"><span class="icon-action-undo"></span></a></li>
                                                <li><a href="#"><span class="icon-like"></span> 13</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="commentsWidgetForm">
                                    <div class="cfAvatar">
                                        <img class="avatar" src="images/avatar-1.png" alt="avatar">
                                    </div>
                                    <form class="commentsForm">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Write a comment...">
                                            <span class="input-group-btn"><a class="btn btn-green">Post</a></span>
                                        </div>
                                    </form>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="notificationsWidget">
                                <h5><span class="badge">5</span> Notifications</h5>
                                <div class="notification">
                                    <div class="time green">
                                        <div class="timeBody hidden-xs">5 minutes ago</div>
                                        <div class="timeArrow hidden-xs"><span class="fa fa-caret-right"></span></div>
                                        <div class="indicator"><span class="fa fa-circle-o"></span></div>
                                        <div class="notifyArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="notifyContent">
                                        <div class="notifyBody">
                                            <img class="avatar pull-left" src="images/avatar-3.png" alt="avatar">
                                            <div class="notify pull-left">
                                            <div class="name">Rust Cohle <span class="label label-green visible-xs">5 minutes ago</span></div>
                                                <div class="message">Sed ut perspiciatis unde</div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="notification">
                                    <div class="time red">
                                        <div class="timeBody hidden-xs">20 minutes ago</div>
                                        <div class="timeArrow hidden-xs"><span class="fa fa-caret-right"></span></div>
                                        <div class="indicator"><span class="fa fa-circle-o"></span></div>
                                        <div class="notifyArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="notifyContent">
                                        <div class="notifyBody">
                                            <div class="notifyRound notifyRound-red fa fa-envelope-o"></div>
                                            <div class="notify pull-left">
                                                <div class="name">John Smith <span class="label label-red visible-xs">20 minutes ago</span></div>
                                                <div class="message">Lorem Ipsum is simply dummy text</div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="notification">
                                    <div class="time yellow">
                                        <div class="timeBody hidden-xs">2 hours ago</div>
                                        <div class="timeArrow hidden-xs"><span class="fa fa-caret-right"></span></div>
                                        <div class="indicator"><span class="fa fa-circle-o"></span></div>
                                        <div class="notifyArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="notifyContent">
                                        <div class="notifyBody">
                                            <div class="notifyRound notifyRound-yellow fa fa-heart-o"></div>
                                            <div class="notify pull-left">
                                                <div class="name">Alex Rogers <span class="label label-yellow visible-xs">2 hours ago</span></div>
                                                <div class="message">It is a long established fact</div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="notification">
                                    <div class="time magenta">
                                        <div class="timeBody hidden-xs">1 day ago</div>
                                        <div class="timeArrow hidden-xs"><span class="fa fa-caret-right"></span></div>
                                        <div class="indicator"><span class="fa fa-circle-o"></span></div>
                                        <div class="notifyArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="notifyContent">
                                        <div class="notifyBody">
                                            <div class="notifyRound notifyRound-magenta fa fa-paper-plane-o"></div>
                                            <div class="notify pull-left">
                                                <div class="name">Jane Smith <span class="label label-magenta visible-xs">1 day ago</span></div>
                                                <div class="message">There are many variations</div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="notification">
                                    <div class="time blue">
                                        <div class="timeBody hidden-xs">September 25, 17:30</div>
                                        <div class="timeArrow hidden-xs"><span class="fa fa-caret-right"></span></div>
                                        <div class="indicator"><span class="fa fa-circle-o"></span></div>
                                        <div class="notifyArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="notifyContent">
                                        <div class="notifyBody">
                                            <img class="avatar pull-left" src="images/avatar-1.png" alt="avatar">
                                            <div class="notify pull-left">
                                                <div class="name">John Smith <span class="label label-blue visible-xs">September 25, 17:30</span></div>
                                                <div class="message">Lorem Ipsum is simply dummy text</div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
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