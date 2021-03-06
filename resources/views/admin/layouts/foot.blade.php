


    <!-- jQuery -->
    {!! Html::script(asset('admin/js/jquery/jquery.min.js')) !!}
    <!-- jquery-ui.min.js -->
    {!! Html::script(asset('admin/js/jquery/jquery-ui.min.js')) !!}
    <!-- Bootstrap -->
    {!! Html::script(asset('admin/js/bootstrap/bootstrap.min.js')) !!}
    <!-- nicescroll -->
    {!! Html::script(asset('admin/js/jquery.nicescroll.min.js')) !!}
    <!-- Validate JavaScript -->
    {!! Html::script(asset('admin/js/validate.min.js')) !!}
    <!-- Toaster JavaScript -->
    {!! Html::script(asset('admin/js/toastr.min.js')) !!}
    <!-- sweetalert JavaScript -->
    {!! Html::script(asset('admin/js/sweetalert.min.js')) !!}
    <!-- CharJs -->
    {!! Html::script(asset('admin/js/Chart.min.js')) !!}


    <!-- echarts.min.js -->
    {!! Html::script(asset('admin/js/echart/echarts.min.js')) !!}
    <!-- world.js echarts -->
    {!! Html::script(asset('admin/js/echart/world.js')) !!}

    @yield('footer') 

    <script>
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
      </script>
    @include('admin.layouts.toastr')
    @include('admin.layouts.errors')
    
    <!-- Custom Theme Scripts -->
    {!! Html::script(asset('admin/js/script.js')) !!}
  
    