@extends('admin.layouts.layout')
@section('title')
  Provider Informations
@endsection 
@section('header')
@endsection

                @section('content')
                    <!-- Start  Breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12  float-right">
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="{{ url('\cpanel') }}">HOME</a></li>
                                <li><i class="fa fa-users"></i><a href="{{ url('\cpanel\providers') }}">All Providers</a></li>							  	
                                <li><i class="fa fa-user"></i>Provider Informations</li>						  	
                            </ol>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                    <!-- End  Breadcrumb -->
                    
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> {{ $providerInfo->profile->first_name." ".$providerInfo->profile->last_name }} </h2>
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
                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                <!-- Current avatar -->
                                {{-- <img class="img-responsive avatar-view"> --}}
                                <p class="text-center"><img src="{{ getProviderImageOrDefaultImage($providerInfo->profile->image) }}"
                                class="avatar-view img-responsive" alt="custmoer image" title="Change the avatar"></p>
                                </div>
                            </div>
                            <h3>{{ $providerInfo->profile->username}}</h3>

                            <ul class="list-unstyled user_data">
                                <li> <i class="fa fa-map-marker fa-fw user-profile-icon"></i> Khartoum, SUDAN</li>
                                <li> <i class="fa fa-briefcase  fa-fw user-profile-icon"></i> {{ $providerInfo->phone_number }}</li>
                                <li> <i class="fa fa-clock-o    fa-fw user-profile-icon"></i> <strong>Last Seen: </strong> {{ $providerInfo->last_seen }}</li>
                            </ul>

                            <a href="{{ route('providers.edit', ['id' => $providerInfo->id]) }}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                            <br />

                            <!-- start skills -->
                            <h4>Ratting</h4>
                            <ul class="list-unstyled user_data">
                                <li>
                                <p>Web Applications</p>
                                <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                                </div>
                                </li>
                            </ul>
                            <div class="tags">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                <a href="#"><i class="fa fa-paperclip"></i><strong> Jobs </strong></a><br />
                                @foreach($providerInfo->profile->jobs as $job)
                                    <a href="{{ route('jobs.show', ['id' => $job->id]) }}" class="tag"><i class="fa fa-tag"></i> {{ $job->name }} </a>
                                @endforeach
                            </div>
                            <!-- end of skills -->

                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">

                                <div class="profile_title">
                                    <div class="col-md-6">
                                        <h2>Provider Activity Report</h2>
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
                                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> providers </a></li>
                                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a></li>
                                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a></li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                            <!-- start Last providers -->
                                            <ul class="messages">
                                                @foreach($providerInfo->offers as $offer) 
                                                <li>
                                                    {{-- <img src="{{ getCustomerImageOrDefaultImage($offer->image) }}" class="avatar" alt="Avatar"> --}}
                                                    <div class="message_date"> 
                                                        <h3 class="date text-info">{{ customDate($offer->created_at) }}</h3>
                                                        <p class="month">{{ getOfferPrice($offer->max_price, $offer->min_price) }} $</p>
                                                        <p class="month "> {{ getBalance($offer->max_price, $offer->min_price) }} $</p>
                                                    </div>
                                                    <div class="message_wrapper">
                                                        <h4 class="heading">{{ $offer->title }}</h4>
                                                        <blockquote class="message">{{ $offer->description }}</blockquote>
                                                        <br />
                                                            <ul class="">
                                                                <li class=""><strong> Department: </strong><a>{{ $offer->department->name }}</a></li>
                                                                <li class=""><strong> Level: </strong><a>{{ level()[$offer->level] }}</a></li>
                                                                <li class=""><strong> Status: </strong><a>{{ status()[$offer->status] }}</a></li>
                                                                <li class=""><strong> Powered By: </strong><a>{{ $offer->customer->first_name." ".$offer->customer->last_name }}</a></li>
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

                                                </ul>
                                            <!-- end Last Providers -->

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                            <!-- start customers projects -->
                                            
                                            <!-- end customers projects -->

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                            <ul class="messages">
                                                <li>
                                                    {{-- <img src="{{ getCustomerImageOrDefaultImage($provider->image) }}" class="avatar" alt="Avatar"> --}}
                                                    <div class="message_date"> 
                                                        <h3 class="date text-info">{{ customDate($providerInfo->last_seen) }}</h3>
                                                        {{-- <p class="month">{{ $providerInfo->max_price, $providerInfo->min_price }}</p> --}}
                                                    </div>
                                                    <div class="message_wrapper">
                                                        <h4 class="heading">{{ $providerInfo->profile->first_name." ".$providerInfo->profile->last_name }}</h4>
                                                        {{-- <blockquote class="message">{{ $providerInfo->profile->pio }}</blockquote> --}}
                                                        <br />
                                                        <ul class="">
                                                            <li class=""><strong> E-Mail: </strong><a>{{ $providerInfo->profile->email }}</a></li>
                                                            <li class=""><strong> Department: </strong><a>{{ $providerInfo->profile->department->name }}</a></li>
                                                            <li class=""><strong> Gander: </strong><a>{{ maleOrfemale()[$providerInfo->profile->gender] }}</a></li>
                                                            <li class=""><strong> Balance: </strong><a>{{ $providerInfo->balance }}</a></li>
                                                            <li class=""><strong> Trusted: </strong><a>{{ trusted()[$providerInfo->profile->trusted] }}</a></li>
                                                            <li class=""><strong> Status: </strong><a>{{ status()[$providerInfo->account_status] }}</a></li>
                                                            <li class=""><strong> Created_at: </strong><a>{{ $providerInfo->created_at}}</a></li>
                                                            <li class=""><strong> Pio: </strong><a>{{ $providerInfo->profile->pio }}</a></li>
                                                            <li class=""><strong> Identifier Type: </strong><a>{{ identifierType()[$providerInfo->profile->identifier_type] }}</a></li>
                                                            <li class=""><strong> Identifier Number: </strong><a>{{ $providerInfo->profile->identifier_number }}</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                @if(isset($providerInfo->providersImages))
                                                    <div class="form-group jumbotron row">
                                                        @foreach($providerInfo->providersImages as $image)
                                                            <div class="col-md-3">
                                                                <img src="{{ getProviderImageOrDefaultImage($image->image) }}" alt="Provider image" width="120px" height="90px">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                @endsection
    
@section('footer')
@endsection
