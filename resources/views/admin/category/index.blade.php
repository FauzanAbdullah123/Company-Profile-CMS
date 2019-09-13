@extends('layouts.admin')

@section('title-website')
    Kategori
@endsection

@section('title')
    Data Kategori
@endsection

@include ('layouts.flash')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        <button id="tambah-data" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalAdd">Tambah Data</button>
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="dataTable" class="table table-bordered table-hover">
                        <thead>
                            <th>No</th>
                            <th>Category Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </thead>
                        <tbody class="data-kategori">
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

@include('admin.category.modal')

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
        $(document).ready(function (){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Data Kategori
            var table = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('category.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'nama', name: 'nama'},
                    {data: 'slug', name: 'slug'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
            // Tambah Data
            $('#formAdd').on('submit', (e) => {
                e.preventDefault();
                $.ajax({
                    url: '/admin/category',
                    method: 'POST',
                    data: {
                        nama: $('.c-nama').val()
                    },
                    success: (res) => {
                        if(res.errors) {
                            $.each(res.errors, function(k, v) {
                            $('.notify-alert').show();
                            $('.notify-alert').html('')
                            $('.notify-alert').append(
                                    `
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> Upss!</h4>
                                        ${v}
                                    </div>
                                    `
                                )
                            })
                        } else {
                            $('#formAdd')[0].reset();
                            Swal.fire(
                                'Good job!',
                                res.message,
                                'success'
                            )
                            location.reload();
                        }
                    },
                    error: (err) => {
                        console.log(err);
                    }
                })
            })
            // Tampilan Modal Edit Data
            $('.data-kategori').on('click', '#edit-data', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    url: '/admin/category/'+id,
                    method: 'GET',
                    success: (res) => {
                        $('.e-nama').val('');
                        $('#modalEdit').modal('show')
                        $('.e-nama').val(res.data.nama);
                        $('input[id="id-kategori-e"]').val(res.data.id)
                    },
                    error: (err) => {
                        console.log(err);
                    }
                })
            })
            // Update Data
            $('#formEdit').on('submit', (e) => {
                e.preventDefault();
                var id = $('input[id="id-kategori-e"]').val();
                $.ajax({
                    url: '/admin/category/'+ id,
                    method: 'PUT',
                    data: {
                        id: id,
                        nama: $('.e-nama').val()
                    },
                    success: (res) => {
                        if(res.errors) {
                            $.each(res.errors, function(k, v) {
                            $('.notify-alert-edit').show();
                            $('.notify-alert-edit').html('')
                            $('.notify-alert-edit').append(
                                    `
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> Upss!</h4>
                                        ${v}
                                    </div>
                                    `
                                )
                            })
                        } else {
                            Swal.fire(
                                'Data Successfully Edited!',
                                res.message,
                                'success'
                            )
                            location.reload();
                            $('#formEdit')[0].reset();
                          
                        }
                    },
                    error: (err) => {
                        console.log(err);
                    }
                });
            })
            //Tampilan Modal Hapus Data
            $('.data-kategori').on('click', '#hapus-data', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    url: '/admin/category/' + id,
                    method: 'GET',
                    success: (res) => {
                        $('#modalHapus').modal('show');
                        $('input[id="id-kategori-h"]').val(res.data.id)
                        $('.t-before-h').html('Do you want to delete the category with name : <b>'+res.data.nama+'</b> ?')
                    },
                    error: (err) => {
                        console.log(err);
                    }
                })
            })
            $('#formHapus').on('submit', function (e) {
                e.preventDefault();
                var id = $('input[id="id-kategori-h"]').val();
                $.ajax({
                    url: '/admin/category/'+id,
                    method: 'DELETE',
                    success: (res) => {
                        Swal.fire(
                            'Data Successfully Deleted!',
                            res.message,
                            'success'
                        )
                        location.reload();
                        $('#formHapus')[0].reset();
                    },
                    error: (err) => {
                        console.log(err);
                    }
                })
            })
        })
    </script>
@endpush