<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
<!--	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <!-- // <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="js/bootstrap.css"></script>
</head>
    <style type="text/css">
            .nav :hover{
                background-color: #bbb;
            }
    </style>
<body>
<div class=" col-lg-12 top-bac" style="margin-top:-20px;background: url(/img/bg-033.png);background-size:100% 100%;">
    <nav class="navbar navbar-default navbar-fixed-top" style=" border:0;
            height: 52px;background: rgb(0, 0, 0); color:black;
            background: rgba(0, 0, 0, 0.2);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#33000000, endColorstr=#33000000);
            -ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#33000000, endColorstr=#33000000); " >
                <nav class="collapse navbar-collapse bs-navbar-collapse" style="border-box:0;margin-right: 20%;" role="navigation">
        <a class="col-lg-3 col-lg-offset-1" style="text-align:center;margin-top:5px" >
                <img src="img/logo-02.png">
            </a>
            <ul class="nav navbar-nav navbar-right col-lg-7" style="font-size:18px" >
            
            <li class="col-lg-2 " style="text-align:center;border:0;">
                <a href="/map11" class="top-link navtop" style="color:white;border:0;">首页</a>
            </li>
            <li class="col-lg-2 " style="text-align:center;border:0;">
                <a href="/" class="top-link navtop" style="color:white">新闻</a>
            </li>
            <li class="col-lg-2" style="text-align:center;color:white;border:0;">
                <a href="/zixun" class="top-link navtop "  style="color:white">资讯</a>
            </li>
            <li class="col-lg-2" style="text-align:center;color:black;border:0;">
                <a href="/anli" class="top-link " style="color:white">案例</a>
            </li>
             <li class="col-lg-2" style="text-align:center;border:0;">
                <a href="/yewu" class="top-link " style="color:white">业务</a>
            </li>
        </ul>
    </nav>  
</div>
   @yield('content') 	
    </div>
   
<div class=" col-lg-122" style="height:60px;background:#eee ;">
    <div style="background:#38b1c3 ;height:60px;text-align:center;">
    <p>
        <h2 style="padding-top:0px">第二代生物识别技术  指头静脉识别技术解决方案提供商</h2>
    </p>
    </div>
</div>
<!-- Scripts -->
<script>
    function resize(){
        var windowheight=$(window).height();
        var windowwidth=$(window).width();  
        var topbacheight=windowheight*0.58;
        var articlenoimgheight=windowwidth*290/1600;
        $('.top-bac').css({
                'height':topbacheight,
            })
    }
        resize();
</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
