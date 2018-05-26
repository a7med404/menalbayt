@extends('admin.layouts.layout')
@section('title')
  Edit Offer Information
@endsection
@section('header')
    <!-- icheck -->
    {!! Html::style(asset('admin/css/icheck-1.x/all.css')) !!}
    <!-- fastselect.min.css -->
    {!! Html::style(asset('admin/css/fastselect.min.css')) !!}
@endsection

                    @section('content')
                        <!-- Start  Breadcrumb -->
                        <div class="row">
                            <div class="col-lg-12  float-right">
                                <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="{{ url('\cpanel') }}">HOME</a></li>
                                    <li><i class="fa fa-users"></i><a href="{{ url('\cpanel\providers') }}">All Providers</a></li>						  	
                                    <li><i class="fa fa-user"></i>Edit Offer Information</li>						  	
                                </ol>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                        <!-- End  Breadcrumb -->
                       
                        {!! Form::model($allInfoCollect, ['route' => ['providers.update', $allInfoCollect['id']], 'method' => "PATCH", 'class' => 'form', 'files' => true]) !!}
                        @include('admin.providers.form')
                        {!! Form::close() !!}

                    @endsection
    
@section('footer')
    <!-- icheck -->
    {!! Html::script(asset('admin/js/icheck.min.js')) !!}
    <!-- fastselect.min.js -->
    {!! Html::script(asset('admin/js/fastselect.min.js')) !!}
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

        
    </script>
@endsection

