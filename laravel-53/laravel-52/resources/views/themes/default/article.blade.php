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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
</head>
<body>

  

<!-- Scripts -->
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
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
 @extends('app')
@section('content')
<div class="col-lg-12" style="background: #ebebeb;min-height:700px;">
<div class="col-lg-8 col-lg-offset-2" style="background:#ffffff;min-height:700px;margin-top:30px">
    <div class="col-lg-12 " style="text-align: center">
        <h1 style="margin-top:42px;font-size:24px">{{ $article->title }}</h1>
    </div>
    <div class="col-lg-10 col-lg-offset-1 " style="margin-right:20%;font-size:16px;line-height:2">  
       {!! conversionMarkdown($article->content) !!}
    </div>
</div>
</div>
@endsection