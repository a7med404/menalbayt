@include('admin.layouts.head')
@include('admin.layouts.body-start')
@include('admin.layouts.page-start')

 <!-- page content -->
 <div class="container" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

              <form class="login-form" action="{{ route('login') }}"> 
                @csrf       
                <div class="login-wrap">
                        {{ __('Login') }}
                    <p class="login-img"><i class="fa fa-unlock"></i></p>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Username" autofocus>
                        {{-- @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif --}}
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label class="checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        <span class="pull-right"> <a href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a></span>
                    </label>
                    <button class="btn btn-info btn-lg btn-block" type="submit">{{ __('Login') }}</button>
                </div>
              </form>
                  <!-- End  Breadcrumb -->


        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@include('admin.layouts.page-end')
@include('admin.layouts.foot')
@include('admin.layouts.body-end')
