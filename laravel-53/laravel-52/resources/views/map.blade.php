<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ECharts">
    <meta name="author" content="kener.linfeng@gmail.com">
    <title>ECharts · Example</title>
    <!--fullpage-->
    <link rel="stylesheet" href="css/fullPage.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/fullpage/jquery.fullPage.js"></script>
    <!--map-->
    <script src="www/js/echarts.js"></script>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/echartsHome.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="js/codemirror.js"></script>
    <script src="js/javascript.js"></script>

    <link href="css/codemirror.css" rel="stylesheet">
    <link href="css/monokai.css" rel="stylesheet">

    <style type="text/css">
        .CodeMirror {
            height: 550px;
        }
    </style>
  
</head>

<body>

<div id="fullpage">

    <div class="section active section1"  >
        <ul id="fullpageMenu">
        <nav class="navbar navbar-default navbar-fixed-top" style=" border:0;
            height: 50px;background: rgb(0, 0, 0); color:black;
            background: rgba(0, 0, 0, 0.2);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#33000000, endColorstr=#33000000);
            -ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#33000000, endColorstr=#33000000); " >
                <nav class="collapse navbar-collapse bs-navbar-collapse" style="border-box:0;margin-right: 20%;" role="navigation">
            <a class="col-lg-3 col-lg-offset-1" style="text-align:center;margin-top:5px" >
                <img src="img/logo-02.png">
            </a>
            <ul class="nav navbar-nav navbar-right col-lg-7 pull-right" style="font-size:16px" >
            
            <li class="col-lg-21 navtop" style="text-align:center;">
                <a href="/map11" class="top-link navtop" style="color:white">首页</a>
            </li>
            <li class="col-lg-21 navtop" style="text-align:center;">
                <a href="/" class="top-link navtop" style="color:white">新闻</a>
            </li>
            <li class="col-lg-21" style="text-align:center;color:white">
                <a href="/zixun" class="top-link navtop "  style="color:white">资讯</a>
            </li>
            <li class="col-lg-21" style="text-align:center;color:black">
                <a href="/anli" class="top-link " style="color:white">案例</a>
            </li>
             <li class="col-lg-21" style="text-align:center;">
                <a href="/yewu" class="top-link " style="color:white">业务</a>
            </li>
        </ul>
    </nav>            
    </nav>
    </ul>
        <!-- Fixed navbar -->
        <div class="container-fluid" style="background:rgba(27,27,27,0);height: 800px" >
            <div class="col-lg-4 pull-right"style="margin-top:10%;text-align:center;">
                <img class="col-lg-8 col-lg-offset-2" src="img/wz-03.png">
                <img src="img/wz-04.png" style="margin-top:10%">
            </div>
            <div class="row-fluid example">
                <div id="sidebar-code" class="col-md-1" style="  borderColor:rgba(30,144,255,0);height: 0px;width: 0px">
                    <div class="well sidebar-nav">
                    <textarea  id="code" name="code">
option = {
    backgroundColor: '#19193b',
    color: ['gold','aqua','lime'],
    title : {
        text: '',
        subtext:'',
        x:'center',
        textStyle : {
            color: '#fff'
        }
    },
    tooltip : {
        trigger: 'item',
        formatter: '{b}'
    },
    legend: {
        orient: 'vertical',
        x:'left',
        data:[' ', ' ', ' ',' '],
        selectedMode: 'single',
        selected:{
            '太原 总公司' : true,
            '广州 Top10' : false
        },
        textStyle : {
            color: 'green'
        }
    },
    toolbox: {
        show : false,
        orient : 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: false},
            dataView : {show: false, readOnly: false},
            restore : {show: false},
            saveAsImage : {show: false}
        }
    },
    dataRange: {
        min : 0,
        max : 100,
        calculable : true,
        color: ['#ff3333', 'orange', 'yellow','lime','aqua'],
        textStyle:{
            color:'#fff'
        }
    },
    series : [
        {
            name: '全国',
            type: 'map',
            roam: false,
            hoverable: false,
            mapType: 'china',
            itemStyle:{
                normal:{
                    borderColor:'rgba(255,255,255,1)',
                    borderWidth:1,
                    areaStyle:{
                        color:'#19193b'
                    }
                }
            },
            data:[],
            markLine : {
                smooth:true,
                symbol: ['none', 'circle'],
                symbolSize : 1,
                itemStyle : {
                    normal: {
                        color:'#fff',
                        borderWidth:1,
                        borderColor:'rgba(255,255,255,0.5)'
                    }
                },
                data : [

                ],
            },
            geoCoord: {
                '上海': [121.4648,31.2891],
                '东莞': [113.8953,22.901],
                '东营': [118.7073,37.5513],
                '中山': [113.4229,22.478],
                '临汾': [111.4783,36.1615],
                '临沂': [118.3118,35.2936],
                '丹东': [124.541,40.4242],
                '丽水': [119.5642,28.1854],
                '乌鲁木齐': [87.9236,43.5883],
                '佛山': [112.8955,23.1097],
                '保定': [115.0488,39.0948],
                '兰州': [103.5901,36.3043],
                '包头': [110.3467,41.4899],
                '北京': [116.4551,40.2539],
                '北海': [109.314,21.6211],
                '南京': [118.8062,31.9208],
                '南宁': [108.479,23.1152],
                '南昌': [116.0046,28.6633],
                '南通': [121.1023,32.1625],
                '厦门': [118.1689,24.6478],
                '台州': [121.1353,28.6688],
                '合肥': [117.29,32.0581],
                '呼和浩特': [111.4124,40.4901],
                '咸阳': [108.4131,34.8706],
                '哈尔滨': [127.9688,45.368],
                '唐山': [118.4766,39.6826],
                '嘉兴': [120.9155,30.6354],
                '大同': [113.7854,39.8035],
                '大连': [122.2229,39.4409],
                '天津': [117.4219,39.4189],
                '太原': [112.3352,37.9413],
                '威海': [121.9482,37.1393],
                '宁波': [121.5967,29.6466],
                '宝鸡': [107.1826,34.3433],
                '宿迁': [118.5535,33.7775],
                '常州': [119.4543,31.5582],
                '广州': [113.5107,23.2196],
                '廊坊': [116.521,39.0509],
                '延安': [109.1052,36.4252],
                '张家口': [115.1477,40.8527],
                '徐州': [117.5208,34.3268],
                '德州': [116.6858,37.2107],
                '惠州': [114.6204,23.1647],
                '成都': [103.9526,30.7617],
                '扬州': [119.4653,32.8162],
                '承德': [117.5757,41.4075],
                '拉萨': [91.1865,30.1465],
                '无锡': [120.3442,31.5527],
                '日照': [119.2786,35.5023],
                '昆明': [102.9199,25.4663],
                '杭州': [119.5313,29.8773],
                '枣庄': [117.323,34.8926],
                '柳州': [109.3799,24.9774],
                '株洲': [113.5327,27.0319],
                '武汉': [114.3896,30.6628],
                '汕头': [117.1692,23.3405],
                '江门': [112.6318,22.1484],
                '沈阳': [123.1238,42.1216],
                '沧州': [116.8286,38.2104],
                '河源': [114.917,23.9722],
                '泉州': [118.3228,25.1147],
                '泰安': [117.0264,36.0516],
                '泰州': [120.0586,32.5525],
                '济南': [117.1582,36.8701],
                '济宁': [116.8286,35.3375],
                '海口': [110.3893,19.8516],
                '淄博': [118.0371,36.6064],
                '淮安': [118.927,33.4039],
                '深圳': [114.5435,22.5439],
                '清远': [112.9175,24.3292],
                '温州': [120.498,27.8119],
                '渭南': [109.7864,35.0299],
                '湖州': [119.8608,30.7782],
                '湘潭': [112.5439,27.7075],
                '滨州': [117.8174,37.4963],
                '潍坊': [119.0918,36.524],
                '烟台': [120.7397,37.5128],
                '玉溪': [101.9312,23.8898],
                '珠海': [113.7305,22.1155],
                '盐城': [120.2234,33.5577],
                '盘锦': [121.9482,41.0449],
                '石家庄': [114.4995,38.1006],
                '福州': [119.4543,25.9222],
                '秦皇岛': [119.2126,40.0232],
                '绍兴': [120.564,29.7565],
                '聊城': [115.9167,36.4032],
                '肇庆': [112.1265,23.5822],
                '舟山': [122.2559,30.2234],
                '苏州': [120.6519,31.3989],
                '莱芜': [117.6526,36.2714],
                '菏泽': [115.6201,35.2057],
                '营口': [122.4316,40.4297],
                '葫芦岛': [120.1575,40.578],
                '衡水': [115.8838,37.7161],
                '衢州': [118.6853,28.8666],
                '西宁': [101.4038,36.8207],
                '西安': [109.1162,34.2004],
                '贵阳': [106.6992,26.7682],
                '连云港': [119.1248,34.552],
                '邢台': [114.8071,37.2821],
                '邯郸': [114.4775,36.535],
                '郑州': [113.4668,34.6234],
                '鄂尔多斯': [108.9734,39.2487],
                '重庆': [107.7539,30.1904],
                '金华': [120.0037,29.1028],
                '铜川': [109.0393,35.1947],
                '银川': [106.3586,38.1775],
                '镇江': [119.4763,31.9702],
                '长春': [125.8154,44.2584],
                '长沙': [113.0823,28.2568],
                '长治': [112.8625,36.4746],
                '阳泉': [113.4778,38.0951],
                '青岛': [120.4651,36.3373],
                '韶关': [113.7964,24.7028]
            }
        },
        {
            name: '北京 Top10',
            type: 'map',
            mapType: 'china',
            data:[],
            markLine : {
                smooth:true,
                effect : {
                    show: true,
                    scaleSize: 1,
                    period: 30,
                    color: '#fff',
                    shadowBlur: 10
                },
                itemStyle : {
                    normal: {
                        borderWidth:1,
                        lineStyle: {
                            type: 'solid',
                            shadowBlur: 10
                        }
                    }
                },
                data : [
                    [{name:'太原'}, {name:'北京',value:'北'}],
                    [{name:'太原'}, {name:'杭州',value:' '}],
                    [{name:'太原'}, {name:'西安',value:' '}],
                    [{name:'太原'}, {name:'天津',value:' '}],
                    [{name:'太原'}, {name:'西宁',value:' '}],
                    [{name:'太原'}, {name:'长沙',value:' '}],
                    [{name:'太原'}, {name:'沈阳',value:' '}],
                    [{name:'太原'}, {name:'长春',value:' '}],
                    [{name:'太原'}, {name:'哈尔滨',value:' '}],
                    [{name:'太原'}, {name:'包头',value:' '}],
                    [{name:'太原'}, {name:'上海',value:' '}],
                    [{name:'太原'}, {name:'武汉',value:' '}],
                    [{name:'太原'}, {name:'广州',value:' '}],
                    [{name:'太原'}, {name:'深圳',value:' '}],
                    [{name:'太原'}, {name:'昆明',value:'北'}],
                ]
            },
            markPoint : {
                symbol:'emptyCircle',
                symbolSize : function (v){
                    return 10 + v/10
                },
                effect : {
                    show: true,
                    shadowBlur : 0
                },
                itemStyle:{
                    normal:{
                        label:{show:false}
                    },
                    emphasis: {
                        label:{position:'top'}
                    }
                },
                data : [
                  
                   
                    {name:'太原',value:' '},
                   
                ]
            }
        },
        {
            name: '上海 Top10',
            type: 'map',
            mapType: 'china',
            data:[],
            markLine : {
                smooth:true,
                effect : {
                    show: true,
                    scaleSize: 1,
                    period: 30,
                    color: '#fff',
                    shadowBlur: 10
                },
                itemStyle : {
                    normal: {
                        borderWidth:1,
                        lineStyle: {
                            type: 'solid',
                            shadowBlur: 10
                        }
                    }
                },
                data : [
                   ]
            },
            markPoint : {
                symbol:'emptyCircle',
                symbolSize : function (v){
                    return 10 + v/10
                },
                effect : {
                    show: true,
                    shadowBlur : 0
                },
                itemStyle:{
                    normal:{
                        label:{show:false}
                    },
                    emphasis: {
                        label:{position:'top'}
                    }
                },
                data : [
                  
                    {name:'北京',value:' '},
                    {name:'杭州',value:' '},

                ]
            }
        },
        {
            name: '广州 Top10',
            type: 'map',
            mapType: 'china',
            data:[],
            markLine : {
                smooth:true,
                effect : {
                    show: true,
                    scaleSize: 1,
                    period: 30,
                    color: '#fff',
                    shadowBlur: 10
                },
                itemStyle : {
                    normal: {
                        borderWidth:1,
                        lineStyle: {
                            type: 'solid',
                            shadowBlur: 10
                        }
                    }
                },
                data : [
                    ]
            },
            markPoint : {
                symbol:'emptyCircle',
                symbolSize : function (v){
                    return 10 + v/10
                },
                effect : {
                    show: true,
                    shadowBlur : 0
                },
                itemStyle:{
                    normal:{
                        label:{show:false}
                    },
                    emphasis: {
                        label:{position:'top'}
                    }
                },
                data : [
                    {name:'福州',value:95},
                    {name:'太原',value:90},
                    {name:'长春',value:80},
                    {name:'重庆',value:70},
                    {name:'西安',value:60},
                    {name:'成都',value:50},
                    {name:'常州',value:40},
                    {name:'北京',value:30},
                    {name:'北海',value:20},
                    {name:'海口',value:10}
                ]
            }
        }
    ]
};
                    </textarea>
                    </div><!--/.well -->
                </div><!--/span-->
                <div id="graphic" class="col-lg-8">
                    <div id="main" class="main" style="height: 530px;border: 0px ; background:#19193b;"></div>
                    <div>
                        <!--<button type="button" class="btn btn-sm btn-success" onclick="refresh(true)">刷 新</button>-->

                        <select id="theme-select" style="width: 0px"></select>

                        <span id='wrong-message' style="color:red"></span>
                    </div>
                </div><!--/span-->
            </div><!--/row-->

        </div><!--/.fluid-container-->

    </div>
    <div class="section section3" style="overflow: hidden"  >
        <div class="sec3_top_content pull-left col-lg-10" style="margin-left:17% ; margin-top:20px ;margin-bottom: 25px;overflow: hidden" >
            <p class="sec3_head col-lg-12 col-lg-offset-3 " style="font-size: 56px ；text-align:center">『关于我们』</p>
            <p class="sec3_descript pull-left"style="line-height: 1.5;margin-right: 25%" > 诚信，追求卓越，不断创新!山西圣点科技有限公司成立于2011年，
                简称圣点科技，总部位于太原市高新区清华科技园，公司现在北京海淀区山西圣点科技有限公司成立于2011年，简称圣点科技，总部位于太原市高新区清华科技园，公司现在北京海淀区山西圣点科技有限公司成立于2011年，简称圣点科技，总部位于太原市高新区清华科技园，公司现在北京海淀区山西圣点科技有限公司成立于2011年，简称圣点科技，总部位于太原市高新区清华科技园，公司现在北京海淀区山西圣点科技有限公司成立于2011年，
            </p>
        </div>
        <div class="sec3_content col-lg-9" style="text-align: center; overflow: hidden" >
            <div class="content_wraper" style="text-align: center;">
                <div class="sec_img_content secimg1 " style="text-align:center" >
                
                <P class="sec3-p" style="opacity:0;height:83%;width:100%;background:#b1b266;color:white;font-size:20px">
                身份识别
                <a href="/identity"><img class="sec3-pimg" style="margin-top:40%" src="img/search.ico"> </a>  
                </P>
                </div>
                <div class="sec_img_content secimg2 "style="    margin-left: 10px;" >
                 <P class="sec3-p" style="opacity:0;height:83%;width:100%;background:#b1b266;color:white;font-size:20px">
                公司理念
                <a href="/companythought"><img class="sec3-pimg" style="margin-top:40%" src="img/search.ico"> </a>  
                </P>
                </div>
                <div class="sec_img_content secimg3  " style="    margin-left: 10px;" >
                 <P class="sec3-p" style="opacity:0;height:83%;width:100%;background:#b1b266;color:white;font-size:20px">
                公司团队
                <a href="/ourteam"><img class="sec3-pimg" style="margin-top:40%" src="img/search.ico"></a>   
                </P>
                </div>
                <div class="sec_img_content secimg4   " >
                 <P class="sec3-p" style="opacity:0;height:83%;width:100%;background:#b1b266;color:white;font-size:20px">
                合作伙伴
                <a href="/cooperat"><img class="sec3-pimg" style="margin-top:40%" src="img/search.ico"> </a>  
                </P>
                </div>
            </div>
        </div>
    </div>
    <div class="section section4" style="text-align: center">
        <div class="sec4head col-lg-12" style="text-align: center;font-size: 56px;color: white;margin-bottom: 50px"> 『案例展示』</div>
        <div class="creat-prahic">
            <div class="prahic prahic1 " style="text-align: center">
                <img class=" prahic-img"  src="img/icon-01.png">
                <!--<div class="prahic-img"  style="background: url(img/icon-01.png);background-size: cover;background-repeat: no-repeat;">   </div>-->
                <span class="pradec col-lg-12">中国工商银行</span>
            </div>
            <div class="prahic prahic2 " style="text-align: center">
                <img class="prahic-img"  src="img/icon-02.png">
                <!--<div class="prahic-img"  style="background: url(img/icon-01.png);background-size: cover;background-repeat: no-repeat;">   </div>-->
                <span class="pradec col-lg-12" >中国光大银行</span>
            </div>
            <div class="prahic prahic3 " style="text-align: center">
                <img class=" prahic-img"  src="img/icon-03.png">
                <!--<div class="prahic-img"  style="background: url(img/icon-01.png);background-size: cover;background-repeat: no-repeat;">   </div>-->
                <span class="pradec col-lg-12">华夏银行</span>
            </div>
            <div class="prahic prahic4 " style="text-align: center">
                <img class="prahic-img"  src="img/icon-04.png">
                <!--<div class="prahic-img"  style="background: url(img/icon-01.png);background-size: cover;background-repeat: no-repeat;">   </div>-->
                <span class="pradec col-lg-12">中国银行</span>
            </div>
            <div class="prahic prahic5 " style="text-align: center">
                <img class="prahic-img"  src="img/icon-05.png">
                <!--<div class="prahic-img"  style="background: url(img/icon-01.png);background-size: cover;background-repeat: no-repeat;">   </div>-->
                <span class="pradec col-lg-12">招商银行</span>
            </div>
            <div class="prahic prahic6 prahicimgsed " style="text-align: center">
                <img class="prahic-img "  src="img/icon-06.png">
                <!--<div class="prahic-img"  style="background: url(img/icon-01.png);background-size: cover;background-repeat: no-repeat;">   </div>-->
                <span class="pradec col-lg-12">晋商银行</span>
            </div>
            <div class="prahic prahic7  " style="text-align: center">
                <img class="prahic-img "  src="img/icon-07.png">
                <!--<div class="prahic-img"  style="background: url(img/icon-01.png);background-size: cover;background-repeat: no-repeat;">   </div>-->
                <span class="pradec col-lg-12">新浪网</span>
            </div>
            <div class="prahic prahic8  " style="text-align: center">
                <img class="prahic-img "  src="img/icon-08.png">
                <!--<div class="prahic-img"  style="background: url(img/icon-01.png);background-size: cover;background-repeat: no-repeat;">   </div>-->
                <span class="pradec col-lg-12">中国民生银行</span>
            </div>
            <div class="prahic prahic9  " style="text-align: center">
                <img class="prahic-img "  src="img/icon-09.png">
                <!--<div class="prahic-img"  style="background: url(img/icon-01.png);background-size: cover;background-repeat: no-repeat;">   </div>-->
                <span class="pradec col-lg-12">美特好</span>
            </div>
        </div>
        <div class="section-content">
            <h1></h1>
            <p></p>
        </div>
    </div>
    <div class="section section5">
        <div class="col-lg-12 sec5head" style="margin-bottom:30px;height: 60px;font-size: 50px;text-align: center; font-family: Arial;color: white;">『四大核心技术』</div>
        <div class="col-lg-10 col-lg-offset-1">
            
        <a href="/identity">
            <div class="sec5 sec5-1 col-lg-31 pull-left"  style="background:url(img/kk-01.png);background-size: cover;background-repeat: no-repeat">
            </div>
        </a>
        <a href="/movinte">
            <div class="sec5 sec5-2 col-lg-31 pull-left" style="background:url(img/kk-02.png);background-size: cover;background-repeat: no-repeat">
            </div>
        </a>
        <a href="/dummysolve">
            <div class="sec5 sec5-3 col-lg-31 pull-left" style="background:url(img/kk-03.png);background-size: cover;background-repeat: no-repeat">
            </div>
        </a>
        <a href="/movmedical">
            <div class="sec5 sec5-4 col-lg-31 pull-left" style="background:url(img/kk-04.png);background-size: cover;background-repeat: no-repeat">
            </div>
        </a>
         </div>
    </div>
    <div class="section  section2">
        <div class="slide slide1" style="background: url(img/2.png)">
            <div class="content">
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function(){
        $('#menu > li').click(function(){
            $(this).removeClass("selected");
            $(this).addClass("selected");
            $(this).siblings().removeClass('selected');
        });
        $('.top_rim a').click(function(){
            $("#menu li").removeClass("selected");
            $("#menu li#mn_home").addClass("selected");
        });
    });
</script>
<script>
    $(document).ready(function(){

        $('.sec3-pimg').hover(                         //sec5tion 图片的阴影设置
                function(){
                    $(this).css({
                        'opacity':1,
                        'margin-left':'10px'
                    })
                },function(){
                    $(this).css({
                        'opacity':1,
                        'margin-left':'0px'
                    })

                }
        )
          $('.sec3-p').hover(                         //sec5tion 图片的阴影设置
                function(){
                    $(this).css({
                        'opacity':0.8
                    })
                },function(){
                    $(this).css({
                        'opacity':0
                    })

                }
        )
        $('.sec5').hover(                         //sec5tion 图片的阴影设置
                function(){
                    $(this).css({
//                'border':'2px  solid  #888888',
                        '-moz-box-shadow':'3px 3px 10px #000000',
                        '-webkit-box-shadow': '3px 3px 10px #000000',
                        'box-shadow':'3px 3px 10px #000000'
                    })
                },function(){
                    $(this).css({
                        '-moz-box-shadow':'none',
                        '-webkit-box-shadow': 'none',
                        'box-shadow':'none'
                    })

                }
        )
        function remapheight(){
            var windowheight1=$(window).height();           //是的各个组件随着屏幕的尺寸的改变而改变宽高，
            var windowwidth2=$(window).width();
        }
        function resize(){
            var windowheight=$(window).height();
            var windowwidth=$(window).width();               //h获取屏幕宽高
            var sec4prahicwidth=windowwidth*884/1794;                    //按照原图比例来放大缩小
            var sec4prahicheight=windowheight*595/1380;
            var sec4creatprahicheight=windowheight*595/1380;
            var sec4CreatPrahicMarginTop=(windowheight-sec4prahicheight)/6;
            var sec4creatprahicmarginleft=(windowwidth-sec4prahicwidth)/2;
            var contentwidth=windowwidth*893/1596;
            var contentheight=contentwidth*280/720;
            var contentmarginleft=windowwidth*354/1596;
            var prahicmt=(windowheight-500)/2
            var sec2bac=windowwidth*0.26;
            var sec5h=windowheight-250;
            var sec3conw=windowwidth*0.6;
            var sec3conh=windowheight*550/1326;
            var secimgw=sec3conw*278/1150;
            var secimgml=secimgw*30/434;
            var secimgh=sec3conw*278/1150*560/430;
            $('.creat-prahic').css({
                'margin-left':sec4creatprahicmarginleft,
                'width':sec4prahicwidth,
                'height':sec4prahicheight+20,
                'margin-top':sec4CreatPrahicMarginTop
            });
            $('.prahic').css({
                'width':sec4prahicwidth/5,
                'height':sec4prahicwidth/5,
                'float':'left',
                'position': 'relative',
                'marginleft':'10px'
            });
            $('.prahic-img').css({
                'width' :sec4prahicwidth*0.85/5,
                'height':sec4prahicwidth*0.85/5,
            });
            $('.prahicimgsed').css({
                'margin-left':sec4prahicwidth/10
            });
            $('.content').css({
                'width': contentwidth,
                'height': contentheight,
                'margin-left': contentmarginleft
            });
            $('.content_wraper').css({
                'width':sec3conw,
                'height': sec3conh,
                'overflow': 'hidden',
                'margin-left':'40px'
            });
            $('.sec_img_content').css({
                'width': sec3conw*0.24,
                'height': sec3conh,
                'float': 'left',
                'position': 'relative'
//                'margin-left':secimgml,
            });
            var sec5w=$('.sec5').width();
            $('.sec5').css({
                'height':sec5w*1.54
            });
            $('.content').css({
                'height': sec2bac
            });
            if(windowheight>=900){
                $('.sec3_head,.sec4head,.sec5head').css({
                    'font-size': '56px'
                });
                $('#main').css('height','800px');
                $('.container-fluid').css('height','800px');
            }else{
                $('#main').css('height','560px');
                $('.container-fluid').css('height','560px');
                $('.sec3_head,.sec4head,.sec5head').css({
                    'font-size': '35px'  //随着屏幕大小改变字体大小
                });
            }
        }
        resize();
        $('#fullpage').fullpage({
            resize:true,
            scrollingSpeed:1000,
            anchors:['page1','page2','page3','page4','page5'],//dingyimaolianjie
            continuousVertical:false,
            menu:'#fullpageMenu',
            navigation:true,
            navigationPosition:'right',
            navigationTooltips:['','','','',''],
            showActiveTooltip:true,
            slidesNavigation:true,
            slidesNavPosition:'bottom',
            scrollOverflow:false,
            afterLoad: function(section3, index){
                var loadedSection = $(this);
                //using index

                if(index == 2){
                    $('.prahic1, .prahic2,.prahic3, .prahic4,.prahic5, .prahic6, .prahic7, .prahic8, .prahic9').css({   'transform': 'scaleX(0) scaleY(0) scaleZ(0)', 'transition':'transform 0.6s', '-moz-transform':'scaleX(0) scaleY(0) scaleZ(0)', '-o-transform':'scaleX(0) scaleY(0) scaleZ(0)', '-webkit-transform':'scaleX(0) scaleY(0) scaleZ(0)', '-ms-transform':'scaleX(0) scaleY(0) scaleZ(0)' });
                    $('.secimg4').animate({
                        'margin-left':"8px",
                        'margin-top':"0px",

                        'opacity':'1'
                    },1600);
                    $('.secimg3').animate({
                        'margin-left':"8px",
                        'margin-top':"0px",
                        'opacity':'1'
                    },1300);
                    $('.secimg2').animate({
                        'margin-left':"8px",
                        'margin-top':"0px",
                        'opacity':'1'
                    },1000);
                    $('.secimg1').animate({
                        'margin-left':"0px",
                        'margin-top':"0px",
                        'opacity':'1'
                    },700);
//                    setTimeout( $('.secimg3').animate({
//                        'margin-left':"8px",
//                        'opacity':'1'
//                    },600),200);
//                    setTimeout( $('.secimg2').animate({
//                        'margin-left':"8px",
//                        'opacity':'1'
//                    },600),200);
//                    setTimeout( $('.secimg1').animate({
//                        'margin-left':"0px",
//                        'opacity':'1'
//                    },600),200)
                } else if(index == 4 | index ==1 | index == 3| index == 5){
                    $(".secimg1,.secimg2,.secimg3,.secimg4").css('opacity','0');
                    $(".secimg1").css('margin-top','300px');
                    $(".secimg2").css('margin-top','300px');
                    $(".secimg3").css('margin-top','300px');
                    $(".secimg4").css('margin-top','300px');
                    if(index ==3 ){
                        setTimeout("$('.prahic1').css({   'transform': 'scaleX(1) scaleY(1) scaleZ(1)', 'transition':'transform 0.6s', '-moz-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-o-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-webkit-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-ms-transform':'scaleX(1) scaleY(1) scaleZ(1)','transition':'0.5s'  }) ",0);
                        setTimeout("$('.prahic2').css({   'transform': 'scaleX(1) scaleY(1) scaleZ(1)', 'transition':'transform 0.6s', '-moz-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-o-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-webkit-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-ms-transform':'scaleX(1) scaleY(1) scaleZ(1)','transition':'0.5s'  }) ",90);
                        setTimeout("$('.prahic3').css({    'transform': 'scaleX(1) scaleY(1) scaleZ(1)', 'transition':'transform 0.6s', '-moz-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-o-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-webkit-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-ms-transform':'scaleX(1) scaleY(1) scaleZ(1)','transition':'0.5s' }) ",180);
                        setTimeout("$('.prahic4').css({    'transform': 'scaleX(1) scaleY(1) scaleZ(1)', 'transition':'transform 0.6s', '-moz-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-o-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-webkit-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-ms-transform':'scaleX(1) scaleY(1) scaleZ(1)','transition':'0.5s'  }) ",270);
                        setTimeout("$('.prahic5').css({   'transform': 'scaleX(1) scaleY(1) scaleZ(1)', 'transition':'transform 0.6s', '-moz-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-o-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-webkit-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-ms-transform':'scaleX(1) scaleY(1) scaleZ(1)','transition':'0.5s'  }) ",360);
                        setTimeout("$('.prahic6').css({    'transform': 'scaleX(1) scaleY(1) scaleZ(1)', 'transition':'transform 0.6s', '-moz-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-o-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-webkit-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-ms-transform':'scaleX(1) scaleY(1) scaleZ(1)','transition':'0.5s'  }) ",450);
                        setTimeout("$('.prahic7').css({   'transform': 'scaleX(1) scaleY(1) scaleZ(1)', 'transition':'transform 0.6s', '-moz-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-o-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-webkit-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-ms-transform':'scaleX(1) scaleY(1) scaleZ(1)','transition':'0.5s'  }) ",540);
                        setTimeout("$('.prahic8').css({   'transform': 'scaleX(1) scaleY(1) scaleZ(1)', 'transition':'transform 0.6s', '-moz-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-o-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-webkit-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-ms-transform':'scaleX(1) scaleY(1) scaleZ(1)','transition':'0.5s'  }) ",630);
                        setTimeout("$('.prahic9').css({   'transform': 'scaleX(1) scaleY(1) scaleZ(1)', 'transition':'transform 0.6s', '-moz-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-o-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-webkit-transform':'scaleX(1) scaleY(1) scaleZ(1)', '-ms-transform':'scaleX(1) scaleY(1) scaleZ(1)','transition':'0.5s'  }) ",720);
                    }else if(index ==1 | index ==2| index==4| index == 5 ){
                        $('.prahic1, .prahic2,.prahic3, .prahic4,.prahic5, .prahic6, .prahic7, .prahic8, .prahic9').css({    'transform': 'scaleX(0) scaleY(0) scaleZ(0)', 'transition':'transform 0.6s', '-moz-transform':'scaleX(0) scaleY(0) scaleZ(0)', '-o-transform':'scaleX(0) scaleY(0) scaleZ(0)', '-webkit-transform':'scaleX(0) scaleY(0) scaleZ(0)', '-ms-transform':'scaleX(0) scaleY(0) scaleZ(0)'  })
                    }
                };
            },

            //using anchorLink
//                if(anchorLink == 'section3'){
//
//        }
        });
    });
</script>
<script type="text/javascript" src="js/echartsHome.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/echartsExample.js"></script>
</body>
</html>
