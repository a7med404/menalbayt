
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            a7med404 - Bootstrap Admin Template by <a href="https://a7med404.com">a7med404</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    {!! Html::script(asset('admin/js/jquery/jquery.min.js')) !!}
    <!-- Bootstrap -->
    {!! Html::script(asset('admin/js/bootstrap/bootstrap.min.js')) !!}
    <!-- nicescroll -->
    {!! Html::script(asset('admin/js/jquery.nicescroll.min.js')) !!}
    <!-- Validate JavaScript -->
    {!! Html::script(asset('admin/js/validate.min.js')) !!}
    <!-- Toaster JavaScript -->
    {!! Html::script(asset('admin/js/toastr.min.js')) !!}

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
  
    