@extends('admin.layouts.layout')
@section('title')
  Department Informations
@endsection 
@section('header')
@endsection

                    @section('content')
                        <!-- Start  Breadcrumb -->
                        <div class="row">
                            <div class="col-lg-12  float-right">
                                <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="{{ url('\cpanel') }}">HOME</a></li>
                                    <li><i class="fa fa-users"></i><a href="{{ url('\cpanel\departments') }}">All Departments</a></li>							  	
                                    <li><i class="fa fa-user"></i>Department Informations</li>						  	
                                </ol>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                        <!-- End  Breadcrumb -->
                        
                        <div class="x_panel">
                          <div class="x_title">
                            <h2> {{ $departmentInfo->name }} </h2>
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
                              
                        <div class="x_content">
                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                              <div class="profile_img">
                                <div id="crop-avatar">
                                  <!-- Current avatar -->
                                  {{-- <img class="img-responsive avatar-view"> --}}
                                  <p class="text-center"><img src="{{ getDepartmentImageOrDefaultImage($departmentInfo->image) }}"
                                  class="avatar-view img-responsive" alt="custmoer image" title="Change the avatar"></p>
                                </div>
                              </div>
                              <h3>{{ $departmentInfo->name }}</h3>

                              <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i> {{ status()[$departmentInfo->status] }}
                                </li>
                                <li>
                                  <i class="fa fa-briefcase user-profile-icon"></i> {{ $departmentInfo->description }}
                                </li>
                              </ul>

                              <a href="{{ route('departments.edit', ['id' => $departmentInfo->id]) }}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                              <br />

                              <!-- start Tags -->
                              <h4>Has Jobs</h4>
                              {{-- <ul class="list-unstyled user_data">
                                <li>
                                  <p>Web Applications</p>
                                  <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                                  </div>
                                </li>
                                <li>
                                  <p>Website Design</p>
                                  <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                                  </div>
                                </li>
                                <li>
                                  <p>Automation & Testing</p>
                                  <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                                  </div>
                                </li>
                                <li>
                                  <p>UI / UX</p>
                                  <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                                  </div>
                                </li>
                              </ul> --}}
                              @foreach($departmentInfo->jobs as $job)
                                  <a href="#" class="tag"><i class="fa fa-tag"></i> {{ $job->name }} </a>
                              @endforeach
                              <!-- end of Tags -->

                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">

                              <div class="profile_title">
                                <div class="col-md-6">
                                  <h2>Department Activity Report</h2>
                                </div>
                                <div class="col-md-6">
                                  <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                  </div>
                                </div>
                              </div>
                              <!-- start of user-activity-graph -->
                              <div class="table-responsive">
                                <div id="deptJobChart" style="width:100%; height:360px;"></div> 
                              </div>
                              <!-- end of user-activity-graph -->

                              <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> Reports </a></li>
                                  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">jobs</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                    <!-- start Last jobs -->
                                    {{-- <ul class="messages">
                                      @foreach($departmentInfo->jobs as $offer) 
                                      <li>
                                        {{-- <img src="{{ getDepartmentImageOrDefaultImage($offer->image) }}" class="avatar" alt="Avatar"> --}}
                                      {{--  <div class="message_date"> 
                                          <h3 class="date text-info">{{ customDate($offer->created_at) }}</h3>
                                          <p class="month">{{ getOfferPrice($offer->max_price, $offer->min_price) }} $</p>
                                          <p class="month "> {{ getBalance($offer->max_price, $offer->min_price) }} $</p>
                                        </div>
                                        <div class="message_wrapper">
                                          <h4 class="heading">{{ $offer->title }}</h4>
                                          <blockquote class="message">{{ $offer->description }}</blockquote>
                                          <br />
                                            <ul class="">
                                                <li class=""><strong> Department: </strong><a>{{ $offer->department->name }}</a>
                                                </li>
                                                <li class=""><strong> Level: </strong><a>{{ level()[$offer->level] }}</a> 
                                                </li>
                                                <li class=""><strong> Status: </strong><a>{{ status()[$offer->status] }}</a>
                                                </li>
                                                <li class=""><strong> Powered By: </strong>
                                                <a>
                                                  @if(isset($offer->provider->profile->first_name))
                                                    {{ $offer->provider->profile->first_name." ".$offer->provider->profile->last_name }}
                                                  @else
                                                    Not Accepted
                                                  @endif
                                                </a>
                                              </li>
                                            </ul>
                                          <p class="url">
                                            
                                          </p>
                                        </div>
                                      </li>
                                      <div class="tags">
                                            <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                            <a href="#"><i class="fa fa-paperclip"></i><strong> Tages </strong></a><br />
                                            @foreach($offer->jobs as $job)
                                                <a href="#" class="tag"><i class="fa fa-tag"></i> {{ $job->name }} </a>
                                            @endforeach
                                      </div>
                                      @endforeach

                                    </ul> --}}
                                    <!-- end Last jobs -->

                                  </div>
                                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                    <!-- start departments projects -->
                                    @if($departmentInfo->jobs->count() > 1)
                                    <div class="table-responsive">
                                      <table class="data table table-striped no-margin">
                                        <thead>
                                          <tr>
                                              <th>#ID</th>
                                              <th>Name</th>
                                              <th>Status</th>
                                              <th>Created_at</th>
                                              <th>Totle Offers</th>
                                              <th>Total Providers</th>
                                              <th>Options</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php $id = 0 ?>
                                            @foreach($departmentInfo->jobs as $job) 
                                          <tr>
                                            <td>{{ ++$id }}</td>
                                            <td><a href="{{ route('jobs.show', ['id' => $job->id]) }}">{{ $job->name }}</a></td>
                                            <td><a class="{{ toggleOneZeroClass()[$job->status] }}">{{ status()[$job->status] }}</a></td>
                                            <td><a href="{{ route('jobs.show', ['id' => $job->id]) }}" class="">{{ $job->created_at }}</td></a>
                                            <td><a href="{{ route('jobs.show', ['id' => $job->id]) }}" class="badge bg-main-color">{{ $job->offers->count() }}</td></a>
                                            <td><a href="{{ route('jobs.show', ['id' => $job->id]) }}" class="badge bg-main-color">{{ $job->profiles->count() }}</td></a>
                                            <td>
                                                <a class="btn btn-info btn-xs"   href="{{ route('jobs.edit', ['id' => $job->id]) }}">Edit</a>
                                                <a class="btn btn-danger btn-xs" href="{{ url('cpanel/job/'.$job->id.'/delete') }}">Delete</a>
                                            </td>
                                          </tr>
                                          @endforeach
                                          
                                        </tbody>
                                      </table>
                                    </div>
                                    @else
                                        <p> No jobs To Show...</p>
                                    @endif
                                    <!-- end departments projects -->
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>



                    @endsection
    
@section('footer')

<script>
  
        echarts.init(document.getElementById('deptJobChart')).setOption({

          title : {
              show: true,
              text: '{{ $departmentInfo->name }}', 
              textStyle:{
                color: '#73879c',
              },
              subtext: 'Offers and Provider Report',
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
              data:['Offers','Providers'],
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
                  name: 'Offers', //Name of legend, which should be the name value of a certain series. If it is a pie chart, legend name can also be the name of a single data item // compulsorily set icon as a circle
                  icon: 'roundRect', // Icon types provided by ECharts includes 'circle', 'rect', 'roundRect', 'triangle', 'diamond', 'pin', 'arrow'
                  textStyle: {
                    color: '#ffcc33'
                  }
                },
                {
                  name: 'Providers',
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
              name:'Offers',
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
              name:'Providers',
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
