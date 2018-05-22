
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
                      
                        <div class="form-group row">
                            <div class="col-md-3 custom-input">
                                {!! Form::text('title', null, ['id' => 'title', 'class' => " {{ $errors->has('title') ? ' is-invalid' : '' }}", 'value' => "{{ old('title') }}", 'required', 'autofocus']) !!}
                                {!! Form::label('title', 'Offer Title', ['class' => 'custom-lable']) !!}   
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3 custom-input has-data">
                                {!! Form::label('department', 'Department', ['class' => 'custom-lable']) !!}
                                {!! Form::select('department_id', getSelect('department'), null, ['id' => 'department', 'placeholder' => 'Select The Department', 'class' => "form-control {{ $errors->has('department_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('department_id') }}", 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            @if(!isset($offerInfo->offer_start_date) )
                            <div class="col-md-6">
                                {!! Form::label('dateTime', 'Offer Start And End Date ', ['class' => 'custom-lable']) !!} <br />
                                {!! Form::text('dateTime', null, ['id' => 'dateTime', 'class' => " {{ $errors->has('dateTime') ? ' is-invalid' : '' }}", 'value' => "{{ old('dateTime') }}", 'required', 'autofocus']) !!}   
                            </div>
                            @else
                            <div class="col-md-6">
                                {!! Form::label('dateTime', 'Offer Start And End Date ', ['class' => 'custom-lable']) !!} <br />
                                {!! Form::text('dateTime', "{{ $offerInfo->offer_start_date.' - '.$offerInfo->offer_end_date }}", ['id' => 'dateTime', 'value' => "{{ old('dateTime') }}", 'required', 'autofocus']) !!}   
                            </div>
                            @endif
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 ">
                                {!! Form::label('budget', 'Dudget', ['class' => 'custom-lable']) !!}                            
                                {!! Form::text('budget', null, ['id' => 'budget', 'class' => " {{ $errors->has('budget') ? ' is-invalid' : '' }}", 'value' => "{{ old('budget') }}", 'required', 'autofocus']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 custom-input">
                                {!! Form::textarea('description', null, ['id' => 'description', 'class' => " {{ $errors->has('description') ? ' is-invalid' : '' }}", 'value' => "{{ old('description') }}", 'required', 'autofocus']) !!}
                                {!! Form::label('description', 'Description', ['class' => 'custom-lable']) !!}  
                            </div>
                        </div>
                        @if(isset($offerInfo->offersImages))
                            <div class="form-group jumbotron row">
                            @foreach($offerInfo->offersImages as $image)
                                <div class="col-md-3 custom-lable-checkbox-radio">
                                    {!! Form::label('delete_image', 'Delete Image', ['class' => 'custom-lable']) !!} <br />
                                    {!! Form::checkbox('delete_image[]', $image->id, null , ['id' => 'delete_image', 'placeholder' => 'delete_image', 'class' => " {{ $errors->has('delete_image') ? ' is-invalid' : '' }}"]) !!}  
                                    <img src="{{ asset('storage/uploads/images/offers/'.$image->image) }}" alt="offer image" width="120px" height="90px">
                                </div>
                            @endforeach
                            </div>
                        @endif
                        <div class="form-group row">
                            <div class="col-md-6">
                                {!! Form::label('image', 'Image', ['class' => 'custom-lable']) !!}                            
                                {!! Form::file('image[]', ['multiple' => 'yes', 'id' => 'image', 'class' => " {{ $errors->has('image') ? ' is-invalid' : '' }}", 'value' => "{{ old('image') }}", 'autofocus']) !!}
                            </div>
                        </div>

                        @if(isset($offerInfo))
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