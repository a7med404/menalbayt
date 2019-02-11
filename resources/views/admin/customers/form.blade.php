                    <div class="x_panel">
                    <div class="x_title">
                        <h2> All Departments </h2>
                        <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
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
                    <div class="form-group row">
                        <div class="col-md-3 custom-input">
                            {!! Form::text('phone_number', null, ['id' => 'phone_number', 'class' => " {{ $errors->has('phone_number') ? ' is-invalid' : '' }}", 'value' => "{{ old('phone_number') }}", 'required', 'autofocus']) !!}
                            {!! Form::label('phone_number', 'Phone Number', ['class' => 'custom-lable']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3 custom-lable-checkbox-radio">
                            {!! Form::label('gender', 'Gender', ['class' => 'custom-lable']) !!} <br />
                            {!! Form::radio('gender', 1, null, ['id' => 'gender', 'placeholder' => 'gender', 'class' => "{{ $errors->has('gender') ? ' is-invalid' : '' }}", 'value' => "{{ old('gender') }}", 'required']) !!}  <span>Male</span> 
                            {!! Form::radio('gender', 0, null, ['id' => 'gender', 'placeholder' => 'gender', 'class' => " {{ $errors->has('gender') ? ' is-invalid' : '' }}", 'value' => "{{ old('gender') }}", 'required']) !!} <span>Female</span> 
                        </div>
                    </div>
                    


                        @if(isset($customerInfo))
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