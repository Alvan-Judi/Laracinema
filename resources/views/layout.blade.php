<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- TITLE -->
        <title>Laracinema - Admin </title>

        <!-- LINKS -->
            <!-- Font CSS (Via CDN) -->
            <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

            <!-- FullCalendar Plugin CSS -->
            <link rel="stylesheet" type="text/css" href="{{asset('vendor/plugins/fullcalendar/fullcalendar.min.css')}}">

            <!-- Theme CSS -->
            <link rel="stylesheet" type="text/css" href="{{asset('assets/skin/default_skin/css/theme.css')}}">

            <!-- Admin Forms CSS -->
            <link rel="stylesheet" type="text/css" href="{{asset('assets/admin-tools/admin-forms/css/admin-forms.min.css')}}">

            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">

            <!-- Favicon -->
            <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">

    </head>
    <body class="dashboard-page">

    <div id="main">
        <header class="navbar navbar-fixed-top navbar-shadow">
            <div class="navbar-branding">
                <a class="navbar-brand" href="{{route('homepage')}}">
                    <b>Dashboard</b> Laracinema
                </a>
                <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
            </div>
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown menu-merge hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                        <span class="caret caret-tp"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="hidden-xs">
                    <a class="request-fullscreen toggle-active" href="#">
                        <span class="ad ad-screen-full fs18"></span>
                    </a>
                </li>
            </ul>
            <form class="navbar-form navbar-left navbar-search alt" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search..." value="Search...">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="navbar-btn btn-group">
                        <a href="#" class="topbar-menu-toggle btn btn-sm" data-toggle="button">
                            <span class="ad ad-wand"></span>
                        </a>
                    </div>
                </li>
                <li class="dropdown menu-merge">
                    <div class="navbar-btn btn-group">
                        <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                            <span class="fa fa-bell-o fs14 va-m"></span>
                            <span class="badge badge-danger" id="recentActivityNb">{{count(session('movies_id',[]))}}</span>
                        </button>
                        <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">
                            <div class="panel mbn">
                                <div class="panel-menu">
                                    <span class="panel-icon"><i class="fa fa-clock-o"></i></span>
                                    <span class="panel-title fw600"> Recent Activity</span>
                                    <button class="btn btn-default light btn-xs pull-right" type="button"><i class="fa fa-refresh"></i></button>
                                </div>
                                <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">
                                    <ol class="timeline-list">
                                        @foreach(session('movies_id',[]) as $id => $movies)
                                        <li class="timeline-item">
                                            <div class="timeline-icon bg-dark light">
                                                <span class="fa fa-heart text-danger"></span>
                                            </div>
                                            <div class="timeline-desc">
                                                <b>Movies</b> Added as favorite
                                                <a href="{{route('see_movies', ['id' => $id])}}">{{$movies}}</a>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ol>

                                </div>
                                <div class="panel-footer text-center p7">
                                    <a href="#" class="link-unstyled"> View All </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown menu-merge">
                    <div class="navbar-btn btn-group">
                        <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                            <span class="ad ad-radio-tower fs14 va-m"></span>
                            <span class="badge">5</span>
                        </button>
                        <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">
                            <div class="panel mbn">
                                <div class="panel-menu">
                                    <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                                        <a href="#nav-tab1" data-toggle="tab" class="btn btn-default btn-sm active">Notifications</a>
                                        <a href="#nav-tab2" data-toggle="tab" class="btn btn-default btn-sm br-l-n br-r-n">Messages</a>
                                        <a href="#nav-tab3" data-toggle="tab" class="btn btn-default btn-sm">Activity</a>
                                    </div>
                                </div>
                                <div class="panel-body panel-scroller scroller-navbar pn">
                                    <div class="tab-content br-n pn">
                                        <div id="nav-tab1" class="tab-pane alerts-widget active" role="tabpanel">
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="glyphicon glyphicon-user text-info"></span> </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New Registration
                                                        <small class="text-muted"></small>
                                                    </h5> Tyler Durden - 16 hours ago

                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-xs light">
                                                            <i class="fa fa-check text-success"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-xs light">
                                                            <i class="fa fa-remove"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="glyphicon glyphicon-shopping-cart text-success"></span> </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New Order
                                                        <small class="text-muted"></small>
                                                    </h5> <a href="#">Apple Ipod</a> - 4 hours ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Confirm?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-xs light">
                                                            <i class="fa fa-check text-success"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-xs light">
                                                            <i class="fa fa-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="glyphicon glyphicon-comment text-system"></span> </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New Comment
                                                        <small class="text-muted"></small>
                                                    </h5> Mike - I loved your article!
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response text-right"> Moderate?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-xs light">
                                                            <i class="fa fa-pencil"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-xs light">
                                                            <i class="fa fa-check text-success"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="glyphicon glyphicon-star text-warning"></span> </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New Review
                                                        <small class="text-muted"></small>
                                                    </h5> Sammy Hilton - 4 hours ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-xs light">
                                                            <i class="fa fa-check text-success"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-xs light">
                                                            <i class="fa fa-remove"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="glyphicon glyphicon-user text-info"></span> </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New Registration
                                                        <small class="text-muted"></small>
                                                    </h5> Michael Sober - 7 hours ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-xs light">
                                                            <i class="fa fa-check text-success"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-xs light">
                                                            <i class="fa fa-remove"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="glyphicon glyphicon-usd text-alert"></span> </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New Invoice
                                                        <small class="text-muted"></small>
                                                    </h5> <a href="#">Apple Ipod</a> - 4 hours ago

                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response single">#518358</div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="glyphicon glyphicon-shopping-cart text-success"></span> </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New Order
                                                        <small class="text-muted"></small>
                                                    </h5> <a href="#">Apple Ipod</a> - 4 hours ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Confirm?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-xs light">
                                                            <i class="fa fa-check text-success"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-xs light">
                                                            <i class="fa fa-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="nav-tab2" class="tab-pane chat-widget" role="tabpanel">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="assets/img/avatars/3.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-status online"></span>
                                                    <h5 class="media-heading">Courtney Faught
                                                        <small> - 12:30am</small>
                                                    </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="media-status offline"></span>
                                                    <h5 class="media-heading">Joe Gibbons
                                                        <small> - 12:30am</small>
                                                    </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                                                </div>
                                                <div class="media-right">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="assets/img/avatars/1.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="assets/img/avatars/2.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-status online"></span>
                                                    <h5 class="media-heading">Courtney Faught
                                                        <small> - 12:30am</small>
                                                    </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metuscommodo.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="media-status offline"></span>
                                                    <h5 class="media-heading">Joe Gibbons
                                                        <small> - 12:30am</small>
                                                    </h5> Cras sit amet nibh libero, in Nulla vel metus scelerisque antecommodo.
                                                </div>
                                                <div class="media-right">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="assets/img/avatars/1.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="assets/img/avatars/2.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-status online"></span>
                                                    <h5 class="media-heading">Courtney Faught
                                                        <small> - 12:30am</small>
                                                    </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque soltudino.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="media-status offline"></span>
                                                    <h5 class="media-heading">Joe Gibbons
                                                        <small> - 12:30am</small>
                                                    </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                                                </div>
                                                <div class="media-right">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="assets/img/avatars/1.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="nav-tab3" class="tab-pane scroller-nm" role="tabpanel">
                                            <ul class="media-list" role="menu">
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Article
                                                            <small class="text-muted">- 08/16/22</small>
                                                        </h5> Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading mv5">Article
                                                            <small> - 08/16/22</small>
                                                        </h5>
                                                        Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Article
                                                            <small class="text-muted">- 08/16/22</small>
                                                        </h5> Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="assets/img/avatars/4.jpg" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading mv5">Article
                                                            <small class="text-muted">- 08/16/22</small>
                                                        </h5> Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Article
                                                            <small class="text-muted">- 08/16/22</small>
                                                        </h5> Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading mv5">Article
                                                            <small> - 08/16/22</small>
                                                        </h5>
                                                        Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Article
                                                            <small class="text-muted">- 08/16/22</small>
                                                        </h5> Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <table class="table table-striped hidden">
                                                <thead>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr>
                                                    <td>Sussy</td>
                                                    <td>Watcher</td>
                                                    <td>@thehawk</td>
                                                </tr>
                                                <tr>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>Sussy</td>
                                                    <td>Watcher</td>
                                                    <td>@thehawk</td>
                                                </tr>
                                                <tr>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr>
                                                    <td>Sussy</td>
                                                    <td>Watcher</td>
                                                    <td>@thehawk</td>
                                                </tr>
                                                <tr>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-center p7">
                                    <a href="#" class="link-unstyled"> View All </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown menu-merge">
                    <div class="navbar-btn btn-group">
                        <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                            <span class="flag-xs flag-us"></span>
                            <!-- <span class="caret"></span> -->
                        </button>
                        <ul class="dropdown-menu pv5 animated animated-short flipInX" role="menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="flag-xs flag-in mr10"></span> Hindu </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="flag-xs flag-tr mr10"></span> Turkish </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="flag-xs flag-es mr10"></span> Spanish </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-divider hidden-xs">
                    <i class="fa fa-circle"></i>
                </li>
                <li class="dropdown menu-merge">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
                        <img src="assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64">
                        <span class="hidden-xs pl15"> Michael .R </span>
                        <span class="caret caret-tp hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
                        <li class="dropdown-header clearfix">
                            <div class="pull-left ml10">
                                <select id="user-status">
                                    <optgroup label="Current Status:">
                                        <option value="1-1">Away</option>
                                        <option value="1-2">Offline</option>
                                        <option value="1-3" selected="selected">Online</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="pull-right mr10">
                                <select id="user-role">
                                    <optgroup label="Logged in As:">
                                        <option value="1-1">Client</option>
                                        <option value="1-2">Editor</option>
                                        <option value="1-3" selected="selected">Admin</option>
                                    </optgroup>
                                </select>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="animated animated-short fadeInUp">
                                <span class="fa fa-envelope"></span> Messages
                                <span class="label label-warning">2</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="animated animated-short fadeInUp">
                                <span class="fa fa-user"></span> Friends
                                <span class="label label-warning">6</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="animated animated-short fadeInUp">
                                <span class="fa fa-bell"></span> Notifications </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="animated animated-short fadeInUp">
                                <span class="fa fa-gear"></span> Settings </a>
                        </li>
                        <li class="dropdown-footer">
                            <a href="#" class="">
                                <span class="fa fa-power-off pr5"></span> Logout </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>

        <!-----------------------------------------------------------------+
       "#sidebar_left" Helper Classes:
    -------------------------------------------------------------------+
       * Positioning Classes:
        '.affix' - Sets Sidebar Left to the fixed position

       * Available Skin Classes:
         .sidebar-dark (default no class needed)
         .sidebar-light
         .sidebar-light.light
    -------------------------------------------------------------------+
       Example: <aside id="sidebar_left" class="affix sidebar-light">
       Results: Fixed Left Sidebar with light/white background
    ------------------------------------------------------------------->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-light affix">

            <!-- Start: Sidebar Left Content -->
            <div class="sidebar-left-content nano-content">

                <!-- Start: Sidebar Header -->
                <header class="sidebar-header">

                    <!-- Sidebar Widget - Author -->
                    <div class="sidebar-widget author-widget">
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="assets/img/avatars/3.jpg" class="img-responsive">
                            </a>
                            <div class="media-body">
                                <div class="media-links">
                                    <a href="#" class="sidebar-menu-toggle">User Menu -</a> <a href="pages_login(alt).html">Logout</a>
                                </div>
                                <div class="media-author">Alvan</div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Widget - Menu (slidedown) -->
                    <div class="sidebar-widget menu-widget">
                        <div class="row text-center mbn">
                            <div class="col-xs-4">
                                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                                    <span class="glyphicon glyphicon-inbox"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                                    <span class="glyphicon glyphicon-bell"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                                    <span class="fa fa-desktop"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                                    <span class="fa fa-gears"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                                    <span class="fa fa-flask"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Widget - Search (hidden) -->
                    <div class="sidebar-widget search-widget hidden">
                        <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
                            <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
                        </div>
                    </div>

                </header>
                <!-- End: Sidebar Header -->

                <!-- Start: Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">Menu</li>
                    <li>
                        <a class="accordion-toggle menu-open" href="#">
                            <span class="fa fa-film"></span>
                            <span class="sidebar-title">Movies</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav" style="display: none;">
                            <li>
                                <a href="{{route('list_movies')}}">
                                    <span class="fa fa-list"></span> List</a>
                            </li>
                            <li>
                                <a href="{{route('create_movies')}}">
                                    <span class="fa fa-plus text-success"></span> Create</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-open" href="{{route('chat')}}">
                            <span class="fa fa-comment"></span>
                            <span class="sidebar-title">Chat</span>
                        </a>
                    </li>


                    <!-- sidebar progress bars -->
                    <li class="sidebar-label pt25 pb10">User Stats</li>
                    <li class="sidebar-stat">
                        <a href="#projectOne" class="fs11">
                            <span class="fa fa-inbox text-info"></span>
                            <span class="sidebar-title text-muted">Admin Beauty</span>
                            <span class="pull-right mr20 text-muted">95%</span>
                            <div class="progress progress-bar-xs mh20 mb10">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                    <span class="sr-only">95%</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="sidebar-stat">
                        <a href="#projectOne" class="fs11">
                            <span class="fa fa-dropbox text-warning"></span>
                            <span class="sidebar-title text-muted">Level of Awesomness</span>
                            <span class="pull-right mr20 text-muted">100%</span>
                            <div class="progress progress-bar-xs mh20">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    <span class="sr-only">Amazing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- End: Sidebar Menu -->

                <!-- Start: Sidebar Collapse Button -->
                <div class="sidebar-toggle-mini">
                    <a href="#">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </div>
                <!-- End: Sidebar Collapse Button -->

            </div>
            <!-- End: Sidebar Left Content -->

        </aside>
        <!-- End: Sidebar Left -->


        <section id="content_wrapper">
            @section('content')

            @show
        </section>

        <!-- Start: Right Sidebar -->
        <aside id="sidebar_right" class="nano affix">

            <!-- Start: Sidebar Right Content -->
            <div class="sidebar-right-content nano-content">

                <div class="tab-block sidebar-block br-n">
                    <ul class="nav nav-tabs tabs-border nav-justified hidden">
                        <li class="active">
                            <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                        </li>
                    </ul>
                    <div class="tab-content br-n">
                        <div id="sidebar-right-tab1" class="tab-pane active">

                            <h5 class="title-divider text-muted mb20"> Server Statistics
                <span class="pull-right"> 2013
                  <i class="fa fa-caret-down ml5"></i>
                </span>
                            </h5>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                    <span class="fs11">DB Request</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                    <span class="fs11 text-left">Server Load</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                    <span class="fs11 text-left">Server Connections</span>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">132</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn">
                                        <i class="fa fa-caret-up"></i> 13.2% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">212</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn">
                                        <i class="fa fa-caret-up"></i> 25.6% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">82.5</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-danger mn">
                                        <i class="fa fa-caret-down"></i> 17.9% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt40 mb20"> Server Statistics
                                <span class="pull-right text-primary fw600">USA</span>
                            </h5>


                        </div>
                        <div id="sidebar-right-tab2" class="tab-pane"></div>
                        <div id="sidebar-right-tab3" class="tab-pane"></div>
                    </div>
                    <!-- end: .tab-content -->
                </div>
            </div>
        </aside>
        <!-- End: Right Sidebar -->


    </div>
    <!--END MAIN -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

    <!-- HighCharts Plugin -->
    <script src="{{asset('vendor/plugins/highcharts/highcharts.js')}}"></script>

    <!-- JvectorMap Plugin + US Map (more maps in plugin/assets folder) -->
    <script src="{{asset('vendor/plugins/jvectormap/jquery.jvectormap.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js')}}"></script>

    <!-- Bootstrap Tabdrop Plugin -->
    <script src="{{asset('vendor/plugins/tabdrop/bootstrap-tabdrop.js')}}"></script>

    <!-- FullCalendar Plugin + moment Dependency -->
    <script src="{{asset('vendor/plugins/fullcalendar/lib/moment.min.js')}}"></script>
    <script src="{{asset('vendor/plugins/fullcalendar/fullcalendar.min.js')}}"></script>

    <!-- Theme Javascript -->
    <script src="{{asset('assets/js/utility/utility.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <!-- Widget Javascript -->
    <script src="{{asset('assets/js/demo/widgets.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";




            // Init Theme Core
            Core.init();


            // Init Widget Demo JS
            // demoHighCharts.init();

            // Because we are using Admin Panels we use the OnFinish
            // callback to activate the demoWidgets. It's smoother if
            // we let the panels be moved and organized before
            // filling them with content from various plugins

            // Init plugins used on this page
            // HighCharts, JvectorMap, Admin Panels

            // Init Admin Panels on widgets inside the ".admin-panels" container
            $('.admin-panels').adminpanel({
                grid: '.admin-grid',
                draggable: true,
                preserveGrid: true,
                // mobile: true,
                onStart: function() {
                    // Do something before AdminPanels runs
                },
                onFinish: function() {
                    $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                    // Init the rest of the plugins now that the panels
                    // have had a chance to be moved and organized.
                    // It's less taxing to organize empty panels
                    demoHighCharts.init();
                    runVectorMaps(); // function below
                },
                onSave: function() {
                    $(window).trigger('resize');
                }
            });


            // Init plugins for ".calendar-widget"
            // plugins: FullCalendar
            //
            $('#calendar-widget').fullCalendar({
                // contentHeight: 397,
                editable: true,
                events: [{
                    title: 'Sony Meeting',
                    start: '2015-05-1',
                    end: '2015-05-3',
                    className: 'fc-event-success',
                }, {
                    title: 'Conference',
                    start: '2015-05-11',
                    end: '2015-05-13',
                    className: 'fc-event-warning'
                }, {
                    title: 'Lunch Testing',
                    start: '2015-05-21',
                    end: '2015-05-23',
                    className: 'fc-event-primary'
                },
                ],
                eventRender: function(event, element) {
                    // create event tooltip using bootstrap tooltips
                    $(element).attr("data-original-title", event.title);
                    $(element).tooltip({
                        container: 'body',
                        delay: {
                            "show": 100,
                            "hide": 200
                        }
                    });
                    // create a tooltip auto close timer
                    $(element).on('show.bs.tooltip', function() {
                        var autoClose = setTimeout(function() {
                            $('.tooltip').fadeOut();
                        }, 3500);
                    });
                }
            });


            // Init plugins for ".task-widget"
            // plugins: Custom Functions + jQuery Sortable
            //
            var taskWidget = $('div.task-widget');
            var taskItems = taskWidget.find('li.task-item');
            var currentItems = taskWidget.find('ul.task-current');
            var completedItems = taskWidget.find('ul.task-completed');

            // Init jQuery Sortable on Task Widget
            taskWidget.sortable({
                items: taskItems, // only init sortable on list items (not labels)
                handle: '.task-menu',
                axis: 'y',
                connectWith: ".task-list",
                update: function( event, ui ) {
                    var Item = ui.item;
                    var ParentList = Item.parent();

                    // If item is already checked move it to "current items list"
                    if (ParentList.hasClass('task-current')) {
                        Item.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
                    }
                    if (ParentList.hasClass('task-completed')) {
                        Item.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
                    }

                }
            });

            // Custom Functions to handle/assign list filter behavior
            taskItems.on('click', function(e) {
                e.preventDefault();
                var This = $(this);
                var Target = $(e.target);

                if (Target.is('.task-menu') && Target.parents('.task-completed').length) {
                    This.remove();
                    return;
                }

                if (Target.parents('.task-handle').length) {
                    // If item is already checked move it to "current items list"
                    if (This.hasClass('item-checked')) {
                        This.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
                    }
                    // Otherwise move it to the "completed items list"
                    else {
                        This.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
                    }
                }

            });


            var highColors = [bgSystem, bgSuccess, bgWarning, bgPrimary];

            // Chart data
            var seriesData = [{
                name: 'Phones',
                data: [5.0, 9, 17, 22, 19, 11.5, 5.2, 9.5, 11.3, 15.3, 19.9, 24.6]
            }, {
                name: 'Notebooks',
                data: [2.9, 3.2, 4.7, 5.5, 8.9, 12.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }, {
                name: 'Desktops',
                data: [15, 19, 22.7, 29.3, 22.0, 17.0, 23.8, 19.1, 22.1, 14.1, 11.6, 7.5]
            }, {
                name: 'Music Players',
                data: [11, 6, 5, 15, 17.0, 22.0, 30.8, 24.1, 14.1, 11.1, 9.6, 6.5]
            }];

            var ecomChart = $('#ecommerce_chart1');
            if (ecomChart.length) {
                ecomChart.highcharts({
                    credits: false,
                    colors: highColors,
                    chart: {
                        backgroundColor: 'transparent',
                        className: '',
                        type: 'line',
                        zoomType: 'x',
                        panning: true,
                        panKey: 'shift',
                        marginTop: 45,
                        marginRight: 1,
                    },
                    title: {
                        text: null
                    },
                    xAxis: {
                        gridLineColor: '#EEE',
                        lineColor: '#EEE',
                        tickColor: '#EEE',
                        categories: ['Jan', 'Feb', 'Mar', 'Apr',
                            'May', 'Jun', 'Jul', 'Aug',
                            'Sep', 'Oct', 'Nov', 'Dec'
                        ]
                    },
                    yAxis: {
                        min: 0,
                        tickInterval: 5,
                        gridLineColor: '#EEE',
                        title: {
                            text: null,
                        }
                    },
                    plotOptions: {
                        spline: {
                            lineWidth: 3,
                        },
                        area: {
                            fillOpacity: 0.2
                        }
                    },
                    legend: {
                        enabled: true,
                        floating: false,
                        align: 'right',
                        verticalAlign: 'top',
                        x: -15
                    },
                    series: seriesData
                });
            }

            // Widget VectorMap
            function runVectorMaps() {

                // Jvector Map Plugin
                var runJvectorMap = function() {
                    // Data set
                    var mapData = [900, 700, 350, 500];
                    // Init Jvector Map
                    $('#WidgetMap').vectorMap({
                        map: 'us_lcc_en',
                        //regionsSelectable: true,
                        backgroundColor: 'transparent',
                        series: {
                            markers: [{
                                attribute: 'r',
                                scale: [3, 7],
                                values: mapData
                            }]
                        },
                        regionStyle: {
                            initial: {
                                fill: '#E8E8E8'
                            },
                            hover: {
                                "fill-opacity": 0.3
                            }
                        },
                        markers: [{
                            latLng: [37.78, -122.41],
                            name: 'San Francisco,CA'
                        }, {
                            latLng: [36.73, -103.98],
                            name: 'Texas,TX'
                        }, {
                            latLng: [38.62, -90.19],
                            name: 'St. Louis,MO'
                        }, {
                            latLng: [40.67, -73.94],
                            name: 'New York City,NY'
                        }],
                        markerStyle: {
                            initial: {
                                fill: '#a288d5',
                                stroke: '#b49ae0',
                                "fill-opacity": 1,
                                "stroke-width": 10,
                                "stroke-opacity": 0.3,
                                r: 3
                            },
                            hover: {
                                stroke: 'black',
                                "stroke-width": 2
                            },
                            selected: {
                                fill: 'blue'
                            },
                            selectedHover: {}
                        },
                    });
                    // Manual code to alter the Vector map plugin to
                    // allow for individual coloring of countries
                    var states = ['US-CA', 'US-TX', 'US-MO',
                        'US-NY'
                    ];
                    var colors = [bgInfo, bgPrimaryLr, bgSuccessLr, bgWarningLr];
                    var colors2 = [bgInfo, bgPrimary, bgSuccess, bgWarning];
                    $.each(states, function(i, e) {
                        $("#WidgetMap path[data-code=" + e + "]").css({
                            fill: colors[i]
                        });
                    });
                    $('#WidgetMap').find('.jvectormap-marker')
                            .each(function(i, e) {
                                $(e).css({
                                    fill: colors2[i],
                                    stroke: colors2[i]
                                });
                            });
                }

                if ($('#WidgetMap').length) {
                    runJvectorMap();
                }
            }

        });
    </script>
    <!-- END: PAGE SCRIPTS -->
    </body>
</html>