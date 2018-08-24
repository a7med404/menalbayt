@extends('admin.layouts.layout')
@section('title')
  Offer Informations
@endsection 
@section('header')
@endsection

                @section('content')
                    <!-- Start  Breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12  float-right">
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="{{ url('\cpanel') }}">HOME</a></li>
                                <li><i class="fa fa-users"></i><a href="{{ url('\cpanel\offers') }}">All Offers</a></li>							  	
                                <li><i class="fa fa-user"></i>Offer Informations</li>						  	
                            </ol>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                    <!-- End  Breadcrumb -->
                    

                    <div class="x_panel">
                        <div class="x_title">
                            <h2> {{ $offerInfo->title}} </h2>
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
                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                <!-- Current avatar -->
                                {{-- <img class="img-responsive avatar-view"> --}}
                                <p class="text-center"><img src="{{ getOfferImageOrDefaultImage($offerInfo->image) }}"
                                class="avatar-view img-responsive" alt="custmoer image" title="Change the avatar"></p>
                                </div>
                            </div>
                            <h3>{{ $offerInfo->first_name." ".$offerInfo->last_name}}</h3>

                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i> Khartoum, SUDAN
                                </li>
                                <li>
                                <i class="fa fa-briefcase user-profile-icon"></i> {{ $offerInfo->phone_number }}
                                </li>
                            </ul>

                            <a href="{{ route('offers.edit', ['id' => $offerInfo->id]) }}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                            <br />

                            <!-- start skills -->
                            {{-- <h4>Skills</h4>
                            <ul class="list-unstyled user_data">
                                <li>
                                <p>Web Applications</p>
                                <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                                </div>
                                </li>
                            </ul> --}}
                            <!-- end of skills -->

                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">

                            <div class="profile_title">
                                <div class="col-md-6">
                                <h2>Customer Activity Report</h2>
                                </div>
                                <div class="col-md-6">
                                <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                </div>
                                </div>
                            </div>
                            <!-- start of user-activity-graph -->
                            <div id="graph_bar" style="width:100%; height:280px;"></div>
                            <!-- end of user-activity-graph -->

                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> Offers </a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                        <!-- start Last Offers -->
                                        <ul class="messages">
                                            <li>
                                                {{-- <img src="{{ getCustomerImageOrDefaultImage($offer->image) }}" class="avatar" alt="Avatar"> --}}
                                                <div class="message_date"> 
                                                    <h3 class="date text-info">{{ customDate($offerInfo->created_at) }}</h3>
                                                    <p class="month">{{ getOfferPrice($offerInfo->max_price, $offerInfo->min_price) }} $</p>
                                                    <p class="month "> {{ getBalance($offerInfo->max_price, $offerInfo->min_price) }} $</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">{{ $offerInfo->title }}</h4>
                                                    <blockquote class="message">{{ $offerInfo->description }}</blockquote>
                                                    <br />
                                                    <ul class="">
                                                        <li class=""><strong> Department: </strong><a>{{ $offerInfo->department->name }}</a>
                                                        </li>
                                                        <li class=""><strong> Level: </strong><a>{{ level()[$offerInfo->level] }}</a> 
                                                        </li>
                                                        <li class=""><strong> Status: </strong><a>{{ status()[$offerInfo->status] }}</a>
                                                        </li>
                                                        <li class=""><strong> Start Date: </strong><a>{{ $offerInfo->offer_start_date }}</a>
                                                        </li>
                                                        <li class=""><strong> Created_at: </strong><a>{{ $offerInfo->created_at}}</a>
                                      td                  </li>
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
                                                </div>
                                            </li>
                                            <div class="tags">
                                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                <a href="#"><i class="fa fa-paperclip"></i><strong> Tages </strong></a><br />
                                                @foreach($offerInfo->jobs as $job)
                                                    <a href="#" class="tag"><i class="fa fa-tag"></i> {{ $job->name }} </a>
                                                @endforeach
                                            </div>
                                            @if(isset($offerInfo->offersImages))
                                                <div class="form-group jumbotron row">
                                                @foreach($offerInfo->offersImages as $image)
                                                    <div class="col-md-3">
                                                        <img src="{{ getOfferImageOrDefaultImage($image->image) }}" alt="offer image" width="120px" height="90px">
                                                    </div>
                                                @endforeach
                                                </div>
                                            @endif
                                        </ul>
                                        <!-- end Last Offers -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                        <!-- start customers projects -->
                                        
                                        <!-- end customers projects -->

                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                @endsection
    
@section('footer')
@endsection
