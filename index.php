        <?php  
            // $this->registerCssFile('./test/css/bootstrap.css');
            // $this->registerCssFile('./font-awesome/css/font-awesome.min.css');
            //$this->registerCssFile('./test/fonts/simple-line-icons.css');
        $this->registerCssFile('./css/animate.css');
        $this->registerCssFile('./css/home.css');

        $this->registerJsFile('./js/modernizr.custom.js');
        $this->registerJsFile('./js/jquery.min.js');
            // $this->registerJsFile('./test/js/bootstrap.min.js');
        $this->registerJsFile('./js/jquery.parallax-1.1.3.js');
        $this->registerJsFile('./js/imagesloaded.pkgd.js');
        $this->registerJsFile('./js/jquery.sticky.js');
        $this->registerJsFile('./js/smoothscroll.js');
        $this->registerJsFile('./js/wow.min.js');
        $this->registerJsFile('./js/jquery.easypiechart.js');
        $this->registerJsFile('./js/waypoints.min.js');
        $this->registerJsFile('./js/jquery.cbpQTRotator.js');
        $this->registerJsFile('./js/custom.js');

        \miloschuman\highcharts\HighchartsAsset::register($this)->withScripts(['highcharts', 'highcharts-more', 'modules/exporting']);
        $this->title="国科云端";
        ?>

        <!-- 首页覆写样式 -->
        <style type="text/css">
            .wrap > .container-fluid{
                padding: 50px 0 0;
            }
            .row{
                margin-right: 0;
                margin-left: 0;
            }
            a:hover{
                text-decoration: none;
            }
        </style>

        <!-- 首页覆写样式 -->

        <!-- 链接预加载 -->
        <!-- <script src="./js/instantclick.min.js" data-no-instant></script> -->
        <!-- <script data-no-instant>InstantClick.init();</script> -->
        <!--兼容IE8************-->
        <div id="web-alert" class="web-alert fs14 text-center">
            <p>您的浏览器版本过低，页面可能会显示不完整，建议您更新或切换其它浏览器。</p>
        </div>
        <!-- 回到顶部 -->
        <section id="home"></section>
        <section>
            <a href="#services">
                <div class="scroll-down">
                    <span>
                        <i class="fa fa-angle-down fa-2x"></i>
                    </span>
                </div>
            </a>
            <video id="video_cc" src="images/video_01.MP4" autoplay="autoplay" controls="controls" loop="loop" width="100%"></video>
            <!--兼容IE8************在ie8下显示下边的flash -->
                <!--[if IE 8]>
                    <object style="margin-top:-20px;" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="1920" height="1080">
                        <param name="movie" value="images/video_01.swf" />
                        <param name="quality" value="high" />
                        <embed src="images/video_01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="1920" height="1080"></embed>
                    </object>
                    <![endif]-->
                </section>
                <!-- Home end -->

                <!-- Services start -->
                <section id="services" class="pfblock pfblock-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="pfblock-header wow animated fadeInUp">
                                    <h2 class="pfblock-title">国科云端<p class="introduce m10">国科云端（北京）网络科技有限公司</p></h2>
                                    <div class="pfblock-line"><img src="images/line.png" width="300"></div>
                                    <div class="pfblock-subtitle">
                                        <p>国科云端创始团队具有15年水处理行业从业经验，拥有强大的研发制造能力及安装施工能力，可提供包括技术咨询、运营托管、节能投资等服务。专注于为啤酒饮料、汽车制造、制药、采矿等行业提供净水及污水处理的实时监测、智能预警、模拟决策等服务；并提供设备管理、生产管理、能源管理、节能投资等整套解决方案。致力于河流、湖泊、矿山的监测、预警、模拟决策系统的开发与实施。</p>
                                        <!-- 专业品质，值得信赖 -->
                                    <!-- 远程诊断设备故障，避免多次出差<br>
                                    智能计算最佳耗材用量，降低吨水成本<br>
                                    准确记录零件寿命，确保各单元完成额定产生量<br>
                                    智能分析最佳保养维护时间（洗膜等），延长使用寿命 -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="iconbox wow slideInLeft">
                                <div class="iconbox-icon">
                                    <span class="animated icon_transform  infinite fa fa-balance-scale img-thumbnail"></span>
                                </div>
                                <div class="iconbox-text">
                                    <h4 class="iconbox-title">行业技术</h4>
                                    <div class="iconbox-desc">
                                        我公司在多年水处理经验，针对不同的水处理问题，分析一套合理有效的方法，为水处理行业的各种问题提供助力。
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="iconbox wow slideInLeft">
                                <div class="iconbox-icon">
                                    <span class="animated icon_transform infinite fa fa-random img-thumbnail"></span>
                                </div>
                                <div class="iconbox-text">
                                    <h4 class="iconbox-title">专家指导</h4>
                                    <div class="iconbox-desc">
                                        我们有专家在致力于水环境治理，节能，环保领域为我们提供专业指导，会给您提供最优质的解决方案。
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="iconbox wow slideInRight">
                                <div class="iconbox-icon">
                                    <span class="animated icon_transform infinite fa fa-cubes img-thumbnail"></span>
                                </div>
                                <div class="iconbox-text">
                                    <h4 class="iconbox-title">信息技术</h4>
                                    <div class="iconbox-desc">
                                        设备联网模块通过4G网络将生产设备连接到互联网，利用开放接口联通PLC、远传仪表、网络设备并实现实时数据采集。
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="iconbox wow slideInRight">
                                <div class="iconbox-icon">
                                    <span class="animated icon_transform infinite fa fa-cloud-upload img-thumbnail"></span>
                                </div>
                                <div class="iconbox-text">
                                    <h4 class="iconbox-title">云管理</h4>
                                    <div class="iconbox-desc">
                                        国内首款“互联网+水处理工业” 的云服务软件产品，能为终端用户提供实用的设备管理工具，并为设备厂商提供高效的售后服务工具。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .row -->
                </div><!-- .container -->
            </section>
            <!-- Services end -->
            <!-- Portfolio start -->
            <section id="portfolio" class="pfblock">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">专业分类</h2>
                                <div class="pfblock-line"><img src="images/line.png" width="300"></div>
                                <div class="pfblock-subtitle">
                                    “水处理“就是通过各种物理和化学的手段，去除水中一些对生产、生活不需要的有害的物质，是对水做滤净化处理。由于社会生产、生活与水密切相关，因此，水处理领域涉及的应用范围十分广泛，构成了一个庞大的产业应用。
                                </div>
                            </div>
                        </div>
                    </div><!-- .row -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="grid wow animated zoomIn">
                                <figure class="effect-bubba">
                                    <img src="images/item-1.jpg" alt="img01"/>
                                    <figcaption>
                                        <h2>水处理</h2>
                                        <p>您杯中的水真的纯净么？</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="grid wow animated zoomIn">
                                <figure class="effect-bubba">
                                    <img src="images/item-2.jpg" alt="img01"/>
                                    <figcaption>
                                        <h2>污水处理</h2>
                                        <p>如何再次利用你，污水！</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="grid wow animated zoomIn">
                                <figure class="effect-bubba">
                                    <img src="images/item-5.jpg" alt="img01"/>
                                    <figcaption>
                                        <h2>矿山水处理</h2>
                                        <p>公园喷泉：我们在这里等你，你要快来。</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="grid wow animated zoomIn">
                                <figure class="effect-bubba">
                                    <img src="images/item-4.jpg" alt="img01"/>
                                    <figcaption>
                                        <h2>河流水处理</h2>
                                        <p>我们是大自然的血液。</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="grid wow animated zoomIn">
                                <figure class="effect-bubba">
                                    <img src="images/item-3.jpg" alt="img01"/>
                                    <figcaption>
                                        <h2>......</h2>
                                        <p>改善环境，从这里开始。</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="grid wow animated zoomIn">
                                <figure class="effect-bubba">
                                    <img src="images/item-6.jpg" alt="img01"/>
                                    <figcaption>
                                        <h2>......</h2>
                                        <p>改善环境，从这里开始。</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div><!-- .contaier -->
            </section>

            <!-- Portfolio end -->

            <!-- Skills start -->
            <section class="pfblock pfblock-gray" id="skills">
                <div class="row skills skills_cover">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="pfblock-header wow animated fadeInUp">
                                    <h2 class="pfblock-title">图表分析</h2>
                                    <div class="pfblock-line"><img src="images/line.png" width="300"></div>
                                    <div class="pfblock-subtitle">
                                        设备管理模块提供便捷、美观的图表看板系统，能方便直观的查看实时数据及设备运行状况。国科云端为网络平台，因此具有良好的跨地域、跨平台性能，只需要一个浏览器，即可随时随地关注接收设备运行状态，大大提升了工作效率。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .row -->
                    <!--图表开始-->
                    <div class="row">
                        <div class="container">
                            <div class="col-md-6">
                                <h4>报警次数统计</h4>
                                <div id="warning"></div>
                                <div style="color:#fff;" class="text-center">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>月用水量统计</h4>
                                <div id="container"></div>
                                <div style="color:#fff;" class="text-center">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>水泵耗电量与预计耗电量(kW·h)</h4>
                                <div id="wendu"></div>
                                <div style="color:#fff;" class="text-center">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>水平衡</h4>
                                <div id="water"></div>
                                <div style="color:#fff;" class="text-center">
                                    <!-- 图表底部可作详细解释<div>
                                        <p>可以按小时或者天将各监控用水点所进出的水进行汇总统计</p>
                                        <p>让用户在柱状图中清楚的看出各类水的使用情况</p>
                                        <p>分析进出水量及时发现问题保证水的有效是使用</p>
                                        <p>可以让用户及时的发现异常是数据，及时发现问题避免更大损失</p>
                                    </div> -->
                                </div>
                            </div>
                        </div><!--图表结束-->
                    </div><!--End row -->       
                </section>   
                <!-- Skills end -->
                <!-- Testimonials start -->
                <section id="testimonials" class="pfblock">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="pfblock-header wow animated fadeInUp">
                                    <h2 class="pfblock-title">我国水资源储藏量是多少呢？</h2>
                                    <div class="pfblock-line"><img src="images/line.png" width="300"></div>
                                    <div class="pfblock-subtitle">
                                        我国水资源总量占世界水资源总量的7%，居第6位。但人均占有量仅有2400m3，为世界人均水量的25%，居世界第119位，是全球13个贫水国之一。
                                    </div>
                                </div>
                            </div>
                        </div><!-- .row -->
                        <div class="row">
                            <div id="cbp-qtrotator" class="cbp-qtrotator">
                                <div class="cbp-qtcontent">
                                    <img src="images/client-1.png" alt="client-1" class="img_transform" />
                                    <blockquote>
                                      <p>利用最先进的技术，为节能、环保领域效率的提高、成本的降低贡献力量。</p>
                                      <p>——公司使命</p>
                                  </blockquote>
                              </div>
                              <div class="cbp-qtcontent">
                                <img src="images/client-2.png" alt="client-2" class="img_transform" />
                                <blockquote>
                                  <p>成为节能、环保领域一站式服务的领导者。</p>
                                  <p>——目标愿景</p>
                              </blockquote>
                          </div>
                      </div>      
                  </div><!-- .row -->                 
              </div><!-- .row -->
              <div class="scroll-up animated pulse infinite">
                <a href="#home"><i class="fa fa-hand-o-up"></i></a>
            </div>
        </section>
        <!-- CallToAction start -->
        <?php
        //生成试用版的链接
        $trial = new \yii\web\UrlManager();
        if(strstr($_SERVER['HTTP_HOST'],'guokeit.net')){
            $trial->setHostInfo('http://trial.guokeit.net');
            $trial->setScriptUrl('');
        }else {
            $trial->setScriptUrl('/guokeit.net/trial/web/index.php');
        }
        ?>

        <section class="calltoaction">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 fs24">
                        <p>现在注册，即可体验国科云产品服务</p>
                        <a class="col-md-1 fs16" href="<?= $trial->createAbsoluteUrl(['/site/login']) ?>">了解详情</a>
                    </div>
                </div><!-- .row-->
            </div><!-- .container -->
        </section>
        <!-- CallToAction end -->


        <!-- 图表开始 -->
        <script>
            function fullscreen() {
                var masthead = jQuery('.master-video-wrapper');
                var windowH = jQuery(window).height();
                var windowW = jQuery(window).width() ;

                masthead.width(windowW);
                masthead.height(windowH);
            }

            function headerParallax() {
                var st = jQuery(window).scrollTop();
                var headerScroll = jQuery('.master-body');

                if (st < 500) {
                    headerScroll.css({
                        'opacity' : 1-st/1000,
                        '-webkit-filter' : 'blur(' + st/90 + 'px)',
                        '-moz-filter' : 'blur(' + st/90 + 'px)',
                        '-o-filter' : 'blur(' + st/90 + 'px)',
                        '-ms-filter' : 'blur(' + st/90 + 'px)',
                        filter : 'blur(' + st/90 + 'px)'
                    });
                    jQuery('.master-arrow').css('opacity', 0.5-st/250);
                    headerScroll.css({
                        '-webkit-transform' : 'translateY(' + st/7 + '%)',
                        '-ms-transform' : 'translateY(' + st/7 + '%)',
                        transform : 'translateY(' + st/7 + '%)'
                    });
                }
            }

            jQuery(document).ready(function() {
                jQuery(window).resize(fullscreen);
                jQuery(window).scroll(headerParallax);
                fullscreen();
            });
        </script>


        <script>
            $(function () {
                $('#container').highcharts({
                    title: {
                        text: '',
                        x: -20 //center
                    },
                    chart: {
                        type: 'spline',
                        backgroundColor:'none'
                    },
                    credits: {
                        enabled: false
                    },
                    exporting: {
                        enabled: false
                    },
                    xAxis: {
                        categories:  ['一月', '二月', '三月','四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月']
                    },
                    yAxis: {
                        title: {
                            text: ''
                        },
                    },
                    tooltip: {
                        valueSuffix: '吨'
                    },
                    series: [{
                        name: '原水',
                        data: [40000, 41000, 42200, 43300, 46400, 47500, 47600, 46400, 45300, 44200, 43000, 42001]
                    }, {
                        name: '软化水',
                        data: [30000, 32000, 33200, 34300, 35400, 36500, 37600, 36400, 35300, 34200, 33000, 32001]
                    },  {
                        name: '纯水',
                        data: [30100, 32000, 34200, 36300, 38400, 40000, 38600, 35400, 35200, 35250, 32000, 31001]
                    }]

                });

                $('#water').highcharts({
                    chart: {
                        type: 'column',
                        backgroundColor:'none'
                    },
                    title: {
                        text: '' //水平衡
                    },
                    xAxis: {
                        categories: ['5-01', '5-02', '5-03','5-04', '5-05', '5-06', '5-07', '5-08', '5-09', '5-10', '5-11', '5-12', '5-13', '5-14', '5-15']
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: null
                        },
                    },
                    tooltip: {
                        headerFormat: '<b>{point.x}</b><br/>',
                        pointFormat: '{series.name}: {point.y}<br/>总计 : {point.stackTotal}'
                    },
                    navigation: {
                        buttonOptions: {
                            enabled: false
                        }
                    },
                    credits: {
                        enabled:false
                    },
                    plotOptions: {
                        column: {
                            stacking: 'normal',
                            dataLabels: {
                                enabled: false,
                                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                                style: {
                                    textShadow: '0 0 3px black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: '1#RO浓水回收',
                        data: [100.66, 100.59, 100.04, 100.33, 100.32, 100.03, 100.77, 100.26, 100.39, 100.55, 100.38, 100.97, 100.08, 120.63, 100.22]
                    }, {
                        name: '2#RO浓水回收',
                        data: [251.77, 251.51, 250.54, 251.33, 251.92, 251.03, 253.65, 251.26, 253.33, 250.55, 250.03, 251.97, 251.28, 251.83, 251.42]
                    }, {
                        name: '1#RO产水',
                        data: [500.03,562.73,570.61,557.43,545.74,558.48,605.75,557.36,511.42,553.43,625.15,568.96,555.53,563.96,551.89]
                    },{
                        name: '2#RO产水',
                        data: [500.03,500.21,500.47,500.69,500.81,500.71,500.45,500.36,500.53,500.43,500.15,500.66,500.33,500.76,500.89]
                    },{
                        name: '反洗水进水',
                        data: [35,34.36, 35.33, 34.36, 35.93, 34.69, 34.96, 35.32, 34.52, 34, 35.31, 34.55,35.96,34.01,33.96]
                    },{
                        name: '未知',
                        data: [27.32, 26.89, 27.21, 26.89, 26.32,27.36,26.55,27.52,27.31,26.36,27.12,26.59,27.3,26,27.88]
                    }]
                });

                var ranges = [
                [1425848521542, 0.342, 0.262],
                [1425848581542, 0.343, 0.262],
                [1425848641542, 0.344, 0.275],
                [1425848701542, 0.346, 0.265],
                [1425848761542, 0.34, 0.26],
                [1425848821542, 0.347, 0.274],
                [1425848881542, 0.337, 0.27],
                [1425848941542, 0.335, 0.262],
                [1425849001542, 0.346, 0.253],
                [1425849061542, 0.338, 0.252],
                [1425849121542, 0.332, 0.249],
                [1425849181542, 0.361, 0.264],
                [1425849241542, 0.324, 0.236],
                [1425849301542, 0.328, 0.271],
                [1425849361542, 0.315, 0.261]
                ],
                averages = [
                [1425848521542, 0.080],
                [1425848581542, 0.083],
                [1425848641542, 0.069],
                [1425848701542, 0.081],
                [1425848761542, 0.08],
                [1425848821542, 0.073],
                [1425848881542, 0.067],
                [1425848941542, 0.073],
                [1425849001542, 0.093],
                [1425849061542, 0.085],
                [1425849121542, 0.083],
                [1425849181542, 0.097],
                [1425849241542, 0.088],
                [1425849301542, 0.057],
                [1425849361542, 0.054]
                ];


                // $('#wendu').highcharts({

                // });
               var charts = new Highcharts.Chart({
                    "chart":{
                        "renderTo":"wendu",
                        backgroundColor:'none'
                    },
                        "title":{"text":""},
                        navigation: {
                            buttonOptions: {
                                enabled: false
                            },
                            chart: {
                                type: 'column',
                                backgroundColor:'none'
                            },
                            title: {
                                text: '' //水平衡
                            },
                },
                colors: ['#D9534F','#7cb5ec',  '#90ed7d', '#f7a35c', '#8085e9', '#f15c80', '#e4d354', '#8085e8', '#8d4653', '#91e8e1'] ,
                //colors: ['#434348', '#90ed7d', '#f7a35c', '#8085e9', '#f15c80', '#e4d354', '#8085e8', '#8d4653', '#91e8e1',] ,
                //colors: ['#d9534f', '#7CB5EC', '#f7a35c', '#8085e9', '#f15c80', '#e4d354', '#8085e8', '#8d4653', '#91e8e1'] ,
                "credits":{"enabled":false},
                "xAxis":{
                    "categories":[ "09-28" , "09-29" , "09-30" , "10-01" , "10-02" , "10-03" , "10-04" , "10-05" , "10-06" , "10-07" , "10-08" , "10-09" , "10-10", "10-11" , "10-12" ]
                },
                       "yAxis":[
                    {
                        min: 0,
                        "title":{"text":null},
                        "labels":{"format":"{value} "}
                    },
                    {
                        "title":{"text":null},
                        "labels":{
                            "format":null,
                            enabled:false
                        },
                        "opposite":true
                    }
                ],
                    "plotOptions":{
                        "column":{
                            "stacking":"normal",
                            "pointWidth":16
                        },
                    },
                    "tooltip":{"shared":true},
                    "series":[
                     {
                         "name":"偏差度","type":"spline",
                         "type":'spline',
                         "data":[0.34,4.16,0.16,-1.86,-0.18,1.82,1.36,0.94,-2.99,-1.7,-2.64,-14.46,-2.91,-6.07,-9.65],
                        // "data":[195.11444,2263.41856,90.62144,-1106.00808,-106.15374,1012.5988600000002,756.8631200000001,416.2555,-1765.0328800000002,-1003.1972,-1571.46528,-11289.87636,-1648.3956899999998,-3801.48318,-2846.6245500000005],
                         "zIndex":6,
                         "yAxis":1,
                         "tooltip":{"valueSuffix":" %"},
                         //"color":"#d9534f",
                     },
                    {
                        "name":"预计耗电量",
                        "type":"spline",
                        "zIndex":5,
                       // "data":[5738.66, 5440.91, 5663.84, 5946.28, 5897.43, 5563.73, 5565.17, 4428.25, 5903.12, 5901.16, 5952.52, 7807.66, //5664.59, 6262.74, 2949.87],
                        "data":[573.866, 544.091, 566.384, 594.628, 589.743, 556.373, 556.517, 442.825, 590.312, 590.116, 595.252, 780.766, 566.459, 626.274, 294.987],
                        "tooltip":{"valueSuffix":" kW·h"},
                    },

                    {
                        "name":"进水泵1#潜污泵耗电量",
                        "type":"column",
                        // "data":[ 3755.7, 3750.93, 3785.86, 3777.76, 3764.68, 3757.7, 3756.67, 2599.58, 3738.04, 3774.31, 3796.67, 3726.26, //3728.45, 3689.94, 1532.04],
                        "data":[ 375.57, 375.093, 378.586, 377.776, 376.468, 375.77, 375.667, 259.958, 373.804, 377.431, 379.667, 372.626, 372.845, 368.994, 153.204],
                        "tooltip":{"valueSuffix":" kW·h"}},
                        {
                            "name":"进水泵2#潜污泵耗电量",
                            "type":"column",
                            zones:[{
                                //color:'#F7A35C'
                            }],
                            "data":[ 200.234, 191.657, 188.722, 205.801, 212.218, 190.727, 188.401, 187.02, 198.843, 202.64, 199.864, 295.254, 177.149, 219.241, 113.323 ],
                            "tooltip":{
                                "valueSuffix":"kW·h"
                            }},


                                ]
                        });
                $('#warning').highcharts({
                    chart: {
                        type: 'column',
                        //options3d: {
                        //    enabled: true,
                        //    alpha: 10,
                        //    beta: 25,
                        //    depth: 90
                        //},
                        backgroundColor:'none'
                    },
                    title: {
                        text: '' //报警次数统计
                    },
                    subtitle: {
                        text: ''
                    },
                    plotOptions: {
                        column: {
                            depth: 40
                        }
                    },
                    xAxis: {
                        categories: ['原水泵压力','1#产水电导率','原水电导率','1#主机回收率','2#产水电导率','RO水箱液位','1#浓水压力','2#浓水压力']
                    },
                    navigation: {
                        buttonOptions: {
                            enabled: false
                        }
                    },
                    credits: {
                        enabled:false
                    },
                    yAxis: {
                        title: {
                            text: null
                        }
                    },
                    series: [{
                        name: '报警次数',
                        data: [22,17,15, 15, 13, 12,9, 6],
                        color:'#FFCF5C'
                    }]
                });

            });
        </script>
        <!-- 图表结束 -->

        <!-- 主要用于判断ipad，video没有control属性,ipad不能正常播放视频 -->
        <script type="text/javascript">
            function browerType() {
                var sUserAgent = navigator.userAgent.toLowerCase();   //浏览器的用户代理设置为小写，再进行匹配
                console.log(sUserAgent);
                var isIpad = sUserAgent.match(/ipad/i) == "ipad";   //或者利用indexOf方法来匹配
                var isIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
                var isMidp = sUserAgent.match(/midp/i) == "midp";  //移动信息设备描述MIDP是一套Java应用编程接口，多适用于塞班系统
                var isUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";  //CVS标签
                var isUc = sUserAgent.match(/ucweb/i) == "ucweb";
                var isAndroid = sUserAgent.match(/android/i) == "android";
                var isCe = sUserAgent.match(/windows ce/i) == "windows ce";
                var isWM = sUserAgent.match(/windows mobil/i) == "windows mobil";
                console.log(sUserAgent);
                if (isIpad || isIphoneOs || isMidp || isUc7 || isUc || isAndroid || isCe || isWM) {
                    $('#services').removeClass('pfblock').addClass('pt50');
                    $('#portfolio').removeClass('pfblock').addClass('pt50');
                    $('#skills').removeClass('pfblock').addClass('pt50');
                    $('#testimonials').removeClass('pfblock').addClass('pt50');
                } else {
                    $("#video_cc").removeAttr('controls');
                    //alert('该设备为PC设备');
                }
            }
            browerType();
        </script>
        <!--兼容IE8************判断出ie8，提示浏览器版本过低 -->
        <script type="text/javascript">
            var Sys = {};
            var ua = navigator.userAgent.toLowerCase();
            var s;
            (s = ua.match(/msie ([\d.]+)/)) ? Sys.ie = s[1] : 0;
            if(Sys.ie <= '8.0'){
                // alert("ie8.0");
                document.getElementById("web-alert").style.display="block";
                document.getElementById("cbp-qtrotator").style.display="none";
            }
        </script>

        <!-- 站长统计 -->
        <div style="display: none;">
            <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1262027837'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1262027837%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
        </div>
        <!-- 站长统计 -->
