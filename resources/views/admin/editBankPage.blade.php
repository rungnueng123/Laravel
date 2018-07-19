@extends('admin.layout.profile')

@section('toolbar')
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">


            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('am/public/index.html')}}" class="navbar-brand"><img
                            src="{{url('am/public/assets/img/logo.png')}}" alt=""></a>

            </header>


            <div class="topnav">
                <div class="btn-group">
                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                       class="btn btn-default btn-sm" id="toggleFullScreen">
                        <i class="glyphicon glyphicon-fullscreen"></i>
                    </a>
                </div>
                <div class="btn-group">
                    <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                       class="btn btn-default btn-sm">
                        <i class="fa fa-envelope"></i>
                        <span class="label label-warning">5</span>
                    </a>
                    <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                       class="btn btn-default btn-sm">
                        <i class="fa fa-comments"></i>
                        <span class="label label-danger">4</span>
                    </a>
                    <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                       class="btn btn-default btn-sm"
                       href="#helpModal">
                        <i class="fa fa-question"></i>
                    </a>
                </div>
                <div class="btn-group">
                    <a href="{{url('am/public/login.html')}}" data-toggle="tooltip" data-original-title="Logout"
                       data-placement="bottom"
                       class="btn btn-metis-1 btn-sm">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
                <div class="btn-group">
                    <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                       class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a href="#right" data-toggle="onoffcanvas" class="btn btn-default btn-sm" aria-expanded="false">
                        <span class="fa fa-fw fa-comment"></span>
                    </a>
                </div>

            </div>


            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <!-- .nav -->
                <ul class="nav navbar-nav">
                    <li><a href="{{url('am/public/dashboard.html')}}">Dashboard</a></li>
                    <li><a href="{{url('am/public/table.html')}}">Tables</a></li>
                    <li class='dropdown '>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Form Elements <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('am/public/form-general.html')}}">General</a></li>
                            <li><a href="{{url('am/public/form-validation.html')}}">Validation</a></li>
                            <li><a href="{{url('am/public/form-wysiwyg.html')}}">WYSIWYG</a></li>
                            <li><a href="{{url('am/public/form-wizard.html')}}">Wizard &amp; File Upload</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.nav -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
@endsection

@section('head')
    <header class="head">
        <div class="search-bar">
            <form class="main-search" action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Live Search ...">
                    <span class="input-group-btn">
                                                    <button class="btn btn-primary btn-sm text-muted" type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                </div>
            </form>
            <!-- /.main-search -->                                </div>
        <!-- /.search-bar -->
        <div class="main-bar">
            <h3>
                <i class="fa fa-home"></i>&nbsp;
                Metissss
            </h3>
        </div>
        <!-- /.main-bar -->
    </header>
@endsection

@section('menu')
    <div id="left">
        <div class="media user-media bg-dark dker">
            <div class="user-media-toggleHover">
                <span class="fa fa-user"></span>
            </div>
            <div class="user-wrapper bg-dark">
                <a class="user-link" href="">
                    <img class="media-object img-thumbnail user-img" alt="User Picture"
                         src="{{url('am/public/assets/img/user.gif')}}">
                    <span class="label label-danger user-label">16</span>
                </a>

                <div class="media-body">
                    <h5 class="media-heading">Archie</h5>
                    <ul class="list-unstyled user-info">
                        <li><a href="">Administrator</a></li>
                        <li>Last Access : <br>
                            <small><i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #menu -->
        <ul id="menu" class="bg-blue dker">
            <li class="nav-header">Menu</li>
            <li class="nav-divider"></li>
            <li class="">
                <a href="{{url('am/public/dashboard.html')}}">
                    <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-building "></i>
                    <span class="link-title">Layouts</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="{{url('am/public/boxed.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/fixed-header-boxed.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Header </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/fixed-header-fixed-mini-sidebar.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Fixed Header and Fixed Mini Menu </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/fixed-header-menu.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Menu </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/fixed-header-mini-sidebar.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Mini Menu </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/fixed-header.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Fixed Header </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/fixed-menu-boxed.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Menu </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/fixed-menu.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Fixed Menu </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/fixed-mini-sidebar.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Fixed &amp; Mini Menu </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/fxhmoxed.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Boxed and Fixed Header &amp; Nav </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/no-header-sidebar.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; No Header &amp; Sidebars </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/no-header.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; No Header </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/no-left-right-sidebar.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; No Left &amp; Right Sidebar </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/no-left-sidebar-main-search.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar &amp; Main Search </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/no-left-sidebar.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/no-main-search.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; No Main Search </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/no-right-sidebar.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; No Right Sidebar </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/sm.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Mini Sidebar </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span class="link-title">Components</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="{{url('am/public/bgcolor.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Bg Color </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/bgimage.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Bg Image </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/button.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Buttons </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/icon.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Icon </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/pricing.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Pricing Table </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/progress.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Progress </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-pencil"></i>
                    <span class="link-title">
                                        Forms
                                  </span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="{{url('am/public/form-general.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Form General </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/form-validation.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Form Validation </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/form-wizard.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Form Wizard </a>
                    </li>
                    <li>
                        <a href="{{url('am/public/form-wysiwyg.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp; Form WYSIWYG </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('am/public/table.html')}}">
                    <i class="fa fa-table"></i>
                    <span class="link-title">Tables</span>
                </a>
            </li>
            <li>
                <a href="{{url('am/public/typography.html')}}">
                    <i class="fa fa-font"></i>
                    <span class="link-title">
                                        Typography
                                      </span> </a>
            </li>
            <li>
                <a href="{{url('am/public/maps.html')}}">
                    <i class="fa fa-map-marker"></i><span class="link-title">
                                        Maps
                                      </span>
                </a>
            </li>
            <li>
                <a href="{{url('am/public/chart.html')}}">
                    <i class="fa fa fa-bar-chart-o"></i>
                    <span class="link-title">
                                        Charts
                                      </span>
                </a>
            </li>
            <li>
                <a href="{{url('am/public/calendar.html')}}">
                    <i class="fa fa-calendar"></i>
                    <span class="link-title">
                                        Calendar
                                      </span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="link-title">
                                          Error Pages
                                        </span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="{{url('am/public/403.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp;403</a>
                    </li>
                    <li>
                        <a href="{{url('am/public/404.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp;404</a>
                    </li>
                    <li>
                        <a href="{{url('am/public/405.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp;405</a>
                    </li>
                    <li>
                        <a href="{{url('am/public/500.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp;500</a>
                    </li>
                    <li>
                        <a href="{{url('am/public/503.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp;503</a>
                    </li>
                    <li>
                        <a href="{{url('am/public/offline.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp;offline</a>
                    </li>
                    <li>
                        <a href="{{url('am/public/countdown.html')}}">
                            <i class="fa fa-angle-right"></i>&nbsp;Under Construction</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('am/public/grid.html')}}">
                    <i class="fa fa-columns"></i>
                    <span class="link-title">
                                Grid
                                </span>
                </a>
            </li>
            <li>
                <a href="{{url('am/public/blank.html')}}">
                    <i class="fa fa-square-o"></i>
                    <span class="link-title">
                                Blank Page
                                </span>
                </a>
            </li>
            <li class="nav-divider"></li>
            <li>
                <a href="{{url('am/public/login.html')}}">
                    <i class="fa fa-sign-in"></i>
                    <span class="link-title">
                                Login Page
                                </span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-code"></i>
                    <span class="link-title">
                                    Unlimited Level Menu
                                    </span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="javascript:;">Level 1 <span class="fa arrow"></span> </a>
                        <ul class="collapse">
                            <li><a href="javascript:;">Level 2</a></li>
                            <li><a href="javascript:;">Level 2</a></li>
                            <li>
                                <a href="javascript:;">Level 2 <span class="fa arrow"></span> </a>
                                <ul class="collapse">
                                    <li><a href="javascript:;">Level 3</a></li>
                                    <li><a href="javascript:;">Level 3</a></li>
                                    <li>
                                        <a href="javascript:;">Level 3 <span class="fa arrow"></span> </a>
                                        <ul class="collapse">
                                            <li><a href="javascript:;">Level 4</a></li>
                                            <li><a href="javascript:;">Level 4</a></li>
                                            <li>
                                                <a href="javascript:;">Level 4 <span class="fa arrow"></span> </a>
                                                <ul class="collapse">
                                                    <li><a href="javascript:;">Level 5</a></li>
                                                    <li><a href="javascript:;">Level 5</a></li>
                                                    <li><a href="javascript:;">Level 5</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">Level 4</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Level 2</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Level 1</a></li>
                    <li>
                        <a href="javascript:;">Level 1 <span class="fa arrow"></span> </a>
                        <ul class="collapse">
                            <li><a href="javascript:;">Level 2</a></li>
                            <li><a href="javascript:;">Level 2</a></li>
                            <li><a href="javascript:;">Level 2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /#menu -->
    </div>
@endsection

@section('content')
    <div class="outer">
        <div class="inner bg-light lter">
            <div class="col-lg-8">
                {!! Form::open(['url' => '/saverefcar']) !!}
                <div class="container">
                    <h1>Bank</h1>
                    <div class="container">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>bankAccountID</th>
                                <th>bankAccountNo</th>
                                <th>bankBranch</th>
                                <th>bankName</th>
                                <th>bankAccountName</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($bankListData as $key => $val) {
                                ?>
                                <tr>
                                    <td>{{$val['bankAccountID']}}</td>
                                    <td>{{$val['bankAccountNo']}}</td>
                                    <td>{{$val['bankBranch']}}</td>
                                    <td>{{$val['bankName']}}</td>
                                    <td>{{$val['bankAccountName']}}</td>
                                </tr>
                            <?php }?>
                            <tr>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br><br><br>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- /.inner -->
    </div>
@endsection