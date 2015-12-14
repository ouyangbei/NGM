@extends('themes.default.layouts')

@section('header')
    <title>{{ systemConfig('title','Enda Blog') }} -Powered By  {{ systemConfig('subheading','Enda Blog') }}</title>
    <meta name="keywords" content="{{ systemConfig('seo_key') }}" />
    <meta name="description" content="{{ systemConfig('seo_desc') }}">
    <link rel="stylesheet" type="text/css" href="css/bootbtn.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <style type="text/css">
    .articletitle :hover{
        color: red;
    }
    </style>
@endsection

@section('content')
 
<!-- /.banner -->
<div class="col-lg-12" style="background:#ebebeb;">
<div class=" col-lg-8 col-lg-offset-2 " style="background:#ebebeb;"> 
     @if(!empty($articleList))
        @foreach($articleList['data'] as $article)
          @if($article->cate_id!=1)  
          
        @if(!empty($article->pic)) 
        <div class="col-lg-121" style="background:#ffffff;margin-left:1%;margin-top:30px;background: url(img/BBGX.png) ; background-size:100% 100%;" >                                                    
                <img class="col-lg-4 pull-left article-img" style="margin-top: 25px;margin-bottom: 25px;"  src="{{ asset('/uploads').'/'.$article->pic }}" alt="" >
                <div class="col-lg-7 pull-right" style="margin-top: 20px;margin-bottom: 10px;font-size:16px; ">
                    <a class="articletitle" href="{{ route('article.show',array('id'=>$article->id)) }}" title="{{ $article->title }}" style="font-size:24px;color:black;text-decoration:none;">
                        {{ $article->title }}
                    </a>
                    <p style="font-size: 16px;margin-top:10px; margin-bottom: 15px;height: 100px;overflow:hidden">
                         {{ strCut(conversionMarkdown($article->content),90) }}
                    </p>
                    <p class="repo-list-meta pull-right">
                    <span class="octicon octicon-calendar"></span>
                         {{ $article->created_at->format('Y-m-d') }}
                    </p>
                    <a href="{{ route('article.show',array('id'=>$article->id)) }}" title="{{ $article->title }}" style="margin-bottom:0px"  class="btn btn-danger">查看更多</a>
                </div>
          
     </div> 
       @endif
      @endif
        @endforeach 
    @endif
    @if(!empty($articleList)) 
        @foreach($articleList['data'] as $article)
         @if($article->cate_id!=1) 
        @if(empty($article->pic))   
            <div class="col-lg-61 pull-left article-noimg-img"  style="background: url(img/BBGX.png);background-size:100% 100%;margin-left:1%;margin-right:1%; margin-top:20px;background:#ffffff" >                                                                                    
                    <div class="col-lg-12 " style="margin-top: 20px;margin-bottom: 10px; ">
                        <a href="{{ route('article.show',array('id'=>$article->id)) }}" title="{{ $article->title }}" style="font-size:24px;color:black;text-decoration:none">
                            {{ $article->title }}
                        </a>
                        <p class=" " style=";margin-bottom: 15px;overflow:hidden">
                         {{ strCut(conversionMarkdown($article->content),80) }}
                        </p>
                        <p class="repo-list-meta pull-right">
                            <span class="octicon octicon-calendar"></span>
                        {{$article->created_at->format('Y-m-d')}}
                        </p>
                        <a href="{{ route('article.show',array('id'=>$article->id)) }}" title="{{ $article->title }}" class="btn btn-danger">查看更多</a>
                    </div>                                                  
            </div>
            @endif 
            @endif
        @endforeach   
    @endif
</div>
</div>
<script>
    function resize(){
        var windowheight=$(window).height();
        var windowwidth=$(window).width();  
        var articleimgheight=windowwidth*250/1600;
        var articlenoimgheight=windowwidth*290/1600;
         if(windowheight<=800){
            $('.article-noimg-img').css({
                'height':articlenoimgheight,
            });
        }
        else{
            $('.article-noimg-img').css({
                'height':articlenoimgheight*0.7,
            });
        }
        $('.article-img').css({
                'height':articleimgheight,
            });
        }
            resize();
</script>
<!-- /section.content -->

@endsection