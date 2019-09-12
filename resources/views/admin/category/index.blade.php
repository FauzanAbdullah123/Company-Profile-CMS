@extends('layouts.admin')

@section('title-website')
    Category
@endsection

@section('title')
    Data Category
@endsection

@section('content')
@include('admin.category.create')
@include('admin.category.edit')
@include('layouts.flash')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        <button id="tambah-data" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalAdd">Add Data</button>
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="dataTable" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Category Name</th>
                            <th>Slug</th>
                            <th style="text-align: center;">Action</th>
                        </thead>
                        </tr>
                        <tbody class="data-kategori">
                        @php $no =1; @endphp
                        @foreach($category as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->slug }}</td>
                            <td><center>
                            <button type="button" id="edit-data" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit"
                                            data-id="{{ $data->id }}" 
                                            data-nama="{{ $data->nama }}"><i class="fa fa-edit"></i></button>
                                </center>
                             </td>
                            <td>
                                <form action="{{ route('category.destroy',$data->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" id="hapus-data" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                    </button>
                                 </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

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

    <script>
        $('#edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var nama = button.data('nama')
        var modal = $(this)
    
        modal.find('input[name="id"]').val(id)
        modal.find('input[name="nama"]').val(nama)
    })  
        </script>
@endpush
