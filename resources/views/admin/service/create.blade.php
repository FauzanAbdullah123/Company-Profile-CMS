<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
                <div class="modal-body">
                <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" required>
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" name="title" required>
                         @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                         @endif
                         </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="desc" rows="8" cols="30" type="text" name="desc" class="form-control" required></textarea>
                         @if ($errors->has('desc'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('desc') }}</strong>
                            </span>
                        @endif
                        </div>
                        @php
                            $catservice = \App\Catservice::all();
                        @endphp
                        <div class="form-group">
                            <label for="">Category Service</label>
                            <select name="catservice" class="form-control" required>
                                <option value="">- Choose Category Service -</option>
                                @foreach($catservice as $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @php
                            $otherservice = \App\OtherService::all();
                        @endphp
                        <div class="form-group">
                            <label for="">Other Service</label>
                            <select style="width:100%;" name="otherservice[]" id="select2" class="form-control multiple" required multiple>
                                <option value="">- Choose Other Service -</option>
                                @foreach($otherservice as $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->title }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('otherservice'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('otherservice') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>