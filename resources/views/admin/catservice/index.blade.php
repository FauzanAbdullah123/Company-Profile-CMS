@extends('layouts.admin')

@section('title-website')
    Category Service
@endsection

@section('title')
    Data Category Service
@endsection

@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                    <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Add Data</button>
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="dataTable" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="35%">Name</th>
                            <th width="35%">Slug</th>
                            <th width="30%">Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

<div id="formModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Data Category Service</h4>
        </div>
        <div class="modal-body">
         <span id="form_result"></span>
         <form method="post" id="sample_form" class="form-horizontal">
          @csrf
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" >Name : </label>
            <div class="col-sm-12 col-md-10">
             <input type="text" name="nama" id="nama" class="form-control" />
            </div>
           </div>
          
           <br />
           <div class="modal-footer">
            <input type="hidden" name="action" id="action" />
            <input type="hidden" name="hidden_id" id="hidden_id" />
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <input type="submit" name="action_button" id="action_button" class="btn btn-primary" value="Add"/>
           </div>
         </form>
        </div>
     </div>
    </div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{asset('AdminLTE/assets/vendor/select2/select2.min.css')}}">

@endsection

@push('js')

    <!-- jQuery 3 -->
    <script src="{{ asset('AdminLTE/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('AdminLTE/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('AdminLTE/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="{{asset('AdminLTE/assets/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('AdminLTE/assets/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('AdminLTE/assets/js/components/select2-init.js')}}"></script>


<script>
    $(document).ready(function(){

    $('#dataTable').DataTable({
    processing: true,
    serverSide: true,
    ajax:{
    url: "{{ route('catservice.index') }}",
    },
    columns:[
        {
            data: 'nama',
            name: 'nama'
        },
        {
            data: 'slug',
            name: 'slug'
        },
        {
            data: 'action',
            name: 'action',
            orderable: false
        }
    ]
    });

    $('#create_record').click(function(){
    $('.modal-title').text("Add Data Category Service");
        $('#action_button').val("Save");
        $('#action').val("Add");
        $('#formModal').modal('show');
    });

    $('#sample_form').on('submit', function(event){
    event.preventDefault();
    if($('#action').val() == 'Add')
    {
        $.ajax({
            url:"{{ route('catservice.store') }}",
            method:"POST",
            data: new FormData(this),
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            success:function(data)
            {
            var html = '';
            if(data.errors)
            {
            html = '<div class="alert alert-danger">';
            for(var count = 0; count < data.errors.length; count++)
            {
            html += '<p>' + data.errors[count] + '</p>';
            }
            html += '</div>';
            }
            if(data.success)
            {
            Swal.fire(
                 'Good job!',
                 data.success,
                  'success'
            )
            location.reload();
            $('#sample_form')[0].reset();
            $('#dataTable').DataTable().ajax.reload();
            }
            $('#form_result').html(html);
            }
        })
    }

        if($('#action').val() == "Edit")
        {
            $.ajax({
                url:"{{ route('catservice.update') }}",
                method:"POST",
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType:"json",
                success:function(data)
                {
                var html = '';
                if(data.errors)
                {
                html = '<div class="alert alert-danger">';
                for(var count = 0; count < data.errors.length; count++)
                {
                html += '<p>' + data.errors[count] + '</p>';
                }
                html += '</div>';
                }
                if(data.success)
                {
                Swal.fire(
                    'Data category service Successfully Edited!',
                    data.success,
                    'success'
                    )
                    location.reload();
                $('#sample_form')[0].reset();
                $('#store_image').html('');
                $('#dataTable').DataTable().ajax.reload();
                }
                $('#form_result').html(html);
                }
            });
        }
    });

    $(document).on('click', '.edit', function(){
    var id = $(this).attr('id');
    $('#form_result').html('');
    $.ajax({
        url:"/backend/catservice/"+id+"/edit",
        dataType:"json",
            success:function(html){
                $('#nama').val(html.data.nama);
                $('#hidden_id').val(html.data.id);
                $('.modal-title').text("Edit Data Category Service");
                $('#action_button').val("Save");
                $('#action').val("Edit");
                $('#formModal').modal('show');
            }
        })
    });

    var user_id;

    $(document).on('click', '.delete', function(){
    user_id = $(this).attr('id');
    $('#confirmModal').modal('show');
    });

    $('#ok_button').click(function(){
        $.ajax({
        url:"/backend/catservice/destroy/"+user_id,
        beforeSend:function(){
            $('#ok_button').text('Deleting...');
        },
        success:function(data)
        {
            setTimeout(function(){
                if(data.error){
                    Swal.fire(
                    data.message,
                    data.type,
                    data.error
                    )
                }else{
                    Swal.fire(
                    data.message,
                    data.type,
                    data.success
                    )
                    location.reload();
                }
            $('#confirmModal').modal('hide');
            $('#dataTable').DataTable().ajax.reload();
            }, 2000);
        }
        })
        });

    });
    </script>

@endpush