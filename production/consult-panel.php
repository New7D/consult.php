<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Consult Network |  Painel de Controle</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Consult Network</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Bem vindo,</span>
                        <h2>KODI (VARIAVEL)</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Painel de Controle</h3>
                        <ul class="nav side-menu">
                            <li><a href="consult-panel.php"><i class="fa fa-home"></i> Início </a></li>
                            <!-- Gerenciar perfil -->
                            <li><a><i class="fa fa-cogs"></i> Gerenciar perfil </a></li>
                            <!-- FIM GERENCIAR -->
                            <!-- FINANCEIRO -->
                            <li><a><i class="fa fa-money"></i> Financeiro <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Dados do Titular</a></li>
                                    <li><a href="#">Dados Bancários</a></li>
                                    <li><a href="#">Alterar Dados</a></li>
                                </ul>
                            </li>
                            <!-- FIM FINANCEIRO -->
                            <!-- REDES SOCIAIS -->
                            <li><a><i class="fa fa-at"></i> Redes Sociais <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Cadastrar Rede Social</a></li>
                                    <li><a href="#">Minhas Redes Sociais</a></li>
                                    <li><a href="#">Gerenciar Rede Social</a></li>
                                </ul>
                            </li>
                            <!-- FIM REDES SOCIAIS -->
                            <!-- MATÉRIAS -->
                            <li><a><i class="fa fa-clipboard"></i> Matérias <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Divulgar</a></li>
                                    <li><a href="#">Cadastrar Matéria</a></li>
                                    <li><a href="#">Solicitar Matéria</a></li>
                                    <li><a href="#">Minhas Matérias</a></li>
                                </ul>
                            </li>
                            <!-- FIM MATÉRIAS -->

                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Área do Anunciante</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-columns"></i> Anúnciar Sites <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Loja Virtual</a></li>
                                    <li><a href="#">Empresarial</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-play-circle-o"></i> Anúnciar Vídeos <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Youtube</a></li>
                                    <li><a href="#">Instagram TV</a></li>
                                    <li><a href="#">Vimeo</a></li>
                                    <li><a href="#">Dailymotin</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-shekel"></i> Crédito Consult <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Adquirir Crédito</a>
                                    <li><a href="#">Enviar Crédito</a>
                                    <li><a href="#">Reembolsar Crédito</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Configurações">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Tela Cheia">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Esconder">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Sair" href="login.php">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt="">Kodi Rafael
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Perfil</a></li>
                                <li><a href="javascript:;">Configurações</a></li>
                                <li><a href="javascript:;">Ajuda</a></li>
                                <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>Kodi Rafael</span>
                          <span class="time">Há 3 minutos</span>
                        </span>
                                        <span class="message">
                          O Chubileu deve colocar aqui um FEED dinamico de notificações
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>Kodi Rafael</span>
                          <span class="time">Há 7 Minutos</span>
                        </span>
                                        <span class="message">
                          O Chubileu só é homem até meia noite.
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>Kodi Rafael</span>
                          <span class="time">Há 10 minutos</span>
                        </span>
                                        <span class="message">
                          O Chubileu vai patinar na programação quando chegar nesta parte!
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>Kodi Rafael</span>
                          <span class="time">Há 13 minutos</span>
                        </span>
                                        <span class="message">
                          O Chubileu gosta de dançar bumbum guloso
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>Todos alertas</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row tile_count">
                <div class="col-md-3 col-sm-6 col-xs-9 tile_stats_count">
                    <span class="count_top"><i class="fa fa-line-chart"></i> Visitas Hoje</span>
                    <div class="count">2500</div>
                    <span class="count_bottom"><i class="green">4% </i> Ontem</span>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-9 tile_stats_count">
                    <span class="count_top"><i class="fa fa-area-chart"></i> Visitas Mês</span>
                    <div class="count">12.350</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> Mês passado</span>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-9 tile_stats_count">
                    <span class="count_top"><i class="fa fa-usd"></i> Rendimento Ontem</span>
                    <div class="count green">33,53</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> Dia Anterior</span>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-9 tile_stats_count">
                    <span class="count_top"><i class="fa fa-usd"></i> Rendimento Mês</span>
                    <div class="count">1.567,00</div>
                    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> Mês Passado</span>
                </div>

            </div>
            <!-- /top tiles -->

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard_graph">

                        <div class="row x_title">
                            <div class="col-md-6">
                                <h3>Atividade de Redes Sociais</h3>
                            </div>
                            <div class="col-md-6">
                                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div id="chart_plot_01" class="demo-placeholder"></div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                            <div class="x_title">
                                <h2>Campanhas</h2>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-6">
                                <div>
                                    <p>Facebook</p>
                                    <div class="">
                                        <div class="progress progress_sm" style="width: 76%;">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>Twitter</p>
                                    <div class="">
                                        <div class="progress progress_sm" style="width: 76%;">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-6">
                                <div>
                                    <p>Instagram</p>
                                    <div class="">
                                        <div class="progress progress_sm" style="width: 76%;">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>Outros meios</p>
                                    <div class="">
                                        <div class="progress progress_sm" style="width: 76%;">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="10"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <?php
                            require ('tables_dynamic.html');
                        ?>

                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Consult Network - Todos os Direitos Reservados
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js"></script>
<script src="../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../vendors/Flot/jquery.flot.time.js"></script>
<script src="../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>
