<!DOCTYPE html>
<html lang="en">



    
<!-- Mirrored from www.codecovers.eu/materialadmin/dashboards/dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jun 2016 09:34:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <title>Material Admin - Dashboard</title>
        
        <!-- BEGIN META -->
        <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="your,keywords">
        <meta name="description" content="Short explanation about this website">
        <!-- END META -->

        <!-- BEGIN STYLESHEETS -->
            <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
            {!!HTML::style('assets/css/modules/materialadmin/css/theme-default/bootstrap94be.css')!!}
            {!!HTML::style('assets/css/modules/materialadmin/css/theme-default/materialadminb0e2.css')!!}
            {!!HTML::style('assets/css/modules/materialadmin/css/theme-default/font-awesome.min753e.css')!!}
            {!!HTML::style('assets/css/modules/materialadmin/css/theme-default/material-design-iconic-font.mine7ea.css')!!}
            {!!HTML::style('assets/css/modules/materialadmin/css/theme-default/libs/rickshaw/rickshawd56b.css?1422823372')!!}
            {!!HTML::style('assets/css/modules/materialadmin/css/theme-default/libs/morris/morris.core5e0a.css')!!}




    


        <!-- END STYLESHEETS -->


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
    <script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/html5shiv.js?1422823601"></script>
    <script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/respond.min.js?1422823601"></script>
    <![endif]-->
    </head>
    <body class="menubar-hoverable header-fixed ">
                <!-- BEGIN HEADER-->
            <header id="header" >
                            


        <div class="headerbar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="headerbar-left">
                <ul class="header-nav header-nav-options">
                    <li class="header-nav-brand" >
                        <div class="brand-holder">
                            <a href="dashboard.html">
                                <span class="text-lg text-bold text-primary">MATERIAL ADMIN</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="headerbar-right">
                <ul class="header-nav header-nav-options">
                    <li>
                        <!-- Search form -->
                        <form class="navbar-search" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
                            </div>
                            <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                            <i class="fa fa-bell"></i><sup class="badge style-danger">4</sup>
                        </a>
                        <ul class="dropdown-menu animation-expand">
                            <li class="dropdown-header">Today's messages</li>
                            <li>
                                <a class="alert alert-callout alert-warning" href="javascript:void(0);">
                                    <img class="pull-right img-circle dropdown-avatar" src="../../assets/img/modules/materialadmin/avatar2666b.jpg?1422538624" alt="" />
                                    <strong>Alex Anistor</strong><br/>
                                    <small>Testing functionality...</small>
                                </a>
                            </li>
                            <li>
                                <a class="alert alert-callout alert-info" href="javascript:void(0);">
                                    <img class="pull-right img-circle dropdown-avatar" src="../../assets/img/modules/materialadmin/avatar3666b.jpg?1422538624" alt="" />
                                    <strong>Alicia Adell</strong><br/>
                                    <small>Reviewing last changes...</small>
                                </a>
                            </li>
                            <li class="dropdown-header">Options</li>
                            <li><a href="../pages/login.html">View all messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                            <li><a href="../pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                        </ul><!--end .dropdown-menu -->
                    </li><!--end .dropdown -->
                    <li class="dropdown hidden-xs">
                        <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                            <i class="fa fa-area-chart"></i>
                        </a>
                        <ul class="dropdown-menu animation-expand">
                            <li class="dropdown-header">Server load</li>
                            <li class="dropdown-progress">
                                <a href="javascript:void(0);">
                                    <div class="dropdown-label">
                                        <span class="text-light">Server load <strong>Today</strong></span>
                                        <strong class="pull-right">93%</strong>
                                    </div>
                                    <div class="progress"><div class="progress-bar progress-bar-danger" style="width: 93%"></div></div>
                                </a>
                            </li><!--end .dropdown-progress -->
                            <li class="dropdown-progress">
                                <a href="javascript:void(0);">
                                    <div class="dropdown-label">
                                        <span class="text-light">Server load <strong>Yesterday</strong></span>
                                        <strong class="pull-right">30%</strong>
                                    </div>
                                    <div class="progress"><div class="progress-bar progress-bar-success" style="width: 30%"></div></div>
                                </a>
                            </li><!--end .dropdown-progress -->
                            <li class="dropdown-progress">
                                <a href="javascript:void(0);">
                                    <div class="dropdown-label">
                                        <span class="text-light">Server load <strong>Lastweek</strong></span>
                                        <strong class="pull-right">74%</strong>
                                    </div>
                                    <div class="progress"><div class="progress-bar progress-bar-warning" style="width: 74%"></div></div>
                                </a>
                            </li><!--end .dropdown-progress -->
                        </ul><!--end .dropdown-menu -->
                    </li><!--end .dropdown -->
                </ul><!--end .header-nav-options -->
                <ul class="header-nav header-nav-profile">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                            <img src="../../assets/img/modules/materialadmin/avatar14335.jpg?1422538623" alt="" />
                            <span class="profile-info">
                                Daniel Johnson
                                <small>Administrator</small>
                            </span>
                        </a>
                        <ul class="dropdown-menu animation-dock">
                            <li class="dropdown-header">Config</li>
                            <li><a href="../pages/profile.html">My profile</a></li>
                            <li><a href="../pages/blog/post.html"><span class="badge style-danger pull-right">16</span>My blog</a></li>
                            <li><a href="../pages/calendar.html">My appointments</a></li>
                            <li class="divider"></li>
                            <li><a href="../pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
                            <li><a href="../pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
                        </ul><!--end .dropdown-menu -->
                    </li><!--end .dropdown -->
                </ul><!--end .header-nav-profile -->
                <ul class="header-nav header-nav-toggle">
                    <li>
                        <a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>
                    </li>
                </ul><!--end .header-nav-toggle -->
            </div><!--end #header-navbar-collapse -->
        </div>
                    </header>
            <!-- END HEADER-->

            <!-- BEGIN BASE-->
            <div id="base">
                <!-- BEGIN OFFCANVAS LEFT -->
                <div class="offcanvas">
                            </div><!--end .offcanvas-->
                <!-- END OFFCANVAS LEFT -->

                <!-- BEGIN CONTENT-->
                <div id="content">
                    
            <section>
                <div class="section-body">
                    <div class="row">
                        
                        <!-- BEGIN ALERT - REVENUE -->
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-info no-margin">
                                        <strong class="pull-right text-success text-lg">0,38% <i class="md md-trending-up"></i></strong>
                                        <strong class="text-xl">$ 32,829</strong><br/>
                                        <span class="opacity-50">Revenue</span>
                                        <div class="stick-bottom-left-right">
                                            <div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
                                        </div>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END ALERT - REVENUE -->
                        
                        <!-- BEGIN ALERT - VISITS -->
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-warning no-margin">
                                        <strong class="pull-right text-warning text-lg">0,01% <i class="md md-swap-vert"></i></strong>
                                        <strong class="text-xl">432,901</strong><br/>
                                        <span class="opacity-50">Visits</span>
                                        <div class="stick-bottom-right">
                                            <div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
                                        </div>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END ALERT - VISITS -->
                        
                        <!-- BEGIN ALERT - BOUNCE RATES -->
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-danger no-margin">
                                        <strong class="pull-right text-danger text-lg">0,18% <i class="md md-trending-down"></i></strong>
                                        <strong class="text-xl">42.90%</strong><br/>
                                        <span class="opacity-50">Bounce rate</span>
                                        <div class="stick-bottom-left-right">
                                            <div class="progress progress-hairline no-margin">
                                                <div class="progress-bar progress-bar-danger" style="width:43%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END ALERT - BOUNCE RATES -->
                        
                        <!-- BEGIN ALERT - TIME ON SITE -->
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-success no-margin">
                                        <h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
                                        <strong class="text-xl">54 sec.</strong><br/>
                                        <span class="opacity-50">Avg. time on site</span>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END ALERT - TIME ON SITE -->
                        
                    </div><!--end .row -->
                    <div class="row">
                        
                        <!-- BEGIN SITE ACTIVITY -->
                        <div class="col-md-9">
                            <div class="card ">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="card-head">
                                            <header>Site activity</header>
                                        </div><!--end .card-head -->
                                        <div class="card-body height-8">
                                            <div id="flot-visitors-legend" class="flot-legend-horizontal stick-top-right no-y-padding"></div>
                                            <div id="flot-visitors" class="flot height-7" data-title="Activity entry" data-color="#7dd8d2,#0aa89e"></div>
                                        </div><!--end .card-body -->
                                    </div><!--end .col -->
                                    <div class="col-md-4">
                                        <div class="card-head">
                                            <header>Today's stats</header>
                                        </div>
                                        <div class="card-body height-8">
                                            <strong>214</strong> members
                                            <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
                                            <div class="progress progress-hairline">
                                                <div class="progress-bar progress-bar-primary-dark" style="width:43%"></div>
                                            </div>
                                            756 pageviews
                                            <span class="pull-right text-success text-sm">0,68% <i class="md md-trending-up"></i></span>
                                            <div class="progress progress-hairline">
                                                <div class="progress-bar progress-bar-primary-dark" style="width:11%"></div>
                                            </div>
                                            291 bounce rates
                                            <span class="pull-right text-danger text-sm">21,08% <i class="md md-trending-down"></i></span>
                                            <div class="progress progress-hairline">
                                                <div class="progress-bar progress-bar-danger" style="width:93%"></div>
                                            </div>
                                            32,301 visits
                                            <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
                                            <div class="progress progress-hairline">
                                                <div class="progress-bar progress-bar-primary-dark" style="width:63%"></div>
                                            </div>
                                            132 pages
                                            <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
                                            <div class="progress progress-hairline">
                                                <div class="progress-bar progress-bar-primary-dark" style="width:47%"></div>
                                            </div>
                                        </div><!--end .card-body -->
                                    </div><!--end .col -->
                                </div><!--end .row -->
                            </div><!--end .card -->     
                        </div><!--end .col -->
                        <!-- END SITE ACTIVITY -->
                        
                        <!-- BEGIN SERVER STATUS -->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-head">
                                    <header class="text-primary">Server status</header>
                                </div><!--end .card-head -->
                                <div class="card-body height-4">
                                    <div class="pull-right text-center">
                                        <em class="text-primary">Temperature</em>
                                        <br/>
                                        <div id="serverStatusKnob" class="knob knob-shadow knob-primary knob-body-track size-2">
                                            <input type="text" class="dial" data-min="0" data-max="100" data-thickness=".09" value="50" data-readOnly=true>
                                        </div>
                                    </div>
                                </div><!--end .card-body -->
                                <div class="card-body height-4 no-padding">
                                    <div class="stick-bottom-left-right">
                                        <div id="rickshawGraph" class="height-4" data-color1="#0aa89e" data-color2="rgba(79, 89, 89, 0.2)"></div>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->     
                        </div><!--end .col -->
                        <!-- END SERVER STATUS -->
                        
                    </div><!--end .row -->
                    <div class="row">
                        
                        <!-- BEGIN TODOS -->
                        <div class="col-md-3">
                            <div class="card ">
                                <div class="card-head">
                                    <header>Todo's</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                                    </div>
                                </div><!--end .card-head -->
                                <div class="card-body no-padding height-9 scroll">
                                    <ul class="list" data-sortable="true">
                                        <li class="tile">
                                            <div class="checkbox checkbox-styled tile-text">
                                                <label>
                                                    <input type="checkbox" checked>
                                                    <span>Call clients for follow-up</span>
                                                </label>
                                            </div>
                                            <a class="btn btn-flat ink-reaction btn-default">
                                                <i class="md md-delete"></i>
                                            </a>
                                        </li>
                                        <li class="tile">
                                            <div class="checkbox checkbox-styled tile-text">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        Schedule meeting
                                                        <small>opportunity for new customers</small>
                                                    </span>
                                                </label>
                                            </div>
                                            <a class="btn btn-flat ink-reaction btn-default">
                                                <i class="md md-delete"></i>
                                            </a>
                                        </li>
                                        <li class="tile">
                                            <div class="checkbox checkbox-styled tile-text">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        Upload files to server
                                                        <small>The files must be shared with all members of the board</small>
                                                    </span>
                                                </label>
                                            </div>
                                            <a class="btn btn-flat ink-reaction btn-default">
                                                <i class="md md-delete"></i>
                                            </a>
                                        </li>
                                        <li class="tile">
                                            <div class="checkbox checkbox-styled tile-text">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>Forward important tasks</span>
                                                </label>
                                            </div>
                                            <a class="btn btn-flat ink-reaction btn-default">
                                                <i class="md md-delete"></i>
                                            </a>
                                        </li>
                                        <li class="tile">
                                            <div class="checkbox checkbox-styled tile-text">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>Forward important tasks</span>
                                                </label>
                                            </div>
                                            <a class="btn btn-flat ink-reaction btn-default">
                                                <i class="md md-delete"></i>
                                            </a>
                                        </li>
                                        <li class="tile">
                                            <div class="checkbox checkbox-styled tile-text">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>Forward important tasks</span>
                                                </label>
                                            </div>
                                            <a class="btn btn-flat ink-reaction btn-default">
                                                <i class="md md-delete"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END TODOS -->
                        
                        <!-- BEGIN REGISTRATION HISTORY -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-head">
                                    <header>Registration history</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
                                        <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
                                        <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                                    </div>
                                </div><!--end .card-head -->
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        <div class="col-sm-6 hidden-xs">
                                            <div class="force-padding text-sm text-default-light">
                                                <p>
                                                    <i class="md md-mode-comment text-primary-light"></i>
                                                    The registrations are measured from the time that the redesign was fully implemented and after the first e-mailing.
                                                </p>
                                            </div>
                                        </div><!--end .col -->
                                        <div class="col-sm-6">
                                            <div class="force-padding pull-right text-default-light">
                                                <h2 class="no-margin text-primary-dark"><span class="text-xxl">66.05%</span></h2>
                                                <i class="fa fa-caret-up text-success fa-fw"></i> more registrations
                                            </div>
                                        </div><!--end .col -->
                                    </div><!--end .row -->
                                    <div class="stick-bottom-left-right force-padding">
                                        <div id="flot-registrations" class="flot height-5" data-title="Registration history" data-color="#0aa89e"></div>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END REGISTRATION HISTORY -->
                        
                        <!-- BEGIN NEW REGISTRATIONS -->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-head">
                                    <header>New registrations</header>
                                    <div class="tools hidden-md">
                                        <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                                    </div>
                                </div><!--end .card-head -->
                                <div class="card-body no-padding height-9 scroll">
                                    <ul class="list divider-full-bleed">
                                        <li class="tile">
                                            <div class="tile-content">
                                                <div class="tile-icon">
                                                    <img src="../../assets/img/modules/materialadmin/avatar9463a.jpg?1422538626" alt="" />
                                                </div>
                                                <div class="tile-text">Ann Laurens</div>
                                            </div>
                                            <a class="btn btn-flat ink-reaction">
                                                <i class="md md-block text-default-light"></i>
                                            </a>
                                        </li>
                                        <li class="tile">
                                            <div class="tile-content">
                                                <div class="tile-icon">
                                                    <img src="../../assets/img/modules/materialadmin/avatar42dba.jpg?1422538625" alt="" />
                                                </div>
                                                <div class="tile-text">Alex Nelson</div>
                                            </div>
                                            <a class="btn btn-flat ink-reaction">
                                                <i class="md md-block text-default-light"></i>
                                            </a>
                                        </li>
                                        <li class="tile">
                                            <div class="tile-content">
                                                <div class="tile-icon">
                                                    <img src="../../assets/img/modules/materialadmin/avatar114335.jpg?1422538623" alt="" />
                                                </div>
                                                <div class="tile-text">Mary Peterson</div>
                                            </div>
                                            <a class="btn btn-flat ink-reaction">
                                                <i class="md md-block text-default-light"></i>
                                            </a>
                                        </li>
                                        <li class="tile">
                                            <div class="tile-content">
                                                <div class="tile-icon">
                                                    <img src="../../assets/img/modules/materialadmin/avatar7463a.jpg?1422538626" alt="" />
                                                </div>
                                                <div class="tile-text">Philip Ericsson</div>
                                            </div>
                                            <a class="btn btn-flat ink-reaction">
                                                <i class="md md-block text-default-light"></i>
                                            </a>
                                        </li>
                                        <li class="tile">
                                            <div class="tile-content">
                                                <div class="tile-icon">
                                                    <img src="../../assets/img/modules/materialadmin/avatar8463a.jpg?1422538626" alt="" />
                                                </div>
                                                <div class="tile-text">Jim Peters</div>
                                            </div>
                                            <a class="btn btn-flat ink-reaction">
                                                <i class="md md-block text-default-light"></i>
                                            </a>
                                        </li>
                                        <li class="tile">
                                            <div class="tile-content">
                                                <div class="tile-icon">
                                                    <img src="../../assets/img/modules/materialadmin/avatar2666b.jpg?1422538624" alt="" />
                                                </div>
                                                <div class="tile-text">Jessica Cruise</div>
                                            </div>
                                            <a class="btn btn-flat ink-reaction">
                                                <i class="md md-block text-default-light"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END NEW REGISTRATIONS -->
                        
                    </div><!--end .row -->
                </div><!--end .section-body -->
            </section>

                </div><!--end #content-->       
                <!-- END CONTENT -->

                <!-- BEGIN MENUBAR-->
                <div id="menubar" class="menubar-inverse ">
                    <div class="menubar-fixed-panel">
                        <div>
                            <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <div class="expanded">
                            <a href="dashboard.html">
                                <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
                            </a>
                        </div>
                    </div>
                    <div class="menubar-scroll-panel">
                        <!-- BEGIN MAIN MENU -->
                        



        <ul id="main-menu" class="gui-controls">
            <!-- BEGIN DASHBOARD -->
            <li>
                <a href="dashboard.html" class="active">
                    <div class="gui-icon"><i class="md md-home"></i></div>
                    <span class="title">Dashboard</span>
                </a>
            </li><!--end /menu-li -->
            <!-- END DASHBOARD -->
            
            <!-- BEGIN EMAIL -->
            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><i class="md md-email"></i></div>
                    <span class="title">Email</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="../mail/inbox" ><span class="title">Inbox</span></a></li>

                    <li><a href="../mail/compose.html" ><span class="title">Compose</span></a></li>

                    <li><a href="../mail/reply.html" ><span class="title">Reply</span></a></li>

                    <li><a href="../mail/message.html" ><span class="title">View message</span></a></li>

                </ul><!--end /submenu -->
            </li><!--end /menu-li -->
            <!-- END EMAIL -->
            
            <!-- BEGIN DASHBOARD -->
            <li>
                <a href="../layouts/builder.html" >
                    <div class="gui-icon"><i class="md md-web"></i></div>
                    <span class="title">Layouts</span>
                </a>
            </li><!--end /menu-li -->
            <!-- END DASHBOARD -->
            
            <!-- BEGIN UI -->
            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>
                    <span class="title">UI elements</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="../ui/colors.html" ><span class="title">Colors</span></a></li>

                    <li><a href="../ui/typography.html" ><span class="title">Typography</span></a></li>

                    <li><a href="../ui/cards.html" ><span class="title">Cards</span></a></li>

                    <li><a href="../ui/buttons.html" ><span class="title">Buttons</span></a></li>

                    <li><a href="../ui/lists.html" ><span class="title">Lists</span></a></li>

                    <li><a href="../ui/tabs.html" ><span class="title">Tabs</span></a></li>

                    <li><a href="../ui/accordions.html" ><span class="title">Accordions</span></a></li>

                    <li><a href="../ui/messages.html" ><span class="title">Messages</span></a></li>

                    <li><a href="../ui/offcanvas.html" ><span class="title">Off-canvas</span></a></li>

                    <li><a href="../ui/grid.html" ><span class="title">Grid</span></a></li>

                    <li class="gui-folder">
                        <a href="javascript:void(0);">
                            <span class="title">Icons</span>
                        </a>
                        <!--start submenu -->
                        <ul>
                            <li><a href="../ui/icons/materialicons.html" ><span class="title">Material Design Icons</span></a></li>

                            <li><a href="../ui/icons/fontawesome.html" ><span class="title">Font Awesome</span></a></li>

                            <li><a href="../ui/icons/glyphicons.html" ><span class="title">Glyphicons</span></a></li>

                            <li><a href="../ui/icons/skycons.html" ><span class="title">Skycons</span></a></li>

                        </ul><!--end /submenu -->
                    </li><!--end /menu-li -->
                </ul><!--end /submenu -->
            </li><!--end /menu-li -->
            <!-- END UI -->
            
            <!-- BEGIN TABLES -->
            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><i class="fa fa-table"></i></div>
                    <span class="title">Tables</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="../tables/static.html" ><span class="title">Static Tables</span></a></li>

                    <li><a href="../tables/dynamic.html" ><span class="title">Dynamic Tables</span></a></li>

                    <li><a href="../tables/responsive.html" ><span class="title">Responsive Table</span></a></li>

                </ul><!--end /submenu -->
            </li><!--end /menu-li -->
            <!-- END TABLES -->
            
            <!-- BEGIN FORMS -->
            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
                    <span class="title">Forms</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="../forms/basic.html" ><span class="title">Form basic</span></a></li>

                    <li><a href="../forms/advanced.html" ><span class="title">Form advanced</span></a></li>

                    <li><a href="../forms/layouts.html" ><span class="title">Form layouts</span></a></li>

                    <li><a href="../forms/editors.html" ><span class="title">Editors</span></a></li>

                    <li><a href="../forms/validation.html" ><span class="title">Form validation</span></a></li>

                    <li><a href="../forms/wizard.html" ><span class="title">Form wizard</span></a></li>

                            </ul><!--end /submenu -->
            </li><!--end /menu-li -->
            <!-- END FORMS -->
            
            <!-- BEGIN PAGES -->
            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><i class="md md-computer"></i></div>
                    <span class="title">Pages</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li class="gui-folder">
                        <a href="javascript:void(0);">
                            <span class="title">Contacts</span>
                        </a>
                        <!--start submenu -->
                        <ul>
                            <li><a href="../pages/contacts/search.html" ><span class="title">Search</span></a></li>

                            <li><a href="../pages/contacts/details.html" ><span class="title">Contact card</span></a></li>

                            <li><a href="../pages/contacts/add.html" ><span class="title">Insert contact</span></a></li>

                        </ul><!--end /submenu -->
                    </li><!--end /menu-li -->
                    <li class="gui-folder">
                        <a href="javascript:void(0);">
                            <span class="title">Search</span>
                        </a>
                        <!--start submenu -->
                        <ul>
                            <li><a href="../pages/search/results-text.html" ><span class="title">Results - Text</span></a></li>

                            <li><a href="../pages/search/results-text-image.html" ><span class="title">Results - Text and Image</span></a></li>

                                            </ul><!--end /submenu -->
                    </li><!--end /menu-li -->
                    <li class="gui-folder">
                        <a href="javascript:void(0);">
                            <span class="title">Blog</span>
                        </a>
                        <!--start submenu -->
                        <ul>
                            <li><a href="../pages/blog/masonry.html" ><span class="title">Blog masonry</span></a></li>

                            <li><a href="../pages/blog/list.html" ><span class="title">Blog list</span></a></li>

                            <li><a href="../pages/blog/post.html" ><span class="title">Blog post</span></a></li>

                        </ul><!--end /submenu -->
                    </li><!--end /menu-li -->
                    <li class="gui-folder">
                        <a href="javascript:void(0);">
                            <span class="title">Error pages</span>
                        </a>
                        <!--start submenu -->
                        <ul>
                            <li><a href="../pages/404.html" ><span class="title">404 page</span></a></li>

                            <li><a href="../pages/500.html" ><span class="title">500 page</span></a></li>

                        </ul><!--end /submenu -->
                    </li><!--end /menu-li -->
                    <li><a href="../pages/profile.html" ><span class="title">User profile<span class="badge style-accent">42</span></span></a></li>

                    <li><a href="../pages/invoice.html" ><span class="title">Invoice</span></a></li>

                    <li><a href="../pages/calendar.html" ><span class="title">Calendar</span></a></li>

                    <li><a href="../pages/pricing.html" ><span class="title">Pricing</span></a></li>

                    <li><a href="../pages/timeline.html" ><span class="title">Timeline</span></a></li>

                    <li><a href="../pages/maps.html" ><span class="title">Maps</span></a></li>

                    <li><a href="../pages/locked.html" ><span class="title">Lock screen</span></a></li>

                    <li><a href="../pages/login.html" ><span class="title">Login</span></a></li>

                    <li><a href="../pages/blank.html" ><span class="title">Blank page</span></a></li>

                </ul><!--end /submenu -->
            </li><!--end /menu-li -->
            <!-- END FORMS -->
            
            <!-- BEGIN CHARTS -->
            <li>
                <a href="../charts/charts.html" >
                    <div class="gui-icon"><i class="md md-assessment"></i></div>
                    <span class="title">Charts</span>
                </a>
            </li><!--end /menu-li -->
            <!-- END CHARTS -->
            
            <!-- BEGIN LEVELS -->
            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><i class="fa fa-folder-open fa-fw"></i></div>
                    <span class="title">Menu levels demo</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="#"><span class="title">Item 1</span></a></li>
                    <li><a href="#"><span class="title">Item 1</span></a></li>
                    <li class="gui-folder">
                        <a href="javascript:void(0);">
                            <span class="title">Open level 2</span>
                        </a>
                        <!--start submenu -->
                        <ul>
                            <li><a href="#"><span class="title">Item 2</span></a></li>
                            <li class="gui-folder">
                                <a href="javascript:void(0);">
                                    <span class="title">Open level 3</span>
                                </a>
                                <!--start submenu -->
                                <ul>
                                    <li><a href="#"><span class="title">Item 3</span></a></li>
                                    <li><a href="#"><span class="title">Item 3</span></a></li>
                                    <li class="gui-folder">
                                        <a href="javascript:void(0);">
                                            <span class="title">Open level 4</span>
                                        </a>
                                        <!--start submenu -->
                                        <ul>
                                            <li><a href="#"><span class="title">Item 4</span></a></li>
                                            <li class="gui-folder">
                                                <a href="javascript:void(0);">
                                                    <span class="title">Open level 5</span>
                                                </a>
                                                <!--start submenu -->
                                                <ul>
                                                    <li><a href="#"><span class="title">Item 5</span></a></li>
                                                    <li><a href="#"><span class="title">Item 5</span></a></li>
                                                </ul><!--end /submenu -->
                                            </li><!--end /submenu-li -->
                                        </ul><!--end /submenu -->
                                    </li><!--end /submenu-li -->
                                </ul><!--end /submenu -->
                            </li><!--end /submenu-li -->
                        </ul><!--end /submenu -->
                    </li><!--end /submenu-li -->
                </ul><!--end /submenu -->
            </li><!--end /menu-li -->
            <!-- END LEVELS -->
            
        </ul><!--end .main-menu -->
                        <!-- END MAIN MENU -->

                        <div class="menubar-foot-panel">
                            <small class="no-linebreak hidden-folded">
                                <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
                            </small>
                        </div>
                    </div><!--end .menubar-scroll-panel-->
                </div><!--end #menubar-->
                <!-- END MENUBAR -->

                <!-- BEGIN OFFCANVAS RIGHT -->
                <div class="offcanvas">
                    


        <!-- BEGIN OFFCANVAS SEARCH -->
        <div id="offcanvas-search" class="offcanvas-pane width-8">
            <div class="offcanvas-head">
                <header class="text-primary">Search</header>
                <div class="offcanvas-tools">
                    <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                        <i class="md md-close"></i>
                    </a>
                </div>
            </div>

            <div class="offcanvas-body no-padding">
                <ul class="list ">
                    <li class="tile divider-full-bleed">
                        <div class="tile-content">
                            <div class="tile-text"><strong>A</strong></div>
                        </div>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/modules/materialadmin/avatar42dba.jpg?1422538625" alt="" />
                            </div>
                            <div class="tile-text">
                                Alex Nelson
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/modules/materialadmin/avatar9463a.jpg?1422538626" alt="" />
                            </div>
                            <div class="tile-text">
                                Ann Laurens
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile divider-full-bleed">
                        <div class="tile-content">
                            <div class="tile-text"><strong>J</strong></div>
                        </div>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/modules/materialadmin/avatar2666b.jpg?1422538624" alt="" />
                            </div>
                            <div class="tile-text">
                                Jessica Cruise
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/modules/materialadmin/avatar8463a.jpg?1422538626" alt="" />
                            </div>
                            <div class="tile-text">
                                Jim Peters
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile divider-full-bleed">
                        <div class="tile-content">
                            <div class="tile-text"><strong>M</strong></div>
                        </div>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/modules/materialadmin/avatar52dba.jpg?1422538625" alt="" />
                            </div>
                            <div class="tile-text">
                                Mabel Logan
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/modules/materialadmin/avatar114335.jpg?1422538623" alt="" />
                            </div>
                            <div class="tile-text">
                                Mary Peterson
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/modules/materialadmin/avatar3666b.jpg?1422538624" alt="" />
                            </div>
                            <div class="tile-text">
                                Mike Alba
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile divider-full-bleed">
                        <div class="tile-content">
                            <div class="tile-text"><strong>N</strong></div>
                        </div>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/modules/materialadmin/avatar6463a.jpg?1422538626" alt="" />
                            </div>
                            <div class="tile-text">
                                Nathan Peterson
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile divider-full-bleed">
                        <div class="tile-content">
                            <div class="tile-text"><strong>P</strong></div>
                        </div>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/modules/materialadmin/avatar7463a.jpg?1422538626" alt="" />
                            </div>
                            <div class="tile-text">
                                Philip Ericsson
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile divider-full-bleed">
                        <div class="tile-content">
                            <div class="tile-text"><strong>S</strong></div>
                        </div>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/modules/materialadmin/avatar104335.jpg?1422538623" alt="" />
                            </div>
                            <div class="tile-text">
                                Samuel Parsons
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                </ul>
            </div><!--end .offcanvas-body -->
        </div><!--end .offcanvas-pane -->
        <!-- END OFFCANVAS SEARCH -->

                    


        <!-- BEGIN OFFCANVAS CHAT -->
        <div id="offcanvas-chat" class="offcanvas-pane style-default-light width-12">
            <div class="offcanvas-head style-default-bright">
                <header class="text-primary">Chat with Ann Laurens</header>
                <div class="offcanvas-tools">
                    <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                        <i class="md md-close"></i>
                    </a>
                    <a class="btn btn-icon-toggle btn-default-light pull-right" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                        <i class="md md-arrow-back"></i>
                    </a>
                </div>
                <form class="form">
                    <div class="form-group floating-label">
                        <textarea name="sidebarChatMessage" id="sidebarChatMessage" class="form-control autosize" rows="1"></textarea>
                        <label for="sidebarChatMessage">Leave a message</label>
                    </div>
                </form>
            </div>

            <div class="offcanvas-body">
                <ul class="list-chats">
                    <li>
                        <div class="chat">
                            <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar14335.jpg?1422538623" alt="" /></div>
                            <div class="chat-body">
                                Yes, it is indeed very beautiful.
                                <small>10:03 pm</small>
                            </div>
                        </div><!--end .chat -->
                    </li>
                    <li class="chat-left">
                        <div class="chat">
                            <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar9463a.jpg?1422538626" alt="" /></div>
                            <div class="chat-body">
                                Did you see the changes?
                                <small>10:02 pm</small>
                            </div>
                        </div><!--end .chat -->
                    </li>
                    <li>
                        <div class="chat">
                            <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar14335.jpg?1422538623" alt="" /></div>
                            <div class="chat-body">
                                I just arrived at work, it was quite busy.
                                <small>06:44pm</small>
                            </div>
                            <div class="chat-body">
                                I will take look in a minute.
                                <small>06:45pm</small>
                            </div>
                        </div><!--end .chat -->
                    </li>
                    <li class="chat-left">
                        <div class="chat">
                            <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar9463a.jpg?1422538626" alt="" /></div>
                            <div class="chat-body">
                                The colors are much better now.
                            </div>
                            <div class="chat-body">
                                The colors are brighter than before.
                                I have already sent an example.
                                This will make it look sharper.
                                <small>Mon</small>
                            </div>
                        </div><!--end .chat -->
                    </li>
                    <li>
                        <div class="chat">
                            <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar14335.jpg?1422538623" alt="" /></div>
                            <div class="chat-body">
                                Are the colors of the logo already adapted?
                                <small>Last week</small>
                            </div>
                        </div><!--end .chat -->
                    </li>
                </ul>
            </div><!--end .offcanvas-body -->
        </div><!--end .offcanvas-pane -->
        <!-- END OFFCANVAS CHAT -->

                            </div><!--end .offcanvas-->
                <!-- END OFFCANVAS RIGHT -->

            </div><!--end #base-->  
            <!-- END BASE -->
        {!!HTML::script('assets/js/modules/materialadmin/libs/jquery/jquery-1.11.2.min.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/libs/jquery/jquery-migrate-1.2.1.min.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/libs/bootstrap/bootstrap.min.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/libs/spin.js/spin.min.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/libs/autosize/jquery.autosize.min.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/libs/moment/moment.min.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/core/cache/ec2c8835c9f9fbb7b8cd36464b491e73.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/libs/jquery-knob/jquery.knob.min.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/libs/sparkline/jquery.sparkline.min.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/libs/nanoscroller/jquery.nanoscroller.min.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/core/cache/43ef607ee92d94826432d1d6f09372e1.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/libs/rickshaw/rickshaw.min.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/core/cache/63d0445130d69b2868a8d28c93309746.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/core/demo/Demo.js')!!}
        {!!HTML::script('assets/js/modules/materialadmin/core/demo/DemoDashboard.js')!!}
    </body>
</html>
