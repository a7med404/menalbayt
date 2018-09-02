@include('admin.layouts.head')
@include('admin.layouts.body-start')
@include('admin.layouts.page-start')
@include('admin.layouts.sidebar')
@include('admin.layouts.top-navigation')
@include('admin.layouts.page-content-start')

@yield('content')
{{--  @include('admin.layouts.page-content')  --}}

@include('admin.layouts.page-content-end')
@include('admin.layouts.page-end')
@include('admin.layouts.footer')
@include('admin.layouts.foot')
@include('admin.layouts.body-end')
