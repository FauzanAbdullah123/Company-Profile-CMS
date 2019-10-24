@extends('layouts.admin')

@section('title-website')
    Edit Service
@endsection

@section('title')
    Edit Service
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            </div>
            <div class="box-body">
                <form action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-group row mb-4">
                        <label for="" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                        <div class="col-sm-12 col-md-10">
                            @if (isset($service) && $service->image)
                            <p>
                                <img src="{{ asset('/assets/img/service/'. $service->image.'') }}" alt="image" width="150px" height="150px" style="border-radius: 6%">
                            </p>
                            @endif
                            <input class="form-control" type="file" name="image" value="{{ $service->image }}" required>
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"  value="{{ $service->title }}" type="text" name="title" required>
                            @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>
                        </div>
                        <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea id="desc" rows="8" cols="30" type="text" name="desc" class="form-control" required>{{ $service->desc }}</textarea>
                            @if ($errors->has('desc'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('desc') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Service</label>
                        <div class="col-sm-12 col-md-10">
                        <select name="catservice" class="form-control" required>
                            @foreach($catservice as $data)
                                <option value="{{ $data->id }}"
                                    {{ $service->catservice->id ==
                                        $data->id ? 'selected="selected"' : '' }}>
                                    {{ $data->nama }}
                                </option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Other Service</label>
                        <div class="col-sm-12 col-md-10">
                        <select style="width:100%;" name="otherservice[]" id="select2" class="form-control multiple" required multiple>
                            <option value="">- Choose Other Service -</option>
                                @foreach ($otherservice as $data)
                                    <option value="{{ $data->id }}" {{ (in_array($data->id, $selected)) ? 'selected="selected"' : '' }}>
                                        {{ $data->title }}</option>
                                @endforeach
                        </select>
                        @if ($errors->has('otherservice'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('otherservice') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <div class="pull-right" style="margin-right:20px; margin-top:50px;">
                            <button class="btn btn-light"><a href="{{ route('service.index') }}">Back</a></button>
                            <button type="submit" class="btn btn-primary">Edit Service</button>
                        </div>
                    </div>
                </form>
            </div>
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
        $(document).ready(function () {
        $('#select2').select2();
    })
    </script>
@endpush