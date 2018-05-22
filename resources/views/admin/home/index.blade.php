
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



                        <div class="row top_tiles" style="margin: 10px 0;">
                            <div class="col-md-3 tile">
                                <span>Total Sessions</span>
                                <h2>231,809</h2>
                                <span class="sparkline_two" style="height: 160px;">
                                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                </span>
                            </div>
                            <div class="col-md-3 tile">
                                <span>Total Revenue</span>
                                <h2>$ 1,231,809</h2>
                                <span class="sparkline_two" style="height: 160px;">
                                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                </span>
                            </div>
                            <div class="col-md-3 tile">
                                <span>Total Sessions</span>
                                <h2>231,809</h2>
                                <span class="sparkline_three" style="height: 160px;">
                                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                </span>
                            </div>
                            <div class="col-md-3 tile">
                                <span>Total Sessions</span>
                                <h2>231,809</h2>
                                <span class="sparkline_two" style="height: 160px;">
                                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                </span>
                            </div>
                        </div>



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
                                    <div id="chart_plot_02" class="demo-placeholder" style="padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 759px; height: 280px;" width="759" height="280"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 63px; top: 264px; left: 47px; text-align: center;" class="flot-tick-label tickLabel">21/05/18</div><div style="position: absolute; max-width: 63px; top: 264px; left: 118px; text-align: center;" class="flot-tick-label tickLabel">23/05/18</div><div style="position: absolute; max-width: 63px; top: 264px; left: 189px; text-align: center;" class="flot-tick-label tickLabel">25/05/18</div><div style="position: absolute; max-width: 63px; top: 264px; left: 260px; text-align: center;" class="flot-tick-label tickLabel">27/05/18</div><div style="position: absolute; max-width: 63px; top: 264px; left: 331px; text-align: center;" class="flot-tick-label tickLabel">29/05/18</div><div style="position: absolute; max-width: 63px; top: 264px; left: 402px; text-align: center;" class="flot-tick-label tickLabel">31/05/18</div><div style="position: absolute; max-width: 63px; top: 264px; left: 473px; text-align: center;" class="flot-tick-label tickLabel">02/06/18</div><div style="position: absolute; max-width: 63px; top: 264px; left: 544px; text-align: center;" class="flot-tick-label tickLabel">04/06/18</div><div style="position: absolute; max-width: 63px; top: 264px; left: 615px; text-align: center;" class="flot-tick-label tickLabel">06/06/18</div><div style="position: absolute; max-width: 63px; top: 264px; left: 686px; text-align: center;" class="flot-tick-label tickLabel">08/06/18</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 246px; left: 12px; text-align: right;" class="flot-tick-label tickLabel">0</div><div style="position: absolute; top: 205px; left: 6px; text-align: right;" class="flot-tick-label tickLabel">20</div><div style="position: absolute; top: 164px; left: 6px; text-align: right;" class="flot-tick-label tickLabel">40</div><div style="position: absolute; top: 123px; left: 6px; text-align: right;" class="flot-tick-label tickLabel">60</div><div style="position: absolute; top: 82px; left: 6px; text-align: right;" class="flot-tick-label tickLabel">80</div><div style="position: absolute; top: 41px; left: 0px; text-align: right;" class="flot-tick-label tickLabel">100</div><div style="position: absolute; top: 0px; left: 0px; text-align: right;" class="flot-tick-label tickLabel">120</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 759px; height: 280px;" width="759" height="280"></canvas><div class="legend"><div style="position: absolute; width: 69px; height: 16px; top: -17px; right: 21px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:-17px;right:21px;;font-size:smaller;color:#3f3f3f"><tbody><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(150,202,89);overflow:hidden"></div></div></td><td class="legendLabel">Email Sent&nbsp;&nbsp;</td></tr></tbody></table></div></div>
                                </div>
                                <div class="tiles">
                                    <div class="col-md-4 tile">
                                    <span>Total Sessions</span>
                                    <h2>231,809</h2>
                                    <span class="sparkline11 graph" style="height: 160px;"><canvas style="display: inline-block; width: 198px; height: 40px; vertical-align: top;" width="198" height="40"></canvas></span>
                                    </div>
                                    <div class="col-md-4 tile">
                                    <span>Total Revenue</span>
                                    <h2>$231,809</h2>
                                    <span class="sparkline22 graph" style="height: 160px;"><canvas style="display: inline-block; width: 200px; height: 40px; vertical-align: top;" width="200" height="40"></canvas></span>
                                    </div>
                                    <div class="col-md-4 tile">
                                    <span>Total Sessions</span>
                                    <h2>231,809</h2>
                                    <span class="sparkline11 graph" style="height: 160px;"><canvas style="display: inline-block; width: 198px; height: 40px; vertical-align: top;" width="198" height="40"></canvas></span>
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
    

</script>
@endsection

