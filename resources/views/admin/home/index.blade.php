
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
                                    <li><i class="fa fa-home"></i><a href="route('home')">HOME</a></li>
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
                                <span class="count_bottom"><i class="main-color">4% </i> From last Week</span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total New Offer</span>
                                <div class="count main-color">{{ $offernNew->count() }}</div>
                                <span class="count_bottom"><i class="main-color"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i>  Total Done Offer</span>
                                <div class="count">{{ $offernDone->count() }}</div>
                                <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
                                <div class="count">123.50</div>
                                <span class="count_bottom"><i class="main-color"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                                <div class="count">2,315</div>
                                <span class="count_bottom"><i class="main-color"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                                <div class="count">7,325</div>
                                <span class="count_bottom"><i class="main-color"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                            </div>
                        </div>
                        <!-- /top tiles -->



{{-- ------------------------- start Offers Summary sections ---------------------------------- --}}

                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Offers Summary </h2>
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
                                        <div class="demo-container" style="height:100%">
                                            <div class="table-responsive">
                                                <div id="offersRepport" style="width:100%; height:360px;"></div> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="float">
                                        <div class="x_title">
                                            <h2>Top Offers</h2>
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
                                            <a class="pull-left border-main-color profile_thumb">
                                            <i class="fa fa-user main-color"></i>
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
                                            <a class="pull-left border-main-color profile_thumb">
                                            <i class="fa fa-user main-color"></i>
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


{{-- ------------------------- start Public Summary sections ---------------------------------- --}}


                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Public Summary</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a></li>
                                                <li><a href="#">Settings 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="row" style="border-bottom: 1px solid #E0E0E0; padding-bottom: 5px; margin-bottom: 5px;">
                                        <div class="col-md-12">
                                            <div class="row" style="text-align: center;">
                                                <div class="col-md-6">
                                                    <canvas id="offersLocations" height='350' style="margin: 2px 5px 5px 0"></canvas>
                                                </div>
                                                <div class="col-md-6">
                                                    <canvas id="echart_pie" height='350' style="margin: 2px 5px 5px 0"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Providers</h2>
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
                                        <canvas id="echart_sonar" height='350'></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Pie Graph</h2>
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
                                        <canvas id="echart_pie2" height='350'></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Pie Graph</h2>
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
                                        <canvas id="gender" height='350'></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>


{{-- ------------------------- start Traffic Summary sections ---------------------------------- --}}

                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Offers Summary </h2>
                                    <div class="filter">
                                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span>April 21, 2018 - May 20, 2018</span> <b class="caret"></b>
                                    </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="demo-container" style="height:100%">
                                            <div class="table-responsive">
                                                <div id="echart_line" style="width:100%; height:360px;"></div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


{{-- ------------------------- start 3 cotent sections ---------------------------------- --}}

                        <div class="row">
                            <div class="col-md-4">
                                <div class="x_panel">
                                <div class="x_title">
                                    <h3>Top 5 Providers</h3>
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
                                    <h3>Top Profiles</h3>
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
                                    <h3>Top Profiles </h3>
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
            disabled: true,
            //xAxisIndex: [0,2],
        }
        
        ],
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


    var chart = echarts.init(document.getElementById('offersLocations'));

    
    var labelTop = {
        normal : {
            label : {
                show : true,
                position : 'center',
                formatter : '{b}',
                textStyle: {
                    baseline : 'bottom'
                }
            },
            labelLine : {
                show : false
            }
        }
    };
    var labelFromatter = {
        normal : {
            label : {
                formatter : function (params){
                    return 100 - params.value + '%'
                },
                textStyle: {
                    baseline : 'top'
                }
            }
        },
    }
    var labelBottom = {
        normal : {
            color: '#ccc',
            label : {
                show : true,
                position : 'center'
            },
            labelLine : {
                show : false
            }
        }
    };
    var radius = [40, 55];
    chart.setOption({
        legend: {
            show:true,
            bottom: 10,
            data:[
                'khartuom', 'Bahry', 'Omdorman',
            ]
        },
        title: {
            show:true,
            text: 'Offers Locations',
            left: 10,
        },
        toolbox: {
            show : true,
            feature : {
                dataView : {show: true, readOnly: false},
                magicType : {
                    show: true,
                    type: ['pie', 'funnel'],
                    option: {
                        funnel: {
                            width: '20%',
                            height: '30%',
                            itemStyle : {
                                normal : {
                                    label : {
                                        formatter : function (params){
                                            return 'other\n' + params.value + '%\n'
                                        },
                                        textStyle: {
                                            baseline : 'middle'
                                        }
                                    }
                                },
                            }
                        }
                    }
                },
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        series : [
            {
                type : 'pie',
                center : ['50%', '50%'],
                radius : radius,
                itemStyle : labelFromatter,
                data : [
                    {name:'Bahry', value:30, itemStyle : labelBottom},
                    {name:'khartuom', value:54,itemStyle : labelTop},
                    {name:'Omdorman', value:26,itemStyle : labelTop}
                ]
            },
        ]
    });
	   
		
		
		/* ECHRTS */
	


        var theme = {
            color: [
                '#FFCC33', '#34495E', '#BDC3C7', '#3498DB',
                '#2A3F54', '#8abb6f', '#759c6a', '#bfd3b7'
            ],

            title: {
                itemGap: 8,
                textStyle: {
                    fontWeight: 'normal',
                    color: '#408829'
                }
            },

            dataRange: {
                color: ['#1f610a', '#97b58d']
            },

            toolbox: {
                color: ['#408829', '#408829', '#408829', '#408829']
            },

            tooltip: {
                show:true,
                backgroundColor: 'rgba(0,0,0,0.5)',
                axisPointer: {
                    type: 'line',
                    lineStyle: {
                        color: '#408829',
                        type: 'dashed'
                    },
                    crossStyle: {
                        color: '#408829'
                    },
                    shadowStyle: {
                        color: 'rgba(200,200,200,0.3)'
                    }
                }
            },

            dataZoom: {
                dataBackgroundColor: '#eee',
                fillerColor: 'rgba(64,136,41,0.2)',
                handleColor: '#408829'
            },
            grid: {
                borderWidth: 0
            },

            categoryAxis: {
                axisLine: {
                    lineStyle: {
                        color: '#408829'
                    }
                },
                splitLine: {
                    lineStyle: {
                        color: ['#eee']
                    }
                }
            },

            valueAxis: {
                axisLine: {
                    lineStyle: {
                        color: '#408829'
                    }
                },
                splitArea: {
                    show: true,
                    areaStyle: {
                        color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                    }
                },
                splitLine: {
                    lineStyle: {
                        color: ['#eee']
                    }
                }
            },
            timeline: {
                lineStyle: {
                    color: '#408829'
                },
                controlStyle: {
                    normal: {color: '#408829'},
                    emphasis: {color: '#408829'}
                }
            },

            k: {
                itemStyle: {
                    normal: {
                        color: '#68a54a',
                        color0: '#a9cba2',
                        lineStyle: {
                            width: 1,
                            color: '#408829',
                            color0: '#86b379'
                        }
                    }
                }
            },
            map: {
                itemStyle: {
                    normal: {
                        areaStyle: {
                            color: '#ddd'
                        },
                        label: {
                            textStyle: {
                                color: '#c12e34'
                            }
                        }
                    },
                    emphasis: {
                        areaStyle: {
                            color: '#99d2dd'
                        },
                        label: {
                            textStyle: {
                                color: '#c12e34'
                            }
                        }
                    }
                }
            },
            force: {
                itemStyle: {
                    normal: {
                        linkStyle: {
                            strokeColor: '#408829'
                        }
                    }
                }
            },
            chord: {
                padding: 4,
                itemStyle: {
                    normal: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        },
                        chordStyle: {
                            lineStyle: {
                                width: 1,
                                color: 'rgba(128, 128, 128, 0.5)'
                            }
                        }
                    },
                    emphasis: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        },
                        chordStyle: {
                            lineStyle: {
                                width: 1,
                                color: 'rgba(128, 128, 128, 0.5)'
                            }
                        }
                    }
                }
            },
            gauge: {
                startAngle: 225,
                endAngle: -45,
                axisLine: {
                    show: true,
                    lineStyle: {
                        color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                        width: 8
                    }
                },
                axisTick: {
                    splitNumber: 10,
                    length: 12,
                    lineStyle: {
                        color: 'auto'
                    }
                },
                axisLabel: {
                    textStyle: {
                        color: 'auto'
                    }
                },
                splitLine: {
                    length: 18,
                    lineStyle: {
                        color: 'auto'
                    }
                },
                pointer: {
                    length: '90%',
                    color: 'auto'
                },
                title: {
                    textStyle: {
                        color: '#333'
                    }
                },
                detail: {
                    textStyle: {
                        color: 'auto'
                    }
                }
            },
            textStyle: {
                fontFamily: 'Arial, Verdana, sans-serif'
            }
        };
    
    //echart Donut
			  
    if ($('#gender').length ){  
        
        var echartDonut = echarts.init(document.getElementById('gender'), theme);
        
        echartDonut.setOption({
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            calculable: true,
            legend: {
                show:true,
                x: 'center',
                y: 'bottom',
                data: ['Direct Access', 'E-mail Marketing', 'Union Ad', 'Video Ads', 'Search Engine']
            },
            
            toolbox: {
                show: true,
                feature: {
                magicType: {
                    show: true,
                    type: ['pie', 'funnel'],
                    option: {
                        funnel: {
                            x: '25%',
                            width: '50%',
                            funnelAlign: 'center',
                            max: 1548
                        }
                    }
                },
                restore: {
                    show: true,
                    title: "Restore"
                },
                saveAsImage: {
                    show: true,
                    title: "Save Image"
                }
                }
            },
            series: [{
                name: 'Access to the resource',
                type: 'pie',
                radius: ['35%', '50%'],
                itemStyle: {
                normal: {
                    label: {
                    show: true
                    },
                    labelLine: {
                    show: true
                    }
                },
                emphasis: {
                    label: {
                    show: true,
                    position: 'center',
                    textStyle: {
                        fontSize: '14',
                        fontWeight: 'normal'
                    }
                    }
                }
                },
                data: [
                    {
                    value: 335,
                    name: 'Direct Access',
                    }, {
                    value: 310,
                    name: 'E-mail Marketing'
                    }, {
                    value: 234,
                    name: 'Union Ad'
                    }, {
                    value: 135,
                    name: 'Video Ads'
                    }, {
                    value: 1548,
                    name: 'Search Engine'
                    }
                ]
            }]
        });
    } 
        

    //echart Pie Collapse
			  
    if ($('#echart_pie2').length ){ 
        
        var echartPieCollapse = echarts.init(document.getElementById('echart_pie2'), theme);
        
        echartPieCollapse.setOption({
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            x: 'center',
            y: 'bottom',
            data: ['rose1', 'rose2', 'rose3', 'rose4', 'rose5', 'rose6']
        },
        toolbox: {
            show: true,
            feature: {
            magicType: {
                show: true,
                type: ['pie', 'funnel']
            },
            restore: {
                show: true,
                title: "Restore"
            },
            saveAsImage: {
                show: true,
                title: "Save Image"
            }
            }
        },
        calculable: true,
        series: [{
            name: 'Area Mode',
            type: 'pie',
            radius: [25, 90],
            center: ['50%', 170],
            roseType: 'area',
            x: '50%',
            max: 40,
            sort: 'ascending',
            data: [{
            value: 10,
            name: 'rose1'
            }, {
            value: 5,
            name: 'rose2'
            }, {
            value: 15,
            name: 'rose3'
            }, {
            value: 25,
            name: 'rose4'
            }, {
            value: 20,
            name: 'rose5'
            }, {
            value: 35,
            name: 'rose6'
            }]
        }]
        });

    } 
    
    //echart Pie
        
    if ($('#echart_pie').length ){  
        
        var echartPie = echarts.init(document.getElementById('echart_pie'), theme);

        echartPie.setOption({
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            x: 'center',
            y: 'bottom',
            data: ['Direct Access', 'E-mail Marketing', 'Union Ad', 'Video Ads', 'Search Engine']
        },
        toolbox: {
            show: true,
            feature: {
            magicType: {
                show: true,
                type: ['pie', 'funnel'],
                option: {
                funnel: {
                    x: '25%',
                    width: '50%',
                    funnelAlign: 'left',
                    max: 1548
                }
                }
            },
            restore: {
                show: true,
                title: "Restore"
            },
            saveAsImage: {
                show: true,
                title: "Save Image"
            }
            }
        },
        calculable: true,
        series: [{
            name: '访问来源',
            type: 'pie',
            radius: '55%',
            center: ['50%', '48%'],
            data: [{
            value: 335,
            name: 'Direct Access'
            }, {
            value: 310,
            name: 'E-mail Marketing'
            }, {
            value: 234,
            name: 'Union Ad'
            }, {
            value: 135,
            name: 'Video Ads'
            }, {
            value: 1548,
            name: 'Search Engine'
            }]
        }]
        });

        var dataStyle = {
        normal: {
            label: {
            show: false
            },
            labelLine: {
            show: false
            }
        }
        };

        var placeHolderStyle = {
        normal: {
            color: 'rgba(0,0,0,0)',
            label: {
            show: false
            },
            labelLine: {
            show: false
            }
        },
        emphasis: {
            color: 'rgba(0,0,0,0)'
        }
        };

    } 
			 

    //echart Line
			  
    if ($('#echart_line').length ){ 
        
        var echartLine = echarts.init(document.getElementById('echart_line'), theme);

        echartLine.setOption({
        title: {
            text: 'Line Graph',
            subtext: 'Subtitle'
        },
        tooltip: {
            trigger: 'axis'
        },
        legend: {
            x: 220,
            y: 40,
            data: ['Intent', 'Pre-order', 'Deal']
        },
        toolbox: {
            show: true,
            feature: {
            magicType: {
                show: true,
                title: {
                line: 'Line',
                bar: 'Bar',
                stack: 'Stack',
                tiled: 'Tiled'
                },
                type: ['line', 'bar', 'stack', 'tiled']
            },
            restore: {
                show: true,
                title: "Restore"
            },
            saveAsImage: {
                show: true,
                title: "Save Image"
            }
            }
        },
        calculable: true,
        xAxis: [{
            type: 'category',
            boundaryGap: false,
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        }],
        yAxis: [{
            type: 'value'
        }],
        series: [{
            name: 'Deal',
            type: 'line',
            smooth: true,
            itemStyle: {
            normal: {
                areaStyle: {
                type: 'default'
                }
            }
            },
            data: [10, 12, 21, 54, 260, 830, 710]
        }, {
            name: 'Pre-order',
            type: 'line',
            smooth: true,
            itemStyle: {
            normal: {
                areaStyle: {
                type: 'default'
                }
            }
            },
            data: [30, 182, 434, 791, 390, 30, 10]
        }, {
            name: 'Intent',
            type: 'line',
            smooth: true,
            itemStyle: {
            normal: {
                areaStyle: {
                type: 'default'
                }
            }
            },
            data: [1320, 1132, 601, 234, 120, 90, 20]
        }]
        });

    } 


    //echart Radar
        
    if ($('#echart_sonar').length ){ 
        
        var echartRadar = echarts.init(document.getElementById('echart_sonar'), theme);

        echartRadar.setOption({
        title: {
            text: 'Budget vs spending',
            subtext: 'Subtitle'
        },
            tooltip: {
            trigger: 'item'
        },
        legend: {
            orient: 'vertical',
            x: 'right',
            y: 'bottom',
            data: ['Allocated Budget', 'Actual Spending']
        },
        toolbox: {
            show: true,
            feature: {
                restore: {
                    show: true,
                    title: "Restore"
                },
                saveAsImage: {
                    show: true,
                    title: "Save Image"
                }
            }
        },
        polar: [{
            indicator: [{
            text: 'Sales',
            max: 6000
            }, {
            text: 'Administration',
            max: 16000
            }, {
            text: 'Information Techology',
            max: 30000
            }, {
            text: 'Customer Support',
            max: 38000
            }, {
            text: 'Development',
            max: 52000
            }, {
            text: 'Marketing',
            max: 25000
            }]
        }],
        calculable: true,
        series: [{
            name: 'Budget vs spending',
            type: 'radar',
            data: [{
            value: [4300, 10000, 28000, 35000, 50000, 19000],
            name: 'Allocated Budget'
            }, {
            value: [5000, 14000, 28000, 31000, 42000, 21000],
            name: 'Actual Spending'
            }]
        }]
        });

    } 
			  
			 
</script>
@endsection

