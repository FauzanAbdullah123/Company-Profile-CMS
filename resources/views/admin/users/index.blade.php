@extends('layouts.admin')

@section('title-website') Manage Users @endsection
@section('title') <h1 style="margin-left: 2%; margin-top: 15px; font-size: 35px;"><b>Manage Users</b></h1> @endsection

@section('content')
@include('admin.users.create')

<style>
    .success 
    {
        background-color: #4CAF50;
    } /* Green */
    .danger 
    {
        background-color: #f44336;
    }
</style>

@if ($message = Session::get('success'))
<div class="container-fluid">
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
        <p>{{ $message }}</p>
    </div>
</div>
@endif

 <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                        <button id="tambah-data" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalAdd">Add Data User</button>
                        </h3>
                    </div>


<div class="box-body">
    <table class="table table-bordered table-hover">
        <tr>
        <th>No</th>
        <th>Name</th>
        <th>Roles</th>
        <th>Status</th>
        <!-- <th>Status</th> -->
        <th width="200px">Action</th>
        </tr>
        @foreach ($data as $key => $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                <label class="badge badge-success">{{ $v }}</label>
                @endforeach
            @endif
            </td>
            <td>
                @if($user->isOnline())
                    <span class="badge success">Online</span>
                @else
                    <span class="badge danger">Offline</span>
                @endif
            </td>

            <td>
            <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}" title="Show User"><i class="fa fa-eye" aria-hidden="true"></i></a>

            @if ($user->id != 1)
                <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}" title="Edit User"><i class="fa fa-edit"></i></a>
            @endif 

            @if( ($user->id != $user->isOnline()) && $user->id != 1 )
                {!! Form::open([
                'method' => 'DELETE',
                'route' => ['users.destroy', $user->id],
                'style'=>'display:inline'
                ]) !!}

                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-sm',
                        'title' => 'Delete User',
                        'onclick'=>'return confirm("Confirm delete?")'
                    )) !!}
                {!! Form::close() !!}
            @endif
            </td>
        </tr>
    @endforeach
    </table>
</div>

{!! $data->render() !!}

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

@endpush