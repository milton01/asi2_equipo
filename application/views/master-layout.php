<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">
        <title>
        ALTUVE | <?=$title?>
        </title>
        <link href="<?=base_url()?>/css/style.default.css" rel="stylesheet">
        <link href="<?=base_url()?>/css/jquery.datatables.css" rel="stylesheet">
        <?php
        foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js">
        </script>
        <script src="js/respond.min.js">
        </script>
        <![endif]-->
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">
                <i class="fa fa-spinner fa-spin">
                </i>
            </div>
        </div>
        <section>
            
            <div class="leftpanel">
                
                <div class="logopanel">
                    <img src="<?=base_url()?>images/logo.png"/>
                </div>
                <!-- logopanel -->
                
                <div class="leftpanelinner">
                    
                    <!-- This is only visible to small devices -->
                    <div class="visible-xs hidden-sm hidden-md hidden-lg">
                        <div class="media userlogged">
                            <img alt="" src="<?=base_url()?>images/photos/loggeduser.png" class="media-object">
                            <div class="media-body">
                                <h4>
                                José López
                                </h4>
                            </div>
                        </div>
                        
                        <h5 class="sidebartitle actitle">
                        Cuenta
                        </h5>
                        <ul class="nav nav-pills nav-stacked nav-bracket mb30">
                            <li>
                                <a href="#">
                                    <i class="fa fa-cog">
                                    </i>
                                    <span>
                                    Configuración de cuenta
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="signout.html">
                                    <i class="fa fa-sign-out">
                                    </i>
                                    <span>
                                    Cerrar sesión
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <h5 class="sidebartitle">
                    Menú
                    </h5>
                    <ul class="nav nav-pills nav-stacked nav-bracket">
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-home">
                                </i>
                                
                                <span>
                                Inicio
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="usuarios.html">
                                <i class="fa fa-user">
                                </i>
                                
                                <span>
                                Usuarios
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="transportes.html">
                                <i class="fa fa-truck">
                                </i>
                                
                                <span>
                                Transporte
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="clientes.html">
                                <i class="fa fa-suitcase">
                                </i>
                                
                                <span>
                                Clientes
                                </span>
                            </a>
                        </li>
                        <li class="nav-parent">
                            <a href="tables.html">
                                <i class="fa fa-th-list">
                                </i>
                                
                                <span>
                                Pedidos
                                </span>
                            </a>
                            <ul class="children">
                                <li>
                                    <a href="#.html">
                                        <i class="fa fa-caret-right">
                                        </i>
                                        link
                                    </a>
                                </li>
                                <li>
                                    <a href="#.html">
                                        <i class="fa fa-caret-right">
                                        </i>
                                        link
                                    </a>
                                </li>
                                <li>
                                    <a href="#.html">
                                        <i class="fa fa-caret-right">
                                        </i>
                                        link
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- leftpanelinner -->
            </div>
            <!-- leftpanel -->
            
            <div class="mainpanel">
                
                <div class="headerbar">
                    
                    <a class="menutoggle">
                        <i class="fa fa-bars">
                        </i>
                    </a>
                    
                    <div class="header-right">
                        <ul class="headermenu">
                            <li>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?=base_url()?>images/photos/loggeduser.png" alt="" />
                                    José López
                                    <span class="caret">
                                    </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                        <li>
                                            <a href="profile.html">
                                                <i class="glyphicon glyphicon-user">
                                                </i>
                                                Perfil
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="glyphicon glyphicon-cog">
                                                </i>
                                                Configuración de cuenta
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="signin.html">
                                                <i class="glyphicon glyphicon-log-out">
                                                </i>
                                                Cerrar sesión
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- header-right -->
                    
                </div>
                <!-- headerbar -->
                
                <div class="pageheader">
                    <h2>
                    <i class="fa fa-gear">
                    </i>
                    <?=$header?>
                    </h2>
                    
                </div>
                <div class="contentpanel">
                    <div class="row">
                        <div class="col-md-10">
                            <?=$content?>
                        </div>
                        
                    </div>
                    <!-- panel -->
                </div>
                <!-- contentpanel -->
            </div>
            
            
        </section>
        <script src="<?=base_url()?>js/jquery-1.10.2.min.js">
        </script>
        <script src="<?=base_url()?>js/jquery-migrate-1.2.1.min.js">
        </script>
        <script src="<?=base_url()?>js/bootstrap.min.js">
        </script>
        <script src="<?=base_url()?>js/modernizr.min.js">
        </script>
        <script src="<?=base_url()?>js/jquery.sparkline.min.js">
        </script>
        <script src="<?=base_url()?>js/toggles.min.js">
        </script>
        <script src="<?=base_url()?>js/retina.min.js">
        </script>
        <script src="<?=base_url()?>js/jquery.cookies.js">
        </script>
        <script src="<?=base_url()?>js/jquery.datatables.min.js">
        </script>
        <script src="<?=base_url()?>js/chosen.jquery.min.js">
        </script>
        <script src="<?=base_url()?>js/custom.js">
        </script>
        <!-- Grocery CRUD JS -->
        <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
        <!-- Custom js-->
        <?=$scripts?>
    </body>
</html>