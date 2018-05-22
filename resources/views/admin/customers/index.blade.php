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
                <!-- Start  Breadcrumb -->
                <div class="row">
                    <div class="col-lg-12  float-right">
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="{{ url('\cpanel') }}">HOME</a></li>
                            <li><i class="fa fa-users"></i>All Customers </li>
                        </ol>
                    </div><!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                        <a href="{{ route('customers.create') }}" class="btn-border bull-rigth">Add New Customer</a>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
                <!-- End  Breadcrumb -->

                <div class="x_panel">
                  <div class="x_title">
                    <h2> All Customers </h2>
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
                    
                        <table class="table table-striped table-bordered table-hover" id="table_id">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>first_name</th>
                                    <th>last_name</th>
                                    {{-- <th>image</th> --}}
                                    <th>gender</th>
                                    <th>phone_number</th>
                                    <th>Has Projects </th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                        <td>{{ $customer->id }}</td>
                                        <td><a href="{{ route('customers.show', ['id' => $customer->id]) }}">{{ $customer->first_name }}</a></td>
                                        <td>{{ $customer->last_name }}</td>
                                        {{-- <td class="text-center"><img src="{{ asset('storage/uploads/images/customers/'.getDefaultImage($customer->image)) }}"
                                            class="customer_profile_img" alt="custmoer image"></td> --}}
                                        <td><a href="{{ route('search',['gender' => $customer->gender]) }}" class="{{ toggleOneZeroClass()[$customer->gender] }}">{{ maleOrfemale()[$customer->gender] }}</a></td>
                                        <td>{{ $customer->phone_number }}</td>
                                        <td><a href="{{ route('customers.show', ['id' => $customer->id]) }}" class="badge bg-main-color">{{ $customer->offers->count() }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-default btn-sm" href="{{ route('customers.show', ['id' => $customer->id]) }}"><i class="fa fa-arrows-alt"></i></a>
                                                <a class="btn btn-info    btn-sm" href="{{ route('customers.edit', ['id' => $customer->id]) }}"><i class="fa fa-pencil"></i></a>
                                                <a class="btn btn-danger  btn-sm" href="{{ url('cpanel/customer/'.$customer->id.'/delete') }}"> <i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                  </div>
                </div>

                    
                        
                        

                @endsection
    
@section('footer')
    <!-- icheck -->
    {!! Html::script(asset('admin/js/icheck.min.js')) !!}
    <!-- dataTable -->
    {!! Html::script(asset('admin/js/dataTable/jquery.dataTables.min.js')) !!}
    {!! Html::script(asset('admin/js/dataTable/dataTables.bootstrap.min.js')) !!}
    <script>

        $('#table_id').DataTable({
            //processing: true,
            //serverSide: true,
            "columnDefs":[
                {
                    "targets":[1, 3, 7],
                    "orderable":false,
                },
            ],
            "stateSave": false,
            "responsive": true,
            "order": [[0, 'desc']],
            "pagingType": "full_numbers",
            aLengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],
            iDisplayLength: 25,
            fixedHeader: true,

        });
       
       
        /* 
            For DataTable  Thead Custom ==============================>
        */

       /* $('#table_id thead th').each( function(){
            if($(this).index() == 1 || $(this).index() == 2 || $(this).index() == 5){
                var className = $(this).index() == 4 ? 'textClass' : 'selectClass';
                var title = $(this).html();
                var index = $(this).index();

                $(this).html('<input type="text" data-value = "'+ index +'" class="' + className + '" placeholder = " Search ' + title + '">');
            }else if($(this).index() == 4){
                $(this).html(
                    '<select>'
                        +'<option value = "0">Female</option>'
                        +'<option value = "1">Male</option>'
                    +'</select>');
            }

        });


        var table = $('#table_id').DataTable({
            //processing: true,
            serverSide: true,
            "columnDefs":[
                {
                    "targets":[1, 2, 3, 4],
                    "orderable":false,
                },
            ],
           // ajax: '{{ route("ajaxDataAllCustomers") }}',
            ajax: '{{ url('cpanel/customers/data') }}',
            columns: [
                {data: 'id', 'name':'id'},
                {data: 'first_name', 'name':'first_name'},
                {data: 'last_name', 'name':'last_name'},
                {data: 'image', 'name':'image'},
                {data: 'gender', 'name':'gender'},
                {data: 'phone_number', 'name':'phone_number'},
                //{data: 'Has Project', 'name':''},
                //{data: 'option', 'name':''}
            ],

            "language": {
                "url": "{{ Request::root()  }}/admin/cus/Arabic.json"
            },
            "stateSave": false,
            "responsive": true,
            "order": [[0, 'desc']],
            "pagingType": "full_numbers",
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
            iDisplayLength: 25,
            fixedHeader: true,

            "oTableTools": {
                "aButtons": [


                    {
                        "sExtends": "csv",
                        "sButtonText": "ملف اكسل",
                        "sCharSet": "utf16le"
                    },
                    {
                        "sExtends": "copy",
                        "sButtonText": "نسخ المعلومات",
                    },
                    {
                        "sExtends": "print",
                        "sButtonText": "طباعة",
                        "mColumns": "visible",


                    }
                ],

                "sSwfPath": "{{ Request::root()  }}/admin/cus/copy_csv_xls_pdf.swf"
            },

            "dom": '<"pull-left text-left" T><"pull-right" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> ',
            initComplete: function ()
            {
                var r = $('#table_id tfoot tr');
                r.find('th').each(function(){
                    $(this).css('padding', 8);
                });
                $('#table_id thead').append(r);
                $('#search_0').css('text-align', 'center');
            }
        });
*/


/*        table.columns().eq(0).each(function(colIdx) {
            $('input', table.column(colIdx).header()).on('keyup change', function() {
                table.column(colIdx).search(this.value).draw();
            });
        });



        table.columns().eq(0).each(function(colIdx) {
            $('select', table.column(colIdx).header()).on('change', function() {
                table.column(colIdx).search(this.value).draw();
            });
            $('select', table.column(colIdx).header()).on('click', function(e) {
                e.stopPropagation();
            });
        });


        $('#table_id tbody').on( 'mouseover', 'td', function () {
            var colIdx = table.cell(this).index().column;
            if ( colIdx !== lastIdx ) {
                $( table.cells().nodes() ).removeClass( 'highlight' );
                $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
            }
        }).on( 'mouseleave', function () {
            $( table.cells().nodes() ).removeClass( 'highlight' );
        });
        */

    </script>
@endsection 
