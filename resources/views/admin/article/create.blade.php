<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>

                <div class="modal-body">
                <form action="{{ route('article.store') }}" method="post" ENCTYPE="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Title</label>
                        <input id="judul" class="form-control" type="text" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea id="editor1" rows="8" cols="30" type="text" name="konten" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                       <input type="file" class="form-control" name="foto" required>
                    </div> 
                    @php
                        $category = \App\Category::all();
                    @endphp
                    <div class="form-group">
                         <label for="">Category</label>
                        <select name="category" class="form-control" required>
                        @foreach($category as $data)
                            <option value="{{ $data->id }}">
                                {{ $data->nama }}
                            </option>
                        @endforeach
                        </select>
                    </div>
                    @php
                        $tag = \App\Tag::all();
                    @endphp
                    <div class="form-group">
                        <label for="">Tag</label>
                       <select name="tag[]" id="select2" class="form-control multiple" multiple required>
                        @foreach($tag as $data)
                            <option value="{{ $data->id }}">
                                {{ $data->nama }}
                            </option>
                        @endforeach
                       </select>
                   </div>
                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>