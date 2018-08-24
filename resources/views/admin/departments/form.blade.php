

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
                      
                    <div class="form-group row">
                        <div class="col-md-3 custom-input">
                            {!! Form::text('name', null, ['id' => 'name', 'class' => " {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
                            {!! Form::label('name', 'Department Name', ['class' => 'custom-lable']) !!}   
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 custom-input">
                            {!! Form::textarea('description', null, ['id' => 'description', 'class' => " {{ $errors->has('description') ? ' is-invalid' : '' }}", 'value' => "{{ old('description') }}", 'required', 'autofocus']) !!}
                            {!! Form::label('description', 'Description', ['class' => 'custom-lable']) !!}  
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3 custom-lable-checkbox-radio">
                            {!! Form::label('status', 'Is Enable', ['class' => 'custom-lable']) !!} <br />
                            {!! Form::radio('status', 1, null, ['id' => 'status', 'placeholder' => 'status', 'class' => "{{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!}  <span>Enabl</span> 
                            {!! Form::radio('status', 0, null, ['id' => 'status', 'placeholder' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!} <span>Disable</span> 
                        </div>
                    </div>
                    @if(isset($departmentInfo->image) )
                        <div class="form-group row">
                            <div class="col-md-3 custom-lable-checkbox-radio">
                                {!! Form::label('delete_image', 'Delete Image', ['class' => 'custom-lable']) !!} <br />
                                {!! Form::checkbox('delete_image', 1, null, ['id' => 'delete_image', 'placeholder' => 'delete_image', 'class' => " {{ $errors->has('delete_image') ? ' is-invalid' : '' }}", 'value' => "{{ old('delete_image') }}"]) !!}  
                                <img src="{{ asset('storage/uploads/images/departments/'.$departmentInfo->image) }}" alt="department image" width="120px" height="90px">
                            </div>
                        </div>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-3 ">
                            {!! Form::label('image', 'Image', ['class' => 'custom-lable']) !!}                            
                            {!! Form::file('image', null, ['id' => 'image', 'class' => " {{ $errors->has('image') ? ' is-invalid' : '' }}", 'value' => "{{ old('image') }}", 'required', 'autofocus']) !!}
                        </div>
                    </div>


                        @if(isset($departmentInfo))
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