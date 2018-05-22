
@extends('admin.layouts.layout')
@section('title')
  Add New Offer
@endsection 
@section('header')
    <!-- icheck -->
    {!! Html::style(asset('admin/css/icheck-1.x/all.css')) !!}
    <!-- daterangepicker -->
    {!! Html::style(asset('admin/css/daterangepicker.css')) !!}
    <!--  Ion.RangeSlider -->
    {!! Html::style(asset('admin/css/ion.rangeSlider.css')) !!}
    {!! Html::style(asset('admin/css/ion.rangeSlider.skinFlat.css')) !!}
    <!--  dropzone -->
    {!! Html::style(asset('admin/css/dropzone.min.css')) !!}
@endsection

                    @section('content')
                        <!-- Start  Breadcrumb -->
                        <div class="row">
                            <div class="col-lg-12  float-right">
                                <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="{{ url('\cpanel') }}">HOME</a></li>
                                    <li><i class="fa fa-users"></i><a href="{{ url('\cpanel\customers') }}">All Offers</a></li>							  	
                                    <li><i class="fa fa-user"></i>Add New Offer</li>						  	
                                </ol>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                        <!-- End  Breadcrumb -->
                        
                        {!! Form::open(['route' => ['offers.store'], 'method' => "POST", 'class' => 'form', 'files' => true]) !!}
                        @include('admin.offers.form')
                        {!! Form::close() !!}

                    @endsection
    
@section('footer')
    <!-- icheck -->
    {!! Html::script(asset('admin/js/icheck.min.js')) !!}
    <!-- moment -->
    {!! Html::script(asset('admin/js/moment.min.js')) !!}
    <!-- daterangepicker -->
    {!! Html::script(asset('admin/js/daterangepicker.js')) !!}
    <!--  Ion.RangeSlider  -->
    {!! Html::script(asset('admin/js/ion.rangeSlider.min.js')) !!}
    <!--  dropzone  -->
    {!! Html::script(asset('admin/js/dropzone.min.js')) !!}
    <script>
        $(document).ready(function() {
            /* 
                For iCheck =====================================>
            */
            $("input").iCheck({
                checkboxClass:"icheckbox_square-yellow",
                radioClass:"iradio_square-yellow",
                increaseArea:"20%" // optional
            });
        });
        $('input[name="dateTime"]').daterangepicker({
            timePicker:true,
            autoApply: true,
            opens: "center",
            timePickerIncrement:15,
            timePicker24Hour: true,
            locale:{format:"YYYY-MM-DD hh:mm:ss"},
            minDate: "{{ date('YYYY-mm-dd hh:mm:ss') }}",
        });

        $('input[name="budget"]').ionRangeSlider({
            type: "double",
            grid: true,
            min: 100,
            max: 10000,
            from: 200,
            to: 800,
            step: 50,
            prefix: "$"
        });
	   
        
    </script>
@endsection
