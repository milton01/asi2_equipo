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
        if(isset($css_files)):
        foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; endif;?>
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
                    
                    
                    <h5 class="sidebartitle">
                    Menú
                    </h5>
                    <?=$menu?>
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
                                    <img alt="" src="<?=base_url()?>images/photos/loggeduser.png" class="media-object">
                                   
                                    José López
                                    <span class="caret">
                                    </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                        <li>
                                            <a href="#">
                                                <i class="glyphicon glyphicon-cog">
                                                </i>
                                                Cambiar password
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
        <?php if(isset($js_files)) : foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
        <?php endforeach; endif;?>
        <!-- Custom js-->
        <?=$scripts?>
    </body>
</html>