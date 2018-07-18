<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Metis</title>

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de"/>
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('am/public/assets/lib/bootstrap/css/bootstrap.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('am/public/assets/lib/font-awesome/css/font-awesome.css')}}">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="{{url('am/public/assets/css/main.css')}}">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="{{url('am/public/assets/lib/metismenu/metisMenu.css')}}">

    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="{{url('am/public/assets/lib/onoffcanvas/onoffcanvas.css')}}">

    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="{{url('am/public/assets/lib/animate.css/animate.css')}}">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{url('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
    <script src="{{url('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
    <link rel="stylesheet" href="{{url('am/public/assets/css/style-switcher.css')}}">
    <link rel="stylesheet/less" type="text/css" href="{{url('am/public/assets/less/theme.less')}}">
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js')}}"></script>

</head>

<body class="  ">
<div class="bg-dark dk" id="wrap">
    <div id="top">
        <!-- .navbar -->
    @yield('toolbar')
    <!-- /.navbar -->
    @yield('head')
    <!-- /.head -->
    </div>
    <!-- /#top -->
@yield('menu')
<!-- /#left -->
    <div id="content">
    @yield('content')
    <!-- /.outer -->
    </div>
    <!-- /#content -->

    <div id="right" class="onoffcanvas is-right is-fixed bg-light" aria-expanded=false>
        <a class="onoffcanvas-toggler" href="#right" data-toggle=onoffcanvas aria-expanded=false></a>
        <br>
        <br>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Warning!</strong> Best check yo self, you're not looking too good.
        </div>
        <!-- .well well-small -->
        <div class="well well-small dark">
            <ul class="list-unstyled">
                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
            </ul>
        </div>
        <!-- /.well well-small -->
        <!-- .well well-small -->
        <div class="well well-small dark">
            <button class="btn btn-block">Default</button>
            <button class="btn btn-primary btn-block">Primary</button>
            <button class="btn btn-info btn-block">Info</button>
            <button class="btn btn-success btn-block">Success</button>
            <button class="btn btn-danger btn-block">Danger</button>
            <button class="btn btn-warning btn-block">Warning</button>
            <button class="btn btn-inverse btn-block">Inverse</button>
            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
        </div>
        <!-- /.well well-small -->
        <!-- .well well-small -->
        <div class="well well-small dark">
            <span>Default</span><span class="pull-right"><small>20%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
            </div>
            <span>Success</span><span class="pull-right"><small>40%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
            </div>
            <span>warning</span><span class="pull-right"><small>60%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
            </div>
            <span>Danger</span><span class="pull-right"><small>80%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
            </div>
        </div>
    </div>
    <!-- /#right -->
</div>
<!-- /#wrap -->
<footer class="Footer bg-dark dker">
    <p>2017 &copy; Metis Bootstrap Admin Template v2.4.2</p>
</footer>
<!-- /#footer -->
<!-- #helpModal -->
<div id="helpModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- /#helpModal -->
<!--jQuery -->
<script src="{{url('am/public/assets/lib/jquery/jquery.min.js')}}"></script>


<!--Bootstrap -->
<script src="{{url('am/public/assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- MetisMenu -->
<script src="{{url('am/public/assets/lib/metismenu/metisMenu.js')}}"></script>
<!-- onoffcanvas -->
<script src="{{url('am/public/assets/lib/onoffcanvas/onoffcanvas.js')}}"></script>
<!-- Screenfull -->
<script src="{{url('am/public/assets/lib/screenfull/screenfull.js')}}"></script>


<!-- Metis core scripts -->
<script src="{{url('am/public/assets/js/core.js')}}"></script>
<!-- Metis demo scripts -->
<script src="{{url('am/public/assets/js/app.js')}}"></script>


<script src="{{url('am/public/assets/js/style-switcher.js')}}"></script>
</body>

</html>
