<?php

if (Session::get('loggedIn') == true) :
    // VERIFICA QUE ESTÉ LOGEADO
    // EN CASO DE QUE SI RENDERIZA TODO EL HEADER DEL DASHBOARD
?>
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo dynamic_page_title($_REQUEST['url']); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="<?php echo URL ?>favicon.ico">
        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/themify-icons.css">
        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/metisMenu.css">
        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/slicknav.min.css">
        <!-- amchart css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <!-- others css -->
        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/typography.css">
        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/default-css.css">
        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/styles.css">
        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/responsive.css">
        <!-- CORE CSS -->
        <?php
        render_resources('css', $this->css);
        ?>
        <!-- modernizr css -->
        <script src="<?php echo ASSETS_PATH ?>js/vendor/modernizr-2.8.3.min.js"></script>
        <input type="hidden" value="<?php echo URL; ?>" id="url">
        <input type="hidden" value="<?php echo ASSETS_PATH; ?>" id="assets">
        <input type="hidden" value="<?php echo IMG_PATH; ?>" id="images">
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloader area start -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- preloader area end -->
        <!-- page container area start -->
        <div class="page-container">
            <!-- sidebar menu area start -->
            <div class="sidebar-menu">
                <div class="sidebar-header">
                    <div class="logo">
                        <a href="index.html"><img src="<?php echo ASSETS_PATH ?>images/icon/sistema_tierra.png" alt="logo"></a>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                            <ul class="metismenu" id="menu">
                                <li class="active">
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Gestión de campo</span></a>
                                    <ul class="collapse">
                                        <li class="active"><a href="<?php echo URL?>gestion/distritos">Mantenimiento de distritos</a></li>
                                        <li><a href="<?php echo URL?>gestion/zonas">Mantenimiento de Zonas</a></li>
                                        <li><a href="<?php echo URL?>gestion/manzanas">Mantenimiento de Manzanas</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Usuarios</span></a>
                                    <ul class="collapse">
                                        <li><a href="<?php echo URL?>usuarios/mantenimiento">Mantenimientos Usuarios</a></li>
                                        <li><a href="<?php echo URL?>usuarios/tipos">Tipos de Usuarios</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Charts</span></a>
                                    <ul class="collapse">
                                        <li><a href="barchart.html">bar chart</a></li>
                                        <li><a href="linechart.html">line Chart</a></li>
                                        <li><a href="piechart.html">pie chart</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>UI Features</span></a>
                                    <ul class="collapse">
                                        <li><a href="accordion.html">Accordion</a></li>
                                        <li><a href="alert.html">Alert</a></li>
                                        <li><a href="badge.html">Badge</a></li>
                                        <li><a href="button.html">Button</a></li>
                                        <li><a href="button-group.html">Button Group</a></li>
                                        <li><a href="cards.html">Cards</a></li>
                                        <li><a href="dropdown.html">Dropdown</a></li>
                                        <li><a href="list-group.html">List Group</a></li>
                                        <li><a href="media-object.html">Media Object</a></li>
                                        <li><a href="modal.html">Modal</a></li>
                                        <li><a href="pagination.html">Pagination</a></li>
                                        <li><a href="popovers.html">Popover</a></li>
                                        <li><a href="progressbar.html">Progressbar</a></li>
                                        <li><a href="tab.html">Tab</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="form.html">Form</a></li>
                                        <li><a href="grid.html">grid system</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>icons</span></a>
                                    <ul class="collapse">
                                        <li><a href="fontawesome.html">fontawesome icons</a></li>
                                        <li><a href="themify.html">themify icons</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                        <span>Tables</span></a>
                                    <ul class="collapse">
                                        <li><a href="table-basic.html">basic table</a></li>
                                        <li><a href="table-layout.html">table layout</a></li>
                                        <li><a href="datatable.html">datatable</a></li>
                                    </ul>
                                </li>
                                <li><a href="maps.html"><i class="ti-map-alt"></i> <span>maps</span></a></li>
                                <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Pages</span></a>
                                    <ul class="collapse">
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="login2.html">Login 2</a></li>
                                        <li><a href="login3.html">Login 3</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="register2.html">Register 2</a></li>
                                        <li><a href="register3.html">Register 3</a></li>
                                        <li><a href="register4.html">Register 4</a></li>
                                        <li><a href="screenlock.html">Lock Screen</a></li>
                                        <li><a href="screenlock2.html">Lock Screen 2</a></li>
                                        <li><a href="reset-pass.html">reset password</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-exclamation-triangle"></i>
                                        <span>Error</span></a>
                                    <ul class="collapse">
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="403.html">Error 403</a></li>
                                        <li><a href="500.html">Error 500</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Multi
                                            level menu</span></a>
                                    <ul class="collapse">
                                        <li><a href="#">Item level (1)</a></li>
                                        <li><a href="#">Item level (1)</a></li>
                                        <li><a href="#" aria-expanded="true">Item level (1)</a>
                                            <ul class="collapse">
                                                <li><a href="#">Item level (2)</a></li>
                                                <li><a href="#">Item level (2)</a></li>
                                                <li><a href="#">Item level (2)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Item level (1)</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- sidebar menu area end -->
            <!-- main content area start -->
            <div class="main-content">
                <!-- header area start -->
                <div class="header-area">
                    <div class="row align-items-center">
                        <!-- nav and search button -->
                        <div class="col-md-6 col-sm-8 clearfix">
                            <div class="nav-btn pull-left">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="search-box pull-left">
                                <form id="search">
                                    <input type="text" name="search" placeholder="Buscar..." required>
                                    <i class="ti-search"></i>
                                </form>
                            </div>
                        </div>
                        <!-- profile info & task notification -->
                        <div class="col-md-6 col-sm-4 clearfix">
                            <ul class="notification-area pull-right">
                                <li id="full-view"><i class="ti-fullscreen"></i></li>
                                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                                <li class="dropdown">
                                    <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                        <span>2</span>
                                    </i>
                                    <div class="dropdown-menu bell-notify-box notify-box">
                                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                        <div class="nofity-list">
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                                <div class="notify-text">
                                                    <p>New Commetns On Post</p>
                                                    <span>30 Seconds ago</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                                <div class="notify-text">
                                                    <p>Some special like you</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                                <div class="notify-text">
                                                    <p>New Commetns On Post</p>
                                                    <span>30 Seconds ago</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                                <div class="notify-text">
                                                    <p>Some special like you</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                    <div class="dropdown-menu notify-box nt-enveloper-box">
                                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                        <div class="nofity-list">
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="<?php echo ASSETS_PATH ?>images/author/author-img1.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="<?php echo ASSETS_PATH ?>images/author/author-img2.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">When you can connect with me...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="<?php echo ASSETS_PATH ?>images/author/author-img3.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">I missed you so much...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="<?php echo ASSETS_PATH ?>images/author/author-img4.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Your product is completely Ready...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="<?php echo ASSETS_PATH ?>images/author/author-img2.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="<?php echo ASSETS_PATH ?>images/author/author-img1.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="<?php echo ASSETS_PATH ?>images/author/author-img3.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="settings-btn">
                                    <i class="ti-settings"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- header area end -->
                <!-- page title area start -->
                <div class="page-title-area">
                    <div class="row align-items-center">
                        <?php
                            echo dynamic_navigation($_REQUEST['url']);
                        ?>
                        <div class="col-sm-6 clearfix">
                            <div class="user-profile pull-right">
                                <img class="avatar user-thumb" src="<?php echo ASSETS_PATH ?>images/author/user.jpg" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo strtoupper(Session::get('user')); ?> <i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Mensaje</a>
                                    <a class="dropdown-item" href="#">Ajustes</a>
                                    <a class="dropdown-item logout-actioner" href="javascript:;">Salir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content-inner">
                <?php
            else :
                // EN CASO DE QUE NO ESTÉ LOGEADO RENDERIZA EL HEADER DEL LOGIN
                ?>
                    <!DOCTYPE html>
                    <html class="no-js" lang="es">

                    <head>
                        <meta charset="utf-8">
                        <meta http-equiv="x-ua-compatible" content="ie=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta name="viewport" content="width=device-width, initial-scale=1">

                        <title><?php echo dynamic_page_title($_REQUEST['url']); ?></title>
                        <link rel="shortcut icon" type="image/png" href="<?php echo URL ?>favicon.ico">
                        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/bootstrap.min.css">
                        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/font-awesome.min.css">
                        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/themify-icons.css">
                        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/metisMenu.css">
                        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/custom.css">
                        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/owl.carousel.min.css">
                        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/slicknav.min.css">
                        <!-- amchart css -->
                        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
                        <!-- others css -->
                        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/typography.css">
                        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/default-css.css">
                        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/styles.css">
                        <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>css/responsive.css">
                        <input type="hidden" value="<?php echo URL; ?>" id="url">
                        <input type="hidden" value="<?php echo ASSETS_PATH; ?>" id="assets">
                        <input type="hidden" value="<?php echo IMG_PATH; ?>" id="images">

                        <?php
                        render_resources('css', $this->css);
                        ?>
                        <!-- modernizr css -->
                        <script src="<?php echo ASSETS_PATH ?>js/vendor/modernizr-2.8.3.min.js"></script>
                        <!-- jquery latest version -->
                        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/disableautofill/src/jquery.disableAutoFill.min.js"></script>

                    </head>

                    <body>
                        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
                        <!-- preloader area start -->
                        <div id="preloader">
                            <div class="loader"></div>
                        </div>


                    <?php endif;
                    ?>