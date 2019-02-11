{{-- {!! Form::open(['route' => ['test.store'], 'method' => "POST", 'class' => 'form', 'files' => true]) !!}
    <div class="form-group row">
        <div class="col-md-3 ">
            {!! Form::label('image', 'Image', ['class' => 'custom-lable']) !!}  
            {!! Form::file('image[]', ['multiple' => 'yes', 'id' => 'image', 'class' => " {{ $errors->has('image') ? ' is-invalid' : '' }}", 'value' => "{{ old('image') }}", 'autofocus']) !!}
            {{-- {!! Form::file('image', ['id' => 'image', 'class' => " {{ $errors->has('image') ? ' is-invalid' : '' }}", 'value' => "{{ old('image') }}", 'autofocus']) !!} --}}
        {{-- </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            {!! Form::submit(__('Register'), ['class' => "btn btn-primary"]) !!}
        </div>
    </div>
{!! Form::close() !!}  --}}

@extends('admin.layouts.layout')
@section('title')
  All Customers
@endsection
@section('header')
    <!-- icheck -->
    {!! Html::style(asset('admin/css/icheck-1.x/all.css')) !!}
    <!-- dataTable -->
    {!! Html::style(asset('admin/css/dataTable/dataTables.bootstrap.min.css')) !!}
    {!! Html::style(asset('admin/css/dataTable/jquery.dataTables.min.css')) !!}
@endsection

                    @section('content')
                    <select id="selectItem">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="100">100</option>
                    </select>
                    <select id="subselectItem">
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                        <table class="table table-striped table-bordered table-hover" id="table_id">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Image</th>
                                    <th>Gender</th>
                                    <th>Phone Number</th>
                                    <th>Has Projects </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Image</th>
                                    <th>Gender</th>
                                    <th>Phone Number</th>
                                    <th>Has Projects </th>
                                    <th>Options</th>
                                </tr>
                            </tfoot>
                        </table>
                        <button id="get-customers">Get customers</button>

                    @endsection
    
@section('footer')
    <!-- icheck -->
    {!! Html::script(asset('admin/js/icheck.min.js')) !!}
    <!-- dataTable -->
    {!! Html::script(asset('admin/js/dataTable/jquery.dataTables.min.js')) !!}
    {!! Html::script(asset('admin/js/dataTable/dataTables.bootstrap.min.js')) !!}
    <script>

        $("#table_id").DataTable({
            // paging   : false,
            // scrollY  : 400,
            // searching: false,
            // ordering : false,
            // select   : true
        });

    var selectItem = $('#selectItem');
    selectItem.change( function(){
        getAll($(this).val());
    });

    function getAll(number){
        console.log(typeof(number) + number);
        var url = 'http://127.0.0.1:8000/cpanel/customers/'+ number +'/';
        var req = new XMLHttpRequest();

        req.onprogress = function(){
            $('#table_id tbody').html("Fetching The Data...");
        }

        req.onreadystatechange = function(){
            if (req.readyState == req.DONE && req.status == 200) {
                if (req.response != '') {

                    var getCustomersData = $('#table_id tbody');
                    var getCustomersHtml = "";
                    var data = JSON.parse(req.response);
                    var subselectItem = $('#subselectItem');
                    
                    for (var i = 0; i < data.length; i++) {
                        getCustomersHtml +=
                                '<tr>'
                                    +'<th>'+ data[i].id +'</th>'
                                    +'<th>'+ data[i].first_name +'</th>'
                                    +'<th>'+ data[i].last_name +'</th>'
                                    +'<th> <img src ='+ data[i].image +'></th>'
                                    +'<th>'+ data[i].gender +'</th></th>'
                                    +'<th>'+ data[i].phone_number +'</th>'
                                    +'<th>'+ data[i].id +'</th>'
                                    +'<th>'+ data[i].id +'</th>'
                                +'</tr>';
                                //subselectItem.add(new Option(data[i].first_name, data[i].id));
                                //subselectItem.html('<opton '+ data[i].id +'>'+ data[i].first_name +'</opton>');
                     
                    //console.log(subselectItem.options.length);
                    //console.log(subselectItem.contents());
                    }
                    getCustomersData.html(getCustomersHtml);
                }
            }
        }
        req.onerror = function(){
            console.log("Sorry There Are Errors ...");
        }
        req.open('GET', url);
        req.send();
    }

    var getCustomers = $('#get-customers');
    getCustomers.click(function(){
        var req = new XMLHttpRequest();

        req.onprogress = function(){
            $('#table_id tbody').html("Fetching The Data...");
        }
        req.onreadystatechange = function(){
            if (req.readyState == req.DONE && req.status == 200) {
                if (req.response != '') {
                    var getCustomersData = $('#table_id tbody');
                    var getCustomersHtml = "";
                    var data = JSON.parse(req.response);
                    for (var i = 0; i < data.length; i++) {
                        getCustomersHtml +=
                                '<tr>'
                                    +'<th>'+ data[i].id +'</th>'
                                    +'<th>'+ data[i].first_name +'</th>'
                                    +'<th>'+ data[i].last_name +'</th>'
                                    +'<th>'+ data[i].last_name +'</th>'
                                    +'<th>'+ data[i].gender +'</th></th>'
                                    +'<th>'+ data[i].phone_number +'</th>'
                                    +'<th>'+ data[i].id +'</th>'
                                    +'<th>'+ data[i].id +'</th>'
                                +'</tr>';
                        //console.log(data[i]['last_name']);
                        //console.log(data[i].last_name);
                    }
                   // console.log(getCustomersData.html() = getCustomersHtml);
                    getCustomersData.html(getCustomersHtml); 
                }
            }
        }
        req.onerror = function(){
            console.log("Sorry There Are Errors ...");
        }

        req.open('GET', 'http://127.0.0.1:8000/cpanel/customers/1/');
        req.send();
    });

</script>
@endsection 