<!DOCTYPE html>
<html lang="zh-cmn-Hans" prefix="og: http://ogp.me/ns#" class="han-init">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @yield('header') 
    <link rel="stylesheet" href="{{ homeAsset('/vendor/primer-css/css/primer.css') }}">
    <link rel="stylesheet" href="{{ homeAsset('/vendor/primer-markdown/dist/user-content.min.css') }}">
    <link rel="stylesheet" href="{{ homeAsset('/vendor/octicons/octicons/octicons.css') }}">
    <link rel="stylesheet" href="{{ homeAsset('/css/components/collection.css') }}">
    <link rel="stylesheet" href="{{ homeAsset('/css/components/repo-card.css') }}">
    <link rel="stylesheet" href="{{ homeAsset('/css/sections/repo-list.css') }}">
    <link rel="stylesheet" href="{{ homeAsset('/css/sections/mini-repo-list.css') }}">
    <link rel="stylesheet" href="{{ homeAsset('/css/components/boxed-group.css') }}">
    <link rel="stylesheet" href="{{ homeAsset('/css/globals/common.css') }}">
    <link rel="stylesheet" href="{{ homeAsset('/vendor/share.js/dist/css/share.min.css') }}">
    <link rel="stylesheet" href="{{ homeAsset('/css/globals/responsive.css') }}">
    <link rel="stylesheet" href="{{ homeAsset('/css/pages/index.css') }}">
    <link rel="shortcut icon" href="{{ homeAsset('/images/ico/32.png') }}" sizes="32x32" type="image/png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ homeAsset('/images/ico/72.png') }}" type="image/png"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ homeAsset('/images/ico/120.png') }}" type="image/png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ homeAsset('/images/ico/152.png') }}" type="image/png"/>
    <meta property="og:type" content="article">
    <meta property="og:locale" content="zh_CN" />
    <!-- Font Awesome-->
    
     <link rel="stylesheet" href="css/fullPage.css">
      <script src="js/fullpage/jquery.fullPage.js"></script> 
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Pace -->
    <link href="css/pace.css" rel="stylesheet">
    <!-- Endless -->
    <link href="css/endless.min.css" rel="stylesheet">
    <link href="css/endless-landing.min.css" rel="stylesheet">
   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
        p{
            font-size: 16px;
        }
        .panel-heading{
            font-size: 16px;
        }
    </style>
    <style type="text/css">
            .nav :hover{
                background-color: #bbb;
            }
    </style>
    <script src="{{ homeAsset('/vendor/jquery/dist/jquery.min.js') }}"></script>
</head>
<body class=" overflow-hidden ">
<div class=" top-bac col-lg-122" style="background: url(/img/bg-033.png);background-size:100% 100%;">

        <nav class="navbar navbar-default navbar-fixed-top" style=" border:0;
            height: 50px;background: rgb(0, 0, 0); color:black;
            background: rgba(0, 0, 0, 0.2);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#33000000, endColorstr=#33000000);
            -ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#33000000, endColorstr=#33000000); " >
        <nav class="collapse navbar-collapse bs-navbar-collapse" style="border-box:0;margin-right: 20%;" role="navigation">
            <a class="col-lg-3 col-lg-offset-1" style="text-align:center;margin-top:5px" >
                <img src="img/logo-02.png">
            </a>
           
            <ul class="nav navbar-nav navbar-right col-lg-7" style="font-size:16px" >
            <li class="col-lg-2 navtop" style="text-align:center; border:0;">
            <style type="text/css">
            a :hover{
                background: #bbb;
            }
            </style>
                <a href="/map11" class="top-link" style="color:white;font-family:PingFang Bold">首页</a>
            </li>
            <li class="col-lg-2 navtop" style="text-align:center;border:0;">
                <a href="/" id="nav-top1" class="top-link" style="color:white;">新闻</a>
            </li>

            <li class="col-lg-2" style="text-align:center;color:white;border:0;">
                <a href="/zixun" class="top-link navtop "  style="color:white">资讯</a>
            </li>
            <li class="col-lg-2" style="text-align:center;color:black;border:0;">
                <a href="/anli" class="top-link" style="color:white">案例</a>
            </li>
             <li class="col-lg-2" style="text-align:center;border:0;">
                <a href="/yewu" class="top-link " style="color:white">业务</a>
            </li>
        </ul>
    </nav>            
    </nav>
       
</div>
    @yield('content') 
    <div class=" col-lg-122" style="height:60px;background:#eee">
    <div style="background:#38b1c3 ;height:60px;text-align:center">
    <p >
        <h2 style="padding-top:15px">第二代生物识别技术  指头静脉识别技术解决方案提供商</h2>
    </p>
    </div>
</div>
<script src="{{ homeAsset('/vendor/share.js/dist/js/share.min.js') }}"></script>
<script src="{{ homeAsset('/vendor/share.js/dist/js/jquery.qrcode.min.js') }}"></script>
<script src="{{ homeAsset('/js/geopattern.js') }}"></script>
<script src="{{ homeAsset('/js/prism.js') }}"></script>
<link rel="stylesheet" href="{{ homeAsset('/css/globals/prism.css') }}">
<!-- Jquery -->
<script src="js/jquery-2.1.1.min.js"></script>

<!-- Pace -->
<script src='js/pace.min.js'></script>
<!--Endless-->
<script src="js/endless.js"></script>
<script>  
    jQuery(document).ready(function($) {

        $('.geopattern').each(function(){
            $(this).geopattern($(this).data('pattern-id'));
        });

        $("#open").mouseover(function(){
            $("#search_input").fadeIn(1).animate({width:'300px',opacity:'10'});
            $("#search_input")[0].focus();
            $("#open").fadeOut(10);
        });

        $("#search_input").blur(function(){
            $("#search_input").animate({width:'toggle',opacity:'0.1'}).fadeOut(2);
            $("#open").delay(400).fadeIn(100);
        });
        $('.share-bar').share();
    });
</script>

<script>

    function resize(){
        var windowheight=$(window).height();
        var windowwidth=$(window).width();  
        var topbacheight=windowheight*0.6;
        var articlenoimgheight=windowwidth*290/1600;
        $('.top-bac').css({
                'height':topbacheight,
            })
    }
        resize();
</script>
</body>
</html>
