<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                    <div class="modal-body">
                    <form action="{{ route('tag.update', 'test') }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="nama">Tag Name</label>
                            <input id="nama" name="nama" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>