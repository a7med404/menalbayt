{{-- {{dd($allInfoCollect)}} --}}
<div class="x_panel">
        <div class="x_title">
            <h2> All Offers </h2>
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
                    {!! Form::text('first_name', null, ['id' => 'first_name', 'class' => " {{ $errors->has('first_name') ? ' is-invalid' : '' }}", 'value' => "{{ old('first_name') }}", 'required', 'autofocus']) !!}
                    {!! Form::label('first_name', 'Frst Name', ['class' => 'custom-lable']) !!}   
                </div>

                <div class="col-md-3 custom-input">
                    {!! Form::text('last_name', null, ['id' => 'last_name', 'class' => " {{ $errors->has('last_name') ? ' is-invalid' : '' }}", 'value' => "{{ old('last_name') }}", 'required', 'autofocus']) !!}
                    {!! Form::label('last_name', 'Last Name', ['class' => 'custom-lable']) !!}  
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 custom-input">
                    {!! Form::text('phone_number', null, ['id' => 'phone_number', 'class' => " {{ $errors->has('phone_number') ? ' is-invalid' : '' }}", 'value' => "{{ old('phone_number') }}", 'required', 'autofocus']) !!}
                    {!! Form::label('phone_number', 'Phone Number', ['class' => 'custom-lable']) !!}
                </div>
                <div class="col-md-3 custom-input">
                    {!! Form::text('username', null, ['id' => 'username', 'class' => " {{ $errors->has('username') ? ' is-invalid' : '' }}", 'value' => "{{ old('username') }}", 'required', 'autofocus']) !!}
                    {!! Form::label('username', 'Username', ['class' => 'custom-lable']) !!}  
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-3 custom-input">
                    {!! Form::text('email', null, ['id' => 'email', 'class' => " {{ $errors->has('email') ? ' is-invalid' : '' }}", 'value' => "{{ old('email') }}", 'required', 'autofocus']) !!}
                    {!! Form::label('email', 'E-mail', ['class' => 'custom-lable']) !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-3 custom-lable-checkbox-radio">
                    {!! Form::label('gender', 'Gender', ['class' => 'custom-lable']) !!} <br />
                    {!! Form::radio('gender', 1, null, ['id' => 'gender', 'placeholder' => 'gender', 'class' => "{{ $errors->has('gender') ? ' is-invalid' : '' }}", 'value' => "{{ old('gender') }}", 'required']) !!}  <span>Male</span> 
                    {!! Form::radio('gender', 0, null, ['id' => 'gender', 'placeholder' => 'gender', 'class' => " {{ $errors->has('gender') ? ' is-invalid' : '' }}", 'value' => "{{ old('gender') }}", 'required']) !!} <span>Female</span> 
                </div>
            </div>
            {{-- {{dd($providerInfo->profile->department->id)}} --}}

            <div class="form-group row"> 
                <div class="col-md-3 custom-input has-data">
                    {!! Form::label('department', 'Department', ['class' => 'custom-lable']) !!}
                    {!! Form::select('department_id', getSelect('department'), null, ['id' => 'department', 'placeholder' => 'Select The Department', 'class' => "form-control {{ $errors->has('department_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('department_id') }}", 'required']) !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-3 custom-input has-data">
                    {!! Form::label('job', 'Job', ['class' => 'custom-lable']) !!}
                    {!! Form::select('job_id', getSelect('job'), null, ['id' => 'job', 'placeholder' => 'Select The Job', 'class' => "form-control {{ $errors->has('job_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('job_id') }}", 'required']) !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 custom-input">
                    {!! Form::textarea('pio', null, ['id' => 'pio', 'class' => " {{ $errors->has('pio') ? ' is-invalid' : '' }}", 'value' => "{{ old('pio') }}", 'required', 'autofocus']) !!}
                    {!! Form::label('Pio', 'pio', ['class' => 'custom-lable']) !!}  
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-3 custom-lable-checkbox-radio">
                    {!! Form::label('trusted', 'trusted', ['class' => 'custom-lable']) !!} <br />
                    {!! Form::radio('trusted', 1, null, ['id' => 'trusted', 'placeholder' => 'trusted', 'class' => "{{ $errors->has('trusted') ? ' is-invalid' : '' }}", 'value' => "{{ old('trusted') }}", 'required']) !!}  <span>Trusted</span> 
                    {!! Form::radio('trusted', 0, null, ['id' => 'trusted', 'placeholder' => 'trusted', 'class' => " {{ $errors->has('trusted') ? ' is-invalid' : '' }}", 'value' => "{{ old('trusted') }}", 'required']) !!} <span>Not Trusted</span> 
                </div>
                <div class="col-md-3 custom-lable-checkbox-radio">
                    {!! Form::label('Account Status', 'account_status', ['class' => 'custom-lable']) !!} <br />
                    {!! Form::radio('account_status', 1, null, ['id' => 'account_status', 'placeholder' => 'account_status', 'class' => "{{ $errors->has('account_status') ? ' is-invalid' : '' }}", 'value' => "{{ old('account_status') }}", 'required']) !!}  <span>Enable</span> 
                    {!! Form::radio('account_status', 0, null, ['id' => 'account_status', 'placeholder' => 'account_status', 'class' => " {{ $errors->has('account_status') ? ' is-invalid' : '' }}", 'value' => "{{ old('account_status') }}", 'required']) !!} <span>Not Enable</span> 
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    {!! Form::label('image', 'Image', ['class' => 'custom-lable']) !!}                            
                    {!! Form::file('image', ['id' => 'image', 'class' => " {{ $errors->has('image') ? ' is-invalid' : '' }}", 'value' => "{{ old('image') }}", 'autofocus']) !!}
                </div>
            </div>
            <div class="form-group row">
                @if(!empty($allInfoCollect['image']) )
                    <div class="form-group row">
                        <div class="col-md-3 custom-lable-checkbox-radio">
                            {!! Form::label('delete_image', 'Delete Image', ['class' => 'custom-lable']) !!} <br />
                            {!! Form::checkbox('image_delete', 'image_delete', null, ['id' => 'delete_image', 'value' => "{{ old('image_delete') }}"]) !!}  
                            <img src="{{ asset('storage/uploads/images/providers/'.$allInfoCollect['image']) }}" alt="Provider image" width="120px" height="90px">
                        </div>
                    </div>
                @endif
            </div>
            
            <div class="form-group row">
                <div class="col-md-6">
                    {!! Form::label('cover_image', 'Cover Image', ['class' => 'custom-lable']) !!}                            
                    {!! Form::file('cover_image', ['id' => 'cover_image', 'class' => " {{ $errors->has('cover_image') ? ' is-invalid' : '' }}", 'value' => "{{ old('cover_image') }}", 'autofocus']) !!}
                </div>
            </div>
            <div class="form-group row">
                @if(!empty($allInfoCollect['cover_image']) )
                    <div class="form-group row">
                        <div class="col-md-3 custom-lable-checkbox-radio">
                            {!! Form::label('delete_image', 'Delete Image', ['class' => 'custom-lable']) !!} <br />
                            {!! Form::checkbox('cover_image_delete', 'cover_image_delete', null, ['id' => 'delete_image', 'value' => "{{ old('cover_image_delete') }}"]) !!}  
                            <img src="{{ asset('storage/uploads/images/providers/'.$allInfoCollect['cover_image']) }}" alt="Provider image" width="120px" height="90px">
                        </div>
                    </div>
                @endif
            </div>
            <div class="form-group row">
                <div class="col-md-3 custom-input">
                    {!! Form::label('identifier_type', 'Identifier Type') !!}
                    {!! Form::select('identifier_type', identifierType(), null, ['id' => 'identifier_type', 'placeholder' => 'Select The Identifier Type', 'class' => "form-control {{ $errors->has('identifier_type') ? ' is-invalid' : '' }}", 'value' => "{{ old('identifier_type_id') }}", 'required']) !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    {!! Form::label('identifier_image', 'Identifier Image', ['class' => 'custom-lable']) !!}                            
                    {!! Form::file('identifier_image', ['id' => 'identifier_image', 'class' => " {{ $errors->has('identifier_image') ? ' is-invalid' : '' }}", 'value' => "{{ old('identifier_image') }}", 'autofocus']) !!}
                </div>
            </div>
            <div class="form-group row">
                @if(!empty($allInfoCollect['identifier_image']) )
                    <div class="form-group row">
                        <div class="col-md-3 custom-lable-checkbox-radio">
                            {!! Form::label('delete_image', 'Delete Image', ['class' => 'custom-lable']) !!} <br />
                            {!! Form::checkbox('identifier_image_delete', 'identifier_image_delete', null, ['id' => 'delete_image', 'value' => "{{ old('identifier_image_delete') }}"]) !!}  
                            <img src="{{ asset('storage/uploads/images/identifiers/'.$allInfoCollect['identifier_image']) }}" alt="Provider image" width="120px" height="90px">
                        </div>
                    </div>
                @endif
            </div>
            <div class="form-group row">
                <div class="col-md-3 custom-input">
                    {!! Form::text('identifier_number', null, ['id' => 'identifier_number', 'class' => " {{ $errors->has('identifier_number') ? ' is-invalid' : '' }}", 'value' => "{{ old('identifier_number') }}", 'required', 'autofocus']) !!}
                    {!! Form::label('identifier_number', 'Identifier Number', ['class' => 'custom-lable']) !!}
                </div>
            </div>

            @if(isset($allInfoCollect))
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