
@extends('admin.layouts.layout')
@section('title')
  page title
@endsection
@section('header')
@endsection

                    @section('content')
                        <!-- Start  Breadcrumb -->
                        <div class="row">
                            <div class="col-lg-12  float-right">
                                <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="\">HOME</a></li>
                                    <li><i class="fa fa-laptop"></i>DASHBOARD</li>						  	
                                </ol>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                        <!-- End  Breadcrumb -->


                        <!-- top tiles -->
                        <div class="row tile_count">
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total Customers</span>
                                <div class="count">{{ $customerMale->count() + $customerFemale->count() }}</div>
                                <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                                <div class="count main-color">{{ $customerMale->count() }}</div>
                                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
                                <div class="count">{{ $customerFemale->count() }}</div>
                                <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
                                <div class="count">123.50</div>
                                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                                <div class="count">2,315</div>
                                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                                <div class="count">7,325</div>
                                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                            </div>
                        </div>
                        <!-- /top tiles -->




                        <div class="col-md-12">
                            <div class="x_panel">
                            <div class="x_title">
                                <h2>Transaction Summary <small>Weekly progress</small></h2>
                                <div class="filter">
                                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    <span>April 21, 2018 - May 20, 2018</span> <b class="caret"></b>
                                </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="demo-container" style="height:280px">
                                        <div class="table-responsive">
                                            <div id="offersRepport" style="width:100%; height:360px;"></div> 
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12">
                                <div>
                                    <div class="x_title">
                                    <h2>Top Profiles</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                    </div>

                                    <ul class="list-unstyled top_profiles scroll-view">
                                    <li class="media event">
                                        <a class="pull-left border-aero profile_thumb">
                                        <i class="fa fa-user aero"></i>
                                        </a>
                                        <div class="media-body">
                                        <a class="title" href="#">Ms. Mary Jane</a>
                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                        <p> <small>12 Sales Today</small>
                                        </p>
                                        </div>
                                    </li>
                                    <li class="media event">
                                        <a class="pull-left border-green profile_thumb">
                                        <i class="fa fa-user green"></i>
                                        </a>
                                        <div class="media-body">
                                        <a class="title" href="#">Ms. Mary Jane</a>
                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                        <p> <small>12 Sales Today</small>
                                        </p>
                                        </div>
                                    </li>
                                    <li class="media event">
                                        <a class="pull-left border-blue profile_thumb">
                                        <i class="fa fa-user blue"></i>
                                        </a>
                                        <div class="media-body">
                                        <a class="title" href="#">Ms. Mary Jane</a>
                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                        <p> <small>12 Sales Today</small>
                                        </p>
                                        </div>
                                    </li>
                                    <li class="media event">
                                        <a class="pull-left border-aero profile_thumb">
                                        <i class="fa fa-user aero"></i>
                                        </a>
                                        <div class="media-body">
                                        <a class="title" href="#">Ms. Mary Jane</a>
                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                        <p> <small>12 Sales Today</small>
                                        </p>
                                        </div>
                                    </li>
                                    <li class="media event">
                                        <a class="pull-left border-green profile_thumb">
                                        <i class="fa fa-user green"></i>
                                        </a>
                                        <div class="media-body">
                                        <a class="title" href="#">Ms. Mary Jane</a>
                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                        <p> <small>12 Sales Today</small>
                                        </p>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>



                        <div class="col-md-12">
                            <div class="x_panel">
                            <div class="x_title">
                                <h2>Weekly Summary <small>Activity shares</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <div class="row" style="border-bottom: 1px solid #E0E0E0; padding-bottom: 5px; margin-bottom: 5px;">
                                <div class="col-md-7" style="overflow:hidden;">
                                    <span class="sparkline_one" style="height: 160px; padding: 10px 25px;">
                                        <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                    </span>
                                    <h4 style="margin:18px">Weekly sales progress</h4>
                                </div>
                                <div class="col-md-5">
                                    <div class="row" style="text-align: center;">
                                    <div class="col-md-4">
                                        <canvas id="canvasDoughnut" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                                        <h4 style="margin:0">Bounce Rates</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <canvas id="canvasDoughnut1" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                                        <h4 style="margin:0">New Traffic</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <canvas id="canvasDoughnut2" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                                        <h4 style="margin:0">Device Share</h4>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        
                        <div class="col-md-12">
                            <div class="x_panel">
                            <div class="x_title">
                                <h2>Weekly Summary <small>Activity shares</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <div class="row">
                                    <div class="col-md-6">
                                        <canvas id="canvasDoughnut" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                                        <h4 style="margin:0">Bounce Rates</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <canvas id="canvasDoughnut1" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                                        <h4 style="margin:0">New Traffic</h4>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>





                        <div class="row">
                        <div class="col-md-4">
                            <div class="x_panel">
                            <div class="x_title">
                                <h3>Top 5 Providers <small>Sessions</small></h3>
                                <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item One Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Three Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="x_panel">
                            <div class="x_title">
                                <h3>Top Profiles <small>Sessions</small></h3>
                                <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item One Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Three Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="x_panel">
                            <div class="x_title">
                                <h3>Top Profiles <small>Sessions</small></h3>
                                <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item One Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                                <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Three Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </article>
                            </div>
                            </div>
                        </div>
                        </div>

                        
                    @endsection
    
@section('footer')
<script>
    let canvasDoughnut = $('#canvasDoughnut');
    let massPoprChart = new Chart(canvasDoughnut, {
        type: "doughnut", // pie , line, doughnut, bar, radar, polarArea
        data: {
            labels: ['bahry', 'khartoum', 'omdernam', 'bury'],
            datasets: [{
                label: 'Population',
                data: [784, 1545, 512, 488],
                backgroundColor: ['#1ABB9C', '#2A3F54', '#F99', '#FC3'],// For One By One Section
                borderWidth: '1',
                borderColor: '#FFF',
                hoverBorderWidth: 3,
                hoverBorderColor: '#eeeeee',
            }]
        },
        options: {
            title:{
                display:false,
                text: "The First",
                fontSize: 16
            },
            legend:{
                position:'top',
                display:false,
                labels: {
                    fontColor: '#FC9'
                }
            },
            layout: {
                padding: {
                    left  : 2,
                    right : 2,
                    bottom: 2,
                    top   : 2
                }
            },
            tooltips: {
                enabled: true,
            }
        }
    });
    
    let canvasDoughnut1 = $('#canvasDoughnut1');
    let massPoprChart1 = new Chart(canvasDoughnut1, {
        type: "doughnut", // pie , line, doughnut, bar, radar, polarArea
        data: {
            labels: ['bahry', 'khartoum', 'omdernam'],
            datasets: [{
                label: 'Population',
                data: [784, 1545, 512],
                backgroundColor: ['#1ABB9C', '#F99', '#FC3'],// For One By One Section
                borderWidth: '1',
                borderColor: '#FFF',
                hoverBorderWidth: 3,
                hoverBorderColor: '#eeeeee',
            }]
        },
        options: {
            title:{
                display:false,
                text: "The First",
                fontSize: 16
            },
            legend:{
                position:'top',
                display:false,
                labels: {
                    fontColor: '#FC9'
                }
            },
            layout: {
                padding: {
                    left  : 2,
                    right : 2,
                    bottom: 2,
                    top   : 2
                }
            },
            tooltips: {
                enabled: true,
            }
        }
    });
    
    let canvasDoughnut2 = $('#canvasDoughnut2');
    let massPoprChart2 = new Chart(canvasDoughnut2, {
        type: "pie", // pie , line, doughnut, bar, radar, polarArea
        data: {
            labels: ['bahry', 'khartoum', 'omdernam', 'bury'],
            datasets: [{
                label: 'Population',
                data: [784, 1545, 512, 188],
                backgroundColor: ['#1ABB9C', '#2A3F54', '#F99', '#FC3'],// For One By One Section
                borderWidth: '1',
                borderColor: '#FFF',
                hoverBorderWidth: 3,
                hoverBorderColor: '#eeeeee',
            }]
        },
        options: {
            title:{
                display:false,
                text: "The First",
                fontSize: 16
            },
            legend:{
                position:'top',
                display:false,
                labels: {
                    fontColor: '#FC9'
                }
            },
            layout: {
                padding: {
                    left  : 2,
                    right : 2,
                    bottom: 2,
                    top   : 2
                }
            },
            tooltips: {
                enabled: true,
            }
        }
    });
    

  
        echarts.init(document.getElementById('offersRepport')).setOption({

          title : {
              show: true,
              text: 'Offers Repports', 
              textStyle:{
                color: '#73879c',
              },
              subtext: 'Dayliy Done Offers And New',
              padding: [6, 10],
              itemGap: 10,
              left: 10,
          },
          tooltip : {
              trigger: 'item',
              axisPointer: {
                type: 'shadow',
                axis: 'line',
                label: {
                  show: true,
                  precision: 2,// 5,'tets'
                  extraCssText: 'box-shadow: 0 0 8px rgba(0, 0, 0, 0.9);', // Extra CSS style for floating layer. The following is an example for adding shadow.
                },
              }
          },
          legend: {
              data:['New Offers','Done Offers'],
              type: 'scroll', // scroll, plain  Scrollable legend. It helps when too many legend items needed to be shown.
              show: true,
              orient : 'horizontal', // vertical  default => horizontal
              align:  'right', //  'auto','left','right'
              padding: [10, 5],
              itemGap: 25, // The distance between each legend, horizontal distance in horizontal layout, and vertical distance in vertical layout.
              itemWidth: 25, // itemHeight = Image width of legend symbol.
              selectedMode: true,  // Selected mode of legend, which controls whether series can be toggled displaying by clicking legends. It is enabled by default, and you may set it to be false to disabled it.
              selectedMode: 'multiple',  //Besides, it can be set to 'single' or 'multiple', for single selection and multiple selection.
              inactiveColor: '#DDD', // Legend color when not selected.
              textStyle: {
                fontWeight: 'bold', // default => normal
              },
              data: [
                {
                  name: 'New Offers', //Name of legend, which should be the name value of a certain series. If it is a pie chart, legend name can also be the name of a single data item // compulsorily set icon as a circle
                  icon: 'roundRect', // Icon types provided by ECharts includes 'circle', 'rect', 'roundRect', 'triangle', 'diamond', 'pin', 'arrow'
                  textStyle: {
                    color: '#ffcc33'
                  }
                },
                {
                  name: 'Done Offers',
                  icon: 'pin',
                  textStyle: {
                    color: '#2f4554'
                  }
                },
              ]
          },
          grid: {
            show: true,
            left: '10%',
            tooltip: {
              show: true,
              trigger: 'axis',
              axisPointer: {
                type: 'cross',
                axis: 'x', 
                label: {
                  show: true,
                  precision: 2,
                  extraCssText: 'box-shadow: 10 10 8px rgba(0, 0, 0, 0.5);',
                },
                lineStyle: {
                  color: {
                      type: 'radial',
                      x: 0.5,
                      y: 0.5,
                      r: 0.5,
                      colorStops: [{
                          offset: 0, color: 'red' // color at 0% position
                      }, {
                          offset: 1, color: 'blue' // color at 100% position
                      }],
                      globalCoord: false // false by default
                  }
                },
                shadowStyle: {
                  color: {
                      type: 'radial',
                      x: 0.5,
                      y: 0.5,
                      r: 0.5,
                      colorStops: [{
                          offset: 0, color: 'red' // color at 0% position
                      }, {
                          offset: 1, color: 'blue' // color at 100% position
                      }],
                      globalCoord: false // false by default
                  }
                }
              },
              position: {
                  position: ['50%', '50%']
              }
            }
          },
          toolbox: {
              show : true,
              orient: 'vertical',
              itemSize: 15,
              itemGap: 10,
              showTitle: true,
              feature : {
                mark : {show: true},
                dataView : {
                  show: true, 
                  readOnly: false,
                  lang: ['data view','turn off', 'refresh'],
                  textareaBorderColor: '#0FF',
                  title: 'View Data As Table',
                },
                magicType : {
                  show: true, 
                  type: ['line', 'bar', 'pie', 'stack'],
                  title: {
                    line: 'line',
                    bar: 'bar',
                    pie: 'pie',
                    stack: 'stack',
                  }
                },
                dataZoom: {
                  title: {
                    zoom: 'Area Zooming',
                    back: 'Restore Area Zooming',
                  },
                },
                restore : {
                  show: true,
                  title: 'Restore',
                },
                saveAsImage : {
                  show: true,
                  type: 'jpeg', 
                  title: 'Save Image As',
                  pixelRatio: 55, // Resolution ratio to save image, whose default value is that of the container. Values larger than 1 (e.g.: 2) is supported when you need higher resolution.
                }
              }
          },
          aria: {
              show: true
          },
          calculable : true,
          xAxis : [
              {
                /*          

                  'value' Numerical axis, suitable for continuous data.

                  'category' Category axis, suitable for discrete category data. Data should only be set via data for this type.

                  'time' Time axis, suitable for continuous time series data. As compared to value axis, it has a better formatting for time and a different tick calculation method. For example, it decides to use month, week, day or hour for tick based on the range of span.

                  'log' Log axis, suitable for log data.

                */
                  type : 'category', 
                  data : ['web developer','mopile Application','Teaster','Programming','Graphical','Designer','Teatcher','Worker','SEO','Freelancer','Writer','Devolper'],
                
                  show: true,
                  position: 'bottom',
                  offset: 10,  //Offset of x axis relative to default position. Useful when multiple x axis has same position value.
                  name: 'Dept',
                  nameLocation: 'start', //  'start' 'middle' or 'center'  'end'
                  nameGap: 30, //Gap between axis name and axis line.
                  nameRotate: 0, //Rotation of axis name.
                  inverse: 0, // Whether axis is inversed. New option from ECharts 3.
                  boundaryGap: ['50%', '20%'], 
                  //max: 2000,
                  //min: 10,
                  scale: true, //It is available only in numerical axis, i.e., type: 'value'.
                  //It specifies whether not to contain zero position of axis compulsively. When it is set to be true, the axis may not contain zero position, which is useful in the scatter chart for both value axes.
                  //This configuration item is unavailable when the min and max are set.
                  //splitNumber: 4,//
                  //minInterval: ,// Maximum gap between split lines.
                  /*
                    For example, in time axis (type is 'time'), it can be set to be 3600 * 24 * 1000 to make sure that the gap between axis labels is less than or equal to one day.

                    {
                        maxInterval: 3600 * 1000 * 24
                    }
                    It is available only for axis of type 'value' or 'time'.
                  */

                  axisLine:{
                    show: true,
                    onZero: false,
                    onZeroAxisIndex: 5,

                    // Name list of all categories
                  data : ['web developer','mopile Application','Teaster','Programming','Graphical','Designer','Teatcher','Worker','SEO','Freelancer','Writer','Devolper'],                    data: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                    // Each item could also be a specific configuration item.
                    // In this case, `value` is used as the category name.
                    data: [{
                        value: 'web develope',
                        // Highlight Monday
                        textStyle: {
                            fontSize: 20,
                            color: 'red'
                        }
                    }, 'mopile Application','Teaster','Programming','Graphical','Designer','Teatcher','Worker','SEO','Freelancer','Writer','Devolper']


                  }
                                
                }
          ],
          yAxis : [
              {
                  type : 'value'
              },
              {
                min: 300,
              }
          ],
          dataZoom:[
            {
              type: 'inside',
              disabled: false,
              //xAxisIndex: [0,2],
            }
            
          ],
          /*visualMap:[
            { // the first visualMap component
            type: 'continuous', // defined to be continuous viusalMap
            },
            { // the sencond visualMap component
                type: 'piecewise', // defined to be piecewise visualMap
            }
          ],*/

          /*series : [
              {name: 'Shanghai', value: 251},
              {name: 'Haikou', value: 21},
              // Mark as `visualMap: false`, then this item does not controlled by visualMap any more,
              // and series visual config (like color, symbol, ...) can be used to this item.
              {name: 'Beijing', value: 821, },
          ],
          */

          series : [
            {
              name:'New Offers',
              type:'bar',
              color: ['#ffcc33'],
              data:[2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
              markPoint : {
                data : [
                  {type : 'max', name: 'maximum'},
                  {type : 'min', name: 'minimum'}
                ]
              },
              markLine : {
                data : [
                  {type : 'average', name: 'average'}
                ]
              },
              textStyle: {
                    color: '#ffcc33'
                }
            },
            {
              name:'Done Offers',
              type:'bar',
              color: ['#2f4554'],
              data:[2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3], 
              markPoint : {
                data : [
                  {name : 'max', value : 182.2, xAxis: 7, yAxis: 183, symbolSize:50},
                  {name : 'min', value : 2.3, xAxis: 11, yAxis: 3}
                ]
              },
              markLine : {
                data : [
                  {type : 'average', name : 'average'}
                ]
              }
            }
          ] 
        });


</script>
@endsection

