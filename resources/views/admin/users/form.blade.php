<div class="x_panel">
    <div class="x_title">
        <h2> All Users </h2>
        <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
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
        
    <div class="row">
        <div class="col-md-3 custom-input">
            {!! Form::text('name', null, ['id' => 'name', 'class' => " {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
            {!! Form::label('name', 'Name', ['class' => 'custom-lable']) !!}   
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 custom-input">
            {!! Form::text('phone', null, ['id' => 'phone', 'class' => " {{ $errors->has('phone') ? ' is-invalid' : '' }}", 'value' => "{{ old('phone') }}", 'required', 'autofocus']) !!}
            {!! Form::label('phone', 'Phone Number', ['class' => 'custom-lable']) !!}
        </div>
        <div class="col-md-3 custom-input">
            {!! Form::text('email', null, ['id' => 'email', 'class' => " {{ $errors->has('email') ? ' is-invalid' : '' }}", 'value' => "{{ old('email') }}", 'required', 'autofocus']) !!}
            {!! Form::label('email', 'Email', ['class' => 'custom-lable']) !!}  
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-3 custom-input">
            {!! Form::label('admin', 'User Type') !!}
            {!! Form::select('admin', [0 => 'Employee', 1 => 'Admin'], null, ['id' => 'admin', 'placeholder' => 'Select The User Type', 'class' => "form-control {{ $errors->has('admin') ? ' is-invalid' : '' }}", 'value' => "{{ old('admin') }}", 'required']) !!}
        </div>
    </div>

    @if(!isset($userInfo))
    <div class="row">
        <div class="col-md-3 custom-input">
            {!! Form::password('password', null, ['id' => 'password', 'class' => " {{ $errors->has('password') ? ' is-invalid' : '' }}", 'value' => "{{ old('password') }}", 'required', 'autofocus']) !!}
            {!! Form::label('password', 'Password', ['class' => 'custom-lable']) !!}
        </div>
        <div class="col-md-3 custom-input">
            {!! Form::password('password_confirmation', null, ['id' => 'password-confirm', 'class' => " {{ $errors->has('password-confirm') ? ' is-invalid' : '' }}", 'value' => "{{ old('password-confirm') }}", 'required', 'autofocus']) !!}
            {!! Form::label('password-confirm', 'Password Confirm', ['class' => 'custom-lable']) !!}  
        </div>
    </div>
    @endif
        @if(isset($userInfo))
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    {!! Form::submit('Update', ['class' => "btn btn-primary"]) !!}
                </div>
            </div>
        @else
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    {!! Form::submit(__('Register'), ['class' => "btn btn-primary"]) !!}
                </div>
            </div>
        @endif
    </div>
</div>







