@extends('admin.layouts.layout')
@section('title')
  page title
@endsection
@section('header')
  
@endsection

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                    @section('content')
                        <!-- Start  Breadcrumb -->
                        <div class="row">
                            <div class="col-lg-12  float-right">
                                <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="\">HOME</a></li>			
                                    <h1 class="text-center">
                                      You Don't Have Permission To Access To This Page
                                    <a class="" href="{{ back() }}" > Go Back! </a>
                                    </h1>		  	
                                </ol>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                        <!-- End  Breadcrumb -->


                    @endsection

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
    
@section('footer')
  
@endsection

